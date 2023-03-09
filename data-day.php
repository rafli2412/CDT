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

        <div class="content" id="">
            <div style="grid-column: 1 / 3">
                <center>
                    <h1>D A T A _ P E L A N G G A R A N _ M A B A</h1>
                    <h3>PROXIMITI DAY <?php echo $_GET['d'] ?></h3>
                    <?php
                        if (isset($_GET['error'])) { ?>
                            <div class="error home"><?php echo $_GET['error']; ?></div> <br>
                    <?php }
                        if (isset($_GET['warning'])) { ?>
                            <div class="warning"><?php echo $_GET['warning']; ?></div> <br>
                    <?php }?>
                </center>

                <?php if (isset($_SESSION['admin'])) { ?>
                    <a href="print.php?d=<?php echo $_GET['d'] ?> " target="_blank"><button style="margin-left: 50px">PRINT</button></a>
                    <br><br>
                <?php } ?>

                <!-- <form style="margin: 52px;" method="POST" action="conn/conn.php">
                    <input type="text" placeholder="Mo cari apa?" name="search">
                    <button type="submit"><ion-icon name="search"></ion-icon></button>
                </form> -->

                <center>
                <table>
                    <tr>
                        <th>Nama</th>
                        <th>Kelompok</th>
                        <th>Proxi Day</th>
                        <th>Pelanggaran Brt</th>
                        <th>Total</th>
                        <th>Del</th>
                    </tr>

                    <?php
                        $day = "PROXIMITI DAY ".$_GET['d'];
                        $sql = "SELECT * FROM pelanggaran WHERE hari='$day'
                        ORDER BY kelompok";
                        $Data = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_array($Data)) { ?>
                        <form action="" method="POST">
                            <tr>
                                <td><?php echo "".$row['nama']."" ?></td>
                                <td><?php echo "".$row['kelompok']."" ?></td>
                                <td><?php echo "".$row['hari']."" ?></td>
                                <td><?php echo "".$row['tidakhadir']."" ?></td>
                                <td><?php echo "".$row['Total']."" ?></td>
                                <td><button class='error' name='delete' type='submit' onclick="return confirm('Yakin mo hapus?')" formaction="conn/conn.php?nopel=<?php echo "".$row['no_pel']."" ?>&d=<?php echo $_GET['d'] ?> ">X</button></td>
                            </tr>;
                        </form>
                        <?php }
                    ?>
                </table>
                </center>
            </div><br>

            <?php if (isset($_SESSION['admin'])) { ?>
                <form style="grid-column: 1 / 3;" method="POST" action="conn/conn.php">
                    <center>
                        <button class="error" name="reset" type="submit" value="reset" onclick="return confirm('Yakin mo hapus?')">RESET DATA</button>
                    </center>
                </form><br>
            <?php } ?>
        </div>

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

