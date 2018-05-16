<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Startpage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewpoe" content="width=device-width, initial-scale=1"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kavivanar" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>

    <script src="js/jquery.min.js"></script>

    <script src="//d3js.org/d3.v3.min.js"></script>
    <script src="//d3js.org/topojson.v1.min.js"></script>

    <script src="js/d3.v3.min.js"></script>
    <script src="js/topojson.v1.min.js"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <a href="login.php"><h5 id="login">login</h5></a>

    <img id="picture2" src="img/Download.png">


</head>
<style>


    h2{
        font-family: 'Audiowide';font-size: 50px;
        color:   bisque; }
    head{
        width: 1080px;
        background-image: url("img/background.jpg");
        background-size: cover;
    }
    h1 {
        margin-top: 50px;
        margin-left: 50px;
        font-family: 'Kavivanar', cursive;
        font-size: 100px;
    }

    label {

        font-family: 'Cantora One';font-size: 30px;
        color: black;
        padding-left: 20px;
    }
     h5{

        font-family: 'Cantora One';font-size: 30px;
        color: black;

    }
    body
    {
        width: 1800px;
        margin-left: auto;
        margin-right: auto;
        background-size: contain;
        background-repeat: no-repeat;
        background-color:  white;
        background-image: url("img/background.jpg");
        box-sizing: border-box;

    }

  #regler {

      width: 400px;
      height: 100px;
      float: right;
      margin-right: 150px;
      margin-top: 200px;
      background-size: cover;
      background-color:  white;
  }

    #picture2 {
        position: absolute;
        width: 30px;
        height: 30px;
        right: 20px;
        top: 20px;
    }
    #login{
        position: absolute;
        right: 55px;
        top: 20px;

    }
  #bezirke {

      width: 300px;
      float: bottom;
  }

#wappen {
    margin-left: 150px;
    width: 240px;
    height: 300px;
}


</style>

<body>
<h1> Thurgau TG</h1>
<img id="wappen" src="img/2000px-Wappen_Thurgau_matt.svg.png">


<div class="form-group"  id="regler" >
    <label id="rangeValLabel">Ständige Wohnbevölkerung ab 2015</label>
    <input type="range" min="2015" max="2017" step="1" name="anzTickets" oninput="document.getElementById('rangeValLabel').innerHTML = 'Wohnbevölkerung im Jahr: ' + this.value;"></div>

<div id="container1">

    <div id="graph"></div>

<button id="btn1">Einwohner</button>


<script src="js/main.js"></script>
<script src="js/app.js"></script>
</div>

</div>





    <div id="bezirke">
        <form method="post" action="index.php">
            <label>Bezirke</label>
            <select class="form-control" name="kanton">
                <option>Bitte Auswählen</option>
                <option> Kanton Thurgau</option>
                <option>   Bezirk Arbon</option>
                <option>   Bezirk Frauenfeld</option>
                <option>  Bezirk Kreuzlingen</option>
                <option>   Bezirk Münchwilen</option>
                <option>   Bezirk Weinfelden</option>
            </select>
            <label>Gemeinden</label>
            <select class="form-control" name="bezirk">
                <option>Bitte Auswählen</option><option>Aadorf</option>
                <option>Affeltrangen</option>
                <option>Altnau</option>
                <option>Amlikon-Bissegg</option>
                <option>Amriswil</option>
                <option>Arbon</option>
                <option>Basadingen-Schlattingen</option>
                <option>Berg</option>
                <option>Berlingen</option>
                <option>Bettwiesen</option>
                <option>Bichelsee-Balterswil</option>
                <option>Birwinken</option>
                <option>Bischofszell</option>
                <option>Bottighofen</option>
                <option>Braunau</option>
                <option>Bürglen</option>
                <option>Bussnang</option>
                <option>Diessenhofen</option>
                <option>Dozwil</option>
                <option>Egnach</option>
                <option>Erlen</option>
                <option>Ermatingen</option>
                <option>Eschenz</option>
                <option>Eschlikon</option>
                <option>Felben-Wellhausen</option>
                <option>Fischingen</option>
                <option>Frauenfeld</option>
                <option>Gachnang</option>
                <option>Gottlieben</option>
                <option>Güttingen</option>
                <option>Hauptwil-Gottshaus</option>
                <option>Hefenhofen</option>
                <option>Herdern</option>
                <option>Hohentannen</option>
                <option>Homburg</option>
                <option>Horn</option>
                <option>Hüttlingen</option>
                <option>Hüttwilen</option>
                <option>Kemmental</option>
                <option>Kesswil</option>
                <option>Kradolf-Schönenberg</option>
                <option>Kreuzlingen</option>
                <option>Langrickenbach</option>
                <option>Lengwil</option>
                <option>Lommis</option>
                <option>Mammern</option>
                <option>Märstetten</option>
                <option>Matzingen</option>
                <option>Müllheim</option>
                <option>Münchwilen</option>
                <option>Münsterlingen</option>
                <option>Neunforn</option>
                <option>Pfyn</option>
                <option>Raperswilen</option>
                <option>Rickenbach</option>
                <option>Roggwil</option>
                <option>Romanshorn</option>
                <option>Salenstein</option>
                <option>Salmsach</option>
                <option>Schlatt</option>
                <option>Schönholzerswilen</option>
                <option>Sirnach</option>
                <option>Sommeri</option>
                <option>Steckborn</option>
                <option>Stettfurt</option>
                <option>Sulgen</option>
                <option>Tägerwilen</option>
                <option>Thundorf</option>
                <option>Tobel-Tägerschen</option>
                <option>Uesslingen-Buch</option>
                <option>Uttwil</option>
                <option>Wagenhausen</option>
                <option>Wäldi</option>
                <option>Wängi</option>
                <option>Warth-Weiningen</option>
                <option>Weinfelden</option>
                <option>Wigoltingen</option>
                <option>Wilen</option>
                <option>Wuppenau</option>
                <option>Zihlschlacht-Sitterdorf</option>

            </select>
            <br>
            <br>
            <br>
            <input type="submit" value="Anschauen" />
            <br>
            <br>
            <br>
            <?php
            if (isset($_POST["kanton"])){
                $kanton = $_POST["kanton"];

                diese($kanton);


            }
            function diese($kanton){
                if ($kanton == "Kanton Thurgau"){
                    echo '<h5>Thurgau</h5>';
                    echo '<img src="img/Diagramm1.PNG">';}
                if ($kanton == "Bezirk Arbon"){
                    echo '<img src="img/Diagramm2.PNG">';}

                if ($kanton == "Bezirk Frauenfeld"){
                    echo"gut";
                }
                if ($kanton == "Bezirk Kreuzlingen"){
                    echo"gut";
                }
                if ($kanton == "Bezirk Münchwilen"){
                    echo"gut";
                }
                if ($kanton == "Bezirk Weinfelden"){
                    echo"gut";
                }}

            if (isset($_POST["bezirk"])) {
                $bezirk = $_POST["bezirk"];

                diese1($bezirk);
            }

            function diese1($bezirk){
                if ($bezirk == "Amriswil"){
                    echo '<img src="img/Diagramm3.PNG">';}
                if ($bezirk == "Arbon"){
                    echo"gut";
                }
                if ($bezirk == "Dozwil"){
                    echo"gut";
                }
                if ($bezirk == "Egnach"){
                    echo"gut";
                }
                if ($bezirk == "Hefenhofen"){
                    echo"gut";
                }
                if ($bezirk == "Horn"){
                    echo"gut";
                }
                if ($bezirk == "Kesswil"){
                    echo"gut";
                }
                if ($bezirk == "Roggwil"){
                    echo "";
                }
                if ($bezirk == "Romanshorn"){
                    echo"gut";
                }
                if ($bezirk == "Salmsach"){
                    echo"gut";
                } if ($bezirk == "Sommeri"){
                    echo"gut";
                } if ($bezirk == "Uttwil"){
                    echo"gut";
                } if ($bezirk == "Basadingen-Schlattingen"){
                    echo"gut";
                } if ($bezirk == "Berlingen"){
                    echo"gut";
                }
                if ($bezirk == "Diessenhofen"){
                    echo"gut";
                }
                if ($bezirk == "Eschenz"){
                    echo"gut";
                }
                if ($bezirk == "Felben-Wellhausen
"){
                    echo"gut";}
                if ($bezirk == "Frauenfeld"){
                    echo"gut";
                }
                if ($bezirk == "Gachnang"){
                    echo"gut";
                }
                if ($bezirk == "Herdern"){
                    echo"gut";
                }
                if ($bezirk == "Homburg"){
                    echo"gut";
                }
                if ($bezirk == "Hüttlingen"){
                    echo"gut";
                }
                if ($bezirk == "Mammern"){
                    echo"gut";
                }
                if ($bezirk == "Matzingen"){
                    echo"gut";
                }
                if ($bezirk == "Müllheim"){
                    echo"gut";
                }
                if ($bezirk == "Neunforn"){
                    echo"gut";
                } if ($bezirk == "Phyn"){
                    echo"gut";
                } if ($bezirk == "Schlatt"){
                    echo"gut";
                } if ($bezirk == "Steckborn"){
                    echo"gut";
                } if ($bezirk == "Stettfurt"){
                    echo"gut";
                }
                if ($bezirk == "Thundorf"){
                    echo"gut";
                }
                if ($bezirk == "Uesslingen-Buch"){
                    echo"gut";
                }
                if ($bezirk == "Wagenhausen"){
                    echo"gut";}
                if ($bezirk == "Warth-Weiningen"){
                    echo"gut";
                }
                if ($bezirk == "Altnau"){
                    echo"gut";
                }
                if ($bezirk == "Bottighofen"){
                    echo"gut";
                }
                if ($bezirk == "Ermatingen"){
                    echo"gut";
                }
                if ($bezirk == "Gottlieben"){
                    echo"gut";
                }
                if ($bezirk == "Güttingen"){
                    echo"gut";
                }
                if ($bezirk == "Kemmental"){
                    echo"gut";
                }
                if ($bezirk == "Kreuzlingen"){
                    echo"gut";
                }
                if ($bezirk == "Langenrickenback"){
                    echo"gut";
                } if ($bezirk == "Lengwil"){
                    echo"gut";
                } if ($bezirk == "Münsterlingen"){
                    echo"gut";
                } if ($bezirk == "Raperswil"){
                    echo"gut";
                } if ($bezirk == "Salenstein"){
                    echo"gut";
                }
                if ($bezirk == "Tägerwilen"){
                    echo"gut";
                }
                if ($bezirk == "Wäldi"){
                    echo"gut";
                }
                if ($bezirk == "Aadorf"){
                    echo"gut";}
                if ($bezirk == "Bettwiesen"){
                    echo"gut";
                }
                if ($bezirk == "Bichelsee-Balterswil"){
                    echo"gut";
                }
                if ($bezirk == "Braunau"){
                    echo"gut";
                }
                if ($bezirk == "Eschlikon"){
                    echo"gut";
                }
                if ($bezirk == "Fischingen"){
                    echo"gut";
                }
                if ($bezirk == "Lommis"){
                    echo"gut";
                }
                if ($bezirk == "Münchwilen"){
                    echo"gut";
                }
                if ($bezirk == "Rickenbach"){
                    echo"gut";
                }
                if ($bezirk == "Sirnach"){
                    echo"gut";
                } if ($bezirk == "Tobel-Tägerschen"){
                    echo"gut";
                } if ($bezirk == "Sulgen"){
                    echo"gut";
                } if ($bezirk == "Wängi"){
                    echo"gut";
                } if ($bezirk == "Wilen"){
                    echo"gut";
                }

                if ($bezirk == "Affeltrangen"){
                    echo"gut";}
                if ($bezirk == "Amlikon-Bissegg"){
                    echo"gut";
                }
                if ($bezirk == "Berg"){
                    echo"gut";
                }
                if ($bezirk == "Birwinken"){
                    echo"gut";
                }
                if ($bezirk == "Bischofszell"){
                    echo"gut";
                }
                if ($bezirk == "Erlen"){
                    echo"gut";
                }
                if ($bezirk == "Hauptwil-Gottshaus"){
                    echo"gut";
                }
                if ($bezirk == "Hohentannen"){
                    echo"gut";
                }
                if ($bezirk == "Kradolf-Schönenberg"){
                    echo"gut";
                }
                if ($bezirk == "Märstetten"){
                    echo"gut";
                } if ($bezirk == "Schönholzerswilen"){
                    echo"gut";
                } if ($bezirk == "Sulgen"){
                    echo"gut";
                } if ($bezirk == "Weinfelden"){
                    echo"gut";
                } if ($bezirk == "Wigoltingen"){
                    echo"gut";
                }
                if ($bezirk == "Wuppenau"){
                    echo"gut";
                }
                if ($bezirk == "Zihlschlacht-Sitterdorf"){
                    echo"gut";
                }
            }
            ?>
    </div>
</body>



</html>