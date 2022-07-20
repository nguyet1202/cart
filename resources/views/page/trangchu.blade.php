@extends('master')
@section('content')

<div class="rev-slider">
            <div class="fullwidthbanner-container">
                <div class="fullwidthbanner">
                    <div class="bannercontainer" >
                    <div class="banner" >
                            <ul>
                                
                                @foreach($slide as $sl)
                                <!-- THE FIRST SLIDE -->
                                 <li><img src="/sources/image/slide/{{$slide[2]->image}}" alt="clmm" width="100%"></li>
                           @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="tp-bannertimer"></div>
                </div>
            </div>
            <!--slider-->
        </div>
                
    
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4>New Products</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">Tìm thấy  sản phẩm</p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="row">
                                    @foreach($new_product as $new)
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="signle-item-header">
                                                <a href="detail/{{$new->id}}"><img width="200" height="200"
                                                src="/sources/image/product/{{$new->image}}" alt=""></a>
                                            </div>
                                            @if($new->promotion_price!=0)
                                                <div class="ribbon-wrapper">
                                                    <div class="ribbon sale">Sale</div>
                                                </div>
                                            @endif
                                            
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{$new->name}}</p>
                                                <p class="single-item-price"> 
                                                @if($new->promotion_price==0)
                                                    <span>{{$new->unit_price}} dong</span> 
                                                @else
                                                    <span>{{$new->unit_price}} dong</span>
                                                    <span>{{$new->promotion_price}} dong</span>
                                                @endif
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="{{route('themgiohang',$new->id)}}">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </a>
                                                
                                                <a class="beta-btn primary" href="detail/{{$new->id}}">Details <i 
                                                class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            <div class="row">{{$new_product->links()  }}</div>
                        </div> <!-- .beta-products-list -->

                        <div class="space50">&nbsp;</div>

                        <div class="beta-products-list">
                                <h4>Top Products</h4>
                                <div class="beta-products-details">
                                    <p class="pull-left">438 styles found</p>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                @foreach($sanpham_khuyenmai as $spkm)
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="detail/{{$new->id}}"><img src="/sources/image/product/{{$spkm->image}}" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{$spkm->name}}</p>
                                                <p class="single-item-price" style="font-size: 18px">
                                                    <span>{{number_format($spkm->unit_price)}}dong</span>
                                                    <span>{{number_format($spkm->promotion_price)}}dong</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="{{route('themgiohang',$new->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="detail/{{$new->id}}">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                                
                                <div class="row">{{$sanpham_khuyenmai->links()}}</div>
                            </div> <!-- .beta-products-list -->
                    </div>
                </div> <!-- end section with sidebar and main content -->


            </div> <!-- .main-content -->
        </div> <!-- #content -->
        
    </div> <!-- .container -->
@endsection
