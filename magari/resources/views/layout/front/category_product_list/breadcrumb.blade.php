@extends('layout.front.category_product_list.banner')
@section('breadcrumb')
    <div class="panel panel-default">
        <div class="panel-head">
            <ul class="breadcrumb">
                <li><a href="home.html">Home</a></li>
                <li><a href="#">Products</a></li>
                <li class="active"><a href="">{{$name}}</a></li>
            </ul>
        </div>
    </div>
    <!------------------------------------>
@endsection