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
            <div id="main" class="col-md-12 col-xs-12" style="background-color: #f8f8f8; color: #009ffd; padding:10px; border-radius:5px; min-height: 600px; overflow-y: scroll">
              <table class='table table-bordered table-hover' >
                  <thead>
                  <th>#</th>
                  <th>Prenom</th>
                  <th>Nom</th>
                  <th>Pseudo</th>
                  <th>Édition</th>
              </thead>
              <tbody>
                  <?php
                  while ($donnees = $propositions->fetch()) {
                      ?>
                      <tr>
                          <th><?php echo $donnees['nomAction'] ?></th>
                          <td><?php echo $donnees['idUtilisateur'] ?></td>
                          <td>
                              <a href="edit">
                                  <button type="submit" class="btn btn-default" name="edit">
                                      <span style="color:#346EF2;" class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                  </button>
                              </a>
                              <button type="submit" class="btn btn-default" name="delete" data-toggle="modal" data-target="#myModal<?php echo $donnees['idUser'] ?>">
                                  <span style="color:red;" class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                              </button>
                          </td>
                      </tr>
                      <?php
                  }
                  $users->closeCursor();
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
