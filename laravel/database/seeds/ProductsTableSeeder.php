<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$product1 = new \App\Product();
		$product1->kategoria_id = 1;
		$product1->nazwa = 'Sm4rTf0Ni|< +5 d0 R00s|-|0ff0sCi';
		$product1->opis = 'Ś//i3t||y m0d31 d0 topi3||ia 0cZk00f';
		$product1->img = 'images/rozowyIphone.jpg';
		$product1->img_thumb = 'thumb/rozowyIphone.jpg';
		$product1->img_opis = 'Rooshoffy Ajfonek';
		$product1->save();
		
		$product2 = new \App\Product();
		$product2->kategoria_id = 1;
		$product2->nazwa = 'Najprostszy z najprostszych';
		$product2->opis = 'Wspaniały prezent dla Twojej babci, która chce być na czasie, ale jednak nie do końca.';
		$product2->img = 'images/babciny.jpg';
		$product2->img_thumb = 'thumb/babciny.jpg';
		$product2->img_opis = 'Świetnie tłucze kotlety';
		$product2->save();
		
		$product3 = new \App\Product();
		$product3->kategoria_id = 1;
		$product3->nazwa = '"Patrzcie jaką mam ciężką pracę" + 8 do wytrzymałości';
		$product3->opis = 'Idealny dla tych, którzy uważają, że dzisiejsze produkty to szmelc i wmawiają sobie, że nie są godne aby je posiadać.';
		$product3->img = 'images/strudy.jpg';
		$product3->img_thumb = 'thumb/strudy.jpg';
		$product3->img_opis = 'Jest tak twadry jak Ty.';
		$product3->save();
		
		$product4 = new \App\Product();
		$product4->kategoria_id = 2;
		$product4->nazwa = 'Radziecka taczka energii astralnej';
		$product4->opis = 'Futurystyczna taczka z lat 60-tych.';
		$product4->img = 'images/retrofut.jpg';
		$product4->img_thumb = 'thumb/retrofut.jpg';
		$product4->img_opis = 'Musiała grać w jakimś radziecki sci-fi';
		$product4->save();
		
		$product5 = new \App\Product();
		$product5->kategoria_id = 2;
		$product5->nazwa = 'Lansjer szybkości + 5 do mandatów';
		$product5->opis = 'Potrzebujesz lansu przed ziomkami z wioski? Say no more.';
		$product5->img = 'images/bmw.jpeg';
		$product5->img_thumb = 'thumb/bmw.jpg';
		$product5->img_opis = 'Zimny łokieć jeszcze nigdy nie był tak prosty';
		$product5->save();
		
		$product6 = new \App\Product();
		$product6->kategoria_id = 2;
		$product6->nazwa = 'Trzykołowy demon mocy';
		$product6->opis = 'Niesamowity wynalazek Zbyszka z Jaworzna. Prześciga Ferrari, jeżeli jedzie w drugą stronę.';
		$product6->img = 'images/moto.jpg';
		$product6->img_thumb = 'thumb/moto.jpg';
		$product6->img_opis = 'Ma więcej koni niż kurnik.';
		$product6->save();
		
		$product7 = new \App\Product();
		$product7->kategoria_id = 3;
		$product7->nazwa = 'Kilof + 10 do Photoshopa';
		$product7->opis = 'Bardzo uniwersalny. Nadaje się zarówno do kopania działki, jak i niewolniczej pracy.';
		$product7->img = 'images/pros.jpg';
		$product7->img_thumb = 'thumb/pros.jpg';
		$product7->img_opis = 'W rzeczywistości jego błysk przysłaniają plamy krwi';
		$product7->save();
		
		$product8 = new \App\Product();
		$product8->kategoria_id = 3;
		$product8->nazwa = 'Diamentowy wyciskacz łez + 256 do pixela';
		$product8->opis = 'Okaz wirtualnej wspaniałości, która podąża za dzisiejszymi trendami.';
		$product8->img = 'images/mein.png';
		$product8->img_thumb = 'thumb/mein.png';
		$product8->img_opis = 'Jak dopłacisz, to będziesz mógł nawet z niego skorzystać!';
		$product8->save();
		
		$product9 = new \App\Product();
		$product9->kategoria_id = 3;
		$product9->nazwa = 'Zestaw samotnego konstruktora. Premia za złożenie: + 1 do tutoriali na Youtube';
		$product9->opis = 'Idealny dla majsterkowiczów. Nawet osoba z dwiema lewymi rękoma sobie poradzi ze złożeniem tego maleństwa!';
		$product9->img = 'images/dyi.jpg';
		$product9->img_thumb = 'thumb/dyi.jpg';
		$product9->img_opis = 'Cep to przy tym rower.';
		$product9->save();
    }
}
