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
           <form class="form-signin">
               <fieldset>
                 <legend>Add a new action</legend>
               <div class="form-group">
                  <label for="action" class="sr-only">Action</label>
                  <textarea class="form-control" rows="5" id="action" placeholder="Action" style="resize:none;"></textarea>
              </div>
               <hr />
               <input id="submit" name="submit" type="submit" class="btn btn-default" value="Sign in" style="background-color: #00358F; border: none; color:#f8f8f8; font-size: 30px;">
               </fieldset>
           </form>
</div>
       </div>
   </div>
</body>

</html>
