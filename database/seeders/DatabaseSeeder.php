<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Gender;
use App\Models\Province;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {
        // User::factory(10)->create();

        Gender::create(['gender' => 'Men']);
        Gender::create(['gender' => 'Women']);

        Province::create(['name' => 'Aceh']);
        Province::create(['name' => 'Bali']);
        Province::create(['name' => 'Banten']);
        Province::create(['name' => 'Bengkulu']);
        Province::create(['name' => 'Daerah Istimewa Yogyakarta']);
        Province::create(['name' => 'Daerah Khusus Ibukota Jakarta']);
        Province::create(['name' => 'Gorontalo']);
        Province::create(['name' => 'Jambi']);
        Province::create(['name' => 'Jawa Barat']);
        Province::create(['name' => 'Jawa Tengah']);
        Province::create(['name' => 'Jawa Timur']);
        Province::create(['name' => 'Kalimantan Barat']);
        Province::create(['name' => 'Kalimantan Selatan']);
        Province::create(['name' => 'Kalimantan Tengah']);
        Province::create(['name' => 'Kalimantan Timur']);
        Province::create(['name' => 'Kalimantan Utara']);
        Province::create(['name' => 'Kepulauan Bangka Belitung']);
        Province::create(['name' => 'Kepulauan Riau']);
        Province::create(['name' => 'Lampung']);
        Province::create(['name' => 'Maluku']);
        Province::create(['name' => 'Maluku Utara']);
        Province::create(['name' => 'Nusa Tenggara Barat']);
        Province::create(['name' => 'Nusa Tenggara Timur']);
        Province::create(['name' => 'Papua']);
        Province::create(['name' => 'Papua Barat']);
        Province::create(['name' => 'Papua Barat Daya']);
        Province::create(['name' => 'Papua Pegunungan']);
        Province::create(['name' => 'Papua Selatan']);
        Province::create(['name' => 'Papua Tengah']);
        Province::create(['name' => 'Riau']);
        Province::create(['name' => 'Sulawesi Barat']);
        Province::create(['name' => 'Sulawesi Selatan']);
        Province::create(['name' => 'Sulawesi Tengah']);
        Province::create(['name' => 'Sulawesi Tenggara']);
        Province::create(['name' => 'Sulawesi Utara']);
        Province::create(['name' => 'Sumatra Barat']);
        Province::create(['name' => 'Sumatra Timur']);
        Province::create(['name' => 'Sumatra Utara']);
        Province::create(['name' => 'Online']);

        District::create(['province_id' => '1', 'name' => 'Kabupaten Aceh Barat']);
        District::create(['province_id' => '1', 'name' => 'Kabupaten Aceh Barat Daya']);
        District::create(['province_id' => '1', 'name' => 'Kabupaten Aceh Besar']);
        District::create(['province_id' => '1', 'name' => 'Kabupaten Aceh Jaya']);
        District::create(['province_id' => '1', 'name' => 'Kabupaten Aceh Selatan']);
        District::create(['province_id' => '1', 'name' => 'Kabupaten Aceh Singkil']);
        District::create(['province_id' => '1', 'name' => 'Kabupaten Aceh Tamiang']);
        District::create(['province_id' => '1', 'name' => 'Kabupaten Aceh Tengah']);
        District::create(['province_id' => '1', 'name' => 'Kabupaten Aceh Tenggara']);
        District::create(['province_id' => '1', 'name' => 'Kabupaten Aceh Timur']);
        District::create(['province_id' => '1', 'name' => 'Kabupaten Aceh Utara']);
        District::create(['province_id' => '1', 'name' => 'Kabupaten Bener Meriah']);
        District::create(['province_id' => '1', 'name' => 'Kabupaten Bireuen']);
        District::create(['province_id' => '1', 'name' => 'Kabupaten Gayo Lues']);
        District::create(['province_id' => '1', 'name' => 'Kabupaten Nagan Raya']);
        District::create(['province_id' => '1', 'name' => 'Kabupaten Pidie']);
        District::create(['province_id' => '1', 'name' => 'Kabupaten Pidie Jaya']);
        District::create(['province_id' => '1', 'name' => 'Kabupaten Simeulue']);
        District::create(['province_id' => '1', 'name' => 'Kota Banda Aceh']);
        District::create(['province_id' => '1', 'name' => 'Kota Langsa']);
        District::create(['province_id' => '1', 'name' => 'Kota Lhokseumawe']);
        District::create(['province_id' => '1', 'name' => 'Kota Sabang']);
        District::create(['province_id' => '1', 'name' => 'Kota Subulussalam']);

        District::create(['province_id' => '2', 'name' => 'Kabupaten Badung']);
        District::create(['province_id' => '2', 'name' => 'Kabupaten Bangli']);
        District::create(['province_id' => '2', 'name' => 'Kabupaten Buleleng']);
        District::create(['province_id' => '2', 'name' => 'Kabupaten Gianyar']);
        District::create(['province_id' => '2', 'name' => 'Kabupaten Jembrana']);
        District::create(['province_id' => '2', 'name' => 'Kabupaten Karangasem']);
        District::create(['province_id' => '2', 'name' => 'Kabupaten Klungkung']);
        District::create(['province_id' => '2', 'name' => 'Kabupaten Tabanan']);
        District::create(['province_id' => '2', 'name' => 'Kota Denpasar']);

        District::create(['province_id' => '3', 'name' => 'Kabupaten Lebak']);
        District::create(['province_id' => '3', 'name' => 'Kabupaten Pandeglang']);
        District::create(['province_id' => '3', 'name' => 'Kabupaten Serang']);
        District::create(['province_id' => '3', 'name' => 'Kabupaten Tangerang']);
        District::create(['province_id' => '3', 'name' => 'Kota Cilegon']);
        District::create(['province_id' => '3', 'name' => 'Kota Serang']);
        District::create(['province_id' => '3', 'name' => 'Kota Tangerang']);
        District::create(['province_id' => '3', 'name' => 'Kota Tangerang Selatan']);

        District::create(['province_id' => '4', 'name' => 'Kabupaten Bengkulu Selatan']);
        District::create(['province_id' => '4', 'name' => 'Kabupaten Bengkulu Tengah']);
        District::create(['province_id' => '4', 'name' => 'Kabupaten Bengkulu Utara']);
        District::create(['province_id' => '4', 'name' => 'Kabupaten Kaur']);
        District::create(['province_id' => '4', 'name' => 'Kabupaten Kepahiang']);
        District::create(['province_id' => '4', 'name' => 'Kabupaten Lebong']);
        District::create(['province_id' => '4', 'name' => 'Kabupaten Mukomuko']);
        District::create(['province_id' => '4', 'name' => 'Kabupaten Rejang Lebong']);
        District::create(['province_id' => '4', 'name' => 'Kabupaten Seluma']);
        District::create(['province_id' => '4', 'name' => 'Kota Bengkulu']);

        District::create(['province_id' => '5', 'name' => 'Kabupaten Bantul']);
        District::create(['province_id' => '5', 'name' => 'Kabupaten Gunungkidul']);
        District::create(['province_id' => '5', 'name' => 'Kabupaten Kulon Progo']);
        District::create(['province_id' => '5', 'name' => 'Kabupaten Sleman']);
        District::create(['province_id' => '5', 'name' => 'Kota Yogyakarta']);

        District::create(['province_id' => '6', 'name' => 'Jakarta Barat']);
        District::create(['province_id' => '6', 'name' => 'Jakarta Pusat']);
        District::create(['province_id' => '6', 'name' => 'Jakarta Selatan']);
        District::create(['province_id' => '6', 'name' => 'Jakarta Timur']);
        District::create(['province_id' => '6', 'name' => 'Jakarta Utara']);

        District::create(['province_id' => '7', 'name' => 'Kabupaten Boalemo']);
        District::create(['province_id' => '7', 'name' => 'Kabupaten Bone Bolango']);
        District::create(['province_id' => '7', 'name' => 'Kabupaten Gorontalo']);
        District::create(['province_id' => '7', 'name' => 'Kabupaten Gorontalo Utara']);
        District::create(['province_id' => '7', 'name' => 'Kabupaten Pohuwato']);
        District::create(['province_id' => '7', 'name' => 'Kota Gorontalo']);

        District::create(['province_id' => '8', 'name' => 'Kabupaten Batanghari']);
        District::create(['province_id' => '8', 'name' => 'Kabupaten Bungo']);
        District::create(['province_id' => '8', 'name' => 'Kabupaten Kerinci']);
        District::create(['province_id' => '8', 'name' => 'Kabupaten Merangin']);
        District::create(['province_id' => '8', 'name' => 'Kabupaten Muaro Jambi']);
        District::create(['province_id' => '8', 'name' => 'Kabupaten Sarolangun']);
        District::create(['province_id' => '8', 'name' => 'Kabupaten Tanjung Jabung Barat']);
        District::create(['province_id' => '8', 'name' => 'Kabupaten Tanjung Jabung Timur']);
        District::create(['province_id' => '8', 'name' => 'Kabupaten Tebo']);
        District::create(['province_id' => '8', 'name' => 'Kota Jambi']);
        District::create(['province_id' => '8', 'name' => 'Kota Sungai Penuh']);

        District::create(['province_id' => '9', 'name' => 'Kabupaten Bandung']);
        District::create(['province_id' => '9', 'name' => 'Kabupaten Bandung Barat']);
        District::create(['province_id' => '9', 'name' => 'Kabupaten Bekasi']);
        District::create(['province_id' => '9', 'name' => 'Kabupaten Bogor']);
        District::create(['province_id' => '9', 'name' => 'Kabupaten Ciamis']);
        District::create(['province_id' => '9', 'name' => 'Kabupaten Cianjur']);
        District::create(['province_id' => '9', 'name' => 'Kabupaten Cirebon']);
        District::create(['province_id' => '9', 'name' => 'Kabupaten Garut']);
        District::create(['province_id' => '9', 'name' => 'Kabupaten Indramayu']);
        District::create(['province_id' => '9', 'name' => 'Kabupaten Karawang']);
        District::create(['province_id' => '9', 'name' => 'Kabupaten Kuningan']);
        District::create(['province_id' => '9', 'name' => 'Kabupaten Majalengka']);
        District::create(['province_id' => '9', 'name' => 'Kabupaten Pangandaran']);
        District::create(['province_id' => '9', 'name' => 'Kabupaten Purwakarta']);
        District::create(['province_id' => '9', 'name' => 'Kabupaten Subang']);
        District::create(['province_id' => '9', 'name' => 'Kabupaten Sukabumi']);
        District::create(['province_id' => '9', 'name' => 'Kabupaten Sumedang']);
        District::create(['province_id' => '9', 'name' => 'Kabupaten Tasikmalaya']);
        District::create(['province_id' => '9', 'name' => 'Kota Bandung']);
        District::create(['province_id' => '9', 'name' => 'Kota Banjar']);
        District::create(['province_id' => '9', 'name' => 'Kota Bekasi']);
        District::create(['province_id' => '9', 'name' => 'Kota Bogor']);
        District::create(['province_id' => '9', 'name' => 'Kota Cimahi']);
        District::create(['province_id' => '9', 'name' => 'Kota Cirebon']);
        District::create(['province_id' => '9', 'name' => 'Kota Depok']);
        District::create(['province_id' => '9', 'name' => 'Kota Sukabumi']);
        District::create(['province_id' => '9', 'name' => 'Kota Tasikmalaya']);

        District::create(['province_id' => '10', 'name' => 'Kabupaten Banjarnegara']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Banyumas']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Batang']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Blora']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Boyolali']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Brebes']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Cilacap']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Demak']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Grobogan']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Jepara']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Karanganyar']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Kebumen']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Kendal']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Klaten']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Kudus']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Magelang']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Pati']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Pekalongan']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Pemalang']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Purbalingga']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Purworejo']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Rembang']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Semarang']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Sragen']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Sukoharjo']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Tegal']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Temanggung']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Wonogiri']);
        District::create(['province_id' => '10', 'name' => 'Kabupaten Wonosobo']);
        District::create(['province_id' => '10', 'name' => 'Kota Magelang']);
        District::create(['province_id' => '10', 'name' => 'Kota Pekalongan']);
        District::create(['province_id' => '10', 'name' => 'Kota Salatiga']);
        District::create(['province_id' => '10', 'name' => 'Kota Semarang']);
        District::create(['province_id' => '10', 'name' => 'Kota Surakarta']);
        District::create(['province_id' => '10', 'name' => 'Kota Tegal']);

        District::create(['province_id' => '11', 'name' => 'Kabupaten Bangkalan']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Banyuwangi']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Blitar']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Bojonegoro']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Bondowoso']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Gresik']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Jember']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Jombang']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Kediri']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Lamongan']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Lumajang']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Madiun']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Magetan']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Malang']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Mojokerto']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Nganjuk']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Ngawi']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Pacitan']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Pamekasan']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Pasuruan']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Ponorogo']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Probolinggo']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Sampang']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Sidoarjo']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Situbondo']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Sumenep']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Trenggalek']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Tuban']);
        District::create(['province_id' => '11', 'name' => 'Kabupaten Tulungagung']);
        District::create(['province_id' => '11', 'name' => 'Kota Batu']);
        District::create(['province_id' => '11', 'name' => 'Kota Blitar']);
        District::create(['province_id' => '11', 'name' => 'Kota Kediri']);
        District::create(['province_id' => '11', 'name' => 'Kota Madiun']);
        District::create(['province_id' => '11', 'name' => 'Kota Malang']);
        District::create(['province_id' => '11', 'name' => 'Kota Mojokerto']);
        District::create(['province_id' => '11', 'name' => 'Kota Pasuruan']);
        District::create(['province_id' => '11', 'name' => 'Kota Probolinggo']);
        District::create(['province_id' => '11', 'name' => 'Kota Surabaya']);

        District::create(['province_id' => '12', 'name' => '']);

        District::create(['province_id' => '13', 'name' => '']);

        District::create(['province_id' => '14', 'name' => '']);

        District::create(['province_id' => '15', 'name' => '']);

        District::create(['province_id' => '16', 'name' => '']);

        District::create(['province_id' => '17', 'name' => '']);

        District::create(['province_id' => '18', 'name' => '']);

        District::create(['province_id' => '19', 'name' => '']);

        District::create(['province_id' => '20', 'name' => '']);

        District::create(['province_id' => '21', 'name' => '']);

        District::create(['province_id' => '22', 'name' => '']);

        District::create(['province_id' => '23', 'name' => '']);

        District::create(['province_id' => '24', 'name' => '']);

        District::create(['province_id' => '25', 'name' => '']);

        District::create(['province_id' => '26', 'name' => '']);

        District::create(['province_id' => '27', 'name' => '']);

        District::create(['province_id' => '28', 'name' => '']);

        District::create(['province_id' => '29', 'name' => '']);

        District::create(['province_id' => '30', 'name' => '']);

        District::create(['province_id' => '31', 'name' => '']);

        District::create(['province_id' => '32', 'name' => '']);

        District::create(['province_id' => '33', 'name' => '']);

        District::create(['province_id' => '34', 'name' => '']);

        District::create(['province_id' => '35', 'name' => '']);

        District::create(['province_id' => '36', 'name' => '']);

        District::create(['province_id' => '37', 'name' => '']);

        District::create(['province_id' => '38', 'name' => '']);

        Tag::create(['name' => 'Laravel', 'category' => 'laravel']);
        Tag::create(['name' => 'Vue JS', 'category' => 'vue-js']);
        Tag::create(['name' => 'Livewire', 'category' => 'livewire']);
    }
}
