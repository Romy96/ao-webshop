<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
        	'name' => 'Asus VivoBook X207NA-FD102T laptop',
        	'description' => 'De Asus VivoBook X207NA-FD102T is geschikt voor het dagelijkse gebruik: internetten, e-mailen, tekstverwerking en films en series kijken in HD-beeldkwaliteit. Het 32 GB flashgeheugen werkt sneller dan een traditionele harde schijf en is daarnaast ook stiller. Door de beperkte opslagcapacteit is het aanbevolen gebruik te maken van cloudopslag of een externe geheugenkaart. Het HD-scherm biedt een gemiddelde beeldkwaliteit voor het bekijken van films en series.',
        	'price' => 269.00,
        	'category_id' => 4,
        ]);
        DB::table('articles')->insert([
        	'name' => 'McAfee Total Protection 2018 ',
        	'description' => "Veilig online surfen, bankieren en winkelen met McAfee® Total Protection, met premium antivirus-, identiteits- en privacybeveiliging voor uw pc's, Macs, smartphones en tablets† wanneer u online bent. De oplossing is snel geïnstalleerd en blokkeert bedreigingen met behulp van anti-virus die door onafhankelijke tests is geverifieerd. Bevat tevens de True Key™-app die uw wachtwoorden op een veilige manier onthoudt en u onmiddellijk aanmeldt bij websites en apps, plus File Lock om uw bestanden privé te houden.",
        	'price' => 19.99,
        	'category_id' => 2,
        ]);
        DB::table('articles')->insert([
        	'name' => 'HP Z4000 - Draadloze muis / Zwart',
        	'description' => 'De Z4000 is een draadloze muis met een eigentijds uiterlijk en is het het ideale accessoire voor elke laptop of dekstop. Met deze draadloze ultra-muis die er fraai uitziet en goed in de hand ligt, werk je verrassend plezierig.',
        	'price' => 22.90,
        	'category_id' => 1,
        ]);
        DB::table('articles')->insert([
        	'name' => 'Asus ROG STRIX Z370-E Gaming moederbord',
        	'description' => 'Het Asus ROG STRIX Z370-E Gaming moederbord is ontworpen voor fanatieke gamers. Dankzij de Intel Z370 chipset maak je jouw systeem met dit moederbord geschikt voor de Intel Coffee Lake processoren. Het moederbord is voorzien van wifi, waarmee je een verbinding van maximaal 867 Mbps opzet. Zo game je ook zonder netwerkkabels. Plaats een M.2 ssd drive op dit moederbord, waardoor je games veel sneller starten. Dankzij de speciale koeler voor dit geheugen, blijft de snelheid optimaal. Met de 5-Way Optimization app van Asus optimaliseer je de prestaties van je computer met 1 druk op de knop. Je stelt de verlichting van het moederbord op jouw favoriete kleur. Koppel ook andere apparaten aan de verlichting, zodat alles bij elkaar past.',
        	'price' => 225.00,
        	'category_id' => 3,
        ]);
        DB::table('articles')->insert([
        	'name' => 'Case Logic VNB217 - Sportieve Laptop Rugzak ',
        	'description' => 'Ongeacht waar je dag je brengt, de Case Logic VNB-217 Laptop Rugzak zal jouw reisdagen zo licht als een veertje maken. De schouderriem is verstelbaar, en dankzij het handvat kan je de tas makkelijk meenemen. Deze laptop rugzak van Case Logic is ideaal voor als je naast een 17.3 inch laptop ook nog andere spullen meeneemt op pad.',
        	'price' => 29.99,
        	'category_id' => 5,
        ]);
    }
}
