<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IndustriesSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //health care sections
        DB::table('industries_security_sections')->insert([
        'industries_page_id' => '1',
        'heading' => 'Improving productivity',
        'description' => 'Any hospital should be capable to ensure staff, patients and visitors that the environment is safe. The medical departments have strict surrounding with zero tolerance to violence where protection and freedom are paramount.',
        'image' => 'improvingProductivity.png',
        ]);
        DB::table('industries_security_sections')->insert([
        'industries_page_id' => '1',
        'heading' => 'Legal troubles',
        'description' => 'Any hospital should be capable to ensure staff, patients and visitors that the environment is safe. The medical departments have strict surrounding with zero tolerance to violence where protection and freedom are paramount.',
        'image' => 'LegalTroubles.png',
        ]);
        DB::table('industries_security_sections')->insert([
        'industries_page_id' => '1',
        'heading' => 'Spreading of COVID-19',
        'description' => 'Keeping social distance is a necessary preventive measure during pandemic or epidemic, and strengthening control is an important task for hospitals. Automatically checking the face masks is also of great importance.',
        'image' => 'Spreading-Covid19.png',
        ]);


        //industrials sections
        DB::table('industries_security_sections')->insert([
        'industries_page_id' => '2',
        'heading' => 'Production efficiency',
        'description' => 'The work of a conveyor can help or ruin your business. Time is money - if your conveyors are operating ineffectively, you are cutting into your bottom line. At least, a conveyor system should run constantly and should not require many downtime. However, the conveyor system is also a key for increasing of your business’ efficiency.',
        'image' => 'ProductionEfficiency.png',
        ]);
        DB::table('industries_security_sections')->insert([
        'industries_page_id' => '2',
        'heading' => 'Internal factors security',
        'description' => 'Plants and manufactures usually have large property: for example, an average metallurgical plant is comparable to a small city, and the sewing fabric or food production factory is about the size of a stadium. You have observe entry permits to special areas restricted for vehicles or persons. It is quite challenging to control such an area visually by patrolling.',
        'image' => 'InternalFactorsSecurity.png',
        ]);
        DB::table('industries_security_sections')->insert([
        'industries_page_id' => '2',
        'heading' => 'Technical service security',
        'description' => 'Industrial processes increasingly involve the use and the manufacture of highly dangerous substances. An occasional fire may occur, if can cause a potential hazard to the industrial plant, its staff and the people living nearby. Fires affect thousands of companies every year, resulting in injury, lost customer trust and building damage. Security service should establish a fire prevention and readiness program to avoid potential threats to your business.',
        'image' => 'TechnicalServiceSecurity.png',
        ]);

        //public safety sections
        DB::table('industries_security_sections')->insert([
            'industries_page_id' => '3',
            'heading' => 'Lowering crime rate',
            'description' => 'Most private businesses and households are afraid to lose or damage their houses, but they cannot afford security service. To guarantee public safety, the authorities need to find a compromise between vigilance, security, peace-of-mind and cost. They should be able to lower the crime rate of the region to a minimum The best way is to prevent crime before it happens. A potential criminal would refrain from the crime out of the fear of being caught.',
            'image' => 'Lowering-crime-rate.png',
            ]);
            DB::table('industries_security_sections')->insert([
            'industries_page_id' => '3',
            'heading' => 'Public transport safety',
            'description' => 'The public transport system is one of the key elements of modern society. Travelling by public transport ought to be one of the most safe ways to travel. Security measures, from deterring graffiti artists in the depot to ensuring a secure ride on a bus or tram, are of great importance to transportation companies. Having well-trained staff is not enough to keep passengers safe. The public transport network should have modern safety solutions automatically functioning round the clock.',
            'image' => 'PublicTransportSafety.png',
            ]);
            DB::table('industries_security_sections')->insert([
            'industries_page_id' => '3',
            'heading' => 'Improving convenience',
            'description' => 'It is impossible to under-evaluate the impact of sense of security to everyday life. No one wants to live in an uncomfortable area. A careful and protective environment should be created on the routes people use every day. To bring more comfort and convenience in everyday life, people should be alerted from speeding or from crossing the road at a red light. It is also noteworthy to monitor traffic to make real-time traffic reports.',
            'image' => 'ImprovingConvenience.png',
            ]);
        //real state sections
        DB::table('industries_security_sections')->insert([
            'industries_page_id' => '4',
            'heading' => 'Prevention of incidents',
            'description' => 'Damage to human health or property should be avoided by monitoring the property round the clock. It is quite challenging to monitor a large area by patrolling. Security service needs a certain device tobv react to suspicious incidents faster and more effectively, reducing the number of false positives.',
            'image' => 'Preventions-of-incidents.png',
            ]);
            DB::table('industries_security_sections')->insert([
            'industries_page_id' => '4',
            'heading' => 'Effective authentication system',
            'description' => 'There might be special areas demanding authorized access. Manual control of visitors is not always possible or convenient, furthermore it requires additional labor force. Authentication enables you to keep certain zones secure by admitting authorized persons. Ideally, the system identifies people automatically and grants them access in a few seconds. Authentication acts as the first protection line and allows access to the property only for those who are authorized by the manager or other authorities.',
            'image' => 'Effective-authentications.png',
            ]);
            DB::table('industries_security_sections')->insert([
            'industries_page_id' => '4',
            'heading' => 'Fire protection',
            'description' => 'Fire can have a devastating impact on anybody who is unfortunate enough to be near. There are many aspects of fires that can cause a great harm. The risk of fire and the consequent loss of life, injury and damage to property is always vital. To detect smoke and fires there are solutions that function round the clock.',
            'image' => 'Fire-protection.png',
            ]);
        //retail sections
        DB::table('industries_security_sections')->insert([
            'industries_page_id' => '5',
            'heading' => 'Security and loss prevention',
            'description' => 'Implementing of a retail surveillance system with remote access can help to deter theft and catch shoplifting real-time. Retail video analytics can help loss prevention teams get more out of their limited manpower and budget by focusing on anomalies that indicate deviations from settled protocols, internal shrink, shoplifting or fraudulent activities. Complex use of video cameras and analytical modules remarkably reduces losses at the checkout. The module monitors cashier transactions and points out suspicious actions. Then the system automatically alerts the person in charge.',
            'image' => 'Security and loss prevention.png',
            ]);
            DB::table('industries_security_sections')->insert([
            'industries_page_id' => '5',
            'heading' => 'Optimizing business operations',
            'description' => 'A store equipped with a 360° ceiling-mounted camera, with a clear line of sight to every corner and video analytics on board, can generate valuable data. It helps to avoid long queues and optimize the cashier\'s work. Using the object recognition program, the module determines number of people in the queue. If the number exceeds the specified value, the manager receives a notification activate one more cash register. Video analytics helps to understand reasons for patterns and peaks in store traffic, allowing you to react in a timely manner to increasing of buyers’ flow. It is also important to have remote access to staff work when selling.',
            'image' => 'Optimisation business.png',
            ]);
            DB::table('industries_security_sections')->insert([
            'industries_page_id' => '5',
            'heading' => 'Improving marketing strategies',
            'description' => 'Video analytic applications can optimize marketing strategies by analyzing customer behavior and providing actionable insights to retail management. The layout of a store or supermarket is quite an important factor for successful business. Knowing how customers typically move around a store and how much time they spend in specific departments can help to optimize product placement to raise sales.You can evaluate advertising strategies by defining trends in customer’s interaction with a product - plan more effective promotions, special offers and discounts. The data obtained through video analytics can be used to improve interaction with different demographic groups to expand the customer base.',
            'image' => 'Improving marketing strategies.png',
            ]);
        //transport and storage sections
        DB::table('industries_security_sections')->insert([
            'industries_page_id' => '6',
            'heading' => 'Constant monitoring of goods',
            'description' => 'It is vital to track all movements of goods and monitor all operations, such as distributing goods to storage locations, collecting orders and shipping them to customers. At each stage, the location of the goods and the person in charge of moving them should be known. A device capable of tracking goods can be of great help in the warehouse. Workers should be able to easily distinguish between types of goods and find them in the data archive.',
            'image' => 'Constant-Monitoring.png',
            ]);
            DB::table('industries_security_sections')->insert([
            'industries_page_id' => '6',
            'heading' => 'Site security and occupational safety',
            'description' => 'In case of direct damage to goods or staff errors leading to material losses, the time of the incident and the person responsible should be quickly established. Transport is a critical infrastructure. Each vehicle that moves around the warehouse should be monitored. This concerns both the customers\' cars and the company\’s vehicles. In case of an accident, it ought to be easy to establish the chain of events. Employee personal protective equipment is often essential to preserving their health. Manually checking whether employees are wearing work clothes or helmets can be quite challenging.',
            'image' => 'Site-security.png',
            ]);
            DB::table('industries_security_sections')->insert([
            'industries_page_id' => '6',
            'heading' => 'Fire preventions',
            'description' => 'Fire safety is of utmost importance for any warehouse. Business owners are responsible for ensuring that the workplace meets all required fire safety standards. There are many reasons why a fire may occur, and not all of them are easily predictable. In the right conditions, flames and smoke can spread rapidly and cause considerable damage. The fire is hazardous to the building itself and staff. It is vital to set up a fire protection system in the warehouse or logistics center.',
            'image' => 'Fire-prevention.png',
            ]);
    }
}
