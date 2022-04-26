<?php

use Illuminate\Database\Seeder;
use App\Model\BlogDetay;
use App\Model\blog;
use App\Model\kategori;
use Illuminate\Support\Str;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run(Faker\Generator $faker)
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Blog::truncate();
        BlogDetay::truncate();

        //Blog oluşturma işlemi
        for ($i = 0; $i <= 30; $i++) {
            $urun_adi = $faker->sentence(2);
            $slug = Str::slug($urun_adi);
            $blog = blog::on()->create(array(
                'kategori_id' => random_int(1, 4),
                'blog_baslik' => $faker->sentence(5),
                'icerik' => $faker->sentence(100),
                'slug' => $slug
            ));


            $detay = $blog->blogdetay()->create([
                'son_yazilar' => rand(0, 1),
                'popular_yazilar' => rand(0, 1),
                'en_cok_okunan' => rand(0, 1),
            ]);
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
