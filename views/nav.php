<?php
session_start();
?>
<nav class="navbar navbar-default" style="background-color: #f8f8f8; border: none;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand logo" style="color: #009ffd;">Muscolo</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" style="color: #009ffd;">
            <ul class="nav navbar-nav">
                <li><a href="index.php" style="color : #009ffd; text-align:center;" onmouseover="this.style.color = '#f8f8f8'; this.style.background = '#009ffd';" onmouseout="this.style.color = '#009ffd'; this.style.background = 'none'">Play</a></li>
                <?php  if($_SESSION['log'] == true){
                  if ($_SESSION['admin'] > 0) { ?>
                    <li><a href="c_admin.php" style="color : #009ffd; text-align:center;" onmouseover="this.style.color = '#f8f8f8'; this.style.background = '#009ffd';" onmouseout="this.style.color = '#009ffd'; this.style.background = 'none'">Admin</a></li>
                <?php  }
                 ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="" data-toggle="modal" data-target=".modal" style="color : #009ffd; text-align:center;" onmouseover="this.style.color = '#f8f8f8'; this.style.background = '#009ffd';" onmouseout="this.style.color = '#009ffd'; this.style.background = 'none'"><span class="glyphicon glyphicon-question-sign"></span></a></li>
                <li><a href="c_account.php" style="color : #009ffd; text-align:center;" onmouseover="this.style.color = '#f8f8f8'; this.style.background = '#009ffd';" onmouseout="this.style.color = '#009ffd'; this.style.background = 'none'">My account</a></li>
                <li><a href="c_add.php" style="color : #009ffd; text-align:center;" onmouseover="this.style.color = '#f8f8f8'; this.style.background = '#009ffd';" onmouseout="this.style.color = '#009ffd'; this.style.background = 'none'">Add action</a></li>
                <li><a href="c_logout.php" style="color : #009ffd; text-align:center;" onmouseover="this.style.color = '#f8f8f8'; this.style.background = '#009ffd';" onmouseout="this.style.color = '#009ffd'; this.style.background = 'none'">Logout</a></li>
            </ul>
            <?php } else {
            ?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="" data-toggle="modal" data-target=".modal" style="color : #009ffd; text-align:center;" onmouseover="this.style.color = '#f8f8f8'; this.style.background = '#009ffd';" onmouseout="this.style.color = '#009ffd'; this.style.background = 'none'"><span class="glyphicon glyphicon-question-sign"></span></a></li>
                    <li><a href="c_login.php?register=register" style="color : #009ffd; text-align:center;" onmouseover="this.style.color = '#f8f8f8'; this.style.background = '#009ffd';" onmouseout="this.style.color = '#009ffd'; this.style.background = 'none'">Create Account</a></li>
                    <li><a href="c_login.php" style="color : #009ffd; text-align:center;" onmouseover="this.style.color = '#f8f8f8'; this.style.background = '#009ffd';" onmouseout="this.style.color = '#009ffd'; this.style.background = 'none'">Login</a></li>
                </ul>
                <?php }
                ?>
        </div>
    </div>
</nav>
<div class="modal" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title">How to play</h2>
      </div>
      <div class="modal-body">
        <img class="img-responsive" src="./img/tuto.png" alt="tuto">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
