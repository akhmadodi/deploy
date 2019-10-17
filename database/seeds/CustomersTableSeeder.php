<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
        "is_vip" => 1,
        "name" => "HSBC",
        "address" => "WTC 3 Lantai 6",
        "email" => "prihatin.junianto@hsbc.co.id",
        "phone" => "0823-1231-4222",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "PT AIA Financial",
        "address" => "Jl Jend Sudirman kav 48 A Jakarta Selatan 12930 dibelakang sampoerna strategic square",
        "email" => "eviyenty@aia.com",
        "phone" => "021 54218888 ext. 19285",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "PT MULTIPOLAR TECHNOLOGY TBK (Jakarta)",
        "address" => "BERITASATU PLAZA (D/H GEDUNG CITRA GRAHA) LT 7 JL.JEND. GATOT SUBROTO KAVLING 35 – 36 KUNINGAN TIMUR, SETIABUDI JAKARTA SELATAN",
        "email" => "rita.susanto@multipolar.com",
        "phone" => "021 5460011",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "PT. Bukit Asam (Persero) Tbk",
        "address" => "Menara Kadin Lantai 15, Jl. H. R. Rasuna Said, Kuningan Tim., Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta",
        "email" => "asafari@bukitasam.co.id",
        "phone" => "021 5254014",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "PT Danareksa (Persero)",
        "address" => "Ged.Danareksa,Jl.Medan Merdeka Slt 14,Ged.Danareksa Lt.3,Gambir",
        "email" => "zulfa_assf@danareksa.com",
        "phone" => "021 29555888 ext. 2421",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "PT Kirana Megatara",
        "address" => "The East Building, 21st Floor Jl. Lingkar Mega Kuningan Kav E3.2 No. 1 Jakarta 12950, INDONESIA",
        "email" => "rosa@kiranamegatara.com",
        "phone" => "021 57947988",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Hakuhodo Indonesia",
        "address" => "Jl. Prapanca Raya No. 39, Kebayoran Baru, Jakarta Selatan",
        "email" => "pungky.dwi@hakuhodo.id",
        "phone" => "021 72787272",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "PT Asuransi Tugu Pratama Indonesia Tbk",
        "address" => "Wisma Tugu I Jalan H.R. Rasuna Said Kav. C8-9, Jakarta 12920 Indonesia",
        "email" => "rhandayani@tugu.com",
        "phone" => "0857-1095-3909",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "PT Piaggio Indonesia",
        "address" => "Sampoerna Strategic Square, North Tower 23rd Floor. Jl Jendral Sudirman Kav 45 – 46 , Jakarta",
        "email" => "alicia.putri@id.piaggio.com",
        "phone" => "021 57902515",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Perusahaan Perdagangan Indonesia (persero)",
        "address" => "GRAHA PPI, Jl. Abdul Muis No.8,  Jakarta Pusat,  DKI Jakarta,  10160,  Indonesia",
        "email" => "ppi.info@ptppi.co.id",
        "phone" => "0812-9832-8609",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Hinti Inti Tetra",
        "address" => "JL. Meruya Ilir, Kembangan Business Park Kebon Jeruk 16 Blok A, RT.1/RW.5",
        "email" => "purchasing@hint-interior.com",
        "phone" => "021 58908251",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "PT Sumber Energi Pangan",
        "address" => "The East, Jl. Dr. Ide Anak Agung Kav. E3.2 No. 1, Kuningan, RT.5/RW.2, Kuningan, East Kuningan, Jakarta, 12950",
        "email" => "ketty@kiranamegatara.com",
        "phone" => "021 5793 8470",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "MNC Insurance",
        "address" => "MNC Financial Center 11th Floor Jl. Kebon Sirih no. 21 - 27",
        "email" => "niken.wulandari@mnc-insurance.com",
        "phone" => "0812-8380-8810",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "PT. Orica Mining Services",
        "address" => "Pondok Indah Office Tower 3, 12th Floor Jl. Sultan Iskandar Muda Kav. V-TA Jakarta Selatan Indonesia",
        "email" => "deffie.anggarany@orica.com",
        "phone" => "021 27650123",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "London School of Public Relations (LSPR)",
        "address" => "Jl. K.H Mas Mansyur, Kav. 35, Jakarta Pusat 10220",
        "email" => "avni.h@lspr.edu",
        "phone" => "021 5708143",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "ASKRINDO SYARIAH",
        "address" => "Jl.Gedung Kesenian No 30 Lantai 2 RT 7 Ps Baru Sawah Besar Kota jakarta pusat DKI Jakarta 10710",
        "email" => "tikakartika.n@gmail.com",
        "phone" => "021 6546505",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "Sterling tulus cemerlang",
        "address" => "Kompleks rukan graha arteri mas kavling 30. Jl. Panjang No. 68 Kedoya Jakarta barat",
        "email" => "chowafati@sterling-team.com",
        "phone" => "087879130031",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "Gabungan Pengusaha Makanan dan Minuman Indonesia (GAPMMI)",
        "address" => "ITS Office Tower Lt. 8 Unit 16, Nifarro Park, Jl. Raya KM. 18, RT.13/RW.5, Pasar Minggu, South Jakarta City, Jakarta 12510",
        "email" => "gapmmi@cbn.net.id",
        "phone" => "021 29517511",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "PT.Sankyu Indonesia International",
        "address" => "Gd. Summitmas I Lt.5,Jl.Jend Sudirman Kav.61-62,Jakarta",
        "email" => "yuko.nagahama@sankyu.co.id",
        "phone" => "123456",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "PT Krama Yudha Tiga Berlian Motors",
        "address" => "Internal Affairs Department Jl. Jend. A. Yani Proyek Pulomas Jakarta Timur, 13210",
        "email" => "fortun.septiasih@ktb.co.id",
        "phone" => "021 4891608 ext. 1648",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "Timur raya kreasi mandiri",
        "address" => "JL. Panjang No. 68, Ruko Graha Arteri Mas Kav. 10, Kedoya Selatan, Kebon Jeruk, Jakarta Barat",
        "email" => "xoxoxo@gmail.com",
        "phone" => "021 58304585",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "PT Airy Nest Indonesia",
        "address" => "Wisma Barito Pacific Tower B lantai 10, jl.Lenten S.Parman Kav.62-63 Slipi, Palmerah City",
        "email" => "siti.alfiah@airyrooms.com",
        "phone" => "0878-7374-1119",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "Sampoerna Kayoe",
        "address" => "Gd sampoerna strategic square north tower lt 21 jl jend sudirman kav 45-46",
        "email" => "Maya.liliana@sampoernakayoe.co.id",
        "phone" => "021 2514234",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Satria Gemareksa",
        "address" => "Wisma 77, Jl. Letjen S Parman Slipi Palmerah Jakarta Barat",
        "email" => "info@satriagroup.co.id",
        "phone" => "021 5363136",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT. SAKURA SYSTEM SOLUTIONS",
        "address" => "HDI HIVE Menteng 4th floor, Jl. Probolinggo No. 18, Gondangdia, Menteng",
        "email" => "xoxox@gmail.com",
        "phone" => "81285653787",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "PT Mitsubishi Motors Krama Yudha Sales Indonesia (MMKSI)",
        "address" => "Internal Affairs Department Jl. Jend. A. Yani Proyek Pulomas Jakarta Timur, 13210",
        "email" => "anom.tunjung@mitsubishi-motors.co.id",
        "phone" => "021 4896108 ext. 1863",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT XL Planet (elevenia)",
        "address" => "AIA Central building Jl. Jend. Sudirman Kav. 48A, Jakarta Selatan (12930)",
        "email" => "syahrul.munajab@elevenia.co.id",
        "phone" => "0878-7532-7797",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "Katadata Indonesia",
        "address" => "Rukan Permata Senayan Blok D 31, Jalan Tentara Pelajar, RT.1/RW.7, Grogol Utara, Kby. Lama, Kota Jakarta Selatan",
        "email" => "dilla@katadata.co.id",
        "phone" => "021 57941014",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Tempo media group mas",
        "address" => "Gedung Tempo Jl. Palmerah Barat No. 8 Jakarta Selatan 12210",
        "email" => "cs@tempo.co.id",
        "phone" => "0813-2950-7507",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Cipta Dimensi baja utama",
        "address" => "Pulogadung Trade Center  Bekasi Raya Blok 8H No. 2-5  Cakung, Jakarta Timur 13920",
        "email" => "dhini@ciptadimensi.co.id",
        "phone" => "0857-1487-9787",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "Target Media",
        "address" => "Menara Sudirman  Level 17, Suite B Jl. Jend. Sudirman Kav. 60,  Jakarta 12190",
        "email" => "ika@targetmedia.co.id",
        "phone" => "021 5205853",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Oiltanking Nusantara Persada",
        "address" => "Menara Prima Building Fl. 16th, Unit H & I  Jl. Dr. Ide Anak Agung Gde Agung 6.2  Jakarta 12950, Indonesia",
        "email" => "liilana.liliana@oiltanking.com",
        "phone" => "0812-3866-0084",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "PT Mitsubishi Motors Krama Yudha Indonesia (MMKI)",
        "address" => "Kawasan Greenland International Industrial Center (GIIC) Blok CH No.01 & 02 Kota Deltamas, Desa Pasirranji, Kec. Cikarang Pusat, Kab. Bekasi 17530 ,Jawa Barat, Indonesia",
        "email" => "mellia.mardhianty.gardika@mmki.co.id",
        "phone" => "021 806 771 00 ext. 2109",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Perusahaan pengelola aset (Persero)",
        "address" => "Jl. Jend. Sudirman No.68, RT.1/RW.4, Karet Semanggi, Kecamatan Setiabudi, Kota Jakarta Selatan",
        "email" => "corpsec@ptppa.com",
        "phone" => "021 57982222",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Geoservices",
        "address" => "Jl. Minangkabau Barat No.34 Jakarta 12970",
        "email" => "purchasing@geoservices.co.id",
        "phone" => "0819-3000-0051",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "Bank Victoria",
        "address" => "Graha BIP Lt.9",
        "email" => "dinda@victoriabank.co.id",
        "phone" => "021 29044264",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT China Harbour Indonesia",
        "address" => "TCC Batavia Tower One Building Jl. K.H. Mas Mansyur Kav. 126 Jakarta 10220",
        "email" => "squeenna@chec.co.id",
        "phone" => "0895-8003-03972",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "ISCO",
        "address" => "Permata Kuningan,Penthouse Floor,Jl.Kuningan Mulia,Kav.9C",
        "email" => "wahyuni@aymp.law",
        "phone" => "021 83707777",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "PT Krama Yudha Ratu Motor",
        "address" => "Jl. Raya Bekasi Km.21-22, Rawaterate, Cakung, Jakarta Timur 1392",
        "email" => "ruth.novida@ktb.co.id",
        "phone" => "0813-8446-1204",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Manggala usaha manunggal",
        "address" => "Graha Anabatic, Jl. Scientia Boulevard Kav. U2, Summarecon Serpong",
        "email" => "soleha@titaninfra.com",
        "phone" => "021 80636888",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Petra Sakti",
        "address" => "Jl.Padat Karya Bojong RT.23/07 Kembang Kuning, Klapanunggal - Kab.Bogor, 16820",
        "email" => "accounting@petra.co.id",
        "phone" => "0812-8848-484",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "PT FWD Life Indonesia",
        "address" => "Pacific Century Place, Lantai 20 SCBD Lot 10 Jl. Jend. Sudirman Kav. 52-53 Jakarta Selatan 12190 Indonesia",
        "email" => "rahayu.nurantari@fwd.com",
        "phone" => "021 1500 393 ext. 8036",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Bina Adi Daya",
        "address" => "Jl.Industri Raya IV Kav AF.Bunder-Cikupa,Tangerang",
        "email" => "erly@binaadidaya.com",
        "phone" => "021 29383000",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Sari Enesis Indah",
        "address" => "Jl. Rawa Sumur III, Blok DD No. 13 Pulo Gadung Industrial Estate Jakarta 13930",
        "email" => "customer.service@enesis.com",
        "phone" => "0811-8459-662",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Ancora Indonesia Recources",
        "address" => "Equity Tower 41st Floor, JL. Jenderal Sudirman Kav. 52-53 Lot 9, Sudirman Central Business Distric, Jakarta, 12190, RT.5/RW.3",
        "email" => "hr@ancorair.com",
        "phone" => "021 29035011",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "PT.Asuransi Wahana Tata (ASWATA)",
        "address" => "Jl. H.R. Rasuna Said Kav.C-4 Jakarta 12920",
        "email" => "chresent@aswata.co.id",
        "phone" => "021 5203145/46 ext. 544",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Talita Resort",
        "address" => "Jl. Siguntang, RT.09 / RW.02, Desa Ciloto, Cipanas, Ciloto, Cipanas, Cianjur Regency, West Java 43253",
        "email" => "sisca@talitaresort.com",
        "phone" => "8129158772",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Teknindo Geosistem Unggul",
        "address" => "PT. Teknindo Geosistem Unggul Wisma SIER Building, 1st Floor, Jl Rungkut Industri Raya 10, Surabaya 60293,  INDONESIA",
        "email" => "hrd@geosistem.co.id",
        "phone" => "0857-3125-8288",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Boma Bisma Indra (Persero)",
        "address" => "Jl. KH Mas Mansyur No.229, Nyamplungan, Pabean Cantian, Kota SBY, Jawa Timur 60162",
        "email" => "corporate@ptbbi.co.id",
        "phone" => "02313522657",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Inovasi Informatika Indonesia",
        "address" => "Gd. Graha BIP Lt.7 Jl. Jend. Gatot Subroto Kav. 23 Kel. Semanggi Kec. Setiabudi Jakarta Selatan, DKI Jakarta",
        "email" => "dini.amalia@i-3.co.id",
        "phone" => "021 72793187",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Berca Niaga Medika",
        "address" => "Berca Building, Jl. Abdul Muis No.62, RT.3/RW.3, Petojo Sel., Gambir, Kota Jakarta Pusat",
        "email" => "bnm@bercaniaga.co.id",
        "phone" => "021 3518826",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Muci Bina Persada",
        "address" => "Jln Mutiara Raya no.1 pasar modern mutiara karawaci tangerang",
        "email" => "desi_hihihi@yahoo.com",
        "phone" => "021 55653606",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Jaya Proteksindo",
        "address" => "Kramat Center Blok A4 Jl. Kramat Raya No. 7 - 9 Kramat Senen Jakarta Pusat 10430, Indonsia",
        "email" => "marcom@jayaproteksindo.co.id",
        "phone" => "0811-1220-780",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Cascadiant Indonesia",
        "address" => "Prudential Centre, Floor 21-B, Jl. Casablanca Raya Kav.88, Tebet, RT.14/RW.5, Menteng Dalam, Tebet, DKI Jakarta, Jakarta 12870",
        "email" => "sales@cascadiant.com",
        "phone" => "021 29612669",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT SURYA ENERGI PARAHITA",
        "address" => "Gedung Graha Mustika Ratu Lt.5 Jl. Jend. Gatot Subroto Kav 74 - 75, Menteng Dalam, Tebet, Jakarta Selatan",
        "email" => "kurniadi@surya-energi.com",
        "phone" => "0878-8320-2997",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT. Omnicom Media Group",
        "address" => "EightyEight@Kasablanka Office Tower I 33rd Floor Unit H Jl. Casablanca Raya Kav.88",
        "email" => "Nunung.Nurhayati@omnicommediagroup.com",
        "phone" => "021 298 20270",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT jets indonesia",
        "address" => "Graha JETS Jl. Penjernihan 2 No. 10 Bendungan Hilir Jakarta Pusat 10220",
        "email" => "info@jetsbrokers.com",
        "phone" => "0813-1485-5527",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "PT.Amerta Indah Otsuka",
        "address" => "Pondok Indah Office Tower 1, 6th floor | Jl Sultan Iskandar Muda Kav V-TA Jakarta Selatan 12310",
        "email" => "nnauli@aio.co.id",
        "phone" => "021 769 7475",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Zamasco Mitra Solusindo",
        "address" => "Ruko Cempaka Mas, Jl. Letjend Suprapto No.24, RW.8, Sumur Batu, Kec. Kemayoran, Kota Jakarta Pusat",
        "email" => "info@zamasco.co.id",
        "phone" => "021 42900267",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT. Dumas Tanjung Perak Shipyard",
        "address" => "Jl. Nilam Barat no. 12, Perak, Surabaya 60177",
        "email" => "info@dumas.co.id",
        "phone" => "0812-3253-0006",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Glencore indonesia",
        "address" => "Mid Plaza 2 Lt.14, Jl. Jend. Sudirman No.10-11, RT.10/RW.11, Karet Tengsin, Kota Jakarta Pusat",
        "email" => "ayunda.augustten@glencore.com",
        "phone" => "02513810",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "Wealthy",
        "address" => "Green Sedayu Bizpark Unit DM-2 No.007 Daan Mogot Km.18",
        "email" => "wealthy.sejahtera@wealthy.co.id",
        "phone" => "021 2252 23 81",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "NOBU BANK",
        "address" => "NOBU BANK | Nobu Center Plaza Semanggi Jl. Jend. Sudirman Kav. 50, Jakarta – 12930",
        "email" => "hr.info@nobubank.com",
        "phone" => "021 2553-5128 ext. 323) |",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "Soemadipraja & Taher",
        "address" => "Wisma GKBI, Level 9 Jl. Jenderal Sudirman No. 28 Jakarta 10210",
        "email" => "center@soemath.com",
        "phone" => "021 574 0088",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "VP TAX Pertamina (Persero)",
        "address" => "Gedung Utama lantai 7 Jl. Medan Merdeka Timur 1A  Jakarta 10110",
        "email" => "Retno.sujati@pertamina.com",
        "phone" => "0812-1121-261",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT. Sysmex Indonesia",
        "address" => "Cyber 2 Tower, 5th Floor, Unit E, JI. HR. Rasuna Said Blok X5 No 13, Jakarta Selatan 12950, Indonesia",
        "email" => "sysmex@sysmex.co.id",
        "phone" => "021 3002 6688",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT adyabina putramas",
        "address" => "Puri Indah Financial Tower 18th Unit 1801-1807 Jl. Puri Lingkar Dalam Blok T-8 Puri Indah - Jakarta Barat",
        "email" => "evy@adyabina.co.id",
        "phone" => "0813-8207-7702",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Vistra",
        "address" => "Plaza Sentral, 10th Floor, Jl. Jenderal Sudirman Kav.47",
        "email" => "Surya.Anna@vistra.com",
        "phone" => "0821-2263-2420",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Kanaya",
        "address" => "Perkantoran Islamic Center, Jl. Kramat Jaya No. 22Q, Jakarta 14260, INDONESIA",
        "email" => "eva@kanaya.co.id",
        "phone" => "0878-7833-3328",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "Commonwealth Life",
        "address" => "Wisma Metropolitan II Lt. 9 Jl. Jend. Sudirman Kav 29-31 Jakarta 12920",
        "email" => "diana.majdina@commlife.co.id",
        "phone" => "021 29299500",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT. NEC Indonesia",
        "address" => "Summitmas I, 4th Floor,  Jl. Jend. Sudirman Kav. 61 - 62 Jakarta 12190",
        "email" => "verita@nec.co.id",
        "phone" => "021 520 1215",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Mulia Mandiri Supply",
        "address" => "Jl. Tongkol Blok B1 No. 6, Ancol, Pademangan Jakarta 14430 , Indonesia",
        "email" => "mega.ad@muliamandiri.com",
        "phone" => "0857-7461-4661",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Tritunggal Arthamakmur",
        "address" => "Komplek Graha Kencana Blok AB  Jl. Pejuangan No 88 Kebon Jeruk  Jakarta 11530",
        "email" => "Winy.tam@triarth.com",
        "phone" => "0815-1300-6526",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT berlian laju tanker",
        "address" => "Wisma BSG Lt. 10, Jl. Abdul Muis no. 40 Jakarta Pusat 10160",
        "email" => "silvea@blt.co.id",
        "phone" => "0812-1083-843",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT krakatau steel",
        "address" => "Gedung Krakatau Steel, Lt. 4, Jl. Gatot Subroto Kav. 54, RT.1/RW.4, Kuningan Tim., Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950",
        "email" => "iwan.nuryadi@krakatausteel.com",
        "phone" => "0817-9855-000",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT goodrich",
        "address" => "JI. H. Naim III/6 (Jl. Pangeran Antasari) Cipete Utara, Jakarta Selatan 12150, Indonesia",
        "email" => "info@goodrichglobal.co.id",
        "phone" => "0817-761-000",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PCM kabel indonesia",
        "address" => "Kawasan Industri Mekar Jaya. Jl. Raya Mauk KM. 7, Karet Raya no. 288. Mekar Jaya, Sepatan, Tangerang 15520",
        "email" => "procurement@pcmcable.com",
        "phone" => "0852-8779-5658",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Kreatif Media Karya",
        "address" => "SCTV Tower Jl asia Afrika Lot 19",
        "email" => "sumirah@kmkonline.co.id",
        "phone" => "0853-1220-7763",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Manikam",
        "address" => "Rukan pulogadung trade center blok 8h no.25 jak tim",
        "email" => "finance@ptmanikam.com",
        "phone" => "0816-1998-536",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT IBJ Verena Finance",
        "address" => "sentral senayan 3 lt 13 jln asia afrika senayan jakarta selatan",
        "email" => "hilda.ayuanita@ibjverena.com",
        "phone" => "021 9660780",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Agung Solusi Trans (Agungrent)",
        "address" => "Jl. Pinang Ranti II No.38 Jakarta Timur 13560",
        "email" => "angel@agungrent.co.id",
        "phone" => "0878-5520-6000",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "PT PELAYARAN TEMPURAN EMAS (Temas Line)",
        "address" => "Jl. Yos Sudarso Kav. 33, Sunter Jaya, jakarta utara 14350, Indonesia",
        "email" => "marthalia.vigita@temasline.com",
        "phone" => "021 4302388",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "Jakarta Futures Exchange (JFX)",
        "address" => "The City Tower Building, 20th floor I JL.MH.Thamrin No.81, Jakarta Pusat 10310",
        "email" => "sssimamora@jfx.co.id",
        "phone" => "0878-8898-7047",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Waskita Bumi Wira",
        "address" => "Jl. Jend. Sudirman No.68, RT.1/RW.4, Karet Semanggi, Kecamatan Setiabudi",
        "email" => "azizah.juslynflorist@gmail.com",
        "phone" => "0821-2340-3232",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT OMG indonesia",
        "address" => "Grha Adhi Media  Jl Deplu Raya No.6 Bintaro Jakarta 12330",
        "email" => "dessy.widrastya@omg-indo.com",
        "phone" => "0811-808-070",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT pojok celebes",
        "address" => "Plasa Telkom Group 2nd Floor Jalan RS Fatmawati No 65 Cilandak Jakarta Selatan 12430  ",
        "email" => "cris@pointer.co.id",
        "phone" => "0813-8215-8449",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "AccorHotels",
        "address" => "DBS Bank Tower – Level 21 Suite 2102 Ciputra World 1 Jakarta  Jl. Prof. Dr. Satrio Kav. 3-5 Jakarta 12940 – Indonesia",
        "email" => "Istania.LELYANA@accor.com",
        "phone" => "021 5083-5158",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "AYMP Atelier Of Law",
        "address" => "Generali Tower Penthouse Floor Gran Rubina Business Park Epicentrum, Jalan Haji R. Rasuna Said, karet Kuningan",
        "email" => "sisca.riana@aymp.law",
        "phone" => "021 83707777",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT sinar antjol",
        "address" => "Jl. Malaka II, No. 1-3, Roa Malaka, Tambora, Jakarta - 11230",
        "email" => "sinthia@sinarantjol.com",
        "phone" => "0813-1999-8517",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Telkom Akses",
        "address" => "Gedung telkom lt 3 desain center(ruang IT). Jl s parman kav 8 jakarta barat",
        "email" => "silviaislamey77@gmail.com",
        "phone" => "021 29860000",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "MNC Guna Usaha (MNC Leasing)",
        "address" => "MNC Tower, 23rd Floor  Jl. Kebon Sirih No. 17-19, Jakarta 10340",
        "email" => "dinda.rogahang@mncgroup.com",
        "phone" => "0858-9135-5022",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT. COLLIERS INTERNATIONAL INDONESIA",
        "address" => "World Trade Centre I, 14th Floor, Jl. Jenderal Sudirman Kav. 29 - 31 | Jakarta 12920",
        "email" => "Roro.Amaliah@colliers.com",
        "phone" => "021 3043 6888",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT. Nissan Motor Distributor Indonesia",
        "address" => "Jl R.A Kartini Kav II - s No 7 Tb Simatupang Jakarta Selatan",
        "email" => "hilda.s@nissan.co.id",
        "phone" => "021 7653853 ext. 126",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Icon+",
        "address" => "PT . Indonesia Comnet Plus Jl. Mayjen Sutoyo No.1 RW.9 Cililitan Kramatjati Jakarta Timur",
        "email" => "afifah.harahap@iconpln.co.id",
        "phone" => "0822-4277-8277",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT.INDO TRUCK UTAMA",
        "address" => "JL.RAYA CAKUNG CILINCING KAV.3A SEMPER TIMUR JAKARTA UTARA 14130",
        "email" => "riska@indotruck-utama.co.id",
        "phone" => "0811-815-009",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Prudential Life Assurance",
        "address" => "Prudential Tower, Jl. Jend. Sudirman, kav. 79, Jakarta 12910, Indonesia",
        "email" => "Hardianti.Wilujeng@prudential.co.id",
        "phone" => "021 2995 8888",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Prudential Life Assurance (kokas)",
        "address" => "PT. Prudential Life Assurance, Prudential Centre - 16th. Fl | Kota Kasablanka Jl. Kasablanka Kav. 88, Jakarta 12870",
        "email" => "Fita.Fitria@prudential.co.id",
        "phone" => "021 2995 8888 ext. 61059",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT. DAYA EKA SAMUDERA",
        "address" => "Jl.Bandengan Utara Blok A1 /1, RT.1/RW.10, Pekojan, Tambora, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11240",
        "email" => "adm@desjakarta.com",
        "phone" => "021 6900325",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT. Astratol Nusantara",
        "address" => "ASTRA Infra, Gedung Menara Astra, lantai 11, Jl. Jend. Sudirman kav. 5-6, Jakarta 10220",
        "email" => "Wiwiek.Riswati@astratel.co.id",
        "phone" => "021 5210440",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT.MULYA ADHI PARAMITA",
        "address" => "Jalan Kapuk No.19, RT.5/RW.2, Kamal, Penjaringan, RT.5/RW.2, Kamal Muara, Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14470",
        "email" => "rusnita@chemstationasia.com",
        "phone" => "021 555 1314 ext. 133",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Swatch Group Indonesia",
        "address" => "PT Swatch Group Indonesia Sampoerna Strategic Square,  North Tower, Level 24, Jalan Jend. Sudirman, Kav 45-46 Jakarta 12930",
        "email" => "Marfie.Desideratus@swatchgroup.co.id",
        "phone" => "021 297 10000 ext. 1177",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Mulia Group",
        "address" => "Komp Mulia Industry Gedung Admin Jl.Raya Tegal Gede  Lemahabang Cikarang Bekasi 17550????",
        "email" => "tri_hrd@muliagroup.co.id",
        "phone" => "021 8935710",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Trafoindo Prima Perkasa",
        "address" => "Jalan Hayam Wuruk 4 No.4FX, RT.6/RW.2, Kb. Klp., Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10120",
        "email" => "gita.sulviana@trafoindonesia.com",
        "phone" => "021  3850703 ext. 109",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Petro Oxo Nusantara",
        "address" => "Gedung midplaza 2 lt. 10 Jl. Jend sudirman kav. 10-11",
        "email" => "yuliana@pon.co.id",
        "phone" => "021 5739703",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT ISARGAS",
        "address" => "Gedung PLAZA ASIA LANTAI 12 SUITE A DAN B, JL.JENDRAL SUDIRMAN KAV.59. jkt 12190",
        "email" => "lina@isargas.com",
        "phone" => "021 5155858 / 021 5150099",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Jaya Trade Indonesia",
        "address" => "Jl Kramat Raya No 144 Jakarta Pusat 10430",
        "email" => "sekjti@yahoo.com",
        "phone" => "021 3159999",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "PT.Daikin Airconditioning Indonesia",
        "address" => "Wisma KEIAI, 18th floor,  Jl. Jendral Sudirman Kav 3 | Jakarta 10220",
        "email" => "Tiara.Pangesti@daikin.co.id",
        "phone" => "021 572 4377 ext. 656)",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "MG Holiday Group",
        "address" => "MG Group – Jalan Majapahit No. 16, Jakarta Pusat 10160, Indonesia ",
        "email" => "yusak.wibowo@mgholidaygroup.com",
        "phone" => "021 2922 3933",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Tuban Petrochemical Industries",
        "address" => "Mid Plaza 2 Lt.18 Jl. Jend. Sudirman Kav. 10-11",
        "email" => "Rkartika@tubanpetro.co.id",
        "phone" => "021 5739676",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT.ORIX Indonesia Finance",
        "address" => "wisma Keiai 24th Floor jl.jendral sudirman kav 3 jakarta 10220",
        "email" => "internal_affair@orix.co.id",
        "phone" => "021 5723041",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT. YKK ZIPPER Indonesia",
        "address" => "PT YKK ZIPPER INDONESIA Jl. R.P. Soeroso No. 7 Cikini Jakarta Pusat 10330",
        "email" => "DEWI_SULISTIYA@ykk.co.id",
        "phone" => "021 31931708 ext. 1032",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Sony Indonesia",
        "address" => "Wisma GKBI lt.23 suite 2301 Jl. Jend sudirman kav. 28  Jakarta pusat",
        "email" => "Merri.Rochayati@sony.com",
        "phone" => "0821-3884-1480",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Central Omega Resources,Tbk",
        "address" => "Plaza Asia, 6th Floor  jl.jenderal sudirman Kav.59 jakarta selatan 12190",
        "email" => "yuliana.yoo@gmail.com",
        "phone" => "021 5153533",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Putra Adhi Prima (Vimala Hills)",
        "address" => "Vimala Hills Mall Kuningan City Lt. 1 unit 36 Jl Prof Satrio kav 18, Setiabudi, Kuningan  Jakarta 12940",
        "email" => "vimalabianca@gmail.com",
        "phone" => "021 4088 9999",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT BAM Decorient Indonesia",
        "address" => "Menara Jamsostek, North Tower 20th floor, Jl Jend Gatot Subroto No. 38, 12710 Jakarta, Indonesia",
        "email" => "h.meutia@baminternational.com",
        "phone" => "021 2526777",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT.J Resources Nusantara",
        "address" => "Equity Tower 48th Floor, SCBD Lot 9 Jl. Jend Sudirman Kav 52 – 53 Jakarta Selatan",
        "email" => "dessy.andini@jresources.com",
        "phone" => "021 5153335",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Citra Link Indonesia (Mullen lowe)",
        "address" => "Gedung Victoria 2nd,6th floor Jl. Sultan Hasanuddin Kav 47-51 Kebayoran Baru Jakarta 12160",
        "email" => "Soraya.Kurniawan@mullenlowe.com",
        "phone" => "021 29279279",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "RUMAH123.COM",
        "address" => "Tower 88 Kasablanka @ Casablanca  level 37 Jl. Casablanca No.88, RT.16/RW.5, Menteng Dalam, Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota ,Jakarta 12960",
        "email" => "eliana.rachman@rumah123.com",
        "phone" => "021 30496123",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "Emirates NBD PJSC",
        "address" => "Wisma GKBI, 37th floor, Suite #3701 Jl. Jend. Sudirman No. 28 Jakarta 10210",
        "email" => "enbdindo@yahoo.co.id",
        "phone" => "021 5790 5399",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "ANDI GUNAWAN & ASSOCIATES",
        "address" => "Menara global level 12 unit c1 jl.jendral gatot subroto Kav 27 jakarta",
        "email" => "aga.office@andilaw.co.id",
        "phone" => "021 527 9669",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "OK BANK",
        "address" => "PT. Bank Oke Indonesia Sahid Sudirman Center Lt. 56 Unit B Jl. Jend Sudirman No. 86 Jakarta Pusat 10220",
        "email" => "widiasworo.ambarsari@okbank.co.id",
        "phone" => "021 2788 9535",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Pruftechnik Condition Monitoring Indonesia",
        "address" => "South Quarter, Tower A, lantai 15, unit E Jl. R.A. Kartini,Kav.8,Cilandak Barat Jakarta Selatan 12430 Indonesia",
        "email" => "wulandika.putri@pruftechnik.co.id",
        "phone" => "021 2276 7945",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT.NTT INDONESIA",
        "address" => "Wisma 46 kota bni lt.5.03 jl.jend.sudirman kav.1 jakarta pusat 10220",
        "email" => "eka.nurjanah@ap.ntt.com",
        "phone" => "021 5727777",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT. GAP Logistics",
        "address" => "Jl. RE Martadinata 100 No. C10, Tg Priok - Jakarta 14310, Indonesia",
        "email" => "gap-import2@gaplogistics.com",
        "phone" => "021 64711626",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Talenta Bumi",
        "address" => "Gedung Plaza Marein Lt. 7, Jl. Jend. Sudirman No.78, RT.2/RW.2, Kuningan, Setia Budi, Kecamatan Setiabudi, Kota Jakarta",
        "email" => "phalim@rbt.co.id",
        "phone" => "0878-8088-5593",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Refined Bangka Tin",
        "address" => "Gedung Plaza Marein Lt. 17 D , Jl. Jend. Sudirman No.78, RT.2/RW.2, Kuningan, Setia Budi, Kecamatan Setiabudi, Kota Jakarta",
        "email" => "olla@rbt.co.id",
        "phone" => "0818-0602-2727",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "Ibu Reini",
        "address" => "Blok B-2 Callista Residence Jl. Raya Jakarta Timur Munjul Cipayung 13850 Indonesia",
        "email" => "grein@indo.net.id",
        "phone" => "0811-519-212",
        "customer_category_id" => 1,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT. Softex indonesia",
        "address" => "jl jalur sutera barat kav 15 alam sutera - tanggerang 15325",
        "email" => "ettyn@softexindonesia.com",
        "phone" => "021 30055108",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Asuransi Jiwa Tugu Mandiri",
        "address" => "Gedung Tamansari Parama Boutique Office lantai 11 Jl. KH Wahid Hasyim No. 84-88 Jakpus 10340",
        "email" => "anwar@tugumandiri.com",
        "phone" => "0856-9000-364",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT. Triputra Agro Persada",
        "address" => "The East Building 23rd floor Jl IOE Anak Agung GDE Agung, Kav E3 .2 No.1 Kelurahan Kuningan Timur Kecamatan Setia Budi , Jakarta Selatan",
        "email" => "anas.risyadi@tap-agri.com",
        "phone" => "021 57944737",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT. Krones Machinery Indonesia",
        "address" => "Bluegreen Boutique Office Tower D-Blue 6th Floor Jl. Lingkar Luar Barat No. 88 , Puri Kembangan  Jakarta Barat – 11610",
        "email" => "Cindi.Novia@krones.co.id",
        "phone" => "021 29527262",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT.Sharprindo Dinamika Prima",
        "address" => "Jl Raya Industri Kawasan Industri Kroncong Bl A/6 Kademangan, Serpong Tangerang 15313 Banten",
        "email" => "iyan.nurahadian@shark.co.id",
        "phone" => "021 5903411",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT.Anggun Makmur Energy",
        "address" => "Cbd Pluit Blok S no 2 Jl.Pluit Selatan raya Jakarta Utara",
        "email" => "cing_ame@yahoo.com",
        "phone" => "021 66672512",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT NUSANTARA TURBIN DAN PROPULSI",
        "address" => "Jalan Padjajaran No 154 (KP IV), Bandung",
        "email" => "setdir@umcntp.co.id",
        "phone" => "0226032031",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT. Tugu Reasuransi Indonesia",
        "address" => "Jl. Raden Saleh Raya No.50, RT.1/RW.2, Cikini, Menteng, Kota Jakarta Pusat",
        "email" => "hrd@tugu-re.com",
        "phone" => "021 3103952",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "aCommerce Indonesia",
        "address" => "Sahid sudirman center lt 17 a Jl jend sudirman no 86 Jakarta pusat",
        "email" => "elsa.rizkita@acommerce.asia",
        "phone" => "021 29563389",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Adam Khoo Learning Technologies Group",
        "address" => "Wisma 46 Kota BNI, lantai 2 Jl. Jendral Sudirman Kav. 1 Jakarta 10220",
        "email" => "shinta@akltg.com",
        "phone" => "021 574 7511",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT. Jurong Engineering Lestari",
        "address" => "Maspion Plaza lt.10 Jl. Gunung Sahari kav.18 Jakarta Utara 14420",
        "email" => "mutiara.destiani@ptjel.com",
        "phone" => "021 64701178",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT. Metakom Inti Perkasa",
        "address" => "Perkantoran Prisma Kedoya Plaza Blok D No. 11 Jl. Raya Perjuangan, Kebon Jeruk, Jakarta Barat – Indonesia",
        "email" => "titik@metakomiperkasa.com",
        "phone" => "021 531 0504",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT.Lantera Karya Aditama",
        "address" => "Ruko Cempaka Putih Tengah I No 5A-B Cempaka Putih Timur Jakarta",
        "email" => "lantera@cbn.net.id",
        "phone" => "021 42802420 ext. 203",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT. Control Systems Arena Para Nusa",
        "address" => "Jl. Ampera Raya 9-10 Ragunan, Pasar Minggu Jakarta Selatan",
        "email" => "yulianti_e@yahoo.co.id",
        "phone" => "021 7807881",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Ardaya Loka Konstruksi (Alkon)",
        "address" => "gading kirana timur blok A11 no. 11 kelapa gading",
        "email" => "saminto@alkonusa.net",
        "phone" => "021 4535118",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Austindo Nusantara  jaya Tbk",
        "address" => "Menara BTPN lantai 40 jl.Dr ide anak agung gde Agung kav 5.5 - 5.6 kawasan mega kuningan jakarta",
        "email" => "Elya.Krisnia@anj-group.com",
        "phone" => "021 29651777",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT testing",
        "address" => "jalan kulorungun barat daya no 6",
        "email" => "testing@mail.com",
        "phone" => "0812819y2312",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 6,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT BNI life insurance",
        "address" => "BNI Life Insurance, Centennial Tower Lt 10 Jl.  Gatot Subroto kav 24-25",
        "email" => "care@bni-life.co.id",
        "phone" => "021 29539999",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "Traveloka (PT Trinusa Travelindo)",
        "address" => "Wisma 77 Tower 2, 21th Floor, Jl. S. Parman Kav 77, Jakarta 11410, Indonesia",
        "email" => "andriyani@traveloka.com",
        "phone" => "021 2977-5800 ext. 154)",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "Kemenristekdikti",
        "address" => "Kementerian riset teknologi dan pendidikan tinggi Gedung D lantai 9 biro hukum dan organisasi Jl pintu 1 senayan jakpus",
        "email" => "iskandar.kan92@gmail.com",
        "phone" => "0859-2076-0070",
        "customer_category_id" => 1,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT DATINDO INFONET PRIMA",
        "address" => "Menara Kadin Indonesia, 12th Fl. Unit A-B,  Jl.HR.Rasuna Said Block X5 Kav 2-3 Jakarta 12950",
        "email" => "ina@datindo.co.id",
        "phone" => "05790 3635",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Kaldu Sari Nabati Indonesia",
        "address" => "PT Kaldu Sari Nabati Indonesia  Jl Soekarno Hatta 112, Bandung",
        "email" => "purchasing_service@nabatisnack.co.id",
        "phone" => "022-6000666",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT SOLUSI GLOBAL MANDIRI",
        "address" => "Pt. Solusi global mandiri  Ruko graha mas pemuda blok AD no. 23 lt.4, jln pemuda - pulogadung Jakarta timur 13220",
        "email" => "rosita@maxi.co.id",
        "phone" => "021 4712489",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT. Landmark",
        "address" => "Pt.Halliburton Kawasan Industri &   Pergudangan Taman Tekno Sektor XI Blok D No.1 Kec.Setu Kel.Setu Tangerang Selatan-Banten 15314",
        "email" => "vera.febriyanti@halliburton.com",
        "phone" => "021 78546602",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT ASTRA AGRO LESTARI Tbk",
        "address" => "Jln Puloayang Raya blok OR I Kawasan Industri Pulogadung, Jakarta 13930",
        "email" => "dian@astra-agro.co.id",
        "phone" => "021 4616555",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT TUV NORD Indonesia",
        "address" => "PT TUV NORD Indonesia, Jln TB. Simatupang, Perkantoran Hijau Arkadia, Kebagusan, Tower F, Lt.6 , Kav.88, Jakarta Selatan, 12520",
        "email" => "drahayu@tuv-nord.com",
        "phone" => "021 7883 7338 ext. 215",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Sulawesi Cahaya",
        "address" => "equity tower lantai 28 suite G Jalan Jendral Sudirman Kav.52-53 RT.5, RT.5/RW.3, Senayan, Kby. Baru Jakarta Selatan",
        "email" => "catharine.taungke@jnpartners.co.id",
        "phone" => "0821-2641-9287",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Teka P",
        "address" => "PT. Teka P&T International  Gedung Kantor Taman A9 unit B Lt. 1, 2, 3 Jl. DR. Ide Anak Agung Gde Agung Lot.8.9/A9 Kawasan Mega",
        "email" => "anto@teka.co.id",
        "phone" => "021 576 2272",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT.Surya Rasa Loka Jaya",
        "address" => "Jl Telesonic no 9 , bitung tangerang 15810",
        "email" => "srlj2015@gmail.com",
        "phone" => "021 59307372",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Kresna Investa Futures",
        "address" => "Jl. Jend. Sudirman Kav. 52-53, Jl. Jend. Sudirman No.Kav 52-53, RT.5/RW.1, Senayan, Kec. Kby. Baru, Kota Jakarta Selatan",
        "email" => "prista.kresna@gmail.com",
        "phone" => "0821-8361-6055",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT World Index Investment",
        "address" => "Kingsland Tower (tower C), lantai 3, 18 Parc Place SCBD Jl. Jend. Sudirman kav. 52-53 Jakarta 12190",
        "email" => "worldindex@gmail.com",
        "phone" => "021 5155 715",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT acer indonesia",
        "address" => "The Plaza Office Tower 42nd floor Jl. MH Thamrin Kav 28-30 Jakarta Pusat 10350",
        "email" => "ain.reception@acer.com",
        "phone" => "021 2992-2345",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "PT Bank ICBC Indonesia",
        "address" => "The City Tower 32nd Floor Jl. MH. Thamrin No. 81",
        "email" => "shindy_tan@ina.icbc.com.cn",
        "phone" => "02355 6000",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "Rudolph",
        "address" => "Kawasan Industrial Jababeka, Jl. Jababeka VII B Blok K No. 2 F,G,H, Cikarang Selatan, Wangunharja, Cikarang Utara, Bekasi, Jawa Barat 17530",
        "email" => "noemail@gmail.com",
        "phone" => "0812-8622-2922",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Barindo",
        "address" => "Green Lake City Rukan Centra Niaga Blok J No. 7 Duri Kosambi - Jakarta Barat",
        "email" => "xxx@gmal.com",
        "phone" => "0812-9113-4078",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Glenindo",
        "address" => "komp.perkantoran Taman Meruya blok M.81 kembangan.Jakarta Barat",
        "email" => "asd@gmail.com",
        "phone" => "0856-7880-538",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Tradition indonesia",
        "address" => "Gedung Mayapada Tower 2 Lt. 6-01",
        "email" => "apaaja@gmail.com",
        "phone" => "5460011",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Graha Bumi Hijau",
        "address" => "Gedung Kompas Gramedia Lt. 2-3 Jl.Kerajinan No. 3-7, Kel. Krukut Kec.Tamansari Jakarta Barat 11140",
        "email" => "info@tessatissue.com",
        "phone" => "021 6320123",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "DBL Indonesia",
        "address" => "Graha Pena Building 20th Floor Jl. A. Yani 88 Surabaya, East Java, Indonesia",
        "email" => "dyahpramm@gmail.com",
        "phone" => "031 820 2195",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "Bank bjb CABANG DAAN MOGOT",
        "address" => "komp. Perumahan Daan Mogot baru blok KJE No 9 Kota Jakarta barat",
        "email" => "anurmuttaqin@bankbjb.co.id",
        "phone" => "021 29029091",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "PT.Mitsubishi Krama Yudha Motors & Manufacturing",
        "address" => "Jl Raya Bekasi Km 21 Kel Rawaterate Kec Cakung Jakarta Timur",
        "email" => "cch_stp@ptmkm.co.id",
        "phone" => "021 4602908",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Bank Negara Indonesia",
        "address" => "Bni KC Tanjung Priok Jl. Samping stasiun no.1 tanjung priok, jakarta utara",
        "email" => "elfachilyatulm@gmail.com",
        "phone" => "021 43931891",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "BRI International",
        "address" => "Gedung BRI 1. Jl. Jendral Sudirman Kav.44-46",
        "email" => "nomail@gmail.com",
        "phone" => "0856-4375-7755",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT BIOSAINS MEDIKA INDONESIA",
        "address" => "jl andara no 14 Pondok labu Cilandak Jakarta Selatan",
        "email" => "info@biosm-indonesia.com",
        "phone" => "021 29125731",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 21,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "Avila",
        "address" => "Reni Jaya",
        "email" => "avila@gmail.com",
        "phone" => "0241421412",
        "customer_category_id" => 1,
        "uid" => uniqid(),
        "user_id" => 4,
        ]);
        
        Customer::create([
        "is_vip" => 1,
        "name" => "Testing1",
        "address" => "Green garden diatas domino",
        "email" => "testing@gmail.com",
        "phone" => "371289371289379",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Intiland Development Tbk.",
        "address" => "Intiland Tower, Penthouse floor Jl. Jend. Sudirman 32, Jakarta",
        "email" => "poppy.wulandhari@intiland.com",
        "phone" => "5701912",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT. Airlines GSA Indonesia",
        "address" => "Jl. Jend. Sudirman Kav. 9 Gelora Tanah Abang Jakarta Pusat DKI Jakarta, RT.1/RW.3, Gelora, Kota Jakarta Pusat",
        "email" => "gada@gmail.com",
        "phone" => "0815-9114-718",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Multistrada arah sarana Tbk",
        "address" => "jl. raya lemahabang km.58,3 desa karang sari, cikarang timur, bekasi",
        "email" => "corsec@multistrada.co.id",
        "phone" => "021 891 40333",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "Fortius Group",
        "address" => "Fortius Group, gd. Menara sudirman lt.23, jl. Jend. Sudirman kav.60 jakarta",
        "email" => "ali_dumai@yahoo.co.id",
        "phone" => "0818-954-814",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 15,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "P.T. Ogawa Indonesia",
        "address" => "kawasan industri KIIC Lot A-8A Karawang",
        "email" => "pga2@ogawa-ogi.net",
        "phone" => "0812-8505-0131",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT pos logistik indonesia",
        "address" => "Gedung Pos Ibukota, Lantai 4  Jl. Lapangan Banteng Utara No.1  Jakarta Pusat 10710",
        "email" => "andri.suhendri@poslogistics.co.id",
        "phone" => "021 34832552",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "Pt. Bosnet distribution indonesia",
        "address" => "Jl. Tebet Barat Dalam Raya No.82, RT.17/RW.6, Tebet Bar., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12810",
        "email" => "xxx@gmail.com",
        "phone" => "0818-0810-4317",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT.Tiga badak gemilang & PT.Markindo catur mitra",
        "address" => "Petir, Kec. Cipondoh, Kota Tangerang, Banten 15140",
        "email" => "financetbg15@gmail.com",
        "phone" => "0878-7805-3537",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "Transavia Otomasi",
        "address" => "Graha Paramita, 2nd Floor Jl. Denpasar Raya Blok D2 Kav. 8 Kuningan, RT.7/RW.4, Kuningan, Karet Kuningan, Jakarta, Daerah Khusus Ibukota Jakarta ,12940",
        "email" => "top@transaviaotomasi.com",
        "phone" => "021 2526061",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT. Siemens Indonesia",
        "address" => "Arkadia Office Park Tower F, Level 18  Jalan T.B. Simatupang Kav. 88 Jakarta 12520, Indonesia",
        "email" => "rini.chairul@siemens.com",
        "phone" => "021 24555100",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Barokah Perkasa Group",
        "address" => "Altira Business Tower 19th Floor, Jl. Yos Sudarso Kav 85, RT.6/RW.11, Sunter Agung, Tj. Priok, Kota Jkt Utara",
        "email" => "aaa@gmail.com",
        "phone" => "0812-1076-6604",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT. Powerindo Prima Perkasa",
        "address" => "JL. Raya Siliwangi Kel. Alam Kec. Jatiuwung. Tangerang, Banten",
        "email" => "nomaill@gmail.com",
        "phone" => "0838-9876-4968",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 16,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT. MEDIA NUSANTARA CITRA TBK",
        "address" => "mnc tower lt.24 jl. kebon sirih kav. 17-19 menteng jakarta pusat",
        "email" => "corsec.mncholding@mncgroup.com",
        "phone" => "0858-8025-8705",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT staco Graha",
        "address" => "Wisma Staco Graha lt 11 Jl Casablanca Kav 18 Jakarta Selatan 12870",
        "email" => "Stacograha@gmail.com",
        "phone" => "021 8317113",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Marugo Rubber Indonesia",
        "address" => "Jl. Harapan VII lot LL-6 kawasan industri KIIC,  sirnabaya telukjambe timur, karawang",
        "email" => "marugo@gmail.com",
        "phone" => "0267-8456871",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT SGMW Motor Indonesia",
        "address" => "Kawasan Greenland International Industrial Center (GIIC) Blok BA No.1, Kota Deltamas, Sukamahi, Cikarang Pusat, Kab. Bekasi, Jawa Barat, Indonesia ,17530",
        "email" => "fiba.faravadya@sgmw.co.id",
        "phone" => "0822-1313-1654",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 17,
        ]);
        
        Customer::create([
        "is_vip" => 0,
        "name" => "PT Titan Infra Energy Group",
        "address" => "Graha Anabatic, Jl. Scientia Boulevard Kav. U2, Summarecon Serpong, Tangerang, Banten 15811",
        "email" => "info@titaninfra.com",
        "phone" => "021 80636888",
        "customer_category_id" => 2,
        "uid" => uniqid(),
        "user_id" => 18,
        ]);
    }
}
