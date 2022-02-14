<?php

	include "TeamSepakBola.php";

	//instansiasi
	$Football = new TeamSepakBola();

	//mengisi semua atribut 
	$Football->setNamaTeam("Persib");
	$Football->setNegaraAsal("Indonesia");
	$Football->setTahun("1933");
	$Football->setNamaPemain("Febri Hariyadi, Ezra Walian, Marc Klok, dll");
	$Football->setNamaKiper("Teja Paku Alam");

	//inputan kedua
	$Football2 = new TeamSepakBola("Real Madrid", "Spanyol", "1902", "Andriy Lunin, David Alaba, Federico Valverde, dll", "Thibaut Coutois");

	//inputan ketiga
	$Football3 = new TeamSepakBola("A.C. Milan", "Italia", "1899", "Matteo Gabbia, Daniel Maldini,Alexis Saelemaekers, dll", "Mike Maignan");
	
	echo "========================================================". "<br/>";
	echo "               DAFTAR TEAM SEPAK BOLA                   ". "<br/>";

	//menampilkan output team sepak bola pertama
	echo "<br/>";
	echo "TEAM 1". "<br/>";
	echo "Nama Team		: ". $Football->getNamaTeam()."<br/>";
	echo "Negara Asal 	: ". $Football->getNegaraAsal()."<br/>";
	echo "Tahun Berdiri : ". $Football->getTahun()."<br/>";
	echo "Nama Pemain	: ". $Football->getNamaPemain()."<br/>";
	echo "Nama Kiper	: ". $Football->getNamaKiper()."<br/>";

	//menampilkan output team sepak bola kedua
	echo "<br/>";
	echo "TEAM 2". "<br/>";
	echo "Nama Team		: ". $Football2->getNamaTeam()."<br/>";
	echo "Negara Asal 	: ". $Football2->getNegaraAsal()."<br/>";
	echo "Tahun Berdiri : ". $Football2->getTahun()."<br/>";
	echo "Nama Pemain	: ". $Football2->getNamaPemain()."<br/>";
	echo "Nama Kiper	: ". $Football2->getNamaKiper()."<br/>";

	//menampilkan output team sepak bola ketiga
	echo "<br/>";
	echo "TEAM 3". "<br/>";
	echo "Nama Team		: ". $Football3->getNamaTeam()."<br/>";
	echo "Negara Asal 	: ". $Football3->getNegaraAsal()."<br/>";
	echo "Tahun Berdiri : ". $Football3->getTahun()."<br/>";
	echo "Nama Pemain	: ". $Football3->getNamaPemain()."<br/>";
	echo "Nama Kiper	: ". $Football3->getNamaKiper()."<br/>";
	echo "========================================================". "<br/>";

?>
