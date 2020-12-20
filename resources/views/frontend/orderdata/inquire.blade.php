@extends('frontend.master')

@section('content')
<div class="colorlib-trainers mt50 mh90vh">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="/">主畫面</a></li>
                    <li class="active"><a href="inquire">詢價單</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 colorlib-heading center-heading text-center animate-box">
                <h2>詢價單</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 colorlib-heading center-heading text-center animate-box">
                <form class="navbar-form navbar" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="輸入詢價單名">
                    </div>
                    <button type="submit" class="btn btn-default">搜尋</button>
                </form>

            </div>

        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 login_div">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
                
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading">

                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapse" aria-expanded="false"
                                        aria-controls="collapseOne">
                                        <span class="label label-default"></span>
                                 
                       
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="heading">
                                <div class="panel-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6 ">
                                                <div class="input-group mb-2">
                                                    <span class="input-group-addon"
                                                        id="basic-addon"></span>
                                                    <label class="form-control"
                                                        aria-describedby="basic-addon">
                                                       </label>
                                                </div>
                                            </div>
                    
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- @foreach ($group as $item)
    
客戶名稱：{{$item->group_name}}<br/>
@foreach ($item->units as $unit)
單位名稱：   {{$unit["unit_name"]}}<br/>
年度：{{$unit->classfication["classification_name"]}}<br/>
單位人員：{{$unit->unitsuser["user_name"]}}<br/>
@endforeach
總班數：{{count($item->units)}}

<br/>

@endforeach
@foreach ($books as $item)
出版社名稱：{{$item->publish->publish_name}}<br/>
書籍名稱：{{$item->book_name}}<br/>
@foreach ($item->bookitem as $item)
書籍配套：{{$item->book_name}}<br/>
@endforeach




@endforeach --}}