<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


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

        font-family: 'Montserrat', sans-serif; font-size: 17px;
        font-size: 30px;
        color: black;

    }

    h5 {

        font-family: 'Cantora One';
        font-size: 30px;
        color: black;

    }



    #container {
        margin-left: 50px;
        margin-top: 50px;
        width: 300px;





    }


    ul {

        list-style-type: none;
        margin: 0;
        padding: 0;

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
<ul>
    <li><a class="active" href="index.php">Home</a></li>
    <li><a href="#contact">Contact</a></li>
    <li style="float:right"><a href="newuser.php">register</a></li>
    <li style="float:right"><a href="login.php">login</a></li>
</ul>
<form method="POST" action="login.php" id="container">
    <b><h2>Login</h2></b><br>
    <br>

    <form  method="post">
        <label for="email">E-Mail:</label> <input id="email" type="text" name="email" /><br />
        <label for="passwort">   Passwort: </label><input type="password" id="password" name="passwort" /><br />

        <h5>Kein Benutzer?</h5>
        <a href="newuser.php">Neuen Benutzer erstellen!</a>

        <br>
        <br>
        <br>
        <input type="submit" value="Login" class="button" />

        <br>
        <br>
        <br>

    </form>
    <?php
    session_start();

    $GLOBALS['successful'] = false;

    if(isset($_POST["email"]) && isset($_POST["passwort"])){
        $email = $_POST["email"];
        $passwort = $_POST["passwort"];

        login($passwort, $email);

        if($GLOBALS['successful'] == true){
            loadNextPage();
        }else{
            echo "Falscher Username oder Passwort";
        }
    }

    function loadNextPage(){
        header("Location:index.php");
        exit();
    }


    function login($passwort, $email){
        $users = file("login.txt");
        foreach($users AS $line)  {
            $user_info = explode(";", $line);
            if($user_info[0] == $email && $user_info[1] == $passwort) {
                $GLOBALS['successful'] = true;
            }

        }

    }




    ?>



</body>
</html>
