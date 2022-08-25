<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {

        $cartitems = Cart::where('user_id', Auth::id())->get();
        // $old_cartitems = Cart::where('user_id', Auth::id())->get();
        // foreach ($old_cartitems as $item)
        // {
        //     if (!Product::where('id', $item->prod_id)->where('qty', '>=', $item->prod_qty)->exists())
        //     {
        //         $removeItem = Cart::where('user_id', Auth::id())->where('prod_id', $item->prod_id)->first();
        //         $removeItem->delete();
        //     }
        // }
        
        return view('frontend.checkout', compact('cartitems',));
    }
    
    
    public function get_city()
    {
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://pro.rajaongkir.com/api/city",
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "key: c687cd9914238ec48de1a869af59a7ff"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
              $response=json_decode($response,true);
              $data_kota = $response['rajaongkir']['results'];

              echo "<option value''>-- Pilih Kota --</option>";
              
              foreach ($data_kota as $key => $perkota)
              {
                echo "<option value='".$perkota["city_name"]."'
                        provinsi='".$perkota["province"]."'
                        id_kota='".$perkota["city_id"]."'
                        kota='".$perkota["city_name"]."'
                        tipe='".$perkota["type"]."'
                        kode_pos='".$perkota["postal_code"]."'
                        >";
                echo $perkota["type"]." ";
                echo $perkota["city_name"];
                echo "</option>";
              }

        }
    }


    public function get_subdistrict()
    {
        
        $id_kota_terpilih = $_POST["id_kota"];
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://pro.rajaongkir.com/api/subdistrict?city=".$id_kota_terpilih,
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "key: c687cd9914238ec48de1a869af59a7ff"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
            $response=json_decode($response,true);
            $data_kec = $response['rajaongkir']['results'];

            echo "<option value=''>-- Pilih Kecamatan --</option>";

            foreach ($data_kec as $key => $perkecamatan)
            {
                echo "<option value='".$perkecamatan["subdistrict_name"]."'
                    provinsi='".$perkecamatan["province"]."'
                    kota='".$perkecamatan["city"]."'
                    id_kecamatan='".$perkecamatan["subdistrict_id"]."'
                    kecamatan='".$perkecamatan["subdistrict_name"]."'
                    type='".$perkecamatan["type"]."'
                    >";
                echo $perkecamatan["type"]." ";
                echo $perkecamatan["subdistrict_name"];
                echo "</option>";
            }

        }
    }

    public function get_ongkir()
    {

        $ekspedisi = $_POST["ekspedisi"];
        $kecamatan = $_POST["kecamatan"];
        $berat = $_POST["berat"];
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://pro.rajaongkir.com/api/cost",
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "origin=1578&originType=subdistrict&destination=".$kecamatan."&destinationType=subdistrict&weight=".$berat."&courier=".$ekspedisi,
          CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded",
            "key: c687cd9914238ec48de1a869af59a7ff"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
            $response=json_decode($response,true);
            $data_ongkir = $response['rajaongkir']['results']['0']['costs'];

            echo "<option value=''>-- Pilih Paket --</option>";

            foreach ($data_ongkir as $key => $perongkir)
            {
                echo "<option value='".$perongkir["description"]."'
                    paket='".$perongkir["service"]."'
                    layanan='".$perongkir["description"]."'
                    ongkir='".$perongkir["cost"]["0"]["value"]."'
                    estimasi='".$perongkir["cost"]["0"]["etd"]."'
                    >";
                echo $perongkir["service"]." - ";
                echo "Rp ".number_format($perongkir["cost"]["0"]["value"])." - ";
                echo $perongkir["cost"]["0"]["etd"]."hari";
                echo "</option>";
            }
        }
    }
    
    

    public function placeorder(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->fname = $request->input('fname');
        $order->lname = $request->input('lname');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->alamat = $request->input('alamat');
        $order->provinsi = $request->input('provinsi');
        $order->tipe = $request->input('tipe');
        $order->kota = $request->input('kota');
        $order->kecamatan = $request->input('kecamatan');
        $order->kode_pos = $request->input('kode_pos');
        $order->ekspedisi = $request->input('ekspedisi');
        $order->paket = $request->input('paket');
        $order->estimasi = $request->input('estimasi');
        $order->total_belanja = $request->input('total_belanja');
        $order->berat = $request->input('berat');
        $order->ongkir = $request->input('ongkir');
        $order->total = $request->input('total');
        
        $random = rand(0000000000,99999999999999);
        $order->tracking_no = 'NHI'."-".$random;
        $order->save();

        $cartitems = Cart::where('user_id', Auth::id())->get();
        foreach($cartitems as $item)
        {
            OrderItem::create([
                'order_id' => $order->id,
                'prod_id' => $item->prod_id,
                'qty' => $item->prod_qty,
                'harga' => $item->products->selling_price,
            ]);

            $prod = Product::where('id', $item->prod_id)->first();
            $prod->qty = $prod->qty - $item->prod_qty;
            $prod->update();
        }

        if (Auth::user()->alamat == NULL)
        {
            $user = User::where('id', Auth::id())->first();
            $user->name = $request->input('fname');
            $user->lname = $request->input('lname');
            $user->phone = $request->input('phone');
            $user->alamat = $request->input('alamat');
            $user->provinsi = $request->input('provinsi');
            $user->tipe = $request->input('tipe');
            $user->kota = $request->input('kota');
            $user->kecamatan = $request->input('kecamatan');
            $user->kode_pos = $request->input('kode_pos');
            $user->update();
        }

        $cartitems = Cart::where('user_id', Auth::id())->get();
        Cart::destroy($cartitems);

        return redirect('my-orders')->with('status', "Order Berhasil, Silahkan Lakukan Pembayaran");
    }
}
