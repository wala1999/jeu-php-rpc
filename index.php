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
</head>

<body class="bg-dark">
    <?php
    session_start();
    if (!isset($_SESSION['playerScore'])) {
        $_SESSION['playerScore'] = 0;
        $_SESSION['computerScore'] = 0;
    }
    if (!isset($_SESSION['result'])) {
    ?>
        <div class="container mx-auto my-5">
            <div class="row justify-content-center text-center">
                <div class="col-6 text-white">
                    <h3>You Score: <?= $_SESSION['playerScore'] ?></h3>
                </div>
                <div class="col-6 text-white">
                    <h3>Computer Score: <?= $_SESSION['computerScore'] ?></h3>
                </div>
            </div>
            <!-- Button Choice Container -->
            <div class="row justify-content-center choice mx-auto text-center text-white">
                <!-- Scissors -->
                <div class="col-4 py-5 mx-5">
                    <a class="btn btn-light border border-5 border-primary rounded-circle p-5 " href="./Controller/ChoiceController.php?choice=scissors"><i class="fa-solid fa-5x m-auto fa-hand-scissors"></i></a>
                </div>
                <!-- Rock -->
                <div class="col-4 py-5 mx-5">
                    <a class="btn btn-light border border-5 border-warning rounded-circle p-5 " href="./Controller/ChoiceController.php?choice=rock"><i class="fa-solid fa-5x m-auto fa-hand-back-fist"></i></a>
                </div>
                <!-- Paper -->
                <div class="col-4 py-5 mx-5">
                    <a class="btn btn-light border border-5 border-danger rounded-circle p-5" href="./Controller/ChoiceController.php?choice=paper"><i class="fa-solid fa-5x m-auto fa-hand"></i></a>
                </div>
            </div>
        </div>
    <?php
    } else {
    ?>
        <div class="container mx-auto my-5 text-white">
            <div class="row justify-content-center text-center">
                <div class="col-6 text-white">
                    <h3>You Score: <?= $_SESSION['playerScore'] ?></h3>
                </div>
                <div class="col-6 text-white">
                    <h3>Computer Score: <?= $_SESSION['computerScore'] ?></h3>
                </div>
            </div>
            <h1 class="text-center"><?= $_SESSION['result'] ?></h1>
            <div class="row justify-content-center choice mx-auto text-center text-white">
                <!-- Player Result -->
                <div class="col-4 py-5 mx-5">
                    <a class="btn btn-light border border-5 border-primary rounded-circle p-5 " href="./Controller/ChoiceController.php?choice=scissor">
                        <i class="fa-solid fa-5x m-auto <?= $_SESSION['player'] ?>"></i>
                    </a>
                </div>
                <!-- Computer Result -->
                <div class="col-4 py-5 mx-5">
                    <a class="btn btn-light border border-5 border-warning rounded-circle p-5 " href="./Controller/ChoiceController.php?choice=rock">
                        <i class="fa-solid fa-5x m-auto <?= $_SESSION['computer'] ?>"></i>
                    </a>
                </div>
            </div>
            <div class="text-center my-4">
                <a href="./Controller/PlayController.php" class="btn btn-light">Play Again</a>
            </div>
            <div class="text-center">
                <a href="./Controller/ResetController.php" class="btn btn-light">Reset</a>
            </div>
        </div>
    <?php

    }
    ?>

    <!-- Script -->
    <script type="module" src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script type="module" src="./node_modules/popper.js/dist/popper.min.js"></script>
</body>

</html>