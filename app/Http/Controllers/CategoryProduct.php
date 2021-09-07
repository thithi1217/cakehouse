<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

use Illuminate\Support\Facades\Redirect;
session_start();
class CategoryProduct extends Controller
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
    public function add_category_product(){
        $this->AuthLogin();
    	return view('admin.add_category_product');
    }
    public function all_category_product(){
        $this->AuthLogin();
    	$all_category_product = DB::table('tbl_category_product')->get(); 
    	$manager_category_product = view('admin.all_category_product')->with('all_category_product',$all_category_product);
    	// hiển thị dữ liệu đã lấy ở trên vào trang all_category
    	return view('admin_layout')->with('admin.all_category_product',$manager_category_product);
    	//trang admin_layout chứa all_category
    }
    public function save_category_product(Request $request){
        $this->AuthLogin();
    	 $data=array();
    	 $data['category_name']=$request->category_product_name;
    	 $data['category_desc']=$request->category_product_desc;
    	 $data['category_status']=$request->category_product_status;

    	 DB::table('tbl_category_product')->insert($data);
    	 Session::put('message','Thêm danh mục thành công!');
    	 return Redirect::to('add-category-product'); //quay ve
    	 
    }
    public function edit_category_product(Request $request,$category_product_id){
        $meta_desc = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $meta_keywords = "banh ngot, banh kem, bánh ngọt";
        $meta_title = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $url_canonical = $request->url();

        $this->AuthLogin();
        $edit_category_product = DB::table('tbl_category_product')->where('category_id',$category_product_id)->get(); //so sanh cate_id voi cate_product_id
        $manager_category_product = view('admin.edit_category_product')->with('edit_category_product',$edit_category_product);
        return view('admin_layout')->with('admin.edit_category_product',$manager_category_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
    public function delete_category_product(Request $request,$category_product_id){
        
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->delete();
        Session::put('message','Xóa danh mục thành công!');
        return Redirect::to('all-category-product');
    }
    public function update_category_product(Request $request,$category_product_id){
        $this->AuthLogin();
        $data = array();
        $data['category_name']=$request->category_product_name;
        $data['category_desc']=$request->category_product_desc;
        DB::table('tbl_category_product')->where('category_id',$category_product_id)->update($data);
        Session::put('message','Cập nhật danh mục thành công!');
        return Redirect::to('all-category-product');
    }


    //end function admin page
    
    public function show_category(Request $request,$category_id){
        $meta_desc = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $meta_keywords = "banh ngot, banh kem, bánh ngọt";
        $meta_title = "Cake Bakery - Tất cả sản phẩm";
        $url_canonical = $request->url();

        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        

        $category_by_id = DB::table('tbl_product')->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')->where('tbl_product.category_id',$category_id)->get();

        return view('pages.category.show_category')->with('category',$cate_product)->with('category_by_id',$category_by_id)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
    
}
