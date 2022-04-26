<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Model\kategori;

class KategoriTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //  yabancı anahtar çakışması olmaması için en başta 0 olarak ayarladık
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        kategori::truncate();
        DB::table('kategori')->insert(['ad'=>'PHP','slug'=>'php']);
        DB::table('kategori')->insert(['ad'=>'JAVA','slug'=>'java']);
        DB::table('kategori')->insert(['ad'=>'CSHARP','slug'=>'csharp']);
        DB::table('kategori')->insert(['ad'=>'GÖRÜNTÜ İŞLEME','slug'=>'goruntu_isleme']);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
