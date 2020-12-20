@extends('frontend.master')

@section('content')


    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(images/img_bg_1.png);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 col-xs-12 col-md-pull-1 slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">

                                        <h1>歡迎您來到{{setting('site.title')}}</h1>
                                    <h2>{{setting('site.description')}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
  
            </ul>
        </div>
    </aside>

  

   
@stop

