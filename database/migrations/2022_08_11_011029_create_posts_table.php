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
            $table->string('author');
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
