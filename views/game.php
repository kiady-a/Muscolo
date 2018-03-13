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
            var actions = [];
            var tmpNames = [];
            var loaded = false;
            var game;
            //----------------
            function AddPerson() {
                saveTmpNames();
                AddName();
                Display();
            }
            function RemovePerson(id) {
                saveTmpNames();
                RemoveName(id);
                Display();
            }
            function SaveNames() {
                saveTmpNames();
                // TODO Check assez de joueurs etc.
                names = tmpNames;
                game = new Game(names, actions);
            }

            // Save
            function saveTmpNames() {
                tmpNames = FillArrayWithNames();
            }
            function FillArrayWithNames() {
                var out = [];
                for (var i = 0; i < nbPerson; i++) {
                    var id = "person" + i;
                    out.push(document.getElementById(id).value);
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
            function Display(load = false) {
                var output = "";
                if (!load) {
                    nbPerson = tmpNames.length;
                }
                for (var i = 0; i < nbPerson; i++) {
                    output += "<div class=\"form-group\"><div class=\"form-group\"><input type=\"text\" name=\"person" + i + "\" id=\"person" + i + "\" value=\"" + (load ? "" : tmpNames[i]) + "\"/><button onclick=\"RemovePerson(" + i + ")\"><span class=\"glyphicon glyphicon-remove\"></span></button></div></div>";
                }
                output += "<button onclick=\"AddPerson()\"><span class=\"glyphicon glyphicon-plus\"></span></button></div>";
                document.getElementById('form').innerHTML = output;
            }

            // Jeu
            class Game {
                constructor(names, actions) {
                    this.names = names;
                    this.actions = actions;
                }
                RandomAction() {
                    var name = names[Math.floor(Math.random() * names.length)];
                    var action = actions[Math.floor(Math.random() * actions.length)];
                    return action.replace('NAME', name);
                }
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

            <div class="col-md-12 col-xs-12" style="background-color: #f8f8f8; color: #009ffd; padding:10px; border-radius:5px; height: 600px; overflow-y : scroll">
                <div class="col-md-12 col-xs-12" style="padding:10px;">
                    <div id="main" class="col-md-12 col-xs-12" style="padding:10px; border-radius:5px; border: solid 1px; min-height: 400px;">
                        <p>ici les choses à faire</p>
                        <div id="form" class="col-md-4 col-md-offset-4 text-center">
                            <input type="number" hidden value="0"/>
                            <input type="text" name="person0" id="person0" >
                            <button onclick="AddPerson()"><span class="glyphicon glyphicon-plus"></span></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12" style="color: #fefcfb; padding:10px; text-align: center;">
                    <button id="btn" onclick="SaveNames()" class="btn btn-primary" style="background-color: #00358F; border: none; width:200px; height: 50px; font-size: 30px;"><span class="glyphicon glyphicon-ok"></span></button
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
        <script type="text/javascript">Display(true);</script>
    </body>

</html>
