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
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <script src="js/jquery.min.js"></script>

    <script src="//d3js.org/d3.v3.min.js"></script>
    <script src="//d3js.org/topojson.v1.min.js"></script>

    <script src="js/d3.v3.min.js"></script>
    <script src="js/topojson.v1.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
            integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
            integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li style="float:right"><a href="newuser.php">register</a></li>
        <li style="float:right"><a href="login.php">login</a></li>
    </ul>




</head>
<style>


    h2 {
        font-family: 'Audiowide';
        font-size: 50px;
        color: bisque;
    }



    h1 {

        font-family: 'Kavivanar', cursive;
        font-size: 100px;
    }
    p {

        font-family: 'Montserrat', sans-serif; font-size: 17px;
        border:2px solid forestgreen;
        border-radius: 10px;
       padding-left: 7px;
        padding-top: 10px;
        padding-bottom: 10px;
        width: 700px;
    }

    label {

        font-family: 'Cantora One';
        font-size: 30px;
        color: black;

    }

    h5 {

        font-family: 'Cantora One';
        font-size: 30px;
        color: black;

    }



    body {
        width: 1800px;
        margin-left: auto;
        margin-right: auto;
        background-size: contain;
        background-repeat: no-repeat;
        background-color: white;
        background-image: url("img/background.jpg");
        box-sizing: border-box;


    }

    #regler {

        width: 400px;
        height: 100px;
        float: right;
        margin-right: 200px;
        margin-top: 150px;
        background-size: cover;

    }



    #bezirke {
        margin-top: -300px;
        width: 800px;


    }

    #wappen {
        margin-left: 150px;
        width: 240px;
        height: 300px;
    }

    #kantone {
        width: 300px;
        height: 50px;
        font-size: 15px;

    }
    #bezirks{
        width: 300px;
        height: 50px;
        font-size: 15px;
    }
    ul {

        list-style-type: none;
        margin: 0;
        padding: 0;
        margin-left: -50px;
        margin-right: -50px;
        overflow: hidden;
        background-color: #333;
    }

    li {
        float: left;
        border-right:1px solid #bbb;
    }

    li:last-child {
        border-right: none;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 20px;
    }

    li a:hover:not(.active) {
        background-color: #111;
    }

    .active {
        background-color: #4CAF50;
    }




</style>

<body>

<h1> Thurgau TG</h1>
<img id="wappen" src="img/2000px-Wappen_Thurgau_matt.svg.png">


<div class="form-group" id="regler">
    <h5>Ständige Wohnbevölkerung ab 2015</h5>
    <button id="btn1" class="button">2017</button>
    <button id="btn2" class="button">2016</button>
    <button id="btn3" class="button">2015</button>


</div>

<div id="container1">

    <div id="graph"></div>


    <script src="js/main.js"></script>
    <script src="js/app.js"></script>
</div>
</div>
</div>



<div>


    <form method="post" action="index.php" id="bezirke" >
        <p>Sie wollen wissen wie sich die
            Einwohnerzahlen im Kanton Thurgau
            in den letzen 3 Jahren verändert haben? In dem sie in den untenstehenden
            Boxen ihre gewünschte gemeinde auswählen können sie die Entwicklung der Gemeinde betrachten.</p>
        <label>Bezirke</label>
        <select class="form-control" name="kanton" id="kantone">
            <option>Bitte Auswählen</option>
            <option> Kanton Thurgau</option>
            <option> Bezirk Arbon</option>
            <option> Bezirk Frauenfeld</option>
            <option> Bezirk Kreuzlingen</option>
            <option> Bezirk Münchwilen</option>
            <option> Bezirk Weinfelden</option>
        </select>
        <label>Gemeinden</label>
        <select class="form-control" name="bezirk" id="bezirks">
            <option>Bitte Auswählen</option>
            <option>Aadorf</option>
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
        <input type="submit" value="Anschauen" class="button"/>
        <br>
        <br>
        <br>
        <?php
        if (isset($_POST["kanton"])) {
            $kanton = $_POST["kanton"];

            diese($kanton);


        }
        function diese($kanton)
        {
            if ($kanton == "Kanton Thurgau") {
                echo '<h5>Einwohner Thurgau</h5>';
                echo '<img src="img/Diagramm1.PNG">';
            }
            if ($kanton == "Bezirk Arbon") {
                echo '<h5>Einwohner Arbon</h5>';
                echo '<img src="img/Diagramm2.PNG">';
            }

            if ($kanton == "Bezirk Frauenfeld") {
                echo '<h5>Einwohner Frauenfeld</h5>';
                echo '<img src="img/Diagramm4.PNG">';
            }
            if ($kanton == "Bezirk Kreuzlingen") {
                echo '<h5>Einwohner Kreuzlingen</h5>';
                echo '<img src="img/Diagramm7.PNG">';
            }
            if ($kanton == "Bezirk Münchwilen") {
                echo '<h5>Einwohner Münchwilen</h5>';
                echo '<img src="img/Diagramm6.PNG">';
            }
            if ($kanton == "Bezirk Weinfelden") {
                echo '<h5>Einwohner Weinfelden</h5>';
                echo '<img src="img/Diagramm5.PNG">';
            }
        }

        if (isset($_POST["bezirk"])) {
            $bezirk = $_POST["bezirk"];

            diese1($bezirk);
        }

        function diese1($bezirk)
        {
            if ($bezirk == "Amriswil") {
                echo '<h5>Einwohner Amriswil</h5>';
                echo '<img src="img/Diagramm3.PNG">';
            }
            if ($bezirk == "Arbon") {
                echo '<h5>Einwohner Arbon</h5>';
                echo '<img src="img/Diagramm8.PNG">';
            }
            if ($bezirk == "Dozwil") {
                echo '<h5>Einwohner Dozwil</h5>';
                echo '<img src="img/Diagramm9.PNG">';
            }
            if ($bezirk == "Egnach") {
                echo '<h5>Einwohner Egnach</h5>';
                echo '<img src="img/Diagramm10.PNG">';
            }
            if ($bezirk == "Hefenhofen") {
                echo '<h5>Einwohner Hefenhofen</h5>';
                echo '<img src="img/Diagramm11.PNG">';
            }
            if ($bezirk == "Horn") {
                echo '<h5>Einwohner Horn</h5>';
                echo '<img src="img/Diagramm12.PNG">';
            }
            if ($bezirk == "Kesswil") {
                echo '<h5>Einwohner Kesswil</h5>';
                echo '<img src="img/Diagramm13.PNG">';
            }
            if ($bezirk == "Roggwil") {
                echo '<h5>Einwohner Roggwil</h5>';
                echo '<img src="img/Diagramm14.PNG">';
            }
            if ($bezirk == "Romanshorn") {
                echo '<h5>Einwohner Romanshorn</h5>';
                echo '<img src="img/Diagramm15.PNG">';
            }
            if ($bezirk == "Salmsach") {
                echo '<h5>Einwohner Salmsach</h5>';
                echo '<img src="img/Diagramm16.PNG">';
            }
            if ($bezirk == "Sommeri") {
                echo '<h5>Einwohner Sommeri</h5>';
                echo '<img src="img/Diagramm17.PNG">';
            }
            if ($bezirk == "Uttwil") {
                echo '<h5>Einwohner Uttwil</h5>';
                echo '<img src="img/Diagramm18.PNG">';
            }
            if ($bezirk == "Basadingen-Schlattingen") {
                echo '<h5>Einwohner Basadingen-Schlattingen</h5>';
                echo '<img src="img/Diagramm19.PNG">';
            }
            if ($bezirk == "Berlingen") {
                echo '<h5>Einwohner Berlingen</h5>';
                echo '<img src="img/Diagramm20.PNG">';
            }

            if ($bezirk == "Diessenhofen") {
                echo '<h5>Einwohner Diessenhofen</h5>';
                echo '<img src="img/Diagramm21.PNG">';
            }

            if ($bezirk == "Eschenz") {
                echo '<h5>Einwohner Eschenz</h5>';
                echo '<img src="img/Diagramm22.PNG">';
            }

            if ($bezirk == "Felben-Wellhausen") {
                echo '<h5>Einwohner Felben-Wellhausen</h5>';
                echo '<img src="img/Diagramm23.PNG">';
            }
            if ($bezirk == "Frauenfeld") {
                echo '<h5>Einwohner Frauenfeld</h5>';
                echo '<img src="img/Diagramm24.PNG">';
            }
            if ($bezirk == "Gachnang") {
                echo '<h5>Einwohner Gachnang</h5>';
                echo '<img src="img/Diagramm25.PNG">';
            }
            if ($bezirk == "Herdern") {
                echo '<h5>Einwohner Herdern</h5>';
                echo '<img src="img/Diagramm26.PNG">';
            }
            if ($bezirk == "Homburg") {
                echo '<h5>Einwohner Homburg</h5>';
                echo '<img src="img/Diagramm27.PNG">';
            }
            if ($bezirk == "Hüttlingen") {
                echo '<h5>Einwohner Hüttlingen</h5>';
                echo '<img src="img/Diagramm28.PNG">';
            }
            if ($bezirk == "Mammern") {
                echo '<h5>Einwohner Mammern</h5>';
                echo '<img src="img/Diagramm29.PNG">';
            }
            if ($bezirk == "Matzingen") {
                echo '<h5>Einwohner Matzingen</h5>';
                echo '<img src="img/Diagramm30.PNG">';
            }
            if ($bezirk == "Müllheim") {
                echo '<h5>Einwohner Müllheim</h5>';
                echo '<img src="img/Diagramm31.PNG">';
            }
            if ($bezirk == "Neunforn") {
                echo '<h5>Einwohner Neunforn</h5>';
                echo '<img src="img/Diagramm32.PNG">';
            }
            if ($bezirk == "Phyn") {
                echo '<h5>Einwohner Phyn</h5>';
                echo '<img src="img/Diagramm33.PNG">';
            }
            if ($bezirk == "Schlatt") {
                echo '<h5>Einwohner Schlatt</h5>';
                echo '<img src="img/Diagramm34.PNG">';
            }
            if ($bezirk == "Steckborn") {
                echo '<h5>Einwohner Steckborn</h5>';
                echo '<img src="img/Diagramm35.PNG">';
            }
            if ($bezirk == "Stettfurt") {
                echo '<h5>Einwohner Stettfurt</h5>';
                echo '<img src="img/Diagramm36.PNG">';
            }
            if ($bezirk == "Thundorf") {
                echo '<h5>Einwohner Thundorf</h5>';
                echo '<img src="img/Diagramm37.PNG">';
            }
            if ($bezirk == "Uesslingen-Buch") {
                echo '<h5>Einwohner Uesslingen-Buch</h5>';
                echo '<img src="img/Diagramm38.PNG">';
            }
            if ($bezirk == "Wagenhausen") {
                echo '<h5>Einwohner Wagenhausen</h5>';
                echo '<img src="img/Diagramm39.PNG">';
            }
            if ($bezirk == "Warth-Weiningen") {
                echo '<h5>Einwohner Warth-Weiningen</h5>';
                echo '<img src="img/Diagramm40.PNG">';
            }
            if ($bezirk == "Altnau") {
                echo '<h5>Einwohner Altnau</h5>';
                echo '<img src="img/Diagramm41.PNG">';
            }
            if ($bezirk == "Bottighofen") {
                echo '<h5>Einwohner Bottighofen</h5>';
                echo '<img src="img/Diagramm42.PNG">';
            }
            if ($bezirk == "Ermatingen") {
                echo '<h5>Einwohner Ermatingen</h5>';
                echo '<img src="img/Diagramm43.PNG">';
            }
            if ($bezirk == "Gottlieben") {
                echo '<h5>Einwohner Gottlieben</h5>';
                echo '<img src="img/Diagramm44.PNG">';
            }
            if ($bezirk == "Güttingen") {
                echo '<h5>Einwohner Güttingen</h5>';
                echo '<img src="img/Diagramm45.PNG">';
            }
            if ($bezirk == "Kemmental") {
                echo '<h5>Einwohner Kemmental</h5>';
                echo '<img src="img/Diagramm46.PNG">';
            }
            if ($bezirk == "Kreuzlingen") {
                echo '<h5>Einwohner Kreuzlingen</h5>';
                echo '<img src="img/Diagramm47.PNG">';
            }
            if ($bezirk == "Langenrickenback") {
                echo '<h5>Einwohner Langenrickenback</h5>';
                echo '<img src="img/Diagramm48.PNG">';
            }
            if ($bezirk == "Lengwil") {
                echo '<h5>Einwohner Lengwil</h5>';
                echo '<img src="img/Diagramm49.PNG">';
            }
            if ($bezirk == "Münsterlingen") {
                echo '<h5>Einwohner Münsterlingen</h5>';
                echo '<img src="img/Diagramm50.PNG">';
            }
            if ($bezirk == "Raperswil") {
                echo '<h5>Einwohner Raperswil</h5>';
                echo '<img src="img/Diagramm51.PNG">';
            }
            if ($bezirk == "Salenstein") {
                echo '<h5>Einwohner Salenstein</h5>';
                echo '<img src="img/Diagramm52.PNG">';
            }
            if ($bezirk == "Tägerwilen") {
                echo '<h5>Einwohner Tägerwilen</h5>';
                echo '<img src="img/Diagramm53.PNG">';
            }
            if ($bezirk == "Wäldi") {
                echo '<h5>Einwohner Wäldi</h5>';
                echo '<img src="img/Diagramm54.PNG">';
            }
            if ($bezirk == "Aadorf") {
                echo '<h5>Einwohner Aadorf</h5>';
                echo '<img src="img/Diagramm55.PNG">';
            }
            if ($bezirk == "Bettwiesen") {
                echo '<h5>Einwohner Bettwiesen</h5>';
                echo '<img src="img/Diagramm56.PNG">';
            }
            if ($bezirk == "Bichelsee-Balterswil") {
                echo '<h5>Einwohner Bichelsee-Balterswil</h5>';
                echo '<img src="img/Diagramm57.PNG">';
            }
            if ($bezirk == "Braunau") {
                echo '<h5>Einwohner Braunau</h5>';
                echo '<img src="img/Diagramm58.PNG">';
            }
            if ($bezirk == "Eschlikon") {
                echo '<h5>Einwohner Eschlikon</h5>';
                echo '<img src="img/Diagramm59.PNG">';
            }
            if ($bezirk == "Fischingen") {
                echo '<h5>Einwohner Fischingen</h5>';
                echo '<img src="img/Diagramm60.PNG">';
            }
            if ($bezirk == "Lommis") {
                echo '<h5>Einwohner Lommis</h5>';
                echo '<img src="img/Diagramm61.PNG">';
            }
            if ($bezirk == "Münchwilen") {
                echo '<h5>Einwohner Münchwilen</h5>';
                echo '<img src="img/Diagramm62.PNG">';
            }
            if ($bezirk == "Rickenbach") {
                echo '<h5>Einwohner Rickenbach</h5>';
                echo '<img src="img/Diagramm63.PNG">';
            }
            if ($bezirk == "Sirnach") {
                echo '<h5>Einwohner Sirnach</h5>';
                echo '<img src="img/Diagramm64.PNG">';
            }
            if ($bezirk == "Tobel-Tägerschen") {
                echo '<h5>Einwohner Tobel-Tägerschen</h5>';
                echo '<img src="img/Diagramm65.PNG">';
            }
            if ($bezirk == "Sulgen") {
                echo '<h5>Einwohner Sulgen</h5>';
                echo '<img src="img/Diagramm66.PNG">';
            }
            if ($bezirk == "Wängi") {
                echo '<h5>Einwohner Wängi</h5>';
                echo '<img src="img/Diagramm67.PNG">';
            }
            if ($bezirk == "Wilen") {
                echo '<h5>Einwohner Wilen</h5>';
                echo '<img src="img/Diagramm68.PNG">';
            }

            if ($bezirk == "Affeltrangen") {
                echo '<h5>Einwohner Affeltrangen</h5>';
                echo '<img src="img/Diagramm69.PNG">';
            }
            if ($bezirk == "Amlikon-Bissegg") {
                echo '<h5>Einwohner Amlikon-Bissegg</h5>';
                echo '<img src="img/Diagramm70.PNG">';
            }
            if ($bezirk == "Berg") {
                echo '<h5>Einwohner Berg</h5>';
                echo '<img src="img/Diagramm71.PNG">';
            }
            if ($bezirk == "Birwinken") {
                echo '<h5>Einwohner Birwinken</h5>';
                echo '<img src="img/Diagramm72.PNG">';
            }
            if ($bezirk == "Bischofszell") {
                echo '<h5>Einwohner Bischofszell</h5>';
                echo '<img src="img/Diagramm73.PNG">';
            }
            if ($bezirk == "Erlen") {
                echo '<h5>Einwohner Erlen</h5>';
                echo '<img src="img/Diagramm74.PNG">';
            }
            if ($bezirk == "Hauptwil-Gottshaus") {
                echo '<h5>Einwohner Hauptwil-Gottshaus</h5>';
                echo '<img src="img/Diagramm75.PNG">';
            }
            if ($bezirk == "Hohentannen") {
                echo '<h5>Einwohner Hohentannen</h5>';
                echo '<img src="img/Diagramm76.PNG">';
            }
            if ($bezirk == "Kradolf-Schönenberg") {
                echo '<h5>Einwohner Kradolf-Schönenberg</h5>';
                echo '<img src="img/Diagramm77.PNG">';
            }
            if ($bezirk == "Märstetten") {
                echo '<h5>Einwohner Märstetten</h5>';
                echo '<img src="img/Diagramm78.PNG">';
            }
             if ($bezirk == "Bürglen") {
                echo '<h5>Einwohner Bürglen</h5>';
                echo '<img src="img/Diagramm79.PNG">';
            }

            if ($bezirk == "Schönholzerswilen") {
                echo '<h5>Einwohner Schönholzerswilen</h5>';
                echo '<img src="img/Diagramm80.PNG">';
            }
            if ($bezirk == "Sulgen") {
                echo '<h5>Einwohner Sulgen</h5>';
                echo '<img src="img/Diagramm81.PNG">';
            }
            if ($bezirk == "Weinfelden") {
                echo '<h5>Einwohner Weinfelden</h5>';
                echo '<img src="img/Diagramm83.PNG">';
            }
            if ($bezirk == "Wigoltingen") {
                echo '<h5>Einwohner Wigoltingen</h5>';
                echo '<img src="img/Diagramm84.PNG">';
            }
            if ($bezirk == "Wuppenau") {
                echo '<h5>Einwohner Wuppenau</h5>';
                echo '<img src="img/Diagramm85.PNG">';
            }
            if ($bezirk == "Zihlschlacht-Sitterdorf") {
                echo '<h5>Einwohner Zihlschlacht-Sitterdorf</h5>';
                echo '<img src="img/Diagramm86.PNG">';
            }
        }

        ?>

</div>

</body>
<style>

    path {  stroke: #fff; }
    path:hover {  opacity:0.9; }
    .axis {  font: 10px sans-serif; }
    .legend tr{    border-bottom:1px solid grey; }
    .legend tr:first-child{    border-top:1px solid grey; }

    .axis path,
    .axis line {
        fill: none;
        stroke: #000;
        shape-rendering: crispEdges;
    }

    .x.axis path {  display: none; }
    .legend{
        margin-bottom:76px;
        display:inline-block;
        border-collapse: collapse;
        border-spacing: 0px;
    }
    .legend td{
        padding:4px 5px;
        vertical-align:bottom;
    }
    .legendFreq, .legendPerc{
        align:right;
        width:50px;
    }

</style>

<div id='dashboard'>
</div>
<script src="http://d3js.org/d3.v3.min.js"></script>
<script>
    function dashboard(id, fData){
        var barColor = 'steelblue';
        function segColor(c){ return {low:"#807dba", mid:"#e08214",high:"#41ab5d"}[c]; }

        // compute total for each state.
        fData.forEach(function(d){d.total=d.freq.low+d.freq.mid+d.freq.high;});

        // function to handle histogram.
        function histoGram(fD){
            var hG={},    hGDim = {t: 60, r: 0, b: 30, l: 0};
            hGDim.w = 500 - hGDim.l - hGDim.r,
                hGDim.h = 300 - hGDim.t - hGDim.b;

            //create svg for histogram.
            var hGsvg = d3.select(id).append("svg")
                .attr("width", hGDim.w + hGDim.l + hGDim.r)
                .attr("height", hGDim.h + hGDim.t + hGDim.b).append("g")
                .attr("transform", "translate(" + hGDim.l + "," + hGDim.t + ")");

            // create function for x-axis mapping.
            var x = d3.scale.ordinal().rangeRoundBands([0, hGDim.w], 0.1)
                .domain(fD.map(function(d) { return d[0]; }));

            // Add x-axis to the histogram svg.
            hGsvg.append("g").attr("class", "x axis")
                .attr("transform", "translate(0," + hGDim.h + ")")
                .call(d3.svg.axis().scale(x).orient("bottom"));

            // Create function for y-axis map.
            var y = d3.scale.linear().range([hGDim.h, 0])
                .domain([0, d3.max(fD, function(d) { return d[1]; })]);

            // Create bars for histogram to contain rectangles and freq labels.
            var bars = hGsvg.selectAll(".bar").data(fD).enter()
                .append("g").attr("class", "bar");

            //create the rectangles.
            bars.append("rect")
                .attr("x", function(d) { return x(d[0]); })
                .attr("y", function(d) { return y(d[1]); })
                .attr("width", x.rangeBand())
                .attr("height", function(d) { return hGDim.h - y(d[1]); })
                .attr('fill',barColor)
                .on("mouseover",mouseover)// mouseover is defined below.
                .on("mouseout",mouseout);// mouseout is defined below.

            //Create the frequency labels above the rectangles.
            bars.append("text").text(function(d){ return d3.format(",")(d[1])})
                .attr("x", function(d) { return x(d[0])+x.rangeBand()/2; })
                .attr("y", function(d) { return y(d[1])-5; })
                .attr("text-anchor", "middle");

            function mouseover(d){  // utility function to be called on mouseover.
                // filter for selected state.
                var st = fData.filter(function(s){ return s.State == d[0];})[0],
                    nD = d3.keys(st.freq).map(function(s){ return {type:s, freq:st.freq[s]};});

                // call update functions of pie-chart and legend.
                pC.update(nD);
                leg.update(nD);
            }

            function mouseout(d){    // utility function to be called on mouseout.
                // reset the pie-chart and legend.
                pC.update(tF);
                leg.update(tF);
            }

            // create function to update the bars. This will be used by pie-chart.
            hG.update = function(nD, color){
                // update the domain of the y-axis map to reflect change in frequencies.
                y.domain([0, d3.max(nD, function(d) { return d[1]; })]);

                // Attach the new data to the bars.
                var bars = hGsvg.selectAll(".bar").data(nD);

                // transition the height and color of rectangles.
                bars.select("rect").transition().duration(500)
                    .attr("y", function(d) {return y(d[1]); })
                    .attr("height", function(d) { return hGDim.h - y(d[1]); })
                    .attr("fill", color);

                // transition the frequency labels location and change value.
                bars.select("text").transition().duration(500)
                    .text(function(d){ return d3.format(",")(d[1])})
                    .attr("y", function(d) {return y(d[1])-5; });
            }
            return hG;
        }

        // function to handle pieChart.
        function pieChart(pD){
            var pC ={},    pieDim ={w:250, h: 250};
            pieDim.r = Math.min(pieDim.w, pieDim.h) / 2;

            // create svg for pie chart.
            var piesvg = d3.select(id).append("svg")
                .attr("width", pieDim.w).attr("height", pieDim.h).append("g")
                .attr("transform", "translate("+pieDim.w/2+","+pieDim.h/2+")");

            // create function to draw the arcs of the pie slices.
            var arc = d3.svg.arc().outerRadius(pieDim.r - 10).innerRadius(0);

            // create a function to compute the pie slice angles.
            var pie = d3.layout.pie().sort(null).value(function(d) { return d.freq; });

            // Draw the pie slices.
            piesvg.selectAll("path").data(pie(pD)).enter().append("path").attr("d", arc)
                .each(function(d) { this._current = d; })
                .style("fill", function(d) { return segColor(d.data.type); })
                .on("mouseover",mouseover).on("mouseout",mouseout);

            // create function to update pie-chart. This will be used by histogram.
            pC.update = function(nD){
                piesvg.selectAll("path").data(pie(nD)).transition().duration(500)
                    .attrTween("d", arcTween);
            }
            // Utility function to be called on mouseover a pie slice.
            function mouseover(d){
                // call the update function of histogram with new data.
                hG.update(fData.map(function(v){
                    return [v.State,v.freq[d.data.type]];}),segColor(d.data.type));
            }
            //Utility function to be called on mouseout a pie slice.
            function mouseout(d){
                // call the update function of histogram with all data.
                hG.update(fData.map(function(v){
                    return [v.State,v.total];}), barColor);
            }
            // Animating the pie-slice requiring a custom function which specifies
            // how the intermediate paths should be drawn.
            function arcTween(a) {
                var i = d3.interpolate(this._current, a);
                this._current = i(0);
                return function(t) { return arc(i(t));    };
            }
            return pC;
        }

        // function to handle legend.
        function legend(lD){
            var leg = {};

            // create table for legend.
            var legend = d3.select(id).append("table").attr('class','legend');

            // create one row per segment.
            var tr = legend.append("tbody").selectAll("tr").data(lD).enter().append("tr");

            // create the first column for each segment.
            tr.append("td").append("svg").attr("width", '16').attr("height", '16').append("rect")
                .attr("width", '16').attr("height", '16')
                .attr("fill",function(d){ return segColor(d.type); });

            // create the second column for each segment.
            tr.append("td").text(function(d){ return d.type;});

            // create the third column for each segment.
            tr.append("td").attr("class",'legendFreq')
                .text(function(d){ return d3.format(",")(d.freq);});

            // create the fourth column for each segment.
            tr.append("td").attr("class",'legendPerc')
                .text(function(d){ return getLegend(d,lD);});

            // Utility function to be used to update the legend.
            leg.update = function(nD){
                // update the data attached to the row elements.
                var l = legend.select("tbody").selectAll("tr").data(nD);

                // update the frequencies.
                l.select(".legendFreq").text(function(d){ return d3.format(",")(d.freq);});

                // update the percentage column.
                l.select(".legendPerc").text(function(d){ return getLegend(d,nD);});
            }

            function getLegend(d,aD){ // Utility function to compute percentage.
                return d3.format("%")(d.freq/d3.sum(aD.map(function(v){ return v.freq; })));
            }

            return leg;
        }

        // calculate total frequency by segment for all state.
        var tF = ['low','mid','high'].map(function(d){
            return {type:d, freq: d3.sum(fData.map(function(t){ return t.freq[d];}))};
        });

        // calculate total frequency by state for all segment.
        var sF = fData.map(function(d){return [d.State,d.total];});

        var hG = histoGram(sF), // create the histogram.
            pC = pieChart(tF), // create the pie-chart.
            leg= legend(tF);  // create the legend.
    }
</script>

<script>
    var freqData=[
        {State:'2015',freq:{low:4786, mid:1319, high:249}}
        ,{State:'2016',freq:{low:1101, mid:412, high:674}}
        ,{State:'2017',freq:{low:932, mid:2149, high:418}}

    ];


    dashboard('#dashboard',freqData);
</script>

</html>