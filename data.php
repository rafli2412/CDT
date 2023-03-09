<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDT PROXIMITI 2021</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link type="text/css" rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="img/logo tel-u.png">
</head>
<body>
    <?php
    session_start();
    include "conn/server.php";

    if (isset($_SESSION['username']) && isset($_SESSION['ID'])) {
    ?>
        <div class="navigation">
            <ul>
                <li class="list">
                    <a href="index.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Home</span>
                    </a>
                </li>

                <?php if (isset($_GET['day'])) { ?>
                <li class="list">
                    <a href="/index.php">
                        <span class="icon"><ion-icon name="create-outline"></ion-icon></ion-icon></span>
                        <span class="title">Input</span>
                    </a>
                </li>
                <?php } ?>

                <li class="list active">
                    <a href="data.php">
                        <span class="icon"><ion-icon name="reader-outline"></ion-icon></span>
                        <span class="title">Data</span>
                    </a>
                </li>
                <?php if (isset($_SESSION['admin'])) { ?>
                <li class="list">
                    <a href="#register">
                        <span class="icon"><ion-icon name="add-outline"></ion-icon></span>
                        <span class="title">Register</span>
                    </a>
                </li>
                <?php } ?>
                <li class="list">
                    <a href="conn/conn.php?logout=1" onclick="return confirm('Udahan nih?')">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Logout</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="toggle">
            <ion-icon name="grid-outline" class="open"></ion-icon>
            <ion-icon name="close-outline" class="close"></ion-icon>
        </div>
        <!-- <a href="index.php">
            <div class="toggle color">
                <ion-icon name="refresh-outline" class="open"></ion-icon>
            </div>
        </a> -->

        <div class="content" id="home">
            <div style="grid-column: 1 / 3">
                <center>
                    <h1>💢D A T A _ P E L A N G G A R A N _ M A B A💢</h1>
                    <?php if (isset($_GET['success'])) { ?>
                        <div class="success"><?php echo $_GET['success']; ?></div> <br>
                    <?php }
                        if (isset($_GET['error'])) { ?>
                            <div class="error home"><?php echo $_GET['error']; ?></div> <br>
                    <?php }
                        if (isset($_GET['warning'])) { ?>
                            <div class="warning"><?php echo $_GET['warning']; ?></div> <br>
                    <?php }?>
                </center>
            </div><br>

            <div style="grid-column: 1 / 3">
                <a class="proximiti-data" href="./data-day.php?d=1">DATA PROXIMITI DAY 1</a>
                <a class="proximiti-data" href="./data-day.php?d=2">DATA PROXIMITI DAY 2</a>
                <a class="proximiti-data" href="./data-day.php?d=3">DATA PROXIMITI DAY 3</a>
                <a class="proximiti-data" href="./data-day.php?d=4">DATA PROXIMITI DAY 4</a>
                <a class="proximiti-data" href="./data-day.php?d=5">DATA PROXIMITI DAY 5</a>
                <a class="proximiti-data" href="./data-day.php?d=6">DATA PROXIMITI DAY 6</a>
                <a class="proximiti-data" href="./data-day.php?d=7">DATA PROXIMITI DAY 7</a>
                <a class="proximiti-data" href="./data-day.php?d=8">DATA PROXIMITI DAY 8</a>
            </div>
        </div><br>

        <?php if (isset($_SESSION['admin'])) { ?>
        <form class="content close" id="register" action="conn/conn.php" method="POST">
            <div style="grid-column: 1 / 3">
                <center>
                    <h1>R E G I S T E R</h1>
                </center>
            </div>

            <div style="margin: 10px;">
                <label for="">Username</label><br>
                <input type="text" name="new-username" required><br><br>
                
                <label for="">Admin Role</label><br>
                <select name="admin" id="">
                    <option value="" selected>---Pilih---</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select><br><br>
            </div>

            <div style="margin: 10px;">
                <label for="">Password</label><br>
                <input type="password" name="password" required><br><br>
                
                <label for="">Confirm Password</label><br>
                <input type="password" name="c-password" required><br><br>
            </div>
            
            <div style="grid-column: 1 / 3">
                <center>
                    <button type="submit" value="Login">REGISTER</button>
                </center>
            </div><br>
        </form>

        <?php } ?>
        

    <?php } else { ?>
    <form action="conn/conn.php" method="POST" class="login">
        <div class="container">
            <h2>L O G I N C D T</h2>
            <?php if (isset($_GET['error'])) { ?>
                <div class="error"><?php echo $_GET['error']; ?></div>
            <?php } ?> <br>
            <input type="text" placeholder="Username" name="username" required><br>
            <input type="password" placeholder="Password" name="password" required><br>
            <button type="submit" value="Login">Login</button>
        </div>
    </form>

    <?php } ?>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="js/script.js"></script>
</body>
</html>

