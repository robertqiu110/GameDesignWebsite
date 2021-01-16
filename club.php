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
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.orange-purple.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="club.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
</head>

<body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <?php 
            $title="Club";
            include 'header.php';
        ?>
        <div class="background projects"></div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->
                <h1 class="page-title">Club</h1>
                <div class="tabs-picker">
                    <span id="aboutLink">About</span>
                    <span id="partiesLink">Parties</span>
                    <span id="eventsLink">Events</span>
                </div>
                <div id="aboutPage">
                    <div class="page-main">
                        <div style="height: 350px; background-image: url('images/club_fa19.jfif')"></div>
                        <p>
                            <span style="font-size: 26px; font-weight: bold; color: #F5C35B; margin-bottom: 10px; display: block;">Join Cal’s game dev community!</span>
                            The Game Design and Development Club is a great way to become a part of Cal's game development community. Regardless of whether or not you have prior experience, you’re welcome to come join us! For those who want to learn, either try out our Decal or join a Party. If you don’t want to commit that hard, you’re welcome to all of our semesterly events. 
                            <br/><br/>
                            Above all, the club is a place to hang out and discuss all things game-related. To get involved, simply join our Discord server and you officially be a GDD member!
                            <br><br>
                            <a href="https://tinyurl.com/GDDatBerkeley">Join Our Discord</a>
                        </p>
                    </div>
                </div>
                <div id="partiesPage">
                    <div class="page-main">
                        <div style="height: 350px; background-image: url('images/parties.JPG')"></div>
                        <p>
                            <span style="font-size: 26px; font-weight: bold; color: #F5C35B; margin-bottom: 10px; display: block;">Learn by doing and make a game!</span>
                            If you’re looking to learn how to make games outside of class, joining a Party is the way to go! Parties are groups of students led by a staff Mentor. Together, you’ll make a game, start to finish, in one semester! 
                            <br/><br/>
                            All levels of experiences are welcome. Beginners will learn game dev basics hands on by working on the game under their Mentor’s guidance. It’s also a great chance to get to know your fellow club members and make some friends!
                            <br><br>
                            <a href="https://tinyurl.com/GDDatBerkeley">Check Discord For More Info</a>
                        </p>
                    </div>
                </div>
                <div id="eventsPage">
                    <!--<p style="text-align: center; font-size: 50px; line-height: 300px; color: #F5C35B">In Construction</p>-->
                    <div class="page-main">
                        <div style="height: 350px; background-image: url('images/events.JPG')"></div>
                        <p>
                            <span style="font-size: 26px; font-weight: bold; color: #F5C35B; margin-bottom: 10px; display: block;">Hear it straight from the pros!</span>
                            GDD hosts a number of large events every semester. One of these is our Industry Speaker events, where you’ll get to hear from professionals already working in the industry!
                            <br/><br/>
                            We also have Bear Jams, our semesterly game jam. Participants have 45 hours to make a game from scratch. And, of course, we have our Semester Showcase, where you’ll get to see the incredible games the Decal teams and Parties have whipped up this semester!
                            <br><br>
                            <a href="https://www.facebook.com/Game-Design-Development-at-Berkeley-1191501494351583">Facebook</a>
                            <a href="https://tinyurl.com/GDDCalendar" style="margin-left: 15px">Google Calendar</a>
                        </p>
                    </div>
                </div>
                <!--
                <h1 class="section-title" id="course-description">Projects: Spring 2019 Club</h1>
                <div class="mdl-grid">
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/382608" height="167" 
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/373871" height="167" 
                        width="552" frameborder="0"></iframe>
                </div>
                <h1 class="section-title" id="course-description">Projects: Spring 2019 Decal</h1>
                <div class="mdl-grid">
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/418976" height="167" 
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/418978" height="167" 
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/419008" height="167" 
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/418969" height="167" 
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/419004" height="167" 
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/418843" height="167" 
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/418852" height="167" 
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/418970" height="167" 
                        width="552" frameborder="0"></iframe>
                </div>
                <h1 class="section-title" id="course-description">Projects: Summer 2018</h1>
                <div class="mdl-grid">
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/260893" height="167"
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/261877" height="167"
                        width="552" frameborder="0"></iframe>
                </div>
                -->
            </div>
            <!-- fixes a bug for some reason -->
            <div class="mdl-button__container">
            </div>
            <?php include 'footer.php'; ?>
        </main>
    </div>
</body>

</html>