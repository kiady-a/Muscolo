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
        <script>
        var nb = 1;

        function AddPerson(){

        }
        </script>
    </head>
    <body class='container col-md-12 col-xs-12' style="background-color: #ffa400;">
        <noscript><p>Please enable javascript for this site to work properly</p><style>
            div {
                display: none;
            }
        </style></noscript>
        <div class="container">
          <?php include 'views/nav.php'; ?>

            <div class="col-md-12 col-xs-12" style="background-color: #f8f8f8; color: #009ffd; padding:10px; border-radius:5px; min-height: 600px;">
                <div class="col-md-12 col-xs-12" style="padding:10px;">
                    <div class="col-md-12 col-xs-12" style="padding:10px; border-radius:5px; border: solid 1px; min-height: 400px; text-align: center;">
                      <p>ici les choses à faire</p>
                      <div id="form">
                      <input type="number" hidden value="1"/>
                      <input type="text" name="person1"/>
                      <button onclick="AddPerson()"><span class="glyphicon glyphicon-plus"></span></button>
                    </div>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12" style="color: #fefcfb; padding:10px; text-align: center;">
                    <input id="submit" name="next" type="submit" class="btn btn-primary" value="Suivant !" style="background-color: #00358F; border: none; width:200px; height: 50px; font-size: 30px;">
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
