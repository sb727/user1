<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Lang" content="en">
    <meta name="author" content="">
    <meta http-equiv="Reply-to" content="@.com">
    <meta name="generator" content="PhpED 6.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="creation-date" content="06/01/2011">
    <meta name="revisit-after" content="15 days">
    <title>Travelo</title>

    <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="asset/css/business-frontpage.css" rel="stylesheet">
    <link href="asset/css/font-awesome.min.css" rel="stylesheet">
    <!-- jQuery CSS -->
    <link href="asset/css/jquery-ui.css" rel="stylesheet">
    <!-- jQuery js -->
    <script src="asset/js/jquery.js"></script>
    <script src="asset/js/jquery-1.10.2.js"></script>
    <script src="asset/js/jquery-ui.js"></script>
    <!-- jQuery custom js -->
    <script src="asset/js/jquery-custom.js"></script>

</head>
<body>
<header class = "header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href = "#" class = "logo"></a>
                <div class="menubar">
                    <ul class="nav navbar-nav top_menu ">
                        <li>
                            <a href="#">HOME</a>
                        </li>
                        <li>
                            <a  href="#">SLIDERS</a>
                        </li>
                        <li>
                            <a  href="#">HOTELS</a>
                        </li>
                        <li>
                            <a  href="#">FLIGHTS</a>
                        </li>
                        <li>
                            <a  href="#">CARS</a>
                        </li>
                        <li>
                            <a  href="#">CURISES</a>
                        </li>
                        <li>
                            <a  href="#">PASGE</a>
                        </li>
                        <li>
                            <a  href="#">SHORTCODES</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</header>
<section class="banner-part">
    <div  class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1 class="title">Let`s Discover the world together!</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="search-content">
    <div class="container">
        <div class="midmenu">
            <h6>HOTEL</h6>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <form method="POST">
                <div class="form-group col-md-3 col-sm-6">
                    <h4>where</h4>
                    <p class="search-details">YOUR DESTINATION</p>
                    <input id="where" type="text" name="where" placeholder="enter the destination or hotel name">
                </div>
                <div class="form-group col-md-4 col-sm-6">
                    <h4>when</h4>
                    <div class="row">
                        <div class="col-md-6  col-sm-6">
                            <p class="search-details">CHECK IN</p>
                            <input id="checkin" type="text" placeholder="mm/dd/yy">
                        </div>
                        <div class="col-md-6  col-sm-6">
                            <p class="search-details">CHECK OUT</p>
                            <input id="checkout" type="text" placeholder="mm/dd/yy">
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-3 col-sm-6">
                    <h4>Who</h4>
                    <div class="row">
                        <div class="col-md-4  col-sm-4">
                            <p class="search-details">ROOMS</p>
                            <select>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                        <div class="col-md-4  col-sm-4">
                            <p class="search-details">ADULTS</p>
                            <!--<div class="btn-group">
                            <select type="select" class="btn btn-default">1</select>
                            <select type="select" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                            </select>
                            <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            </ul>
                            </div>-->
                            <select>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                        <div class="col-md-4  col-sm-4">
                            <p class="search-details">KIT</p>
                            <select>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-2 col-sm-6">
                    <button type="button" id="search" class="search-btn active">SEARCH NOW</button>
                </div>
            </form>
        </div>
    </div>
</section>