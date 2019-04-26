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
    <!-- Load animation
    <svg id="fader"></svg>
    <script>
        fadeInPage();
    </script>
    -->
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
                    <a href="gamejams.php" class="no-hover"><p class="event event-main">4/27: Boss Design Competition @ Cory 293 [12PM - 8PM]</p></a>
                    <p class="event event-sub">4/27: Playtest Session @ Cory 258 [1PM - 2PM]</p>
                    <p class="event event-sub">4/27: Board Games @ Cory 258 [2PM - 5PM]</p>
                    <p class="event event-main">5/7: GDD Showcase @ Jacobs 310 [6PM - 8PM]</p>
                <h2 class="section-title">CONNECT TO OUR DISCORD!</h2>
                <iframe src="https://discordapp.com/widget?id=433080296057864192&theme=dark" width="350" height="500"
                    allowtransparency="true" frameborder="0"></iframe>
                <br><br>
                <h2 class="section-title">BEAR JAMS FALL 2018: WINNER</h2>
                <iframe style="padding-left:0%; width: 80%" src="https://itch.io/embed/308180" height="167" width="552"
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