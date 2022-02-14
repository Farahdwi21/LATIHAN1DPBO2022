#include <string>
#include <iostream>
using namespace std;
#include "TeamSepakBola.cpp"

int main(){

	//instansiasi untuk inputan pertama
	TeamSepakBola x;

	//mengeset untuk team pertama
	x.setNamaTeam("Persib");
	x.setNegaraAsal("Indonesia");
	x.setTahun("1933");
	x.setNamaPemain("Febri Hariyadi, Ezra Walian, Marc Klok, dll");
	x.setNamaKiper("Teja Paku Alam"); 

	//instansiasi untuk inpuan kedua
	TeamSepakBola x2;

	x2.setNamaTeam("Real Madrid");
	x2.setNegaraAsal("Spanyol");
	x2.setTahun("1902");
	x2.setNamaPemain("Andriy Lunin, David Alaba, Federico Valverde, dll");
	x2.setNamaKiper("Thibaut Coutois"); 

	//instansiasi untuk inpuan ketiga
	TeamSepakBola x3;

	x3.setNamaTeam("A.C. Milan");
	x3.setNegaraAsal("Italia");
	x3.setTahun("1899");
	x3.setNamaPemain("Matteo Gabbia, Daniel Maldini,Alexis Saelemaekers, dll");
	x3.setNamaKiper("Mike Maignan"); 


	//Proses menampilkan semua atribut
	cout << "===========================================================" << endl;
	cout << "	              DAFTAR TEAM SEPAK BOLA                    " << endl;
	cout << endl;
	cout << "TEAM 1" << endl;
	cout << "Nama Team     : " << x.getNamaTeam() << endl;
	cout << "Negara Asal   : " << x.getNegaraAsal() << endl;
	cout << "Tahun Berdiri : " << x.getTahun() << endl;
	cout << "Nama Pemain   : " << x.getNamaPemain() << endl;
	cout << "Nama Kiper    : " << x.getNamaKiper() << endl;

	cout << endl;
	cout << "TEAM 2" << endl;
	cout << "Nama Team     : " << x2.getNamaTeam() << endl;
	cout << "Negara Asal   : " << x2.getNegaraAsal() << endl;
	cout << "Tahun Berdiri : " << x2.getTahun() << endl;
	cout << "Nama Pemain   : " << x2.getNamaPemain() << endl;
	cout << "Nama Kiper    : " << x2.getNamaKiper() << endl;

	cout << endl;
	cout << "TEAM 3" << endl;
	cout << "Nama Team     : " << x3.getNamaTeam() << endl;
	cout << "Negara Asal   : " << x3.getNegaraAsal() << endl;
	cout << "Tahun Berdiri : " << x3.getTahun() << endl;
	cout << "Nama Pemain   : " << x3.getNamaPemain() << endl;
	cout << "Nama Kiper    : " << x3.getNamaKiper() << endl;
	cout << "===========================================================" << endl;



	return 0;
}
