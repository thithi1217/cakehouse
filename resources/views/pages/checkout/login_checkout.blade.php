@extends('welcome')
@section('content')


<div class="row login">
                    <div class="col-lg-6 left">
                        <h2>Khách hàng mới</h2>
                        <div class="khachhangmoi">
                        	<p><b>Đăng ký tài khoản</b></p>

          					<p>Bằng cách tạo tài khoản bạn có thể mua sắm nhanh hơn, cập nhật tình trạng đơn hàng, theo dõi những đơn hàng đã đặt và đặc biệt là sẽ được hưởng nhiều chương trình ưu đãi hơn nữa!</p>

          				<form action="{{URL::to('/add-customer')}}" method="post" enctype="multipart/form-data">
          					{{csrf_field()}}
				          <div class="content">

				            
				          	<b>Họ tên:</b><br />

				            <input type="text" name="customer_name" value="" />

				            <br />
				            <b>Địa chỉ E-Mail:</b><br />

				            <input type="text" name="customer_email" value="" />

				            <br />

				            <b>Mật khẩu:</b><br />

				            <input type="password" name="customer_password" value="" />

				            <br />
				            <b>Số điện thoại:</b><br />

				            <input type="text" name="customer_phone" value="" />

				            <br />

				            <a href="#" class="quenmatkhau">Quên mật khẩu</a><br />

				            <br />

				             <button class="pest_btn" type="submit">Đăng ký</button>

				            
				          </div>

				        </form>
          					

                        </div>
                    </div>
                    <div class="col-lg-6 right">
                        <h2>Khách hàng cũ</h2>

				        <form action="{{URL::to('/login-customer')}}" method="post" enctype="multipart/form-data">
				        	{{csrf_field()}}
				          <div class="content">

				            <p>Tôi là khách hàng cũ</p>

				            <b>Địa chỉ E-Mail:</b><br />

				            <input type="text" name="email_account" value="" />

				            <br />

				            <b>Mật khẩu:</b><br />

				            <input type="password" name="password_account" value="" />

				            <br />

				            <a href="#" class="quenmatkhau">Quên mật khẩu</a><br />

				            <br />

				            <button class="pest_btn update" type="submit">Đăng nhập</button>

				            
				          </div>

				        </form>
                    </div>
                    
                </div>





@endsection