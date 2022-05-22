<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pierre Papier Sciseaux</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="./node_modules/@fortawesome/fontawesome-free/css/fontawesome.css" rel="stylesheet">
    <link href="./node_modules/@fortawesome/fontawesome-free/css/brands.css" rel="stylesheet">
    <link href="./node_modules/@fortawesome/fontawesome-free/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="body-bg">
    <?php include("./nav.php") ?>
    <?php
    session_start();
    if (!isset($_SESSION['playerScore'])) {
        $_SESSION['playerScore'] = 0;
        $_SESSION['computerScore'] = 0;
    }
    if (isset($_SESSION['result'])) {
    ?>
        <div class="container mx-auto my-5 text-white">
            <div id="scoreboard" class="row justify-content-center text-center invisible">
                <div class="col-6 text-white">
                    <h3><?=$_SESSION['pseudo'] ?>'s Score: <?= $_SESSION['playerScore'] ?></h3>
                </div>
                <div class="col-6 text-white">
                    <h3>Computer Score: <?= $_SESSION['computerScore'] ?></h3>
                </div>
            </div>
            <h1 id="text-result" class="text-center invisible"><?= $_SESSION['result'] ?></h1>
            <div class="row justify-content-center choice mx-auto text-center text-white">
                <!-- Player Result -->
                <div class="col-4 py-5 mx-5">
                    <div class="btn btn-choice border border-5 rounded-circle p-5 shadow">
                        <i class="fa-solid fa-5x m-auto <?= $_SESSION['player'] ?>"></i>
                    </div>
                </div>
                <!-- Computer Result -->
                <div class="col-4 py-5 mx-5">
                    <div class="btn btn-choice border border-5 rounded-circle p-5 shadow">
                        <i id="choice-question" class="fa-solid fa-5x m-auto fa-3 px-3"></i>
                        <i id="choice-ia" class="fa-solid fa-5x m-auto d-none <?= $_SESSION['computer'] ?>"></i>
                    </div>
                </div>
            </div>
            <div class="text-center my-4">
                <a href="./Controller/PlayController.php" id="play" class="btn btn-light btn-play invisible">Play Again</a>
            </div>
            <div class="text-center">
                <a href="./Controller/ResetController.php" id="reset" class="btn btn-light btn-reset invisible">Reset</a>
            </div>
        </div>
        <script type="module" src="./node_modules/jquery/dist/jquery.min.js"></script>
    <?php

    }
    ?>

    <!-- Script -->
    <script type="module" src="./node_modules/popper.js/dist/popper.min.js"></script>
    <script src="./js/index.js"></script>
</body>

</html>