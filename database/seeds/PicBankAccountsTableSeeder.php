<?php

use Illuminate\Database\Seeder;
use App\BankAccount;
use App\PicBankAccount;

class PicBankAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	3,
        "bank_account_id" => BankAccount::where("account", "760251740800")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	20,
        "bank_account_id" => BankAccount::where("account", "734-0123-969")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	356,
        "bank_account_id" => BankAccount::where("account", "940592909")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	441,
        "bank_account_id" => BankAccount::where("account", "722702147")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	564,
        "bank_account_id" => BankAccount::where("account", "526153461")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	566,
        "bank_account_id" => BankAccount::where("account", "1984080773")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	567,
        "bank_account_id" => BankAccount::where("account", "401082254")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	573,
        "bank_account_id" => BankAccount::where("account", "6520154777")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	574,
        "bank_account_id" => BankAccount::where("account", "568801010279539")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	578,
        "bank_account_id" => BankAccount::where("account", "8610412417")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	581,
        "bank_account_id" => BankAccount::where("account", "1191129046")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	584,
        "bank_account_id" => BankAccount::where("account", "7770723382")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	596,
        "bank_account_id" => BankAccount::where("account", "8100352347")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	597,
        "bank_account_id" => BankAccount::where("account", "6820013938")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	598,
        "bank_account_id" => BankAccount::where("account", "8720261627")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	599,
        "bank_account_id" => BankAccount::where("account", "384115540")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	601,
        "bank_account_id" => BankAccount::where("account", "1341344641")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	602,
        "bank_account_id" => BankAccount::where("account", "540111456")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	603,
        "bank_account_id" => BankAccount::where("account", "1830752591")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	604,
        "bank_account_id" => BankAccount::where("account", "8985023962")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	605,
        "bank_account_id" => BankAccount::where("account", "600402935")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	606,
        "bank_account_id" => BankAccount::where("account", "2380660256")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	607,
        "bank_account_id" => BankAccount::where("account", "960887671")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	608,
        "bank_account_id" => BankAccount::where("account", "3580112675")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	609,
        "bank_account_id" => BankAccount::where("account", "471144397")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	610,
        "bank_account_id" => BankAccount::where("account", "470598158")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	611,
        "bank_account_id" => BankAccount::where("account", "461401553")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	612,
        "bank_account_id" => BankAccount::where("account", "2390327725")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	613,
        "bank_account_id" => BankAccount::where("account", "380959223")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	614,
        "bank_account_id" => BankAccount::where("account", "3200546031")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	629,
        "bank_account_id" => BankAccount::where("account", "4390624170")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	645,
        "bank_account_id" => BankAccount::where("account", "5200171979")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	648,
        "bank_account_id" => BankAccount::where("account", "4390624170")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	656,
        "bank_account_id" => BankAccount::where("account", "8240277752")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	660,
        "bank_account_id" => BankAccount::where("account", "884018907")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	664,
        "bank_account_id" => BankAccount::where("account", "3180188818")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	666,
        "bank_account_id" => BankAccount::where("account", "3319886625")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	668,
        "bank_account_id" => BankAccount::where("account", "113-081-515")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	669,
        "bank_account_id" => BankAccount::where("account", "8640242656")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	670,
        "bank_account_id" => BankAccount::where("account", "1771301351")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	671,
        "bank_account_id" => BankAccount::where("account", "891502311")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	672,
        "bank_account_id" => BankAccount::where("account", "291187888")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	673,
        "bank_account_id" => BankAccount::where("account", "7820 254 273")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	674,
        "bank_account_id" => BankAccount::where("account", "8600316321")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	675,
        "bank_account_id" => BankAccount::where("account", "2540 495 117")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	698,
        "bank_account_id" => BankAccount::where("account", "200664060")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	699,
        "bank_account_id" => BankAccount::where("account", "440497187")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	700,
        "bank_account_id" => BankAccount::where("account", "2020155011")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	701,
        "bank_account_id" => BankAccount::where("account", "251403529")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	702,
        "bank_account_id" => BankAccount::where("account", "260732412")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	703,
        "bank_account_id" => BankAccount::where("account", "032-0788111")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	704,
        "bank_account_id" => BankAccount::where("account", "045.010.9991")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	726,
        "bank_account_id" => BankAccount::where("account", "585 055 5551")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	774,
        "bank_account_id" => BankAccount::where("account", "5770867543")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	795,
        "bank_account_id" => BankAccount::where("account", "372730160")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	796,
        "bank_account_id" => BankAccount::where("account", "8610412417")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	797,
        "bank_account_id" => BankAccount::where("account", "723110058")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	799,
        "bank_account_id" => BankAccount::where("account", "7770764178")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	803,
        "bank_account_id" => BankAccount::where("account", "8880177614")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	811,
        "bank_account_id" => BankAccount::where("account", "2000466410")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	812,
        "bank_account_id" => BankAccount::where("account", "150346525")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	893,
        "bank_account_id" => BankAccount::where("account", "5740121954")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	909,
        "bank_account_id" => BankAccount::where("account", "5875088251")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	910,
        "bank_account_id" => BankAccount::where("account", "4401009557503")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	911,
        "bank_account_id" => BankAccount::where("account", "725773364")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	913,
        "bank_account_id" => BankAccount::where("account", "4411162651")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	1035,
        "bank_account_id" => BankAccount::where("account", "612966239")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	1087,
        "bank_account_id" => BankAccount::where("account", "953476093")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	1222,
        "bank_account_id" => BankAccount::where("account", "410807041")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	1223,
        "bank_account_id" => BankAccount::where("account", "1480011410977")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	1224,
        "bank_account_id" => BankAccount::where("account", "640626232")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	1267,
        "bank_account_id" => BankAccount::where("account", "817 060 1255")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	1275,
        "bank_account_id" => BankAccount::where("account", "2390327725")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	1279,
        "bank_account_id" => BankAccount::where("account", "365901029971535")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	1280,
        "bank_account_id" => BankAccount::where("account", "2310140760")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	1281,
        "bank_account_id" => BankAccount::where("account", "331197921")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	1282,
        "bank_account_id" => BankAccount::where("account", "1070007163035")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	1292,
        "bank_account_id" => BankAccount::where("account", "3659 01 019091 53 1")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	1293,
        "bank_account_id" => BankAccount::where("account", "590360121")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	1301,
        "bank_account_id" => BankAccount::where("account", "177122324")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	1304,
        "bank_account_id" => BankAccount::where("account", "494740189")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	1316,
        "bank_account_id" => BankAccount::where("account", "2350304510")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	1318,
        "bank_account_id" => BankAccount::where("account", "149000-3067446")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	1320,
        "bank_account_id" => BankAccount::where("account", "1771874539")->first()->id,
        ]);
        
        PicBankAccount::create([
        "id" => PicBankAccount::all()->count() == 0 ? 1 : PicBankAccount::all()->count() + 1,
        "pic_id" =>	1321,
        "bank_account_id" => BankAccount::where("account", "891502311")->first()->id,
        ]);
    }
}
