@extends('layout.admin.admin-layout')
@section('content')
    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav hidden-xs">
                <h2>Logo</h2>
                <ul class="nav nav-pills nav-stacked">
                    <li  data-toggle="collapse" data-target="#dashboard" class="collapsed active">
                        <a href="#"><i class="fa fa-gift fa-lg"></i>Dashboard<span class="arrow"></span></a>
                    </li>

                    <!--Product -->
                    <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                        <a href="#"><i class="fa fa-gift fa-lg"></i>Product<span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="products">
                        <li class="active"><a href="#">Add New Product</a></li>
                        <li><a href="#">Update Product</a></li>
                        <li><a href="#">View</a></li>
                    </ul>
                    <!--Ctaegory-->
                    <li  data-toggle="collapse" data-target="#category" class="collapsed active">
                        <a href="#"><i class="fa fa-gift fa-lg"></i>Category<span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="category">
                        <li class="active"><a href="#">Add New Category</a></li>
                        <li><a href="#">Update Category</a></li>
                        <li><a href="#">View Category</a></li>
                    </ul>

                </ul><br>
            </div>
            <br>

            <div class="col-sm-9">
                <div class="well">
                    <h4>Dashboard</h4>
                    <p>Some text..</p>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="well">
                            <h4>Users</h4>
                            <p>1 Million</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="well">
                            <h4>Pages</h4>
                            <p>100 Million</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="well">
                            <h4>Sessions</h4>
                            <p>10 Million</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="well">
                            <h4>Bounce</h4>
                            <p>30%</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="well">
                            <p>Text</p>
                            <p>Text</p>
                            <p>Text</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="well">
                            <p>Text</p>
                            <p>Text</p>
                            <p>Text</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="well">
                            <p>Text</p>
                            <p>Text</p>
                            <p>Text</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="well">
                            <p>Text</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="well">
                            <p>Text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection