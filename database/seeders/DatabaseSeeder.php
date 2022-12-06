<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Food;
use App\Models\Recipe;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        User::factory()->create([
            'username' => 'benedictusbimo',
            'first_name' => 'benedictus',
            'last_name' => 'bimo',
            'email' => 'benedictusbimo@gmail.com',
            'password' => Hash::make('titusganteng')
        ]);

        // Food::factory()->create([
        //     'name' => 'Nasi Goreng',
        //     'price' => '15000',
        //     'qty' => '10',
        //     'desc_a' => 'nasi goreng a',
        //     'desc_b' => 'nasi goreng b',
        //     'cal' => '350',
        //     'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670308695/069244600_1585909700-fried-2509089_1920_nprxik.jpg',
        //     'url_vid' => 'link video'
        // ]);

        // Food::factory()->create([
        //     'name' => 'Sate Jamur',
        //     'price' => '15000',
        //     'qty' => '100',
        //     'desc_a' => 'Sate Jamur A',
        //     'desc_b' => 'Sate Jamur B',
        //     'cal' => '200',
        //     'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670308937/download_2_p665dv.jpg',
        //     'url_vid' => 'link video'
        // ]);

        Recipe::factory()->create([
            'name' => 'Sate Jamur',
            'desc_a' => 'Sate jamur, gurih manis berpadu untuk mengisi waktu sore sembari menikmati teh hangat',
            'desc_b' => 'Sate atau satai adalah makanan yang terbuat dari daging yang dipotong kecil-kecil dan ditusuk 
            sedemikian rupa dengan tusukan lidi tulang daun kelapa atau bambu, kemudian dipanggang menggunakan bara arang kayu. 
            Sate disajikan dengan berbagai macam bumbu yang bergantung pada variasi resep sate. Sesuai namanya, 
            sate jamur menggunakan bahan dasar jamur sebagai paengganti daging',
            'cal' => '416',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670308937/download_2_p665dv.jpg',
            'url_vid' => 'https://www.youtube.com/watch?v=BPcDXFKZPLM'
        ]);

        Recipe::factory()->create([
            'name' => 'Perkedel Sayuran',
            'desc_a' => 'Masakan praktis yang lezat tetapi tetap sehat',
            'desc_b' => 'Menu yang satu ini bisa jadi ide yang tepat jika ingin makan praktis namun tetap sehat. 
            Salah satu bahan utamanya adalah kentang yang berperan sebagai karbohidrat',
            'cal' => '530',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670312638/resep-perkedel-sayuran_43_2_jxyaqi.jpg',
            'url_vid' => 'https://www.youtube.com/watch?v=xNoiqmpyax4'
        ]);

        Recipe::factory()->create([
            'name' => 'Sup Krim Labu',
            'desc_a' => 'Masakan sup yang unik dan lezat',
            'desc_b' => 'Menu unik yang jarang di buat di Indonesia. Walaupun begitu, untuk soal rasa tentunya tetap nikmat.
            Cara membuatnya juga praktis dan bisa dipraktikkan langsung di rumah',
            'cal' => '220',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670313520/5f9a43cf2112e_qwfraf.jpg',
            'url_vid' => 'https://www.youtube.com/watch?v=VE9ZgrFU5m8'
        ]);

        Recipe::factory()->create([
            'name' => 'Rendang Tahu',
            'desc_a' => 'Variasi vegan dari rendang dengan isian tahu dan kentang',
            'desc_b' => 'Rendang vegan berisikan tahu dan kentang yang mempunyai rasa yang aromatik dan kuat
            seperti rendang sapi biasanya. Dimasak tanpa daging sapi, Rendang Tahu menjadi pilihan populer dalam penikmat masakan vegan',
            'cal' => '612',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670313853/resep-rendang-tahu-tetelan-menu-20210503095323_j4jy37.jpg',
            'url_vid' => 'https://www.youtube.com/watch?v=VE9ZgrFU5m8'
        ]);

        Recipe::factory()->create([
            'name' => 'Nugget Jamur Tiram',
            'desc_a' => 'Nugget ala rumahan yang sehat dan lezat',
            'desc_b' => 'Nugget Jamur Tiram merupakan olahan nugget yang paling praktis dan nikmat.
            Nugget tanpa daging ini berisikan jamur dengan bumbu tiram. Namun, soal rasa tentunya tidak kalah lezat bila dibandingkan dengan 
            nugget ayam atau nugget daging sapi.',
            'cal' => '384',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670314697/875246213_rntq2v.png',
            'url_vid' => 'https://www.youtube.com/watch?v=R4sQOmY6FhU'
        ]);

        Recipe::factory()->create([
            'name' => 'Steak Tempe',
            'desc_a' => 'Steak vegetarian yang nikmat dan ekonomis',
            'desc_b' => 'Versi vegetarian dari masakan yang identik sekali dengan daging.
            Tempe adalah pilihan bahan yang baik untuk pengganti daging.
            Bukan hanya memberikan nutrisi yang cukup, Steak Tempe juga lebih rendah lemak.',
            'cal' => '670',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670315055/steak_tempe_MAHI-780x440_ydpcgr.jpg',
            'url_vid' => 'https://www.youtube.com/watch?v=ji0LcuZFoEI'
        ]);

        Recipe::factory()->create([
            'name' => 'Pancake Pisang',
            'desc_a' => 'Hidangan manis yang sehat dan kaya akan nutrisi',
            'desc_b' => 'Pancake dengan bahan dasar pisang yang tentunya sehat dan cocok dengan diet anda. 
            Mau disantap untuk sarapan, atau cemilan sore hari, pancake pisang ini memang begitu nikmat.',
            'cal' => '570',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670315535/1672196648044971-pancake-pisang_m3n1mn.jpg',
            'url_vid' => 'https://www.youtube.com/watch?v=-Et1LruEtkY'
        ]);

        Recipe::factory()->create([
            'name' => 'Jamur Enoki Crispy',
            'desc_a' => 'Cemilan asik yang nikmat disantap kapan saja',
            'desc_b' => 'Jamur enoki tidak hanya bisa ditumis saja. Dapat pula dibuat menjadi enoki goreng crispy yang gurih. 
            Enoki goreng ini cocok disajikan untuk lauk makan ataupun camilan. Penyajiannya bisa dengan saus cocolan atau bumbu tabur.',
            'cal' => '350',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670315768/6262394079238_suyyr1.jpg',
            'url_vid' => 'https://www.youtube.com/watch?v=pGV54BolkjE'
        ]);

        Recipe::factory()->create([
            'name' => 'Nasi Goreng Edamame',
            'desc_a' => 'Nasi Goreng sehat yang nikmat dan kaya akan protein',
            'desc_b' => 'Varian masakan nasi goreng dengan tambahan edamame yang kaya akan nutrisi. 
            Edamame sebagai bahan utama dari masakan ini mampu melancarkan pencernaan, membantu pertumbuhan, dan mempertahankan imunitas',
            'cal' => '720',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670316307/074251200_1610165256-onions-cuisine-oriental-cooked-ethnic-take-out_cchzvg.jpg',
            'url_vid' => 'https://www.youtube.com/watch?v=y04kr4_DiHQ'
        ]);

        Recipe::factory()->create([
            'name' => 'Salad Yunani Mediterania',
            'desc_a' => 'Salad khas Yunani ringan yang bagus untuk pencernaan',
            'desc_b' => 'Salad Yunani Mediterania dibuat dari mentimun dan tomat, dua bahan yang sangat baik untuk pencernaan
            Mentimun mengandung 95 % air yang kaya dan sebagian kecil vitamin K dan A. 
            Selain itu, keju feta terkenal lebih rendah lemak dan rendah kalori daripada keju cheddar. ',
            'cal' => '483',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670316762/vegetable-salad-on-plate-1059905-aae97fba84b35b1763a88a8be53358df_zcpwe2.jpg',
            'url_vid' => 'https://www.youtube.com/watch?v=A5_PL2Vrag8'
        ]);

        Food::factory()->create([
            'name' => 'Sate Jamur',
            'desc_a' => 'Sate jamur, gurih manis berpadu untuk mengisi waktu sore sembari menikmati teh hangat',
            'desc_b' => 'Sate atau satai adalah makanan yang terbuat dari daging yang dipotong kecil-kecil dan ditusuk 
            sedemikian rupa dengan tusukan lidi tulang daun kelapa atau bambu, kemudian dipanggang menggunakan bara arang kayu. 
            Sate disajikan dengan berbagai macam bumbu yang bergantung pada variasi resep sate. Sesuai namanya, 
            sate jamur menggunakan bahan dasar jamur sebagai paengganti daging',
            'price' => '18000',
            'is_avail' => 1,
            'cal' => '416',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670308937/download_2_p665dv.jpg',
            'url_vid' => 'https://www.youtube.com/watch?v=BPcDXFKZPLM'
        ]);

        Food::factory()->create([
            'name' => 'Perkedel Sayuran',
            'desc_a' => 'Masakan praktis yang lezat tetapi tetap sehat',
            'desc_b' => 'Menu yang satu ini bisa jadi ide yang tepat jika ingin makan praktis namun tetap sehat. 
            Salah satu bahan utamanya adalah kentang yang berperan sebagai karbohidrat',
            'price' => '15000',
            'is_avail' => 1,
            'cal' => '530',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670312638/resep-perkedel-sayuran_43_2_jxyaqi.jpg',
            'url_vid' => 'https://www.youtube.com/watch?v=xNoiqmpyax4'
        ]);

        Food::factory()->create([
            'name' => 'Sup Krim Labu',
            'desc_a' => 'Masakan sup yang unik dan lezat',
            'desc_b' => 'Menu unik yang jarang di buat di Indonesia. Walaupun begitu, untuk soal rasa tentunya tetap nikmat.
            Cara membuatnya juga praktis dan bisa dipraktikkan langsung di rumah',
            'price' => '22000',
            'is_avail' => 0,
            'cal' => '220',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670313520/5f9a43cf2112e_qwfraf.jpg',
            'url_vid' => 'https://www.youtube.com/watch?v=VE9ZgrFU5m8'
        ]);

        Food::factory()->create([
            'name' => 'Rendang Tahu',
            'desc_a' => 'Variasi vegan dari rendang dengan isian tahu dan kentang',
            'desc_b' => 'Rendang vegan berisikan tahu dan kentang yang mempunyai rasa yang aromatik dan kuat
            seperti rendang sapi biasanya. Dimasak tanpa daging sapi, Rendang Tahu menjadi pilihan populer dalam penikmat masakan vegan',
            'price' => '25000',
            'is_avail' => 1,
            'cal' => '612',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670313853/resep-rendang-tahu-tetelan-menu-20210503095323_j4jy37.jpg',
            'url_vid' => 'https://www.youtube.com/watch?v=VE9ZgrFU5m8'
        ]);

        Food::factory()->create([
            'name' => 'Nugget Jamur Tiram',
            'desc_a' => 'Nugget ala rumahan yang sehat dan lezat',
            'desc_b' => 'Nugget Jamur Tiram merupakan olahan nugget yang paling praktis dan nikmat.
            Nugget tanpa daging ini berisikan jamur dengan bumbu tiram. Namun, soal rasa tentunya tidak kalah lezat bila dibandingkan dengan 
            nugget ayam atau nugget daging sapi.',
            'price' => '20000',
            'is_avail' => 1,
            'cal' => '384',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670314697/875246213_rntq2v.png',
            'url_vid' => 'https://www.youtube.com/watch?v=R4sQOmY6FhU'
        ]);

        Food::factory()->create([
            'name' => 'Steak Tempe',
            'desc_a' => 'Steak vegetarian yang nikmat dan ekonomis',
            'desc_b' => 'Versi vegetarian dari masakan yang identik sekali dengan daging.
            Tempe adalah pilihan bahan yang baik untuk pengganti daging.
            Bukan hanya memberikan nutrisi yang cukup, Steak Tempe juga lebih rendah lemak.',
            'price' => '30000',
            'is_avail' => 1,
            'cal' => '670',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670315055/steak_tempe_MAHI-780x440_ydpcgr.jpg',
            'url_vid' => 'https://www.youtube.com/watch?v=ji0LcuZFoEI'
        ]);

        Food::factory()->create([
            'name' => 'Pancake Pisang',
            'desc_a' => 'Hidangan manis yang sehat dan kaya akan nutrisi',
            'desc_b' => 'Pancake dengan bahan dasar pisang yang tentunya sehat dan cocok dengan diet anda. 
            Mau disantap untuk sarapan, atau cemilan sore hari, pancake pisang ini memang begitu nikmat.',
            'price' => '24000',
            'is_avail' => 1,
            'cal' => '570',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670315535/1672196648044971-pancake-pisang_m3n1mn.jpg',
            'url_vid' => 'https://www.youtube.com/watch?v=-Et1LruEtkY'
        ]);

        Food::factory()->create([
            'name' => 'Jamur Enoki Crispy',
            'desc_a' => 'Cemilan asik yang nikmat disantap kapan saja',
            'desc_b' => 'Jamur enoki tidak hanya bisa ditumis saja. Dapat pula dibuat menjadi enoki goreng crispy yang gurih. 
            Enoki goreng ini cocok disajikan untuk lauk makan ataupun camilan. Penyajiannya bisa dengan saus cocolan atau bumbu tabur.',
            'price' => '15000',
            'is_avail' => 1,
            'cal' => '350',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670315768/6262394079238_suyyr1.jpg',
            'url_vid' => 'https://www.youtube.com/watch?v=pGV54BolkjE'
        ]);
    }
}
