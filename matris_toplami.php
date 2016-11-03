<html>
<head>
  <script src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML"></script>
</head>
<body>
<?php
$A_matrisi = array(
	array(2,5,3),
	array(3,5,7),
	array(1,2,5)
);

$B_matrisi = array(
	array(-2,4,3),
	array(13,2,1),
	array(1,-2,5)
);

$toplam_matrisi = array();

for($i=0; $i<3; $i++) {
	$satir = array();
	for($j=0; $j<3; $j++) {
		$satir[] = $A_matrisi[$i][$j] + $B_matrisi[$i][$j];
	}
	$toplam_matrisi[] = $satir;
}

$A_matrisi_ciktisi = array();
$B_matrisi_ciktisi = array();
$toplam_matrisi_ciktisi = array();

foreach ($A_matrisi as $satir) {
	$A_matrisi_ciktisi[] = implode('&', $satir);
}
foreach ($B_matrisi as $satir) {
	$B_matrisi_ciktisi[] = implode('&', $satir);
}

foreach ($toplam_matrisi as $satir) {
	$toplam_matrisi_ciktisi[] = implode('&', $satir);
}


$B_matrisi_ciktisi = implode("\\\\", $B_matrisi_ciktisi);
$B_matrisi_ciktisi = "\begin{bmatrix} " . $B_matrisi_ciktisi . "\\end{bmatrix}";

$A_matrisi_ciktisi = implode("\\\\", $A_matrisi_ciktisi);
$A_matrisi_ciktisi = "\begin{bmatrix} " . $A_matrisi_ciktisi . "\\end{bmatrix}";

$toplam_matrisi_ciktisi = implode("\\\\", $toplam_matrisi_ciktisi);
$toplam_matrisi_ciktisi = "\begin{bmatrix} " . $toplam_matrisi_ciktisi . "\\end{bmatrix}";

echo "\[" . $A_matrisi_ciktisi . " + " . $B_matrisi_ciktisi . " = " . $toplam_matrisi_ciktisi . "\]";


?>

</body>
</html>
