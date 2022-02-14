class TeamSepakBola{

	private:
		//atribut dalam class team sepak bola
		string nama_team;
		string negara_asal;
		string tahun_berdiri;
		string nama_pemain;
		//atribut  tambahan
		string nama_kiper;

	public:
		//constructor
		TeamSepakBola(){
		}

		//prosedur dan fungsi untuk get & set dari atribut Nama Team
		void setNamaTeam(string nama_team){
			this->nama_team = nama_team;
		}
		
		string getNamaTeam(){
			return this->nama_team;
		}

		//prosedur dan fungsi untuk get & set dari atribut Negara Asal
		void setNegaraAsal(string negara_asal){
			this->negara_asal = negara_asal;
		}
		
		string getNegaraAsal(){
			return this->negara_asal;
		}

		//prosedur dan fungsi untuk get & set dari atribut Tahun Berdiri
		void setTahun(string tahun_berdiri){
			this->tahun_berdiri = tahun_berdiri;
		}
		
		string getTahun(){
			return this->tahun_berdiri;
		}

		//prosedur dan fungsi untuk get & set dari atribut Nama Pemain
		void setNamaPemain(string nama_pemain){
			this->nama_pemain = nama_pemain;
		}
		
		string getNamaPemain(){
			return this->nama_pemain;
		}

		//prosedur dan fungsi untuk get & set dari atribut Nama Kiper
		void setNamaKiper(string nama_kiper){
			this->nama_kiper= nama_kiper;
		}
		
		string getNamaKiper(){
			return this->nama_kiper;
		}
	//destructor
	~TeamSepakBola(){
	}

};
