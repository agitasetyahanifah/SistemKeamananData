<?php
include 'koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"];
$password_salt = $password . $username;
$password_enk = enkPassword($password_salt);

$data = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' and password = '$password_enk'");

if ($data->num_rows > 0) {
    $row = mysqli_fetch_assoc($data);
    session_start();
    $_SESSION['id'] = $row['id'];
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Selamat, Login Berhasil!');
    window.location.href='dashboard.php';
    </script>");
} else {
    echo ("<script LANGUAGE='JavaScript'>
        window.alert('Maaf, Login Gagal! ');
        window.location.href ='login.php';
    </script>");
}

function enkPassword($pass){
    include "lib/lib.php";
    $kunci = "pastibisa";
    $plain = str_replace(" ", "", $pass);
    $panjang_plain = strlen($plain);
    $panjang_kunci = strlen($kunci);
    $index_x = 0;
    $index_y = 0;
    $hasil_ciper = array();
    $hasil_akhir = "";
    while ($index_x < $panjang_plain) { 
        $x=substr($plain, $index_x, 1); 
        $y=substr($kunci, $index_y, 1);   
        $hasil_ciper[$index_x]=$tabel_vigenere[huruf_ke_angka($x)][huruf_ke_angka($y)]; 
        $index_x++; 
        $index_y++; 
        if($index_y==$panjang_kunci) { 
            $index_y=0; 
        } 
    } 
    $i=0; 
    while ($i < $index_x) { 
        $hasil_akhir .=$hasil_ciper[$i]; 
        $i++; 
    }
    return $hasil_akhir;
}
?>