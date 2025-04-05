<?php

namespace Database\Seeders;

use App\Models\Agricultrel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgricultrelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $about_agricultrel = Agricultrel::create([
            's_key'         => 'about_us',
            's_cover'       => 'front/agricultrels/about_us.png',
            'b_enabled'     => true,
        ]);
        $about_agricultrel->translations()->createMany([
            [
                's_locale'        => 'en',
                's_name'        => 'About Us',
                's_description' => 'The Developmental Agricultural Association is a non-profit, non-governmental association, licensed as a charitable organization according to
                Law of Charitable and Civil Organizations Act No (1) of the year 2000 under No (7779).
                The association was founded in the Middle Area, more specifically Salqa Valley area in Deir El Balah city, the Gaza Strip, as a neutral, civil organization that operates transparently to provide services to the agricultural sector and all farmers of both genders in their locations as its scope of work extends to outside the middle governorate to the entirety of homeland.',
            ],
        ]);
        $vision_agricultrel = Agricultrel::create([
            's_key'         => 'vision',
            's_cover'       => 'front/agricultrels/vision.png',
            'b_enabled'     => true,
        ]);
        $vision_agricultrel->translations()->createMany([
            [
                's_locale'        => 'en',
                's_name'        => 'Vision',
                's_description' => 'The association seeks to serve, promote and empower a sustainable community in which there is full respect and societal peace in all sectors especially the agricultural sector in order to take care of land and human life development especially for farmers. In addition, it seeks to cultivate rural areas to secure farmers’ essential needs autonomously and independently taking best advantage of human and natural resources to achieve food security thus empowering Palestinian economy.',
            ],
        ]);
        $mission_agricultrel = Agricultrel::create([
            's_key'         => 'mission',
            's_cover'       => 'front/agricultrels/mission.png',
            'b_enabled'     => true,
        ]);
        $mission_agricultrel->translations()->createMany([
            [
                's_locale'        => 'en',
                's_name'        => 'Mission',
                's_description' => 'The association seeks to aid farmers -including young farmers- and to support them through studying their needs and working to reinforce their steadfastness through participation in developmental and relief projects, networking with partner associations and unifying efforts in field activities in rural areas, especially projects owned by women who depend on agriculture to support their families -whether poultry or vegetative projects- in the absence of their main provider. The association seeks to realize this through training, increasing abilities to manage economic projects and improving agricultural produce consequently empowering the Palestinian economy.',
            ],
        ]);
        $value_agricultrel = Agricultrel::create([
            's_key'         => 'value',
            's_cover'       => 'front/agricultrels/value.png',
            'b_enabled'     => true,
        ]);
        $value_agricultrel->translations()->createMany([
            [
                's_locale'        => 'en',
                's_name'        => 'Value',
                's_description' => 'The Association Seeks To
                    Organize and classify farmers-young and old- to identify their essential needs utilizing scientific research to increase their agricultural abilities in the agricultural sector -both plant and livestock production.
                    Aid in developing current projects through consultation, training and educating the necessary skills to better manage their projects. These skills include researching project feasibility and such.
                    Encourage farmers to organize their sector into groups and unions, join relevant associations to get their voice heard and strengthen them in their more influential collective work.
                    Provide relief and social services to the families of young farmers and female project owners led by a mail female provider especially orphaned families and marginalized families in the local community.
                    Empower and support projects led by people with special needs of both genders, include them in society and empower them economically.
                    Aid farmers in defending their land, their projects, their right to manage their land and their access to water and renewable energy. To protect them and support them during natural disasters through compensation in case of damages.
                     
                     
                     
                     
                    Ad Valorem, Sensible Management:
                    The association is established on a principle of clarity and transparency that runs through its activities, procedures and objective policies evident in documentation, data saving and easy access of this data to beneficiaries, the public, relevant, official bodies, donors and funders.
                    Active participation of relevant parties of both genders in the process of decision making whether inside or outside of the association.
                    The association functions through a system of networking and coordination with relevant associations holding shared objectives to serve public interest and not to waste resources and efforts.
                    Volunteering is a key feature of the association’s mission evident in encouraging voluntary work, opening the door for applicants to participate at work and helping others during natural disasters, crises and even war. A good number of volunteers are already working in the association.',
            ],
        ]);

    }
}
