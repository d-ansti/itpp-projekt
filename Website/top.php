<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link rel="stylesheet" href="../css/styles/top.css">
</head>
<body>
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
                    <li><a href="main.php">Home</a></li>
                    <li><a href="coinflip.php">Coin Flip</a></li>
                    <li><a href="roulette.php">Roulette</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Games <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="coinflip.php">Coin Flip</a></li>
                            <li><a href="roulette.php">Roulette</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php">Logout</a></li>
		    <li><p><?php echo htmlentities($_SESSION['user']['coins'], ENT_QUOTES, 'UTF-8'); ?></p></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="page-myheader">
        <h1 class="myheader">Glücksspiel</h1>
    </div>
</div>
