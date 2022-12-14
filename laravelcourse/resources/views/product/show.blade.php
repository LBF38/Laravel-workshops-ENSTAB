@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$data["product"]["name"]}}</div>
                <div class="card-body">
                    <b>Product name:</b> {{$data["product"]["name"] }} 
                    <br/>
                    <b>Product price:</b> <span id="price">{{$data["product"]["price"]}}</span>
                    @if ($data["product"]["price"]>200)
                        <style>
                            #price{
                                font-weight: bold;
                                color: red;
                            }
                        </style>
                    @endif
                    <br/>
                    <br/>
                    <b>This product is available in the next sizes:</b><br/>
                    <ul>
                        @foreach($data["sizes"] as $s)
                        <li>{{$s}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection