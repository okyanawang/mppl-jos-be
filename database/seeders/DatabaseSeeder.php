<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Food;
use App\Models\Recipe;
use App\Models\Ingredient;
use App\Models\Step;
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
            'url_vid' => 'https://www.youtube.com/embed/BPcDXFKZPLM'
        ]);

        Recipe::factory()->create([
            'name' => 'Perkedel Sayuran',
            'desc_a' => 'Masakan praktis yang lezat tetapi tetap sehat',
            'desc_b' => 'Menu yang satu ini bisa jadi ide yang tepat jika ingin makan praktis namun tetap sehat. 
            Salah satu bahan utamanya adalah kentang yang berperan sebagai karbohidrat',
            'cal' => '530',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670312638/resep-perkedel-sayuran_43_2_jxyaqi.jpg',
            'url_vid' => 'https://www.youtube.com/embed/xNoiqmpyax4'
        ]);

        Recipe::factory()->create([
            'name' => 'Sup Krim Labu',
            'desc_a' => 'Masakan sup yang unik dan lezat',
            'desc_b' => 'Menu unik yang jarang di buat di Indonesia. Walaupun begitu, untuk soal rasa tentunya tetap nikmat.
            Cara membuatnya juga praktis dan bisa dipraktikkan langsung di rumah',
            'cal' => '220',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670313520/5f9a43cf2112e_qwfraf.jpg',
            'url_vid' => 'https://www.youtube.com/embed/VE9ZgrFU5m8'
        ]);

        Recipe::factory()->create([
            'name' => 'Rendang Tahu',
            'desc_a' => 'Variasi vegan dari rendang dengan isian tahu dan kentang',
            'desc_b' => 'Rendang vegan berisikan tahu dan kentang yang mempunyai rasa yang aromatik dan kuat
            seperti rendang sapi biasanya. Dimasak tanpa daging sapi, Rendang Tahu menjadi pilihan populer dalam penikmat masakan vegan',
            'cal' => '612',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670313853/resep-rendang-tahu-tetelan-menu-20210503095323_j4jy37.jpg',
            'url_vid' => 'https://www.youtube.com/embed/VE9ZgrFU5m8'
        ]);

        Recipe::factory()->create([
            'name' => 'Nugget Jamur Tiram',
            'desc_a' => 'Nugget ala rumahan yang sehat dan lezat',
            'desc_b' => 'Nugget Jamur Tiram merupakan olahan nugget yang paling praktis dan nikmat.
            Nugget tanpa daging ini berisikan jamur dengan bumbu tiram. Namun, soal rasa tentunya tidak kalah lezat bila dibandingkan dengan 
            nugget ayam atau nugget daging sapi.',
            'cal' => '384',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670314697/875246213_rntq2v.png',
            'url_vid' => 'https://www.youtube.com/embed/R4sQOmY6FhU'
        ]);

        Recipe::factory()->create([
            'name' => 'Steak Tempe',
            'desc_a' => 'Steak vegetarian yang nikmat dan ekonomis',
            'desc_b' => 'Versi vegetarian dari masakan yang identik sekali dengan daging.
            Tempe adalah pilihan bahan yang baik untuk pengganti daging.
            Bukan hanya memberikan nutrisi yang cukup, Steak Tempe juga lebih rendah lemak.',
            'cal' => '670',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670315055/steak_tempe_MAHI-780x440_ydpcgr.jpg',
            'url_vid' => 'https://www.youtube.com/embed/ji0LcuZFoEI'
        ]);

        Recipe::factory()->create([
            'name' => 'Pancake Pisang',
            'desc_a' => 'Hidangan manis yang sehat dan kaya akan nutrisi',
            'desc_b' => 'Pancake dengan bahan dasar pisang yang tentunya sehat dan cocok dengan diet anda. 
            Mau disantap untuk sarapan, atau cemilan sore hari, pancake pisang ini memang begitu nikmat.',
            'cal' => '570',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670315535/1672196648044971-pancake-pisang_m3n1mn.jpg',
            'url_vid' => 'https://www.youtube.com/embed/-Et1LruEtkY'
        ]);

        Recipe::factory()->create([
            'name' => 'Jamur Enoki Crispy',
            'desc_a' => 'Cemilan asik yang nikmat disantap kapan saja',
            'desc_b' => 'Jamur enoki tidak hanya bisa ditumis saja. Dapat pula dibuat menjadi enoki goreng crispy yang gurih. 
            Enoki goreng ini cocok disajikan untuk lauk makan ataupun camilan. Penyajiannya bisa dengan saus cocolan atau bumbu tabur.',
            'cal' => '350',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670315768/6262394079238_suyyr1.jpg',
            'url_vid' => 'https://www.youtube.com/embed/pGV54BolkjE'
        ]);

        Recipe::factory()->create([
            'name' => 'Nasi Goreng Edamame',
            'desc_a' => 'Nasi Goreng sehat yang nikmat dan kaya akan protein',
            'desc_b' => 'Varian masakan nasi goreng dengan tambahan edamame yang kaya akan nutrisi. 
            Edamame sebagai bahan utama dari masakan ini mampu melancarkan pencernaan, membantu pertumbuhan, dan mempertahankan imunitas',
            'cal' => '720',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670316307/074251200_1610165256-onions-cuisine-oriental-cooked-ethnic-take-out_cchzvg.jpg',
            'url_vid' => 'https://www.youtube.com/embed/y04kr4_DiHQ'
        ]);

        Recipe::factory()->create([
            'name' => 'Salad Yunani Mediterania',
            'desc_a' => 'Salad khas Yunani ringan yang bagus untuk pencernaan',
            'desc_b' => 'Salad Yunani Mediterania dibuat dari mentimun dan tomat, dua bahan yang sangat baik untuk pencernaan
            Mentimun mengandung 95 % air yang kaya dan sebagian kecil vitamin K dan A. 
            Selain itu, keju feta terkenal lebih rendah lemak dan rendah kalori daripada keju cheddar. ',
            'cal' => '483',
            'url_thumb' => 'https://res.cloudinary.com/daya9gqs5/image/upload/v1670316762/vegetable-salad-on-plate-1059905-aae97fba84b35b1763a88a8be53358df_zcpwe2.jpg',
            'url_vid' => 'https://www.youtube.com/embed/A5_PL2Vrag8'
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
            'url_vid' => 'https://www.youtube.com/embed/BPcDXFKZPLM'
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
            'url_vid' => 'https://www.youtube.com/embed/xNoiqmpyax4'
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
            'url_vid' => 'https://www.youtube.com/embed/VE9ZgrFU5m8'
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
            'url_vid' => 'https://www.youtube.com/embed/VE9ZgrFU5m8'
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
            'url_vid' => 'https://www.youtube.com/embed/R4sQOmY6FhU'
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
            'url_vid' => 'https://www.youtube.com/embed/ji0LcuZFoEI'
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
            'url_vid' => 'https://www.youtube.com/embed/-Et1LruEtkY'
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
            'url_vid' => 'https://www.youtube.com/embed/pGV54BolkjE'
        ]);

        Ingredient::factory()->create([
            'recipe_id' => 1,
            'ingredient' => '350 g Jamur Merang'
        ]);

        Ingredient::factory()->create([
            'recipe_id' => 1,
            'ingredient' => '3 sdm Kecap Manis'
        ]);

        Ingredient::factory()->create([
            'recipe_id' => 1,
            'ingredient' => '1/4 sdt Merica Putih Bubuk'
        ]);

        Ingredient::factory()->create([
            'recipe_id' => 1,
            'ingredient' => '1 sdm minyak'
        ]);

        Ingredient::factory()->create([
            'recipe_id' => 1,
            'ingredient' => '1 lembar daun salam'
        ]);

        Ingredient::factory()->create([
            'recipe_id' => 1,
            'ingredient' => '1/4 sdt garam'
        ]);

        Ingredient::factory()->create([
            'recipe_id' => 1,
            'ingredient' => '100 ml air'
        ]);

        Ingredient::factory()->create([
            'recipe_id' => 2,
            'ingredient' => '100 ml air'
        ]);

        Ingredient::factory()->create([
            'recipe_id' => 2,
            'ingredient' => '400 gr kentang kukus'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 2,
            'ingredient' => '3 sdm tepung maizena'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 2,
            'ingredient' => '1/4 sdt merica bubuk'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 2,
            'ingredient' => '1/2 sdt garam'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 2,
            'ingredient' => '1/4 sdt kaldu jamur'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 2,
            'ingredient' => '1/2 sdt garlic powder'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 2,
            'ingredient' => '1/2 bh wortel potong dadu'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 2,
            'ingredient' => '1/3 bh jagung, disisir'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 2,
            'ingredient' => '1 bt daun bawang, iris halus'
        ]);

        Ingredient::factory()->create([
            'recipe_id' => 3,
            'ingredient' => '1 cup labu kuning (kukus dan haluskan)'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 3,
            'ingredient' => '1 sdm margarin'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 3,
            'ingredient' => '1 bawang bombai yang dipotong dadu'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 3,
            'ingredient' => '3 cup susu kedelai'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 3,
            'ingredient' => '1 1/3 cup kaldu jamur'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 3,
            'ingredient' => '1/2 sdt pala'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 3,
            'ingredient' => 'Gula secukupnya'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 3,
            'ingredient' => 'Garam secukupnya'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 3,
            'ingredient' => 'Merica secukupnya'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 4,
            'ingredient' => '3 buah tahu dipotong sesuai selera'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 4,
            'ingredient' => '100 gr cabe merah'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 4,
            'ingredient' => '100 gr bawang merah'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 4,
            'ingredient' => '10 siung bawang putih'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 4,
            'ingredient' => '2 ruas jari jahe'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 4,
            'ingredient' => '2 ruas jari kunyit'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 4,
            'ingredient' => '3 lembar daun jeruk'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 4,
            'ingredient' => '1 .lembar daun kunyit'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 4,
            'ingredient' => 'Sedikit lengkuas geprek'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 4,
            'ingredient' => '1/4 sdkt pala bubuk'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 4,
            'ingredient' => '1 buah kelapa ukuran sedang'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 4,
            'ingredient' => 'secukupnya Garam'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 4,
            'ingredient' => 'secukupnya Gula merah'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 4,
            'ingredient' => 'secukupnya Gula putih'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 4,
            'ingredient' => 'Kelapa gongseng giling'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 5,
            'ingredient' => '250 gr jamur tiram'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 5,
            'ingredient' => '1 wortel parut ukuran sedang'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 5,
            'ingredient' => '4 sdm tepung terigu'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 5,
            'ingredient' => '1 sdm tepung tapioka'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 5,
            'ingredient' => 'Garam secukupnya'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 5,
            'ingredient' => '1 sdt kaldu bubuk'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 5,
            'ingredient' => 'Penyedap secukupnya'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 5,
            'ingredient' => '1/4 sdt lada putih bubuk'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 5,
            'ingredient' => 'Pelapis'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 5,
            'ingredient' => 'Tepung terigu /tepung serbaguna tambahkan air'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 5,
            'ingredient' => 'Tepung panir'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 6,
            'ingredient' => '1 potong tempe'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 6,
            'ingredient' => 'secukupnya sayuran (wortel, buncis, kentang)'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 6,
            'ingredient' => '1/4 gelas belimbing kaldu ayam'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 6,
            'ingredient' => 'secukupnya saus tiram'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 6,
            'ingredient' => '1 buah saus tomat'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 6,
            'ingredient' => '2 siung bawang putih'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 6,
            'ingredient' => 'secukupnya merica'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 6,
            'ingredient' => 'secukupnya bawang Bombay'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 6,
            'ingredient' => 'secukupnya mentega'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 7,
            'ingredient' => '50 gr kacang-kacangan organik'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 7,
            'ingredient' => '2 sdt bubuk kacang-kacangan'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 7,
            'ingredient' => '2 sdt bubuk jali'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 7,
            'ingredient' => 'Secukupnya Cranberry kering'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 7,
            'ingredient' => '3 buah pisang'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 7,
            'ingredient' => '10 lembar kulit lumpia basah'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 8,
            'ingredient' => '300 g jamur enoki'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 8,
            'ingredient' => '1 bungkus tepung bumbu'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 8,
            'ingredient' => 'Rumput laut secukupnya'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 8,
            'ingredient' => 'Minyak goreng secukupnya'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 9,
            'ingredient' => 'Nasi 150 gr '
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 9,
            'ingredient' => 'Telur 1 butir '
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 9,
            'ingredient' => 'Edamame Edashi 50 gr '
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 9,
            'ingredient' => 'Wortel 40 gr '
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 9,
            'ingredient' => 'Mentega 20 gr '
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 9,
            'ingredient' => 'Bawang putih 2 siung '
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 9,
            'ingredient' => 'Garam 1/4 sdt '
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 9,
            'ingredient' => 'Penyedap sesuai dengan selera'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 9,
            'ingredient' => 'Lobak 50 gr / sesuai selera '
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 9,
            'ingredient' => 'Pakcoy 30 gr / sesuai selera '
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 10,
            'ingredient' => 'Tomat ceri'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 10,
            'ingredient' => 'Paprika kuning'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 10,
            'ingredient' => 'Paprika merah'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 10,
            'ingredient' => 'Bayam'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 10,
            'ingredient' => 'Timun'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 10,
            'ingredient' => 'Kacang merah'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 10,
            'ingredient' => 'Keju feta'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 10,
            'ingredient' => 'minyak zaitun'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 10,
            'ingredient' => 'cuka balsamik'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 10,
            'ingredient' => 'Madu'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 10,
            'ingredient' => 'Lada'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 10,
            'ingredient' => 'Garam'
        ]);
        Ingredient::factory()->create([
            'recipe_id' => 10,
            'ingredient' => 'Perasan lemon'
        ]);

        Step::factory()->create([
            'recipe_id' => 1,
            'step' => '1. Panaskan minyak, tumis bumbu halus dan daun salam hingga harum. Masukkan jamur, aduk rata.'
        ]);
        Step::factory()->create([
            'recipe_id' => 1,
            'step' => '2. Tambahkan Bango Kecap Manis, garam, merica, dan air. Masak hingga matang.'
        ]);
        Step::factory()->create([
            'recipe_id' => 1,
            'step' => '3. Tusuk jamur menggunakan tusuk sate. Bakar di atas pan sambil dioles sisa bumbu hingga matang dan kecokelatan.'
        ]);
        Step::factory()->create([
            'recipe_id' => 1,
            'step' => '4. Sajikan.'
        ]);
        Step::factory()->create([
            'recipe_id' => 2,
            'step' => '1. Siapkan panci dan panaskan air kemudian rebus kentang, wortel, jagung sampai matang.'
        ]);
        Step::factory()->create([
            'recipe_id' => 2,
            'step' => '2. Campur semua bahan sayuran ke dalam wadah kemudian tambahkan maizena dan bumbu.'
        ]);
        Step::factory()->create([
            'recipe_id' => 2,
            'step' => '3. Masukkan adonan perkedel ke dalam piping bag.'
        ]);
        Step::factory()->create([
            'recipe_id' => 2,
            'step' => '4. Siapkan penggorengan dan panaskan minyak.'
        ]);
        Step::factory()->create([
            'recipe_id' => 2,
            'step' => '5. Potong ujung piping bag kemudian keluarkan adonan ke dalam minyak yang sudah panas.'
        ]);
        Step::factory()->create([
            'recipe_id' => 2,
            'step' => '6. Goreng perkedel sampai keemasan kemudian angkat dan tiriskan.'
        ]);
        Step::factory()->create([
            'recipe_id' => 3,
            'step' => '1. Rebus kentang, wortel, dan jagung sampai matang.'
        ]);
        Step::factory()->create([
            'recipe_id' => 3,
            'step' => '2. Campur semua bahan sayuran, maizena, dan bumbu.'
        ]);
        Step::factory()->create([
            'recipe_id' => 3,
            'step' => '3. Masukkan adonan ke dalam piping bag.'
        ]);
        Step::factory()->create([
            'recipe_id' => 3,
            'step' => '4. Panaskan minyak. Potong ujung lancip piping. Tekan di atas minyak panas kurang lebih 3 cm. Potong dengan bantuan sumpit.'
        ]);
        Step::factory()->create([
            'recipe_id' => 3,
            'step' => '5. Jangan diaduk-aduk sebelum kentang kekuningan.'
        ]);
        Step::factory()->create([
            'recipe_id' => 3,
            'step' => '6. Angkat setelah kekuningan, tiriskan, sajikan selagi panas dengan sambal.'
        ]);
        Step::factory()->create([
            'recipe_id' => 4,
            'step' => '1. Siapkan panci kemudian masak bawang bersama margarin, kurang lebih 3 hingga 5 menit.'
        ]);
        Step::factory()->create([
            'recipe_id' => 4,
            'step' => '2. Masukkan labu kuning dan susu kedelai.'
        ]);
        Step::factory()->create([
            'recipe_id' => 4,
            'step' => '3. Bumbui dengan gula, pala, merica, dan garam.'
        ]);
        Step::factory()->create([
            'recipe_id' => 4,
            'step' => '4. Aduk sampai rata dan masak selama 10 sampai 15 menit.'
        ]);
        Step::factory()->create([
            'recipe_id' => 4,
            'step' => '5. Matikan api dan pindahkan ke mangkuk saji.'
        ]);
        Step::factory()->create([
            'recipe_id' => 5,
            'step' => '1. Goreng tahu hingga cokelat.'
        ]);
        Step::factory()->create([
            'recipe_id' => 5,
            'step' => '2. Kemudian blender semua bumbu kecuali daun jeruk, daun kunyit dan lengkuas, tumis hingga wangi dan mengering.'
        ]);
        Step::factory()->create([
            'recipe_id' => 5,
            'step' => '3. Masukkan santan, aduk sampai mendidih, jangan sampai santan pecah.'
        ]);
        Step::factory()->create([
            'recipe_id' => 5,
            'step' => '4. Setelah mendidih, tahu masak sampai mengering, aduk sebentar lalu siap untuk dihidangkan.'
        ]);
        Step::factory()->create([
            'recipe_id' => 6,
            'step' => '1. Bersihkan jamur lalu rendam di air panas selama 5 menit.'
        ]);
        Step::factory()->create([
            'recipe_id' => 6,
            'step' => '2. Tiriskan jamur tunggu sedikit dingin lalu peras sampai air keluar, lalu potong halus.'
        ]);
        Step::factory()->create([
            'recipe_id' => 6,
            'step' => '3. Campurkan semua bahan lain, kemudian masukkan ke wadah / loyang yang diolesi minyak terlebih dahulu.'
        ]);
        Step::factory()->create([
            'recipe_id' => 6,
            'step' => '4. Kukus sekitar 20 menit dengan tutup panci dengan kain agar air uap tidak menetes ke adonan.'
        ]);
        Step::factory()->create([
            'recipe_id' => 6,
            'step' => '5. Setelah matang tunggu sampai dingin keluarga dari loyang.'
        ]);
        Step::factory()->create([
            'recipe_id' => 6,
            'step' => '6. Potong-potong bentuk seperti nugget sesuai selera.'
        ]);
        Step::factory()->create([
            'recipe_id' => 6,
            'step' => '7. Kemudian balurkan pada tepung basah kemudian tepung panir lalu goreng bisa disimpan di freezer terlebih dahulu.'
        ]);
        Step::factory()->create([
            'recipe_id' => 7,
            'step' => '1. tumbuh kacang, campur dengan bubuk jali dan bubuk kacang, aduk hingga merata, sisihkan.'
        ]);
        Step::factory()->create([
            'recipe_id' => 7,
            'step' => '2. Potong pisang melintang dan membujur menjadi 4 bagian.'
        ]);
        Step::factory()->create([
            'recipe_id' => 7,
            'step' => '3. Taruh kulit lumpia basah di tengah piring, tambahkan semua bahan selapis demi selapis di atasnya. Gulung seperti lumpia, sajikan.'
        ]);
        Step::factory()->create([
            'recipe_id' => 8,
            'step' => '1. Bersihkan jamur enoki kemudian bungkus ujungnya dengan rumput laut.'
        ]);
        Step::factory()->create([
            'recipe_id' => 8,
            'step' => '2. Siapkan wadah kemudian masukkan tepung bumbu dan campur dengan air sampai kental.'
        ]);
        Step::factory()->create([
            'recipe_id' => 8,
            'step' => '3. Masukkan jamur enoki ke dalam adonan tepung.'
        ]);
        Step::factory()->create([
            'recipe_id' => 8,
            'step' => '4 .Goreng jamur sampai keemasan dan teksturnya kering.'
        ]);
        Step::factory()->create([
            'recipe_id' => 8,
            'step' => '5. Angkat dan sajikan.'
        ]);
        Step::factory()->create([
            'recipe_id' => 9,
            'step' => '1. Rendam edamame Edashi dalam air panas selama 2 menit, kemudian kupas  edamame.  '
        ]);
        Step::factory()->create([
            'recipe_id' => 9,
            'step' => '2. Potong dadu sebagian wortel yang sudah dibersihkan, kemudian rebus selama 5  menit. '
        ]);
        Step::factory()->create([
            'recipe_id' => 9,
            'step' => '3. Iris bawang putih menjadi potongan kecil. '
        ]);
        Step::factory()->create([
            'recipe_id' => 9,
            'step' => '4. Tumis sebagian bawang putih hingga harum, kemudian masukkan mentega dan  telur, lalu lanjutkan masak sambil diaduk merata. '
        ]);
        Step::factory()->create([
            'recipe_id' => 9,
            'step' => '5. Masukkan nasi, garam, penyedap bubuk, wortel yang telah direbus, dan edamame  yang sudah dikupas, kemudian masak hingga matang merata. Sisihkan. '
        ]);
        Step::factory()->create([
            'recipe_id' => 9,
            'step' => '6. Buat tumis sayuran dengan cara tumis irisan bawang putih hingga harum. Masukkan lobak, wortel, dan pakcoy yang sudah dipotong-potong, kemudian  tambahkan garam secukupnya. '
        ]);
        Step::factory()->create([
            'recipe_id' => 9,
            'step' => '7. Masak hingga matang merata menggunakan api sedang. '
        ]);
        Step::factory()->create([
            'recipe_id' => 9,
            'step' => '8. Sajikan nasi goreng dengan tumis sayuran. '
        ]);
        Step::factory()->create([
            'recipe_id' => 9,
            'step' => '9. Nasi goreng edamame siap dihidangkan. '
        ]);
        Step::factory()->create([
            'recipe_id' => 10,
            'step' => '1. Cuci terlebih dahulu semua bahan utama yang akan digunakan, kemudian potong iris kecil-kecil semua bahan.'
        ]);
        Step::factory()->create([
            'recipe_id' => 10,
            'step' => '2. Jangan lupa untuk memisahkan bahan-bahan yang tidak digunakan seperti biji paprika.'
        ]);
        Step::factory()->create([
            'recipe_id' => 10,
            'step' => '3. Untuk kacang merah, jangan lupa direbus terlebih dahulu hingga matang selama 10-15 menit.'
        ]);
        Step::factory()->create([
            'recipe_id' => 10,
            'step' => '4. Setelah semua bahan siap, campur di dalam wadah yang agak besar.'
        ]);
        Step::factory()->create([
            'recipe_id' => 10,
            'step' => '5. Bahan utama disajikan dengan mentah, hal ini untuk menjaga setiap kandungan gizi dan nutrisi dalam salad Yunani dengan baik.'
        ]);
        Step::factory()->create([
            'recipe_id' => 10,
            'step' => '6. Setelah bahan utama siap, kemudian buat dressing atau saus salad Yunani.'
        ]);
        Step::factory()->create([
            'recipe_id' => 10,
            'step' => '7. Campurkan 1/4 minyak zaitun, 1/4 cuka balsamik, madu, garam, lada dan perasan lemon secukupnya.'
        ]);
        Step::factory()->create([
            'recipe_id' => 10,
            'step' => '8. Setelah semua bahan saus tercampur, tambahkan sedikit ke dalam wadah berisi sayuran tadi.'
        ]);
        Step::factory()->create([
            'recipe_id' => 10,
            'step' => '9. Penggunaan saus harus sedikit karena salad nantinya akan terasa berminyak.'
        ]);
    }
}
