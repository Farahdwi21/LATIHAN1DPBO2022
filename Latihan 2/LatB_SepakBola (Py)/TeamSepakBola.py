class TeamSepakBola():

	#atribut
	__nama_team = "";
	__negara_asal = "";
	__tahun_berdiri = "";
	__nama_pemain = "";
	#atribut  tambahan
	__nama_kiper = "";


	#constructor
	def __init__(self, nama_team = "", negara_asal = "", tahun_berdiri = "", 
				 nama_pemain = "", nama_kiper = ""):
		self.__nama_team = nama_team
		self.__negara_asal = negara_asal
		self.__tahun_berdiri = tahun_berdiri
		self.__nama_pemain = nama_pemain
		self.__nama_kiper = nama_kiper
		

	#get dan set untuk semua atribut
	def setNamaTeam(self, nama_team):
		self.__nama_team = nama_team

	def getNamaTeam(self):
		return self.__nama_team

	def setNegaraAsal(self, negara_asal):
		self.__negara_asal = negara_asal

	def getNegaraAsal(self):
		return self.__negara_asal

	def setTahun(self, tahun_berdiri):
		self.__tahun_berdiri = tahun_berdiri

	def getTahun(self):
		return self.__tahun_berdiri

	def setNamaPemain(self, nama_pemain):
		self.__nama_pemain = nama_pemain

	def getNamaPemain(self):
		return self.__nama_pemain

	def setNamaKiper(self, nama_kiper):
		self.__nama_kiper = nama_kiper

	def getNamaKiper(self):
		return self.__nama_kiper
