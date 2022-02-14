<?php

Class DaftarMhs{
	private $nim ="";
	private $nama = "";
	private $prodi = "";
	private $sem = 0;

	public function __construct($nim = "", $nama = "", $prodi = "", $sem = 0){
		$this->nim = $nim;
		$this->nama = $nama;
		$this->prodi = $prodi;
		$this->sem = $sem;
	}

	//set and get for nim
	public function setNim($nim){
		$this->nim = $nim;
	}

	public function getNim(){
		return $this->nim;
	}

	//set and get for nama
	public function setNama($nama){
		$this->nama = $nama;
	}

	public function getNama(){
		return $this->nama;
	}

	//set and get for prodi
	public function setProdi($prodi){
		$this->prodi = $prodi;
	}

	public function getProdi(){
		return $this->prodi;
	}

	//set and get for Semester
	public function setSemester($sem){
		$this->sem = $sem;
	}

	public function getSemester(){
		return $this->sem;
	}

}

?>