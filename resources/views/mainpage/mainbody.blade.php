@extends('layouts.home')

@section('title')
  <title>Home | E-Shopper</title>
@stop

@section('content')
  <section id="slider"><!--slider-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="slider-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#slider-carousel" data-slide-to="1"></li>
              <li data-target="#slider-carousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
              <div class="item active">
                {{-- <div class="col-sm-6">
                  <h1><span>E</span>-SHOPPER</h1>
                  <h2>Free E-Commerce Template</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                  <button type="button" class="btn btn-default get">Get it now</button>
                </div> --}}
                <div class="col-sm-12">
                  <img src="{{ asset('catalogue/images/home/slider1.jpg') }}" class="girl img-responsive" alt="" />
                  <img src="{{ asset('catalogue/images/home/pricing.png') }}"  class="pricing" alt="" />
                </div>
              </div>
              <div class="item">
                <div class="col-sm-6">
                  <h1><span>E</span>-SHOPPER</h1>
                  <h2>100% Responsive Design</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                  <button type="button" class="btn btn-default get">Get it now</button>
                </div>
                <div class="col-sm-6">
                  <img src="{{ asset('catalogue/images/home/girl2.jpg') }}" class="girl img-responsive" alt="" />
                  <img src="{{ asset('catalogue/images/home/pricing.png') }}"  class="pricing" alt="" />
                </div>
              </div>

              <div class="item">
                <div class="col-sm-6">
                  <h1><span>E</span>-SHOPPER</h1>
                  <h2>Free Ecommerce Template</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                  <button type="button" class="btn btn-default get">Get it now</button>
                </div>
                <div class="col-sm-6">
                  <img src="{{ asset('catalogue/images/home/girl3.jpg') }}" class="girl img-responsive" alt="" />
                  <img src="{{ asset('catalogue/images/home/pricing.png') }}" class="pricing" alt="" />
                </div>
              </div>

            </div>

            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
          </div>

        </div>
      </div>
    </div>
  </section><!--/slider-->

  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="left-sidebar">
            <h2>Category</h2>
            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#sony">
                      <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                      Sony
                    </a>
                  </h4>
                </div>
                <div id="sony" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul>
                      <li><a href="#">Full 3D Projector </a></li>
                      <li><a href="#">PC 3D Ready Projector </a></li>
                      <li><a href="#">Digital Multimedia </a></li>

                    </ul>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#epson">
                      <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                      Epson
                    </a>
                  </h4>
                </div>
                <div id="epson" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul>
                      <li><a href="#">Full 3D Projector </a></li>
                      <li><a href="#">PC 3D Ready Projector </a></li>
                      <li><a href="#">Digital Multimedia </a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#optoma">
                      <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                      Optoma
                    </a>
                  </h4>
                </div>
                <div id="optoma" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul>
                      <li><a href="#">Full 3D Projector </a></li>
                      <li><a href="#">PC 3D Ready Projector </a></li>
                      <li><a href="#">Digital Multimedia </a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#benq">
                      <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                      BenQ
                    </a>
                  </h4>
                </div>
                <div id="benq" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul>
                      <li><a href="#">Full 3D Projector </a></li>
                      <li><a href="#">PC 3D Ready Projector </a></li>
                      <li><a href="#">Digital Multimedia </a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><!--/category-products-->

            <div class="brands_products"><!--brands_products-->
              <h2>Brands</h2>
              <div class="brands-name">
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
                  <li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                  <li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
                  <li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
                  <li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
                  <li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
                  <li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                </ul>
              </div>
            </div><!--/brands_products-->


            <div class="shipping text-center"><!--shipping-->
              <img src="images/home/shipping.jpg" alt="" />
            </div><!--/shipping-->

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
