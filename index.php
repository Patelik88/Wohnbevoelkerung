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
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">

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

        font-family: 'Noto Sans', sans-serif;
        font-size: 80px;
        margin-top: 50px;
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

        font-family: 'Hind', sans-serif;
        font-size: 30px;
        color: black;

    }

    h5 {

        font-family: 'Hind', sans-serif;
           font-size: 30px;
        font-weight: bold;
           color: black;

       }
    #thurgau {

        font-family: 'Hind', sans-serif;
        font-size: 30px;
        font-weight: bold;
        color: black;
        margin-top: -50px;
        float: right;
        margin-right: 370px;
        text-decoration: #111111 underline;

    }



    body {
        width: 1800px;
        margin-left: auto;
        margin-right: auto;
        background-size: contain;

        box-sizing: border-box;


    }

    #regler {

        width: 400px;
        height: 150px;
        float: right;
        margin-right: 200px;
        margin-top: 100px;
        background-size: cover;

    }



    #bezirke {
        margin-top: -500px;
        width: 800px;


    }

    #wappen {
        margin-left: 150px;
        margin-top: 50px;
        width: 160px;
        height: 200px;
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
    <div id="thurgau">Kanton Thurgau</div>

    <div id="pieChart"></div>
    <div id="barChart"></div>


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
            Boxen ihre gewünschte Gemeinde auswählen, können sie die Entwicklung der Gemeinde betrachten.</p>
        <label>Bezirke:</label>
        <select class="form-control" name="kanton" id="kantone">
            <option>Bitte Auswählen</option>

            <option> Bezirk Arbon</option>
            <option> Bezirk Frauenfeld</option>
            <option> Bezirk Kreuzlingen</option>
            <option> Bezirk Münchwilen</option>
            <option> Bezirk Weinfelden</option>
        </select>
        <label>Gemeinden:</label>
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
        function diese($kanton){

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

    #pieChart {
        position:absolute;
        margin-top: 50px;
        left:900px;
        width:400px;
        height: 200px;
        text-align: center;

    }



    #lineChart {
        position:absolute;
        top:10px;
        left:810px;
        height: 150px;
    }

    #barChart {
        position:absolute;
        margin-top: 100px;
        left:1310px;
        height: 400px;
    }

    .slice {
        font-size: 12pt;
        font-family: Verdana;
        fill: white; //svg specific - instead of color
    font-weight: bold;
    }

    /*for line chart*/
    .axis path, .axis line {
        fill: none;
        stroke: black;
        shape-rendering: crispEdges; //The shape-rendering property is an SVG attribute, used here to make sure our axis and its tick mark lines are pixel-perfect.
    }

    .line {
        fill: none;
        /*stroke: steelblue;*/
        stroke-width: 3px;
    }

    .dot {
        /*fill: white;*/
        /*stroke: steelblue;*/
        stroke-width: 1.5px;
    }


    .axis text {
        font-family: Verdana;
        font-size: 11px;
    }

    .title {
        font-family: Verdana;
        font-size: 15px;

    }

    .xAxis {
        font-family: verdana;
        font-size: 11px;
        fill: black;
    }

    .yAxis {
        font-family: verdana;
        font-size: 11px;
        fill: white;
    }


    table {
        border-collapse:collapse;
        border: 0px;
        font-family: Verdana;
        color: #5C5558;
        font-size: 12px;
        text-align: right;
    }

    td {
        padding-left: 10px;
    }

    #lineChartTitle1 {
        font-family: Verdana;
        font-size  : 14px;
        fill       : lightgrey;
        font-weight: bold;
        text-anchor: middle;
    }

    #lineChartTitle2 {
        font-family: Verdana;
        font-size  : 72px;
        fill       : grey;
        text-anchor: middle;
        font-weight: bold;
        /*font-style: italic;*/
    }


</style>



<script src="http://d3js.org/d3.v3.min.js"></script>
<script type="text/javascript">

    /*
    ################ FORMATS ##################
    -------------------------------------------
    */


    var 	formatAsPercentage = d3.format("%"),
        formatAsPercentage1Dec = d3.format(".1%"),
        formatAsInteger = d3.format(","),
        fsec = d3.time.format("%S s"),
        fmin = d3.time.format("%M m"),
        fhou = d3.time.format("%H h"),
        fwee = d3.time.format("%a"),
        fdat = d3.time.format("%d d"),
        fmon = d3.time.format("%b")
    ;

    /*
    ############# PIE CHART ###################
    -------------------------------------------
    */



    function dsPieChart(){

        var dataset = [
                {category: "Mann", measure: 0.502},
                {category: "Frau", measure: 0.498},

            ]
        ;

        var 	width = 400,
            height = 400,
            outerRadius = Math.min(width, height) / 2,
            innerRadius = outerRadius * .999,
            // for animation
            innerRadiusFinal = outerRadius * .5,
            innerRadiusFinal3 = outerRadius* .45,
            color = d3.scale.category20()    //builtin range of colors
        ;

        var vis = d3.select("#pieChart")
            .append("svg:svg")              //create the SVG element inside the <body>
            .data([dataset])                   //associate our data with the document
            .attr("width", width)           //set the width and height of our visualization (these will be attributes of the <svg> tag
            .attr("height", height)
            .append("svg:g")                //make a group to hold our pie chart
            .attr("transform", "translate(" + outerRadius + "," + outerRadius + ")")    //move the center of the pie chart from 0, 0 to radius, radius
        ;

        var arc = d3.svg.arc()              //this will create <path> elements for us using arc data
            .outerRadius(outerRadius).innerRadius(innerRadius);

        // for animation
        var arcFinal = d3.svg.arc().innerRadius(innerRadiusFinal).outerRadius(outerRadius);
        var arcFinal3 = d3.svg.arc().innerRadius(innerRadiusFinal3).outerRadius(outerRadius);

        var pie = d3.layout.pie()           //this will create arc data for us given a list of values
            .value(function(d) { return d.measure; });    //we must tell it out to access the value of each element in our data array

        var arcs = vis.selectAll("g.slice")     //this selects all <g> elements with class slice (there aren't any yet)
            .data(pie)                          //associate the generated pie data (an array of arcs, each having startAngle, endAngle and value properties)
            .enter()                            //this will create <g> elements for every "extra" data element that should be associated with a selection. The result is creating a <g> for every object in the data array
            .append("svg:g")                //create a group to hold each slice (we will have a <path> and a <text> element associated with each slice)
            .attr("class", "slice")    //allow us to style things in the slices (like text)
            .on("mouseover", mouseover)
            .on("mouseout", mouseout)
            .on("click", up)
        ;

        arcs.append("svg:path")
            .attr("fill", function(d, i) { return color(i); } ) //set the color for each slice to be chosen from the color function defined above
            .attr("d", arc)     //this creates the actual SVG path using the associated data (pie) with the arc drawing function
            .append("svg:title") //mouseover title showing the figures
            .text(function(d) { return d.data.category + ": " + formatAsPercentage(d.data.measure); });

        d3.selectAll("g.slice").selectAll("path").transition()
            .duration(750)
            .delay(10)
            .attr("d", arcFinal )
        ;

        // Add a label to the larger arcs, translated to the arc centroid and rotated.
        // source: http://bl.ocks.org/1305337#index.html
        arcs.filter(function(d) { return d.endAngle - d.startAngle > .2; })
            .append("svg:text")
            .attr("dy", ".35em")
            .attr("text-anchor", "middle")
            .attr("transform", function(d) { return "translate(" + arcFinal.centroid(d) + ")rotate(" + angle(d) + ")"; })
            //.text(function(d) { return formatAsPercentage(d.value); })
            .text(function(d) { return d.data.category; })
        ;

        // Computes the label angle of an arc, converting from radians to degrees.
        function angle(d) {
            var a = (d.startAngle + d.endAngle) * 90 / Math.PI - 90;
            return a > 90 ? a - 180 : a;
        }


        // Pie chart title
        vis.append("svg:text")
            .attr("dy", ".35em")
            .attr("text-anchor", "middle")
            .text("Geschlechtsanteil")
            .attr("class","title")
        ;



        function mouseover() {
            d3.select(this).select("path").transition()
                .duration(750)
                //.attr("stroke","red")
                //.attr("stroke-width", 1.5)
                .attr("d", arcFinal3)
            ;
        }

        function mouseout() {
            d3.select(this).select("path").transition()
                .duration(750)
                //.attr("stroke","blue")
                //.attr("stroke-width", 1.5)
                .attr("d", arcFinal)
            ;
        }

        function up(d, i) {

            /* update bar chart when user selects piece of the pie chart */
            //updateBarChart(dataset[i].category);
            updateBarChart(d.data.category, color(i));
            updateLineChart(d.data.category, color(i));

        }
    }

    dsPieChart();

    /*
    ############# BAR CHART ###################
    -------------------------------------------
    */



    var datasetBarChart = [
            { group: "All", category: 2015, measure: 266510 },
            { group: "All", category: 2016, measure: 269731},
            { group: "All", category: 2017, measure: 272780 },
            { group: "Frau", category: 2015, measure: 132602 },
            { group: "Frau", category: 2016, measure: 134178 },
            { group: "Frau", category: 2017, measure: 135628 },
            { group: "Mann", category: 2015, measure: 133908 },
            { group: "Mann", category: 2016, measure: 135553 },
            { group: "Mann", category: 2017, measure: 137152},

        ]
    ;

    // set initial group value
    var group = "All";

    function datasetBarChosen(group) {
        var ds = [];
        for (x in datasetBarChart) {
            if(datasetBarChart[x].group==group){
                ds.push(datasetBarChart[x]);
            }
        }
        return ds;
    }


    function dsBarChartBasics() {

        var margin = {top: 30, right: 5, bottom: 20, left: 50},
            width = 500 - margin.left - margin.right,
            height = 250 - margin.top - margin.bottom,
            colorBar = d3.scale.category20(),
            barPadding = 1
        ;

        return {
            margin : margin,
            width : width,
            height : height,
            colorBar : colorBar,
            barPadding : barPadding
        }
            ;
    }

    function dsBarChart() {

        var firstDatasetBarChart = datasetBarChosen(group);

        var basics = dsBarChartBasics();

        var margin = basics.margin,
            width = basics.width,
            height = basics.height,
            colorBar = basics.colorBar,
            barPadding = basics.barPadding
        ;

        var 	xScale = d3.scale.linear()
            .domain([0, firstDatasetBarChart.length])
            .range([0, width])
        ;

        // Create linear y scale
        // Purpose: No matter what the data is, the bar should fit into the svg area; bars should not
        // get higher than the svg height. Hence incoming data needs to be scaled to fit into the svg area.
        var yScale = d3.scale.linear()
            // use the max funtion to derive end point of the domain (max value of the dataset)
            // do not use the min value of the dataset as min of the domain as otherwise you will not see the first bar
                .domain([0, d3.max(firstDatasetBarChart, function(d) { return d.measure; })])
                // As coordinates are always defined from the top left corner, the y position of the bar
                // is the svg height minus the data value. So you basically draw the bar starting from the top.
                // To have the y position calculated by the range function
                .range([height, 0])
        ;

        //Create SVG element

        var svg = d3.select("#barChart")
            .append("svg")
            .attr("width", width + margin.left + margin.right)
            .attr("height", height + margin.top + margin.bottom)
            .attr("id","barChartPlot")
        ;

        var plot = svg
            .append("g")
            .attr("transform", "translate(" + margin.left + "," + margin.top + ")")
        ;

        plot.selectAll("rect")
            .data(firstDatasetBarChart)
            .enter()
            .append("rect")
            .attr("x", function(d, i) {
                return xScale(i);
            })
            .attr("width", width / firstDatasetBarChart.length - barPadding)
            .attr("y", function(d) {
                return yScale(d.measure);
            })
            .attr("height", function(d) {
                return height-yScale(d.measure);
            })
            .attr("fill", "lightgrey")
        ;


        // Add y labels to plot

        plot.selectAll("text")
            .data(firstDatasetBarChart)
            .enter()
            .append("text")
            .text(function(d) {
                return formatAsInteger(d3.round(d.measure));
            })
            .attr("text-anchor", "middle")
            // Set x position to the left edge of each bar plus half the bar width
            .attr("x", function(d, i) {
                return (i * (width / firstDatasetBarChart.length)) + ((width / firstDatasetBarChart.length - barPadding) / 2);
            })
            .attr("y", function(d) {
                return yScale(d.measure) + 14;
            })
            .attr("class", "yAxis")
        /* moved to CSS
        .attr("font-family", "sans-serif")
        .attr("font-size", "11px")
        .attr("fill", "white")
        */
        ;

        // Add x labels to chart

        var xLabels = svg
            .append("g")
            .attr("transform", "translate(" + margin.left + "," + (margin.top + height)  + ")")
        ;

        xLabels.selectAll("text.xAxis")
            .data(firstDatasetBarChart)
            .enter()
            .append("text")
            .text(function(d) { return d.category;})
            .attr("text-anchor", "middle")
            // Set x position to the left edge of each bar plus half the bar width
            .attr("x", function(d, i) {
                return (i * (width / firstDatasetBarChart.length)) + ((width / firstDatasetBarChart.length - barPadding) / 2);
            })
            .attr("y", 15)
            .attr("class", "xAxis")
        //.attr("style", "font-size: 12; font-family: Helvetica, sans-serif")
        ;

        // Title

        svg.append("text")
            .attr("x", (width + margin.left + margin.right)/2)
            .attr("y", 15)
            .attr("class","title")
            .attr("text-anchor", "middle")
            .text("Einwohnerzahlen")
        ;
    }

    dsBarChart();

    /* ** UPDATE CHART ** */

    /* updates bar chart on request */

    function updateBarChart(group, colorChosen) {

        var currentDatasetBarChart = datasetBarChosen(group);

        var basics = dsBarChartBasics();

        var margin = basics.margin,
            width = basics.width,
            height = basics.height,
            colorBar = basics.colorBar,
            barPadding = basics.barPadding
        ;

        var 	xScale = d3.scale.linear()
            .domain([0, currentDatasetBarChart.length])
            .range([0, width])
        ;


        var yScale = d3.scale.linear()
            .domain([0, d3.max(currentDatasetBarChart, function(d) { return d.measure; })])
            .range([height,0])
        ;

        var svg = d3.select("#barChart svg");

        var plot = d3.select("#barChartPlot")
            .datum(currentDatasetBarChart)
        ;

        /* Note that here we only have to select the elements - no more appending! */
        plot.selectAll("rect")
            .data(currentDatasetBarChart)
            .transition()
            .duration(750)
            .attr("x", function(d, i) {
                return xScale(i);
            })
            .attr("width", width / currentDatasetBarChart.length - barPadding)
            .attr("y", function(d) {
                return yScale(d.measure);
            })
            .attr("height", function(d) {
                return height-yScale(d.measure);
            })
            .attr("fill", colorChosen)
        ;

        plot.selectAll("text.yAxis") // target the text element(s) which has a yAxis class defined
            .data(currentDatasetBarChart)
            .transition()
            .duration(750)
            .attr("text-anchor", "middle")
            .attr("x", function(d, i) {
                return (i * (width / currentDatasetBarChart.length)) + ((width / currentDatasetBarChart.length - barPadding) / 2);
            })
            .attr("y", function(d) {
                return yScale(d.measure) + 14;
            })
            .text(function(d) {
                return formatAsInteger(d3.round(d.measure));
            })
            .attr("class", "yAxis")
        ;


        svg.selectAll("text.title") // target the text element(s) which has a title class defined
            .attr("x", (width + margin.left + margin.right)/2)
            .attr("y", 15)
            .attr("class","title")
            .attr("text-anchor", "middle")
            .text("Einwohnerzahl " + group)
        ;
    }




</script>




</html>