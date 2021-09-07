@extends('welcome')
@section('content')
<section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Giỏ hàng</h3>
        			<ul>
        				<li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
        				<li><a href="{{URL::to('/san-pham')}}">Giỏ hàng</a></li>
        			</ul>
        		</div>
        	</div>
</section>
<!--================Cart Table Area =================-->
        <section class="cart_table_area p_100">
        	<div class="container">
				<div class="table-responsive">
					
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Preview</th>
								<th scope="col">Tên sản phẩm</th>
								<th scope="col">Giá</th>
								<th scope="col">Số lượng</th>
								<th scope="col">Thành tiền</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							{{-- @foreach($content as $v_content) --}}
							@php
								print_r(Session::get('cart'));
							@endphp
							<tr>
								<td>
									<img src="" alt="" width="120">
								</td>
								<td></td>
								<td></td>
								<td>
									<div class="product__details__quantity" style="margin-top: 40px; margin-left: 25px;">
			                            <div >
			                            	<form action="" method="post">
			                            		
			                                
			                                    <input name="qty" class="quantity_cart" type="number" value="">
			                                    <input name="rowId_cart" type="hidden" value="" class="form-control">
			                                
			                                <button class="pest_btn update" type="submit">Update</button>
			                            	</form>
			                            </div>

                        			</div>

								</td>
								<td>
								
								 	
								 </td>
								<td><a href=""><i class="fa fa-times-circle" aria-hidden="true"></i></td>
							</tr>
							{{-- @endforeach --}}
							<tr>
								<td>
									<form class="form-inline"> 
										<div class="form-group"> 
											<input type="text" class="form-control" placeholder="Coupon code">
										</div>
										<button type="submit" class="btn">Apply Coupon</button>
									</form>
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>
									<a class="pest_btn" href="#">Add To Cart</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
       			<div class="row cart_total_inner">
        			<div class="col-lg-7"></div>
        			<div class="col-lg-5">
        				<div class="cart_total_text">
        					<div class="cart_head">
        						Tổng hóa đơn
        					</div>
        					<div class="sub_total">
        						<h5>Tổng <span></span></h5>
        					</div>
        					<div class="sub_total">
        						<h5>Phí vận chuyển <span>Free</span></h5>
        					</div>
        					<div class="total">
        						<h4>Thành tiền <span></span></h4>
        					</div>
        					<div class="cart_footer">
        					{{-- 	<?php
                                $customer_id = Session::get('customer_id');
                                $shipping_id = Session::get('shipping_id');
                                if ($customer_id==NULL){
                                
                             ?>
                             <a class="pest_btn" href="{{URL::to('/login-checkout')}}">Thanh toán</a>
                             <?php 
                            }{
                             ?>
                            
                            <a class="pest_btn" href="{{URL::to('/checkout')}}">Thanh toán</a>
                            <?php 
                            }
                            ?>
                             --}}
        						
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
</section>
@endsection