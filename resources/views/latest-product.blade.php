@extends('layouts.client')
@section('css')
/*slider*/
.slider-wrap {
    width:100%;
    position: relative;
    overflow:hidden;
}

.slider-list {
    height: 30rem;
  transition: 900ms cubic-bezier(0.48, 0.15, 0.18, 1);
  position: relative;
}

.slider-item {
    height:100%;
    width:100%;
    position: absolute;
}

.slider-item img {
    width:100%;
    height:100%;
    object-fit: cover;
}

.next-btn,.prev-btn {
    border: 1px solid var(--text-hover);
    padding: 16px;
    /* background: transparent; */
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 18px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
    z-index: 100;
    cursor: pointer;
    transition: 400ms;
}

.next-btn {
    right:0;
}

.prev-btn {
    left:0;
}

.next-btn i,.prev-btn i {
    color: var(--text-hover);
}
{{-- END SLIDER  --}}

/* Widget  */
.widget-wrap {
    margin: 32px 0;
}

.widget-list {
    display: flex;
    align-items:center;
}

.widget-list .widget-item{
    width:33.33333333%;
}

.widget-list .widget-item:hover {
    background-color:#e3e3e3;
}

.policy-item {
    width: 100%;
    height: auto;
    text-align: center;
    border:1px solid #e3e3e3;
}

.policy_img {
    padding:28px 0 16px 0;
}

.policy-info span {
    text-transform: uppercase;
    font-family: Roboto;
    font-weight: 700;
}

.policy-info p {
    color:var(--text-color);
    padding-bottom: 28px;
}

/* Collection  */
.section-collection {
    /* margin-bottom:100px; */
}

.collection-item {
    background-color: #e3e3e3e3;
    width:100%;
    height:235px;
    position: relative;
    object-fit: cover;
    margin: 15px 0;
}

.collection-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.collection-item:hover {
    background-color: #000;
}

.collection-item.big {
    width:100%;
    height:500px;
}

.collection-item.big img {
    width: 100%;
    height: 100%;
    /* object-fit: cover; */
}

.collection-info {
    padding: 0 24px;
    position:absolute;
    font-size: 14px;
    bottom:20px;
    color:#fff;
    font-family: Roboto, "Helvetica Neue";
}
/*Content */
.section_wrap-product {
    margin-top:32px;
    margin-bottom:32px;
    /* text-align:center; */
}

.content-title {
    text-align:center;
}

.content-title h2 {
    display: inline-block;
    font-size: 1.28571em;
    text-transform: uppercase;
    line-height: 1;
    margin: 0 0 20px 0;
    padding-bottom: 10px;
    border-bottom:2px solid var(--text-hover);
}

.tabs-title > a {
    padding-left: 32px;
    text-decoration: none;
    letter-spacing: 1px;
    font-family: Roboto, "Helvetica Neue";
    color:var(--text-color);
}

.tabs-title > a:hover {
    color:var(--text-hover);
    text-decoration: none;
}

.tab-content {
    margin:16px 0;
}

.product-block {
    margin:15px 0;
}

.product-img {
    position: relative;
    overflow: hidden;
}

.product-img a {
    display: block;
    height:310px;
    width:100%;

}

.product-img a img {
    width:100%;
    height:100%;
}

.product-info {
    padding: 15px 8px;
    text-align: center;
}

.product-info a:nth-child(1) {
    color:var(--text-hover);
    text-decoration: none;
}

.product-info a.button {
    text-decoration:none;
    border:0.1px solid #000;
    color:var(--text-primary)
}

.product-info a.button:hover{
    border:none;
    outline: none;
    color:#fff;
}

.product-info a h4 {
    font-size: var(--text-size);

}

.section_home-banner {
    margin-top:40px;
}

.section_home-banner .home-banner-pd {
    padding:0;
}

.block-banner-category {
    position: relative;
    height:350px;
    overflow: hidden;
    object-fit: cover;
    background: #f4f4f4;
    margin: 4px 2px;
}

.block-banner-category a.link-banner {
    display: block;
    transition: opacity 150ms linear, color 150ms linear, background 150ms linear;
}

.block-banner-category a.link-banner img {
    width: 100%;
    height: 100%;
}

.caption_banner {
    position: absolute;
    width: 100%;
    padding: 0 50px;
    bottom: 50px;
    color: #ffffff;
}

.caption_banner .subtitle {
    font-size: var(--text-size);
    font-weight: 400;
}

.caption_banner h3 {
    font-size: 23px;
    margin: 15px 0;
    color: #ffffff;
}

.wrapper-home-information{
    width: 100%;
    display: flex;
}

.box-info {
    width:100%;
    position: absolute;
    top:50%;
    left:15%;
    bottom:20%;
}


.box-info h2 {
    padding:15px 0 25px 0;
    font-size:48px;
    color:#fff;
}

.box-img {
    height: 500px;
    width: 100%;
    display: block;
}

.box-img img {
    width: 100%;
    height:100%;
    object-fit: cover;
}

.info-content {
    padding:30px 25px
}

.info-content ul li {
    list-style: none;
}

main {
    overflow-x: hidden;
}
@endsection
@section('slider')
<!-- Slider  -->
<div class="slider-wrap">
    <div class="prev-btn"><i class="fas fa-chevron-left"></i></div>
      <div class="slider-list">
          <div class="slider-item active">
              <img src="{{url('assets/admin/slider/slider_1.png')}}" alt="">
          </div>
          <div class="slider-item">
              <img src="{{url('assets/admin/slider/slider_2.png')}}" alt="">
          </div>
          <div class="slider-item">
              <img src="{{url('assets/admin/slider/slider_3.png')}}" alt="">
          </div>
          <div class="slider-item">
            <img src="{{url('assets/admin/slider/slider_2.png')}}" alt="">
        </div>
        <div class="slider-item active">
            <img src="{{url('assets/admin/slider/slider_1.png')}}" alt="">
        </div>
      </div>
    <div class="next-btn"><i class="fas fa-chevron-right"></i></div>
</div>
<!-- end slider  -->
@endsection
@section('widget_collection')
<!-- Widget  -->
<div class="widget-wrap">
    <div class="container">
        <div class="widget-list">
            <div class="widget-item">
                <div class="policy-item">
                    <div class="policy_img">
                        <img src="./assets/images/policy1.png" alt="">
                    </div>
                    <div class="policy-info">
                        <span>Mi???n ph?? v???n chuy???n</span>
                        <p>Trong 10km v???i m???i ????n ?????t h??ng</p>
                    </div>
                </div>
            </div>
            <div class="widget-item">
                <div class="policy-item">
                    <div class="policy_img">
                        <img src="./assets/images/policy2.png" alt="">
                    </div>
                    <div class="policy-info">
                        <span>Ho??n ti???n </span>
                        <p>100% trong 30 ng??y </p>
                    </div>
                </div>
            </div>
            <div class="widget-item">
                <div class="policy-item">
                    <div class="policy_img">
                        <img src="./assets/images/policy1.png" alt="">
                    </div>
                    <div class="policy-info">
                        <span>H??? tr??? 24/24</span>
                        <p>G???i 19001986 b???t c??? l??c n??o </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="section_wrap-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-12">
                    <div class="content-title">
                        <h2>{{$page_title}}</h2>
                        <div class="tabs-title">
                            <a href="{{route('latest-product')}}">M???i nh???t </a>
                            <a href="{{route('product-hot')}}">N???i b???t</a>
                            <a href="{{route('product-selling')}}">B??n ch???y</a>
                        </div>
                    </div>
                </div>
            </div>
           <div class="col-md-12 col-sm-12">
            <div class="tab-content">
                <div class="row">
                    @foreach ($products as $pro )
                        <div class="col-sm-3 col-md-3">
                            <div class="product-block">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{url('myuploads/'.$pro->pro_image)}}" alt="">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="#!">
                                        <h4 class="product-title">{{$pro->pro_name}}</h4>
                                    </a>
                                    <p>{{number_format($pro->pro_price,0,',','.')}}??</p>
                                    <a href="{{route('product-detail',[$pro->pro_slug,$pro->id])}}" class="button">Xem th??m </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
           </div>
        </div>
    </div>
</div>
<!-- <div class="section_home-banner">
    <div class="row">
        @foreach ($articals as $ar)
            <div class="col-xs-12 col-sm-4 col-md-4 home-banner-pd">
                <div class="block-banner-category">
                    <a href="{{route('detail-artical',[$ar->ns_slug,$ar->id])}}" class="link-banner">
                        <img src="{{asset('assets/images/'.$ar->ns_image)}}" alt="">
                    </a>
                </div>
                <div class="caption_banner">
                    <span class="subtitle">{{$ar->ns_name}}</span>
                    <h3>Sofa</h3>
                    <a href="{{route('detail-artical',[$ar->ns_slug,$ar->id])}}" class="button">Xem Ngay</a>
                </div>
            </div>
        @endforeach
    </div>

</div> -->

<!-- <div class="wrapper-home-information">
    <div class="col-md-6">
        <div class="box-info">
            <h2>V??? v???i ch??ng t??i </h2>
            <a href="#!" class="button">XEM NGAY</a>
        </div>
        <div class="box-img">
            <img src="{{url('assets/images/phong_khach_chuan.jpg')}}" alt="">
        </div>
    </div>
    <div class="col-md-6">
        <div class="info-content">
            <p>Trang gi???i thi???u gi??p kh??ch h??ng hi???u r?? h??n v??? c???a h??ng c???a b???n. H??y cung c???p th??ng tin c??? th??? v??? vi???c kinh doanh, v??? c???a h??ng, th??ng tin li??n h???. ??i???u n??y s??? gi??p kh??ch h??ng c???m th???y tin t?????ng khi mua h??ng tr??n website c???a b???n.</p>
            <p>M???t v??i g???i ?? cho n???i dung trang Gi???i thi???u:</p>
            <div>
                <ul>
                    <li>B???n l?? ai</li>
                    <li>Gi?? tr??? kinh doanh c???a b???n l?? g??</li>
                    <li>?????a ch??? c???a h??ng</li>
                    <li>B???n ???? kinh doanh trong ng??nh h??ng n??y bao l??u r???i</li>
                    <li>B???n kinh doanh ng??nh h??ng online ???????c bao l??u</li>
                    <li>?????i ng?? c???a b???n g???m nh???ng ai</li>
                    <li>Th??ng tin li??n h???</li>
                    <li>Li??n k???t ?????n c??c trang m???ng x?? h???i (Twitter, Facebook)</li>
                    <p>B???n c?? th??? ch???nh s???a ho???c xo?? b??i vi???t n??y t???i ????y ho???c th??m nh???ng b??i vi???t m???i trong ph???n qu???n l?? Trang n???i dung.</p>
                </ul>
            </div>
        </div>
    </div>
</div> -->
@endsection

