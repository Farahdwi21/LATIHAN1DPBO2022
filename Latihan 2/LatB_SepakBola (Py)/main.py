from TeamSepakBola import TeamSepakBola

#pake setter
#untuk inputan pertama
x = TeamSepakBola() #instansiasi
x.setNamaTeam("Persib")
x.setNegaraAsal("Indonesia")
x.setTahun("1933")
x.setNamaPemain("Febri Hariyadi, Ezra Walian, Marc Klok, dll")
x.setNamaKiper("Teja Paku Alam")

#pake setter
#untuk inputan kedua
x2 = TeamSepakBola() #instansiasi
x2.setNamaTeam("Real Madrid")
x2.setNegaraAsal("Spanyol")
x2.setTahun("1902")
x2.setNamaPemain("Andriy Lunin, David Alaba, Federico Valverde, dll")
x2.setNamaKiper("Thibaut Coutois")


#menampilkan atribut (output)
#ambil nilainya dengan menggunakan getter
print("================================================")
print("            DAFTAR TEAM SEPAK BOLA              ")
print("\n")
print("TEAM 1")
print("Nama Team : " + str(x.getNamaTeam()))
print("Negara Asal : " + str(x.getNegaraAsal()))
print("Tahun Berdiri : " + str(x.getTahun()))
print("Nama Pemain : " + str(x.getNamaPemain()))
print("Nama Kiper : " + str(x.getNamaKiper()))

print("\n")
print("TEAM 2")
print("Nama Team : " + str(x2.getNamaTeam()))
print("Negara Asal : " + str(x2.getNegaraAsal()))
print("Tahun Berdiri : " + str(x2.getTahun()))
print("Nama Pemain : " + str(x2.getNamaPemain()))
print("Nama Kiper : " + str(x2.getNamaKiper()))

print("================================================")
