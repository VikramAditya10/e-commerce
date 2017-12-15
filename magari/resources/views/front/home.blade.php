@extends('layout.main')
@section('banner')

    <div >

        <img class="img-fluid" src={{asset("assets/images/logo/logo.jpg")}} style="width:100%">

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
                                <li><a  href="category.html">All shoes</a></li>
                                <li><a href="'">Page 1-2</a></li>
                                <li><a href="#">Page 1-3</a></li>
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
    </div>
@endsection

@section('latest')
    <div class="container">
        <!------------------------------- Carasoul--------------------------------->
        <div class="row">
            <div class="col-md-12">
                <div id="navCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#navCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#navCarousel" data-slide-to="1"></li>
                        <li data-target="#navCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src={{asset(".\assets\images\banner1.jpg")}} width="100%" alt="Los Angeles">
                        </div>

                        <div class="item">
                            <img src={{asset(".\assets\images\banner4.jpg")}} width="100%" alt="Chicago">
                        </div>

                        <div class="item">
                            <img src={{asset(".\assets\images\banner3.jpg")}} width="100%" alt="New York">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#navCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#navCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!--------------------------------------------------------------------------->
        <hr/>
        <h2><span align="right">Latest</span></h2>
        <div class="row">

            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">WORSTON TAN <span ><input class="pull-right" type="image" src={{asset("assets\images\icon\add-to-shopping-bag.png")}} width="8%" name="saveForm" class="btTxt submit" id="saveForm" /></span></div>
                    <a href="" data-toggle="modal" data-target="#myModal">   <div class="panel-body"><img src={{asset("assets\images\product\pro1.jpg")}} class="img-responsive" style="width:100%" alt="Image"></div></a>
                    <div class="panel-footer"  style="text-align:center;">
                        <div align="center"><button type="button" class=" btn btn-primary btn-block">Buy now</button>	</div>
                        <b>INR 4000</b><br/>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">WORSTON TAN</h4>
                                </div>
                                <div class="modal-body">
                                    <p><!------------------------------- Carasoul--------------------------------->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                                </ol>

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <img src={{asset(".\assets\images\product\pro1.jpg")}} width="100%" alt="Los Angeles">
                                                    </div>

                                                    <div class="item">
                                                        <img src={{asset(".\assets\images\product\pro7.jpg")}} width="100%" alt="Chicago">
                                                    </div>

                                                    <div class="item">
                                                        <img src={{asset(".\assets\images\product\pro8.jpg")}} width="100%" alt="New York">
                                                    </div>
                                                </div>

                                                <!-- Left and right controls -->
                                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">BARROW BROWN<span ><input class="pull-right" type="image" src={{asset("assets\images\icon\add-to-shopping-bag.png")}} width="8%" name="saveForm" class="btTxt submit" id="saveForm" /></span></div>
                    <a href="" data-toggle="modal" data-target="#myModal2">   <div class="panel-body"><img src={{asset("assets\images\product\pro2.jpg")}} class="img-responsive" style="width:100%" alt="Image"></div></a>

                    <div class="panel-footer" style="text-align:center;">
                        <div align="center"><button type="button" class=" btn btn-primary btn-block">Buy now</button>	</div>
                        <b>INR 4000</b>
                        <br/>
                        <span class="fa fa-star checked"></span>

                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></div>
                    <!-- Modal -->
                    <div id="myModal2" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">BARROW BROWN</h4>
                                </div>
                                <div class="modal-body">
                                    <p><!------------------------------- Carasoul--------------------------------->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                                                    <li data-target="#myCarousel2" data-slide-to="1"></li>
                                                    <li data-target="#myCarousel2" data-slide-to="2"></li>
                                                </ol>

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <img src={{asset(".\assets\images\product\pro2.jpg")}} width="100%" alt="Los Angeles">
                                                    </div>

                                                    <div class="item">
                                                        <img src={{asset(".\assets\images\product\pro9.jpg")}} width="100%" alt="Chicago">
                                                    </div>

                                                    <div class="item">
                                                        <img src={{asset(".\assets\images\product\pro10.jpg")}} width="100%" alt="New York">
                                                    </div>
                                                </div>

                                                <!-- Left and right controls -->
                                                <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#myCarousel2" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">BARROW NAVY<span ><input class="pull-right" type="image" src={{asset("assets\images\icon\add-to-shopping-bag.png")}} width="8%" name="saveForm" class="btTxt submit" id="saveForm" /></span></div>
                    <a href="" data-toggle="modal" data-target="#myModal3">  <div class="panel-body"><img src={{asset("assets\images\product\pro3.jpg")}} class="img-responsive" style="width:100%" alt="Image"></div></a>
                    <div class="panel-footer"style="text-align:center;"><div align="center"><button type="button" class=" btn btn-primary btn-block">Buy now</button>	</div>	<b>INR 4000</b>
                        <br/>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <!-- Modal -->
                    <div id="myModal3" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">BARROW NAVY</h4>
                                </div>
                                <div class="modal-body">
                                    <p><!------------------------------- Carasoul--------------------------------->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                    <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                                                    <li data-target="#myCarousel3" data-slide-to="1"></li>
                                                    <li data-target="#myCarousel3" data-slide-to="2"></li>
                                                </ol>

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <img src={{asset(".\assets\images\product\pro3.jpg")}} width="100%" alt="Los Angeles">
                                                    </div>

                                                    <div class="item">
                                                        <img src={{asset(".\assets\images\product\pro11.jpg")}} width="100%" alt="Chicago">
                                                    </div>

                                                    <div class="item">
                                                        <img src={{asset(".\assets\images\product\pro12.jpg")}} width="100%" alt="New York">
                                                    </div>
                                                </div>

                                                <!-- Left and right controls -->
                                                <a class="left carousel-control" href="#myCarousel3" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#myCarousel3" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div><br>
@endsection

@section('top-selling')
    <div class="container">
        <hr/>
        <h2><span align="right">Top Selling</span></h2>
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">EDISFORD TAN<span ><input class="pull-right" type="image" src={{asset("assets\images\icon\add-to-shopping-bag.png")}} width="8%" name="saveForm" class="btTxt submit" id="saveForm" /></span></div>
                    <a href="" data-toggle="modal" data-target="#myModal4"> <div class="panel-body"><img src={{asset("assets\images\product\pro4.jpg")}} class="img-responsive" style="width:100%" alt="Image"></div></a>
                    <div class="panel-footer" style="text-align:center;"><div align="center"><button type="button" class=" btn btn-primary btn-block">Buy now</button>	</div>	<b>INR 4000</b>
                        <br/>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <!-- Modal -->
                    <div id="myModal4" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">EDISFORD TAN</h4>
                                </div>
                                <div class="modal-body">
                                    <p><!------------------------------- Carasoul--------------------------------->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="myCarousel4" class="carousel slide" data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                    <li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
                                                    <li data-target="#myCarousel4" data-slide-to="1"></li>
                                                    <li data-target="#myCarousel4" data-slide-to="2"></li>
                                                </ol>

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <img src={{asset(".\assets\images\product\pro4.jpg")}} width="100%" alt="Los Angeles">
                                                    </div>

                                                    <div class="item">
                                                        <img src={{asset(".\assets\images\product\pro14.jpg")}} width="100%" alt="Chicago">
                                                    </div>

                                                    <div class="item">
                                                        <img src={{asset(".\assets\images\product\pro13.jpg")}} width="100%" alt="New York">
                                                    </div>
                                                </div>

                                                <!-- Left and right controls -->
                                                <a class="left carousel-control" href="#myCarousel4" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#myCarousel4" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">HESKETH NAVY<span ><input class="pull-right" type="image" src={{asset("assets\images\icon\add-to-shopping-bag.png")}} width="8%" name="saveForm" class="btTxt submit" id="saveForm" /></span></div>
                    <a href="" data-toggle="modal" data-target="#myModal5">   <div class="panel-body"><img src={{asset("assets\images\product\pro5.jpg")}} class="img-responsive" style="width:100%" alt="Image"></div></a>
                    <div class="panel-footer" style="text-align:center;"><div align="center"><button type="button" class=" btn btn-primary btn-block">Buy now</button>	</div>	<b>INR 4000</b>
                        <br/>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <!-- Modal -->
                    <div id="myModal5" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">HESKETH NAVY</h4>
                                </div>
                                <div class="modal-body">
                                    <p><!------------------------------- Carasoul--------------------------------->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="myCarousel5" class="carousel slide" data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                    <li data-target="#myCarousel5" data-slide-to="0" class="active"></li>
                                                    <li data-target="#myCarousel5" data-slide-to="1"></li>
                                                    <li data-target="#myCarousel5" data-slide-to="2"></li>
                                                </ol>

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <img src={{asset(".\assets\images\product\pro5.jpg")}} width="100%" alt="Los Angeles">
                                                    </div>

                                                    <div class="item">
                                                        <img src={{asset(".\assets\images\product\pro15.jpg")}} width="100%" alt="Chicago">
                                                    </div>

                                                    <div class="item">
                                                        <img src={{asset(".\assets\images\product\pro16.jpg")}} width="100%" alt="New York">
                                                    </div>
                                                </div>

                                                <!-- Left and right controls -->
                                                <a class="left carousel-control" href="#myCarousel5" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#myCarousel5" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">NEWTON NAVY<span ><input class="pull-right" type="image" src={{asset("assets\images\icon\add-to-shopping-bag.png")}} width="8%" name="saveForm" class="btTxt submit" id="saveForm" /></span></div>
                    <a href="" data-toggle="modal" data-target="#myModal6">  <div class="panel-body"><img src={{asset("assets\images\product\pro6.jpg")}} class="img-responsive" style="width:100%" alt="Image"></div></a>
                    <div class="panel-footer" style="text-align:center;"><div align="center"><button type="button" class=" btn btn-primary btn-block">Buy now</button>	</div>	<b>INR 4000</b>
                        <br/>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div id="myModal6" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">HESKETH NAVY</h4>
                                </div>
                                <div class="modal-body">
                                    <p><!------------------------------- Carasoul--------------------------------->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="myCarousel6" class="carousel slide" data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                    <li data-target="#myCarousel6" data-slide-to="0" class="active"></li>
                                                    <li data-target="#myCarousel6" data-slide-to="1"></li>
                                                    <li data-target="#myCarousel6" data-slide-to="2"></li>
                                                </ol>

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <img src={{asset(".\assets\images\product\pro6.jpg")}} width="100%" alt="Los Angeles">
                                                    </div>

                                                    <div class="item">
                                                        <img src={{asset(".\assets\images\product\pro17.jpg")}} width="100%" alt="Chicago">
                                                    </div>

                                                    <div class="item">
                                                        <img src={{asset(".\assets\images\product\pro18.jpg")}} width="100%" alt="New York">
                                                    </div>
                                                </div>

                                                <!-- Left and right controls -->
                                                <a class="left carousel-control" href="#myCarousel6" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#myCarousel6" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div><br><br>
@endsection