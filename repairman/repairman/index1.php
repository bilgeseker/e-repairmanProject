<?php
require_once("inc/db.php");
// require_once("inc/func.php");
$menu = explode("/", rtrim(ltrim($_SERVER['REQUEST_URI'], "/"), "/"));
// print($menu[2]);
$kontrol = "0";
if ($_POST) {
    if ($_POST["email"] != "" && $_POST["sifre"] != "") {
        if (isset($_POST["kayit"])) {
            // $ad = $_POST['ad'];
            // $soyad = $_POST['soyad'];
            // $email = $_POST['email'];
            // $sifre = $_POST['sifre'];
            // $adres = $_POST['adres'];
            // $telefon = $_POST['telefon'];
            // $il = $_POST['il'];
            // $is_id = $_POST['is_id'];

            $db_kayit = $db->prepare("insert into tamirci set ad = ':ad', soyad = ':soyad', 
            email = ':email', sifre = ':sifre', telefon = ':telefon', il = ':il', is_id = ':is_id'");
            $db_kayit->bindParam(":ad", $_POST['ad'], PDO::PARAM_STR);
            $db_kayit->bindParam(":soyad", $_POST['soyad'], PDO::PARAM_STR);
            $db_kayit->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
            $db_kayit->bindParam(":sifre", $_POST['sifre'], PDO::PARAM_STR);
            $db_kayit->bindParam(":adres", $_POST['adres'], PDO::PARAM_STR);
            $db_kayit->bindParam(":telefon", $_POST['telefon'], PDO::PARAM_STR);
            $db_kayit->bindParam(":il", $_POST['il'], PDO::PARAM_STR);
            $db_kayit->bindParam(":is_id", $_POST['is_id'], PDO::PARAM_STR);
            $db_kayit->execute();
        //     $query = "
        // insert into kullanici set
        // ad = '$ad',
        // soyad = '$soyad',
        // email = '$email',
        // sifre = '$sifre',
        // adres = '$adres',
        // telefon = '$telefon',
        // il = '$il'";
        
            if ($db_kayit) {
                $kayitEkle = 1;
            } else {
                $kayitEkle = 0;
            }
    
        } elseif(isset($_POST["giris"])) {


            $email = $_POST["email"];
            $sifre = $_POST["sifre"];
            // $sifre = sha1(md5($sifre));

            $sorgu = $db->prepare("SELECT *  FROM tamirci where email = :email and sifre = :sifre limit 1");
            $sorgu->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
            $sorgu->bindParam(":sifre", $sifre, PDO::PARAM_STR);
            $sorgu->execute();

            $kayitSayisi = $sorgu->rowCount();
            if ($kayitSayisi > 0) {
                $kayit = $sorgu->fetch();
                
                $_SESSION["kullanici_id"] = $kayit["id"];
                $_SESSION["kullanici_ad"] = $kayit["ad"];
                $_SESSION["kullanici_soyad"] = $kayit["soyad"];
                $_SESSION["kullanici_mail"] = $kayit["email"];
                $_SESSION["login_time"] = time();
            } else {
                $kontrol = "hatali";
            }
        }
    } else {
        $kontrol = "eksik";
    }

}

if ($menu[2] == "cikis") {
    session_destroy();
    echo '<script>location.replace("/giris");</script>';
}

//if(isset($_SESSION["kullanici_id"]) && time()-$_SESSION["login_time"] < 30*60){
$_SESSION["login_time"] = time();
if($menu[2]!="kayit" && $menu[2]!="giris"){
    require_once("inc/header.php");
}
if (strlen($menu[2]) > 0) {
    $file_name = $menu[2] . '.php';

    if (file_exists($file_name)) {
        require_once($file_name);
    } else {
        require_once("hata.php");
    }
} else {
    require_once("anasayfa.php");
}
if($menu[2]!="kayit" && $menu[2]!="giris"){
require_once("inc/footer.php");
}
/*} else{
session_destroy();
require_once("giris.php");
}*/
?>