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
        <!-- <div class="navigation">
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
        </div> -->
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

                <!-- <form style="margin: 52px;" method="POST" action="conn/conn.php">
                    <input type="text" placeholder="Mo cari apa?" name="search">
                    <button type="submit"><ion-icon name="search"></ion-icon></button>
                </form> -->

                <div style="margin: 40px">
                <?php
                $day = "PROXIMITI DAY ".$_GET['d'];
                ?>
                    <div>
                        <h3>KELOMPOK BITCOIN</h3>
                        <?php
                            $sql = "SELECT * FROM pelanggaran WHERE kelompok='Bitcoin' AND hari='$day'";
                            $Data = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($Data)) { ?>
                                <?php echo "".$row['nama']."" ?><br><br>
                                    <div style="margin-left: 20px;
                                    font-size: 16px;">
                                        <?php if (isset($row['tidakhadir'])) {
                                            echo "".$row['tidakhadir']."<br>";
                                        } ?>
                                        <?php if (isset($row['kehadiran']) && !empty($row['kehadiran'])) {
                                            echo "".$row['kehadiran']."<br>";
                                        }?>
                                        <?php if (isset($row['perilaku1']) && !empty($row['perilaku1'])) {
                                            echo "".$row['perilaku1']."<br>"; 
                                        } ?>
                                        <?php if (isset($row['perilaku2']) && !empty($row['perilaku2'])) {
                                            echo "".$row['perilaku2']."<br>"; 
                                        } ?>
                                        <?php if (isset($row['atribut1']) && !empty($row['atribut1'])) {
                                            echo "".$row['atribut1']."<br>"; 
                                        } ?>
                                        <?php if (isset($row['atribut2']) && !empty($row['atribut2'])) {
                                            echo "".$row['atribut2']."<br>"; 
                                        } ?><br>
                                        <?php if (isset($row['tidakhadir'])) {
                                            echo "<span style='color:red;'>DIANGGAP TIDAK HADIR</span><br>";
                                        } else {
                                            
                                            echo "Total: ".$row['Total']."";
                                        } ?> <br><br>
                                    </div>
                            <?php }
                        ?>
                    </div>

                    <div>
                        <h3>KELOMPOK ETHERIUM</h3>
                        <?php
                            $sql = "SELECT * FROM pelanggaran WHERE kelompok='Etherium' AND hari='$day'";
                            $Data = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($Data)) { ?>
                                <?php echo "".$row['nama']."" ?><br><br>
                                    <div style="margin-left: 20px;
                                    font-size: 16px;">
                                        <?php if (isset($row['tidakhadir'])) {
                                            echo "".$row['tidakhadir']."<br>";
                                        } ?>
                                        <?php if (isset($row['kehadiran']) && !empty($row['kehadiran'])) {
                                            echo "".$row['kehadiran']."<br>";
                                        }?>
                                        <?php if (isset($row['perilaku1']) && !empty($row['perilaku1'])) {
                                            echo "".$row['perilaku1']."<br>"; 
                                        } ?>
                                        <?php if (isset($row['perilaku2']) && !empty($row['perilaku2'])) {
                                            echo "".$row['perilaku2']."<br>"; 
                                        } ?>
                                        <?php if (isset($row['atribut1']) && !empty($row['atribut1'])) {
                                            echo "".$row['atribut1']."<br>"; 
                                        } ?>
                                        <?php if (isset($row['atribut2']) && !empty($row['atribut2'])) {
                                            echo "".$row['atribut2']."<br>"; 
                                        } ?><br>
                                        <?php if (isset($row['tidakhadir'])) {
                                            echo "<span style='color:red;'>DIANGGAP TIDAK HADIR</span><br>";
                                        } else {
                                            
                                            echo "Total: ".$row['Total']."";
                                        } ?> <br><br>
                                    </div>
                            <?php }
                        ?>
                    </div>
                    <div>
                        <h3>KELOMPOK DOGE</h3>
                        <?php
                            $sql = "SELECT * FROM pelanggaran WHERE kelompok='Doge' AND hari='$day'";
                            $Data = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($Data)) { ?>
                                <?php echo "".$row['nama']."" ?><br><br>
                                    <div style="margin-left: 20px;
                                    font-size: 16px;">
                                        <?php if (isset($row['tidakhadir'])) {
                                            echo "".$row['tidakhadir']."<br>";
                                        } ?>
                                        <?php if (isset($row['kehadiran']) && !empty($row['kehadiran'])) {
                                            echo "".$row['kehadiran']."<br>";
                                        }?>
                                        <?php if (isset($row['perilaku1']) && !empty($row['perilaku1'])) {
                                            echo "".$row['perilaku1']."<br>"; 
                                        } ?>
                                        <?php if (isset($row['perilaku2']) && !empty($row['perilaku2'])) {
                                            echo "".$row['perilaku2']."<br>"; 
                                        } ?>
                                        <?php if (isset($row['atribut1']) && !empty($row['atribut1'])) {
                                            echo "".$row['atribut1']."<br>"; 
                                        } ?>
                                        <?php if (isset($row['atribut2']) && !empty($row['atribut2'])) {
                                            echo "".$row['atribut2']."<br>"; 
                                        } ?><br>
                                        <?php if (isset($row['tidakhadir'])) {
                                            echo "<span style='color:red;'>DIANGGAP TIDAK HADIR</span><br>";
                                        } else {
                                            
                                            echo "Total: ".$row['Total']."";
                                        } ?> <br><br>
                                    </div>
                            <?php }
                        ?>
                    </div>
                    <div>
                        <h3>KELOMPOK ELROND</h3>
                        <?php
                            $sql = "SELECT * FROM pelanggaran WHERE kelompok='Elrond' AND hari='$day'";
                            $Data = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($Data)) { ?>
                                <?php echo "".$row['nama']."" ?><br><br>
                                    <div style="margin-left: 20px;
                                    font-size: 16px;">
                                        <?php if (isset($row['tidakhadir'])) {
                                            echo "".$row['tidakhadir']."<br>";
                                        } ?>
                                        <?php if (isset($row['kehadiran']) && !empty($row['kehadiran'])) {
                                            echo "".$row['kehadiran']."<br>";
                                        }?>
                                        <?php if (isset($row['perilaku1']) && !empty($row['perilaku1'])) {
                                            echo "".$row['perilaku1']."<br>"; 
                                        } ?>
                                        <?php if (isset($row['perilaku2']) && !empty($row['perilaku2'])) {
                                            echo "".$row['perilaku2']."<br>"; 
                                        } ?>
                                        <?php if (isset($row['atribut1']) && !empty($row['atribut1'])) {
                                            echo "".$row['atribut1']."<br>"; 
                                        } ?>
                                        <?php if (isset($row['atribut2']) && !empty($row['atribut2'])) {
                                            echo "".$row['atribut2']."<br>"; 
                                        } ?><br>
                                        <?php if (isset($row['tidakhadir'])) {
                                            echo "<span style='color:red;'>DIANGGAP TIDAK HADIR</span><br>";
                                        } else {
                                            
                                            echo "Total: ".$row['Total']."";
                                        } ?> <br><br>
                                    </div>
                            <?php }
                        ?>
                    </div>
                    <div>
                        <h3>KELOMPOK THETER</h3>
                        <?php
                            $sql = "SELECT * FROM pelanggaran WHERE kelompok='Theter' AND hari='$day'";
                            $Data = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($Data)) { ?>
                                <?php echo "".$row['nama']."" ?><br><br>
                                    <div style="margin-left: 20px;
                                    font-size: 16px;">
                                        <?php if (isset($row['tidakhadir'])) {
                                            echo "".$row['tidakhadir']."<br>";
                                        } ?>
                                        <?php if (isset($row['kehadiran']) && !empty($row['kehadiran'])) {
                                            echo "".$row['kehadiran']."<br>";
                                        }?>
                                        <?php if (isset($row['perilaku1']) && !empty($row['perilaku1'])) {
                                            echo "".$row['perilaku1']."<br>"; 
                                        } ?>
                                        <?php if (isset($row['perilaku2']) && !empty($row['perilaku2'])) {
                                            echo "".$row['perilaku2']."<br>"; 
                                        } ?>
                                        <?php if (isset($row['atribut1']) && !empty($row['atribut1'])) {
                                            echo "".$row['atribut1']."<br>"; 
                                        } ?>
                                        <?php if (isset($row['atribut2']) && !empty($row['atribut2'])) {
                                            echo "".$row['atribut2']."<br>"; 
                                        } ?><br>
                                        <?php if (isset($row['tidakhadir'])) {
                                            echo "<span style='color:red;'>DIANGGAP TIDAK HADIR</span><br>";
                                        } else {
                                            
                                            echo "Total: ".$row['Total']."";
                                        } ?> <br><br>
                                    </div>
                            <?php }
                        ?>
                    </div>
                    <div>
                        <h3>KELOMPOK OCEAN PROTOCOL</h3>
                        <?php
                            $sql = "SELECT * FROM pelanggaran WHERE kelompok='Ocean P' AND hari='$day'";
                            $Data = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($Data)) { ?>
                                <?php echo "".$row['nama']."" ?><br><br>
                                    <div style="margin-left: 20px;
                                    font-size: 16px;">
                                        <?php if (isset($row['tidakhadir'])) {
                                            echo "".$row['tidakhadir']."<br>";
                                        } ?>
                                        <?php if (isset($row['kehadiran']) && !empty($row['kehadiran'])) {
                                            echo "".$row['kehadiran']."<br>";
                                        }?>
                                        <?php if (isset($row['perilaku1']) && !empty($row['perilaku1'])) {
                                            echo "".$row['perilaku1']."<br>"; 
                                        } ?>
                                        <?php if (isset($row['perilaku2']) && !empty($row['perilaku2'])) {
                                            echo "".$row['perilaku2']."<br>"; 
                                        } ?>
                                        <?php if (isset($row['atribut1']) && !empty($row['atribut1'])) {
                                            echo "".$row['atribut1']."<br>"; 
                                        } ?>
                                        <?php if (isset($row['atribut2']) && !empty($row['atribut2'])) {
                                            echo "".$row['atribut2']."<br>"; 
                                        } ?><br>
                                        <?php if (isset($row['tidakhadir'])) {
                                            echo "<span style='color:red;'>DIANGGAP TIDAK HADIR</span><br>";
                                        } else {
                                            
                                            echo "Total: ".$row['Total']."";
                                        } ?> <br><br>
                                    </div>
                            <?php }
                        ?>
                    </div>
                </div>
                <!-- <center>
                <table>
                    <tr>
                        <th>Nama</th>
                        <th>Kelompok</th>
                        <th>Proxi Day</th>
                        <th>Pelanggaran Brt</th>
                        <th>Total</th>
                        <th>Del</th>
                    </tr>

                </table>
                </center> -->
            </div><br>

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

