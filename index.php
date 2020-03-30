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
            $title="Game Design and Development at Berkeley";
            include 'header.php';
        ?>
        <div class="background home"></div>
        <main class="mdl-layout__content">
            <div class="page-title" style="margin-top: 3%; margin-right: 0%; margin-left: 0%;">
                <br />
                <img src="images/banner1.png" style=" width: 100%; height: auto"></img>
                <div class="mdl-shadow--3dp" style="background-color:white; height: 100% width: 100%; opacity: .5;"></div>
            </div>
            <div class="page-content">
                <h1 class="section-title" style="text-align: center; text-decoration: underline">UPCOMING EVENTS<h1>
                    <a href="events.php"><img src="images/GDDModdingEvent.jpg" style="width:100%; height: auto"></img></a>
                    </br>
                    </br>
                    <!--<a href="https://www.facebook.com/events/605914039936996/" class="no-hover"><p class="event event-main">9/10: First General Meeting @ Hearst Field Annex, Room B5 [8PM - 9PM]</p></a>
                    <p class="event event-sub">9/19: Second General Meeting @ Wheeler 108 [8PM - 9:30PM]</p>
                    <p class="event event-main">9/27 - 9/29: Bear Jams @ Cory 293</p>
                    <a href="https://www.facebook.com/events/1112199975652802/?active_tab=about" class="no-hover"><p class="event event-main">10/1: Activision Tech Talk & Company Info Session @ Evans 60 [6PM - 9PM]</p></a>
                    <p class="event event-main">2/5: Infosession @ Barrows 60 [8PM - 10PM]</p>-->
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
                    ?>
                    </br>
                <h2 class="section-title">CONNECT TO OUR DISCORD!</h2>
                <iframe src="https://discordapp.com/widget?id=433080296057864192&theme=dark" width="350" height="500"
                    allowtransparency="true" frameborder="0"></iframe>
                <br><br>
                <h2 class="section-title">BEAR JAMS FALL 2019: WINNER</h2>
                <iframe style="padding-left:0%; width: 80%" src="https://itch.io/embed/489882" height="167" width="552"
                    frameborder="0"></iframe>
                <br><br>
                <h2 class="section-title">EVENT CALENDAR</h2>
                <iframe src="https://calendar.google.com/calendar/embed?src=6kfb8nisut8k5u07e6d5591kjs%40group.calendar.google.com&ctz=America%2FLos_Angeles"
                    style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                </br>
                </br>
            </div>
            <!-- fixes a bug for some reason -->
            <div class="mdl-button__container">
            </div>
            <?php include 'footer.php'; ?>
        </main>
    </div>
</body>

</html>