<?php

namespace Database\Seeders;

use App\Helpers\FestHelper;
use App\Models\City;
use App\Models\Comment;
use App\Models\District;
use App\Models\Neighborhood;
use App\Models\Product;
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

                        if ($districts != null) {
                            foreach ($districts as $id2 => $district) {
                                Neighborhood::create([
                                    'fest_id' => $id2,
                                    'city_id' => $city->id,
                                    'district_id' => $county->fest_id,
                                    'name' => $district,
                                ]);
                            }
                        } else {
                            var_dump($districts, $city->id, $county->fest_id);
                        }
                    }
                } else {
                    var_dump($districts, $city->id, $county, "COUNTIRES YOK@@@");
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

        $product = Product::create([
            'name' => 'Mıknatıslı Tak-Çıkar Led Lamba',
            'slug' => 'miknatisli-lamba',
            'price' => 399.00,
            'old_price' => 520.00,
            'emoji_benefits' => '
                <p><strong>💡 Üç Farklı Işık Rengi</strong></p>
                <p><strong>🔋 Kablosuz ve Şarj Edilebilir</strong></p>
                <p><strong>🧲 Her yere kolayca yapışır </strong></p>
                <p><strong>🏠 Kolay Kurulum ve Taşınabilir</strong></p>
                <p><strong>🔌 USB ile Hızlı Şarj</strong></p>
                <p><strong>📏 30 cm uzunluğunda</strong></p>
                <p><strong>📦 Hızlı Teslimat ve Kapıda Ödeme</strong></p>',
            'content' => '<div class="container text-center my-2">
                            <img src="https://trendygoods.com.tr/assets/imgs/products/miknatisli-lamba/usage.gif" alt="" width="300">
                        </div>',
            'template' => 'review',
            'settings' => '{"quantity_price":"{ \"1\": 399.00, \"2\": 798.00, \"3\": 1197.00 }","quantity_discount":"{ \"1\": 0, \"2\": 199.00, \"3\": 398.00 }"}',
        ]);

        $mediaDirectory = public_path('assets/imgs/products/miknatisli-lamba/');
        $mediaFiles = File::files($mediaDirectory);

        foreach ($mediaFiles as $file) {
            $product->addMedia($file->getPathname())
                ->preservingOriginal()
                ->toMediaCollection('product_images');
        }


        $comments = [
            [
                'rating' => 5,
                'author' => 'Zeynep B.',
                'content' => 'Ürünü gece 1 gibi sipariş ettim 13 saat sonra elime ulaştı. Çok sağlam bir şekilde paketlenmişti. Çok kaliteli, çocukların ilgisini çeken bir ürün',
                'photo_url_1' => 'https://trendygoods.com.tr/assets/imgs/products/miknatisli-lamba/reviews/8.webp'
            ],
            [
                'rating' => 5,
                'author' => '***** *',
                'content' => 'Hafif bir ürün. Yapıştırması çok kolay. Işığı yeterli geldi bize. Şarjı 5 saat kadar gidiyor parlaklığını ayarlayabiliyorsunuz Sarı ve beyaz ışıklı fotoğraflarını ekledim. Biz memnun kaldık, teşekkür ederiz.',
                'photo_url_1' => 'https://trendygoods.com.tr/assets/imgs/products/miknatisli-lamba/reviews/1.webp'
            ],
            [
                'rating' => 5,
                'author' => 'Şevval T.',
                'content' => 'Çok pratik kesinlikle tavsiye ediyorum kızımın masasına aldım.Şarjı da çok iyi bir kaç kademesi var.göz yormuyor çok faydalı.kutudan usb şarj kablosu çıkıyor.Biz çok sevdik.Pişman olmazsınız.',
                'photo_url_1' => 'https://trendygoods.com.tr/assets/imgs/products/miknatisli-lamba/reviews/6.webp'
            ],
            [
                'rating' => 5,
                'author' => 'Bahri K.',
                'content' => 'Ürün çok iyi kaliteli düşünmeden alabilirsiniz çift taraflı yapışkanı var 30cm civarı gerek ışık kalitesi gerek görüntüsü ışık modları beyaz,sarı,beyaz-sarı ve Çakar şeklinde yanıp sönen beyaz sarı ışık hepsinin aydınlatması çok güzel asla pişman etmez',
                'photo_url_1' => 'https://trendygoods.com.tr/assets/imgs/products/miknatisli-lamba/reviews/9.webp'
            ],
            [
                'rating' => 4.5,
                'author' => 'Ayşegül T. Ü.',
                'content' => 'çok beğendim tam yerini buldu',
                'photo_url_1' => 'https://trendygoods.com.tr/assets/imgs/products/miknatisli-lamba/reviews/7.webp'
            ],
            [
                'rating' => 4.5,
                'author' => 'hilal ö.',
                'content' => 'Mutfağa çok iyi oldu. Çok beğendik. 3 tane daha sipariş vereceğim.',
                'photo_url_1' => 'https://trendygoods.com.tr/assets/imgs/products/miknatisli-lamba/reviews/3.webp'
            ]
        ];

        foreach ($comments as $comment) {
            Comment::create([
                'product_id' => $product->id,
                'rating' => $comment['rating'],
                'author' => $comment['author'],
                'content' => $comment['content'],
                'photo_url_1' => $comment['photo_url_1']
            ]);
        }
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
