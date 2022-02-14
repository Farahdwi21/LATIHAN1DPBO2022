<?php

	include "DaftarMhs.php";

	$Mahasiswa = new DaftarMhs();
	$Mahasiswa->setNim("2001286");
	$Mahasiswa->setNama("Farah Dwi Ameliani");
	$Mahasiswa->setProdi("Imu Komputer");
	$Mahasiswa->setSemester(4);
	
	echo "======================================". "<br/>";
	echo "DAFTAR MAHASISWA". "<br/>";
	echo "<br/>";
	echo "NIM				: ". $Mahasiswa->getNim()."<br/>";
	echo "Nama Mahasiswa 	: ". $Mahasiswa->getNama()."<br/>";
	echo "Program Studi 	: ". $Mahasiswa->getProdi()."<br/>";
	echo "Semester 			: ". $Mahasiswa->getSemester()."<br/>";
	echo "======================================". "<br/>";

?>
