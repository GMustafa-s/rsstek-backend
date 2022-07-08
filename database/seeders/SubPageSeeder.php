<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // Business Page ID=1

        // solution sub pages (1-Active POS)
        DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '1',
            'title' => 'Active POS',
            'description' => 'The intelligent module for monitoring cash and banking operations, weighing and calculating machines is a reliable and highly effective tool for automatic and manual detection and prevention of personnel fraud and shoppers theft in real time and offline.',
            'fetaured_image' => 'bg-image.png',
            'video' => 'video.mp4',
            'slug' => 'active-pos',
            'meta_name' => 'Active POS',
            'meta_description' => 'The intelligent module for monitoring cash and banking operations, weighing and calculating machines is a reliable and highly effective tool for automatic and manual detection and prevention of personnel fraud and shoppers theft in real time and offline.',
        ]);
        // sub pages solutions sections
        DB::table('solution_sections')->insert([
            'solution_sub_pages_id' => '1',
            'title' => 'How it Works',
            'body' => '<ul style="margin-right: 0px; margin-bottom: 21px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgba(51, 51, 51, 0.8);"><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Centralised analytics over the network from multiple servers;</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Automatic detection of alarming incidents at the checkout;</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Lots of interactive reports and built-in detectors of violations;</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Support for most cash register systems on the market;</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Ergonomic event analytics interface;</li></ul><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">Default alarming event colouring The module implements a system of detectors of violations, based on many years of experience and consultations with leading experts in the field of trade, as a result of which ActivePOS independently monitors possible violations in the work of the cashier and, if detected, immediately notifies the operator. The detectors are created in the form of plug-in scripts, which allows them to be adapted to the conditions of a particular object. Data on suspicious incidents and confirmation of uncleanness of employees, along with a dozen unique reports, are provided to analysts and can be verified by manual event search, which in total guarantees full control over the situation.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">The system saves not the receipt text but the sales events, cancellations, refunds, annulment etc in the database. Also there is capability of data search in any combination of facts, receipt number, the cashier\'s name, period of time, purchase sum etc.</p>',

        ]);
       
        // solution sub pages (2-Heat Map on Map)
        DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '1',
            'title' => 'Heat Map on Map',
            'description' => 'Multi-camera map of the movement of people, working on the basis of a neural network detector of people (superimposed on the map of the room). Three types of map: static (highlighting the places where visitors stay the longest), traffic amount map, traffic direction map. The module allows you to exclude employees from statistics by the color of their clothes. Works on the TRASSIR Neuro Station server. offload analytics is possible (multiple TRASSIR servers transfer images to 1 server for processing). The cost for processing one video channel is indicated (the number of channels depends on the configuration of the room)',
            'fetaured_image' => 'bg-image.png',
            'video' => 'video.mp4',
            'slug' => 'heat-map-on-map',
            'meta_name' => 'Heat Map on Map',
            'meta_description' => 'Multi-camera map of the movement of people, working on the basis of a neural network detector of people (superimposed on the map of the room). Three types of map: static (highlighting the places where visitors stay the longest), traffic amount map, traffic direction map. The module allows you to exclude employees from statistics by the color of their clothes. Works on the TRASSIR Neuro Station server. offload analytics is possible (multiple TRASSIR servers transfer images to 1 server for processing). The cost for processing one video channel is indicated (the number of channels depends on the configuration of the room)',
        ]);
       

           // solution sub pages (3-Neuro Counter)
           DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '1',
            'title' => 'Neuro Counter',
            'description' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">Counter of objects - people, cars, bicycles. With high precision detects and counts objects entering or leaving a specified area or crossing a virtual line. You can count objects by category, for example, by the color of clothing, and exclude certain categories from the report, for example, employees.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">The detector is based on deep learning neural networks. The use of ANN significantly reduces the number of false positives.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">Neuro Counter runs on NeuroStation series video recorders and supports Offload analytics (processing streams from other servers).</p>',
            'fetaured_image' => 'bg-image.png',
            'video' => 'video.mp4',
            'slug' => 'neuro-counter',
            'meta_name' => 'Neuro Counter',
            'meta_description' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">Counter of objects - people, cars, bicycles. With high precision detects and counts objects entering or leaving a specified area or crossing a virtual line. You can count objects by category, for example, by the color of clothing, and exclude certain categories from the report, for example, employees.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">The detector is based on deep learning neural networks. The use of ANN significantly reduces the number of false positives.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">Neuro Counter runs on NeuroStation series video recorders and supports Offload analytics (processing streams from other servers).</p>',
        ]);
      

         // solution sub pages (4-Queue Detector)
         DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '1',
            'title' => 'Queue Detector',
            'description' => 'Queue detection module based on a neural network. Includes a reporting module and alerts on exceeding the queue length. When used in conjunction with the TRASSIR ActivePOS module, it allows you to enable alerts based on the number of operating cash registers. Works on the Neuro Station server. Offload analytics is possible (multiple RRSTEK servers transmit images to 1 server for processing).',
            'fetaured_image' => 'bg-image.png',
            'video' => 'video.mp4',
            'slug' => 'queue-detector',
            'meta_name' => 'Queue Detector',
            'meta_description' => 'Queue detection module based on a neural network. Includes a reporting module and alerts on exceeding the queue length. When used in conjunction with the TRASSIR ActivePOS module, it allows you to enable alerts based on the number of operating cash registers. Works on the Neuro Station server. Offload analytics is possible (multiple RRSTEK servers transmit images to 1 server for processing).',
        ]);
        // sub pages solutions sections
        DB::table('solution_sections')->insert([
            'solution_sub_pages_id' => '4',
            'title' => 'How it Works',
            'body' => '<p><br></p><ul style="margin-right: 0px; margin-bottom: 21px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgba(51, 51, 51, 0.8);"><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Monitor queue lengths;</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Respond to incidents in a timely manner;</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Use statistics to optimize work processes.</li></ul><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">The functionality can be expanded by connecting additional scripts.</p>',

        ]);



         // solution sub pages (5-Shelf Detector)
         DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '1',
            'title' => 'Shelf Detector',
            'description' => 'The module for analyzing the fullness of the shelves is used to timely inform about empty shelves with goods. In the event of voids exceeding the specified value, the module sends notifications to the store employees. The module also generates reports on the status of shelves at specified intervals. Thanks to reporting, the administration of the retail network can determine / predict the level of demand for certain groups of goods and track the performance of employees responsible for filling the shelves.',
            'fetaured_image' => 'bg-image.png',
            'video' => 'video.mp4',
            'slug' => 'shelf-detector',
            'meta_name' => 'Shelf Detector',
            'meta_description' => 'The module for analyzing the fullness of the shelves is used to timely inform about empty shelves with goods. In the event of voids exceeding the specified value, the module sends notifications to the store employees. The module also generates reports on the status of shelves at specified intervals. Thanks to reporting, the administration of the retail network can determine / predict the level of demand for certain groups of goods and track the performance of employees responsible for filling the shelves.',
        ]);



            // solution sub pages (6-Staff Tracker)
            DB::table('solution_sub_pages')->insert([
                'page_categories_id' => '1',
                'title' => 'Staff Tracker',
                'description' => 'The analytics module helps to control the quality of staff work in offline retail. The module monitors the availability of the required number of employees in service areas, keeps records of serviced and left unattended visitors, generates a report on the speed and quality of service, in case of violation of the service standards by personnel, it sends notifications in real time. Staff Tracker identifies employees by uniform color. Preserves video footage for evidence base.',
                'fetaured_image' => 'bg-image.png',
                'video' => 'video.mp4',
                'slug' => 'staff-tracker',
                'meta_name' => 'Staff Tracker',
                'meta_description' => 'The analytics module helps to control the quality of staff work in offline retail. The module monitors the availability of the required number of employees in service areas, keeps records of serviced and left unattended visitors, generates a report on the speed and quality of service, in case of violation of the service standards by personnel, it sends notifications in real time. Staff Tracker identifies employees by uniform color. Preserves video footage for evidence base.',
            ]);
        


              // solution sub pages (7-Workspace Detector)
              DB::table('solution_sub_pages')->insert([
                'page_categories_id' => '1',
                'title' => 'Workspace Detector',
                'description' => '<p class="viewport-holder slideDown delay-2 viewport-active" style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; opacity: 1; visibility: visible; transition: opacity 0.3s cubic-bezier(0.26, 0.46, 0.45, 0.55) 0.5s, transform 0.3s cubic-bezier(0.26, 0.46, 0.45, 0.55) 0s; transform: none; color: rgba(51, 51, 51, 0.8);">Neural network intelligent module that works only on TRASSIR Neuro Station series video recorders. Supports Offload analytics.</p><p class="viewport-holder slideDown delay-3 viewport-active" style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; opacity: 1; visibility: visible; transition: opacity 0.3s cubic-bezier(0.26, 0.46, 0.45, 0.55) 0.7s, transform 0.3s cubic-bezier(0.26, 0.46, 0.45, 0.55) 0s; transform: none; color: rgba(51, 51, 51, 0.8);">TRASSIR Workplace Detector is designed to monitor and track employee\'s working time.</p>',
                'fetaured_image' => 'bg-image.png',
                'video' => 'video.mp4',
                'slug' => 'workspace-detector',
                'meta_name' => 'Workspace Detector',
                'meta_description' => '<p class="viewport-holder slideDown delay-2 viewport-active" style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; opacity: 1; visibility: visible; transition: opacity 0.3s cubic-bezier(0.26, 0.46, 0.45, 0.55) 0.5s, transform 0.3s cubic-bezier(0.26, 0.46, 0.45, 0.55) 0s; transform: none; color: rgba(51, 51, 51, 0.8);">Neural network intelligent module that works only on TRASSIR Neuro Station series video recorders. Supports Offload analytics.</p><p class="viewport-holder slideDown delay-3 viewport-active" style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; opacity: 1; visibility: visible; transition: opacity 0.3s cubic-bezier(0.26, 0.46, 0.45, 0.55) 0.7s, transform 0.3s cubic-bezier(0.26, 0.46, 0.45, 0.55) 0s; transform: none; color: rgba(51, 51, 51, 0.8);">TRASSIR Workplace Detector is designed to monitor and track employee\'s working time.</p>',
            ]);
              // sub pages solutions sections
            DB::table('solution_sections')->insert([
            'solution_sub_pages_id' => '7',
            'title' => 'How it Works',
            'body' => '<p><br></p><ul style="margin-right: 0px; margin-bottom: 21px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgba(51, 51, 51, 0.8);"><li class="viewport-holder slideDown delay-6 viewport-active" style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; opacity: 1; visibility: visible; transition: opacity 0.3s cubic-bezier(0.26, 0.46, 0.45, 0.55) 1.2s, transform 0.3s cubic-bezier(0.26, 0.46, 0.45, 0.55); transform: none; position: relative;">The person in charge sets the necessary parameters for the module\'s work: the area of the working area, the schedule of employees, the permissible time of absence of an employee at the workplace.</li><li class="viewport-holder slideDown delay-7 viewport-active" style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; opacity: 1; visibility: visible; transition: opacity 0.3s cubic-bezier(0.26, 0.46, 0.45, 0.55) 1.4s, transform 0.3s cubic-bezier(0.26, 0.46, 0.45, 0.55); transform: none; position: relative;\">A camera with a connected module is installed in an office or other work area.</li><li class="viewport-holder slideDown delay-8 viewport-active" style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; opacity: 1; visibility: visible; transition: opacity 0.3s cubic-bezier(0.26, 0.46, 0.45, 0.55) 1.6s, transform 0.3s cubic-bezier(0.26, 0.46, 0.45, 0.55); transform: none; position: relative;\">The module generates a notification and sends a message to the person in charge if the employee is late, left earlier or has been absent from the workplace for more than the prescribed time.</li><li class="viewport-holder slideDown delay-9 viewport-active" style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; opacity: 1; visibility: visible; transition: opacity 0.3s cubic-bezier(0.26, 0.46, 0.45, 0.55) 1.9s, transform 0.3s cubic-bezier(0.26, 0.46, 0.45, 0.55); transform: none; position: relative;\">The module daily generates reports on the actual time of stay and absence of an employee on site, sends reports by mail to the person in charge.</li></ul><p class="viewport-holder slideDown delay-10 viewport-active" style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; opacity: 1; visibility: visible; transition: opacity 0.3s cubic-bezier(0.26, 0.46, 0.45, 0.55) 2.1s, transform 0.3s cubic-bezier(0.26, 0.46, 0.45, 0.55) 0s; transform: none; color: rgba(51, 51, 51, 0.8);\">The functionality can be expanded by connecting additional scripts.</p>',

        ]);
        
    


            // Healthcare Page ID=2

               // solution sub pages (8-Face Mask Detector)
               DB::table('solution_sub_pages')->insert([
                'page_categories_id' => '2',
                'title' => 'Face Mask Detector',
                'description' => 'Neural network software, works only on Neuro Station series DVRs. The Face Mask Detector module is designed to monitor compliance with security measures in a pandemic or epidemic - wearing a medical mask as a means of personal protection.',
                'fetaured_image' => 'bg-image.png',
                'video' => 'video.mp4',
                'slug' => 'face-mask-detector',
                'meta_name' => 'Face Mask Detector',
                'meta_description' => 'Neural network software, works only on Neuro Station series DVRs. The Face Mask Detector module is designed to monitor compliance with security measures in a pandemic or epidemic - wearing a medical mask as a means of personal protection.',
            ]);
              // sub pages solutions sections
            DB::table('solution_sections')->insert([
            'solution_sub_pages_id' => '8',
            'title' => 'How it Works',
            'body' => '<ul style="margin-right: 0px; margin-bottom: 21px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgba(51, 51, 51, 0.8);"><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">A CCTV camera monitors the monitoring area and transmits data to the server.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">The detector analyzes the stream, finds faces and determines if they have a mask.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">An additional script closes dry contacts, initiating a speakerphone announcement and sends a violation message.</li></ul><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">The functionality can be expanded by connecting additional scripts. Eliminated false positives on faces that are not visible in the frame.</p>',

        ]);
        



           // solution sub pages (9-Social Distance Detector)
           DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '2',
            'title' => 'Social Distance Detector',
            'description' => 'Neural network software, works only on Neuro Station series DVRs. The Social Distance Detector module is designed to monitor the observance of social distance between people in queues and in public places characterized by a crowd of people.',
            'fetaured_image' => 'bg-image.png',
            'video' => 'video.mp4',
            'slug' => 'social-distance-detector',
            'meta_name' => 'Social Distance Detector',
            'meta_description' => 'Neural network software, works only on Neuro Station series DVRs. The Social Distance Detector module is designed to monitor the observance of social distance between people in queues and in public places characterized by a crowd of people.',
        ]);
          // sub pages solutions sections
        DB::table('solution_sections')->insert([
        'solution_sub_pages_id' => '9',
        'title' => 'How it Works',
        'body' => '<ul style="margin-right: 0px; margin-bottom: 21px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgba(51, 51, 51, 0.8);"><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">A CCTV camera monitors the monitoring area and transmits data to the server.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">The detector analyzes the flow.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">The customized script measures the distance between people.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">In the event of a violation, the script closes dry contacts - a notification about the need to observe security measures is heard over the speakerphone - and initiates the sending of a violation message.</li></ul><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">Social Distance Detector includes neural network modules - a people detector and a lens, an object tracker.</p>',

    ]);


        // solution sub pages (10-Thermal Camera)
        DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '2',
            'title' => 'Thermal Camera',
            'description' => 'The Thermal Camera module is intended to connect a thermal imaging camera to RRSTEK OS. It displays not only video data, but also the information of changing the body temperature of a person.',
            'fetaured_image' => 'bg-image.png',
            'video' => 'video.mp4',
            'slug' => 'thermal-camera',
            'meta_name' => 'Thermal Camera',
            'meta_description' => 'The Thermal Camera module is intended to connect a thermal imaging camera to RRSTEK OS. It displays not only video data, but also the information of changing the body temperature of a person.',
        ]);
       



        // Security Page ID=3


        // solution sub pages (11-Auto ANPR)
        DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '3',
            'title' => 'Auto ANPR',
            'description' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">An intelligent module for recognizing state registration plates of cars is designed for automatic identification of license plates of vehicles that come into the field of view of a video camera. The automatic license plate recognition system allows you to track the passage of the vehicle of interest from the archive on screenshots and video fragments.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">Supported maintenance, generation of detailed reports, hierarchical logging of recognized autonomous groups, integration with speed measuring devices and security complexes, including access control and fire alarm equipment (barriers, barriers, barriers). In automatic mode, the module detects vehicles that are stolen or violate parking rules.</p>',
            'fetaured_image' => 'bg-image.png',
            'video' => 'video.mp4',
            'slug' => 'auto-anrp',
            'meta_name' => 'Auto ANPR',
            'meta_description' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">An intelligent module for recognizing state registration plates of cars is designed for automatic identification of license plates of vehicles that come into the field of view of a video camera. The automatic license plate recognition system allows you to track the passage of the vehicle of interest from the archive on screenshots and video fragments.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">Supported maintenance, generation of detailed reports, hierarchical logging of recognized autonomous groups, integration with speed measuring devices and security complexes, including access control and fire alarm equipment (barriers, barriers, barriers). In automatic mode, the module detects vehicles that are stolen or violate parking rules.</p>',
        ]);
        // sub pages solutions sections
        DB::table('solution_sections')->insert([
            'solution_sub_pages_id' => '11',
            'title' => 'Functionality',
            'body' => '<ul style="margin-right: 0px; margin-bottom: 21px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgba(51, 51, 51, 0.8);"><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">High accuracy of recognition of car registration plates;</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Recognition of any license plates and vehicles;</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Recognition of registration plates of cars from different countries.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Recognition from complex angles.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">No problems with the admission of cars on the territory.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Flexible configuration of the recognition module.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Delegation of computing on a server with a GPU from low-power DVRs.</li></ul><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">The new version of Auto ANPR 5 is compatible with the NeuroStation and QuattroStation series recorders. These servers use hardware graphics accelerators to achieve high efficiency when processing large video streams. Using the off-load technology, the module remotely processes video on any RRSTEK video recorders - connect them to NeuroStation servers over the network or through the cloud.</p>',
        ]);



          // solution sub pages (12-Crowd Detector)
          DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '3',
            'title' => 'Crowd Detector',
            'description' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">Overcrowding detector with customizable threshold - when the allowed number of people is exceeded, the module sends a notification in real time. Designed to ensure safety in indoor and outdoor areas.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">The detector is built on the basis of neural technology, which reduces the number of false positives.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">Crowd Detector works with NeuroStation series servers. Supports Offload analytics - processes streams from other RRSTEK DVRs.</p>',
            'fetaured_image' => 'bg-image.png',
            'video' => 'video.mp4',
            'slug' => 'crowd-detector',
            'meta_name' => 'Crowd Detector',
            'meta_description' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">Overcrowding detector with customizable threshold - when the allowed number of people is exceeded, the module sends a notification in real time. Designed to ensure safety in indoor and outdoor areas.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">The detector is built on the basis of neural technology, which reduces the number of false positives.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">Crowd Detector works with NeuroStation series servers. Supports Offload analytics - processes streams from other RRSTEK DVRs.</p>',
        ]);
    


             // solution sub pages (13-Direction Detector)
             DB::table('solution_sub_pages')->insert([
                'page_categories_id' => '3',
                'title' => 'Direction Detector',
                'description' => 'The module is used to ensure safety, track the movement of objects - people, cars, bicycles - in a prohibited direction. When crossing a predetermined line or changing the trajectory of movement, the module sends alarm notifications to the guard and saves the frame for the evidentiary base.',
                'fetaured_image' => 'bg-image.png',
                'video' => 'video.mp4',
                'slug' => 'direction-detector',
                'meta_name' => 'Direction Detector',
                'meta_description' => 'The module is used to ensure safety, track the movement of objects - people, cars, bicycles - in a prohibited direction. When crossing a predetermined line or changing the trajectory of movement, the module sends alarm notifications to the guard and saves the frame for the evidentiary base.',
            ]);
            // sub pages solutions sections
            DB::table('solution_sections')->insert([
                'solution_sub_pages_id' => '13',
                'title' => 'Functionality',
                'body' => '<ul style="margin-right: 0px; margin-bottom: 21px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgba(51, 51, 51, 0.8);"><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Works on the basis of a neural object detector, which allows you to recognize objects with high accuracy.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Uses an object tracking mechanism to count unique objects and analyze their movement</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">The operator can mark up to 16 lines on the screen for motion analysis.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Generates notifications if an object crosses the line in a prohibited direction</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">It is possible to expand the basic functionality using scripts</li></ul>',
            ]);


            
             // solution sub pages (14-Face Recognition)
             DB::table('solution_sub_pages')->insert([
                'page_categories_id' => '3',
                'title' => 'Face Recognition',
                'description' => 'The face recognition module consists of FaceSDK to compare faces and Face Search to search for faces in the database.',
                'fetaured_image' => 'bg-image.png',
                'video' => 'video.mp4',
                'slug' => 'face-recognition',
                'meta_name' => 'Face Recognition',
                'meta_description' => 'The face recognition module consists of FaceSDK to compare faces and Face Search to search for faces in the database.',
            ]);
            // sub pages solutions sections
            DB::table('solution_sections')->insert([
                'solution_sub_pages_id' => '14',
                'title' => 'Functionality',
                'body' => '<p><br></p><ul style="margin-right: 0px; margin-bottom: 21px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgba(51, 51, 51, 0.8);"><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Human Face Detection: Find and highlight a face in the camera image. Face detection from any angle, including a profile.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Face identification and quality assessment: comparing the found face with a photo in the database and determining the degree of match.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Determination of gender and age by face.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Recognition of certain attributes of a person\'s appearance: recognition of the color of hair, glasses, headwear, etc. and search by these parameters.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;\">Recognition of the use of a photograph in the frame: comparison of various characteristics of a face with a static image to prevent deception.</li><li style=\"margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;\">Search in the archive by face.</li><li style=\"margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;\">Integration into ACS.</li></ul><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);\">In the access control mode, the logic of work changes: the result is not immediately submitted for comparison with the persons in the database, but within a certain time (a specified period of optimal quality), the incoming data is checked against the existing ones and replaced with better ones - better information is used for recognition. The result does not wait for the end of the track - recording to the database and the generation of the Face Recognized event occur immediately.</p>',
            ]);




             // solution sub pages (15-Neuro Detector)
             DB::table('solution_sub_pages')->insert([
                'page_categories_id' => '3',
                'title' => 'Neuro Detector',
                'description' => 'Object detector (people, people&#39;s heads, cars, bicycles) based on neural networks, for use in security purposes. Allows you to accurately detect objects in the frame. When a foreign object enters the specified area, the detector generates an alarm. Allows to significantly reduce the number of false alarms by filtering foreign objects and noise. Works on the NeuroStation server. Offload analytics is possible (multiple RRSTEK servers transmit images to 1 server for processing).',
                'fetaured_image' => 'bg-image.png',
                'video' => 'video.mp4',
                'slug' => 'neuro-detector',
                'meta_name' => 'Neuro Detector',
                'meta_description' => 'Object detector (people, people&#39;s heads, cars, bicycles) based on neural networks, for use in security purposes. Allows you to accurately detect objects in the frame. When a foreign object enters the specified area, the detector generates an alarm. Allows to significantly reduce the number of false alarms by filtering foreign objects and noise. Works on the NeuroStation server. Offload analytics is possible (multiple RRSTEK servers transmit images to 1 server for processing).',
            ]);
            // sub pages solutions sections
            DB::table('solution_sections')->insert([
                'solution_sub_pages_id' => '15',
                'title' => 'Functionality',
                'body' => '<ul style="margin-right: 0px; margin-bottom: 21px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgba(51, 51, 51, 0.8);"><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Improve control of the territory</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Control access to "sterile areas ”</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Assist security services to significantly improve efficiency</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Act in a timely manner in response to sensitive events at the site</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Eliminate false alarms</li></ul><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">Neuro Detector allows for highly accurate recognition and classification of objects. The module avoids triggering on other moving objects, such as trees and animals (as opposed to a motion detector).</p>',
            ]);



             // solution sub pages (16-Neuro Left Object Detector)
             DB::table('solution_sub_pages')->insert([
                'page_categories_id' => '3',
                'title' => 'Neuro Left Object Detector',
                'description' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">The module is designed to detect orphan and forgotten objects left in the field of view of the camera. The detector is used in areas where security is especially important, for example, at airports, train stations, in the "Safe City" on street cameras, etc.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">Neuro Left Object Detector works on the basis of a detector of objects and people - unlike the classical one, it does not depend on the background and works better in difficult conditions. The detector is based on two grids and tracking. The first network detects people and several classes of objects: suitcase, backpack, box, bag, duffle and bag. The second uses frames of objects recognized by the first network to create their unique features. Tracking is the main part of the object detector. Works on the basis of the unique features of objects. Having carried out basic heuristics over the tracks, he determines the owner of the object (by the nature of movement and proximity to the object), whether he left the frame or moved away a certain distance.</p>',
                'fetaured_image' => 'bg-image.png',
                'video' => 'video.mp4',
                'slug' => 'neuro-left-object-detector',
                'meta_name' => 'Neuro Left Object Detector',
                'meta_description' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">The module is designed to detect orphan and forgotten objects left in the field of view of the camera. The detector is used in areas where security is especially important, for example, at airports, train stations, in the "Safe City" on street cameras, etc.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">Neuro Left Object Detector works on the basis of a detector of objects and people - unlike the classical one, it does not depend on the background and works better in difficult conditions. The detector is based on two grids and tracking. The first network detects people and several classes of objects: suitcase, backpack, box, bag, duffle and bag. The second uses frames of objects recognized by the first network to create their unique features. Tracking is the main part of the object detector. Works on the basis of the unique features of objects. Having carried out basic heuristics over the tracks, he determines the owner of the object (by the nature of movement and proximity to the object), whether he left the frame or moved away a certain distance.</p>',
            ]);
            // sub pages solutions sections
            DB::table('solution_sections')->insert([
                'solution_sub_pages_id' => '16',
                'title' => 'Functionality',
                'body' => '<p><br></p><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; position: relative; color: rgba(51, 51, 51, 0.8);">The quality of the network, which affects the accuracy and speed of work. The higher the quality, the better the detector works on complex scenes, but at the same time the higher the load on the server.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; position: relative; color: rgba(51, 51, 51, 0.8);">The number of frames per second collected for the detector to operate. The more frames, the lower the number of false positives, but the higher the load on the video card.</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; position: relative; color: rgba(51, 51, 51, 0.8);">The minimum and maximum size of the object to be detected.</li>',
            ]);



             // solution sub pages (17-Pose Detector)
             DB::table('solution_sub_pages')->insert([
                'page_categories_id' => '3',
                'title' => 'Pose Detector',
                'description' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">The neural detector detects and classifies various postures of people - to track atypical behavior (unusual posture at the ATM, falling, raised arms during an attack, etc.). TRASSIR Pose Detector consists of a neural network, tracking, and a script (you can add new poses to the classification). The neural network detects a person and finds the position of his body parts. By tracking the detected detection, the Pose Detector determines what the pose corresponds to at the moment (the average position of body parts in 2 seconds), and classifies it using a script.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">It is possible to customize the size of detected objects, zones where you need to define poses, sensitivity, quality and speed of recognition:</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bolder; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Quality:&nbsp;</span>the detector operates in two modes - simple and advanced; in advanced mode recognizes smaller poses using the high definition network and requires more powerful equipment.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bolder; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Recognition speed:</span>&nbsp;6 fps, 12 fps, constantly - in each frame; the fewer frames per second, the more difficult it is for the detector to recognize the pose.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bolder; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Sensitivity:</span>&nbsp;the higher this value, the more susceptible the detector is to changes in posture; a decrease in the indicator eliminates false positives.</p>',
                'fetaured_image' => 'bg-image.png',
                'video' => 'video.mp4',
                'slug' => 'pose-detector',
                'meta_name' => 'Pose Detector',
                'meta_description' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">The neural detector detects and classifies various postures of people - to track atypical behavior (unusual posture at the ATM, falling, raised arms during an attack, etc.). TRASSIR Pose Detector consists of a neural network, tracking, and a script (you can add new poses to the classification). The neural network detects a person and finds the position of his body parts. By tracking the detected detection, the Pose Detector determines what the pose corresponds to at the moment (the average position of body parts in 2 seconds), and classifies it using a script.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">It is possible to customize the size of detected objects, zones where you need to define poses, sensitivity, quality and speed of recognition:</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bolder; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Quality:&nbsp;</span>the detector operates in two modes - simple and advanced; in advanced mode recognizes smaller poses using the high definition network and requires more powerful equipment.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bolder; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Recognition speed:</span>&nbsp;6 fps, 12 fps, constantly - in each frame; the fewer frames per second, the more difficult it is for the detector to recognize the pose.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bolder; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Sensitivity:</span>&nbsp;the higher this value, the more susceptible the detector is to changes in posture; a decrease in the indicator eliminates false positives.</p>',
            ]);
         

            

        // Work Safety Page ID=4

        // solution sub pages (18-Hardhat Detector)
        DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '4',
            'title' => 'Hardhat Detector',
            'description' => 'Safety helmet presence detector helps to monitor safety compliance. If an employee appears in the work area without a protective helmet, the intelligent module sends a notification in real time and saves a frame for the evidentiary base.',
            'fetaured_image' => 'bg-image.png',
            'video' => 'video.mp4',
            'slug' => 'hardhat-detector',
            'meta_name' => 'Hardhat Detector',
            'meta_description' => 'Safety helmet presence detector helps to monitor safety compliance. If an employee appears in the work area without a protective helmet, the intelligent module sends a notification in real time and saves a frame for the evidentiary base.',
        ]);
        // sub pages solutions sections
        DB::table('solution_sections')->insert([
            'solution_sub_pages_id' => '18',
            'title' => 'Functionality',
            'body' => '<ul style="margin-right: 0px; margin-bottom: 21px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgba(51, 51, 51, 0.8);"><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Reduction of industrial injuries,</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Improving employee discipline,</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Reducing the cost of paying sick leave,</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Reduction of the company\'s reputational risks.</li></ul><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);\">The Hardhat Detector module automates and simplifies the work of operators, but its capabilities are not limitless - if you cannot see whether a person is wearing a helmet while watching a video, then the module will also not be able to recognize it.</p>',
        ]);




          // solution sub pages (19-Wear Detector)
          DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '4',
            'title' => 'Wear Detector',
            'description' => 'Determines whether an employee is wearing overalls (vest, dressing gown, overalls) by color. Helps to monitor compliance with safety measures: when an employee appears in the work area without a uniform, it sends real-time notifications.',
            'fetaured_image' => 'bg-image.png',
            'video' => 'video.mp4',
            'slug' => 'wear-detector',
            'meta_name' => 'Wear Detector',
            'meta_description' => 'Determines whether an employee is wearing overalls (vest, dressing gown, overalls) by color. Helps to monitor compliance with safety measures: when an employee appears in the work area without a uniform, it sends real-time notifications.',
        ]);
        // sub pages solutions sections
        DB::table('solution_sections')->insert([
            'solution_sub_pages_id' => '19',
            'title' => 'Functionality',
            'body' => '<ul style="margin-right: 0px; margin-bottom: 21px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; list-style: none; color: rgba(51, 51, 51, 0.8);"><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Ensure compliance with safety regulations at manufacturing and industrial plants;</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Differentiate access rights to different areas by color of uniform;</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Respond in a timely manner to the appearance of unauthorized persons in designated areas;</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Count the number of employees in a given uniform;</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Reduce the risk of workplace injuries and prevent accidents from occurring;</li><li style="margin: 0px; padding: 0px 0px 0px 26px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">Respond in a timely manner to violations of regulations.</li></ul><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">TRASSIR Wear Detector detects objects in the frame with high accuracy, built on a neural network, which significantly reduces the number of false positives..</p>',
        ]);







          // solution sub pages - For Industries (20-Wear Detector)
        //   DB::table('solution_sub_pages')->insert([
        //     'page_categories_id' => '4',
        //     'title' => 'Wear Detector',
        //     'description' => 'Determines whether an employee is wearing overalls (vest, dressing gown, overalls) by color. Helps to monitor compliance with safety measures: when an employee appears in the work area without a uniform, it sends real-time notifications.',
        //     'fetaured_image' => 'bg-image.png',
        //     'video' => 'video.mp4',
        //     'slug' => 'wear-detector',
        //     'meta_name' => 'Wear Detector',
        //     'meta_description' => 'Determines whether an employee is wearing overalls (vest, dressing gown, overalls) by color. Helps to monitor compliance with safety measures: when an employee appears in the work area without a uniform, it sends real-time notifications.',
        // ]);
        // sub pages solutions sections
        // DB::table('solution_sections')->insert([
        //     'solution_sub_pages_id' => '20',
        //     'title' => 'Functionality',
        //     'body' => 'Ensure compliance with safety regulations at manufacturing and industrial plants;
        //     Differentiate access rights to different areas by color of uniform;
        //     Respond in a timely manner to the appearance of unauthorized persons in designated areas;
        //     Count the number of employees in a given uniform;
        //     Reduce the risk of workplace injuries and prevent accidents from occurring;
        //     Respond in a timely manner to violations of regulations.
        //     TRASSIR Wear Detector detects objects in the frame with high accuracy, built on a neural network, which significantly reduces the number of false positives..',
        // ]);




        


    }
}