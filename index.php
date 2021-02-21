<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127221484-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127221484-1');
</script>
    <!-- <script src="main.js"></script> -->
    <title>Game Design and Development</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon1.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon1.png">
    <link href="https://fonts.googleapis.com/css?family=Abel|Josefin+Sans|Quicksand|Saira+Condensed" rel="stylesheet">
    <!-- Material Design Lite (getmdl.io) files -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-amber.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
</head>

<body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <?php 
            $title="GDD @ Berkeley";
            include 'header.php';
        ?>
        <div class="background home"></div>
        <main class="mdl-layout__content">
            <div class="page-title" style="margin-top: 3%; margin-right: 0%; margin-left: 0%;">
                <br />
                <img src="images/gddbanner.png" id="bighomeimage"></img>
                <div class="mdl-shadow--3dp" style="background-color:white; height: 100% width: 100%; opacity: .5;"></div>
            </div>
            <div class="page-content" style="margin-top: 0">
            	<a href="https://tinyurl.com/GDDatBerkeley" target="_blank" id="joindisc">Join Our Discord</a>
            	<div id="index-intro">
            		<div>
            			<h2 class="section-title">The Club</h2>
            			<p>The Game Design and Development Club is a great way to become a part of Cal's game development community. Regardless of if you have taken the decal or if you are student or alumni, you can join the club and apply for an approprite role based on your skills, and if you'd like, form a game development team and be mentored by (or mentor!) fellow students as you work toward making your game. In the real world, we plan to host events including hackathons and guest speakers. Otherwise, the club is a somewhere to discuss and play all things game related. We'd love to have you! To get involved, simply join our Discord server and it will walk you through the rest of the process.</p>
            			<br>
            			<a href="club.php">Learn More</a>
            		</div>
            		<div>
            			<h2 class="section-title">The Decal</h2>
            			<p>This course is a deep dive into the creation of games, from beginning to end. Over the course of the semester, students will pitch a game, form small teams, and build a project from start to finish with help from the instructors. Students are not required to have any prior game development experience but it is required that a student taking the course either has basic art, music or programming abilities.</p>
            			<br>
            			<a href="decal.php">Learn More</a>
            		</div>
            	</div>
            </div>
            <div class="section-main" style="background-color: #08396e; margin-top: 100px;">
            	<div class="page-content">
            		<h2 class="section-title" style="text-align: center;">Join the Community!</h2>
            		<div class="page-main">
                        <div style="background-image: url('images/grouppic.jpg'); width: 650px;"></div>
                        <p style="width: 630px;">
                            We host many fun events throughout the semester, such as field trips to events such as GDC (Game Developers Conference—the largest game developer conference in the world!) and Day of the Devs, board game nights, playtests, and a showcase at the end of every semester! We also have text and voice channels in Discord dedicated to connecting people together based on common interests such as gaming or developing games as well, so we stay connected whether online or offline, it doesn't matter. Every semester we bring passionate devs together through our party system: club members get to join a team for the semester and work with others on the team to complete a game. This is a great opportunity to both gain game development experience as well as meet new people! And if you have no prior experience, dont worry—each party has an assigned mentor to help you learn and grow as a game developer. Jump in!
                            <br><br>
                            <a href="https://tinyurl.com/GDDatBerkeley" style="margin-right: 10px">Discord</a>
                            <a href="https://www.facebook.com/Game-Design-Development-at-Berkeley-1191501494351583">Facebook</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="section-main">
            	<div class="page-content">
            		<h2 class="section-title">Featured Events <a href="club.php?tab=events">Find Out More</a></h2>
            		<a href="bearjams.php"><img src="images/bear_jams_sp21.png" style="width:100%; height: auto; border-radius: 4px;"></img></a>
            	</div>
            </div>
            <div class="section-main">
            	<div class="page-content" style="background-color: #08396e;">
            		<h2 class="section-title">Upcoming Events</h2>
            		    <?php 
            		        require __DIR__ . '/vendor/autoload.php';

            		        /**
            		         * Returns an authorized API client.
            		         * @return Google_Client the authorized client object
            		         */
            		        function getClient()
            		        {
            		            $client = new Google_Client();
            		            $client->setApplicationName('Google Calendar API PHP Quickstart');
            		            $client->setScopes(Google_Service_Calendar::CALENDAR_READONLY);
            		            $client->setAuthConfig(__DIR__ .'/credentials.json');
            		            $client->setAccessType('offline');
            		            $client->setPrompt('select_account consent');

            		            // Load previously authorized token from a file, if it exists.
            		            // The file token.json stores the user's access and refresh tokens, and is
            		            // created automatically when the authorization flow completes for the first
            		            // time.
            		            $tokenPath = 'token.json';
            		            if (file_exists($tokenPath)) {
            		                $accessToken = json_decode(file_get_contents($tokenPath), true);
            		                $client->setAccessToken($accessToken);
            		            }

            		            // If there is no previous token or it's expired.
            		            if ($client->isAccessTokenExpired()) {
            		                // Refresh the token if possible, else fetch a new one.
            		                if ($client->getRefreshToken()) {
            		                    $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
            		                } else {
            		                    // Request authorization from the user.
            		                    $authUrl = $client->createAuthUrl();
            		                    printf("Open the following link in your browser:\n%s\n", $authUrl);
            		                    print 'Enter verification code: ';
            		                    $authCode = trim(fgets(STDIN));

            		                    // Exchange authorization code for an access token.
            		                    $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
            		                    $client->setAccessToken($accessToken);

            		                    // Check to see if there was an error.
            		                    if (array_key_exists('error', $accessToken)) {
            		                        throw new Exception(join(', ', $accessToken));
            		                    }
            		                }
            		                // Save the token to a file.
            		                if (!file_exists(dirname($tokenPath))) {
            		                    mkdir(dirname($tokenPath), 0700, true);
            		                }
            		                file_put_contents($tokenPath, json_encode($client->getAccessToken()));
            		            }
            		            return $client;
            		        }


            		        try {
            		        	// Get the API client and construct the service object.
            		        	$client = getClient();
            		        	$service = new Google_Service_Calendar($client);

            		        	// Print the next 10 events on the user's calendar.
            		        	$calendarId = '6kfb8nisut8k5u07e6d5591kjs@group.calendar.google.com';
            		        	$optParams = array(
            		        	  'maxResults' => 6,
            		        	  'orderBy' => 'startTime',
            		        	  'singleEvents' => true,
            		        	  'timeMin' => date('c', strtotime("-1 days")),
            		        	);
            		        	$results = $service->events->listEvents($calendarId, $optParams);
            		        	$events = $results->getItems();

            		        	if (empty($events)) {
            		        	    //print "No upcoming events found.\n";
            		        	} else {
            		        	    //print "Upcoming events:\n";
            		        	    foreach ($events as $event) {
            		        	        $start = $event->start->dateTime;
            		        	        $timeStuff = '';
            		        	        if (empty($start)) {
            		        	            $start = $event->start->date;
            		        	        } else {
            		        	            if (!empty($event->end->dateTime)) {
            		        	                $startTime = date('g:iA', strtotime($start));
            		        	                $endTime = date('g:iA', strtotime($event->end->dateTime));
            		        	                $timeStuff = ' [' . $startTime . ' - ' . $endTime . ']';
            		        	            }
            		        	        }
            		        	        //printf("%s (%s)\n", $event->getSummary(), $start);
            		        	        $finalDate = date('m/d', strtotime($start));
            		        	        echo '<p class="event event-main">' . $finalDate . ': ' . $event->getSummary() . ' @ ' . $event->getLocation() . $timeStuff . '</p>';
            		        	    }
            		        	}
            		        } catch (Exception $e) {

            		        }
            		    ?>
            		<!-- <h2 class="section-title">CONNECT TO OUR DISCORD!</h2>
            		<iframe src="https://discordapp.com/widget?id=433080296057864192&theme=dark" width="350" height="500"
            		    allowtransparency="true" frameborder="0"></iframe>
            		<br><br>
            		<h2 class="section-title">BEAR JAMS FALL 2019: WINNER</h2>
            		<iframe style="padding-left:0%; width: 80%" src="https://itch.io/embed/489882" height="167" width="552"
            		    frameborder="0"></iframe>
            		<br><br>
            		<h2 class="section-title">EVENT CALENDAR</h2>
            		<iframe src="https://calendar.google.com/calendar/embed?src=6kfb8nisut8k5u07e6d5591kjs%40group.calendar.google.com&ctz=America%2FLos_Angeles"
            		    style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe> -->
            	</div>
            </div>
            <div class="section-main" style="margin-bottom: -100px;">
            	<div class="page-content">
            		<h2 class="section-title">Try out some random GDD games! <a href="games.php">More Games</a></h2>
            		<div class="mdl-grid">
            		    <?php 
            		        $file = file_get_contents("games.json");
            		        $json = (array)json_decode($file, true);
            		        $rand_keys = array_rand($json, 3);
            		        foreach($rand_keys as $key) {
            		        	$item = $json[$key];
            		            echo 
            		                '<a target="_blank" href="'.$item["link"].'"><div>
            		                    <div style="background-image: url(\''.$item["image"].'\')"></div>
            		                    <p>'.$item["name"].'</p>
            		                </div></a>';
            		        }
            		    ?>
            		</div>
            	</div>
            </div>
            <!-- fixes a bug for some reason -->
            <div class="mdl-button__container">
            </div>
            <?php include 'footer.php'; ?>
        </main>
    </div>
</body>

</html>