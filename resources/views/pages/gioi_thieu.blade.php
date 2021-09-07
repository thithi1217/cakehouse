@extends('welcome')
@section('content')
<!--================End Main Header Area =================-->
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Câu chuyện thương hiệu</h3>
        			<ul>
        				<li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
        				<li><a href="{{URL::to('/gioi-thieu')}}">Câu chuyện thương hiệu</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Our Bakery Area =================-->
        <section class="our_bakery_area p_100">
        	<div class="container">
        		<div class="our_bakery_text">
        			<h2>Cake Bakery </h2>
        			<p><span>Nhật Bản</span> nổi tiếng là đất nước mặt trời mọc có lối sống giản dị văn minh và có nền văn hóa ẩm thực phong phú. Ẩm thực <span>Nhật Bản</span> không chú trọng nhiều vào gia vị mà chú trọng làm nổi bật hương vị tươi ngon, tinh khiết tự nhiên của món ăn. Chính bởi vậy hương vị món ăn <span>Nhật</span> thường thanh tao, nhẹ nhàng và phù hợp với từng mùa.</p>

                                <p>Được sống và lớn lên tại đất nước có nền văn hoá ẩm thực đặc sắc này, ông <span>Tetsuya Suzuki</span> hồi đó chỉ là một chàng trai trẻ nhưng mang trong mình một niềm đam mê mãnh liệt với việc làm bánh. Đối với ông, đó không chỉ là một món ăn đơn thuần mà đó còn là tâm hồn trong trẻo của nền nghệ thuật ẩm thực đem lại. Từ đó, ông dồn hết thời gian tâm sức học hỏi, để có thể trở thành một nghệ sĩ làm bánh thực thụ.</p>


        		</div>
        		<div class="row our_bakery_image">
        			<div class="col-md-12 col-12">
        				<img class="img-fluid" src="{{('public/frontend/images/our-bakery/banh1.jpg')}}" alt="">
        			</div>
        			{{-- <div class="col-md-4 col-6">
        				<img class="img-fluid" src="{{('public/frontend/images/our-bakery/bakery-2.jpg')}}" alt="">
        			</div>
        			<div class="col-md-4 col-6">
        				<img class="img-fluid" src="{{('public/frontend/images/our-bakery/bakery-3.jpg')}}" alt="">
        			</div> --}}
        		</div>
                        <div class="our_bakery_text">
                                <p>Năm 1976, ông <span>Tetsuya Suzuki</span> đặt chân đến Pháp, trở thành học viên của học viện<span>Le Cordon Bleu</span>  – ngôi trường cổ kính thành lập từ năm 1895, nơi đào tạo nên rất nhiều bếp trưởng cho những nhà hàng gắn sao <span>Michelin</span> trên thế giới.</p>

                                <p>Năm 1978, trở về quê hương, ông <span>Tetsuya Suzuki</span> làm việc cho chuỗi cửa hàng bánh đứng đầu Nhật Bản thời bấy giờ. Tuy công việc bận rộn, nhưng ông không ngừng nghỉ học tập 1 giây phút nào, vẫn tiếp tục nghiên cứu và mong muốn tạo nên những món bánh hoà quyện tinh hoa của ẩm thực phương Tây cùng với văn hoá ẩm thực phương Đông.</p>

                                <p>Tháng 3 năm 1981, ông tốt nghiệp khoá nghiên cứu nghệ thuật làm bánh tại trường<span>Cao Đẳng Chiba (Nhật Bản).</span></p>

                                <p>Năm 1992, ông lần đầu đặt chân đến <span>Việt Nam</span> theo lời mời của một Công Ty Thực Phẩm nổi tiếng. Tại đây, ông giữ vị trí Giám Đốc Sản Xuất và chịu trách nhiệm về các công thức cũng như chất lượng bánh tại Công Ty.</p>

                                <p>12 năm trôi qua thật nhanh, khi công việc chuyển giao kết thúc, chuẩn bị trở lại đất nước của mình, bỗng dưng trong trái tim người đàn ông ấy lại thổn thức một cảm giác lưu luyến khó tả, tình yêu với <span>Việt Nam</span> đã lớn dần trong ông. Sống tại đây, ông như được trở lại quá khứ thời ông còn nhỏ, được thoả sức sáng tạo các công thức và sẻ chia niềm đam mê làm bánh với mọi người. Không mất nhiều thời gian cân nhắc, ông quyết định sẽ gắn bó với <span>Việt Nam</span> đến hết cuộc đời mình...</p>

                                <p>Khi được lại gần tâm sự, ông chia sẻ: “Không hiểu vì lý do gì mà cái duyên của <span>Việt Nam</span> lại đến với một người Nhật như tôi. Biết bao người hỏi tại sao tôi lại chọn <span>Việt Nam</span>, tại sao tôi lại yêu đất nước này đến vậy,... thì đó, chính những chiếc bánh đã như là sợi dây để kết nối tất cả mọi thứ - văn hoá Nhật Bản – Việt Nam – cứ tự nhiên hoà quyện và bền chặt”.</p>

                                <p><span>Đó là lý do tiệm bánh <span>Cake Bakery</span> ra đời!</span></p>

                                
                        </div>
                        <div class="row our_bakery_image">
                                <div class="col-md-12 col-12">
                                        <img class="img-fluid" src="{{('public/frontend/images/error-bg.jpg')}}" alt="">
                                </div>
                                
                        </div>
                        <div class="our_bakery_text">
                                <p>Với 100% nguyên liệu từ thiên nhiên được lựa chọn kỹ càng, an toàn và luôn đảm bảo độ tươi mới, các loại kem không hề thêm bất kỳ phụ gia hay chất bảo quản nào trong quá trình sản xuất, <span>Cake Bakery</span> được khách hàng tin yêu vì không chỉ ở hương vị thơm ngon tuyệt vời mà còn an toàn, đảm bảo cho sức khoẻ. Tất cả những điều đó, bạn sẽ cảm nhận được khi thưởng thức những chiếc bánh tuyệt hảo được làm từ tấm lòng tận tâm của những nghệ nhân <span>Cake Bakery.</span>
                                        
                                <br></br>
                                Gửi đến bạn lời cảm ơn ngọt ngào nhất !</p>


                        </div>
        	</div>
        </section>
        <!--================End Our Bakery Area =================-->
        
        <!--================Bakery Video Area =================-->
        <section class="bakery_video_area">
        	<div class="container">
        		<div class="video_inner">
        			<h3></h3>
        			<p>Mango Cheese Cake</p>
        			<div class="media">
        				<div class="d-flex">
        					<a class="popup-youtube" href="https://www.youtube.com/watch?v=E9gvM522EqI"><i class="flaticon-play-button"></i></a>
        				</div>
        				<div class="media-body">
        					<h5>Watch intro<br/>video cooking</h5>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Bakery Video Area =================-->
        
        <!--================Our Mission Area =================-->
        <section class="our_mission_area p_100">
        	<div class="container">
        		<div class="row our_mission_inner">
        			<div class="col-lg-3">
        				<div class="single_m_title">
        					<h2>Our Mission</h2>
        				</div>
        			</div>
        			<div class="col-lg-9">
        				<div class="mission_inner_text">
        					<h6>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan-tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</h6>
        					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatu</p>
        					<ul class="nav">
        						<li><a href="#">Custom cakes</a></li>
        						<li><a href="#">Birthday cakes</a></li>
        						<li><a href="#">Wedding cakes</a></li>
        						<li><a href="#">European delicacies</a></li>
        					</ul>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Our Mission Area =================-->
        
        <!--================Client Says Area =================-->
        <section class="client_says_area p_100">
        	<div class="container">
        		<div class="client_says_inner">
        			<div class="c_says_title">
        				<h2>What Our Client Says</h2>
        			</div>
        			<div class="client_says_slider owl-carousel">
        				<div class="item">
        					<div class="media">
        						<div class="d-flex">
        							<img src="img/client/client-1.png" alt="">
        							<h3>“</h3>
        						</div>
        						<div class="media-body">
        							<p>Osed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numquam qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
        							<h5>- Robert joe</h5>
        						</div>
        					</div>
        				</div>
        				<div class="item">
        					<div class="media">
        						<div class="d-flex">
        							<img src="img/client/client-1.png" alt="">
        						</div>
        						<div class="media-body">
        							<p>Osed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numquam qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
        							<h5>- Robert joe</h5>
        						</div>
        					</div>
        				</div>
        				<div class="item">
        					<div class="media">
        						<div class="d-flex">
        							<img src="img/client/client-1.png" alt="">
        						</div>
        						<div class="media-body">
        							<p>Osed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numquam qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
        							<h5>- Robert joe</h5>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Client Says Area =================-->
@endsection
