<?php include("connect/db.php");
$query = "SELECT * FROM about WHERE id = 1";
$runquery = mysqli_query($db, $query);
if (!$db) :
  header("location:index.html");
endif;
$data1 = mysqli_fetch_array($runquery);
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>About Me</title>
</head>

<body>
<a href="#"class="log"><img src="img/LO .png" alt="logo de logiciel Atom"/>   

    <?php include("navbar/navbar.php"); ?>
    <main id="about">
        <h1 class="lg-heading">About <span class="text-secondary">Me</span></h1>
        <h2 class="sm-heading">
            Let me tell a few things...
            

        </h2>
        <div class="about-info">
            <img src="#" alt="Imane elhmami" class="bio-image" />
            <div class="bio">
                <h3 class="text-secondary">BIO</h3>
                <p>
                    My name is Imane elhmami développeuse web

                   
                </p>
            </div>
            <div class="job job-1">
                <h3><?=  $data1["heading"]?></h3>
                <h6><?=  $data1["subheading"]?></h6>
                <p> <?=  $data1["longdesc"]?></p>
            </div>
            <div class="job job-2">
                <h3>Designer Abc</h3>
                <h6>développeuse web</h6>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio
                    consequuntur similique totam, excepturi neque eos unde harum dolores
                    doloremque blanditiis.
                </p>
            </div>
            <div class="job job-3">
                <h3>Designer ABc</h3>
                <h6>développeuse web</h6>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio
                    consequuntur similique totam, excepturi neque eos unde harum dolores
                    doloremque blanditiis.
                </p>
            </div>
        </div>
    </main>

    <footer id="main-footer">
        Copyright &copy; 2020
    </footer>

    <script src="js/main.js"></script>
</body>

</html>