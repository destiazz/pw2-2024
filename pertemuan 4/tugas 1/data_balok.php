<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */

		// code..

    require_once 'class_balok.php';

        $Balok1 = new Balok(10,15,8,);
		$Balok2 = new Balok(20,14,9,);

        echo "<br>Luas Balok 1 = " . $Balok1->getLuas() . "cm";
        echo "<br>Keliling Balok  1 = " . $Balok1->getKeliling() . "cm";
        echo "<br>Volume Balok  1 = " . $Balok1->getvolume() . "cm";
		echo '<br>';
		echo "<br>Luas Balok 2 = " . $Balok2->getLuas() . "cm";
        echo "<br>Keliling Balok  2 = " . $Balok2->getKeliling() . "cm";
        echo "<br>Volume Balok  2 = " . $Balok2->getvolume() . "cm";

?>
