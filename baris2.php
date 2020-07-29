<?php
	echo "<br/><br/>";
	?>
<div style="margin-left: 50px;">
	<form method="POST" action="">
		<input type="text" name="angka">
		<input type="submit" name="submit">
	</form>
	<?php
	if (isset($_POST['angka'])) {
		$angka = $_POST['angka'];
		$atas = 1;
		$set = 0;
		for ($i=0; $i < $angka; $i++) {
			$keN = $atas + $set;
			$atas = $keN;
			echo $keN.' ';
			$set = 2;
		}
	}
?>
</div>