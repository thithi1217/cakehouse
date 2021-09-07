@extends('welcome')
@section('content')
<!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản phẩm nổi bật</h2>
                    </div>
                    <div class="featured__controls">
                        
                        <ul>
                            <li class="active" data-filter="*" >Tất cả</li>
                            @foreach($category as $key =>$cate )
                            
                            <li data-filter=".{{$cate->category_code}}">{{$cate->category_name}}</li>
                            @endforeach
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="row featured__filter cake_feature_row">
                
                @foreach($all_product as $key => $product)

                <div class="col-lg-3 col-md-4 col-sm-6 mix {{$product->category_code}}">
                    <div class="featured__item">
                        
                        <div class="featured__item__pic set-bg">
                            <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
                                <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" height="260" width="280">
                            </a>
                            <ul class="featured__item__pic__hover">
                                <form {{-- action="{{URL::to('/save-cart')}}" method="post" --}}>
                                    {{-- {{csrf_field()}} --}}
                                    @csrf
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#{{$product->product_id}}">
                                        <i class="fa fa-eye" ></i>
                                    </a>
                                </li>
                                
                                <li>
                                    {{-- ajax --}}
                                    <input type="hidden" value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}">
                                    <input type="hidden" value="{{$product->product_name}}" class="cart_product_name_{{$product->product_id}}">
                                    <input type="hidden" value="{{$product->product_image}}" class="cart_product_image_{{$product->product_id}}">
                                    <input type="hidden" value="{{$product->product_price}}" class="cart_product_price_{{$product->product_id}}">
                                    <input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">
                                    {{-- end-ajax --}}
                                    <input name="productid_hidden" type="hidden" value="{{$product->product_id}}">
                                    <input name="qty"  type="hidden" style="width: 50px" min="1" value="1">
                                    <a><button data-id="{{$product->product_id}}" class="add-cart-ajax" type="submit"> <i class="fa fa-shopping-cart"></i></button></a>
                                    
                                </li>
                                </form>
                            </ul>
                        </div>

                        <div class="featured__item__text">
                            <h6><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">{{$product->product_name}}</a></h6>
                            <h5>{{number_format($product->product_price,0,',','.').' '.'đ'}}</h5>
                        </div>
                        
                    </div>
                </div>
                @endforeach
                
            </div>

           
        </div>
        @foreach($all_product as $key => $product)
        <div class="modal fade" id="{{$product->product_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="container">
                
                <div class="row product_d_price">
                    <div class="col-lg-4">
                        <div class="product_img">
                            <img class="img-fluid" src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" height="300" width="300">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <form {{-- action="{{URL::to('/save-cart')}}" method="post" --}}>
                           {{--  {{csrf_field()}} --}}
                           @csrf
                        <div class="product_details_popup">
                            {{-- ajax --}}
                            <input type="hidden" value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}">
                            <input type="hidden" value="{{$product->product_name}}" class="cart_product_name_{{$product->product_id}}">
                            <input type="hidden" value="{{$product->product_image}}" class="cart_product_image_{{$product->product_id}}">
                            <input type="hidden" value="{{$product->product_price}}" class="cart_product_price_{{$product->product_id}}">
                            <input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">
                            {{-- end-ajax --}}
                            <h4>{{$product->product_name}}</h4>
                            <p>Tình trạng: Còn hàng</p>
                            <h5><span>{{number_format($product->product_price,0,',','.').' '.'đ'}}</span></h5>
                            <div class="product__details__quantity">
                                <div class="quantity">
                                        <label>Số lượng: </label>
                                        <input name="qty"  type="number" style="width: 50px" min="1" value="1">
                                        <input name="productid_hidden" type="hidden" value="{{$product->product_id}}">
                                    
                                </div>
                            </div>
                            <button class="pink_more add-cart-ajax" data-id="{{$product->product_id}}" type="submit">Add to Cart</button>
                            
                        </div>
                        </form>
                    </div>
                </div>
                
                
                
            </div>
                <div class="modal-footer">
                    
                    
                </div>
            </div>
        </div>
    </div>
    @endforeach
        


    </section>
    <!-- Featured Section End -->

@endsection
@section('slider')
<!--================Slider Area =================-->
        <section class="main_slider_area">
            <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
                <ul>
                    <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="{{asset('public/frontend/images/home-slider/slider-1.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('public/frontend/images/home-slider/slider-1.jpg')}}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box" style="font-family: 'Pacifico', cursive;">
                            <div class="tp-caption tp-resizeme first_text" 
                            data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" 
                            data-y="['top','top','top','top']" data-voffset="['175','175','125','165','160']" 
                            data-fontsize="['65','65','65','40','30']"
                            data-lineheight="['80','80','80','50','40']"
                            data-width="['800','800','800','500']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left'] ">Cake Bakery </div>
                            
                            <div class="tp-caption tp-resizeme secand_text" 
                                data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['345','345','300','300','250']"  
                                data-fontsize="['20','20','20','20','16']"
                                data-lineheight="['28','28','28','28']"
                                data-width="['640','640','640','640','350']"
                                data-height="none"
                                data-whitespace="normal"
                                data-type="text" 
                                data-responsive_offset="on"
                                data-transform_idle="o:1;"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">Lưu giữ tinh hoa ẩm thực Nhật Bản
                            </div>
                            
                            <div class="tp-caption tp-resizeme slider_button" 
                               data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['435','435','390','390','360']" 
                                data-fontsize="['14','14','14','14']"
                                data-lineheight="['46','46','46','46']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                                <a class="main_btn" href="{{URL::to('/san-pham')}}">Xem ngay</a>
                            </div>
                        </div>
                    </li>
                    <li data-index="rs-1588" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="{{asset('public/frontend/images/error-bg.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('public/frontend/images/error-bg.jpg')}}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        
                    </li>
                    <li data-index="rs-1589" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="{{asset('public/frontend/images/home-slider/slider-8.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('public/frontend/images/home-slider/slider-8.jpg')}}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                        </div>
                    </li>
                </ul>
            </div>
        </section>
@endsection
@section('service')
<div class="seperator seperator-image seperator-over-top" ></div>
<section id="home-about-cus" class="cover-cake">
    <div class="wrapper">
        <div class="grid">
            <div class="grid__item large--ten-twelfths push--large--one-twelfth text-center" data-animation="fadeIn">
                <h2 class="text-large font-pacifico text-colored" style="font-family: 'Pacifico', cursive;">
                    
                    <span id="title_1">Cake <br><img class="img-icon-section-left" src="{{asset('public/frontend/images/heading-icon-leftbcd2.png')}}" alt=""> Bakery <img class="img-icon-section-right" src="{{asset('public/frontend/images/heading-icon-rightbcd2.png')}}" alt=""></span>
                    
                </h2>
                <p>
                    Cake Bakery là tiệm bánh Nhật Bản kế thừa những công thức tâm đắc nhất của ông Tetsuya Suzuki. Năm 2005, từ xuất phát điểm là một xưởng bánh nhỏ trên bến Ninh Kiều, đến nay, Cake Bakery đã có gần 20 cửa hàng tại Cần Thơ. Ẩn chứa trong bất cứ chiếc bánh nhỏ bé nào tại đây, vẫn là hương vị thơm ngon thuở ban đầu với tình yêu và niềm đam mê trọn vẹn! 
                    <br>
                    <br>
                    
                </p>
            </div>
        </div>
    </div>
</section>

<section class="service_we_offer_area p_100">
            <div class="container">
                
                <div class="row we_offer_inner">
                    <div class="col-lg-4">
                        <div class="s_we_item">
                            <div class="media">
                                <div class="d-flex">
                                    <i class="flaticon-food-6"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Cookies</h4>
                                    <p>Nhờ vào nguyên liệu tươi ngon và bàn tay chế biến khéo léo của đội ngũ đầu bếp, các sản phẩm bánh được ra lò thơm ngon, chất lượng. Chẳng những ngon miệng, đẹp mắt, giàu chất dinh dưỡng mà còn mang đến sự hứng thú cho người thưởng thức.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="s_we_item">
                            <div class="media">
                                <div class="d-flex">
                                    <i class="flaticon-food-5"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Bánh kem</h4>
                                    <p>Nếu bạn đang có dự định thưởng thức một bữa tiệc bánh ngọt ngập tràn trong các hương vị thiên nhiên. Hãy đến với POEME Bakery, tận hưởng giây phút nhẹ nhàng, thư thả trong không gian ấm cúng, thân thương.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="s_we_item">
                            <div class="media">
                                <div class="d-flex">
                                    <i class="flaticon-food-3"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Bánh Gato</h4>
                                    <p>Là một loại bánh mang nhiều ý nghĩa quan trọng trong dịp kỷ niệm của mỗi chúng ta. Hãy dành tặng người thân yêu một chiếc bánh Gato thật đẹp kèm lời chúc ý nghĩa bạn nhé! Cake Bakery rất hận hạnh được thay bạn làm điều đó.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="s_we_item">
                            <div class="media">
                                <div class="d-flex">
                                    <i class="flaticon-book"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Nguyên liệu</h4>
                                    <p>Sử dụng các nguyên liệu chế biến chất lượng, tươi mới, theo tiêu chuẩn quốc tế, được chọn lựa kỹ lưỡng từ các nhà cung cấp đáng tin cậy. Chúng tôi đảm bảo là sẽ đem đến cho khách hàng những chiếc bánh thơm ngon, chất lượng hảo hạng nhất.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="s_we_item">
                            <div class="media">
                                <div class="d-flex">
                                    <i class="flaticon-food-4"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Menu Planner</h4>
                                    <p>Menu của Poeme có hơn 150 hương vị khác nhau. Các loại hương liệu được nhập khẩu 100% từ Nhật Bản. Công thức đặc biệt cắt giảm 1/3 calories so với bánh thông thường.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="s_we_item">
                            <div class="media">
                                <div class="d-flex">
                                    <i class="flaticon-transport"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Home Delivery</h4>
                                    <p>Lorem Ipsum is  simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
@section('staff')
<section class="our_chef_area p_100">
            <div class="container">
                <div class="row our_chef_inner">
                    <div class="col-lg-3">
                        <div class="chef_text_item">
                            <div class="main_title">
                                <h2>Đầu bếp chuyên nghiệp</h2>
                                <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="chef_item">
                            <div class="chef_img">
                                <img class="img-fluid" src="{{asset('public/frontend/images/chef/chef-1.jpg')}}" alt="">
                                <ul class="list_style">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                            <a href="#"><h4>Michale Joe</h4></a>
                            <h5>Expert in Cake Making</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="chef_item">
                            <div class="chef_img">
                                <img class="img-fluid" src="{{asset('public/frontend/images/chef/chef-2.jpg')}}" alt="">
                                <ul class="list_style">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                            <a href="#"><h4>Michale Joe</h4></a>
                            <h5>Expert in Cake Making</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="chef_item">
                            <div class="chef_img">
                                <img class="img-fluid" src="{{asset('public/frontend/images/chef/chef-3.jpg')}}" alt="">
                                <ul class="list_style">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                            <a href="#"><h4>Michale Joe</h4></a>
                            <h5>Expert in Cake Making</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
@section('monanmoi')
<section class="new_arivals_area p_100">
            <div class="container">
                <div class="single_pest_title">
                    <h2>Món ăn mới</h2>
                </div>
                <div class="row arivals_inner">
                    <div class="col-lg-6 col-sm-7">
                        <div class="arivals_chocolate">
                            <div class="arivals_pic">
                                <img class="img-fluid" src="{{asset('public/frontend/images/cake-feature/arivals-pic.jpg')}}" alt="">
                                <div class="price_text">
                                    <h5>$39</h5>
                                </div>
                            </div>
                            <div class="arivals_text">
                                <h4>Chocolate <span>Crumble</span></h4>
                                <a href="#">Mine cup</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="arivals_slider owl-carousel">
                            <div class="item">
                                <div class="cake_feature_item">
                                    <div class="cake_img">
                                        <img src="{{asset('public/frontend/images/cake-feature/arivals-1.jpg')}}" alt="">
                                    </div>
                                    <div class="cake_text">
                                        <h4>$29</h4>
                                        <h3>Strawberry Cupcakes</h3>
                                        <a class="pest_btn" href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cake_feature_item">
                                    <div class="cake_img">
                                        <img src="{{asset('public/frontend/images/cake-feature/arivals-2.jpg')}}" alt="">
                                    </div>
                                    <div class="cake_text">
                                        <h4>$29</h4>
                                        <h3>Chocolate Cupcakes</h3>
                                        <a class="pest_btn" href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cake_feature_item">
                                    <div class="cake_img">
                                        <img src="{{asset('public/frontend/images/cake-feature/arivals-1.jpg')}}" alt="">
                                    </div>
                                    <div class="cake_text">
                                        <h4>$29</h4>
                                        <h3>Strawberry Cupcakes</h3>
                                        <a class="pest_btn" href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cake_feature_item">
                                    <div class="cake_img">
                                        <img src="{{asset('public/frontend/images/cake-feature/arivals-2.jpg')}}" alt="">
                                    </div>
                                    <div class="cake_text">
                                        <h4>$29</h4>
                                        <h3>Chocolate Cupcakes</h3>
                                        <a class="pest_btn" href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
@section('blog')
<section class="latest_news_area gray_bg p_100">
            <div class="container">
                <div class="main_title">
                    <h2>Công thức nấu ăn</h2>
                    <h5>an turn into your instructor your helper, your </h5>
                </div>
                <div class="row latest_news_inner">
                    <div class="col-lg-4 col-md-6">
                        <div class="l_news_image">
                            <div class="l_news_img">
                                <img class="img-fluid" src="{{asset('public/frontend/images/blog/latest-news/l-news-1.jpg')}}" alt="">
                            </div>
                            <div class="l_news_hover">
                                <a href="#"><h5>Oct 15, 2016</h5></a>
                                <a href="#"><h4>Nanotechnology immersion along the information</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="l_news_item">
                            <div class="l_news_img">
                                <img class="img-fluid" src="{{asset('public/frontend/images/blog/latest-news/l-news-2.jpg')}}" alt="">
                            </div>
                            <div class="l_news_text">
                                <a href="#"><h5>Oct 15, 2016</h5></a>
                                <a href="#"><h4>Nanotechnology immersion along the information</h4></a>
                                <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion ....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="l_news_item">
                            <div class="l_news_img">
                                <img class="img-fluid" src="{{asset('public/frontend/images/blog/latest-news/l-news-3.jpg')}}" alt="">
                            </div>
                            <div class="l_news_text">
                                <a href="#"><h5>Oct 15, 2016</h5></a>
                                <a href="#"><h4>Nanotechnology immersion along the information</h4></a>
                                <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion ....</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection