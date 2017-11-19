<?php

session_start();

if (is_null($_SESSION['login'])) {
    header("Location: panel-gateway.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tyler Grissom</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="assets/style/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="assets/style/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/style/css/style.css">

    <script rel="script" type="text/javascript" src="assets/script/jquery-3.2.1.min.js"></script>
    <script rel="script" type="text/javascript" src="assets/script/materialize.min.js"></script>
    <script rel="script" type="text/javascript" src="assets/script/global.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>

<!-- Modal Structure -->
<div id="verify-modal" class="modal">
    <div class="modal-content">
        <h4>What is the password?</h4>
        <div class="row">
            <form action="" method="post">
                <div class="input-field col s12">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="icon_prefix" type="password" class="validate">
                    <label for="icon_prefix">Password</label>
                </div>
            </form>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
</div>

<script>
    $(function() {
        $(".modal").modal('open');
    })
</script>

</body>
</html>