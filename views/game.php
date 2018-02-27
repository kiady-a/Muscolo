<!DOCTYPE html>
<html>
    <head>
        <title>Muscolo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css" >
        <link rel="icon" href="" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./assets/css/shifumi.css" >
    </head>
    <body class='container col-md-12 col-xs-12' style="background-color: #001333;">
        <noscript><p>Please enable javascript for this site to work properly</p><style>
            div {
                display: none;
            }
        </style></noscript>
        <div class="container">
          <?php include 'views/nav.php'; ?>
            <nav class="navbar navbar-default" style="background-color: #00358F; border: none;">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.php" class="navbar-brand logo" style="color: white;">M</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse" style="color: white;">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php" style="color : white; text-align:center;" onmouseover="this.style.color = 'white'; this.style.background = '#ffa400';" onmouseout="this.style.color = 'white'; this.style.background = 'none'">Home</a></li>
                            <li><a href=""></a></li>
                            <li><a href=""></a></li>
                            <?php //if ($_SESSION[""]) { ?>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="" style="color : white; text-align:center;" onmouseover="this.style.color = 'white'; this.style.background = '#ffa400';" onmouseout="this.style.color = 'white'; this.style.background = 'none'">My account</a></li>
                                <li><a href="" style="color : white; text-align:center;" onmouseover="this.style.color = 'white'; this.style.background = '#ffa400';" onmouseout="this.style.color = 'white'; this.style.background = 'none'">Logout</a></li>
                            </ul>
                        <?php //} else { ?>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a data-toggle="pill" href="#create" style="color : white; text-align:center;" onmouseover="this.style.color = 'white'; this.style.background = '#ffa400';" onmouseout="this.style.color = 'white'; this.style.background = 'none'">Create Account</a></li>
                                <li><a data-toggle="pill" href="#login" style="color : white; text-align:center;" onmouseover="this.style.color = 'white'; this.style.background = '#ffa400';" onmouseout="this.style.color = 'white'; this.style.background = 'none'">Login</a></li>
                            </ul>
                        <?php //} ?>
                    </div>
                </div>
            </nav>
            <div class="col-md-12 col-xs-12" style="background-color: #00358F; color: #fefcfb; padding:10px;">
                <div class="col-md-12 col-xs-12" style="color: #fefcfb; padding:10px;">
                    <div class="col-md-12 col-xs-12" style="color: #fefcfb; padding:10px; border: solid 1px; min-height: 400px; text-align: center;">
                      <p>ici les choses à faire</p>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12" style="color: #fefcfb; padding:10px; text-align: center;">
                    <input id="submit" name="next" type="submit" class="btn btn-primary" value="Suivant !" style="background-color: #ffa400; border: none; width:200px; height: 50px; font-size: 30px;">
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="Bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>

</html>
