<?php
include 'db.php';
include 'config.php';
// include "config.php";

session_start();
//get data from DB
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Spectral:wght@300&display=swap"
        rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- js -->
    <script src="js/scripts.js"></script>

    <title>Form Page</title>
</head>

<body>
    <header>
        <section class="header-container">
            <section>
                <a id="logo" href="index.html"></a>
            </section>
            <section id="loginSides">
                <section class="container">
                    <a href="#" class="heart "><img src="images/heart.png"></a>
                    <a href="#" class="login "><img src="images/login.png"></a>
                    <a href="#" class="Dots3 "><img src="images/3 dots.png"></a>
                </section>
            </section>
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
        <form class="formMain" action="get_form.php" method="post">
            <section class="row mb-3 formAlignItem">
                <label class="col-sm-3 col-form-label">Recipe Title</label>
                <section class="col-sm-9">
                    <input type="text" title="please choose a name" placeholder="Enter the recipe Title*"
                        name="recipeTitle" required class="form-control" id="inputEmail3">
                </section>
            </section>
            <section class="row mb-3 formAlignItem">
                <label class="col-sm-3 col-form-label">Add an image</label>
                <section class="col-sm-9">
                    <input type="file" title="please add an image" name="recipePics" class="form-control"
                        id="inputPassword3">
                </section>
            </section>
            <section class="row mb-3 formAlignItem">
                <label class="col-sm-3 col-form-label">How many people?</label>
                <section class="col-sm-2">
                    <input type="number" name="recipePax" min="1" max="5" required class="form-control"
                        id="inputPassword3">
                </section>
                <label class="col-sm-3 col-form-label">Preparation time?</label>
                <section class="col-sm-2">
                    <input type="number" name="recipeHours" min="0" max="10" class="form-control" id="inputPassword3"
                        placeholder="Hours" required>
                </section>
                <section class="col-sm-2">
                    <input type="number" name="recipeMinutes" min="0" max="55" step="5" class="form-control"
                        id="inputPassword3" placeholder="Minutes" required>
                </section>
            </section>
            <section class="row mb-3 formAlignItem">
                <label class="col-sm-3 col-form-label">What is the dificulty?</label>
                <section class="col-sm-9">
                    <span class="form-label">Easy &nbsp;<input type="range" name="recipeDificulty" min="0" max="5"
                            id="customRange2" class="form-range"> &nbsp; Chef</span>
                </section>
            </section>
            <section class="row mb-3 formAlignItem">
                <label class="col-sm-3 col-form-label">How many:</label>
                <label class="col-sm-1 col-form-label">Cals</label>
                <section class="col-sm-2">
                    <input type="text" title="please choose a name" placeholder="Cals" name="Cal" required
                        class="form-control" id="inputEmail3" pattern="[0-9]{1,4}">
                </section>
                <label class="col-sm-1 col-form-label">Fats</label>
                <section class="col-sm-2">
                    <input type="text" title="please choose a name" placeholder="Fats" name="recipeName" required
                        class="form-control" id="inputEmail3" pattern="[0-9]{1,4}">
                </section>
                <label class="col-sm-1 col-form-label">Prots</label>
                <section class="col-sm-2">
                    <input type="text" title="please choose a name" placeholder="Prots" name="recipeName" required
                        class="form-control" id="inputEmail3" pattern="[0-9]{1,4}">
                </section>
            </section>
            <section class="row mb-3 formAlignItem">
                <label class="col-sm-3 col-form-label">Ingredients list</label>
            </section>
            <section class="row mb-3 formAlignItem">
                <label class="col-sm-3 col-form-label ingrCount">Ingredient 1</label>
                <section class="col-sm-5">
                    <input type="text" title="please choose a name" placeholder="Ingredient Name" name="Ingredient_1"
                        required class="form-control" id="inputEmail3">
                </section>
                <section class="col-sm-2">
                    <select type="text" name="recipeIngrMeasur" class="form-control"
                        placeholder="Ingredient Measurement*" aria-label="Ingredient Measurement*">
                        <option selected>Measur.</option>
                        <option value="1">Liter</option>
                        <option value="2">Oz</option>
                        <option value="3">gr</option>
                        <option value="4">ml</option>
                        <option value="5">kg</option>
                        <option value="6">lb</option>
                        <option value="7">cup</option>
                        <option value="8">spoon</option>
                        <option value="9">else</option>
                    </select> </section>
                <section class="col-sm-2">
                    <input type="number" class="form-control" placeholder="Quantity" aria-label="Quantity" min="0.5"
                        step="0.5" required>
                </section>
            </section>
            <section class="row mb-3 formAlignItem">
                <label class="col-sm-3 col-form-label ingrCount">Ingredient 2</label>
                <section class="col-sm-5">
                    <input type="text" title="please choose a name" placeholder="Ingredient Name" name="Ingredient_2"
                        class="form-control" id="inputEmail3">
                </section>
                <section class="col-sm-2">
                    <select type="text" name="recipeIngrMeasur" class="form-control"
                        placeholder="Ingredient Measurement*" aria-label="Ingredient Measurement*">
                        <option selected>Measur.</option>
                        <option value="1">Liter</option>
                        <option value="2">Oz</option>
                        <option value="3">gr</option>
                        <option value="4">ml</option>
                        <option value="5">kg</option>
                        <option value="6">lb</option>
                        <option value="7">cup</option>
                        <option value="8">spoon</option>
                        <option value="9">else</option>
                    </select> </section>
                <section class="col-sm-2">
                    <input type="number" class="form-control" placeholder="Quantity" aria-label="Quantity" min="0.5"
                        step="0.5">
                </section>
            </section>
            <section class="row mb-3 formAlignItem">
                <label class="col-sm-3 col-form-label ingrCount">Ingredient 3</label>
                <section class="col-sm-5">
                    <input type="text" title="please choose a name" placeholder="Ingredient Name" name="recipeName"
                        class="form-control" id="inputEmail3">
                </section>
                <section class="col-sm-2">
                    <select type="text" name="recipeIngrMeasur" class="form-control"
                        placeholder="Ingredient Measurement*" aria-label="Ingredient Measurement*">
                        <option selected>Measur.</option>
                        <option value="Liter">Liter</option>
                        <option value="Oz">Oz</option>
                        <option value="gr">gr</option>
                        <option value="ml">ml</option>
                        <option value="kg">kg</option>
                        <option value="lb">lb</option>
                        <option value="cup">cup</option>
                        <option value="spoon">spoon</option>
                        <option value="else">else</option>
                    </select> </section>
                <section class="col-sm-2">
                    <input type="number" class="form-control" placeholder="Quantity" aria-label="Quantity" min="0.5"
                        step="0.5">
                </section>
            </section>
            <section class="row mb-3 formAlignItem2">
                <label class="col-sm-4 col-form-label"><a href="#">Add another ingredient</a></label>
            </section> <br>
            <section class="row mb-3 formAlignItem">
                <label class="col-sm-3 col-form-label">Coocking instructions</label>
            </section>
            <section class="row mb-3 formAlignItem2">
                <label class="col-sm-2 col-form-label">Step 1</label>
                <section class="col-sm-10">
                    <input type="text" title="please choose a name" placeholder="Please enter an instruction"
                        name="Step_1" required class="form-control" id="inputEmail3">
                </section>
            </section>
            <section class="row mb-3 formAlignItem2">
                <label class="col-sm-2 col-form-label">Step 2</label>
                <section class="col-sm-10">
                    <input type="text" title="please choose a name" placeholder="Please enter an instruction"
                        name="Step_2" class="form-control" id="inputEmail3">
                </section>
            </section>
            <section class="row mb-3 formAlignItem2">
                <label class="col-sm-2 col-form-label">Step 2</label>
                <section class="col-sm-10">
                    <input type="text" title="please choose a name" placeholder="Please enter an instruction"
                        name="recipeName" class="form-control" id="inputEmail3">
                </section>
            </section>

            <section class="row mb-3 formAlignItem2">
                <label class="col-sm-3 col-form-label"><a href="#">Add another step</a></label>
            </section> <br>
            <fieldset class="row mb-3 formAlignItem">
                <legend class="col-form-label col-sm-4 pt-0">Did you prepare this recipe</legend>
                <div class="col-sm-8">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Yes"
                            required>
                        <label class="form-check-label" for="gridRadios1">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="No">
                        <label class="form-check-label" for="gridRadios2">
                            No
                        </label>
                    </div>
                </div>
            </fieldset>
            <section class="submitButton d-grid gap-2">
                <input type="submit" id="submit" class="btn btn-primary btn-lg" value="Send">
            </section>
        </form>
    </main>
    <footer id="footerZone">
        <a id="footerElement" href="#">Back to top</a>
    </footer>
</body>

</html>
<?php
 //close DB connection
 mysqli_close($connection);
?>