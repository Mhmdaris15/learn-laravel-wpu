<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
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
        // User::factory(10)->create();
        // Category::factory(10)->create();
        // Post::factory(10)->create();


//        User::factory(10)->create()->each(function ($user) { // 10 users
//            $user->posts()->saveMany(Post::factory(10)->make()); // 10 posts for each user
//        });

        User::create([
            'name' => 'Muhammad Aris Septanugroho',
            'username' => 'mhmdaris15',
            'email' => 'muhammadaris1945@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::factory(10)->create();

        self::generateCategories();

        Post::factory(50)->create();

        Post::create([
            'title' => 'Germany: Fire services near explosives depot as Berlin wildfire burns on',
            'slug' => 'firefighters-in-the-german',
            'category_id' => 1,
            'user_id' => 2,
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
            'user_id' => 2,
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
            'user_id' => 3,
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
    }
    public function generateCategories(){
        Category::create([
            'name' => 'Technology and Information',
            'slug' => 'technology-and-information',
            'description' => 'Information technology (IT) is the use of any computers, storage, networking and other physical devices, infrastructure and processes to create, process, store, secure and exchange all forms of electronic data. Typically, IT is used in the context of business operations, as opposed to technology used for personal or entertainment purposes. The commercial use of IT encompasses both computer technology and telecommunications.'
        ]);
        Category::create([
            'name' => 'Germany',
            'slug' => 'germany',
            'description' => 'Germany is a Western European country with a landscape of forests, rivers, mountain ranges and North Sea beaches. It has over 2 millennia of history. Berlin, its capital, is home to art and nightlife scenes, the Brandenburg Gate and many sites relating to WWII. Munich is known for its Oktoberfest and beer halls, including the 16th-century Hofbräuhaus. Frankfurt, with its skyscrapers, houses the European Central Bank.'
        ]);
        Category::create([
            'name' => 'International News',
            'slug' => 'international-news',
            'description' => 'World news or international news or even foreign coverage is the news media jargon for news from abroad, about a country or a global subject.'
        ]);
        Category::create([
            'name' => 'Sports',
            'slug' => 'sports',
            'description' => 'Sports are all forms of usually competitive physical activity which, through casual or organised participation, aim to use, maintain or improve physical ability and skills while providing enjoyment to participants, and in some cases, entertainment for spectators. Hundreds of sports exist, from those requiring only two participants, through to those with hundreds of simultaneous participants, either in teams or competing as individuals.'
        ]);
        Category::create([
            'name' => 'Modern Business',
            'slug' => 'modern-business',
            'description' => 'Business finance is the cornerstone of every organization. It refers to the corpus of funds and credit employed in a business. Business finance is required for purchasing assets, goods, raw materials and for performing all other economic activities. Precisely, it is required for running all the business operations.'
        ]);
        Category::create([
            'name' => 'Entertainment',
            'slug' => 'entertainment',
            'description' => 'Entertainment is a form of activity that holds the attention and interest of an audience, or gives pleasure and delight. It can be an idea or a task, but is more likely to be one of the activities or events that have developed over thousands of years specifically for the purpose of keeping an audience\'s attention. Although people\'s attention is held by different things, because individuals have different preferences in entertainment, most forms are recognisable and familiar. Storytelling, music, drama, dance, and different kinds of performance exist in all cultures, were supported in royal courts, developed into sophisticated forms and over time became available to all citizens.'
        ]);
        Category::create([
            'name' => 'Health',
            'slug' => 'health',
            'description' => 'Health is the level of functional and metabolic efficiency of a living organism. In humans it is the ability of individuals or communities to adapt and self-manage when facing physical, mental or social changes. The World Health Organization (WHO) defined health in its broader sense in 1946 as "a state of complete physical, mental and social well-being and not merely the absence of disease or infirmity". This definition has been subject to controversy, as it may have limited value for implementation. Health may be defined as the ability to adapt and manage physical, mental and social challenges throughout life.'
        ]);
        Category::create([
            'name' => 'Science',
            'slug' => 'science',
            'description' => 'Science is a systematic enterprise that builds and organizes knowledge in the form of testable explanations and predictions about the universe. The earliest roots of science can be traced to Ancient Egypt and Mesopotamia in around 3500 to 3000 BCE. Their contributions to mathematics, astronomy, and medicine entered and shaped Greek natural philosophy. Over the centuries, through an ever-increasing understanding of nature, science has developed from the study of the physical world to the study of the entire universe.'
        ]);
        Category::create([
            'name' => 'Travel',
            'slug' => 'travel',
            'description' => 'Travel is the movement of people between relatively distant geographical locations, and can involve travel by foot, bicycle, automobile, train, boat, bus, airplane, or other means, with or without luggage, and can be one way or round trip. Travel can also include relatively short stays between successive movements.'
        ]);
        Category::create([
            'name' => 'Food',
            'slug' => 'food',
            'description' => 'Food is any substance consumed to provide nutritional support for the body. It is usually of plant or animal origin, and contains essential nutrients, such as carbohydrates, fats, proteins, vitamins, or minerals. The substance is ingested by an organism and assimilated by the organism\'s cells to provide energy, maintain life, or stimulate growth.'
        ]);
        Category::create([
            'name' => 'Fashion',
            'slug' => 'fashion',
            'description' => 'Fashion is a popular aesthetic expression at a particular period and place, and in a specific context, especially in clothing, footwear, lifestyle, accessories, makeup, hairstyle and body proportions. Whereas, a trend often connotes a very specific aesthetic expression, and often lasting shorter than a season, fashion is a distinctive and industry-supported expression traditionally tied to the fashion season and collections. Style is an expression that lasts over many seasons, and is often connected to cultural movements and social markers, symbols, class and culture (ex. Baroque, Rococo, etc). According to sociologist Pierre Bourdieu, fashion connotes \"the latest fashion, the latest difference.'
        ]);
        Category::create([
            'name' => 'Lifestyle',
            'slug' => 'lifestyle',
            'description' => 'A lifestyle is the interests, opinions, behaviours, and behavioural orientations of an individual, group, or culture. The term was first introduced by Austrian psychiatrist Alfred Adler in his 1929 book The Case of Miss R. The term was later popularized by Austrian psychoanalyst Wilhelm Reich in his 1946 book The Mass Psychology of Fascism. The term is also used to describe the way in which a person lives, and the priorities, opinions, preferences and behavioural orientations of that person.'
        ]);
        Category::create([
            'name' => 'Politics',
            'slug' => 'politics',
            'description' => 'Politics is the process by which groups of people make collective decisions. The term is generally applied to the art or science of running governmental or state affairs. More narrowly, it refers to achieving and exercising positions of governance — organized control over a human community, particularly a state. In the social sciences, politics is studied as political science. In the humanities, politics is studied as political philosophy.'
        ]);
    }
}
