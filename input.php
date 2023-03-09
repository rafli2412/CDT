<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDT PROXIMITI 2021 - INPUT</title>
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
                    <a href="/index.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Home</span>
                    </a>
                </li>

                <?php if (isset($_GET['d'])) { ?>
                <li class="list active">
                    <a href="">
                        <span class="icon"><ion-icon name="create-outline"></ion-icon></ion-icon></span>
                        <span class="title">Input</span>
                    </a>
                </li>
                <?php } ?>

                <li class="list">
                    <a href="data.php">
                        <span class="icon"><ion-icon name="reader-outline"></ion-icon></span>
                        <span class="title">Data</span>
                    </a>
                </li>
                <?php if (isset($_SESSION['admin'])) { ?>
                <li class="list">
                    <a href="index.php#register">
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



        <form action="conn/conn.php" class="content" id="input" method="POST">
            <div style="grid-column: 1 / 3">
                <center>
                    <h1>INPUT PENGURANGAN POIN</h1>
                    <?php if (isset($_GET['success'])) { ?>
                        <div class="success"><?php echo $_GET['success']; ?></div> <br>
                    <?php }
                        if (isset($_GET['error'])) { ?>
                            <div class="error home"><?php echo $_GET['error']; ?></div> <br>
                    <?php }
                        if (isset($_GET['warning'])) { ?>
                            <div class="warning"><?php echo $_GET['warning']; ?></div> <br>
                    <?php }?>
                    <h3>PROXIMITI DAY <?php echo $_GET['d']; ?></h3>
                    <input type="hidden" name="proximiti" value="PROXIMITI DAY <?php echo $_GET['d']; ?>" readonly>
                    <input type="hidden" name="day" value="<?php echo $_GET['d']; ?>" readonly>
                </center>
            </div>
            
            <div style="margin: 10px;">
                <label for="">Nama Kelompok</label><br>
                <select name="kelompok" id="kelompok">
                    <option value="" selected>---Pilih Kelompok---</option>
                    <option value="Bitcoin">Bitcoin</option>
                    <OPtion value="Etherium">Etherium</option>
                    <option value="Doge">Doge</option>
                    <OPtion value="Elrond">Elrond</option>
                    <OPtion value="Theter">Theter</option>
                    <OPtion value="Ocean P">Ocean Protocol</option>
                </select><br><br>
                
            </div>
            
            <div style="margin: 10px;">
                <label for="">Nama Maba</label><br>
                <input list="nama-maba" name="nama-maba" id="maba" placeholder="Pilih Nama Kelompok Dulu" required>
                <datalist id="nama-maba">

                </datalist><br>
            </div>

            <div style="margin: 10px">
                <label for="">PELANGGARAN BERAT</label><br><br>

                <label class="radio"><span style="color: red;">Tidak Hadir</span>
                    <input type="radio" name="pelanggaran" value="Tidak Hadir">
                    <span class="checkmark"></span>
                </label>
                <label class="radio"><span style="color: red;">Merokok</span>
                    <input type="radio" name="pelanggaran" value="Merokok">
                    <span class="checkmark"></span>
                </label>
            </div><br>

            <div style='margin: 10px;'>
            <label for="" >Kehadiran</label><br><br>

            <label class="radio"><span>Terlambat 15 menit</span>
                <input type="radio" name="kehadiran" value="5">
                <span class="checkmark"></span>
            </label>
            <label class="radio"><span>Terlambat 30 menit</span>
                <input type="radio" name="kehadiran" value="10">
                <span class="checkmark"></span>
            </label>
            <label class="radio"><span>Terlambat 45 menit</span>
                <input type="radio" name="kehadiran" value="15">
                <span class="checkmark"></span>
            </label>
            <label class="radio"><span>Terlambat 60 menit</span>
                <input type="radio" name="kehadiran" value="20">
                <span class="checkmark"></span>
            </label>
            </div>

            <div style="margin: 10px">
                <label for="">Perilaku & Sikap</label><br><br>

                <label class="checkbox"><span>Tidak on-cam</span>
                    <input type="checkbox" name="perilaku1" value="25">
                    <span class="checkmark"></span>
                </label>
                <label class="checkbox"><span>Berperilaku tidak sopan</span>
                    <input type="checkbox" name="perilaku2" value="50">
                    <span class="checkmark"></span>
                </label>

                <label for="">Atribut</label><br><br>

                <label class="checkbox"><span>Tidak menggunakan VBG</span>
                    <input type="checkbox" name="atribut1" value="25">
                    <span class="checkmark"></span>
                </label>
                <label class="checkbox"><span>Tidak menggunakan atribut sesuai ketentuan</span>
                    <input type="checkbox" name="atribut2" value="25">
                    <span class="checkmark"></span>
                </label>
            </div>

            <div style="grid-column: 1/3">
                <center>
                    <button type="submit" value="submit" onclick="return confirm('Periksa Kembali Pelanggaran')">Submit</button>
                </center>
            </div><br>
        </form><br>



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

