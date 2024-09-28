<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrgLink - Account Sign-up</title>
</head>

<body>

    <div class="container">
        <div class="forms">
            <form action="Create.php" method="post">
                <div>
                    <label id="createLabel" class="mainLabels">Sign-up</label> <br>
                </div>
                <div class="formContents">
                    <label class="formLabels">Username : </label><br>
                    <input type="text" value="" placeholder="Enter a valid Username" class="input" name="usernameInput"> <br>
                </div>

                <div class="formContents">
                    <label class="formLabels">E-mail : </label><br>
                    <input type="text" value="" placeholder="Type a valid email" class="input" name="usernameInput"> <br>
                </div>

                <div class="formContents">
                    <label class="formLabels">Password : </label> <br>
                    <input type="password" value="" placeholder="Type a valid Password" class="input" name="passwordInput"> <br>
                </div>

                <div class="formContents">
                    <label class="formLabels">Repeat Password : </label> <br>
                    <input type="password" value="" placeholder="Repeat Password" class="input" name="passwordRepeat"> <br>
                </div>

                <div id="signButtonContainer" class="indexButtons">
                    <input type="submit" value="CREATE ACCOUNT" name="createButton" id="createButton">
                </div>

                <p id="errorMessage1" class="errorMessages"></p>
            </form>

        </div>
    </div>

</body>

</html>

<?php
session_start();

// class checkInput
// {
//     protected function check() {


//         $username = "root";
//         $password = "";

//     }
// }



?>