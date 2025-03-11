<h1>AŞAĞIDAKİ KUTUCUĞA TAHMİN ETTİĞİNİZ SAYIYI YAZINIZ VE SAYI VER'E TIKLAYINIZ</h1>
    <form method="POST">
        <p>SAYI GİRİNİZ:<input type="text" name="secilensayi" value=""></p>
      <input type="submit" name="sayiver" value="SAYI VER">
</form>
    <?php
    $secilensayi=$_POST["secilensayi"];
    if(isset($_POST["sayiver"])){
        $sayi=rand(1,10);
        echo "Random Sayınız $sayi";
        if($sayi==$secilensayi){
         echo " "."Seçilen Sayı $secilensayi TEBRİKLER 20 TL KAZANDINIZ";
        }
        else{
            echo " "."Seçilen Sayı $secilensayi TEKRAR DENEYİNİZ";
        }
    }
    ?>