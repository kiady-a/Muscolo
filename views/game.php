<!DOCTYPE html>
<html>
    <head>
        <title>Muscolo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            const START_NB = 3;
            var nbPerson = START_NB;
            var names = [];
            var actions = <?= json_encode($actions) ?>;
            var tmpNames = <?= ($isGroup ? json_encode(explode(',', $participants)) : "[]") ?>;
            var loaded = false;
            var game;
            //----------------
            function AddPerson() {
                saveTmpNames();
                AddName();
                DisplayForm();
            }
            function RemovePerson(id) {
                saveTmpNames();
                RemoveName(id);
                DisplayForm();
            }
            function LaunchGame() {
                var e = LoadNames()
                if (e !== null) {
                    var div = document.getElementById("error");
                    div.classList.add("alert");
                    div.classList.add("alert-danger");
                    div.innerHTML = "<strong>Oops...</strong>" + e;
                } else {
                    saveTmpNames();
                    DisplayForm();
                    var main = document.getElementById('main');
                    var formHTML = main.innerHTML;
                    console.log(formHTML);
                    main.innerHTML = "<div class=\"text-center alert alert-info\" id=\"action\" style=\"height:100%; font-size: 2em;\">Click on the button to start</div>" + formHTML;
                    var form = document.getElementById('form');
                    form.style.visibility = "hidden";
                    form.style.position = "absolute";
                    var btnSpan = document.getElementById('glyphicon-button');
                    btnSpan.classList.remove('glyphicon-ok');
                    btnSpan.classList.add('glyphicon-arrow-right');
                    var btn = document.getElementById('btn');
                    btn.onclick = ShowAction;
                }
            }
            function ShowAction() {
                var action = game.RandomAction();
                var div = document.getElementById('action');
                div.innerHTML = "<strong>To do : </strong>" + action;
            }
            function LoadNames() {

                saveTmpNames();
                if (tmpNames.length === 0) {
                    return "Nobody wants to play ?";
                }
                if (tmpNames.length < 2) {
                    return "You need more players in order to play !";
                }
                if (tmpNames.includes("")) {
                    return "Delete the players with no name";
                }
                names = tmpNames;
                game = new Game(names, actions);
                return null;
            }

            // Save
            function saveTmpNames() {
                tmpNames = FillArrayWithNames();
            }
            function FillArrayWithNames() {
                var out = [];
                for (var i = 0; i < nbPerson; i++) {
                    var id = "person" + i;
                    out.push(document.getElementById(id).value.trim());
                }
                return out;
            }

            // Edit
            function AddName(name = "") {
                tmpNames.push(name);
            }
            function RemoveName(id) {
                tmpNames.splice(id, 1);
            }

            // Display
            function DisplayForm(load = false) {
                var output = "<div id=\"error\"></div><form method=\"POST\" id=\"HTMLFORM\">";
                if (!load) {
                    nbPerson = tmpNames.length;
                }
                for (var i = 0; i < nbPerson; i++) {
                    output += "<div class=\"form-group\"><div class=\"form-group\"><input type=\"text\" name=\"person" + i + "\" id=\"person" + i + "\" value=\"" + (load ? "" : tmpNames[i]) + "\" placeholder=\"Player " + (i + 1) + "\"/><button onclick=\"RemovePerson(" + i + ")\"><span class=\"glyphicon glyphicon-remove\"></span></button></div></div>";
                }
                output += "</form><button onclick=\"AddPerson()\"><span class=\"glyphicon glyphicon-plus\"></span></button></div>";
                document.getElementById('form').innerHTML = output;
            }

            // Jeu
            class Game {
                constructor(names, actions) {
                    this.names = names;
                    this.actions = actions;
                }
                RandomAction() {
                    var action = actions[Math.floor(Math.random() * actions.length)];
                    var tmpNames = names.slice(0);
                    while (action.indexOf('NAME') !== -1) {
                        console.log(tmpNames);
                        var name = tmpNames[Math.floor(Math.random() * tmpNames.length)];
                        console.log(name);
                        action = action.replace('NAME', name);
                        tmpNames.splice(tmpNames.indexOf(name), 1);
                        console.log(tmpNames)
                        console.log("------");
                    }
                    return action;
                }
            }
        </script>
    </head>
    <body class='container' style="background-color: #ffa400;">
        <noscript><p>Please enable javascript for this site to work properly</p><style>
            div {
                display: none;
            }
        </style></noscript>
        <div>
            <?php include 'views/nav.php'; ?>
            <div class="col-md-12 col-xs-12" style="background-color: #f8f8f8; color: #009ffd; padding:10px; border-radius:5px; height: 600px; overflow-y : scroll">
                <div class="col-md-12 col-xs-12" style="padding:10px;">
                    <div id="main" class="col-md-12 col-xs-12" style="padding:10px; border-radius:5px; border: solid 1px; min-height: 400px;">
                        <div id="form" class="col-md-4 col-md-offset-4 text-center">
                            <div id="error"></div>
                            <form method="GET" id="HTMLFORM">
                                <input type="text" name="person0" id="person0" disabled>
                            </form>
                            <button onclick="AddPerson()"><span class="glyphicon glyphicon-plus"></span></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-offset-5 col-md-1 col-xs-12" style="color: #fefcfb; padding:10px; text-align: center;">
                    <button id="btn" onclick="LaunchGame()" class="btn btn-primary" style="background-color: #00358F; border: none; width:200px; height: 50px; font-size: 30px;"><span id="glyphicon-button" class="glyphicon glyphicon-ok"></span></button>
                </div>
                <?php if ($_SESSION['log']) { ?>
                    <div class="col-md-offset-3 col-md-1 col-xs-12" style="color: #009ffd; padding:10px; text-align: center;">
                        <input type="text" name="name" form="HTMLFORM"/>
                        <input class="btn btn-primary" type="submit" name="save" value="Save group" form="HTMLFORM"/>
                        <?php echo $msgError; ?>
                    </div>
                <?php } else { ?>
                    <div class="col-md-offset-3 col-md-1 col-xs-12" style="color: #009ffd; padding:10px; text-align: center;">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Save group
                        </button>
                    </div>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Oops...</h4>
                                </div>
                                <div class="modal-body">
                                    You need to login to save your group
                                </div>
                                <div class="modal-footer">
                                    <a href="./c_login.php" class="btn btn-primary">Login</a>
                                    <a href="./c_login.php?register=register" class="btn btn-primary">Create an account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script type="text/javascript">DisplayForm(<?= $isGroup ? "" : "true" ?>);</script>
    </body>

</html>
