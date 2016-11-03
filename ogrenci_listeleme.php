<html>
<head>
  <script src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML"></script>
</head>
<body>
<?php
$ogrenciler = array(
	array('numara' => 123, 'ad' => 'Ahmet', 'soyad'=>"KAYA", 'cinsiyet' => 'E'),
	array('numara' => 124, 'ad' => 'Ali', 'soyad'=>"ŞAHİN", 'cinsiyet'=>'E'),
	array('numara' => 125, 'ad' => 'Akif', 'soyad'=>"MERT", 'cinsiyet'=>'E'),
	array('numara' => 127, 'ad' => 'Ayşe', 'soyad'=>"SUNA", 'cinsiyet'=>'K'),
	array('numara' => 128, 'ad' => 'Fatma', 'soyad'=>"DAMLA", 'cinsiyet'=>'K')
);
echo "Okulumuzda " . count($ogrenciler) . " tane öğrenci vardır.";
$kiz_sayisi = 0;
$erkek_sayisi = 0;

foreach ($ogrenciler as $ogrenci) {
	if($ogrenci['cinsiyet'] == 'E') $erkek_sayisi++; else $kiz_sayisi++;
}
echo "Bu öğrencilerin $kiz_sayisi tanesi kız, $erkek_sayisi tanesi de erkektir.";
echo "<table border='1'>";
echo "<tr><th>Numara</th><th>Ad</th><th>Soyad</th><th>Cinsiyet</th></tr>";
foreach ($ogrenciler as $ogrenci) {
	echo "<tr>";
	foreach($ogrenci as $bilgi) {
		echo "<td>$bilgi</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>

</body>
</html>

