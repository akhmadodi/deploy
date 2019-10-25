<?php

use Illuminate\Database\Seeder;
use App\BankAccount;

class BankAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Rita Susanto",
        "bank" => "CIMB Niaga",
        "account" => "760251740800",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Deffie Anggrainy",
        "bank" => "BCA",
        "account" => "734-0123-969",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "NUNUNG NURHAYATI",
        "bank" => "BCA An Nurhayati",
        "account" => "940592909",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Hilda",
        "bank" => "BNI",
        "account" => "722702147",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Mahfud",
        "bank" => "BNI",
        "account" => "526153461",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Jefry",
        "bank" => "BNI",
        "account" => "1984080773",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Alex",
        "bank" => "BCA",
        "account" => "401082254",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "uus",
        "bank" => "BCA / an. Uus Rusnandar",
        "account" => "6520154777",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Doni",
        "bank" => "BRI a/n Doni Nomeri",
        "account" => "568801010279539",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Mona",
        "bank" => "BCA  a/n.kamaludin or sherlya novensya",
        "account" => "1191129046",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "rika",
        "bank" => "BCA a/n Rohendy",
        "account" => "7770723382",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "rani",
        "bank" => "BCA  a/n Rani Dewi",
        "account" => "8100352347",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "ajat",
        "bank" => "BCA",
        "account" => "6820013938",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "asep",
        "bank" => "BCA  a.n. Asep Anwar Saripudin",
        "account" => "8720261627",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "chens",
        "bank" => "Bca an Sriyanti",
        "account" => "384115540",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "rangga",
        "bank" => "BCA an rangga aditiya",
        "account" => "1341344641",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "tia",
        "bank" => "BCA an. Rachmawati Atmadja",
        "account" => "540111456",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk nanang",
        "bank" => "BCA  a.n.  Nanang kusnandar",
        "account" => "1830752591",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu Fanny",
        "bank" => "BCA a.n Fanny susilowati Sinudarsono",
        "account" => "8985023962",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu Endang",
        "bank" => "Bca a.n Endang Purwaningsih",
        "account" => "600402935",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk agus",
        "bank" => "Bca a.n agus munandar",
        "account" => "2380660256",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu dewi",
        "bank" => "BCA Febe Dewi Purnama Sari",
        "account" => "960887671",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu nini",
        "bank" => "bca an lies hartatik",
        "account" => "3580112675",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu Ratna",
        "bank" => "bca a.n Elisabet ratnawangi",
        "account" => "471144397",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu linda",
        "bank" => "BCA  an Linda Setyawati",
        "account" => "470598158",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk dirno",
        "bank" => "BCA  An: Sudirno",
        "account" => "461401553",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk Andhis",
        "bank" => "BNI  an andhis sujatmo",
        "account" => "380959223",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk Supri",
        "bank" => "BCA a.n  supriyono",
        "account" => "3200546031",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu lilia",
        "bank" => "BCA a/n sie lydia hetty s",
        "account" => "5200171979",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "pak nandang",
        "bank" => "bca  a.n nandang w",
        "account" => "4390624170",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk yongki",
        "bank" => "bca  an yongky kurniawan",
        "account" => "8240277752",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu mega",
        "bank" => "BCA an. Mega Susanti",
        "account" => "884018907",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk miko",
        "bank" => "bca an kukuh handayani",
        "account" => "3180188818",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk agung",
        "bank" => "BCA a/n Agung Hariyadi",
        "account" => "3319886625",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk Dendy",
        "bank" => "BCA  a/n Dandy Aditya Pratama",
        "account" => "113-081-515",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk heri",
        "bank" => "Bca  a/n M.hariyanto",
        "account" => "8640242656",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu hayun",
        "bank" => "Bca a.n hayun p",
        "account" => "1771301351",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu margareth",
        "bank" => "Bca an. Margaret juniaty",
        "account" => "291187888",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk ucok",
        "bank" => "BCA  AN CORNELIS",
        "account" => "7820 254 273",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu rusmiyati",
        "bank" => "BCA atas nama Rusmiyati",
        "account" => "8600316321",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk uut",
        "bank" => "BCA  Mochammad U'ud Z",
        "account" => "2540 495 117",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk candra",
        "bank" => "BCA A/n Candra Surya Utama",
        "account" => "200664060",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu ninik",
        "bank" => "BCA a.n ninik librijanti",
        "account" => "440497187",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu lidya",
        "bank" => "BCA  a.n Lidya soerjo BCA",
        "account" => "2020155011",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk herry",
        "bank" => "Bca a.n selvia chandra tunggal.",
        "account" => "251403529",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu hian",
        "bank" => "BCA a.n Tjan Donny Yohanes",
        "account" => "260732412",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu iin",
        "bank" => "bca a/n theresia n.suryadi",
        "account" => "032-0788111",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu shelly",
        "bank" => "BCA  an Shelly Gunardi",
        "account" => "045.010.9991",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Novi",
        "bank" => "BCA",
        "account" => "585 055 5551",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Aji Nursalam",
        "bank" => "BCA",
        "account" => "5770867543",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu Puspo",
        "bank" => "BCA",
        "account" => "372730160",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu eko",
        "bank" => "BCA a.n Eko Budiarti",
        "account" => "8610412417",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk didik",
        "bank" => "BNI a.n  yoyok puji p",
        "account" => "723110058",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "bapak chepi",
        "bank" => "BCA  atas nama chepi indriansyah",
        "account" => "7770764178",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk Rizky",
        "bank" => "Bca a.n tata sumarta",
        "account" => "8880177614",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu ana",
        "bank" => "BCA a.n Wiwiek fatiana",
        "account" => "2000466410",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu yuni",
        "bank" => "BCA a.n haryono",
        "account" => "150346525",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu surya",
        "bank" => "Bca a.n Sunari",
        "account" => "5740121954",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu Ninik",
        "bank" => "BCA a. n ;ninik setiyowati",
        "account" => "5875088251",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk abdul",
        "bank" => "BRI An. Abdul Rohim noor",
        "account" => "4401009557503",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu siska diana",
        "bank" => "BNI a.n  Siska DIana mengko",
        "account" => "725773364",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk Zarqoni",
        "bank" => "BCA a.n  TITIK ALFAH",
        "account" => "4411162651",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk taufik",
        "bank" => "BCA a.n vebby ersyaputri",
        "account" => "612966239",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu Firna",
        "bank" => "BCA a.n Firna Giafianti",
        "account" => "953476093",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu watinah",
        "bank" => "BCA",
        "account" => "410807041",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu eva",
        "bank" => "Mandiri a.n Eva Tri Andiyanti",
        "account" => "1480011410977",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk kafi",
        "bank" => "BCA  a.n Mukafi Tias Sekardanang",
        "account" => "640626232",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu maria",
        "bank" => "BCA a/n Maria sri lestari",
        "account" => "817 060 1255",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk Rosyid",
        "bank" => "BCA a.n  Mochammad Rosyid",
        "account" => "2390327725",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk sukono",
        "bank" => "BRI a/n SUKONO",
        "account" => "365901029971535",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk husen",
        "bank" => "BCA An husen nurjaman",
        "account" => "2310140760",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu asri",
        "bank" => "BNI a/n Asri Herminawati SIDAURUK",
        "account" => "331197921",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "bapak dwi",
        "bank" => "Mandiri  a/n Dwi jayati purba",
        "account" => "1070007163035",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk mutaqin",
        "bank" => "BRI a/n MUTAKIN",
        "account" => "3659 01 019091 53 1",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu atun",
        "bank" => "BCA  A/n HENDRA BCA",
        "account" => "590360121",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu lina",
        "bank" => "BCA a.n lina purwanti",
        "account" => "177122324",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu indri",
        "bank" => "BNI a,n INDRI NOVINALIA",
        "account" => "494740189",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk sutopo",
        "bank" => "BCA a.n  Sutopo",
        "account" => "2350304510",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Ibu anna",
        "bank" => "Mandiri a.n 149000-3067446",
        "account" => "149000-3067446",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk Yudha",
        "bank" => "BCA a.n Shinta Hari Purnamasari",
        "account" => "1771874539",
        ]);
        
        BankAccount::create([
        "id" => BankAccount::all()->count() == 0 ? 1 : BankAccount::all()->count() + 1,
        "name" => "Bpk tatang",
        "bank" => "BCA A.N Tatang Trireduwanto",
        "account" => "891502311",
        ]);
    }
}
