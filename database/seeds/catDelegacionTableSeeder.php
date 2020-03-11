<?php

use Illuminate\Database\Seeder;


class catDelegacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('cat_delegaciones')->insert(['delegacion'=>"ÁLVARO OBREGÓN"], ['region'=>"PONIENTE"]);

         DB::table('cat_delegaciones')->insert(['delegacion'=>"AZCAPOTZALCO"], ['region'=>"PONIENTE"]);

         DB::table('cat_delegaciones')->insert(['delegacion'=>"BENITO JUÁREZ"], ['region'=>"SUR"]);

         DB::table('cat_delegaciones')->insert(['delegacion'=>"COYOACÁN"], ['region'=>"SUR"]);

         DB::table('cat_delegaciones')->insert(['delegacion'=>"CUAJIMALPA"], ['region'=>"PONIENTE"]);

         DB::table('cat_delegaciones')->insert(['delegacion'=>"CUAUHTÉMOC"], ['region'=>"CENTRO"]);

         DB::table('cat_delegaciones')->insert(['delegacion'=>"GUSTAVO A. MADERO"], ['region'=>"NORTE"]);

         DB::table('cat_delegaciones')->insert(['delegacion'=>"IZTACALCO"], ['region'=>"NORTE"]);

         DB::table('cat_delegaciones')->insert(['delegacion'=>"IZTAPALAPA"], ['region'=>"ORIENTE"]);

         DB::table('cat_delegaciones')->insert(['delegacion'=>"MAGDALENA CONTRERAS"], ['region'=>"SUR"]);

         DB::table('cat_delegaciones')->insert(['delegacion'=>"MIGUEL HIDALGO"], ['region'=>"PONIENTE"]);

         DB::table('cat_delegaciones')->insert(['delegacion'=>"MILPA ALTA"], ['region'=>"ORIENTE"]);

         DB::table('cat_delegaciones')->insert(['delegacion'=>"TLÁHUAC"], ['region'=>"ORIENTE"]);

         DB::table('cat_delegaciones')->insert(['delegacion'=>"TLALPAN"], ['region'=>"SUR"]);

         DB::table('cat_delegaciones')->insert(['delegacion'=>"VENUSTIANO CARRANZA"], ['region'=>"NORTE"]);

         DB::table('cat_delegaciones')->insert(['delegacion'=>"XOCHIMILCO"], ['region'=>"ORIENTE"]);

    }
}
