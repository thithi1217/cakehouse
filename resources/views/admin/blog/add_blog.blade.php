@extends('admin_layout')
@section('admin_content')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm bài viết
                        </header>
                        <?php 
                        $message=Session::get('message');
                        if($message){
                            echo '<span class="text-alert">'.$message.'</span>';
                            Session::put('message',null);
                        } 
                        ?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tiêu đề bài viết</label>
                                    <input type="text" name="blog_title" class="form-control" id="exampleInputEmail1" placeholder="Tiêu đề bài viết">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" name="blog_slug" class="form-control" id="exampleInputEmail1" placeholder="Nhap ten san pham">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh</label>
                                    <input type="file" name="blog_image" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tóm tắt bài viết</label>
                                    <textarea style="resize: none" rows="5" type="password" name="blog_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả bài viết"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung bài viết</label>
                                    <textarea style="resize: none" rows="5" type="password" name="blog_content" class="form-control" id="exampleInputPassword1" placeholder="Nội dung sản phẩm"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Meta từ khóa</label>
                                    <textarea style="resize: none" rows="5" type="password" name="blog_meta_keyword" class="form-control" id="exampleInputPassword1" placeholder="Từ khóa"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Meta nội dung</label>
                                    <textarea style="resize: none" rows="5" type="password" name="blog_meta_desc" class="form-control" id="exampleInputPassword1" placeholder="Nội dung sản phẩm"></textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                    <select name="blog_status" class="form-control input-sm m-bot15">
                                        <option value="1">Hiển thị</option>
                                        <option value="0">Ẩn</option>
                                        
                                    </select>
                                </div>
                                
                                <button type="submit" name="add_blog" class="btn btn-info">Thêm bài viết</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
            
        </div>
@endsection