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
    ?>
    <div class="container mx-auto my-5">
        <?php
        if (isset($_SESSION['pseudo'])) {


        ?>
            <div class="row justify-content-center text-center">
                <div class="col-6 text-white">
                    <h3><?=$_SESSION['pseudo'] ?>'s Score: <?= $_SESSION['playerScore'] ?></h3>
                </div>
                <div class="col-6 text-white">
                    <h3>Computer Score: <?= $_SESSION['computerScore'] ?></h3>
                </div>
            </div>
            <!-- Button Choice Container -->
            <div class="row justify-content-center choice mx-auto text-center text-white">
                <!-- Scissors -->
                <div class="col-4 py-5 mx-5">
                    <a class="btn btn-choice border border-5 rounded-circle p-5 shadow" href="./Controller/ChoiceController.php?choice=scissors">
                        <i class="fa-solid fa-5x m-auto fa-hand-scissors"></i>
                    </a>
                </div>
                <!-- Rock -->
                <div class="col-4 py-5 mx-5">
                    <a class="btn btn-choice border border-5 rounded-circle p-5 shadow" href="./Controller/ChoiceController.php?choice=rock">
                        <i class="fa-solid fa-5x m-auto fa-hand-back-fist"></i>
                    </a>
                </div>
                <!-- Paper -->
                <div class="col-4 py-5 mx-5">
                    <a class="btn btn-choice border border-5 rounded-circle p-5 shadow" href="./Controller/ChoiceController.php?choice=paper">
                        <i class="fa-solid fa-5x m-auto fa-hand"></i>
                    </a>
                </div>
            </div>
        <?php
        } else {

        ?>
            <form action="./Controller/PseudoController.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-white">Entrez votre pseudo</label>
                    <input type="text" class="form-control" id="nom" name="pseudo">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-light my-2">Enregistrer</button>
                </div>

            </form>
        <?php
        }
        ?>
    </div>
    <!-- Script -->
    <script type="module" src="./node_modules/popper.js/dist/popper.min.js"></script>
</body>

</html>