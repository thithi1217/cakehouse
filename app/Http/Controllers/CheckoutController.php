<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Cart;
use Illuminate\Support\Facades\Redirect;
session_start();
class CheckoutController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }
        else{
            return Redirect::to('admin')->send();
        }
    }
    public function login_checkout(Request $request){
        $meta_desc = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $meta_keywords = "banh ngot, banh kem, bánh ngọt";
        $meta_title = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $url_canonical = $request->url();
    	$cate_product = DB::table('tbl_category_product')->get();
    	return view('pages.checkout.login_checkout')->with('category',$cate_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
    public function add_customer(Request $request){
    	$cate_product = DB::table('tbl_category_product')->get();

    	$data  = array();
    	$data['customer_name']=$request->customer_name;
    	$data['customer_email']=$request->customer_email;
    	$data['customer_password']=md5($request->customer_password);
    	$data['customer_phone']=$request->customer_phone;
    	$customer_id = DB::table('tbl_customers')->insertGetId($data);
    	Session::put('customer_id',$customer_id);
    	Session::put('customer_name',$request->customer_name);
    	
    	return Redirect::to('/checkout')->with('category',$cate_product);
    }
    public function checkout(Request $request){
        $meta_desc = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $meta_keywords = "banh ngot, banh kem, bánh ngọt";
        $meta_title = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $url_canonical = $request->url();


    	$cate_product = DB::table('tbl_category_product')->get();
    	return view('/pages.checkout.checkout')->with('category',$cate_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
    public function save_checkout_customer(Request $request){
        $meta_desc = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $meta_keywords = "banh ngot, banh kem, bánh ngọt";
        $meta_title = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $url_canonical = $request->url();

    	$cate_product = DB::table('tbl_category_product')->get();

    	$data  = array();
    	$data['shipping_name']=$request->shipping_name;
    	$data['shipping_email']=$request->shipping_email;
    	$data['shipping_address']=$request->shipping_address;
    	$data['shipping_phone']=$request->shipping_phone;
    	$data['shipping_notes']=$request->shipping_notes;
        $data['payment_method']=$request->payment_option;
        $data['payment_status']='Đang chờ xử lý';

    	$shipping_id = DB::table('tbl_shipping')->insertGetId($data);
    	//Session::put('shipping_id',$shipping_id);
        //insert order
        $order_data  = array();
        $order_data['customer_id']=Session::get('customer_id');
        $order_data['shipping_id']=$shipping_id;
        $order_data['order_total']=Cart::total();
        $order_code=substr(md5(microtime()), rand(0,26),7);
        $order_data['order_code']=$order_code;
        $order_data['order_status']='Đang chờ xử lý';
        $order_id = DB::table('tbl_order')->insertGetId($order_data);

        //inser order_details
        $content = Cart::content();
        foreach ($content as  $v_content) {
            $order_d_data  = array();
            $order_d_data['order_code']=$order_code;
            $order_d_data['product_id']=$v_content->id;
            $order_d_data['product_name']=$v_content->name;
            $order_d_data['product_price']=$v_content->price;
            $order_d_data['product_sales_quantity']=$v_content->qty;
            $result  = DB::table('tbl_order_details')->insertGetId($order_d_data);
        }
        if ($data['payment_method']==1) {
            echo "Momo";
        }elseif($data['payment_method']==2){
            echo "ATM";
        }else{
            echo "tiền mặt";
            Cart::destroy();
            return view('pages.checkout.order_complete')->with('category',$cate_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
        }

    	

    	
    }
    public function logout_checkout(){
    	$cate_product = DB::table('tbl_category_product')->get();

    	Session::flush();

    	return Redirect::to('/login-checkout')->with('category',$cate_product);
    }
    public function login_customer(Request $request){
    	$cate_product = DB::table('tbl_category_product')->get();

    	$email = $request->email_account;
    	$password = md5($request->password_account);
    	$result = DB::table('tbl_customers')->where('customer_email',$email)->where('customer_password',$password)->first();

    	
    	
    	if ($result) {
    		Session::put('customer_id',$result->customer_id);
    		return Redirect::to('/checkout')->with('category',$cate_product);
    	}else{
    		return Redirect::to('/login-checkout')->with('category',$cate_product);
    	}
    	
    }
    public function order_complete(Request $request){
        $meta_desc = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $meta_keywords = "banh ngot, banh kem, bánh ngọt";
        $meta_title = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $url_canonical = $request->url();

        $cate_product = DB::table('tbl_category_product')->get();
        
    	return view('pages.checkout.order_complete')->with('category',$cate_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }

    public function manage_order(Request $request){
        $meta_desc = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $meta_keywords = "banh ngot, banh kem, bánh ngọt";
        $meta_title = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $url_canonical = $request->url();

        $this->AuthLogin();
        $all_order = DB::table('tbl_order')
        ->join('tbl_customers','tbl_order.customer_id','=','tbl_customers.customer_id')
        ->select('tbl_order.*','tbl_customers.customer_name')
        ->orderby('tbl_order.order_id','desc')->get(); //lấy dữ liệu từ bảng gán vào
        $manage_order = view('admin.manage_order')->with('all_order',$all_order);
       
        return view('admin_layout')->with('admin.manage_order',$manage_order)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
    public function view_order(Request $request,$order_code){
        $meta_desc = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $meta_keywords = "banh ngot, banh kem, bánh ngọt";
        $meta_title = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $url_canonical = $request->url();

        $this->AuthLogin();
        $order_details = DB::table('tbl_order_details')->where('order_code',$order_code)->join('tbl_product','tbl_order_details.product_id','=','tbl_product.product_id')->get();
        $order = DB::table('tbl_order')->where('tbl_order.order_code',$order_code)->get();
        foreach ($order as $key => $value) {
            $customer_id = $value->customer_id;
            $shipping_id = $value->shipping_id;
            $order_status = $value->order_status;
        }
        $customer = DB::table('tbl_customers')->where('customer_id',$customer_id)->first();
        $shipping = DB::table('tbl_shipping')->where('shipping_id',$shipping_id)->first();
        // $order_by_id = DB::table('tbl_order')
        // ->join('tbl_customers','tbl_order.customer_id','=','tbl_customers.customer_id')
        // ->join('tbl_shipping','tbl_order.shipping_id','=','tbl_shipping.shipping_id')
        // ->join('tbl_order_details','tbl_order_details.order_id','=','tbl_order.order_id')
        // ->select('tbl_order.*','tbl_customers.*','tbl_shipping.*','tbl_order_details.*')->where('tbl_order.order_id', $order_code)->get();
        // $manage_order_by_id = view('admin.view_order')->with('order_by_id',$order_by_id);
       
        return view('admin.view_order')->with(compact('order_details','customer','shipping','order'))->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
}
