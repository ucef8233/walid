<?php require_once('connexion.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>location</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        .card img {
            max-height: 10rem;
            max-width: 22rem;
        }

        .card-body p span {
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <a href="login.php" class="btn btn-primary">Login</a>
    <div id="entete">
        <video autoplay="autoplay" class="video_entete">
            <source src="images/loc.mkv" type="video/mp4" />
        </video>
        <p class="nomsite">LOCATION CAR</p>
        <div id="formauto">
            <form method="post" action="">
                <input id="motcle" type="text" name="motcle" placeholder="Recherche par marque..." />
                <input class="btfind" type="submit" name="btsubmit" value="Recherche" />
            </form>
        </div>
    </div>
    <div id="articles">
        <?php
        if (isset($_POST['btsubmit'])) {
            $mc = $_POST['motcle'];
            $reponse = $connexion->query('SELECT * FROM automobile WHERE marque ="' . $mc . '" ');
            $reponse->execute();
            $infos = $reponse->fetchAll();
            if ($infos) {
        ?>
                <div class="d-flex justify-content-between flex-wrap ">
                    <?php

                    foreach ($infos as $info) {
                    ?>
                        <div class="card mb-5" style="width: 18rem;">
                            <img src="images/<?php echo $info['photo'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text"><span>immatruculation: </span><?php echo $info['imm']; ?></p>
                                <p><span>marque: </span><?php echo $info['marque']; ?><br /></p>
                                <p><span>prix :</span><?php echo $info['prix']; ?></p>
                            </div>
                        </div>


                    <?php }
                    ?>
                </div>
            <?php
            } else {
            ?>
                <p class="alert alert-danger"> auqu'un article disponible </p>
            <?php
            }
        } else {

            $reponse = $connexion->query('SELECT * FROM automobile');
            $reponse->execute();
            $infos = $reponse->fetchALl();
            ?>
            <div class="d-flex justify-content-between flex-wrap ">
                <?php
                foreach ($infos as $info) {
                ?>
                    <div class="card mb-5" style="width: 18rem;">
                        <img src="images/<?php echo $info['photo'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><span>immatruculation: </span><?php echo $info['imm']; ?></p>
                            <p><span>marque: </span><?php echo $info['marque']; ?><br /></p>
                            <p><span>prix :</span><?php echo $info['prix']; ?></p>
                        </div>
                    </div>
            <?php }
            } ?>
            </div>
    </div>
</body>

</html>