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
</head>
<style>
    h2{
        font-family: 'Audiowide';font-size: 50px;
        color:   bisque;
    }
    h5 {
        font-family: 'Cantora One';font-size: 20px;
        color: white;
        padding-left: 20px;
    }
    label {
        font-family: 'Cantora One';font-size: 20px;
        color: white;
        padding-left: 20px;
    }
    #container
    {
        width: 400px;
        margin-top: 200px;
        height: 1080px;
        margin-left: auto;
        margin-right: auto;
        background-size: cover;
        background-color: cadetblue;

    }
</style>
<body id="container">
<form method="POST" action="login.php">
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
        <input type="submit" value="Login" />

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
