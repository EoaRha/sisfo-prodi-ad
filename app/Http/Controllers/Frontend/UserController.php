<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::where('user_id', Auth::id())->get();
        if ($request->has('searchord')) {
            $orders = Order::where('tracking_no', 'LIKE', '%'.$request->searchord.'%')->paginate(15);
        }else{
            $orders = Order::where('payment_status', '0')->orWhere('payment_status', 'pending')->paginate(15);
        }
        return view('frontend.orders.index', compact('orders'));
    }

    public function show_ajax(Request $request)
    {
        if($request->ajax())
        {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $orders = Order::where('payment_status', '0')->orWhere('payment_status', 'pending')->orderBy($sort_by, $sort_type)->get();
            return view('frontend.orders.ajax_data', compact('orders'));
        }
    }

    public function get_token(Request $request, $id){

    $orders = Order::where('id', $id)->where('user_id', Auth::id())->first();

    // Set your Merchant Server Key
    \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
    // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    \Midtrans\Config::$isProduction = false;
    // Set sanitization on (default)
    \Midtrans\Config::$isSanitized = true;
    // Set 3DS transaction for credit card to true
    \Midtrans\Config::$is3ds = true;
     

    $params = array(
        'transaction_details' => array(
            'order_id' => $orders->tracking_no,
            'gross_amount' => $orders->total,
        ),
        'customer_details' => array(
            'first_name' => $orders->fname,
            'last_name' => $orders->lname,
            'email' => $orders->email,
            'phone' => $orders->phone,
        ),
    );
     
    $snapToken = \Midtrans\Snap::getSnapToken($params);
    return view('frontend.orders.bayar', compact('snapToken', 'orders'));
    }

    public function get_result(Request $request, $id)
    {
        $json = json_decode($request->input('json'));
        $order = Order::find($id);
        $order->payment_status = $json->transaction_status;
        $order->transaksi_id = $json->transaction_id;
        $order->transaksi_time = $json->transaction_time;
        $order->payment_type = $json->payment_type;
        $order->payment_code = isset($json->payment_code) ? $json->payment_code : null;
        $order->pdf_url = isset($json->pdf_url) ? $json->pdf_url : null;
        return $order->update() ? redirect(url('my-orders'))->with('alert-success', 'Order Berhasil diProses!') : redirect(url('my-orders'))->with('alert-failed', 'Terjadi Keselahan!');
    }

    public function view($id)
    {
        $orders = Order::where('id', $id)->where('user_id', Auth::id())->first();
        return view('frontend.orders.view', compact('orders'));
    }

    public function history()
    {
        $orders = Order::where('payment_status', 'capture')->orWhere('payment_status', 'settlement')->get();
        $orderpag = Order::paginate(15);
        return view('frontend.orders.history', compact('orders', 'orderpag'));
    }

    public function historytrans($id)
    {
        $orders = Order::where('id', $id)->first();
        return view('frontend.orders.detail', compact('orders'));
    }

    public function bukti()
    {
        $orders = Order::where('payment_status', 'pending')->orWhere('payment_status', 'capture')->orWhere('payment_status', 'settlement')->get();
        return view('frontend.orders.bukti', compact('orders'));
    }

    public function upload($id)
    {
        $orders = Order::where('id', $id)->first();
        return view('frontend.orders.upload', compact('orders'));
    }

    public function updatebukti(Request $request, $id)
    {
        $orders = Order::find($id);
        if($request->hasFile('bukti'))
        {
            $file = $request->file('bukti');
            $ext = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName().'.'.$ext;
            $file->move('assets/uploads/bukti/',$filename);
            $orders->bukti = $filename;
        }
        $orders->update();
        return redirect('upload-bukti')->with('status', "Bukti Pembayaran Berhasil diUpload");
    }

}
