<nav class="navbar navbar-default" style="background-color: #f8f8f8; border: none;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand logo" style="color: #009ffd;">M</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" style="color: #009ffd;">
            <ul class="nav navbar-nav">
                <li><a href="index.php" style="color : #009ffd; text-align:center;" onmouseover="this.style.color = '#f8f8f8'; this.style.background = '#009ffd';" onmouseout="this.style.color = '#009ffd'; this.style.background = 'none'">Home</a></li>
                <li>
                    <a href=""></a>
                </li>
                <li>
                    <a href=""></a>
                </li>
                <?php //if ($_SESSION[""]) {
?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php" style="color : #009ffd; text-align:center;" onmouseover="this.style.color = '#f8f8f8'; this.style.background = '#009ffd';" onmouseout="this.style.color = '#009ffd'; this.style.background = 'none'">My account</a></li>
                <li><a href="index.php" style="color : #009ffd; text-align:center;" onmouseover="this.style.color = '#f8f8f8'; this.style.background = '#009ffd';" onmouseout="this.style.color = '#009ffd'; this.style.background = 'none'">Logout</a></li>
            </ul>
            <?php //} else {
?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php" style="color : #009ffd; text-align:center;" onmouseover="this.style.color = '#f8f8f8'; this.style.background = '#009ffd';" onmouseout="this.style.color = '#009ffd'; this.style.background = 'none'">Create Account</a></li>
                    <li><a href="index.php" style="color : #009ffd; text-align:center;" onmouseover="this.style.color = '#f8f8f8'; this.style.background = '#009ffd';" onmouseout="this.style.color = '#009ffd'; this.style.background = 'none'">Login</a></li>
                </ul>
                <?php //}
?>
        </div>
    </div>
</nav>