<?php
include 'koneksi.php';

$nis = $_POST["nis"];
$fullname = $_POST["fullname"];
$sekolah = $_POST["sekolah"];
$username = $_POST["username"];
$password = $_POST["password"];
$password_salt = $password . $username;
$password_enk = enkPassword($password_salt);

$sql = "INSERT INTO `user` (`nis`, `fullname`, `sekolah`, `username`, `password`) VALUES ('$nis', '$fullname', '$sekolah', '$username', '$password_enk')";
$data = mysqli_query($conn, $sql);

if($data){
    echo("<script LANGUAGE='JavaScript'>
    window.alert('Selamat, Registrasi Berhasil!');
    window.location.href='login.php';
    </script>");
} else {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Maaf, Registrasi Gagal!');
    window.location.href='index.php';
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