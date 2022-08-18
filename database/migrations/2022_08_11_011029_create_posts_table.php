<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            // $table->string('author');
            $table->text('excerpt');
            $table->text('content');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

/*
 * Path: database\migrations\2022_08_12_073231_create_categories_table.php
 * Compare this snippet from database\migrations\2022_08_11_011029_create_posts_table.php:
Post::create([
    'title' => 'Germany: Fire services near explosives depot as Berlin wildfire burns on',
    'slug' => 'firefighters-in-the-german',
    'category_id' => 2,
    'author' => 'Timothy Jones',
    'excerpt' => 'Firefighters in the German capital are still trying to secure an explosives disposal site amid a continuing wildfire. Parts of the wooded area are reportedly also littered with munitions. Firefighters working to extinguish a fire in a forest in western Berlin have still not managed to reach a police explosives disposal site located there, officials said on Wednesday.',
    'content' => "Firefighters working to extinguish a fire in a forest in western Berlin have still not managed to reach a police explosives disposal site located there, officials said on Wednesday. We are unfortunately not yet where we want to get to, said a spokesman for Berlin's fire department. He said there was still a danger that munitions or other ordnance could explode, preventing firefighters from reaching the site, which was used by police to store some 30 metric tons of explosive material including confiscated fireworks. On Tuesday, explosive materials were also found to the south of the depot in the Grunewald forest after apparently being flung there by explosions at the site. Firefighting efforts have been further hindered by the potential danger of old World War II bombs in the area. Robots are, however, being used to inspect the site, a press spokesman told DW.Fire services are being helped by two helicopters that are taking water from the Havel River, which borders the forest to the west.  

    Authorities were to discuss whether to reopen an 11-kilometer (7-mile) section of motorway near the explosives disposal site that has been closed to traffic for the six days since the fire began. 
   
    Last Thursday, explosions were heard at the site after a fire broke out there. The cause of the fire is still being investigated.
   
    Germany has seen several forest fires already this summer amid very dry conditions, including one in so-called Saxon Switzerland, a popular tourist destination on the Czech border. That fire, which burnt for two weeks, is now reportedly well under control.",
    'published_at' => now(),
]);

Post::create([
    'title' => "Germany's China-Taiwan dilemma",
    'slug' => 'germany-china-taiwan-dilemma',
    'category_id' => 3,
    'author' => 'Matthias von Hein',
    'excerpt' => "When Shieh Jhy-Wey looks out his office window, he can see the German Cathedral in Berlin. From where he sits in the Taipei Representative Office, it is less than a half-hour walk to the Embassy of the People's Republic of China. Yet the two offices are worlds apart.",
    'content' => "When Shieh Jhy-Wey looks out his office window, he can see the German Cathedral in Berlin. From where he sits in the Taipei Representative Office, it is less than a half-hour walk to the Embassy of the People's Republic of China. Yet the two offices are worlds apart.

    The visit to Taiwan by US House Speaker Nancy Pelosi has escalated tensions between Beijing, Washington and Taipei. Shieh told DW how tensions are not merely between Taiwan and China, but rather between two value systems : dictatorship and democracy. German foreign policy faces a dilemma: China is Germany's most important trading partner. If Berlin took a clear stand against Chinese efforts to retake Taiwan, this could risk serious conflict, above all in economic terms. Yet if Germany keeps quiet, the country undermines its claims to have avalues-based foreign policy.
    
     Either way, it is difficult for Berlin to stay out of the growing conflict between China and the United States.
    
    On Monday, one day before Pelosi's arrival in Taiwan, Germany's Foreign Minister Annalena Baerbock made waves with a statement at a United Nations conference on nuclear weapons in New York.
    
    We do not accept when international law is broken and a larger neighbor invades its smaller neighbor in violation of international law - and of course, that also applies to China,the Green Party politician said.",
    'published_at' => now(),
]);

Post::create([
    'title' => "Germany's love-hate relationship with nuclear power",
    'slug' => 'Germany-love-hate-relationship',
    'category_id' => 1,
    'author' => 'Ralf Bosen, Rina Goldenberg',
    'excerpt' => "Nuclear power has been celebrated, condemned and banned in Germany. Now it might be making a comeback. Here is a timeline. It all began with an egg Germany's first nuclear reactor went online in October 1957, in Garching, near Munich. Given its shape, it was nicknamed the atom egg and belonged to Munich's Technical University. It was a landmark in nuclear research and a symbol of a new beginning after WWII. The research reactor operated until 2000.",
    'content' => "Nuclear power has been celebrated, condemned and banned in Germany. Now it might be making a comeback. Here is a timeline. It all began with an egg Germany's first nuclear reactor went online in October 1957, in Garching, near Munich. Given its shape, it was nicknamed the atom egg and belonged to Munich's Technical University. It was a landmark in nuclear research and a symbol of a new beginning after WWII. The research reactor operated until 2000.

    Three years later, in 1960, a nuclear reactor in Kahl am Main, in Bavaria, became the first to produce energy for civilian use and was followed by the construction of similar powerful reactors, Back then, atomic energy was seen as safe and secure. The oil crisis of 1973 gave nuclear energy a further boost.
    
    Opponents to nuclear energy questioned just how clean nuclear power was, seeing as there was no safe storage site for spent fuel rods. Thousands of protesters clashed with police during a demonstration against the nuclear power plant Brokdorf, in the northern German state of Schleswig-Holstein.
    
    Nuclear energy? No thanks,became the rallying cry for German environmentalists. In 1980, a new party was founded in West Germany: the Greens. Their members were a mix of left-wingers, peaceniks, environmentalists, and nuclear opponents. The party made it into the Bundestag, the German parliament, in 1983. 
    
    The dangers of nuclear power soon became reality. On March 28, 1979, the nuclear power plant at Three Mile Island, in the US state of Pennsylvania, had a serious accident. On April 26, 1986, a reactor at the plant near Chernobyl, in Soviet Ukraine, exploded, causing the worst nuclear disaster of all time. A radioactive cloud spread across Europe. A watershed moment for Germany.
    
    Germany at the time was divided into communist East Germany (GDR), which received little information on the accident and its fallout. West Germany was gripped by uncertainty. Politicians seemed helpless. No one was prepared for such nuclear fallout, the government lacked guidelines and policies. Crisis teams were formed and then dissolved.
    
    People rushed to buy iodine tablets, and tons of fruit, vegetables, and milk were confiscated and destroyed and disappeared from supermarket shelves. Children were no longer allowed to play in sandboxes, citizens were advised not to go outside in the rain. No measurable health effects have been observed in Germany. But the accident led to the nationwide introduction of radiation levels - and to the creation of a federal environment ministry.
    
    The Bavarian town of Wackersdorf was set to get a reprocessing plant for spent nuclear fuel rods, but riots broke out. A number of protesters and civil service workers were killed. Hundreds more people were injured. Construction was halted in 1989. The German environmental movement claimed its first major victory.",
    'published_at' => now(),
]);
 */
