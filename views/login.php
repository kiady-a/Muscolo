<!DOCTYPE html>
<html>

<head>
   <title>Muscolo</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
   <link rel="icon" href="" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="./assets/css/shifumi.css">
</head>

<body class='container col-md-12 col-xs-12' style="background-color: #ffa400;">
   <div class="container">
       <?php include 'views/nav.php'; ?>
       <div class="col-md-12 col-xs-12" style="background-color: #f8f8f8; color: #009ffd; padding:10px; border-radius:5px; min-height: 600px;">
         <div class="col-md-6 col-md-offset-3">
           <?php if(isset($_GET['register'])){ ?>
           <form class="form-signin" method="post" action="c_login.php?register=register">
           <?php }
           elseif(!isset($_GET['register'])){ ?>
           <form class="form-signin" method="post" action="c_login.php">
           <?php }?>
               <fieldset>
                 <legend>Please sign in</legend>
               <div class="form-group">
                   <label for="inputEmail" class="sr-only">Email address</label>
                   <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
               </div>
               <div class="form-group">
                   <label for="inputPassword" class="sr-only">Password</label>
                   <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
               </div>
               <?php if($_GET['register'] == "register"){ ?>
               <div class="form-group">
                   <label for="inputPassword" class="sr-only">Repeat password</label>
                   <input type="password" id="inputRepeatPassword" class="form-control" placeholder="Repeat password" required="">
               </div>
             <?php } ?>
               <hr />
               <input id="submit" name="submit" type="submit" class="btn btn-default" value="Sign in" style="background-color: #00358F; border: none; color:#f8f8f8; font-size: 30px;">
               </fieldset>
           </form>
           <?php if(isset($erreur)){
             echo $erreur;
           } ?>
</div>
       </div>
   </div>
</body>

</html>
