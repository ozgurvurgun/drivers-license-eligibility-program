<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ehliyet Yaş Hesaplama - Özgür Vurgun</title>
</head>

<body>
    <center>
        <h1 style="color: Tomato;">Ehliyet Yaşı Hesaplama</h1> <br>
        <h3 style="color: powderblue;">( Ay hesabını kendiniz yapıverirsiniz. )</h3> <br>
        <form method="POST">
            <label for="active">
                <h2 style="color: orange;">doğum yılınızı girin</h2>
            </label><br>
            <input style="width:150px ;height:20px;" type="text" id="active" name="dogumyili"> <br><br>
            <input style="padding:15px;font-size:20px" type="submit" value="Hesapla">
        </form>
    </center>

    <?php

    $yil = 2022;
    $resit = 18;

    $yas = $yil - (int)$_POST["dogumyili"];
    $ehliyet = $resit - $yas;
    if ($yas >= 18 and $yas != 2022 and $yas < 2022) {
        echo "<center><h1>Doğum yılın : " . (int)$_POST["dogumyili"]  . "</h1></center>";
        echo "<center><h1>Yaşın : " . $yas . "</h1></center>";
        echo "<center><h1>Ehliyet alabilirsin genç</h1></center>";
    }
    if ($yas < 18 and $yas > 0) {
        echo "<center><h1>Doğum yılın : " . (int)$_POST["dogumyili"]  . "</h1></center>";
        echo "<center><h1>Yaşın : " . $yas . "</h1></center>";
        echo "<center><h1>Az büyüde gel <br>" . $ehliyet . " yıl sonra falan</h1></center>";
    }
    if ($yas > 2022) {
        echo "<center><h1>Doğum yılın : " . (int)$_POST["dogumyili"]  . "</h1></center>";
        echo "<center><h1>Yaşın : " . $yas . "</h1></center>";
        echo "<center><h1>Milattan öncesine bakmıyoruz kanka</h1></center>";
    }
    if ($yas <= 0 and $yas < 0) {
        echo "<center><h1>Doğum yılın : " . (int)$_POST["dogumyili"]  . "</h1></center>";
        echo "<center><h1>Hayıdır gelecekten mi geldin birader</h1></center>";
    }
    if ($yas == 0) {
        echo "<center><h1>Gülüm sen teknik olarak yoksun, varsan bile daha ilk yaşını almamışsın</h1></center>";
    }


    if ((int)$_POST["dogumyili"] == "") {
        echo "<script>alert('1)  DOĞUM YILINI GİR YAHU, YOKSA NASIL HESAPLAYAYIM ! .  2)  HA BİRDE GİRİŞ HÜCRESİNE 0 GİRDİYSENDE BU MESAJI ALMIŞ OLABİLİRSİN :* .  3)  AYRICA NEDEN BİLMİYORUM BÖYLE BİR SORGU YAPMADIM AMA SAYISAL GİRDİ YAPMADIYSANDA BU HATAYI ALIYOR OLABİLİRSİN !')</script>";
    
    }
    ?>
    <br><br>
<center><footer><h3>Powered by <a target="_blank" style="text-decoration: none;" href="https://www.ozgurvrgn.xyz/"><b>Özgür V. 😁</b></a></h3></footer></center>
</body>

</html>