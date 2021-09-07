@extends('welcome')
@section('danhmucsanpham')

<section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Danh mục sản phẩm</h3>
        			<ul>
        				<li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
        				<li><a href="{{URL::to('/san-pham')}}">Danh mục sản phẩm</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Product Area =================-->
        <section class="product_area p_100">
        	<div class="container">
        		<div class="row product_inner_row">
        			<div class="col-lg-9">
        				<div class="row m0 product_task_bar"> 
							<div class="product_task_inner"> 
								<div class="float-left">
									<a class="active" href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a>
									<span>Showing 1 - 10 of 55 results</span>
								</div>
								<div class="float-right">
									<h4>Sort by :</h4>
									<select class="short">
										<option data-display="Default">Default</option>
										<option value="1">Default</option>
										<option value="2">Default</option>
										<option value="4">Default</option>
									</select>
								</div>
							</div>
        				</div>
        				<div class="row product_item_inner">
                            @foreach($category_by_id as $key => $product)
                            <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
        					<div class="col-lg-4 col-md-4 col-6">
        						<div class="cake_feature_item">
                                    <form action="{{URL::to('/save-cart')}}" method="post">
                                    {{csrf_field()}}
    									<div class="cake_img" >
    										<img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" height="250" width="270">
    									</div>
    									<div class="cake_text">
                                            <h3>{{$product->product_name}}</h3>
    										<h4>{{number_format($product->product_price,0,',','.').' '.'đ'}}</h4>
    										<input name="productid_hidden" type="hidden" value="{{$product->product_id}}">
                                            <input name="qty"  type="hidden" style="width: 50px" min="1" value="1">
    										
    									</div>
                                        <button type="submit" class="pest_btn"><a >Thêm giỏ hàng</a></button>
                                    </form>
								</div>
        					</div>
                            </a>
        					@endforeach
        					
        					
        					
        				</div>
        				<div class="product_pagination">
        					<div class="left_btn">
        						<a href="#"><i class="lnr lnr-arrow-left"></i> New posts</a>
        					</div>
        					<div class="middle_list">
								<nav aria-label="Page navigation example">
									<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item active"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">...</a></li>
									<li class="page-item"><a class="page-link" href="#">12</a></li>
									</ul>
								</nav>
        					</div>
        					<div class="right_btn"><a href="#">Older posts <i class="lnr lnr-arrow-right"></i></a></div>
        				</div>
        			</div>
        			<div class="col-lg-3">
        				<div class="product_left_sidebar">
        					<aside class="left_sidebar search_widget">
        						<div class="input-group">
									<input type="text" class="form-control" placeholder="Nhập tên sản phẩm cần tìm...">
									<div class="input-group-append">
										<button class="btn" type="button"><i class="icon icon-Search"></i></button>
									</div>
								</div>
        					</aside>
        					<aside class="left_sidebar p_catgories_widget">
        						<div class="p_w_title">
        							<h3>Danh mục sản phẩm</h3>
        						</div>
        						@foreach($category as $key =>$cate ) 
                                <ul class="list_style">
        							<li><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></li>
        							
        						</ul>
                                @endforeach
        					</aside>
        					
        					<aside class="left_sidebar p_sale_widget">
        						<div class="p_w_title">
        							<h3>Sản phẩm bán chạy</h3>
        						</div>
        						<div class="media">
        							<div class="d-flex">
        								<img src="img/product/sale-product/s-product-1.jpg" alt="">
        							</div>
        							<div class="media-body">
        								<a href="#"><h4>Brown Cake</h4></a>
        								<ul class="list_style">
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        								</ul>
        								<h5>$29</h5>
        							</div>
        						</div>
        						<div class="media">
        							<div class="d-flex">
        								<img src="img/product/sale-product/s-product-2.jpg" alt="">
        							</div>
        							<div class="media-body">
        								<a href="#"><h4>Brown Cake</h4></a>
        								<ul class="list_style">
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        								</ul>
        								<h5>$29</h5>
        							</div>
        						</div>
        						<div class="media">
        							<div class="d-flex">
        								<img src="img/product/sale-product/s-product-3.jpg" alt="">
        							</div>
        							<div class="media-body">
        								<a href="#"><h4>Brown Cake</h4></a>
        								<ul class="list_style">
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        								</ul>
        								<h5>$29</h5>
        							</div>
        						</div>
        						<div class="media">
        							<div class="d-flex">
        								<img src="img/product/sale-product/s-product-4.jpg" alt="">
        							</div>
        							<div class="media-body">
        								<a href="#"><h4>Brown Cake</h4></a>
        								<ul class="list_style">
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        								</ul>
        								<h5>$29</h5>
        							</div>
        						</div>
        					</aside>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
@endsection