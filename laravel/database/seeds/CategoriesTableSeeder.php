<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$category1 = new \App\Category();
		$category1->nazwa = 'Telefony';
		$category1->opis = 'Lista kilku telefonów';
		$category1->parallax_img = 'images/bck_tel.jpg';
		$category1->save();
		
		$category2 = new \App\Category();
		$category2->nazwa = 'Taczki';
		$category2->opis = 'Lista kilku taczek';
		$category2->parallax_img = 'images/bckg_taczka.jpg';
		$category2->save();
		
		$category3 = new \App\Category();
		$category3->nazwa = 'Kilofy';
		$category3->opis = 'Lista kilku kilofów';
		$category3->parallax_img = 'images/bckg_kilof.jpg';
		$category3->save();
    }
}
