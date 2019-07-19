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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
</head>

<body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout__header--scroll">
        <?php 
            $title="Club";
            include 'header.php';
        ?>
        <div class="background projects"></div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->
                <br /><br /><br /><br /><br /><br />
                <h1 class="section-title" id="course-description">How it Works</h1>
                <p>
                    The Game Design and Development Club is a great way to become a part of Cal's game development
                    community. Regardless of if you have taken the decal or if you are student or alumni, you can join
                    the club and apply for an approprite role based on your skills, and if you'd like, form a game
                    development team and be mentored by (or mentor!) fellow students as you work toward making your
                    game. In the real world, we plan to host events including hackathons and guest speakers. Otherwise,
                    the club is a somewhere to discuss and play all things game related. We'd love to have you! To get
                    involved, simply join our Discord server and it will walk you through the rest of the process.
                </p>
                <h1 class="section-title" id="course-description">Projects: Spring 2019</h1>
                <div class="mdl-grid">
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/418976" height="167" 
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/382608" height="167" 
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/418978" height="167" 
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/419008" height="167" 
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/418969" height="167" 
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/373871" height="167" 
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
                <h1 class="section-title" id="course-description">Contact</h1>
                <p>Email: calgamedesign@gmail.com
                </p>
                <div class="mdl-cell mdl-cell--4-col" style="height: 25vh"></div>
            </div>
            <!-- fixes a bug for some reason -->
            <div class="mdl-button__container">
            </div>
            <?php include 'footer.php'; ?>
        </main>
    </div>
</body>

</html>