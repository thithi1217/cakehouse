<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

use Illuminate\Support\Facades\Redirect;
session_start();
class ProductController extends Controller
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
    public function add_product(Request $request){
        $meta_desc = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $meta_keywords = "banh ngot, banh kem, bánh ngọt";
        $meta_title = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $url_canonical = $request->url();

        $this->AuthLogin();
    	$cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
    	
        return view('admin.add_product')->with('cate_product',$cate_product)->with('cate_product',$cate_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    	
    }
    public function all_product(Request $request){
        $meta_desc = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $meta_keywords = "banh ngot, banh kem, bánh ngọt";
        $meta_title = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $url_canonical = $request->url();

        $this->AuthLogin();
    	$all_product = DB::table('tbl_product')->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')->orderby('tbl_product.product_id','desc')->get(); //lấy dữ liệu từ bảng gán vào
    	$manager_product = view('admin.all_product')->with('all_product',$all_product);
    	// hiển thị dữ liệu đã lấy ở trên vào trang all_category
    	return view('admin_layout')->with('admin.all_product',$manager_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    	//trang admin_layout chứa all_category
    }
    public function save_product(Request $request){
        $meta_desc = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $meta_keywords = "banh ngot, banh kem, bánh ngọt";
        $meta_title = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $url_canonical = $request->url();

        $this->AuthLogin();
    	 $data=array();
    	 $data['product_name']=$request->product_name;
    	 $data['product_price']=$request->product_price;
    	 $data['product_desc']=$request->product_desc;
    	 $data['product_content']=$request->product_content;
    	 $data['product_status']=$request->product_status;
    	 $data['category_id']=$request->product_cate;

    	 $get_image =$request->file('product_image');
    	 if($get_image){
    	 	$get_name_image = $get_image->getClientOriginalName();
    	 	$name_image = current(explode('.',$get_name_image)); //current lấy tên đầu tiên, phân tách chuỗi dựa vào dấu chấm mà mình truyền vào biến $get_name_image
    	 	$new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();//lay duoi mo rong
    	 	$get_image->move('public/uploads/product',$new_image);
    	 	$data['product_image'] = $new_image;
    	 	
    	 	DB::table('tbl_product')->insert($data);
	    	Session::put('message','Thêm sản phẩm thành công!');
	    	return Redirect::to('add-product');
    	 }
    	 $data['product_image'] = '';
    	 DB::table('tbl_product')->insert($data);
    	 Session::put('message','Thêm sản phẩm thành công!');
    	 return Redirect::to('all-product'); //quay ve
    	 
    }
    public function edit_product(Request $request,$product_id){
        $meta_desc = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $meta_keywords = "banh ngot, banh kem, bánh ngọt";
        $meta_title = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $url_canonical = $request->url();

        $this->AuthLogin();
    	$cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
    	
        $edit_product = DB::table('tbl_product')->where('product_id',$product_id)->get(); //so sanh cate_id voi cate_product_id
        $manager_product = view('admin.edit_product')->with('edit_product',$edit_product)->with('cate_product',$cate_product);
        return view('admin_layout')->with('admin.edit_product',$manager_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
    public function delete_product(Request $request,$product_id){
        
        DB::table('tbl_product')->where('product_id',$product_id)->delete();
        Session::put('message','Xóa sản phẩm thành công!');
        return Redirect::to('all-product');
    }
    public function update_product(Request $request,$product_id){
    	$data=array();
    	 $data['product_name']=$request->product_name;
    	 $data['product_price']=$request->product_price;
    	 $data['product_desc']=$request->product_desc;
    	 $data['product_content']=$request->product_content;
    	 $data['product_status']=$request->product_status;
    	 $data['category_id']=$request->product_cate;
    	 $get_image =$request->file('product_image');
    	 if($get_image){
    	 	$get_name_image = $get_image->getClientOriginalName();
    	 	$name_image = current(explode('.',$get_name_image)); //current lấy tên đầu tiên, phân tách chuỗi dựa vào dấu chấm mà mình truyền vào biến $get_name_image
    	 	$new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();//lay duoi mo rong
    	 	$get_image->move('public/uploads/product',$new_image);
    	 	$data['product_image'] = $new_image;
    	 	
    	 	DB::table('tbl_product')->where('product_id',$product_id)->update($data);
	    	Session::put('message','Cập nhật sản phẩm thành công!');
	    	return Redirect::to('all-product');
    	 }
    	 
    	 DB::table('tbl_product')->where('product_id',$product_id)->update($data);
    	 Session::put('message','Cập nhật sản phẩm thành công!');
    	 return Redirect::to('all-product'); //quay ve
    }

    public function show_product(Request $request,$product_id){
        $meta_desc = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $meta_keywords = "banh ngot, banh kem, bánh ngọt";
        $meta_title = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $url_canonical = $request->url();

        $this->AuthLogin();
    	//$this->AuthLogin();
        DB::table('tbl_product') -> where('product_id', $product_id) -> update(['product_status' => 0]);
        Session::put('message1', 'Sản phẩm đã Ẩn');
        return Redirect::to('all-product');
    }

    public function hidden_product($product_id){
        $this->AuthLogin();
    	//$this->AuthLogin();
        DB::table('tbl_product') -> where('product_id', $product_id) -> update(['product_status' => 1]);
        Session::put('message2', 'Sản phẩm đã Hiện');
        return Redirect::to('all-product');
        
    }

    //Product Details
    public function details_product(Request $request,$product_id){
        $meta_desc = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $meta_keywords = "banh ngot, banh kem, bánh ngọt";
        $meta_title = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $url_canonical = $request->url();

        $cate_product = DB::table('tbl_category_product')->get();
        $product_details = DB::table('tbl_product')->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')->where('product_status','1')->where('tbl_product.product_id',$product_id)->get();

        foreach($product_details as $key => $details){
            $category_id = $details->category_id;
        }
        

        $similar_product = DB::table('tbl_product')->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')->where('tbl_category_product.category_id',$category_id)->whereNotIn('tbl_product.product_id',[$product_id])->limit(4)->get();


        return view('pages.sanpham.details_product')->with('category',$cate_product)->with('product_details',$product_details)->with('similar_product',$similar_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
}
