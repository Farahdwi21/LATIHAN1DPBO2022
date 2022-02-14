<?php

Class TeamSepakBola{

	//atribut private dalam class sepak bola
	private $nama_team = "";
	private $negara_asal = "";
	private $tahun_berdiri = "";
	private $nama_pemain = "";
	//atribut tambahan
	private $nama_kiper = "";

	//constructor
	public function __construct($nama_team = "", $negara_asal = "", $tahun_berdiri = "", $nama_pemain = "", $nama_kiper = ""){
		$this->nama_team = $nama_team;
		$this->negara_asal = $negara_asal;
		$this->tahun_berdiri = $tahun_berdiri;
		$this->nama_pemain = $nama_pemain;
		$this->nama_kiper = $nama_kiper;
	}

	//set and get for atribut nama team
	public function setNamaTeam($nama_team){
		$this->nama_team = $nama_team;
	}

	public function getNamaTeam(){
		return $this->nama_team;
	}

	//set and get for atribut negara asal
	public function setNegaraAsal($negara_asal){
		$this->negara_asal = $negara_asal;
	}

	public function getNegaraAsal(){
		return $this->negara_asal;
	}

	//set and get for atribut Tahun Berdiri
	public function setTahun($tahun_berdiri){
		$this->tahun_berdiri = $tahun_berdiri;
	}

	public function getTahun(){
		return $this->tahun_berdiri;
	}

	//set and get for atribut Nama Pemain
	public function setNamaPemain($nama_pemain){
		$this->nama_pemain = $nama_pemain;
	}

	public function getNamaPemain(){
		return $this->nama_pemain;
	}

	//set and get for atribut Nama Kiper
	public function setNamaKiper($nama_kiper){
		$this->nama_kiper= $nama_kiper;
	}

	public function getNamaKiper(){
		return $this->nama_kiper;
	}

	function __destruct(){
	}

}

?>