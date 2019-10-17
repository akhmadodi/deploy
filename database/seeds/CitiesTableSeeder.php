<?php

use Illuminate\Database\Seeder;
use App\Province;
use App\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'name' => 'Aceh Barat', 
            'province_id' => Province::where('name', 'Nanggroe Aceh Darussalam')->first()->id
        ]);
          
        City::create([
            'name' => 'Aceh Barat Daya', 
            'province_id' => Province::where('name', 'Nanggroe Aceh Darussalam')->first()->id
        ]);
          
        City::create([
            'name' => 'Aceh Besar', 
            'province_id' => Province::where('name', 'Nanggroe Aceh Darussalam')->first()->id
        ]);
          
        City::create([
            'name' => 'Aceh Jaya', 
            'province_id' => Province::where('name', 'Nanggroe Aceh Darussalam')->first()->id
        ]);
          
        City::create([
            'name' => 'Aceh Selatan', 
            'province_id' => Province::where('name', 'Nanggroe Aceh Darussalam')->first()->id
        ]);
          
        City::create([
            'name' => 'Aceh Singkil', 
            'province_id' => Province::where('name', 'Nanggroe Aceh Darussalam')->first()->id
        ]);
          
        City::create([
            'name' => 'Aceh Tamiang', 
            'province_id' => Province::where('name', 'Nanggroe Aceh Darussalam')->first()->id
        ]);
          
        City::create([
            'name' => 'Aceh Tengah', 
            'province_id' => Province::where('name', 'Nanggroe Aceh Darussalam')->first()->id
        ]);
          
        City::create([
            'name' => 'Aceh Tenggara', 
            'province_id' => Province::where('name', 'Nanggroe Aceh Darussalam')->first()->id
        ]);
          
        City::create([
            'name' => 'Aceh Timur', 
            'province_id' => Province::where('name', 'Nanggroe Aceh Darussalam')->first()->id
        ]);
          
        City::create([
            'name' => 'Aceh Utara', 
            'province_id' => Province::where('name', 'Nanggroe Aceh Darussalam')->first()->id
        ]);
          
        City::create([
            'name' => 'Agam', 
            'province_id' => Province::where('name', 'Sumatera Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Airmadidi', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Alor', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Ambon', 
            'province_id' => Province::where('name', 'Maluku')->first()->id
        ]);
          
        City::create([
            'name' => 'Amlapura', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Ampana', 
            'province_id' => Province::where('name', 'Sulawesi Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Amuntai', 
            'province_id' => Province::where('name', 'Kalimantan Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Amurang', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Andolo', 
            'province_id' => Province::where('name', 'Sulawesi Tenggara')->first()->id
        ]);
          
        City::create([
            'name' => 'Asahan', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Asmat', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Atambua', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Baa', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Badung', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Bajawa', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Balangan', 
            'province_id' => Province::where('name', 'Kalimantan Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Balikpapan', 
            'province_id' => Province::where('name', 'Kalimantan Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Banawa', 
            'province_id' => Province::where('name', 'Sulawesi Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Banda Aceh', 
            'province_id' => Province::where('name', 'Nanggroe Aceh Darussalam')->first()->id
        ]);
          
        City::create([
            'name' => 'Bandar Lampung', 
            'province_id' => Province::where('name', 'Lampung')->first()->id
        ]);
          
        City::create([
            'name' => 'Bandung', 
            'province_id' => Province::where('name', 'Jawa Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Bandung Barat', 
            'province_id' => Province::where('name', 'Jawa Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Banggai', 
            'province_id' => Province::where('name', 'Sulawesi Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Banggai Kepulauan', 
            'province_id' => Province::where('name', 'Sulawesi Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Bangka', 
            'province_id' => Province::where('name', 'Kep. Bangka Belitung')->first()->id
        ]);
          
        City::create([
            'name' => 'Bangka Barat', 
            'province_id' => Province::where('name', 'Kep. Bangka Belitung')->first()->id
        ]);
          
        City::create([
            'name' => 'Bangka Selatan', 
            'province_id' => Province::where('name', 'Kep. Bangka Belitung')->first()->id
        ]);
          
        City::create([
            'name' => 'Bangka Tengah', 
            'province_id' => Province::where('name', 'Kep. Bangka Belitung')->first()->id
        ]);
          
        City::create([
            'name' => 'Bangka Timur', 
            'province_id' => Province::where('name', 'Kep. Bangka Belitung')->first()->id
        ]);
          
        City::create([
            'name' => 'Bangkalan', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Bangli', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Banjar', 
            'province_id' => Province::where('name', 'Kalimantan Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Banjar', 
            'province_id' => Province::where('name', 'Jawa Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Banjar Baru', 
            'province_id' => Province::where('name', 'Kalimantan Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Banjarmasin', 
            'province_id' => Province::where('name', 'Kalimantan Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Banjarnegara', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Bantaeng', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Bantul', 
            'province_id' => Province::where('name', 'DI Yogyakarta')->first()->id
        ]);
          
        City::create([
            'name' => 'Banyu Asin', 
            'province_id' => Province::where('name', 'Sumatera Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Banyumas', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Banyuwangi', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Barabai', 
            'province_id' => Province::where('name', 'Kalimantan Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Barito Kuala', 
            'province_id' => Province::where('name', 'Kalimantan Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Barito Selatan', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Barito Timur', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Barito Utara', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Barru', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Batam', 
            'province_id' => Province::where('name', 'Kep. Riau')->first()->id
        ]);
          
        City::create([
            'name' => 'Batang', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Batang Hari', 
            'province_id' => Province::where('name', 'Jambi')->first()->id
        ]);
          
        City::create([
            'name' => 'Batu', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Batu Bara', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Batulicin', 
            'province_id' => Province::where('name', 'Kalimantan Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Bau-bau', 
            'province_id' => Province::where('name', 'Sulawesi Tenggara')->first()->id
        ]);
          
        City::create([
            'name' => 'Bekasi', 
            'province_id' => Province::where('name', 'Jawa Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Belitung', 
            'province_id' => Province::where('name', 'Kep. Bangka Belitung')->first()->id
        ]);
          
        City::create([
            'name' => 'Belitung Timur', 
            'province_id' => Province::where('name', 'Kep. Bangka Belitung')->first()->id
        ]);
          
        City::create([
            'name' => 'Belopa', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Belu', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Bener Meriah', 
            'province_id' => Province::where('name', 'Nanggroe Aceh Darussalam')->first()->id
        ]);
          
        City::create([
            'name' => 'Bengkalis', 
            'province_id' => Province::where('name', 'Riau')->first()->id
        ]);
          
        City::create([
            'name' => 'Bengkayang', 
            'province_id' => Province::where('name', 'Kalimantan Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Bengkulu', 
            'province_id' => Province::where('name', 'Bengkulu')->first()->id
        ]);
          
        City::create([
            'name' => 'Bengkulu Selatan', 
            'province_id' => Province::where('name', 'Bengkulu')->first()->id
        ]);
          
        City::create([
            'name' => 'Bengkulu Tengah', 
            'province_id' => Province::where('name', 'Bengkulu')->first()->id
        ]);
          
        City::create([
            'name' => 'Bengkulu Utara', 
            'province_id' => Province::where('name', 'Bengkulu')->first()->id
        ]);
          
        City::create([
            'name' => 'Berau', 
            'province_id' => Province::where('name', 'Kalimantan Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Biak Numfor', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Bima', 
            'province_id' => Province::where('name', 'Nusa Tenggara Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Binjai', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Bintan', 
            'province_id' => Province::where('name', 'Kep. Riau')->first()->id
        ]);
          
        City::create([
            'name' => 'Bireuen', 
            'province_id' => Province::where('name', 'Nanggroe Aceh Darussalam')->first()->id
        ]);
          
        City::create([
            'name' => 'Bitung', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Blitar', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Blora', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Boalemo', 
            'province_id' => Province::where('name', 'Gorontalo')->first()->id
        ]);
          
        City::create([
            'name' => 'Bogor', 
            'province_id' => Province::where('name', 'Jawa Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Bojonegoro', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Bolaang Mongondow', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Bolaang Mongondow Selatan', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Bolaang Mongondow Timur', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Bolaang Mongondow Utara', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Bombana', 
            'province_id' => Province::where('name', 'Sulawesi Tenggara')->first()->id
        ]);
          
        City::create([
            'name' => 'Bondowoso', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Bone', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Bone Bolango', 
            'province_id' => Province::where('name', 'Gorontalo')->first()->id
        ]);
          
        City::create([
            'name' => 'Bontang', 
            'province_id' => Province::where('name', 'Kalimantan Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Boroko', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Boven Digoel', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Boyolali', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Brebes', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Bukittinggi', 
            'province_id' => Province::where('name', 'Sumatera Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Buleleng', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Bulukumba', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Bulungan', 
            'province_id' => Province::where('name', 'Kalimantan Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Bungku', 
            'province_id' => Province::where('name', 'Sulawesi Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Bungo', 
            'province_id' => Province::where('name', 'Jambi')->first()->id
        ]);
          
        City::create([
            'name' => 'Buntok', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Buol', 
            'province_id' => Province::where('name', 'Sulawesi Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Buranga', 
            'province_id' => Province::where('name', 'Sulawesi Tenggara')->first()->id
        ]);
          
        City::create([
            'name' => 'Buru', 
            'province_id' => Province::where('name', 'Maluku')->first()->id
        ]);
          
        City::create([
            'name' => 'Buru Selatan', 
            'province_id' => Province::where('name', 'Maluku')->first()->id
        ]);
          
        City::create([
            'name' => 'Buton', 
            'province_id' => Province::where('name', 'Sulawesi Tenggara')->first()->id
        ]);
          
        City::create([
            'name' => 'Buton Utara', 
            'province_id' => Province::where('name', 'Sulawesi Tenggara')->first()->id
        ]);
          
        City::create([
            'name' => 'Candi Dasa', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Ciamis', 
            'province_id' => Province::where('name', 'Jawa Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Cianjur', 
            'province_id' => Province::where('name', 'Jawa Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Cilacap', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Cilegon', 
            'province_id' => Province::where('name', 'Banten')->first()->id
        ]);
          
        City::create([
            'name' => 'Cimahi', 
            'province_id' => Province::where('name', 'Jawa Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Cirebon', 
            'province_id' => Province::where('name', 'Jawa Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Dairi', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Dataran Hunimoa', 
            'province_id' => Province::where('name', 'Maluku')->first()->id
        ]);
          
        City::create([
            'name' => 'Deiyai', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Deli Serdang', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Demak', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Denpasar', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Depok', 
            'province_id' => Province::where('name', 'Jawa Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Dharmasraya', 
            'province_id' => Province::where('name', 'Sumatera Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Dobo', 
            'province_id' => Province::where('name', 'Maluku')->first()->id
        ]);
          
        City::create([
            'name' => 'Dogiyai', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Dompu', 
            'province_id' => Province::where('name', 'Nusa Tenggara Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Donggala', 
            'province_id' => Province::where('name', 'Sulawesi Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Dumai', 
            'province_id' => Province::where('name', 'Riau')->first()->id
        ]);
          
        City::create([
            'name' => 'Empat Lawang', 
            'province_id' => Province::where('name', 'Sumatera Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Ende', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Enrekang', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Fakfak', 
            'province_id' => Province::where('name', 'Papua')->first()->id
        ]);
          
        City::create([
            'name' => 'Flores Timur', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Garut', 
            'province_id' => Province::where('name', 'Jawa Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Gayo Lues', 
            'province_id' => Province::where('name', 'Nanggroe Aceh Darussalam')->first()->id
        ]);
          
        City::create([
            'name' => 'Gerung', 
            'province_id' => Province::where('name', 'Nusa Tenggara Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Gianyar', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Gorontalo', 
            'province_id' => Province::where('name', 'Gorontalo')->first()->id
        ]);
          
        City::create([
            'name' => 'Gorontalo Utara', 
            'province_id' => Province::where('name', 'Gorontalo')->first()->id
        ]);
          
        City::create([
            'name' => 'Gowa', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Gresik', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Grobogan', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Gunung Kidul', 
            'province_id' => Province::where('name', 'DI Yogyakarta')->first()->id
        ]);
          
        City::create([
            'name' => 'Gunung Mas', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Gunungsitoli', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Halmahera Barat', 
            'province_id' => Province::where('name', 'Maluku Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Halmahera Selatan', 
            'province_id' => Province::where('name', 'Maluku Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Halmahera Tengah', 
            'province_id' => Province::where('name', 'Maluku Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Halmahera Timur', 
            'province_id' => Province::where('name', 'Maluku Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Halmahera Utara', 
            'province_id' => Province::where('name', 'Maluku Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Hulu Sungai Selatan', 
            'province_id' => Province::where('name', 'Kalimantan Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Hulu Sungai Tengah', 
            'province_id' => Province::where('name', 'Kalimantan Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Hulu Sungai Utara', 
            'province_id' => Province::where('name', 'Kalimantan Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Humbang Hasundutan', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Indragiri Hilir', 
            'province_id' => Province::where('name', 'Riau')->first()->id
        ]);
          
        City::create([
            'name' => 'Indragiri Hulu', 
            'province_id' => Province::where('name', 'Riau')->first()->id
        ]);
          
        City::create([
            'name' => 'Indramayu', 
            'province_id' => Province::where('name', 'Jawa Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Intan Jaya', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Jakarta Barat', 
            'province_id' => Province::where('name', 'DKI Jakarta')->first()->id
        ]);
          
        City::create([
            'name' => 'Jakarta Pusat', 
            'province_id' => Province::where('name', 'DKI Jakarta')->first()->id
        ]);
          
        City::create([
            'name' => 'Jakarta Selatan', 
            'province_id' => Province::where('name', 'DKI Jakarta')->first()->id
        ]);
          
        City::create([
            'name' => 'Jakarta Timur', 
            'province_id' => Province::where('name', 'DKI Jakarta')->first()->id
        ]);
          
        City::create([
            'name' => 'Jakarta Utara', 
            'province_id' => Province::where('name', 'DKI Jakarta')->first()->id
        ]);
          
        City::create([
            'name' => 'Jambi', 
            'province_id' => Province::where('name', 'Jambi')->first()->id
        ]);
          
        City::create([
            'name' => 'Jayapura', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Jayawijaya', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Jember', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Jembrana', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Jeneponto', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Jepara', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Jimbaran', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Jombang', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Kaimana', 
            'province_id' => Province::where('name', 'Papua')->first()->id
        ]);
          
        City::create([
            'name' => 'Kajen', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Kalabahi', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Kampar', 
            'province_id' => Province::where('name', 'Riau')->first()->id
        ]);
          
        City::create([
            'name' => 'Kandangan', 
            'province_id' => Province::where('name', 'Kalimantan Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Kapuas', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Kapuas Hulu', 
            'province_id' => Province::where('name', 'Kalimantan Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Karang Asem', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Karanganyar', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Karawang', 
            'province_id' => Province::where('name', 'Jawa Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Karimun', 
            'province_id' => Province::where('name', 'Kep. Riau')->first()->id
        ]);
          
        City::create([
            'name' => 'Karo', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Kasongan', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Katingan', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Kaur', 
            'province_id' => Province::where('name', 'Bengkulu')->first()->id
        ]);
          
        City::create([
            'name' => 'Kayong Utara', 
            'province_id' => Province::where('name', 'Kalimantan Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Kebumen', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Kediri', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Keerom', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Kefamenanu', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Kendal', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Kendari', 
            'province_id' => Province::where('name', 'Sulawesi Tenggara')->first()->id
        ]);
          
        City::create([
            'name' => 'Kepahiang', 
            'province_id' => Province::where('name', 'Bengkulu')->first()->id
        ]);
          
        City::create([
            'name' => 'Kepanjen', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Kepulauan Anambas', 
            'province_id' => Province::where('name', 'Kep. Riau')->first()->id
        ]);
          
        City::create([
            'name' => 'Kepulauan Aru', 
            'province_id' => Province::where('name', 'Maluku')->first()->id
        ]);
          
        City::create([
            'name' => 'Kepulauan Mentawai', 
            'province_id' => Province::where('name', 'Sumatera Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Kepulauan Meranti', 
            'province_id' => Province::where('name', 'Riau')->first()->id
        ]);
          
        City::create([
            'name' => 'Kepulauan Sangihe', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Kepulauan Seribu', 
            'province_id' => Province::where('name', 'DKI Jakarta')->first()->id
        ]);
          
        City::create([
            'name' => 'Kepulauan Sula', 
            'province_id' => Province::where('name', 'Maluku Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Kepulauan Talaud', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Kepulauan Yapen', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Kerinci', 
            'province_id' => Province::where('name', 'Jambi')->first()->id
        ]);
          
        City::create([
            'name' => 'Ketapang', 
            'province_id' => Province::where('name', 'Kalimantan Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Klaten', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Klungkung', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Kolaka', 
            'province_id' => Province::where('name', 'Sulawesi Tenggara')->first()->id
        ]);
          
        City::create([
            'name' => 'Kolaka Utara', 
            'province_id' => Province::where('name', 'Sulawesi Tenggara')->first()->id
        ]);
          
        City::create([
            'name' => 'Konawe', 
            'province_id' => Province::where('name', 'Sulawesi Tenggara')->first()->id
        ]);
          
        City::create([
            'name' => 'Konawe Selatan', 
            'province_id' => Province::where('name', 'Sulawesi Tenggara')->first()->id
        ]);
          
        City::create([
            'name' => 'Konawe Utara', 
            'province_id' => Province::where('name', 'Sulawesi Tenggara')->first()->id
        ]);
          
        City::create([
            'name' => 'Kota Baru', 
            'province_id' => Province::where('name', 'Kalimantan Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Kotamobagu', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Kotawaringin Barat', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Kotawaringin Timur', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Kuala Kapuas', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Kuala Kurun', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Kuala Pembuang', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Kuantan Singingi', 
            'province_id' => Province::where('name', 'Riau')->first()->id
        ]);
          
        City::create([
            'name' => 'Kubu Raya', 
            'province_id' => Province::where('name', 'Kalimantan Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Kudus', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Kulon Progo', 
            'province_id' => Province::where('name', 'DI Yogyakarta')->first()->id
        ]);
          
        City::create([
            'name' => 'Kuningan', 
            'province_id' => Province::where('name', 'Jawa Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Kupang', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Kuta', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Kutai Barat', 
            'province_id' => Province::where('name', 'Kalimantan Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Kutai Kartanegara', 
            'province_id' => Province::where('name', 'Kalimantan Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Kutai Timur', 
            'province_id' => Province::where('name', 'Kalimantan Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Kwandang', 
            'province_id' => Province::where('name', 'Gorontalo')->first()->id
        ]);
          
        City::create([
            'name' => 'Labuan Bajo', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Labuhan Batu', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Labuhan Batu Selatan', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Labuhan Batu Utara', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Lahat', 
            'province_id' => Province::where('name', 'Sumatera Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Lamandau', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Lamongan', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Lampung Barat', 
            'province_id' => Province::where('name', 'Lampung')->first()->id
        ]);
          
        City::create([
            'name' => 'Lampung Selatan', 
            'province_id' => Province::where('name', 'Lampung')->first()->id
        ]);
          
        City::create([
            'name' => 'Lampung Tengah', 
            'province_id' => Province::where('name', 'Lampung')->first()->id
        ]);
          
        City::create([
            'name' => 'Lampung Timur', 
            'province_id' => Province::where('name', 'Lampung')->first()->id
        ]);
          
        City::create([
            'name' => 'Lampung Utara', 
            'province_id' => Province::where('name', 'Lampung')->first()->id
        ]);
          
        City::create([
            'name' => 'Landak', 
            'province_id' => Province::where('name', 'Kalimantan Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Langkat', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Langsa', 
            'province_id' => Province::where('name', 'Nanggroe Aceh Darussalam')->first()->id
        ]);
          
        City::create([
            'name' => 'Lanny Jaya', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Larantuka', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Lebak', 
            'province_id' => Province::where('name', 'Banten')->first()->id
        ]);
          
        City::create([
            'name' => 'Lebong', 
            'province_id' => Province::where('name', 'Bengkulu')->first()->id
        ]);
          
        City::create([
            'name' => 'Legian', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Lembata', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Lewoleba', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Lhokseumawe', 
            'province_id' => Province::where('name', 'Nanggroe Aceh Darussalam')->first()->id
        ]);
          
        City::create([
            'name' => 'Lima Puluh Kota', 
            'province_id' => Province::where('name', 'Sumatera Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Limboto', 
            'province_id' => Province::where('name', 'Gorontalo')->first()->id
        ]);
          
        City::create([
            'name' => 'Lingga', 
            'province_id' => Province::where('name', 'Kep. Riau')->first()->id
        ]);
          
        City::create([
            'name' => 'Lombok Barat', 
            'province_id' => Province::where('name', 'Nusa Tenggara Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Lombok Tengah', 
            'province_id' => Province::where('name', 'Nusa Tenggara Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Lombok Timur', 
            'province_id' => Province::where('name', 'Nusa Tenggara Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Lombok Utara', 
            'province_id' => Province::where('name', 'Nusa Tenggara Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Lubuklinggau', 
            'province_id' => Province::where('name', 'Sumatera Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Lumajang', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Luwu', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Luwu Timur', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Luwu Utara', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Luwuk', 
            'province_id' => Province::where('name', 'Sulawesi Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Madiun', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Magelang', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Magetan', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Majalengka', 
            'province_id' => Province::where('name', 'Jawa Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Majene', 
            'province_id' => Province::where('name', 'Sulawesi Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Makale', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Makassar', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Malang', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Malili', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Malinau', 
            'province_id' => Province::where('name', 'Kalimantan Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Maluku Barat Daya', 
            'province_id' => Province::where('name', 'Maluku')->first()->id
        ]);
          
        City::create([
            'name' => 'Maluku Tengah', 
            'province_id' => Province::where('name', 'Maluku')->first()->id
        ]);
          
        City::create([
            'name' => 'Maluku Tenggara', 
            'province_id' => Province::where('name', 'Maluku')->first()->id
        ]);
          
        City::create([
            'name' => 'Maluku Tenggara Barat', 
            'province_id' => Province::where('name', 'Maluku')->first()->id
        ]);
          
        City::create([
            'name' => 'Mamasa', 
            'province_id' => Province::where('name', 'Sulawesi Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Mamberamo Raya', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Mamberamo Tengah', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Mamuju', 
            'province_id' => Province::where('name', 'Sulawesi Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Mamuju Utara', 
            'province_id' => Province::where('name', 'Sulawesi Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Manado', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Mandailing Natal', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Manggarai', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Manggarai Barat', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Manggarai Timur', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Manokwari', 
            'province_id' => Province::where('name', 'Papua')->first()->id
        ]);
          
        City::create([
            'name' => 'Mappi', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Marabahan', 
            'province_id' => Province::where('name', 'Kalimantan Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Marisa', 
            'province_id' => Province::where('name', 'Gorontalo')->first()->id
        ]);
          
        City::create([
            'name' => 'Maros', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Martapura', 
            'province_id' => Province::where('name', 'Kalimantan Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Masamba', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Masohi', 
            'province_id' => Province::where('name', 'Maluku')->first()->id
        ]);
          
        City::create([
            'name' => 'Mataram', 
            'province_id' => Province::where('name', 'Nusa Tenggara Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Maumere', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Maybrat', 
            'province_id' => Province::where('name', 'Papua')->first()->id
        ]);
          
        City::create([
            'name' => 'Mbay', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Medan', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Melawi', 
            'province_id' => Province::where('name', 'Kalimantan Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Melonguane', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Mempawah', 
            'province_id' => Province::where('name', 'Kalimantan Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Mengwi', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Merangin', 
            'province_id' => Province::where('name', 'Jambi')->first()->id
        ]);
          
        City::create([
            'name' => 'Merauke', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Mesuji', 
            'province_id' => Province::where('name', 'Lampung')->first()->id
        ]);
          
        City::create([
            'name' => 'Metro', 
            'province_id' => Province::where('name', 'Lampung')->first()->id
        ]);
          
        City::create([
            'name' => 'Mimika', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Minahasa', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Minahasa Selatan', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Minahasa Tenggara', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Minahasa Utara', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Mojokerto', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Morowali', 
            'province_id' => Province::where('name', 'Sulawesi Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Muara Enim', 
            'province_id' => Province::where('name', 'Sumatera Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Muarateweh', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Muaro Jambi', 
            'province_id' => Province::where('name', 'Jambi')->first()->id
        ]);
          
        City::create([
            'name' => 'Mukomuko', 
            'province_id' => Province::where('name', 'Bengkulu')->first()->id
        ]);
          
        City::create([
            'name' => 'Muna', 
            'province_id' => Province::where('name', 'Sulawesi Tenggara')->first()->id
        ]);
          
        City::create([
            'name' => 'Mungkid', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Murung Raya', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Musi Banyuasin', 
            'province_id' => Province::where('name', 'Sumatera Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Musi Rawas', 
            'province_id' => Province::where('name', 'Sumatera Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Nabire', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Nagan Raya', 
            'province_id' => Province::where('name', 'Nanggroe Aceh Darussalam')->first()->id
        ]);
          
        City::create([
            'name' => 'Nagekeo', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Namlea', 
            'province_id' => Province::where('name', 'Maluku')->first()->id
        ]);
          
        City::create([
            'name' => 'Nanga Bulik', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Nanga Pinoh', 
            'province_id' => Province::where('name', 'Kalimantan Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Natuna', 
            'province_id' => Province::where('name', 'Kep. Riau')->first()->id
        ]);
          
        City::create([
            'name' => 'Nduga', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Negara', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Ngabang', 
            'province_id' => Province::where('name', 'Kalimantan Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Ngada', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Nganjuk', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Ngawi', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Nias', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Nias Barat', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Nias Selatan', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Nias Utara', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Nunukan', 
            'province_id' => Province::where('name', 'Kalimantan Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Nusa Dua', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Ogan Ilir', 
            'province_id' => Province::where('name', 'Sumatera Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Ogan Komering Ilir', 
            'province_id' => Province::where('name', 'Sumatera Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Ogan Komering Ulu', 
            'province_id' => Province::where('name', 'Sumatera Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Ogan Komering Ulu Selatan', 
            'province_id' => Province::where('name', 'Sumatera Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Ogan Komering Ulu Timur', 
            'province_id' => Province::where('name', 'Sumatera Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Ondong Siau', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Pacitan', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Padang', 
            'province_id' => Province::where('name', 'Sumatera Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Padang Lawas', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Padang Lawas Utara', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Padang Panjang', 
            'province_id' => Province::where('name', 'Sumatera Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Padang Pariaman', 
            'province_id' => Province::where('name', 'Sumatera Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Padangsidimpuan', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Pagar Alam', 
            'province_id' => Province::where('name', 'Sumatera Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Pakpak Barat', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Palangka Raya', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Palembang', 
            'province_id' => Province::where('name', 'Sumatera Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Palopo', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Palu', 
            'province_id' => Province::where('name', 'Sulawesi Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Pamekasan', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Pandeglang', 
            'province_id' => Province::where('name', 'Banten')->first()->id
        ]);
          
        City::create([
            'name' => 'Pangkajene', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Pangkal Pinang', 
            'province_id' => Province::where('name', 'Kep. Bangka Belitung')->first()->id
        ]);
          
        City::create([
            'name' => 'Pangkalan Bun', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Paniai', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Pare-pare', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Pariaman', 
            'province_id' => Province::where('name', 'Sumatera Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Parigi', 
            'province_id' => Province::where('name', 'Sulawesi Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Parigi Moutong', 
            'province_id' => Province::where('name', 'Sulawesi Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Paringin', 
            'province_id' => Province::where('name', 'Kalimantan Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Pasaman', 
            'province_id' => Province::where('name', 'Sumatera Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Pasaman Barat', 
            'province_id' => Province::where('name', 'Sumatera Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Pasangkayu', 
            'province_id' => Province::where('name', 'Sulawesi Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Pasarwajo', 
            'province_id' => Province::where('name', 'Sulawesi Tenggara')->first()->id
        ]);
          
        City::create([
            'name' => 'Paser', 
            'province_id' => Province::where('name', 'Kalimantan Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Pasuruan', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Pati', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Payakumbuh', 
            'province_id' => Province::where('name', 'Sumatera Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Pecatan', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Pecatu', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Pegunungan Bintang', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Pekalongan', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Pekanbaru', 
            'province_id' => Province::where('name', 'Riau')->first()->id
        ]);
          
        City::create([
            'name' => 'Pelaihari', 
            'province_id' => Province::where('name', 'Kalimantan Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Pelalawan', 
            'province_id' => Province::where('name', 'Riau')->first()->id
        ]);
          
        City::create([
            'name' => 'Pemalang', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Pematang Siantar', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Penajam', 
            'province_id' => Province::where('name', 'Kalimantan Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Pesawaran', 
            'province_id' => Province::where('name', 'Lampung')->first()->id
        ]);
          
        City::create([
            'name' => 'Pesisir Selatan', 
            'province_id' => Province::where('name', 'Sumatera Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Pidie', 
            'province_id' => Province::where('name', 'Nanggroe Aceh Darussalam')->first()->id
        ]);
          
        City::create([
            'name' => 'Pidie Jaya', 
            'province_id' => Province::where('name', 'Nanggroe Aceh Darussalam')->first()->id
        ]);
          
        City::create([
            'name' => 'Pinrang', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Piru', 
            'province_id' => Province::where('name', 'Maluku')->first()->id
        ]);
          
        City::create([
            'name' => 'Pohuwato', 
            'province_id' => Province::where('name', 'Gorontalo')->first()->id
        ]);
          
        City::create([
            'name' => 'Polewali Mandar', 
            'province_id' => Province::where('name', 'Sulawesi Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Ponorogo', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Pontianak', 
            'province_id' => Province::where('name', 'Kalimantan Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Poso', 
            'province_id' => Province::where('name', 'Sulawesi Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Prabumulih', 
            'province_id' => Province::where('name', 'Sumatera Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Praya', 
            'province_id' => Province::where('name', 'Nusa Tenggara Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Pringsewu', 
            'province_id' => Province::where('name', 'Lampung')->first()->id
        ]);
          
        City::create([
            'name' => 'Probolinggo', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Pulang Pisau', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Pulau Morotai', 
            'province_id' => Province::where('name', 'Maluku Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Puncak', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Puncak Jaya', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Purbalingga', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Puruk Cahu', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Purwakarta', 
            'province_id' => Province::where('name', 'Jawa Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Purwodadi', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Purwokerto', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Purworejo', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Putusibau', 
            'province_id' => Province::where('name', 'Kalimantan Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Raha', 
            'province_id' => Province::where('name', 'Sulawesi Tenggara')->first()->id
        ]);
          
        City::create([
            'name' => 'Raja Ampat', 
            'province_id' => Province::where('name', 'Papua')->first()->id
        ]);
          
        City::create([
            'name' => 'Rangkasbitung', 
            'province_id' => Province::where('name', 'Banten')->first()->id
        ]);
          
        City::create([
            'name' => 'Rantau', 
            'province_id' => Province::where('name', 'Kalimantan Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Ratahan', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Rejang Lebong', 
            'province_id' => Province::where('name', 'Bengkulu')->first()->id
        ]);
          
        City::create([
            'name' => 'Rembang', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Rokan Hilir', 
            'province_id' => Province::where('name', 'Riau')->first()->id
        ]);
          
        City::create([
            'name' => 'Rokan Hulu', 
            'province_id' => Province::where('name', 'Riau')->first()->id
        ]);
          
        City::create([
            'name' => 'Rote Ndao', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Rumbia', 
            'province_id' => Province::where('name', 'Sulawesi Tenggara')->first()->id
        ]);
          
        City::create([
            'name' => 'Ruteng', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Sabang', 
            'province_id' => Province::where('name', 'Nanggroe Aceh Darussalam')->first()->id
        ]);
          
        City::create([
            'name' => 'Sabu Raijua', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Salakan', 
            'province_id' => Province::where('name', 'Sulawesi Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Salatiga', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Samarinda', 
            'province_id' => Province::where('name', 'Kalimantan Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Sambas', 
            'province_id' => Province::where('name', 'Kalimantan Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Samosir', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Sampang', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Sampit', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Sangatta', 
            'province_id' => Province::where('name', 'Kalimantan Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Sanggau', 
            'province_id' => Province::where('name', 'Kalimantan Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Sanur', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Sarmi', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Sarolangun', 
            'province_id' => Province::where('name', 'Jambi')->first()->id
        ]);
          
        City::create([
            'name' => 'Saumlaki', 
            'province_id' => Province::where('name', 'Maluku')->first()->id
        ]);
          
        City::create([
            'name' => 'Sawah Lunto', 
            'province_id' => Province::where('name', 'Sumatera Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Sekadau', 
            'province_id' => Province::where('name', 'Kalimantan Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Selayar', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Selong', 
            'province_id' => Province::where('name', 'Nusa Tenggara Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Seluma', 
            'province_id' => Province::where('name', 'Bengkulu')->first()->id
        ]);
          
        City::create([
            'name' => 'Semarang', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Semarapura', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Seminyak', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Sendawar', 
            'province_id' => Province::where('name', 'Kalimantan Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Sengkang', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Seram Bagian Barat', 
            'province_id' => Province::where('name', 'Maluku')->first()->id
        ]);
          
        City::create([
            'name' => 'Seram Bagian Timur', 
            'province_id' => Province::where('name', 'Maluku')->first()->id
        ]);
          
        City::create([
            'name' => 'Serang', 
            'province_id' => Province::where('name', 'Banten')->first()->id
        ]);
          
        City::create([
            'name' => 'Serdang Bedagai', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Seruyan', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Siak', 
            'province_id' => Province::where('name', 'Riau')->first()->id
        ]);
          
        City::create([
            'name' => 'Siau Tagulandang Biaro', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Sibolga', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Sidenreng Rappang', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Sidoarjo', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Sigi', 
            'province_id' => Province::where('name', 'Sulawesi Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Sijunjung', 
            'province_id' => Province::where('name', 'Sumatera Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Sikka', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Simalungun', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Simeulue', 
            'province_id' => Province::where('name', 'Nanggroe Aceh Darussalam')->first()->id
        ]);
          
        City::create([
            'name' => 'Singaraja', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Singkawang', 
            'province_id' => Province::where('name', 'Kalimantan Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Sinjai', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Sintang', 
            'province_id' => Province::where('name', 'Kalimantan Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Situbondo', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Slawi', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Sleman', 
            'province_id' => Province::where('name', 'DI Yogyakarta')->first()->id
        ]);
          
        City::create([
            'name' => 'Soe', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Solok', 
            'province_id' => Province::where('name', 'Sumatera Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Solok Selatan', 
            'province_id' => Province::where('name', 'Sumatera Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Soppeng', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Sorong', 
            'province_id' => Province::where('name', 'Papua')->first()->id
        ]);
          
        City::create([
            'name' => 'Sorong Selatan', 
            'province_id' => Province::where('name', 'Papua')->first()->id
        ]);
          
        City::create([
            'name' => 'Sragen', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Subang', 
            'province_id' => Province::where('name', 'Jawa Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Subulussalam', 
            'province_id' => Province::where('name', 'Nanggroe Aceh Darussalam')->first()->id
        ]);
          
        City::create([
            'name' => 'Sukabumi', 
            'province_id' => Province::where('name', 'Jawa Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Sukadana', 
            'province_id' => Province::where('name', 'Kalimantan Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Sukamara', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Sukoharjo', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Sumba Barat', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Sumba Barat Daya', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Sumba Tengah', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Sumba Timur', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Sumbawa', 
            'province_id' => Province::where('name', 'Nusa Tenggara Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Sumbawa Barat', 
            'province_id' => Province::where('name', 'Nusa Tenggara Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Sumbawa Besar', 
            'province_id' => Province::where('name', 'Nusa Tenggara Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Sumedang', 
            'province_id' => Province::where('name', 'Jawa Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Sumenep', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Sungai Penuh', 
            'province_id' => Province::where('name', 'Jambi')->first()->id
        ]);
          
        City::create([
            'name' => 'Sungguminasa', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Supiori', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Surabaya', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Surakarta', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Suwawa', 
            'province_id' => Province::where('name', 'Gorontalo')->first()->id
        ]);
          
        City::create([
            'name' => 'Tabalong', 
            'province_id' => Province::where('name', 'Kalimantan Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Tabanan', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Tahuna', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Takalar', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Taliwang', 
            'province_id' => Province::where('name', 'Nusa Tenggara Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Tambolaka', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Tambrauw', 
            'province_id' => Province::where('name', 'Papua')->first()->id
        ]);
          
        City::create([
            'name' => 'Tamiang Layang', 
            'province_id' => Province::where('name', 'Kalimantan Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Tana Tidung', 
            'province_id' => Province::where('name', 'Kalimantan Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Tana Toraja', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Tanah Bumbu', 
            'province_id' => Province::where('name', 'Kalimantan Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Tanah Datar', 
            'province_id' => Province::where('name', 'Sumatera Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Tanah Grogot', 
            'province_id' => Province::where('name', 'Kalimantan Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Tanah Laut', 
            'province_id' => Province::where('name', 'Kalimantan Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Tanah Lot', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Tangerang', 
            'province_id' => Province::where('name', 'Banten')->first()->id
        ]);
          
        City::create([
            'name' => 'Tangerang Selatan', 
            'province_id' => Province::where('name', 'Banten')->first()->id
        ]);
          
        City::create([
            'name' => 'Tanggamus', 
            'province_id' => Province::where('name', 'Lampung')->first()->id
        ]);
          
        City::create([
            'name' => 'Tanjung', 
            'province_id' => Province::where('name', 'Kalimantan Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Tanjung Balai', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Tanjung Jabung Barat', 
            'province_id' => Province::where('name', 'Jambi')->first()->id
        ]);
          
        City::create([
            'name' => 'Tanjung Jabung Timur', 
            'province_id' => Province::where('name', 'Jambi')->first()->id
        ]);
          
        City::create([
            'name' => 'Tanjung Pinang', 
            'province_id' => Province::where('name', 'Kep. Riau')->first()->id
        ]);
          
        City::create([
            'name' => 'Tanjung Redeb', 
            'province_id' => Province::where('name', 'Kalimantan Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Tanjung Selor', 
            'province_id' => Province::where('name', 'Kalimantan Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Tapanuli Selatan', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Tapanuli Tengah', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Tapanuli Utara', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Tapin', 
            'province_id' => Province::where('name', 'Kalimantan Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Tarakan', 
            'province_id' => Province::where('name', 'Kalimantan Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Tasikmalaya', 
            'province_id' => Province::where('name', 'Jawa Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Tebing Tinggi', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Tebo', 
            'province_id' => Province::where('name', 'Jambi')->first()->id
        ]);
          
        City::create([
            'name' => 'Tegal', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Teluk Bintuni', 
            'province_id' => Province::where('name', 'Papua')->first()->id
        ]);
          
        City::create([
            'name' => 'Teluk Wondama', 
            'province_id' => Province::where('name', 'Papua')->first()->id
        ]);
          
        City::create([
            'name' => 'Temanggung', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Tenggarong', 
            'province_id' => Province::where('name', 'Kalimantan Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Ternate', 
            'province_id' => Province::where('name', 'Maluku Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Tidore Kepulauan', 
            'province_id' => Province::where('name', 'Maluku Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Tidung Pale', 
            'province_id' => Province::where('name', 'Kalimantan Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Tigaraksa', 
            'province_id' => Province::where('name', 'Banten')->first()->id
        ]);
          
        City::create([
            'name' => 'Tilamuta', 
            'province_id' => Province::where('name', 'Gorontalo')->first()->id
        ]);
          
        City::create([
            'name' => 'Timor Tengah Selatan', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Timor Tengah Utara', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Toba Samosir', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Tojo Una-una', 
            'province_id' => Province::where('name', 'Sulawesi Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Toli-toli', 
            'province_id' => Province::where('name', 'Sulawesi Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Tolikara', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Tomohon', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Tondano', 
            'province_id' => Province::where('name', 'Sumatera Utara')->first()->id
        ]);
          
        City::create([
            'name' => 'Toraja Utara', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Trenggalek', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Tual', 
            'province_id' => Province::where('name', 'Maluku')->first()->id
        ]);
          
        City::create([
            'name' => 'Tuban', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Tulang Bawang', 
            'province_id' => Province::where('name', 'Lampung')->first()->id
        ]);
          
        City::create([
            'name' => 'Tulang Bawang Barat', 
            'province_id' => Province::where('name', 'Lampung')->first()->id
        ]);
          
        City::create([
            'name' => 'Tulungagung', 
            'province_id' => Province::where('name', 'Jawa Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Ubud', 
            'province_id' => Province::where('name', 'Bali')->first()->id
        ]);
          
        City::create([
            'name' => 'Unaaha', 
            'province_id' => Province::where('name', 'Sulawesi Tenggara')->first()->id
        ]);
          
        City::create([
            'name' => 'Ungaran', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Waibakul', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Waikabubak', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Waingapu', 
            'province_id' => Province::where('name', 'Nusa Tenggara Timur')->first()->id
        ]);
          
        City::create([
            'name' => 'Wajo', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Wakatobi', 
            'province_id' => Province::where('name', 'Sulawesi Tenggara')->first()->id
        ]);
          
        City::create([
            'name' => 'Wanggudu', 
            'province_id' => Province::where('name', 'Sulawesi Tenggara')->first()->id
        ]);
          
        City::create([
            'name' => 'Wangi-wangi', 
            'province_id' => Province::where('name', 'Sulawesi Tenggara')->first()->id
        ]);
          
        City::create([
            'name' => 'Waropen', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Watampone', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Watansoppeng', 
            'province_id' => Province::where('name', 'Sulawesi Selatan')->first()->id
        ]);
          
        City::create([
            'name' => 'Wates', 
            'province_id' => Province::where('name', 'DI Yogyakarta')->first()->id
        ]);
          
        City::create([
            'name' => 'Way Kanan', 
            'province_id' => Province::where('name', 'Lampung')->first()->id
        ]);
          
        City::create([
            'name' => 'Woha', 
            'province_id' => Province::where('name', 'Nusa Tenggara Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Wonogiri', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Wonosari', 
            'province_id' => Province::where('name', 'DI Yogyakarta')->first()->id
        ]);
          
        City::create([
            'name' => 'Wonosobo', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
          
        City::create([
            'name' => 'Yahukimo', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Yalimo', 
            'province_id' => Province::where('name', 'Papua Barat')->first()->id
        ]);
          
        City::create([
            'name' => 'Yogyakarta', 
            'province_id' => Province::where('name', 'DI Yogyakarta')->first()->id
        ]);

        City::create([
            'name' => 'Solo', 
            'province_id' => Province::where('name', 'Jawa Tengah')->first()->id
        ]);
    }
}
