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
        <script type="text/javascript">
        var nb = 4;

        function AddPerson(){
          nb++;
          var output = "<input type=\"number\" hidden value=\""+nb+"\"/>";
          for (var i = 0; i < nb; i++) {
            var id = "person"+i;
            var input = document.getElementById(id);
            console.log(input);
            // var name = input.value;
            var name = input;
            output+="<div class=\"form-group\"><input type=\"text\" name=\"person"+i+"\" id=\"person"+i+"\" value=\""+name+"\"/></div>";
          }
          output+="<button onclick=\"AddPerson()\"><span class=\"glyphicon glyphicon-plus\"></span></button>";
          document.getElementById('form').innerHTML = output;
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

            <div class="col-md-12 col-xs-12" style="background-color: #f8f8f8; color: #009ffd; padding:10px; border-radius:5px; height: 600px; overflow-y: scroll">
                <div class="col-md-12 col-xs-12" style="padding:10px;">
                  <legend>My Groups</legend>

                  <?php
                  if(!isNotEmptyGroup($_SESSION['id'])){

                    echo "You do not have a group yet. Create one if you want to use it again !";
                  }
                      while ($donnees = $myGroups->fetch()) {

                        $name = explode(',', $donnees['participants']);
                  ?>
                  <a href="index.php?participants=<?php echo $donnees['participants'];?>" onmouseover="this.style.background='#ffa400';this.style.color='#ffa400';" onmouseout="this.style.background='';this.style.color='';">
                    <div class="col-md-3 col-xs-10" style="padding:10px; border-radius:5px; border: solid 1px; min-height: 400px; text-align: center; margin:40px;">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th scope="col"><?php echo $donnees['nom'];?>
                              <a href="c_deleteGroup.php?id=<?php echo $donnees['idGroupe'] ?>">
                                <button type="button" class="btn btn-default btn-md pull-right">
                                      <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                  </button>
                              </a>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          foreach ($name as $value) { ?>
                            <tr>
                              <td><?php echo $value; ?></td>
                            </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </a>
                  <?php
                }
                  ?>
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
        <script type="text/javascript">AddPerson();</script>
    </body>

</html>
