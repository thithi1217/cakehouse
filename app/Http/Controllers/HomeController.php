<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

use Illuminate\Support\Facades\Redirect;
session_start();
class HomeController extends Controller
{
    public function index(Request $request){
        //seo
        $meta_desc = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $meta_keywords = "banh ngot, banh kem, bánh ngọt";
        $meta_title = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $url_canonical = $request->url();
        //
    	$cate_product = DB::table('tbl_category_product')->get();
    	$all_product = DB::table('tbl_product')->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')->where('product_status','1')->orderby('product_id','desc')->get();
    	return view('pages.home')->with('category',$cate_product)->with('all_product',$all_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
    public function san_pham(Request $request){
        $meta_desc = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $meta_keywords = "banh ngot, banh kem, bánh ngọt";
        $meta_title = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $url_canonical = $request->url();


    	$cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
    	$all_product = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->get();
    	return view('pages.san_pham')->with('category',$cate_product)->with('all_product',$all_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
    public function details_product(Request $request, $product_id){
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

    public function tim_kiem(Request $request){
        $meta_desc = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $meta_keywords = "banh ngot, banh kem, bánh ngọt";
        $meta_title = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $url_canonical = $request->url();

        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        
        $key = $request->keyword;
        $search_product = DB::table('tbl_product')->where('product_name','like','%'.$key.'%')->get();
        return view('pages.sanpham.search')->with('category',$cate_product)->with('search_product',$search_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
    //Gioi thieu
    public function gioi_thieu(Request $request){
        //seo
        $meta_desc = "Cake Bakery - Cửa hàng bán bánh ngọt";
        $meta_keywords = "banh ngot, banh kem, bánh ngọt";
        $meta_title = "Câu chuyện thương hiệu - Cake Bakery";
        $url_canonical = $request->url();
        //
        $cate_product = DB::table('tbl_category_product')->get();
        $all_product = DB::table('tbl_product')->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')->where('product_status','1')->orderby('product_id','desc')->get();
        return view('pages.gioi_thieu')->with('category',$cate_product)->with('all_product',$all_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
}
