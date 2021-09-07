@extends('admin_layout')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê danh mục sản phẩm
    </div>
    </header>
                        <?php 
                        $message=Session::get('message');
                        if($message){
                            echo '<span class="text-alert">'.$message.'</span>';
                            Session::put('message',null);
                        } 
                        ?>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <?php
         $message1 = Session::get('message1');
         $message2 = Session::get('message2');
            if($message1){
              echo '<li class="alert alert-danger">'.$message1.'</li>';
              Session::put('message1', null);
            }elseif($message2) {
              echo '<li class="alert alert-success">'.$message2.'</li>';
              Session::put('message2', null);
            }
      ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Hình sản phẩm</th>
            <th>Danh mục</th>
            <th>Hiện/Ẩn</th>

            <th>Quản lý</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_product as $key =>$pro ) <!-- lay du lieu-->
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$pro->product_name}}</td>
            <td>{{number_format($pro->product_price,0,',','.')}}</td>
            <td><img src="public/uploads/product/{{$pro->product_image}}" height="100" width="100"></td>
            <td>{{$pro->category_name}}</td>

            <td><span class="text-ellipsis">
              <?php
              if($pro->product_status==1){
              ?>
               
                <a href="{{URL::to('/show-product/'.$pro->product_id)}}"><span class="fa fa-eye eye-styling"></span></a>
              
              <?php
              }else{
              ?>
                <a href="{{URL::to('/hidden-product/'.$pro->product_id)}}"><span class="fa fa-eye-slash eye-styling"></span></a>
              <?php
              }
              ?> 
              

            </span></td>
            
            <td>
              <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="active styling_edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i>
              </a>
              

              <a href="{{URL::to('/delete-product/'.$pro->product_id)}}" onclick="return confirm('Xóa là không khôi phục được đâu nha?')" class="active styling_edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          @endforeach()
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection