<?php
include 'db.php';
// include "config.php";
session_start();
//get data from DB
?>
<?php
$recipeName = mysqli_real_escape_string($connection, $_POST['recipeTitle']);
$People = mysqli_real_escape_string($connection, $_POST['recipePax']);
$Time = mysqli_real_escape_string($connection, $_POST['recipeHours']);
$Cal = mysqli_real_escape_string($connection, $_POST['Cal']);
$Ingredient_1 = mysqli_real_escape_string($connection, $_POST['Ingredient_1']);
$Ingredient_2 = mysqli_real_escape_string($connection, $_POST['Ingredient_2']);
$Step_1 = mysqli_real_escape_string($connection, $_POST['Step_1']);
$Step_2 = mysqli_real_escape_string($connection, $_POST['Step_2']);
      $query = "insert into  tbl_Ingredients(Ingredient_1,Ingredient_2,Step_1,Step_2,
      Preparation_Time,Recipes_title,People,cal) VALUES
       ('$Ingredient_1', '$Ingredient_2','$Step_1','$Step_2', '$Time','$recipeName','$People', '$Cal')";
      $result = mysqli_query($connection, $query);
      echo $query;
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- js -->
    <title>Object Page</title>
</head>

<body>
    <header>
        <a id="logo" href="#"></a>
        <section id="loginSides" class="container">
            <a href="#" class="heart "><img src="images/heart.png"></a>
            <a href="#" class="login "><img src="images/login.png"></a>
            <a href="#" class="3Dots "><img src="images/3 dots.png"></a>
        </section>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid element.style">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Recipes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Healthy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link CFB" href="#">Cruelty Free Brands</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <aside id="headlineZone">
        <p id="headline">
            Add a New Recipe
        </p>
        <section id="asideLinks">
            <a href="#">Home </a> <span>&nbsp;/&nbsp;</span>
            <a href="#">Recipes </a> <span>&nbsp;/&nbsp;</span>
            <span class="asideLinksSelected">New Recipe </span>
        </section>
    </aside>
    <main id="wrapper">
        <section class="formResultMain">
            <h1>Thank you!</h1>
            <?php
                    $sName = $_GET["recipeName"];
                    $sColor = $_GET["shirtColor"];
                echo  "<h2>You succecfuly added " . $sName .  "to your recipes</h2>";
                ?>


        </section>





    </main>
    <footer id="footerZone">
        <!-- <a id="footerElement" href="#">Back to top</a> -->
    </footer>
</body>

</html>

<?php
 //close DB connection
 mysqli_close($connection);
?>