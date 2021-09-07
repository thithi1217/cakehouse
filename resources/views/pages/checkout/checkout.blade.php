@extends('welcome')
@section('content')
<section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Thanh toán</h3>
        			<ul>
        				<li><a href="index.html">Trang chủ</a></li>
        				<li><a href="checkout.html">Thanh toán</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Billing Details Area =================-->    
        <section class="billing_details_area p_100">
            <div class="container">
                <div class="return_option">
                	<h4>Chưa có tài khoản? <a href="#">Bấm vào đây để đăng nhập</a></h4>
                </div>
                <div class="row">
                	<form class="billing_form row" action="{{URL::to('/save-checkout-customer')}}" method="post" id="contactForm" novalidate="novalidate">
                				{{csrf_field()}}
                	<div class="col-lg-7">
               	    	<div class="main_title">
               	    		<h2>Chi tiết đơn hàng</h2>
               	    	</div>
                		<div class="billing_form_area">
                			
								<div class="form-group col-md-12">
								    <label for="company">Họ tên</label>
									<input type="text" class="form-control" id="company" name="shipping_name" placeholder="Vui lòng nhập họ tên">
								</div>
								
								<div class="form-group col-md-12">
								    <label for="address">Địa chỉ *</label>
									<input type="text" class="form-control" id="address" name="shipping_address" placeholder="Địa chỉ nhận hàng">
									
								</div>

								<div class="form-group col-md-6">
								    <label for="email">Địa chỉ email *</label>
									<input type="email" class="form-control" id="email" name="shipping_email" placeholder="Email Address">
								</div>
								<div class="form-group col-md-6">
								    <label for="phone">Số điện thoại *</label>
									<input type="text" class="form-control" id="phone" name="shipping_phone" placeholder="Nhập số điện thoại của bạn">
								</div>
								<div class="select_check col-md-12">
									<div class="creat_account">
										<input type="checkbox" id="f-option" name="selector">
										<label for="f-option">Tạo tài khoản mới?</label>
										<div class="check"></div>
									</div>
								</div>
								
								<div class="form-group col-md-12">
									<label for="phone">Ghi chú</label>
									<textarea class="form-control" name="shipping_notes" id="message" rows="1" placeholder="Ghi chú đơn hàng"></textarea>
								</div>
								
							
                		</div>
                	</div>
                	<div class="col-lg-5">
                		<div class="order_box_price">
                			<?php
								$content=Cart::content();
							?>
                			<div class="main_title">
                				<h2>Đơn hàng</h2>
                			</div>
							<div class="payment_list">
								
								<div class="price_single_cost">
									
									<h5>Sản phẩm <span>Thành tiền</span></h5>
									@foreach($content as $v_content)
									<h5>{{$v_content->name}} x {{$v_content->qty}} 
										<span>{{number_format($v_content->price*$v_content->qty,0,',','.').' '.'đ'}}</span>
									</h5>
									@endforeach
									<h4>Tổng tiền hàng
										 <span>
										{{Cart::subtotal().' đ'}}
										 	
										 </span>
									</h4>
									<h5>Phí vận chuyển<span class="text_f">Free</span></h5>
									<h3>Tổng thanh toán<span>{{Cart::total().'đ'}}</span></h3>
								</div>
								
								<div id="accordion" class="accordion_area">
									<div class="card">
										<div class="card-header" id="headingOne">
											<h5 class="mb-0">
												<input class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" name="payment_option" value="1" type="checkbox">
												Ví điện tử
												</input>
											</h5>
										</div>
										<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
											<div class="card-body">
											Ví Momo / ZaloPay
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingTwo">
											<h5 class="mb-0">
												<input class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" name="payment_option" value="2" type="checkbox">
												Thẻ tín dụng
												</input>
											</h5>
										</div>
										<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
											<div class="card-body">
											Thẻ tín dụng ngân hàng nội địa
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingThree">
											<h5 class="mb-0">
												<input class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" name="payment_option" value="3" type="checkbox">
												Thanh toán khi nhận hàng
												<img src="img/checkout-card.png" alt="">
												</input>
												
											</h5>
										</div>
										<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
											<div class="card-body">
											Thanh toán trực tiếp khi nhận hàng
											</div>
										</div>
									</div>
								</div>
								<button type="submit" class="pest_btn send" name="send_order">Đặt hàng</button>
							</div>
						</div>
                	</div>
                	<button type="submit" class="pest_btn" name="send_order">Đặt hàng</button>
                	</form>
                </div>
            </div>
        </section>
@endsection