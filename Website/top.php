<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <style>
        *{
            padding:0;
            margin: 0;
        }
        .myheader{
            text-align: center;margin: 0!important;
            padding: 1em;;
            color:white;font-family: 'Ubuntu', sans-serif;
            font-size: 40pt;
            z-index: 10000000000;

        }
        .page-myheader{
           /* background-color: #ff9b0f;margin: 0!important;*/
            padding: 0!important;
        }
        .head{background-color: #5bc117;
        margin: 0!important;
        padding: 0!important;}
        .mynavstyle{
            background-color: #5bc117;
        }
        .navbar-nav li a{
            color:white;
            color:white;font-family: 'Ubuntu', sans-serif;
            font-size: 13pt;
            background-color: #5bc117;
        }
        .icon-bar{
            background-color: white;
        }

        .jumbotron{
            margin-top: 1em;
            border-radius: 15px;
            text-align: center;
        }
        .playnowbtn{
            background-color: #5bc117;
        }
        *{
            font-family: 'Ubuntu', sans-serif!important;
        }

        ul.dropdown-menu{
            background-color: #5bc117;
        }

        ul.dropdown-menu li a{
            color: white;
        }

        ul.navbar-nav li a:hover, ul.navbar-nav li a:active,ul.navbar-nav li a:link,ul.navbar-nav li a:target{
            background-color: rgba(255,255,255,0.23);
            color: white;
        }



    </style>
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

2
    <![endif]-->
</head>
<body>
<div class="" style="height: 1200px;">
<div class="head">
    <nav class="navbar navbar-fixed-top mynavstyle">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">Coin Flip</a></li>
                    <li><a href="#">Roulette</a></li>
                    <li><a href="#">Blackjack</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Games <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Coin Flip</a></li>
                            <li><a href="#">Blackjack</a></li>
                            <li><a href="#">Roulette</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Logout</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">STE <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="page-myheader">
        <h1 class="myheader">Glücksspiel</h1>
    </div>

</div>

    <div class="content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="jumbotron">
                    <h1>Coin Flip</h1><br>
                    <p><a class="playnowbtn btn btn-primary btn-lg " href="#" role="button" style="background-color: #5bc117; border: 0px;">PLAY NOW</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="jumbotron">
                    <h1>Roulette</h1><br>
                    <p><a class="playnowbtn btn btn-primary btn-lg " href="#" role="button" style="background-color: #5bc117; border: 0px;">PLAY NOW</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="jumbotron">
                    <h1>Blackjack</h1><br>
                    <p><a class="playnowbtn btn btn-primary btn-lg " href="#" role="button" style="background-color: #5bc117; border: 0px;">PLAY NOW</a></p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>