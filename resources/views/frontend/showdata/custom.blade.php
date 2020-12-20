@extends('frontend.master')



@section('content')

    <div class="colorlib-trainers mt50 mh90vh">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="/">主畫面</a></li>
                        <li class="active"><a href="custom">客戶名單</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 colorlib-heading center-heading text-center animate-box">
                    <h2>客戶名單</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 colorlib-heading center-heading text-center animate-box">
                    <form class="navbar-form navbar" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="輸入客戶名稱">
                        </div>
                        <button type="submit" class="btn btn-default">搜尋</button>
                    </form>

                </div>

            </div>


            <div class="row">
                <div class="col-md-10 col-md-offset-1 login_div">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        @foreach ($group as $item)
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading{{ $item->id }}">

                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapse{{ $item->id }}" aria-expanded="true"
                                            aria-controls="collapse{{ $item->id }}">
                                            <span class="label label-default">{{ $item->type_name }}</span>
                                            {{ $item->country_name }} / {{ $item->group_name }}
                                            <span class="badge">{{ count($item->units) }}</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse{{ $item->id }}" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="heading{{ $item->id }}">
                                    <div class="panel-body">
                                        <div class="list-group">

                                        
                                                @foreach ($item->units as $unit)
                                                    <a  class="list-group-item" role="button" data-toggle="collapse" href="#collapse{{ $unit->id }}" aria-expanded="false" aria-controls="collapse{{ $unit->id }}">
                                                        {{ $unit->classfication['classification_name'] }} @ {{ $unit['unit_name'] }}
                                                    </a>
                                                    <div class="collapse" id="collapse{{ $unit->id }}">
                                                        <div class="well">
                                                          {{ $unit->unitsuser['user_name'] }}
                                                        </div>
                                                    </div>
                                                @endforeach
                                    

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- @foreach ($group as $item)

        客戶名稱：{{ $item->group_name }}<br />
        @foreach ($item->units as $unit)
            單位名稱： {{ $unit['unit_name'] }}<br />
            年度：{{ $unit->classfication['classification_name'] }}<br />
            單位人員：{{ $unit->unitsuser['user_name'] }}<br />
        @endforeach
        總班數：{{ count($item->units) }}

--}}




    @endsection 
