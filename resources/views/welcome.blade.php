<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{$meta_desc}}">
        <meta name="keywords" content="{{$meta_keywords}}"/>
        <meta name="robots" content="INDEX,FOLLOW"/>
        <link name="canonical" href="{{$url_canonical}}">
        <link rel="icon" href="{{asset('public/frontend/images/fav-icon.png')}}" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>{{$meta_title}}</title>

        <!-- Icon css link -->
        <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/vendors/linearicons/style.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/vendors/flat-icon/flaticon.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/vendors/stroke-icon/style.css')}}" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="{{asset('public/frontend/vendors/revolution/css/settings.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/vendors/revolution/css/layers.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/vendors/revolution/css/navigation.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/vendors/animate-css/animate.css')}}" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="{{asset('public/frontend/vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/vendors/magnifc-popup/magnific-popup.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/vendors/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/vendors/nice-select/css/nice-select.css')}}" rel="stylesheet">
        
        <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
         <!-- Feature Product -->
        <link rel="stylesheet" href="{{asset('public/frontend/css/slicknav.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('public/frontend/css/elegant-icons.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('public/frontend/css/nice-select.css')}}" type="text/css">

        <link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
        <style type="text/css">
            .main_menu_two:before {
                content: "";
                background: url({{asset('public/frontend/images/menu-draw.png')}}) no-repeat scroll center center;
            }
            .banner_area {
              background: url({{asset('public/frontend/images/banner/banner-bg.jpg')}}) no-repeat scroll center center;
              background-size: cover;
              width: 100%;
            }
            .product_area {
              background: url({{asset('public/frontend/images/shop-page-bg.png')}}) no-repeat scroll center center;
              background-size: cover;
            }
            .cover-cake {
              background: url({{asset('public/frontend/images/parallax1bcd2.png')}}) ;
              background-size: cover;
              background-color:#e9e6df;
            }
            .featured{
                background: url({{asset('public/frontend/images/shop-page-bg.png')}}) no-repeat scroll center center;
              background-size: cover;
            }
            .seperator-over-top{
                background: url({{asset('public/frontend/images/seperator-topbcd2.png')}}) ;
             
            }
            .seperator.seperator-image.seperator-over-bottom:before{
                background: url({{asset('public/frontend/images/seperator-bottombcd2.png')}}) ;
             
            }
            .error_area {
              
              background: url({{asset('public/frontend/images/error-bg.jpg')}}) no-repeat scroll center center;
             
            }
            .bakery_video_area {
              background: url({{('public/frontend/images/nino.png')}}) no-repeat scroll center center;
            }

        </style>
        
    </head>
    <body>
        
        <!--================Main Header Area =================-->
        <header class="main_header_area">
            <div class="top_header_area row m0">
                <div class="container">
                    <div class="float-left">
                        <a href="tell:+18004567890"><i class="fa fa-phone" aria-hidden="true"></i> + (1800) 456 7890</a>
                        <a href="mainto:info@cakebakery.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@cakebakery.com</a>
                    </div>
                    <div class="float-right">
                        <ul class="h_social list_style">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <ul class="h_search list_style">
                            <li class="shop_cart"><a href="{{URL::to('/cart-ajax')}}"><i class="lnr lnr-cart"></i></a></li>
                            <li><a class="popup-with-zoom-anim" href="#test-search"><i class="fa fa-search"></i></a></li>
                        </ul>
                        <ul class="h_search list_style">
                            <?php
                                $customer_id = Session::get('customer_id');
                                if ($customer_id!=NULL){
                                
                             ?>
                             <li class="dropdown submenu"><a href="{{URL::to('/logout-checkout')}}">Đăng xuất</a></li>
                             <?php 
                            }else{
                             ?>
                            
                            <li class="dropdown submenu"><a href="{{URL::to('/login-checkout')}}">Đăng nhập</a></li>
                            <?php 
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main_menu_two">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="{{URL::to('/trang-chu')}}"><img src="{{asset('/public/frontend/images/logo-2.png')}}" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="my_toggle_menu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav justify-content-end">
                                <li class="dropdown submenu active">
                                    <a  href="{{URL::to('/trang-chu')}}" >Trang chủ</a>
                                </li>
                                <li class="dropdown submenu">
                                    <a class="dropdown-toggle"  href="{{URL::to('/san-pham')}}" >Sản phẩm</a>
                                    
                                    <ul class="dropdown-menu">
                                        @foreach($category as $key =>$cate )
                                        <li><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></li>
                                        @endforeach
                                    </ul>
                                    
                                </li>
                                
                                <li class="dropdown submenu">
                                    <a class="dropdown-toggle" href="{{URL::to('/gioi-thieu')}}">Giới thiệu</a>
                                    
                                </li>
                                
                                <li class="dropdown submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog.html">Blog with sidebar</a></li>
                                        <li><a href="blog-2column.html">Blog 2 column</a></li>
                                        <li><a href="single-blog.html">Blog details</a></li>
                                    </ul>
                                </li>
                                
                                <li><a href="contact.html">Liên hệ</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--================End Main Header Area =================-->
        <!--================Slider Area =================-->
        @yield('slider')
        <!--================End Slider Area =================-->
        @yield('sanpham')
        
        @yield('danhmucsanpham')

        @yield('details')
        <!--================Welcome Area =================-->
       
        @yield('content')
        
        <!--================End Welcome Area =================-->
        
        <!--================Service We offer Area =================-->
        @yield('service')
        <!--================End Service We offer Area =================-->
        
        <!--================Discover Menu Area =================-->
        <!--
        <section class="discover_menu_area menu_d_two">
            <div class="discover_menu_inner">
                <div class="container">
                    <div class="single_pest_title">
                        <h2>Services We offer</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="discover_item_inner">
                                <div class="discover_item">
                                    <h4>Double Chocolate Pie</h4>
                                    <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                                </div>
                                <div class="discover_item">
                                    <h4>Double Chocolate Pie</h4>
                                    <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                                </div>
                                <div class="discover_item">
                                    <h4>Double Chocolate Pie</h4>
                                    <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                                </div>
                                <div class="discover_item">
                                    <h4>Double Chocolate Pie</h4>
                                    <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="discover_item_inner">
                                <div class="discover_item">
                                    <h4>Double Chocolate Pie</h4>
                                    <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                                </div>
                                <div class="discover_item">
                                    <h4>Double Chocolate Pie</h4>
                                    <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                                </div>
                                <div class="discover_item">
                                    <h4>Double Chocolate Pie</h4>
                                    <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                                </div>
                                <div class="discover_item">
                                    <h4>Double Chocolate Pie</h4>
                                    <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <a class="pest_btn" href="#">View Full Menu</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        -->
        <!--================End Discover Menu Area =================-->
        
        <!--================End Client Says Area =================-->
        @yield('staff')
        <!--================End Client Says Area =================-->
        
        <!--================New Arivals Area =================-->
         @yield('monanmoi')
        <!--================End New Arivals Area =================-->
        
        <!--================Latest News Area =================-->
        @yield('blog')
        <!--================End Latest News Area =================-->
        
        <!--================Newsletter Area =================-->

        <section class="newsletter_area gray_bg">
            <div class="container">
                <div class="newsletter_inner">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="news_left_text">
                                <h4>Join our Newsletter list to get all the latest offers, discounts and other benefits</h4>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="newsletter_form">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Nhập địa chỉ email của bạn...">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button">Đăng ký</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Newsletter Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_widgets">
                <div class="container">
                    <div class="row footer_wd_inner">
                        <div class="col-lg-3 col-6">
                            <aside class="f_widget f_about_widget">
                                <img src="{{asset('public/frontend/images/footer-logo.png')}}" alt="">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui bland itiis praesentium voluptatum deleniti atque corrupti.</p>
                                <ul class="nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-6">
                            <aside class="f_widget f_link_widget">
                                <div class="f_title">
                                    <h3>Quick links</h3>
                                </div>
                                <ul class="list_style">
                                    <li><a href="#">Your Account</a></li>
                                    <li><a href="#">View Order</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditionis</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-6">
                            <aside class="f_widget f_link_widget">
                                <div class="f_title">
                                    <h3>Thời gian làm việc</h3>
                                </div>
                                <ul class="list_style">
                                    <li><a href="#">Mon. :  Fri.: 8 am - 8 pm</a></li>
                                    <li><a href="#">Sat. : 9am - 4pm</a></li>
                                    <li><a href="#">Sun. : Closed</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-6">
                            <aside class="f_widget f_contact_widget">
                                <div class="f_title">
                                    <h3>Thông tin liên hệ</h3>
                                </div>
                                <h4>(1800) 574 9687</h4>
                                <p>Justshiop Store <br />256, baker Street,, New Youk, 5245</p>
                                <h5>cakebakery@contact.co.in</h5>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copyright">
                <div class="container">
                    <div class="copyright_inner">
                        <div class="float-left">
                            <h5><a target="_blank" href="#"></a></h5>
                        </div>
                        <div class="float-right">
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        <!--================Search Box Area =================-->
        <div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
            <div class="search_box_inner">
                <h3>Tìm kiếm</h3>
                <form action="{{URL::to('/tim-kiem')}}" method="post">
                        {{csrf_field()}}
                    <div class="input-group">

                        <input type="text" class="form-control" name="keyword" placeholder="Nhập tên sản phẩm cần tìm...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="icon icon-Search"></i></button>
                        </span>
                        
                    </div>
                </form>
            </div>
        </div>
        <!--================End Search Box Area =================-->
        
        
        
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{asset('public/frontend/js/jquery-3.2.1.min.js')}}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{asset('public/frontend/js/popper.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
        <!-- Rev slider js -->
        <script src="{{asset('public/frontend/vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <!-- Extra plugin js -->
        <script src="{{asset('public/frontend/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/magnifc-popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/datetime-picker/js/moment.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/datetime-picker/js/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/lightbox/simpleLightbox.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('public/frontend/vendors/isotope/isotope.pkgd.min.js')}}"></script>
        
        <script src="{{asset('public/frontend/js/theme.js')}}"></script>
        <!-- Feature Product -->
        <script src="{{asset('public/frontend/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/jquery-ui.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/jquery.slicknav.js')}}"></script>
        <script src="{{asset('public/frontend/js/mixitup.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/main.js')}}"></script>

        <script src="{{asset('public/frontend/js/function.js')}}"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.add-cart-ajax').click(function(event){
                    var id=$(this).data('id');
                    var cart_product_id=$('.cart_product_id_'+ id).val();
                    var cart_product_name=$('.cart_product_name_'+ id).val();
                    var cart_product_image=$('.cart_product_image_'+ id).val();
                    var cart_product_price=$('.cart_product_price_'+ id).val();
                    var cart_product_qty=$('.cart_product_qty_'+ id).val();
                    var _token = $('input[name="_token"]').val();
                    
                    //alert(cart_product_name);

                    $.ajax({
                        url: '{{url('/add-cart-ajax')}}',
                        method: 'POST',
                        data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
                        success:function(data){
                            alert(data);
                            
                        }
                    });
                   event.preventDefault();
                });
            });
        </script>
        
    </body>

</html>