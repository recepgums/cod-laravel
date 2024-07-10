<?php

namespace Database\Seeders;

use App\Helpers\FestHelper;
use App\Models\City;
use App\Models\District;
use App\Models\Neighborhood;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        if (0) {
            // Şehirleri al
            $festHelper = new FestHelper();
            $provinces = $festHelper->getProvinces();

            foreach ($provinces as $province) {
                $city = City::create([
                    'name' => $province,
                ]);

                $counties = $festHelper->getCountiesByProvinceId($city->id);
                if ($counties !== null) {
                    foreach ($counties as $id => $county) {
                        $county = District::create([
                            'fest_id' => $id,
                            'city_id' => $city->id,
                            'name' => $county
                        ]);

                        $districts = $festHelper->getDistrictByProvinceAndCountyId($city->id, $county->fest_id);

                        if ($districts !=null){
                            foreach ($districts as $id2 => $district) {
                                Neighborhood::create([
                                    'fest_id' => $id2,
                                    'city_id' => $city->id,
                                    'district_id' => $county->fest_id,
                                    'name' => $district,
                                ]);
                            }
                        }else{
                            var_dump($districts,$city->id,$county->fest_id);
                        }
                    }
                }else{
                    var_dump($districts,$city->id,$county,"COUNTIRES YOK@@@");
                }
            }
        } else {
            $sqlPath = database_path('sql/fest_location.sql');
            $sql = File::get($sqlPath);

            // SQL sorgularını çalıştır
            DB::unprepared($sql);

            $sqlPath = database_path('sql/legacies.sql');
            $sql = File::get($sqlPath);

            // SQL sorgularını çalıştır
            DB::unprepared($sql);

            $this->command->info('Veritabanı başarıyla dolduruldu!');
        }

        User::create([
            'name' => 'Test',
            'email' => 'asd@asd.com',
            'password' => 'asdasdasd',
        ]);
    }
}
/*
NULL
int(9)
string(3) "126"
NULL
int(10)
string(3) "148"
NULL
int(20)
string(3) "265"
NULL
int(21)
string(3) "285"
NULL
int(25)
string(3) "327"
NULL
int(26)
string(3) "346"
NULL
int(30)
string(4) "1004"
NULL
int(31)
string(3) "401"
NULL
int(41)
string(3) "575"
NULL
int(41)
string(4) "1002"
NULL
int(44)
string(3) "631"
NULL
int(45)
string(3) "644"
NULL
int(46)
string(3) "660"
NULL
int(47)
string(3) "670"
NULL
int(48)
string(3) "684"
NULL
int(52)
string(3) "725"
NULL
int(55)
string(3) "771"
NULL
int(55)
string(4) "1006"
NULL
int(59)
string(3) "817"
NULL
int(61)
string(3) "845"
NULL
int(63)
string(3) "871"
NULL
int(65)
string(3) "890"
object(stdClass)#5534 (45) {
["38108"]=>
  string(12) "AHMETÇİLER"
["38109"]=>
  string(4) "AKSU"
["38110"]=>
  string(4) "ASAR"
["38111"]=>
  string(8) "ATATÜRK"
["38112"]=>
  string(5) "AYDIN"
["38113"]=>
  string(10) "AYDINYAYLA"
["38114"]=>
  string(5) "BELEN"
["38115"]=>
  string(9) "ÇAYIRCIK"
["38116"]=>
  string(7) "ÇIRNIK"
["38117"]=>
  string(10) "ÇİFTLİK"
["38118"]=>
  string(6) "ÇORAK"
["38119"]=>
  string(4) "DAĞ"
["38120"]=>
  string(5) "DOKUZ"
["38121"]=>
  string(8) "GAZİLER"
["38122"]=>
  string(8) "GELENÖZ"
["38124"]=>
  string(6) "GÜNEY"
["38125"]=>
  string(7) "HEBELER"
["38126"]=>
  string(9) "İĞNELER"
["38127"]=>
  string(15) "İSMAİLÇAYIRI"
["38128"]=>
  string(10) "KARAKİRAZ"
["38129"]=>
  string(8) "KAZAKLAR"
["38130"]=>
  string(10) "KİRSEYANI"
["38132"]=>
  string(8) "KÖSELER"
["38133"]=>
  string(24) "MAREŞAL FEVZİ  ÇAKMAK"
["38134"]=>
  string(10) "MEHMETKÖY"
["38135"]=>
  string(12) "MELEN KIYISI"
["38136"]=>
  string(6) "MENGEN"
["38147"]=>
  string(6) "MERKEZ"
["38149"]=>
  string(10) "ORHANGAZİ"
["38150"]=>
  string(4) "ORTA"
["38151"]=>
  string(8) "PINARCIK"
["38152"]=>
  string(8) "RESULLER"
["38153"]=>
  string(8) "SARIKAYA"
["38154"]=>
  string(7) "SETLİK"
["38155"]=>
  string(6) "ŞABAN"
["38156"]=>
  string(9) "ŞABANLAR"
["38157"]=>
  string(10) "ŞERENALTI"
["38158"]=>
  string(7) "TUĞRUL"
["38159"]=>
  string(10) "TURNACILAR"
["38160"]=>
  string(8) "VAYISLAR"
["38161"]=>
  string(9) "YAĞCILAR"
["38162"]=>
  string(6) "YAPLAR"
["38163"]=>
  string(9) "YAYLATEPE"
["38164"]=>
  string(12) "YOĞUNPELİT"
["38165"]=>
  string(17) "YUKARI AKÇAÖREN"
}
int(82)
object(App\Models\District)#4296 (30) {
["connection":protected]=>
  string(5) "mysql"
["table":protected]=>
  string(9) "districts"
["primaryKey":protected]=>
  string(2) "id"
["keyType":protected]=>
  string(3) "int"
["incrementing"]=>
  bool(true)
  ["with":protected]=>
  array(0) {
}
  ["withCount":protected]=>
  array(0) {
}
  ["preventsLazyLoading"]=>
  bool(false)
  ["perPage":protected]=>
  int(15)
  ["exists"]=>
  bool(true)
  ["wasRecentlyCreated"]=>
  bool(true)
  ["escapeWhenCastingToString":protected]=>
  bool(false)
  ["attributes":protected]=>
  array(4) {
    ["fest_id"]=>
    string(3) "999"
    ["city_id"]=>
    int(81)
    ["name"]=>
    string(8) "YIĞILCA"
    ["id"]=>
    int(0)
  }
  ["original":protected]=>
  array(4) {
    ["fest_id"]=>
    string(3) "999"
    ["city_id"]=>
    int(81)
    ["name"]=>
    string(8) "YIĞILCA"
    ["id"]=>
    int(0)
  }
  ["changes":protected]=>
  array(0) {
}
  ["casts":protected]=>
  array(0) {
}
  ["classCastCache":protected]=>
  array(0) {
}
  ["attributeCastCache":protected]=>
  array(0) {
}
  ["dateFormat":protected]=>
  NULL
  ["appends":protected]=>
  array(0) {
}
  ["dispatchesEvents":protected]=>
  array(0) {
}
  ["observables":protected]=>
  array(0) {
}
  ["relations":protected]=>
  array(0) {
}
  ["touches":protected]=>
  array(0) {
}
  ["timestamps"]=>
  bool(false)
  ["usesUniqueIds"]=>
  bool(false)
  ["hidden":protected]=>
  array(0) {
}
  ["visible":protected]=>
  array(0) {
}
  ["fillable":protected]=>
  array(3) {
    [0]=>
    string(7) "fest_id"
    [1]=>
    string(4) "name"
    [2]=>
    string(7) "city_id"
  }
  ["guarded":protected]=>
  array(1) {
    [0]=>
    string(1) "*"
  }
}
string(16) "COUNTIRES YOK@@@"*/
