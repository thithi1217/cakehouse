<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Cart;
use Illuminate\Support\Facades\Redirect;
session_start();
class CartController extends Controller
{
    public function save_cart(Request $request){
    	
    	$productId = $request->productid_hidden;
    	$quantity = $request->qty;
    	$product_info = DB::table('tbl_product')->where('product_id',$productId)->first();

    	$data['id']=$product_info->product_id;
    	$data['qty']=$quantity;
    	$data['name']=$product_info->product_name;
    	$data['price']=$product_info->product_price;
    	$data['weight']=$product_info->product_price;
    	$data['options']['image']=$product_info->product_image;
    	Cart::add($data);
    	//Cart::destroy();

    	return Redirect::to('/show-cart');
    }
    public function add_cart_ajax(Request $request){
        
        $data = $request->all();
        
        $session_id = substr(md5(microtime()), rand(0,26),5);
        $cart = Session::get('cart');
        if ($cart==true) {
            $is_available = 0;
            foreach ($cart as $key => $val) {
                if ($val['product_id']==$data['product_id']) {
                    $is_available++;
                }
            }
            if ($is_available==0) {
                $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id' => $data['cart_product_id'],
                'product_image' => $data['cart_product_image'],
                'product_qty' => $data['cart_product_qty'],
                'product_price' => $data['cart_product_price'],
            );
                Session::put('cart',$cart);
            }
        }else{
            $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id' => $data['cart_product_id'],
                'product_image' => $data['cart_product_image'],
                'product_qty' => $data['cart_product_qty'],
                'product_price' => $data['cart_product_price'],
            );
        }
        Session::put('cart',$cart);
        Session::save();
        // Cart::destroy();

        // return Redirect::to('/trang-chu');
    }
    public function cart_ajax(Request $request){
        $meta_desc = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $meta_keywords = "banh ngot, banh kem, bánh ngọt";
        $meta_title = "Cake Bakery - Giỏ hàng của bạn";
        $url_canonical = $request->url();

        $cate_product = DB::table('tbl_category_product')->get();
        return view('pages.cart.cart_ajax')->with('category',$cate_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
    public function show_cart(Request $request){
        $meta_desc = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $meta_keywords = "banh ngot, banh kem, bánh ngọt";
        $meta_title = "Cake Bakery - Giỏ hàng của bạn";
        $url_canonical = $request->url();

    	$cate_product = DB::table('tbl_category_product')->get();
    	return view('pages.cart.show_cart')->with('category',$cate_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
    public function delete_to_cart($rowId){
        

    	Cart::update($rowId,0);
    	return Redirect::to('/show-cart');
    }
    public function update_cart_qty(Request $request){
        
    	$rowId = $request->rowId_cart;
    	$quantity=$request->qty;
    	Cart::update($rowId,$quantity);
    	return Redirect::to('/show-cart');
    }
}
