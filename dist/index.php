<?php include("connect/db.php");
$query = "SELECT * FROM social_media";
$runquery = mysqli_query($db, $query);
if (!$db) :
  header("location:index.html");
endif;
$data = mysqli_fetch_array($runquery);
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Welcome to my portfolio</title>
</head>

<body id="bg-img">
<a href="#"class="log"><img src="img/LO .png" alt="logo de logiciel Atom"/>   
    <?php include("navbar/navbar.php"); ?>
    <main id="home">
        <h1 class="lg-heading">
            Imane <span class="text-secondary">Elhmami</span>
        </h1>
        <h2 class="sm-heading">
            développeuse web
        </h2>
        <div class="icons">
            <a href="<?= $data['twitter'] ?>" target="_blank">
                <li class="fab fa-twitter fa-2x"></li>
            </a>
            <a href="<?= $data['facebook'] ?>" target="_blank">
                <li class="fab fa-facebook fa-2x"></li>
            </a>
            <a href="<?= $data['linkedin'] ?>" target="_blank">
                <li class="fab fa-linkedin fa-2x"></li>
            </a>
            <a href="<?= $data['github'] ?>" target="_blank">
                <li class="fab fa-github fa-2x"></li>
            </a>
        </div>
    </main>

    <script src="js/main.js"></script>
</body>

</html>