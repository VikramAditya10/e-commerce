<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @stack('scripts')
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 550px}

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* On small screens, set height to 'auto' for the grid */
        @media screen and (max-width: 767px) {
            .row.content {height: auto;}
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Dashboard</a></li>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Product</a></li>
                <li><a href="#">Category</a></li>
            </ul>
        </div>
    </div>
</nav>
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
                    <li class="active"><a href="/addproduct">Add New Product</a></li>
                    <li><a href="#">Update Product</a></li>
                    <li><a href="/viewproducts">View</a></li>
                </ul>
                <!--Ctaegory-->
                <li  data-toggle="collapse" data-target="#category" class="collapsed active">
                    <a href="#"><i class="fa fa-gift fa-lg"></i>Category<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="category">
                    <li class="active"><a href="/addcategory">Add New Category</a></li>
                    <li><a href="#">Update Category</a></li>
                    <li><a href="#">View Category</a></li>
                </ul>

            </ul><br>
        </div>
        <br>

        <div class="col-sm-9">
            <div class="well">
                @yield('content');
            </div>

        </div>
    </div>
</div>


</body>
</html>
