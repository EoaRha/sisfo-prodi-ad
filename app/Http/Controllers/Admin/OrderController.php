<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Exports\OrderExport;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        
        $orders = Order::get();
        if ($request->has('searchord')) {
            $orders = Order::where('tracking_no', 'LIKE', '%'.$request->searchord.'%')->paginate(15);
        }else{
            $orders = Order::where('status', '0')->paginate(15);
        }
        return view('admin.orders.index', compact('orders'));
    }

    public function view($id)
    {
        $orders = Order::where('id', $id)->first();
        return view('admin.orders.view', compact('orders'));
    }

    public function updateorder(Request $request, $id)
    {
        $orders = Order::find($id);
        $orders->no_resi = $request->input('no_resi');
        $orders->catatan_admin = $request->input('catatan_admin');
        $orders->status = $request->input('order_status');
        $orders->update();
        return redirect('orders')->with('status', "Update Order Berhasil");
    }

    public function orderhistory()
    {
        $orders = Order::where('status', '1')->get();
        $orderpag = Order::paginate(15);
        return view('admin.orders.history', compact('orders', 'orderpag'));
    }

    public function viewhistory($id)
    {
        $orders = Order::where('id', $id)->first();
        return view('admin.orders.detail', compact('orders'));
    }

    public function export()
    {
        return Excel::download(new OrderExport, 'order.xlsx');
    }
}
