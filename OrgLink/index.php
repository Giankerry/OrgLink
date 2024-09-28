<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="practice.css">
    <title>OrgLink - Login</title>
</head>

<body>
    <div class="container">
        <div class="forms">
            <form action="index.php" method="post">
                <div>
                    <label id="loginLabel" class="mainLabels">Login</label> <br>
                </div>
                <div class="formContents">
                    <label class="formLabels">Username : </label><br>
                    <input type="text" value="" placeholder="Type a Username" class="input" name="username"> <br>
                </div>
                <div class="formContents">
                    <label class="formLabels">Password : </label> <br>
                    <input type="password" value="" placeholder="Type a Password" class="input" name="password"> <br>
                </div>

                <div id="loginButtonContainer" class="indexButtons">
                    <input type="submit" value="LOGIN" name="loginButton" id="loginButton">
                </div>
                <p id="orDiv">------------- OR -------------</p>
                <div id="createButtonContainer" class="indexButtons">
                    <input type="submit" value="CREATE ACCOUNT" name="createButton" id="createButton">
                </div>

                <p id="errorMessage1" class="errorMessages"></p>
            </form>

        </div>
    </div>

</body>

</html>


<?php
require "Database.php";
session_start();

if (isset($_POST["loginButton"])) {

    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        if (strlen($_POST["username"]) < 8 || strlen($_POST["username"]) < 8) {
            echo "<script>document.getElementById(`errorMessage1`).textContent = `Invalid username or password. `;</script>";
        } else {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
            header("Location:Hero.php");
        }
    } else {
        echo "<script>document.getElementById(`errorMessage1`).textContent = `Incorrect username or password. `;</script>";
    }
}

if (isset($_POST["createButton"])) {
    header("location: Create.php");
}
