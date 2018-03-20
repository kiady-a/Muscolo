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
    <body class='container col-md-12 col-xs-12' style="background-color: #ffa400;">
        <noscript>
          <p>Please enable javascript for this site to work properly</p>
          <style>
            div {
                display: none;
            }
        </style>
      </noscript>
        <div class="container">
          <?php include 'views/nav.php'; ?>
            <div id="main" class="col-md-12 col-xs-12" style="background-color: #f8f8f8; color: #009ffd; padding:10px; border-radius:5px; height: 600px; overflow-y: scroll">
              <table class='table table-bordered table-hover' >
                  <thead>
                  <th>Actions</th>
                  <th>Users</th>
                  <th>Options</th>
              </thead>
              <tbody>
                  <?php
                while ($donnees = $propositions->fetch()) {
                  $id = $donnees['idActionSugg'];
                      ?>
                      <tr>
                          <th><?php echo $donnees['nomAction'] ?></th>
                          <td><?php echo $donnees['email'] ?></td>
                          <td>
                            <form method="post">
                              <input type="hidden" name="id" value="<?php echo $id;?>">
                              <button type="submit" class="btn btn-default" name="validate">
                                  <span style="color: green;" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                              </button>
                              <button type="submit" class="btn btn-default" name="delete">
                                  <span style="color: red;" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                              </button>
                            </form>
                          </td>
                      </tr>
                      <?php
                  }
                  $propositions->closeCursor();
                  ?>
              </tbody>
          </table>
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
