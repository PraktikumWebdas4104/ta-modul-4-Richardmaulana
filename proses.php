<?php
error_reporting(0);
	$uss= $_POST['username'];
	$pss= $_POST['password'];
	$file = $_FILES["file"]["name"];
	$tmp_name = $_FILES["file"]["tmp_name"];
 	$user = array(
		"user" => 'rich',
		"pass" => '1234');

	if (isset($_POST['submit'])) {
		if ($uss==$user['user']&& $pss==$user['pass']) {
			echo "Hai <b>".$uss."! </b>Anda telah Sukses Log in<br><br>";
			echo "<center><form method='post'>
					<h3>Pilih Genre Film yang disukai :</h3>
					<table>
						<tr>
							<td><input type='checkbox' name='genre[]' value='Horror'>Horror<br></td>
							<td><input type='checkbox' name='genre[]' value='Action'>Action<br></td>
						</tr>
						<tr>
							<td><input type='checkbox' name='genre[]' value='Anime'>Anime<br></td>
							<td><input type='checkbox' name='genre[]' value='Thriller'>Thriller<br></td>
						</tr>
							<td><input type='checkbox' name='genre[]' value='Animasi'>Animasi</td>
							<td></td>
						</tr>
					</table><br>
					
					<h3>Tempat wisata tujuan travelling :</h3>
					<table>
						<tr>
							<td><input type='checkbox' name='wisata[]' value='Bali'>Bali</td>
							<td><input type='checkbox' name='wisata[]' value='Raja Ampat'>Raja Ampat</td>
						</tr>
						<tr>
							<td><input type='checkbox' name='wisata[]' value='Pulau Derawan'>Pulai Derawan</td>
							<td><input type='checkbox' name='wisata[]' value='Bangka Belitung'>Bangka Belitung<br><td>
						</tr>
						<tr>
							<td><input type='checkbox' name='wisata[]' value='Labuan Bajo'>Labuan Bajo<br><br><td>
							<td><td>
						</tr>
					</table>

						<input type='submit' name='submit2'></center></td>
				</form>";
		}
		else{
			echo "Username atau Password yang anda masukkan salah";
		}
	}
?>

<?php
	
	if(isset($_POST['submit2'])){
		$dataFilm = $_POST['genre'];
		$dataWisata = $_POST['wisata'];

		echo "<b>Genre Film yang disukai </b>: <br>";
		foreach ($dataFilm as $nilai) {
			echo "$nilai, ";	
		}

		echo "<br><br><b>Tempat Wisata Tujuan Travelling </b>: <br>";
		foreach ($dataWisata as $nilai) {
			echo "$nilai, ";	
		}
	}
?>
