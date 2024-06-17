<?php
if (isset($_POST["isim"], $_POST["mail"], $_POST["soyad"], $_POST["istekler"],$_POST["paket"])) {
    $isim = $_POST["isim"];
    $mail = $_POST["mail"];
    $soyad = $_POST["soyad"];
    $oneri = $_POST["istekler"];
    $p_id = $_POST["paket"];
    $ekle = "INSERT INTO `proje`( `isim`, `S-isim`, `mail`, `oneri`, `p_id`) VALUES ('" . $isim . "','" . $soyad . "','" . $mail . "','" . $oneri . "','".$p_id."')";

    if ($conn->query($ekle) !== True) {
        echo "<script> alert('işlem başarısız lütfen girdilerinizi kontrol ediniz !')</script>";
    }else{
        
    }
}
mysqli_close($conn);
?>