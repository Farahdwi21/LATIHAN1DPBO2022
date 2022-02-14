class Main{

	public static void main(String[] args){
		//deklarasi class TeamSepakBola
		TeamSepakBola x;
		TeamSepakBola x2;
		TeamSepakBola x3;
	
		//untuk tim pertama
		//instansiasi 
		x = new TeamSepakBola();

		//mengisi atribut untuk team pertama
		x.setNamaTeam("Persib");
		x.setNegaraAsal("Indonesia");
		x.setTahun("1933");
		x.setNamaPemain("Febri Hariyadi, Ezra Walian, Marc Klok, dll");
		x.setNamaKiper("Teja Paku Alam");

		//untuk team kedua
		x2 = new TeamSepakBola(); //instansiasi
		//mengisi atribut untuk team kedua
		x2.setNamaTeam("Real Madrid");
		x2.setNegaraAsal("Spanyol");
		x2.setTahun("1902");
		x2.setNamaPemain("Andriy Lunin, David Alaba, Federico Valverde, dll");
		x2.setNamaKiper("Thibaut Coutois");

		//untuk team ketiga
		x3 = new TeamSepakBola(); //instansiasi
		//mengisi atribut untuk team ketiga
		x3.setNamaTeam("A.C. Milan");
		x3.setNegaraAsal("Italia");
		x3.setTahun("1899");
		x3.setNamaPemain("Matteo Gabbia, Daniel Maldini,Alexis Saelemaekers, dll");
		x3.setNamaKiper("Mike Maignan");

		//menampilkan output
		System.out.println("================================================");
		System.out.println("            DAFTAR TEAM SEPAK BOLA              ");
		System.out.println("\n");
		System.out.println("TEAM 1");
		System.out.println("Nama Team     : " + x.getNamaTeam());
		System.out.println("Negara Asal   : " + x.getNegaraAsal());
		System.out.println("Tahun Berdiri : " + x.getTahun());
		System.out.println("Nama Pemain   : " + x.getNamaPemain());
		System.out.println("Nama Kiper    : " + x.getNamaKiper());

		System.out.println("\n");
		System.out.println("TEAM 2");
		System.out.println("Nama Team     : " + x2.getNamaTeam());
		System.out.println("Negara Asal   : " + x2.getNegaraAsal());
		System.out.println("Tahun Berdiri : " + x2.getTahun());
		System.out.println("Nama Pemain   : " + x2.getNamaPemain());
		System.out.println("Nama Kiper    : " + x2.getNamaKiper());

		System.out.println("\n");
		System.out.println("TEAM 3");
		System.out.println("Nama Team     : " + x3.getNamaTeam());
		System.out.println("Negara Asal   : " + x3.getNegaraAsal());
		System.out.println("Tahun Berdiri : " + x3.getTahun());
		System.out.println("Nama Pemain   : " + x3.getNamaPemain());
		System.out.println("Nama Kiper    : " + x3.getNamaKiper());
		System.out.println("================================================");
	}
}