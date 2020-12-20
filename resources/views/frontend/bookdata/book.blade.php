@extends('frontend.master')



@section('content')

    <div class="colorlib-trainers mt50 mh90vh">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="/">主畫面</a></li>
                        <li class="active"><a href="book">書籍資料</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 colorlib-heading center-heading text-center animate-box">
                    <h2>書籍資料</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 colorlib-heading center-heading text-center animate-box">
                    <form class="navbar-form navbar" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="輸入書名">
                        </div>
                        <button type="submit" class="btn btn-default">搜尋</button>
                    </form>

                </div>

            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 login_div">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
                        @foreach ($books as $item)
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading{{ $item->id }}">

                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapse{{ $item->id }}" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            <span class="label label-default">{{ $item->type_name }}</span>
                                            {{ $item->publish["publish_name"] }} / {{ $item->book_name }}
                                            @if ($item->version != '')
                                                {{ '(' . $item->version . ')' }}
                                            @endif
                                            @if ($item->review_num != '')
                                                {{ '(' . $item->review_num . ')' }}
                                            @endif
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse{{ $item->id }}" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="heading{{ $item->id }}">
                                    <div class="panel-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-6 ">
                                                    <div class="input-group mb-2">
                                                        <span class="input-group-addon"
                                                            id="basic-addon{{ $item->id }}">作者：</span>
                                                        <label class="form-control"
                                                            aria-describedby="basic-addon{{ $item->id }}">
                                                            {{ $item->author }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="input-group mb-2">
                                                        <span class="input-group-addon"
                                                            id="basic-addon{{ $item->id }}">審定期限</span>
                                                        <label class="form-control"
                                                            aria-describedby="basic-addon{{ $item->id }}">
                                                            {{ $item->review_data }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group  mb-2">
                                                        <span class="input-group-addon"
                                                            id="basic-addon{{ $item->id }}">定價$</span>
                                                        <label class="form-control"
                                                            aria-describedby="basic-addon{{ $item->id }}">
                                                            {{ $item->price }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <div class="input-group mb-2">
                                                        <span class="input-group-addon"
                                                            id="basic-addon{{ $item->id }}">學生價$</span>
                                                        <label class="form-control"
                                                            aria-describedby="basic-addon{{ $item->id }}">
                                                            {{ $item->student_price }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group  mb-2">
                                                        <span class="input-group-addon"
                                                            id="basic-addon{{ $item->id }}">優惠價$</span>
                                                        <label class="form-control"
                                                            aria-describedby="basic-addon{{ $item->id }}">
                                                            {{ $item->discount_price }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="list-group">
                                                        <span class="list-group-item disabled">配套名稱</span>
                                                        @foreach ($item->bookitem as $item)

                                                        <span class="list-group-item ">{{$item->book_name}}</span>

                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
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







@endsection
