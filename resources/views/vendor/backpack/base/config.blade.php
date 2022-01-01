@extends(backpack_view('blank'))

@php

    @endphp

@section('content')
    @if(session("success"))
        @php
        \Prologue\Alerts\Facades\Alert::success("Cập nhật thành công");
        @endphp
    @endif
    <section class="container-fluid d-print-none">
        <a href="javascript: window.print();" class="btn float-right"><i class="la la-print"></i></a>
        <h2>
            <span class="text-capitalize">Cài đặt</span>
        </h2>
    </section>
    <div class="container-fluid animated fadeIn">
        <div class="row">
            <div class="col-md-8">
                <form action="{{route("config.store")}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="main_url">Link Trang chủ</label>
                        <input type="text" name="main_url" class="form-control" id="main_url" value="{{$main_url??""}}"
                               aria-describedby="emailHelp">
                    </div>
                    @foreach($features as $key => $feature)
                        <div class="form-group">
                            <label for="{{$feature->name}}">Link {{$feature->name}}</label>
                            <input type="text" name="feature-{{$feature->name}}" class="form-control" id="main_url"
                                   value="{{$feature->value??""}}" aria-describedby="emailHelp">
                        </div>
                    @endforeach
                    <div class="form-group">
                        <label for="main_url">Content</label>
                        <input type="text" name="contents" class="form-control" id="main_url" value="{{$content??""}}"
                               aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="main_url">Keyword</label>
                        <input type="text" name="keyword" class="form-control" id="main_url" value="{{$keyword??""}}"
                               aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="main_url">Analytic Link</label>
                        <input type="text" name="analytic" class="form-control" id="main_url" value="{{$analytic??""}}"
                               aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection
