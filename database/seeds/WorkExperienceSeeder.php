<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::where('admin', 1)->first();
        DB::table('work_experiences')->insert([
            'start_date' => '2007-02-15',
            'end_date' => '2009-08-16',
            'user_id' => $user->id,
            'company_name' => 'Inthost.biz web hosting service (owner)',
            'description' => '<p class="sm-bt">Running my own Web-Hosting service along with work as a tech-support for insta-payment terminals back in my home city S-Peterburg, Russia. I\'ve learnt basic web programming, maintanance and troubleshooting of PCs, servers and webservices, such as mail, web-server, database and so on...</p>'
        ]);

        $description = '<p class="sm-bt">In 2009 I decided to move over to the Philippines. ' .
            'Applied as a technician to a call-center in Cebu City, ' .
            'after a while I was promoted to the IT manager position. ' .
            'It was interesting job and I\'ve gained much of my knowledge from the company founders whose were skilled and experienced ' .
            'IT experts with strong IT-ingeneering background. In a few years I became Asterisk (SIP server) expert, database maintainer (MySQL), Network engeneer. ' .
            'In 2012 the company had high demand for a PHP developer. ' .
            'So as a part-timer I started to work as PHP coder, developing our own dialer (based on GNUDialer), which we sucessfully used for outbound calls. ' .
            'The core of the dialer was written in C++, which I had to modify in order to work with the new agent\'s interface, ' .
            'which I made in Vanilla PHP and jQuery. ' .
            'Another my project was <a href="https://github.com/vldmitrofanov/yp-downloader" target="_blank">PHP YellowPages parser</a> ' .
            '(Vanilla PHP and Wordpress plugin). As an outbound callcenter we always were in needs of fresh leads. So my parser has come handy. ' .
            'It could parse and download a few hundred thousands leads a day. Also a back-end, where operator can filter leads by zip-codes, ' .
            'cities or states, remove duplicates, create order to download selected areas/businesses. All downloading was going through a ' .
            'proxies whose were downloaded and tested automatically. ' .
            'Thousands lines of PHP code and Bash scripting I wrote made me think about turning into a web developer eventually.</p>';

        DB::table('work_experiences')->insert([
            'start_date' => '2009-09-01',
            'end_date' => '2017-06-15',
            'user_id' => $user->id,
            'company_name' => '724Care Inc, Cebu Philippines (IT manager, PHP Developer)',
            'description' => $description
        ]);

        DB::table('work_experiences')->insert([
            'start_date' => '2011-08-15',
            'present' => 1,
            'user_id' => $user->id,
            'company_name' => 'Upwork.com (part-time freelancer)',
            'description' => '<p class="sm-bt">To earn some extra income I started to work on-line on Freelancer.com and Upwork.com (former Odesk.com) freelancing platfoems. Currently I don\'t maintain my Freelancer.com account. Link to my Upwork profile is included in the footer.</p>'
        ]);

        $description = "<p class=\"sm-bt\">
        Working full time as full-stack web developer. Completed several projects using PHP7 (Laravel), VueJS, NodeJS, MySQL, Postgres, Mongo, Redis (for the queues). 
        Each project includes 3-rd parties oAuth (Google+, Facebook), and online payment processing.</p>" .
            "<p class=\"sm-bt\">Three major projects I've done with EmbassyAlliance are: </p>" .
            '<p class="sm-bt">
                <a href="https://www.joyscoot.com">JoyScoot</a> scooter rental in Singapore. Part of this project is Web POS, which allows our operators to work 
                direcly with the databese of the scooters on their Cash Register
            </p>' .
            '<p class="sm-bt">	
        <a href="https://www.attractionsbox.com">Attractions Box</a> online booking for the attractions tickets. Project is still in startup stage, but fully operating. 
        Currently we cover Singapore only.
    </p>' .
            '<p>	
    <a href="https://www.embassy.camp">Embassy Camps</a> Summer camps for the children based in Malaysia and Singapore.
</p> ';

        DB::table('work_experiences')->insert([
            'start_date' => '2017-06-15',
            'end_date' => '2019-10-18',
            'user_id' => $user->id,
            'company_name' => 'EmbassyAlliance Travel (web developer)',
            'description' => $description
        ]);

        $description = "<p class=\"sm-bt\">In the Sep 2019 I've received an offer from Hitchbird, a wedding organizer company. Old website has been built with Code Igniter, running on PHP 5 and was pretty much outdated. 
        My first task was to migrate all the date and build a new version of the website with Laravel and NuxtJs. The result can be seen here:</p>" .
            '<p>	
    <a href="https://www.hitchbird.com" target="_blank">hitchbird.com</a> Wedding event organizer.
</p> ';
        DB::table('work_experiences')->insert([
            'start_date' => '2019-10-18',
            'present' => 1,
            'user_id' => $user->id,
            'company_name' => 'Hitchbird (web developer)',
            'description' => $description
        ]);
    }
}
