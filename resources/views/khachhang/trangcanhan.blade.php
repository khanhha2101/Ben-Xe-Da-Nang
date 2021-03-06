@extends('home_layout')
@section('home_content')
<style>
    .bodycn {
        display: flex;
        height: 750px;
    }

    .bodycn>div {
        width: 100%;
    }

    .tabs {
        display: flex;
        position: relative;
    }

    .tabs .line {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0;
        height: 6px;
        border-radius: 15px;
        background-color: #024751;
        transition: all 0.2s ease;
    }

    .tab-item {
        min-width: 60px;
        padding: 16px 20px 11px 20px;
        font-size: 18px;
        text-align: center;
        color: #024751;
        background-color: #fff;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border-bottom: 5px solid transparent;
        opacity: 0.6;
        cursor: pointer;
        transition: all 0.5s ease;
    }

    .tab-icon {
        font-size: 24px;
        width: 32px;
        position: relative;
        top: 2px;
    }

    .tab-item:hover {
        opacity: 1;
        background-color: #E3DEF1;
        border-color: #E3DEF1;
    }

    .tab-item.active {
        opacity: 1;
    }

    .tab-content {
        padding: 28px 0;
    }

    .tab-pane {
        color: #333;
        display: none;
    }

    .tab-pane.active {
        display: block;
    }

    .tab-pane h2 {
        font-size: 20px;
        margin-bottom: 8px;
    }

    .btn1 {
        margin-top: 45px;
        height: 35px;
        font-size: 14px;
        margin-left: 10px;
    }

    .btn2 {
        margin-top: 15px;
        height: 35px;
        width: 150px;
        text-align: center;
    }

    .inputText {
        height: 40px;
        margin: 10px 10px 20px 0px;
    }

    .thoat {
        /* min-width: 80px; */
        padding: 16px 20px 11px 20px;
        font-size: 16px;
        /* text-align: center; */
        color: #024751;
        background-color: #fff;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border-bottom: 5px solid transparent;
        opacity: 0.6;
        cursor: pointer;
        transition: all 0.5s ease;
    }

    .thoat:hover {
        opacity: 1;
        background-color: #E3DEF1;
        border-color: #E3DEF1;
    }

    .thea {
        font-size: 18px;
        text-align: center;
        color: #024751;
    }

    .thea:hover {
        text-decoration: none;
    }
</style>

<?php
$id = Session::get('id');
$quyen = Session::get('quyen');
?>

<div class="mainhd">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-2">
            <p class="chunho">Trang c?? nh??n</p>
        </div>
        <div class="col-md-10">
            <hr style="margin-left: -100px;">
        </div>
    </div>
    <div class="bodycn">

        <div class="row">
            <!-- Tab items -->

            <div class="tabs">
                <!-- kh??ch h??ng -->
                <div class="tab-item active">
                    <i class="tab-icon fas fa-pen-nib"></i>
                    Th??ng tin c?? nh??n
                </div>
                @if($quyen == 2)
                <div class="tab-item">
                    <i class="tab-icon fas fa-code"></i>
                    V?? xe
                </div>
                <div class="tab-item">
                    <i class="tab-icon fas fa-plus-circle"></i>
                    ????ng k?? h??ng xe
                </div>
                @endif

                <!-- ch??? h??ng xe -->
                @if($quyen == 3)
                <div class="tab-item">
                    <i class="tab-icon fas fa-cog"></i>
                    Chuy???n xe
                </div>
                <div class="tab-item">
                    <i class="tab-icon fas fa-code"></i>
                    Tuy???n ???????ng
                </div>
                <div class="tab-item">
                    <i class="tab-icon fas fa-plus-circle"></i>
                    Danh s??ch xe
                </div>
                <div class="tab-item">
                    <i class="tab-icon fas fa-pen-nib"></i>
                    Danh s??ch t??i x???
                </div>
                @endif

                <!-- t??i x??? -->
                @if($quyen==4)
                <div class="tab-item">
                    <i class="tab-icon fas fa-code"></i>
                    L???ch l??m vi???c
                </div>
                <div class="tab-item">
                    <i class="tab-icon fas fa-plus-circle"></i>
                    Th??ng b??o s??? c???
                </div>
                @endif

                <div class="thoat">
                    <i class="tab-icon fas fa-cog"></i>
                    <a href="{{URL::to('/dangxuat')}}" class="thea">????ng xu???t</a>
                </div>
                <div class="line"></div>
            </div>



            <!-- Tab content -->
            <div class="tab-content">
                <!-- th??ng tin c?? nh??n -->
                <div class="tab-pane active">
                    <!-- <div class="row">
                            <div class="col-md-1"><img src="{{asset('public/frontend/img/iconuser2.png')}}" alt=""></div>
                            <div class="col-md-5">
                                <button class="btn-xanh btn1">Ch???n ???nh</button>
                            </div>
                        </div> -->
                    <div class="row" style="margin-top: 30px;">
                        <div class="col-md-6">
                            <input type="text" class="form-control inputText" placeholder="H??? t??n" value="Nguy???n Th??? Kh??nh H???">
                            <select name="" id="" class="form-control inputText">
                                <option value="" selected>N???</option>
                                <option value="" >Nam</option>
                                <option value="" >Kh??c</option>
                            </select>
                            <input type="text" class="form-control inputText" placeholder="Ng??y sinh" value="20/10/2001">
                            <input type="text" class="form-control inputText" placeholder="?????a ch???" value="02 Thanh S??n, Thanh B??nh, H???i Ch??u, ???? N???ng">

                        </div>
                        <!-- <div class="col-md-1"></div> -->
                        <div class="col-md-6">
                            <input type="text" class="form-control inputText" placeholder="S??? ??i???n tho???i" value="0485628735">
                            <input type="text" class="form-control inputText" placeholder="Email" value="khanhha@gmail.com">
                            <input type="text" class="form-control inputText" placeholder="CMND/CCCD" value="395810485">
                            @if($quyen == 4 || $quyen == 3)
                            <input type="text" class="form-control inputText" placeholder="H??ng xe">
                            @endif
                        </div>
                    </div>
                    @if($quyen == 4)
                    <!-- t??i x??? -->
                    <!-- <div class="row" style="margin-top: 30px;">
                        <div class="col-md-2">
                            <p>Gi???y ph??p l??i xe</p>
                            <img class="anhtaixe" src="{{asset('public/frontend/img/imganh.png')}}" alt="">
                        </div>
                        <div class="col-md-3">
                            <p>B???o hi???m y t???</p>
                            <img class="anhtaixe" src="{{asset('public/frontend/img/imganh.png')}}" alt="">
                        </div>
                    </div> -->
                    @endif
                    <div class="row" style="margin-top: 50px;">
                        <div class="col-md-2">
                            <button class="btn-xanh btn2">C???p nh???t</button>
                        </div>
                    </div>
                </div>
                <!-- ????ng k?? h??ng xe -->
                @if($quyen == 2)
                <div class="tab-pane">
                    <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>M?? chuy???n</th>
                                    <th>Tuy???n ???????ng</th>
                                    <th>??i???m kh???i h??nh</th>
                                    <th>??i???m k???t th??c</th>
                                    <th>Ng??y ??i</th>
                                    <th>Th???i gian</th>
                                    <th>S??? gh???</th>
                                    <th>Gi?? v??</th>
                                    <th style="width:90px;"></th>
                                </tr>
                            </thead>
                            <tbody id="listBanDoc">
                                <tr>
                                    <td>1</td>
                                    <td>CX002</td>
                                    <td>???? N???ng ??i H?? N???i</td>
                                    <td>B???n xe kh??ch ???? N???ng</td>
                                    <td>B???n xe A</td>
                                    <td>16/06/2022</td>
                                    <td>8h - 14h</td>
                                    <td>12</td>
                                    <td>365.000???</td>
                                    <td>
                                        <button class="btn-tim">Hu??? v??</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="tab-pane">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control inputText" placeholder="T??n ch??? h??ng xe">
                            <input type="text" class="form-control inputText" placeholder="T??n h??ng xe">
                            <input type="text" class="form-control inputText" placeholder="?????a ch??? tr??? s???">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn-xanh btn2">????ng k??</button>
                        </div>
                    </div>
                </div>
                @endif

                <!-- ch??? h??ng xe -->
                @if($quyen == 3)
                <!-- chuy???n -->
                <div class="tab-pane">
                    <!-- <p style="font-size: 14px;">Giai ??o???n: 01/06/2022 - 30/06/2022</p> -->
                    <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>M?? s??? chuy???n</th>
                                    <th>Tuy???n ???????ng</th>
                                    <th>L???ch tr??nh</th>
                                    <th>Th???i gian</th>
                                    <th>Gi?? v??</th>
                                    <th style="width:155px;"></th>
                                </tr>
                            </thead>
                            <tbody id="listBanDoc">
                                <tr>
                                    <td>1</td>
                                    <td>CX002</td>
                                    <td>B???n xe trung t??m ???? N???ng ??i H?? N???i</td>
                                    <td>Th??? 2, 4, 6</td>
                                    <td>8h - 14h</td>
                                    <td>365.000???</td>
                                    <td><button class="btn-xanh">Chi ti???t</button>
                                        <button class="btn-tim">Xo??</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>CX005</td>
                                    <td>B???n xe trung t??m ???? N???ng ??i H?? N???i</td>
                                    <td>M???i ng??y</td>
                                    <td>8h - 14h</td>
                                    <td>365.000???</td>
                                    <td><button class="btn-xanh">Chi ti???t</button>
                                        <button class="btn-tim">Xo??</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>CX006</td>
                                    <td>B???n xe trung t??m ???? N???ng ??i H?? N???i</td>
                                    <td>Th??? 3, 5, 7</td>
                                    <td>8h - 14h</td>
                                    <td>365.000???</td>
                                    <td><button class="btn-xanh">Chi ti???t</button>
                                        <button class="btn-tim">Xo??</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>CX008</td>
                                    <td>B???n xe trung t??m ???? N???ng ??i H?? N???i</td>
                                    <td>M???i ng??y</td>
                                    <td>8h - 14h</td>
                                    <td>365.000???</td>
                                    <td><button class="btn-xanh">Chi ti???t</button>
                                        <button class="btn-tim">Xo??</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn-xanh btn2">Th??m chuy???n</button>
                        </div>
                    </div>
                </div>
                <!-- tuy???n -->
                <div class="tab-pane">
                    <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>M?? s??? tuy???n</th>
                                    <th>N??i ??i</th>
                                    <th>N??i ?????n</th>
                                    <!-- <th style="width:135px;"></th> -->
                                </tr>
                            </thead>
                            <tbody id="listBanDoc">
                                <tr>
                                    <td>1</td>
                                    <td>T002</td>
                                    <td>???? N???ng</td>
                                    <td>H?? N???i</td>
                                    <!-- <td><button class="btn-xanh">Chi ti???t</button></td> -->
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>T005</td>
                                    <td>???? N???ng</td>
                                    <td>S??i G??n</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>T007</td>
                                    <td>???? N???ng</td>
                                    <td>Qu???ng Nam</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>T009</td>
                                    <td>???? N???ng</td>
                                    <td>Hu???</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn-xanh btn2">????ng k?? tuy???n</button>
                        </div>
                    </div>
                </div>
                <!-- xe -->
                <div class="tab-pane">
                    <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>M?? s??? xe</th>
                                    <th>Bi???n s???</th>
                                    <th>Lo???i xe</th>
                                    <th>S??? ch???</th>
                                    <th>Tuy???n ??ang ch???y</th>
                                    <th style="width:135px;"></th>
                                </tr>
                            </thead>
                            <tbody id="listBanDoc">
                                <tr>
                                    <td>1</td>
                                    <td>XE002</td>
                                    <td>43C-123456</td>
                                    <td>Xe gh??? ng???i</td>
                                    <td>20</td>
                                    <td>B???n xe trung t??m ???? N???ng ??i H?? N???i</td>
                                    <td><button class="btn-xanh">Chi ti???t</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>XE005</td>
                                    <td>43C-123456</td>
                                    <td>Xe gh??? ng???i</td>
                                    <td>20</td>
                                    <td>B???n xe trung t??m ???? N???ng ??i S??i G??n</td>
                                    <td><button class="btn-xanh">Chi ti???t</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>XE007</td>
                                    <td>43C-123456</td>
                                    <td>Xe gh??? ng???i</td>
                                    <td>20</td>
                                    <td>B???n xe trung t??m ???? N???ng ??i H???i Ph??ng</td>
                                    <td><button class="btn-xanh">Chi ti???t</button></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>XE008</td>
                                    <td>43C-123456</td>
                                    <td>Xe gh??? ng???i</td>
                                    <td>20</td>
                                    <td>B???n xe trung t??m ???? N???ng ??i Qu???ng Nam</td>
                                    <td><button class="btn-xanh">Chi ti???t</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn-xanh btn2">Th??m xe</button>
                        </div>
                    </div>
                </div>
                <!-- t??i x??? -->
                <div class="tab-pane">
                    <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>M?? t??i x???</th>
                                    <th>H??? t??n</th>
                                    <th>S??? ??i???n tho???i</th>
                                    <th>Ch???c v???</th>
                                    <th>Xe ??ang l??i</th>
                                    <th style="width:135px;"></th>
                                </tr>
                            </thead>
                            <tbody id="listBanDoc">
                                <tr>
                                    <td>1</td>
                                    <td>TX002</td>
                                    <td>Nguy???n V??n A</td>
                                    <td>0392748639</td>
                                    <td>L??i ch??nh</td>
                                    <td>43C-294725</td>
                                    <td><button class="btn-xanh">Chi ti???t</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>TX005</td>
                                    <td>Nguy???n V??n B</td>
                                    <td>0392748639</td>
                                    <td>L??i ch??nh</td>
                                    <td>43C-294725</td>
                                    <td><button class="btn-xanh">Chi ti???t</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>TX008</td>
                                    <td>Nguy???n V??n C</td>
                                    <td>0392748639</td>
                                    <td>L??i ch??nh</td>
                                    <td>43C-294725</td>
                                    <td><button class="btn-xanh">Chi ti???t</button></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>TX009</td>
                                    <td>Nguy???n V??n D</td>
                                    <td>0392748639</td>
                                    <td>L??i ch??nh</td>
                                    <td>43C-294725</td>
                                    <td><button class="btn-xanh">Chi ti???t</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn-xanh btn2">????ng k??</button>
                        </div>
                    </div>
                </div>
                @endif


                <!-- t??a x??? -->
                @if($quyen == 4)
                <!-- l???ch l??m vi???c -->
                <div class="tab-pane">

                    <div class="table-responsive">
                        <h4 style="background-color: #89B7C1; padding: 10px; color: white;">Th??ng tin chuy???n xe</h4>
                        <table class="table table-striped b-t b-light">
                            <thead>
                                <tr>
                                    <th>M?? chuy???n</th>
                                    <th>Tuy???n ???????ng</th>
                                    <th>??i???m kh???i h??nh</th>
                                    <th>??i???m k???t th??c</th>
                                    <th>L???ch tr??nh</th>
                                    <th>Th???i gian</th>
                                    <th>Gi?? v??</th>
                                    <th>Ch???c v???</th>
                                </tr>
                            </thead>
                            <tbody id="listBanDoc">
                                <tr>
                                    <td>CX002</td>
                                    <td>???? N???ng ??i H?? N???i</td>
                                    <td>B???n xe kh??ch ???? N???ng</td>
                                    <td>B???n xe Ah</td>
                                    <td>Th??? 2, 4, 6</td>
                                    <td>8h - 14h</td>
                                    <td>300,000??</td>
                                    <td>L??i ch??nh</td>
                                </tr>
                            </tbody>
                        </table>
                        <h4 style="background-color: #89B7C1; padding: 10px; margin-top: 10px; color: white;">Th??ng tin xe</h4>
                        <table class="table table-striped b-t b-light">
                            <thead>
                                <tr>
                                    <th>M?? s??? xe</th>
                                    <th>Bi???n s??? xe</th>
                                    <th>Lo???i xe</th>
                                    <th>S??? t???ng</th>
                                    <th>V??? tr?? ?????</th>
                                </tr>
                            </thead>
                            <tbody id="listBanDoc">
                                <tr>
                                    <td>X002</td>
                                    <td>43A1-57385</td>
                                    <td>Gh??? ng???i</td>
                                    <td>1</td>
                                    <td>VTA01</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- th??ng b??o s??? c??? -->
                <div class="tab-pane">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control inputText" value="CX02 - ???? N???ng ??i H?? N???i">
                            <input type="text" class="form-control inputText" placeholder="T??n s??? c???">
                            <input type="text" class="form-control inputText" placeholder="Chi ti???t s??? c???">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn-xanh btn2">G???i th??ng b??o</button>
                        </div>
                    </div>
                </div>
                @endif
            </div>

        </div>
    </div>

</div>

<script>
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const tabs = $$(".tab-item");
    const panes = $$(".tab-pane");

    const tabActive = $(".tab-item.active");
    const line = $(".tabs .line");

    line.style.left = tabActive.offsetLeft + "px";
    line.style.width = tabActive.offsetWidth + "px";

    tabs.forEach((tab, index) => {
        const pane = panes[index];

        tab.onclick = function() {
            $(".tab-item.active").classList.remove("active");
            $(".tab-pane.active").classList.remove("active");

            line.style.left = this.offsetLeft + "px";
            line.style.width = this.offsetWidth + "px";

            this.classList.add("active");
            pane.classList.add("active");
        };
    });
</script>

@endsection