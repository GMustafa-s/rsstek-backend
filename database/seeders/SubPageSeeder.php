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
            'fetaured_image' => 'bg-img.png',
            'video' => 'video.mp4',
            'slug' => 'active-pos',
            'meta_name' => 'Active POS',
            'meta_description' => 'The intelligent module for monitoring cash and banking operations, weighing and calculating machines is a reliable and highly effective tool for automatic and manual detection and prevention of personnel fraud and shoppers theft in real time and offline.',
        ]);
        // sub pages solutions sections
        DB::table('solution_sections')->insert([
            'solution_sub_pages_id' => '1',
            'title' => 'How it Works',
            'body' => 'Centralised analytics over the network from multiple servers;
            Automatic detection of alarming incidents at the checkout;
            Lots of interactive reports and built-in detectors of violations;
            Support for most cash register systems on the market;
            Ergonomic event analytics interface;
            Default alarming event colouring The module implements a system of detectors of violations, based on many years of experience and consultations with leading experts in the field of trade, as a result of which ActivePOS independently monitors possible violations in the work of the cashier and, if detected, immediately notifies the operator. The detectors are created in the form of plug-in scripts, which allows them to be adapted to the conditions of a particular object. Data on suspicious incidents and confirmation of uncleanness of employees, along with a dozen unique reports, are provided to analysts and can be verified by manual event search, which in total guarantees full control over the situation.
            
            The system saves not the receipt text but the sales events, cancellations, refunds, annulment etc in the database. Also there is capability of data search in any combination of facts, receipt number, the cashier&#39;s name, period of time, purchase sum etc.',

        ]);
       
        // solution sub pages (2-Heat Map on Map)
        DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '1',
            'title' => 'Heat Map on Map',
            'description' => 'Multi-camera map of the movement of people, working on the basis of a neural network detector of people (superimposed on the map of the room). Three types of map: static (highlighting the places where visitors stay the longest), traffic amount map, traffic direction map. The module allows you to exclude employees from statistics by the color of their clothes. Works on the TRASSIR Neuro Station server. offload analytics is possible (multiple TRASSIR servers transfer images to 1 server for processing). The cost for processing one video channel is indicated (the number of channels depends on the configuration of the room)',
            'fetaured_image' => 'bg-img.png',
            'video' => 'video.mp4',
            'slug' => 'heat-map-on-map',
            'meta_name' => 'Heat Map on Map',
            'meta_description' => 'Multi-camera map of the movement of people, working on the basis of a neural network detector of people (superimposed on the map of the room). Three types of map: static (highlighting the places where visitors stay the longest), traffic amount map, traffic direction map. The module allows you to exclude employees from statistics by the color of their clothes. Works on the TRASSIR Neuro Station server. offload analytics is possible (multiple TRASSIR servers transfer images to 1 server for processing). The cost for processing one video channel is indicated (the number of channels depends on the configuration of the room)',
        ]);
       

           // solution sub pages (3-Neuro Counter)
           DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '1',
            'title' => 'Neuro Counter',
            'description' => 'Counter of objects - people, cars, bicycles. With high precision detects and counts objects entering or leaving a specified area or crossing a virtual line. You can count objects by category, for example, by the color of clothing, and exclude certain categories from the report, for example, employees.

            The detector is based on deep learning neural networks. The use of ANN significantly reduces the number of false positives.
            
            Neuro Counter runs on NeuroStation series video recorders and supports Offload analytics (processing streams from other servers).',
            'fetaured_image' => 'bg-img.png',
            'video' => 'video.mp4',
            'slug' => 'neuro-counter',
            'meta_name' => 'Neuro Counter',
            'meta_description' => 'Counter of objects - people, cars, bicycles. With high precision detects and counts objects entering or leaving a specified area or crossing a virtual line. You can count objects by category, for example, by the color of clothing, and exclude certain categories from the report, for example, employees.

            The detector is based on deep learning neural networks. The use of ANN significantly reduces the number of false positives.
            
            Neuro Counter runs on NeuroStation series video recorders and supports Offload analytics (processing streams from other servers).',
        ]);
      

         // solution sub pages (4-Queue Detector)
         DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '1',
            'title' => 'Queue Detector',
            'description' => 'Queue detection module based on a neural network. Includes a reporting module and alerts on exceeding the queue length. When used in conjunction with the TRASSIR ActivePOS module, it allows you to enable alerts based on the number of operating cash registers. Works on the Neuro Station server. Offload analytics is possible (multiple RRSTEK servers transmit images to 1 server for processing).',
            'fetaured_image' => 'bg-img.png',
            'video' => 'video.mp4',
            'slug' => 'queue-detector',
            'meta_name' => 'Queue Detector',
            'meta_description' => 'Queue detection module based on a neural network. Includes a reporting module and alerts on exceeding the queue length. When used in conjunction with the TRASSIR ActivePOS module, it allows you to enable alerts based on the number of operating cash registers. Works on the Neuro Station server. Offload analytics is possible (multiple RRSTEK servers transmit images to 1 server for processing).',
        ]);
        // sub pages solutions sections
        DB::table('solution_sections')->insert([
            'solution_sub_pages_id' => '1',
            'title' => 'How it Works',
            'body' => 'Monitor queue lengths;
            Respond to incidents in a timely manner;
            Use statistics to optimize work processes.
            The functionality can be expanded by connecting additional scripts.',

        ]);



         // solution sub pages (5-Shelf Detector)
         DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '1',
            'title' => 'Shelf Detector',
            'description' => 'The module for analyzing the fullness of the shelves is used to timely inform about empty shelves with goods. In the event of voids exceeding the specified value, the module sends notifications to the store employees. The module also generates reports on the status of shelves at specified intervals. Thanks to reporting, the administration of the retail network can determine / predict the level of demand for certain groups of goods and track the performance of employees responsible for filling the shelves.',
            'fetaured_image' => 'bg-img.png',
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
                'fetaured_image' => 'bg-img.png',
                'video' => 'video.mp4',
                'slug' => 'staff-tracker',
                'meta_name' => 'Staff Tracker',
                'meta_description' => 'The analytics module helps to control the quality of staff work in offline retail. The module monitors the availability of the required number of employees in service areas, keeps records of serviced and left unattended visitors, generates a report on the speed and quality of service, in case of violation of the service standards by personnel, it sends notifications in real time. Staff Tracker identifies employees by uniform color. Preserves video footage for evidence base.',
            ]);
        


              // solution sub pages (7-Workspace Detector)
              DB::table('solution_sub_pages')->insert([
                'page_categories_id' => '1',
                'title' => 'Workspace Detector',
                'description' => 'Neural network intelligent module that works only on TRASSIR Neuro Station series video recorders. Supports Offload analytics.

                TRASSIR Workplace Detector is designed to monitor and track employees&#39; working time.',
                'fetaured_image' => 'bg-img.png',
                'video' => 'video.mp4',
                'slug' => 'workspace-detector',
                'meta_name' => 'Workspace Detector',
                'meta_description' => 'Neural network intelligent module that works only on TRASSIR Neuro Station series video recorders. Supports Offload analytics.

                TRASSIR Workplace Detector is designed to monitor and track employees&#39; working time.',
            ]);
              // sub pages solutions sections
            DB::table('solution_sections')->insert([
            'solution_sub_pages_id' => '1',
            'title' => 'How it Works',
            'body' => 'The person in charge sets the necessary parameters for the module&#39;s work: the area of the working area, the schedule of employees, the permissible time of absence of an employee at the workplace.
            A camera with a connected module is installed in an office or other work area.
            The module generates a notification and sends a message to the person in charge if the employee is late, left earlier or has been absent from the workplace for more than the prescribed time.
            The module daily generates reports on the actual time of stay and absence of an employee on site, sends reports by mail to the person in charge.
            The functionality can be expanded by connecting additional scripts.',

        ]);
        
    


            // Healthcare Page ID=2

               // solution sub pages (1-Face Mask Detector)
               DB::table('solution_sub_pages')->insert([
                'page_categories_id' => '2',
                'title' => 'Face Mask Detector',
                'description' => 'Neural network software, works only on Neuro Station series DVRs. The Face Mask Detector module is designed to monitor compliance with security measures in a pandemic or epidemic - wearing a medical mask as a means of personal protection.',
                'fetaured_image' => 'bg-img.png',
                'video' => 'video.mp4',
                'slug' => 'face-mask-detector',
                'meta_name' => 'Face Mask Detector',
                'meta_description' => 'Neural network software, works only on Neuro Station series DVRs. The Face Mask Detector module is designed to monitor compliance with security measures in a pandemic or epidemic - wearing a medical mask as a means of personal protection.',
            ]);
              // sub pages solutions sections
            DB::table('solution_sections')->insert([
            'solution_sub_pages_id' => '2',
            'title' => 'How it Works',
            'body' => 'A CCTV camera monitors the monitoring area and transmits data to the server.
            The detector analyzes the stream, finds faces and determines if they have a mask.
            An additional script closes dry contacts, initiating a speakerphone announcement and sends a violation message.
            The functionality can be expanded by connecting additional scripts. Eliminated false positives on faces that are not visible in the frame.',

        ]);
        



           // solution sub pages (2-Social Distance Detector)
           DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '2',
            'title' => 'Social Distance Detector',
            'description' => 'Neural network software, works only on Neuro Station series DVRs. The Social Distance Detector module is designed to monitor the observance of social distance between people in queues and in public places characterized by a crowd of people.',
            'fetaured_image' => 'bg-img.png',
            'video' => 'video.mp4',
            'slug' => 'social-distance-detector',
            'meta_name' => 'Social Distance Detector',
            'meta_description' => 'Neural network software, works only on Neuro Station series DVRs. The Social Distance Detector module is designed to monitor the observance of social distance between people in queues and in public places characterized by a crowd of people.',
        ]);
          // sub pages solutions sections
        DB::table('solution_sections')->insert([
        'solution_sub_pages_id' => '2',
        'title' => 'How it Works',
        'body' => 'A CCTV camera monitors the monitoring area and transmits data to the server.
        The detector analyzes the flow.
        The customized script measures the distance between people.
        In the event of a violation, the script closes dry contacts - a notification about the need to observe security measures is heard over the speakerphone - and initiates the sending of a violation message.
        Social Distance Detector includes neural network modules - a people detector and a lens, an object tracker.',

    ]);


        // solution sub pages (3-Thermal Camera)
        DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '2',
            'title' => 'Thermal Camera',
            'description' => 'The Thermal Camera module is intended to connect a thermal imaging camera to RRSTEK OS. It displays not only video data, but also the information of changing the body temperature of a person.',
            'fetaured_image' => 'bg-img.png',
            'video' => 'video.mp4',
            'slug' => 'thermal-camera',
            'meta_name' => 'Thermal Camera',
            'meta_description' => 'The Thermal Camera module is intended to connect a thermal imaging camera to RRSTEK OS. It displays not only video data, but also the information of changing the body temperature of a person.',
        ]);
       



        // Security Page ID=3


        // solution sub pages (1-Auto ANPR)
        DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '3',
            'title' => 'Auto ANPR',
            'description' => 'An intelligent module for recognizing state registration plates of cars is designed for automatic identification of license plates of vehicles that come into the field of view of a video camera. The automatic license plate recognition system allows you to track the passage of the vehicle of interest from the archive on screenshots and video fragments.

            Supported maintenance, generation of detailed reports, hierarchical logging of recognized autonomous groups, integration with speed measuring devices and security complexes, including access control and fire alarm equipment (barriers, barriers, barriers). In automatic mode, the module detects vehicles that are stolen or violate parking rules.',
            'fetaured_image' => 'bg-img.jpg',
            'video' => 'video.mp4',
            'slug' => 'auto-anrp',
            'meta_name' => 'Auto ANPR',
            'meta_description' => 'An intelligent module for recognizing state registration plates of cars is designed for automatic identification of license plates of vehicles that come into the field of view of a video camera. The automatic license plate recognition system allows you to track the passage of the vehicle of interest from the archive on screenshots and video fragments.

            Supported maintenance, generation of detailed reports, hierarchical logging of recognized autonomous groups, integration with speed measuring devices and security complexes, including access control and fire alarm equipment (barriers, barriers, barriers). In automatic mode, the module detects vehicles that are stolen or violate parking rules.',
        ]);
        // sub pages solutions sections
        DB::table('solution_sections')->insert([
            'solution_sub_pages_id' => '3',
            'title' => 'Functionality',
            'body' => 'High accuracy of recognition of car registration plates;
            Recognition of any license plates and vehicles;
            Recognition of registration plates of cars from different countries.
            Recognition from complex angles.
            No problems with the admission of cars on the territory.
            Flexible configuration of the recognition module.
            Delegation of computing on a server with a GPU from low-power DVRs.
            The new version of Auto ANPR 5 is compatible with the NeuroStation and QuattroStation series recorders. These servers use hardware graphics accelerators to achieve high efficiency when processing large video streams. Using the off-load technology, the module remotely processes video on any RRSTEK video recorders - connect them to NeuroStation servers over the network or through the cloud.',
        ]);



          // solution sub pages (2-Crowd Detector)
          DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '3',
            'title' => 'Crowd Detector',
            'description' => 'Overcrowding detector with customizable threshold - when the allowed number of people is exceeded, the module sends a notification in real time. Designed to ensure safety in indoor and outdoor areas.

            The detector is built on the basis of neural technology, which reduces the number of false positives.
            
            Crowd Detector works with NeuroStation series servers. Supports Offload analytics - processes streams from other RRSTEK DVRs.',
            'fetaured_image' => 'bg-img.jpg',
            'video' => 'video.mp4',
            'slug' => 'crowd-detector',
            'meta_name' => 'Crowd Detector',
            'meta_description' => 'Overcrowding detector with customizable threshold - when the allowed number of people is exceeded, the module sends a notification in real time. Designed to ensure safety in indoor and outdoor areas.

            The detector is built on the basis of neural technology, which reduces the number of false positives.
            
            Crowd Detector works with NeuroStation series servers. Supports Offload analytics - processes streams from other RRSTEK DVRs.',
        ]);
    


             // solution sub pages (3-Direction Detector)
             DB::table('solution_sub_pages')->insert([
                'page_categories_id' => '3',
                'title' => 'Direction Detector',
                'description' => 'The module is used to ensure safety, track the movement of objects - people, cars, bicycles - in a prohibited direction. When crossing a predetermined line or changing the trajectory of movement, the module sends alarm notifications to the guard and saves the frame for the evidentiary base.',
                'fetaured_image' => 'bg-img.jpg',
                'video' => 'video.mp4',
                'slug' => 'direction-detector',
                'meta_name' => 'Direction Detector',
                'meta_description' => 'The module is used to ensure safety, track the movement of objects - people, cars, bicycles - in a prohibited direction. When crossing a predetermined line or changing the trajectory of movement, the module sends alarm notifications to the guard and saves the frame for the evidentiary base.',
            ]);
            // sub pages solutions sections
            DB::table('solution_sections')->insert([
                'solution_sub_pages_id' => '3',
                'title' => 'Functionality',
                'body' => 'Works on the basis of a neural object detector, which allows you to recognize objects with high accuracy.
                Uses an object tracking mechanism to count unique objects and analyze their movement
                The operator can mark up to 16 lines on the screen for motion analysis.
                Generates notifications if an object crosses the line in a prohibited direction
                It is possible to expand the basic functionality using scripts',
            ]);


            
             // solution sub pages (4-Face Recognition)
             DB::table('solution_sub_pages')->insert([
                'page_categories_id' => '3',
                'title' => 'Face Recognition',
                'description' => 'The face recognition module consists of FaceSDK to compare faces and Face Search to search for faces in the database.',
                'fetaured_image' => 'bg-img.jpg',
                'video' => 'video.mp4',
                'slug' => 'face-recognition',
                'meta_name' => 'Face Recognition',
                'meta_description' => 'The face recognition module consists of FaceSDK to compare faces and Face Search to search for faces in the database.',
            ]);
            // sub pages solutions sections
            DB::table('solution_sections')->insert([
                'solution_sub_pages_id' => '3',
                'title' => 'Functionality',
                'body' => 'Human Face Detection: Find and highlight a face in the camera image. Face detection from any angle, including a profile.
                Face identification and quality assessment: comparing the found face with a photo in the database and determining the degree of match.
                Determination of gender and age by face.
                Recognition of certain attributes of a person&#39;s appearance: recognition of the color of hair, glasses, headwear, etc. and search by these parameters.
                Recognition of the use of a photograph in the frame: comparison of various characteristics of a face with a static image to prevent deception.
                Search in the archive by face.
                Integration into ACS.
                In the access control mode, the logic of work changes: the result is not immediately submitted for comparison with the persons in the database, but within a certain time (a specified period of optimal quality), the incoming data is checked against the existing ones and replaced with better ones - better information is used for recognition. The result does not wait for the end of the track - recording to the database and the generation of the Face Recognized event occur immediately.',
            ]);




             // solution sub pages (5-Neuro Detector)
             DB::table('solution_sub_pages')->insert([
                'page_categories_id' => '3',
                'title' => 'Neuro Detector',
                'description' => 'Object detector (people, people&#39;s heads, cars, bicycles) based on neural networks, for use in security purposes. Allows you to accurately detect objects in the frame. When a foreign object enters the specified area, the detector generates an alarm. Allows to significantly reduce the number of false alarms by filtering foreign objects and noise. Works on the NeuroStation server. Offload analytics is possible (multiple RRSTEK servers transmit images to 1 server for processing).',
                'fetaured_image' => 'bg-img.jpg',
                'video' => 'video.mp4',
                'slug' => 'neuro-detector',
                'meta_name' => 'Neuro Detector',
                'meta_description' => 'Object detector (people, people&#39;s heads, cars, bicycles) based on neural networks, for use in security purposes. Allows you to accurately detect objects in the frame. When a foreign object enters the specified area, the detector generates an alarm. Allows to significantly reduce the number of false alarms by filtering foreign objects and noise. Works on the NeuroStation server. Offload analytics is possible (multiple RRSTEK servers transmit images to 1 server for processing).',
            ]);
            // sub pages solutions sections
            DB::table('solution_sections')->insert([
                'solution_sub_pages_id' => '3',
                'title' => 'Functionality',
                'body' => 'Improve control of the territory
                Control access to "sterile areas ”
                Assist security services to significantly improve efficiency
                Act in a timely manner in response to sensitive events at the site
                Eliminate false alarms
                Neuro Detector allows for highly accurate recognition and classification of objects. The module avoids triggering on other moving objects, such as trees and animals (as opposed to a motion detector).',
            ]);



             // solution sub pages (6-Neuro Left Object Detector)
             DB::table('solution_sub_pages')->insert([
                'page_categories_id' => '3',
                'title' => 'Neuro Left Object Detector',
                'description' => 'The module is designed to detect orphan and forgotten objects left in the field of view of the camera. The detector is used in areas where security is especially important, for example, at airports, train stations, in the "Safe City" on street cameras, etc.

                Neuro Left Object Detector works on the basis of a detector of objects and people - unlike the classical one, it does not depend on the background and works better in difficult conditions. The detector is based on two grids and tracking. The first network detects people and several classes of objects: suitcase, backpack, box, bag, duffle and bag. The second uses frames of objects recognized by the first network to create their unique features. Tracking is the main part of the object detector. Works on the basis of the unique features of objects. Having carried out basic heuristics over the tracks, he determines the owner of the object (by the nature of movement and proximity to the object), whether he left the frame or moved away a certain distance.',
                'fetaured_image' => 'bg-img.jpg',
                'video' => 'video.mp4',
                'slug' => 'neuro-left-object-detector',
                'meta_name' => 'Neuro Left Object Detector',
                'meta_description' => 'The module is designed to detect orphan and forgotten objects left in the field of view of the camera. The detector is used in areas where security is especially important, for example, at airports, train stations, in the "Safe City" on street cameras, etc.

                Neuro Left Object Detector works on the basis of a detector of objects and people - unlike the classical one, it does not depend on the background and works better in difficult conditions. The detector is based on two grids and tracking. The first network detects people and several classes of objects: suitcase, backpack, box, bag, duffle and bag. The second uses frames of objects recognized by the first network to create their unique features. Tracking is the main part of the object detector. Works on the basis of the unique features of objects. Having carried out basic heuristics over the tracks, he determines the owner of the object (by the nature of movement and proximity to the object), whether he left the frame or moved away a certain distance.',
            ]);
            // sub pages solutions sections
            DB::table('solution_sections')->insert([
                'solution_sub_pages_id' => '3',
                'title' => 'Functionality',
                'body' => 'The quality of the network, which affects the accuracy and speed of work. The higher the quality, the better the detector works on complex scenes, but at the same time the higher the load on the server.
                The number of frames per second collected for the detector to operate. The more frames, the lower the number of false positives, but the higher the load on the video card.
                The minimum and maximum size of the object to be detected.',
            ]);



             // solution sub pages (7-Pose Detector)
             DB::table('solution_sub_pages')->insert([
                'page_categories_id' => '3',
                'title' => 'Pose Detector',
                'description' => '<p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">The neural detector detects and classifies various postures of people - to track atypical behavior (unusual posture at the ATM, falling, raised arms during an attack, etc.). TRASSIR Pose Detector consists of a neural network, tracking, and a script (you can add new poses to the classification). The neural network detects a person and finds the position of his body parts. By tracking the detected detection, the Pose Detector determines what the pose corresponds to at the moment (the average position of body parts in 2 seconds), and classifies it using a script.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);">It is possible to customize the size of detected objects, zones where you need to define poses, sensitivity, quality and speed of recognition:</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bolder; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Quality:&nbsp;</span>the detector operates in two modes - simple and advanced; in advanced mode recognizes smaller poses using the high definition network and requires more powerful equipment.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bolder; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Recognition speed:</span>&nbsp;6 fps, 12 fps, constantly - in each frame; the fewer frames per second, the more difficult it is for the detector to recognize the pose.</p><p style="margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Poppins, sans-serif; vertical-align: baseline; color: rgba(51, 51, 51, 0.8);"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bolder; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Sensitivity:</span>&nbsp;the higher this value, the more susceptible the detector is to changes in posture; a decrease in the indicator eliminates false positives.</p>',
                'fetaured_image' => 'bg-img.jpg',
                'video' => 'video.mp4',
                'slug' => 'pose-detector',
                'meta_name' => 'Pose Detector',
                'meta_description' => 'The neural detector detects and classifies various postures of people - to track atypical behavior (unusual posture at the ATM, falling, raised arms during an attack, etc.). TRASSIR Pose Detector consists of a neural network, tracking, and a script (you can add new poses to the classification). The neural network detects a person and finds the position of his body parts. By tracking the detected detection, the Pose Detector determines what the pose corresponds to at the moment (the average position of body parts in 2 seconds), and classifies it using a script.

                It is possible to customize the size of detected objects, zones where you need to define poses, sensitivity, quality and speed of recognition:
                
                Quality: the detector operates in two modes - simple and advanced; in advanced mode recognizes smaller poses using the high definition network and requires more powerful equipment.
                
                Recognition speed: 6 fps, 12 fps, constantly - in each frame; the fewer frames per second, the more difficult it is for the detector to recognize the pose.
                
                Sensitivity: the higher this value, the more susceptible the detector is to changes in posture; a decrease in the indicator eliminates false positives.',
            ]);
         

            

        // Work Safety Page ID=4

        // solution sub pages (1-Hardhat Detector)
        DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '4',
            'title' => 'Hardhat Detector',
            'description' => 'Safety helmet presence detector helps to monitor safety compliance. If an employee appears in the work area without a protective helmet, the intelligent module sends a notification in real time and saves a frame for the evidentiary base.',
            'fetaured_image' => 'bg-img.png',
            'video' => 'video.mp4',
            'slug' => 'hardhat-detector',
            'meta_name' => 'Hardhat Detector',
            'meta_description' => 'Safety helmet presence detector helps to monitor safety compliance. If an employee appears in the work area without a protective helmet, the intelligent module sends a notification in real time and saves a frame for the evidentiary base.',
        ]);
        // sub pages solutions sections
        DB::table('solution_sections')->insert([
            'solution_sub_pages_id' => '4',
            'title' => 'Functionality',
            'body' => 'Reduction of industrial injuries,
            Improving employee discipline,
            Reducing the cost of paying sick leave,
            Reduction of the company&#39;s reputational risks.
            The Hardhat Detector module automates and simplifies the work of operators, but its capabilities are not limitless - if you cannot see whether a person is wearing a helmet while watching a video, then the module will also not be able to recognize it.',
        ]);




          // solution sub pages (2-Wear Detector)
          DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '4',
            'title' => 'Wear Detector',
            'description' => 'Determines whether an employee is wearing overalls (vest, dressing gown, overalls) by color. Helps to monitor compliance with safety measures: when an employee appears in the work area without a uniform, it sends real-time notifications.',
            'fetaured_image' => 'bg-img.png',
            'video' => 'video.mp4',
            'slug' => 'wear-detector',
            'meta_name' => 'Wear Detector',
            'meta_description' => 'Determines whether an employee is wearing overalls (vest, dressing gown, overalls) by color. Helps to monitor compliance with safety measures: when an employee appears in the work area without a uniform, it sends real-time notifications.',
        ]);
        // sub pages solutions sections
        DB::table('solution_sections')->insert([
            'solution_sub_pages_id' => '4',
            'title' => 'Functionality',
            'body' => 'Ensure compliance with safety regulations at manufacturing and industrial plants;
            Differentiate access rights to different areas by color of uniform;
            Respond in a timely manner to the appearance of unauthorized persons in designated areas;
            Count the number of employees in a given uniform;
            Reduce the risk of workplace injuries and prevent accidents from occurring;
            Respond in a timely manner to violations of regulations.
            TRASSIR Wear Detector detects objects in the frame with high accuracy, built on a neural network, which significantly reduces the number of false positives..',
        ]);


          // solution sub pages - For Industries (2-Wear Detector)
          DB::table('solution_sub_pages')->insert([
            'page_categories_id' => '4',
            'title' => 'Wear Detector',
            'description' => 'Determines whether an employee is wearing overalls (vest, dressing gown, overalls) by color. Helps to monitor compliance with safety measures: when an employee appears in the work area without a uniform, it sends real-time notifications.',
            'fetaured_image' => 'bg-img.png',
            'video' => 'video.mp4',
            'slug' => 'wear-detector',
            'meta_name' => 'Wear Detector',
            'meta_description' => 'Determines whether an employee is wearing overalls (vest, dressing gown, overalls) by color. Helps to monitor compliance with safety measures: when an employee appears in the work area without a uniform, it sends real-time notifications.',
        ]);
        // sub pages solutions sections
        DB::table('solution_sections')->insert([
            'solution_sub_pages_id' => '4',
            'title' => 'Functionality',
            'body' => 'Ensure compliance with safety regulations at manufacturing and industrial plants;
            Differentiate access rights to different areas by color of uniform;
            Respond in a timely manner to the appearance of unauthorized persons in designated areas;
            Count the number of employees in a given uniform;
            Reduce the risk of workplace injuries and prevent accidents from occurring;
            Respond in a timely manner to violations of regulations.
            TRASSIR Wear Detector detects objects in the frame with high accuracy, built on a neural network, which significantly reduces the number of false positives..',
        ]);




        


    }
}