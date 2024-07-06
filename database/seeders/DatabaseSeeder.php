<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\District;
use App\Models\Legacy;
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
       if (0){
           // Şehirleri al
           $response = Http::get('https://turkiyeapi.dev/api/v1/provinces');

           if ($response->successful()) {
               $provinces = $response->json()['data'];

               foreach ($provinces as $province) {
                   City::create([
                       'id' => $province['id'], // Şehir kimliğini koruyoruz
                       'name' => $province['name'],
                   ]);
               }
           } else {
               dd('Provinces API request failed');
           }

           // İlçeleri al
           $offset = 0;
           $limit = 100; // Bir seferde çekilecek ilçe sayısı
           $hasMore = true;

           while ($hasMore) {
               $response = Http::get('https://turkiyeapi.dev/api/v1/districts', [
                   'offset' => $offset,
                   'limit' => $limit,
               ]);

               if ($response->successful()) {
                   $districts = $response->json()['data'];
                   if (count($districts) < $limit) {
                       $hasMore = false; // Tüm veriler çekildi
                   }

                   foreach ($districts as $district) {
                       $city = City::where('id', $district['provinceId'])->first();

                       if ($city) {
                           District::create([
                               'id' => $district['id'], // İlçe kimliğini koruyoruz
                               'name' => $district['name'],
                               'city_id' => $city->id,
                           ]);
                       }
                   }

                   $offset += $limit; // Sonraki sayfa için offset güncelleniyor
               } else {
                   dd('Districts API request failed');
               }
           }

           // Mahalleleri al
           $offset = 0;
           $limit = 100; // Bir seferde çekilecek mahalle sayısı
           $hasMore = true;

           while ($hasMore) {
               $response = Http::get('https://turkiyeapi.dev/api/v1/neighborhoods', [
                   'offset' => $offset,
                   'limit' => $limit,
               ]);

               if ($response->successful()) {
                   $neighborhoods = $response->json()['data'];
                   if (count($neighborhoods) < $limit) {
                       $hasMore = false; // Tüm veriler çekildi
                   }

                   foreach ($neighborhoods as $neighborhood) {
                       $city = City::where('id', $neighborhood['provinceId'])->first();
                       $district = District::where('id', $neighborhood['districtId'])->first();

                       if ($city && $district) {
                           Neighborhood::create([
                               'name' => $neighborhood['name'] . " mah.",
                               'city_id' => $city->id,
                               'district_id' => $district->id,
                           ]);
                       }
                   }

                   $offset += $limit; // Sonraki sayfa için offset güncelleniyor
               } else {
                   dd('Neighborhoods API request failed');
               }
           }
       }else{
           $sqlPath = database_path('sql/location.sql');
           $sql = File::get($sqlPath);

           // SQL sorgularını çalıştır
           DB::unprepared($sql);

           $sqlPath = database_path('sql/legacies.sql');
           $sql = File::get($sqlPath);

           // SQL sorgularını çalıştır
           DB::unprepared($sql);

           $this->command->info('Veritabanı başarıyla dolduruldu!');
       }
    }
}
