*/Cok boyutlu dizilerde siralama yapan basit bir PHP kodu/*
<?php
$notlar=array(
	"elif"=>11, "ayse"=>24.5, "tolga"=>52, "ece"=>78
	);

echo "<br><b>Siralanmamis hali</b></br>";
// Tum diziyi yazdiriyoruz.
print_r($notlar);
echo "<hr>";

arsort($notlar);
foreach($notlar as $isim => $aldiginot){
echo "<br>".$isim. "'in aldigi not " .$aldiginot. "<br>";}
?>
