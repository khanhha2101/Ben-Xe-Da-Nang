@extends('quanly.trangquanly')
@section('admin_content')

<div class="table-agile-info">
    <?php
    // $msg = Session::get('msg');
    // if ($msg) {
    // 	echo $msg;
    // 	Session::put('msg', null);
    // }

    ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            Danh sách đăng ký hãng xe
        </div>
        <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">
                <select class="input-sm form-control w-sm inline v-middle" onchange="location = '{{URL::to('/listbandoc-show/')}}' + '/' + this.value;">
                    <option></option>
                    <option value="0">Tất cả</option>
					
					<option value="..">..</option>
					
                </select>
                <button class="btn btn-sm btn-default">Apply</button>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <input type="text" class="input-sm form-control" placeholder="Search" name="keyword" id="keyword">
                    <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã ND</th>
                        <th>Tên người dùng</th>
                        <th>Tên hãng xe</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ trụ sở</th>
                        <th style="width:150px;"></th>
                    </tr>
                </thead>
                <tbody id="listBanDoc">
                    <?php $i = 1 ?>
                    @foreach($hangxe as $key => $value)
                    <tr>
                        <td><?php echo($i) ?></td>
                        <td>ND{{$value->mand}}</td>
                        <td>{{$value->hoten}}</td>
                        <td>{{$value->hangxe}}</td>
                        <td>{{$value->sdt}}</td>
                        <td>{{$value->diachi}}</td>
                        <td>

                            <button type="submit" class="btn" style="background-color: #FDDC69;"><a href="{{URL::to('/chuyenxe/'.$value->mand)}}">Xem</a></button>

                            <!-- <button type="submit" class="btn" style="background-color: #FE8A8A;"><a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="{{URL::to('/del-bandoc/')}}">Xóa</a></button> -->
                        </td>
                    </tr>
                    <?php $i += 1 ?>
                    @endforeach
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