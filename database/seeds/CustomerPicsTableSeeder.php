<?php

use Illuminate\Database\Seeder;
use App\Customer;
use App\CustomerPic;

class CustomerPicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomerPic::create([
        "pic_id" =>	1,
        "customer_id" => Customer::where("email", "prihatin.junianto@hsbc.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	2,
        "customer_id" => Customer::where("email", "eviyenty@aia.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	3,
        "customer_id" => Customer::where("email", "rita.susanto@multipolar.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	4,
        "customer_id" => Customer::where("email", "asafari@bukitasam.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	5,
        "customer_id" => Customer::where("email", "zulfa_assf@danareksa.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	6,
        "customer_id" => Customer::where("email", "rosa@kiranamegatara.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	8,
        "customer_id" => Customer::where("email", "pungky.dwi@hakuhodo.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	9,
        "customer_id" => Customer::where("email", "rhandayani@tugu.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	13,
        "customer_id" => Customer::where("email", "alicia.putri@id.piaggio.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	14,
        "customer_id" => Customer::where("email", "ppi.info@ptppi.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	15,
        "customer_id" => Customer::where("email", "purchasing@hint-interior.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	16,
        "customer_id" => Customer::where("email", "ketty@kiranamegatara.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	18,
        "customer_id" => Customer::where("email", "niken.wulandari@mnc-insurance.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	20,
        "customer_id" => Customer::where("email", "deffie.anggarany@orica.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	21,
        "customer_id" => Customer::where("email", "avni.h@lspr.edu")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	22,
        "customer_id" => Customer::where("email", "tikakartika.n@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	23,
        "customer_id" => Customer::where("email", "chowafati@sterling-team.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	24,
        "customer_id" => Customer::where("email", "gapmmi@cbn.net.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	25,
        "customer_id" => Customer::where("email", "yuko.nagahama@sankyu.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	26,
        "customer_id" => Customer::where("email", "fortun.septiasih@ktb.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	29,
        "customer_id" => Customer::where("email", "xoxoxo@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	30,
        "customer_id" => Customer::where("email", "siti.alfiah@airyrooms.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	31,
        "customer_id" => Customer::where("email", "Maya.liliana@sampoernakayoe.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	33,
        "customer_id" => Customer::where("email", "info@satriagroup.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	34,
        "customer_id" => Customer::where("email", "xoxox@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	35,
        "customer_id" => Customer::where("email", "anom.tunjung@mitsubishi-motors.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	38,
        "customer_id" => Customer::where("email", "syahrul.munajab@elevenia.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	39,
        "customer_id" => Customer::where("email", "dilla@katadata.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	41,
        "customer_id" => Customer::where("email", "cs@tempo.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	42,
        "customer_id" => Customer::where("email", "dhini@ciptadimensi.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	43,
        "customer_id" => Customer::where("email", "ika@targetmedia.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	44,
        "customer_id" => Customer::where("email", "liilana.liliana@oiltanking.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	45,
        "customer_id" => Customer::where("email", "mellia.mardhianty.gardika@mmki.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	47,
        "customer_id" => Customer::where("email", "corpsec@ptppa.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	48,
        "customer_id" => Customer::where("email", "purchasing@geoservices.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	49,
        "customer_id" => Customer::where("email", "dinda@victoriabank.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	50,
        "customer_id" => Customer::where("email", "squeenna@chec.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	51,
        "customer_id" => Customer::where("email", "wahyuni@aymp.law")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	52,
        "customer_id" => Customer::where("email", "ruth.novida@ktb.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	87,
        "customer_id" => Customer::where("email", "soleha@titaninfra.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	89,
        "customer_id" => Customer::where("email", "accounting@petra.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	141,
        "customer_id" => Customer::where("email", "rahayu.nurantari@fwd.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	144,
        "customer_id" => Customer::where("email", "erly@binaadidaya.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	147,
        "customer_id" => Customer::where("email", "customer.service@enesis.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	150,
        "customer_id" => Customer::where("email", "hr@ancorair.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	163,
        "customer_id" => Customer::where("email", "chresent@aswata.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	170,
        "customer_id" => Customer::where("email", "sisca@talitaresort.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	175,
        "customer_id" => Customer::where("email", "hrd@geosistem.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	176,
        "customer_id" => Customer::where("email", "corporate@ptbbi.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	277,
        "customer_id" => Customer::where("email", "dini.amalia@i-3.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	278,
        "customer_id" => Customer::where("email", "bnm@bercaniaga.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	343,
        "customer_id" => Customer::where("email", "desi_hihihi@yahoo.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	344,
        "customer_id" => Customer::where("email", "marcom@jayaproteksindo.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	345,
        "customer_id" => Customer::where("email", "sales@cascadiant.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	355,
        "customer_id" => Customer::where("email", "kurniadi@surya-energi.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	356,
        "customer_id" => Customer::where("email", "Nunung.Nurhayati@omnicommediagroup.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	376,
        "customer_id" => Customer::where("email", "info@jetsbrokers.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	377,
        "customer_id" => Customer::where("email", "nnauli@aio.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	378,
        "customer_id" => Customer::where("email", "info@zamasco.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	402,
        "customer_id" => Customer::where("email", "info@dumas.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	404,
        "customer_id" => Customer::where("email", "ayunda.augustten@glencore.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	405,
        "customer_id" => Customer::where("email", "wealthy.sejahtera@wealthy.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	406,
        "customer_id" => Customer::where("email", "hr.info@nobubank.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	417,
        "customer_id" => Customer::where("email", "center@soemath.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	418,
        "customer_id" => Customer::where("email", "Retno.sujati@pertamina.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	419,
        "customer_id" => Customer::where("email", "sysmex@sysmex.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	420,
        "customer_id" => Customer::where("email", "evy@adyabina.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	421,
        "customer_id" => Customer::where("email", "Surya.Anna@vistra.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	422,
        "customer_id" => Customer::where("email", "eva@kanaya.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	423,
        "customer_id" => Customer::where("email", "diana.majdina@commlife.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	424,
        "customer_id" => Customer::where("email", "verita@nec.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	426,
        "customer_id" => Customer::where("email", "mega.ad@muliamandiri.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	427,
        "customer_id" => Customer::where("email", "Winy.tam@triarth.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	428,
        "customer_id" => Customer::where("email", "silvea@blt.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	430,
        "customer_id" => Customer::where("email", "iwan.nuryadi@krakatausteel.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	431,
        "customer_id" => Customer::where("email", "info@goodrichglobal.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	432,
        "customer_id" => Customer::where("email", "procurement@pcmcable.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	433,
        "customer_id" => Customer::where("email", "sumirah@kmkonline.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	440,
        "customer_id" => Customer::where("email", "finance@ptmanikam.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	441,
        "customer_id" => Customer::where("email", "hilda.ayuanita@ibjverena.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	442,
        "customer_id" => Customer::where("email", "angel@agungrent.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	443,
        "customer_id" => Customer::where("email", "marthalia.vigita@temasline.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	445,
        "customer_id" => Customer::where("email", "sssimamora@jfx.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	447,
        "customer_id" => Customer::where("email", "azizah.juslynflorist@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	481,
        "customer_id" => Customer::where("email", "dessy.widrastya@omg-indo.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	482,
        "customer_id" => Customer::where("email", "cris@pointer.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	483,
        "customer_id" => Customer::where("email", "Istania.LELYANA@accor.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	484,
        "customer_id" => Customer::where("email", "sisca.riana@aymp.law")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	494,
        "customer_id" => Customer::where("email", "sinthia@sinarantjol.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	495,
        "customer_id" => Customer::where("email", "silviaislamey77@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	497,
        "customer_id" => Customer::where("email", "dinda.rogahang@mncgroup.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	514,
        "customer_id" => Customer::where("email", "Roro.Amaliah@colliers.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	541,
        "customer_id" => Customer::where("email", "hilda.s@nissan.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	542,
        "customer_id" => Customer::where("email", "afifah.harahap@iconpln.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	543,
        "customer_id" => Customer::where("email", "riska@indotruck-utama.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	544,
        "customer_id" => Customer::where("email", "Hardianti.Wilujeng@prudential.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	545,
        "customer_id" => Customer::where("email", "Fita.Fitria@prudential.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	546,
        "customer_id" => Customer::where("email", "adm@desjakarta.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	547,
        "customer_id" => Customer::where("email", "Wiwiek.Riswati@astratel.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	548,
        "customer_id" => Customer::where("email", "rusnita@chemstationasia.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	565,
        "customer_id" => Customer::where("email", "Marfie.Desideratus@swatchgroup.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	569,
        "customer_id" => Customer::where("email", "tri_hrd@muliagroup.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	571,
        "customer_id" => Customer::where("email", "gita.sulviana@trafoindonesia.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	572,
        "customer_id" => Customer::where("email", "yuliana@pon.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	575,
        "customer_id" => Customer::where("email", "lina@isargas.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	576,
        "customer_id" => Customer::where("email", "sekjti@yahoo.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	579,
        "customer_id" => Customer::where("email", "Tiara.Pangesti@daikin.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	582,
        "customer_id" => Customer::where("email", "yusak.wibowo@mgholidaygroup.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	585,
        "customer_id" => Customer::where("email", "Rkartika@tubanpetro.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	586,
        "customer_id" => Customer::where("email", "internal_affair@orix.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	587,
        "customer_id" => Customer::where("email", "DEWI_SULISTIYA@ykk.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	588,
        "customer_id" => Customer::where("email", "Merri.Rochayati@sony.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	628,
        "customer_id" => Customer::where("email", "yuliana.yoo@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	644,
        "customer_id" => Customer::where("email", "vimalabianca@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	646,
        "customer_id" => Customer::where("email", "h.meutia@baminternational.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	647,
        "customer_id" => Customer::where("email", "dessy.andini@jresources.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	649,
        "customer_id" => Customer::where("email", "Soraya.Kurniawan@mullenlowe.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	651,
        "customer_id" => Customer::where("email", "eliana.rachman@rumah123.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	652,
        "customer_id" => Customer::where("email", "enbdindo@yahoo.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	653,
        "customer_id" => Customer::where("email", "aga.office@andilaw.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	654,
        "customer_id" => Customer::where("email", "widiasworo.ambarsari@okbank.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	657,
        "customer_id" => Customer::where("email", "wulandika.putri@pruftechnik.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	658,
        "customer_id" => Customer::where("email", "eka.nurjanah@ap.ntt.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	659,
        "customer_id" => Customer::where("email", "gap-import2@gaplogistics.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	662,
        "customer_id" => Customer::where("email", "phalim@rbt.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	663,
        "customer_id" => Customer::where("email", "olla@rbt.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	665,
        "customer_id" => Customer::where("email", "grein@indo.net.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	667,
        "customer_id" => Customer::where("email", "ettyn@softexindonesia.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	705,
        "customer_id" => Customer::where("email", "anwar@tugumandiri.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	706,
        "customer_id" => Customer::where("email", "anas.risyadi@tap-agri.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	708,
        "customer_id" => Customer::where("email", "Cindi.Novia@krones.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	709,
        "customer_id" => Customer::where("email", "iyan.nurahadian@shark.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	710,
        "customer_id" => Customer::where("email", "cing_ame@yahoo.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	711,
        "customer_id" => Customer::where("email", "setdir@umcntp.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	712,
        "customer_id" => Customer::where("email", "hrd@tugu-re.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	713,
        "customer_id" => Customer::where("email", "elsa.rizkita@acommerce.asia")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	714,
        "customer_id" => Customer::where("email", "shinta@akltg.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	716,
        "customer_id" => Customer::where("email", "mutiara.destiani@ptjel.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	717,
        "customer_id" => Customer::where("email", "titik@metakomiperkasa.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	718,
        "customer_id" => Customer::where("email", "lantera@cbn.net.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	719,
        "customer_id" => Customer::where("email", "yulianti_e@yahoo.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	720,
        "customer_id" => Customer::where("email", "saminto@alkonusa.net")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	721,
        "customer_id" => Customer::where("email", "Elya.Krisnia@anj-group.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	722,
        "customer_id" => Customer::where("email", "testing@mail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	798,
        "customer_id" => Customer::where("email", "care@bni-life.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	800,
        "customer_id" => Customer::where("email", "andriyani@traveloka.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	802,
        "customer_id" => Customer::where("email", "iskandar.kan92@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	813,
        "customer_id" => Customer::where("email", "ina@datindo.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	880,
        "customer_id" => Customer::where("email", "purchasing_service@nabatisnack.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	881,
        "customer_id" => Customer::where("email", "rosita@maxi.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	884,
        "customer_id" => Customer::where("email", "vera.febriyanti@halliburton.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	885,
        "customer_id" => Customer::where("email", "dian@astra-agro.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	891,
        "customer_id" => Customer::where("email", "drahayu@tuv-nord.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	892,
        "customer_id" => Customer::where("email", "catharine.taungke@jnpartners.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	894,
        "customer_id" => Customer::where("email", "anto@teka.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	896,
        "customer_id" => Customer::where("email", "srlj2015@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	914,
        "customer_id" => Customer::where("email", "prista.kresna@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	969,
        "customer_id" => Customer::where("email", "worldindex@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	988,
        "customer_id" => Customer::where("email", "ain.reception@acer.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	989,
        "customer_id" => Customer::where("email", "shindy_tan@ina.icbc.com.cn")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	999,
        "customer_id" => Customer::where("email", "noemail@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1032,
        "customer_id" => Customer::where("email", "xxx@gmal.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1033,
        "customer_id" => Customer::where("email", "asd@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1034,
        "customer_id" => Customer::where("email", "apaaja@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1079,
        "customer_id" => Customer::where("email", "info@tessatissue.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1081,
        "customer_id" => Customer::where("email", "dyahpramm@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1083,
        "customer_id" => Customer::where("email", "anurmuttaqin@bankbjb.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1086,
        "customer_id" => Customer::where("email", "cch_stp@ptmkm.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1088,
        "customer_id" => Customer::where("email", "elfachilyatulm@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1154,
        "customer_id" => Customer::where("email", "nomail@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1172,
        "customer_id" => Customer::where("email", "info@biosm-indonesia.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1196,
        "customer_id" => Customer::where("email", "avila@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1197,
        "customer_id" => Customer::where("email", "testing@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1218,
        "customer_id" => Customer::where("email", "poppy.wulandhari@intiland.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1220,
        "customer_id" => Customer::where("email", "gada@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1221,
        "customer_id" => Customer::where("email", "corsec@multistrada.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1266,
        "customer_id" => Customer::where("email", "ali_dumai@yahoo.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1268,
        "customer_id" => Customer::where("email", "pga2@ogawa-ogi.net")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1269,
        "customer_id" => Customer::where("email", "andri.suhendri@poslogistics.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1274,
        "customer_id" => Customer::where("email", "xxx@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1276,
        "customer_id" => Customer::where("email", "financetbg15@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1277,
        "customer_id" => Customer::where("email", "top@transaviaotomasi.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1278,
        "customer_id" => Customer::where("email", "rini.chairul@siemens.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1291,
        "customer_id" => Customer::where("email", "aaa@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1299,
        "customer_id" => Customer::where("email", "nomaill@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1300,
        "customer_id" => Customer::where("email", "corsec.mncholding@mncgroup.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1302,
        "customer_id" => Customer::where("email", "Stacograha@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1303,
        "customer_id" => Customer::where("email", "marugo@gmail.com")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1317,
        "customer_id" => Customer::where("email", "fiba.faravadya@sgmw.co.id")->first()->id,
        ]);
        
        CustomerPic::create([
        "pic_id" =>	1319,
        "customer_id" => Customer::where("email", "info@titaninfra.com")->first()->id,
        ]);
    }
}
