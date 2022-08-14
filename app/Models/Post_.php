<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post
{
    static $blog_posts =  [
        [
            'id' => 1,
            'title' => 'EU Parliament votes to ban sale of petrol cars, rejects \'weak\' reforms to emissions trading',
            'slug' => 'eu-parliament-votes',
            'author' => 'Charli Shield',
            'date' => 'Date 08.06.2022',
            'content' => "
            The world's third-largest polluter voted to outlaw the sale of CO2-emitting vehicles and rejected reforms to the EU's carbon market in Strasbourg on Wednesday as part of its biggest ever \"Fit for 55\" emissions reduction plan to try and prevent the dangerous impacts of climate change.
            
            After one year of negotiations, European Parliament lawmakers on Wednesday voted on eight draft climate protection laws that proposed a revamp of renewable energy targets, the aviation sector, the way people drive, how countries control their pollution, and how forests and land are managed, among others.
            
            The European Commission's flagship \"Fit for 55\" package aims to bring the EU's greenhouse gas emissions down by at least 55% by 2030 compared to 1990 levels and reach net zero emissions by 2050."
        ],
        [
            'id' => 2,
            'title' => "What's behind eastern Germans' empathy for Russia?",
            'slug' => 'behind-eastern-germans',
            'author' => 'Ben Knight',
            'date' => '27.05.2022',
            'content' => "Wolfgang Weisskopf, head of the local Erfurt branch of the Christian Democratic Union (CDU), wants to make one thing clear from the start. \"Ukraine must be fully supported,\" he tells the 15 party members gathered around a U of tables, \"by all means up to the threshold of a world war.\"
    
            Exactly what that might mean is left in the air, but then again that isn't the point of this meeting, happening on a hot May day in a room above an old-style pub in the cathedral square of this medieval eastern German city.
            
            Weisskopf's disclaimer is necessary because everyone is here for a talk by Martin Kummer, chairman of the Thuringia German-Russian Friendship Society, a man for whom life has been prickly in the last few weeks. He's received his share of angry emails, though he shrugs them off without much thought: \"Nothing, really, just people calling me a Putin-understander and so on.\""
        ],
        [
            'id' => 3,
            'title' => "Angela Merkel opens up on Ukraine, Putin and her legacy",
            'slug' => 'angela-opens-up-ukraine',
            'author' => 'Alistair Walsh, Rina Goldenberg',
            'date' => '07.06.2022',
            'content' =>  "
            Former German Chancellor Angela Merkel defended her legacy on Ukraine on Tuesday in her first major interview since leaving office.
    
            She refused to apologize for her policies towards Moscow, but stressed there was no justification for Russia’s invasion of Ukraine.
            
            \"It's an objective breach of all international laws and of everything that allows us in Europe to live in peace at all. If we start going back through the centuries and arguing over which bit of territory should belong to whom, then we will only have war. That's not an option whatsoever.\"
            
            The interview was conducted by Alexander Osang, a writer and journalist who writes for German news magazine Der Spiegel among others, during a stage event at the Berliner Ensemble theater. The talk was organized by publisher Aufbau and the Berliner Ensemble theater company.
            "
        ],

    ];

    static public function all()
    {
        return collect(self::$blog_posts);
    }

    static public function find($slug)
    {
        $posts = self::all();
        // foreach ($posts as $post) {
        //     if ($post['slug'] == $slug) {
        //         return $post;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
