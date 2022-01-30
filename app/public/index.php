<?php
 //session_start();
include_once'classes/db.classes.php';
//print_r(PDO::getAvailableDrivers());


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<body class="d-flex flex-column min-vh-100">
<?php
$object = new Db;
$object->connect();
?>

    <header>
        <nav>
            <div>
                <h3> SM </h3>
                <ul class="menu-main">
                    <li><a href="index.php"> HOME </a> </li>
                </ul>
            </div>
            <ul class="menu-member">
                <?php
                if(isset($_SESSION["userid"]))
                {
                    ?>
                    <li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li>
                    <li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
                    <?php
                }
                else
                {
                    ?>
                    <li><a href="#">SIGN UP</a></li>
                    <li><a href="#" class="header-login-a">LOGIN</a></li>
                    <?php
                }
                ?>

            </ul>
        </nav>
    </header>


 <section class="index-login">
     <h1 id="title">SCHOOL MANAGEMENT</h1>
     <script>
         document.getElementById("title").style.color = "blue";
     </script>
     <div class="wrapper">
         <div class="index-login-signup">
             <div class="container-md border">
                 <div class="mb-3">

             <h4> SIGN UP </h4>

             <form id="form" action="includes/signup.inc.php" method="post">

                 <div class="form-group col-md-4">
                 <input type="text" class="form-control" name="uid" placeholder="Username">
                 </div>
                 <div class="form-group col-md-4">
                 <input type="password" class="form-control" name="pwd" placeholder="Password">
                 </div>
                 <div class="form-group col-md-4">
                 <input type="password" class="form-control" name="pwdRepeat" placeholder="Repeat Password">
                 </div>
                 <div class="form-group col-md-4">
                 <input type="email" class="form-control" name="email" id="floatingInput" placeholder="E-mail">
                 </div>

                 <div>
                 <button type="button" class="btn btn-outline-primary" name="submit"> SIGN UP </button>
                 </div>

             </form>

                 </div>
             </div>
         </div>

         <div class="index-login-login">
             <div class="container-md border">
                 <div class="mb-3">
             <h4> LOG IN </h4>

             <form id="form" action="includes/login.inc.php" method="post">
                 <div class="form-group col-md-4">
                 <input type="text" class="form-control" name="uid" placeholder="Username">
                 </div>
                 <div class="form-group col-md-4">
                 <input type="password" class="form-control" name="pwd" placeholder="Password">
                 </div>

                 <button type="button" class="btn btn-primary" name="submit"> LOG IN </button>
             </form>
                 </div>
             </div>
         </div>
     </div>

 </section>

<footer class="mt-auto">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.1);">
        © 2022 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">School Management</a>
    </div>
</footer>

</body>
</html>


