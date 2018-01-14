@extends('layout.front.com.main')
@section('navbar')
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>


                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Product
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php $categories=\App\Http\Controllers\com\BaseController::getAllCategory();
                          $name;$id;
                            foreach($categories as $category )
                            {foreach($category as $key=>$value)
                             {   if($key=='name')
                                $name=$value;
                                    else
                                        $id=$value;
                               }
                                    echo  "<li><a href='\productlist?id=".$id."'>".$value."</a></li>";
                             }
                             ?>
                        </ul>
                    </li>

                    <li><a href="#">Deals</a></li>
                    <li><a href="#">Stores</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
                    <li><a href="#"><span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span> Bag</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @endsection