<?php
session_start();
include "server.php";

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);

    $sql = "SELECT * FROM user WHERE username='$uname' AND password='$pass'";

    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['username'] === $uname && $row['password'] === $pass) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['ID'] = $row['ID'];
            $_SESSION['admin'] = $row['admin'];
            header("Location: ../index.php");
            exit();
        } else {
            header("Location: ../index.php?error=Passwordnya salah kali bang.");
            exit();
        }
    } else {
        header("Location: ../index.php?error=Passwordnya salah kali bang.");
        exit();
    }
}

if (isset($_POST['kelompok']) && isset($_POST['nama-maba'])) {
    $nama = validate($_POST['nama-maba']);
    $kelompok = validate($_POST['kelompok']);
    $hari = validate($_POST['proximiti']);
    $d = $_POST['day'];
    
    if (isset($_POST['pelanggaran'])) {
        $pelanggaran = validate($_POST['pelanggaran']);

        $sql = "INSERT INTO pelanggaran(nama, kelompok, hari, tidakhadir) VALUE ('$nama', '$kelompok', '$hari', '$pelanggaran')";
    } else {
        // $total = $kehadiran + $perilaku1 + $perilaku2 + $atribut1 + $atribut2;

        // value to string
        if (isset($_POST['kehadiran'])) {
            $kehadiran = validate($_POST['kehadiran']);
            $total += $kehadiran;
            if ($kehadiran == 5) {
                $kehadiran = "Terlambat 15 Menit";
            } else if ($kehadiran == 10) {
                $kehadiran = "Terlambat 30 Menit";
            } else if ($kehadiran == 15) {
                $kehadiran = "Terlambat 45 Menit";
            } else if ($kehadiran == 20) {
                $kehadiran = "Terlambat 60 Menit";
            }
        }

        if (isset($_POST['perilaku1'])) {
            $perilaku1 = validate($_POST['perilaku1']);
            $total += $perilaku1;
            $perilaku1 = "Tidak on-cam";
        }

        if (isset($_POST['perilaku2'])) {
            $perilaku2 = validate($_POST['perilaku2']);
            $total += $perilaku2;
            $perilaku2 = "Berperilaku tidak sopan";
        }

        if (isset($_POST['atribut1'])) {
            $atribut1 = validate($_POST['atribut1']);
            $total += $atribut1;
            $atribut1 = "Tidak Menggunakan VBG";
        }

        if (isset($_POST['atribut2'])) {
            $atribut2 = validate($_POST['atribut2']);
            $total += $atribut2;
            $atribut2 = "Tidak Menggunakan Atribut Sesuai Ketentuan";
        }

        $sql = "INSERT INTO pelanggaran(nama, kelompok, hari, kehadiran, perilaku1, perilaku2, atribut1, atribut2, Total) VALUE ('$nama', '$kelompok', '$hari', '$kehadiran', '$perilaku1', '$perilaku2', '$atribut1', '$atribut2', $total)";
    }


    if ($conn->query($sql) === TRUE) {
        header("Location: ../input.php?d=$d&success=Data dah masuk.");
    } else {
        header("Location: ../input.php?d=$d&error=Data gak masuk.");
    }
}

if (isset($_POST['new-username']) && isset($_POST['password'])) {
    $uname = $_POST['new-username'];
    $pass = $_POST['password'];
    $c_pass = $_POST['c-password'];
    
    $sql = "SELECT * FROM user
    WHERE username = '$uname' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        header("Location: ../index.php?error=Akun sudah terdaftar");
        exit();
    }

    if($pass == $c_pass) {
        if ($_POST['admin'] == "Yes") {
            $admin = $_POST['admin'];
            $sql = "INSERT INTO user(admin, username, password) VALUE ('$admin', '$uname', '$pass')";
        } else {
            $sql = "INSERT INTO user(username, password) VALUE ('$uname', '$pass')";
        }
        
        if ($conn->query($sql) === TRUE) {
            header("Location: ../index.php?success=Akun dah terdaftar.");
        } else {
            header("Location: ../index.php?error=Akun gk terdaftar");
        }
    } else {
        header("Location: ../index.php?error=Akun gk terdaftar");
        exit();
    }

}

// Delete

if ($_GET['nopel']) {
    $day = $_GET['d'];
    $no = $_GET['nopel'];

    $sql = "DELETE FROM pelanggaran WHERE no_pel='$no'";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../data-day.php?d=$day&error=Data dh didelete");
        exit();
    } else {
        header("Location: ../data-day.php?d=$day&warning=Data blom didelete");
        exit();
    }
}

if (isset($_POST['reset'])) {
    $sql = "TRUNCATE matkul";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php?error=Semua data dh didelete");
        exit();
    } else {
        header("Location: ../index.php?warning=Semua data blom didelete");
        exit();
    }
}


if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();

    header("Location: ../index.php");
}