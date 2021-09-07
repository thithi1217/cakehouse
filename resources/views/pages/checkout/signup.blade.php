@extends('welcome')
@section('content')


<div class="col-lg-12 signup">
	<h2>Đăng ký tài khoản</h2>
        <div class="col-lg-6 left">
            <form action="#" method="post" enctype="multipart/form-data">
            	
	          <div class="content">
	          	<h4>Thông tin cá nhân</h4>
	            <b>* Họ tên:</b><br />

	            <input type="text" name="email" value="" />

	            <br />

	            <b>* Địa chỉ E-Mail:</b><br />

	            <input type="password" name="password" value="" />

	            <br />
	            <b>* Điện Thoại:</b><br />

	            <input type="text" name="email" value="" />

	            <h4>Địa chỉ của bạn</h4>
	            <br />
	            <b>* Địa chỉ:</b><br />

	            <input type="text" name="email" value="" />

	            <br />
	            <b>* Thành phố / Huyện:</b><br />

	            <input type="text" name="email" value="" />
	            <h4>Mật khẩu</h4>
	            <br />
	            <b>* Mật Khẩu:</b><br />

	            <input type="text" name="email" value="" />

	            <br />
	            <b>* Nhập lại Mật Khẩu:</b><br />

	            <input type="text" name="email" value="" />

	            <br />

	            <a href="#" class="quenmatkhau">Quên mật khẩu</a><br />

	            <br />

	            <button class="pest_btn update" type="submit">Đăng nhập</button>

	            
	          </div>

	        </form>
        </div>
        <div class="col-lg-6 right">
            

	        
        </div>
                    
</div>
@endsection