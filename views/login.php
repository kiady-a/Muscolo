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

<body>
   <div class="container">
       <?php include 'views/nav.php'; ?>
       <div class="col-md-6 col-md-offset-3">

           <form class="form-signin">
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
               <hr />
               <button class="btn btn-lg btn-block" type="submit" style="color:#fefefe;background-color:#ffa400">Sign in</button>
               </fieldset>
           </form>

       </div>
   </div>
</body>

</html>
