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
    <title>Game Design and Development</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon1.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon1.png">
    <link href="https://fonts.googleapis.com/css?family=Abel|Josefin+Sans|Quicksand|Saira+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.green-light_green.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
</head>

<body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout__header--scroll">
        <?php 
            $title="Bear Jams";
            include 'header.php';
        ?>
        <div class="background games"></div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <h1 class="page-title" style="margin-bottom: 50px">Bear Jams Fall 2020</h1>
                <div class="page-main">
                    <div style="height: 350px; width: 700px; background-image: url('images/bearjams_fa20.png')"></div>
                    <p id="bearjams_p">
                        <span>Location:</span> <a href="https://tinyurl.com/GDDAtBerkeley" style="background: none; padding: 0; color: rgb(178,255,89);">GDD Discord</a><br>
                        <span>Time (Jam):</span> Fri, October 23 6PM - Sun, October 25 3PM<br>
                        <span>Time (Showcase):</span> Sun, October 25 6PM - 8PM<br>
                        We'd appreciate it if anyone who is interested in participating would fill out a RSVP form!
                        <br>
                        <br>
                        <a href="https://tinyurl.com/BearJamsFa20">RSVP Here</a>
                        <br>
                        <br>
                        <a href="https://www.facebook.com/events/686883735371185">Facebook Event</a>
                        <br>
                        <br>
                        <a href="https://tinyurl.com/BearJamsFa20Zoom">Zoom Link</a>
                    </p>
                </div>
                <h1 class="section-title">Event Info</h1>
                <p>
                    (All times are PST)
                    <br><br>
                    Join Game Design and Development at Berkeley for Bear Jams! Bear Jams is a 45-hr game jam open to everyone, not just UC Berkeley students! 
                    <br><br>
                    The event starts at 6:00PM where we give an introduction, followed by the theme reveal @ 6:30 PM. There will be time to get to know other participants and form teams. 
                    <br><br>
                    After the theme is announced, our Discord will have a voice and chat channel for participants to hang-out. Between 10 AM and 8 PM every day during the jam, we will have at least one GDD staff member online in the server. Participants can ask both questions about the events and for help with their game and we will try our best to answer.
                    <br><br>
                    This jam is hosted on the GDD itch.io at <a href="https://itch.io/jam/bear-jams-fall-2020">itch.io/jam/bear-jams-fall-2020</a>. Make sure you join and submit there!
                    <br><br>
                    Submissions will be due at 3 PM PST on Sunday (we will have a 10 minute grace period BUT DON'T ABUSE IT). Winners will be announced during the showcase from 6 - 8 PM PST on Sunday.  
                    <br><br>
                    Participation is open to everyone, not just Berkeley students! There is no difference between teams with and without students! We are excited to see all of the wonderful games you guys will create!
                    <br><br>
                    This year, Cal Esports will be co-hosting Bear Jams with us! Thanks to their help, this year, we will also be providing the following prizes for the highest ranked teams after staff judging:
                    <br><br>
                    1st: $50 Steam gift cards<br>
                    2nd: $25 Amazon gift cards<br>
                    3rd: Under Armour Swag
                    <br><br>
                    These prizes will be distributed on a per-member basis for each winning team (for example, a four-person 1st-place team will win four $50 Steam gift cards).
                    <br><br>
                    Our full Rules and Guidelines can be found here: <a href="https://tinyurl.com/BearJams-Rules">tinyurl.com/BearJams-Rules</a><br>
                    All participants MUST follow the Code of Conduct: <a href="https://tinyurl.com/BearJams-CodeOfConduct">tinyurl.com/BearJams-CodeOfConduct</a>
                </p>
                <h1 class="section-title">Submission Details</h1>
                <p>
                    <strong>Submission Deadline: Sunday, 8/25 @ 3 PM PST</strong>
                    <br><br>
                    Submissions MUST include EITHER:
                    <br><br>
                    1) A WebGL Build (or any build that can be played online on the itch page)
                    <br><br>
                    2) A Windows AND Mac Build
                </p>
            </div>
            <!-- fixes a bug for some reason -->
            <div class="mdl-button__container">
            </div>
            <?php include 'footer.php'; ?>
        </main>
    </div>
</body>

</html>