@extends('welcome')
@section('details')

<section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Chi tiết sản phẩm</h3>
        			<ul>
        				<li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
        				<li><a href="{{URL::to('/san-pham')}}">Chi tiết sản phẩm</a></li>
        			</ul>
        		</div>
        	</div>
</section>

<section class="product_details_area p_100">
        	<div class="container">
        		@foreach($product_details as $key => $details)
        		<div class="row product_d_price">
        			<div class="col-lg-6">
						<div class="product_img">
							<img class="img-fluid" src="{{URL::to('public/uploads/product/'.$details->product_image)}}" alt="" height="500" width="500">
						</div>
        			</div>
        			<div class="col-lg-6">
        				<form action="{{URL::to('/save-cart')}}" method="post">
        					{{csrf_field()}}
        				<div class="product_details_text">
        					<h4>{{$details->product_name}}</h4>
        					<p>{{$details->product_content}}</p>
        					<h5><span>{{number_format($details->product_price,0,',','.').' '.'đ'}}</span></h5>
        					<div class="product__details__quantity">
                	                            <div class="quantity">
                	                                
                	                                    <input name="qty"  type="number" style="width: 50px" min="1" value="1">
                	                                    <input name="productid_hidden" type="hidden" value="{{$details->product_id}}">
                	                                
                	                            </div>
                                        	</div>
                        	               <button class="pink_more" type="submit">Add to Cart</button>
        					{{-- <a class="pink_more" href="{{URL::to('/save-cart')}}">Add to Cart</a> --}}
        				</div>
        				</form>
        			</div>
        		</div>
        		
        		<div class="product_tab_area">
					<nav>
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Mô tả</a>
							<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Chi tiết</a>
							<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Đánh giá</a>
						</div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							<p>{{$details->product_desc}}</p>
						</div>
						<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							<p>{{$details->product_content}}</p>
						</div>
						<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
						</div>
					</div>
        		</div>
        		@endforeach
        	</div>
</section>

<!--================Similar Product Area =================-->
        <section class="similar_product_area p_100">
        	<div class="container">
        		<div class="main_title">
        			<h2>Similar Products</h2>
        		</div>
        		<div class="row similar_product_inner">
        			@foreach($similar_product as $key => $similar)
        			<a href="{{URL::to('/chi-tiet-san-pham/'.$similar->product_id)}}">
        			<div class="col-lg-3 col-md-4 col-6">
        				<div class="cake_feature_item">
							<div class="cake_img">
								<img src="{{URL::to('public/uploads/product/'.$similar->product_image)}}" alt="" height="250" width="270">
							</div>
							<div class="cake_text">
								<h3>{{$similar->product_name}}</h3>
								<h4>{{number_format($similar->product_price,0,',','.').' '.'đ'}}</h4>
								
								<a class="pest_btn" href="{{URL::to('/save-cart')}}">Add to cart</a>
							</div>
						</div>
        			</div>
        			</a>
        			@endforeach
        		</div>
        	</div>
</section>
        <!--================End Similar Product Area =================-->
@endsection