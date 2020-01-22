<?php 

class ideal{

	function hitung($bmi, $jeniskelamin){
		if ($jeniskelamin=="Laki-laki") {
			if ($bmi<17) {
				echo $bmi." || Under Weight/Kurus";
			} elseif ($bmi>=17 && $bmi<=25) {
				echo $bmi." || Normal Weight/Normal";
			} elseif ($bmi>25 && $bmi<=27) {
				echo $bmi." || Over Weight/Kegemukan";
			} elseif ($bmi>27) {
				echo $bmi." || Obesitas";
			}
		} elseif ($jeniskelamin=="Perempuan") {
			if ($bmi<18) {
				echo $bmi." || Under Weight/Kurus";
			} elseif ($bmi>=18 && $bmi<=25) {
				echo $bmi." || Normal Weight/Normal";
			} elseif ($bmi>25 && $bmi<=27) {
				echo $bmi." || Over Weight/Kegemukan";
			} elseif ($bmi>27) {
				echo $bmi." || Obesitas";
			}
		}
	}

}
$hitungBMI = new ideal(); 
if (isset($_POST['submit'])) {
	$nama=$_POST['nama'];
	$bb= $_POST['bb'];
	$tb = $_POST['tb'];
	$jeniskelamin = $_POST['jeniskelamin'];
	$bmi = $bb/($tb*$tb/10000);
	$hitungBMI->hitung($bmi, $jeniskelamin);
}
 ?>