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
    <script type="text/javascript" src="staff.js"></script>
    <title>Game Design and Development</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon1.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon1.png">
    <link href="https://fonts.googleapis.com/css?family=Abel|Josefin+Sans|Quicksand|Saira+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-blue.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="calendar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
</head>
<body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <?php 
            $title="Club Staff";
            include 'header.php';
        ?>
        <div class="background staff"></div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <h1 class="section-title" id="facilitators">OFFICERS</h1>
                    <div class="mdl-grid">
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="tom"></div>
                            <h2 class="mdl-card__title-text name">Tom Barezer Ayalon</h2>
                            <h2 class="mdl-card__title-text description">"If your game doesn't have VFX and particle systems, it is not a game."</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                President
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="imon"></div>
                            <h2 class="mdl-card__title-text name">Imon Husain</h2>
                            <h2 class="mdl-card__title-text description">"Don't screw with me! I have the power of god and anime on my side!"</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Vice President
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="weylan"></div>
                            <h2 class="mdl-card__title-text name">Weylan Wang</h2>
                            <h2 class="mdl-card__title-text description">"Who thought it was a smart idea to put me in charge."</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Lead Facilitator
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="eric"></div>
                            <h2 class="mdl-card__title-text name">Eric McCormick</h2>
                            <h2 class="mdl-card__title-text description">Best teeth in the game.</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Lead Mentor
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="matthew"></div>
                            <h2 class="mdl-card__title-text name">Matthew Guo</h2>
                            <h2 class="mdl-card__title-text description">"You know the sound that a fork makes in the garbage disposal? That's the sound my brain makes all the time."</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Industry Outreach
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="robert"></div>
                            <h2 class="mdl-card__title-text name">Robert Qiu</h2>
                            <h2 class="mdl-card__title-text description">"Yeet"</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Webmaster
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="alexle"></div>
                            <h2 class="mdl-card__title-text name">Alex Le</h2>
                            <h2 class="mdl-card__title-text description">"Okay, that's all the time I've got. I gotta get back to playing Animal Crossing: New Leaf on my Nintendo 3DS."</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Community Manager
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="mert"></div>
                            <h2 class="mdl-card__title-text name">Mert Arslan</h2>
                            <h2 class="mdl-card__title-text description"><i>"This info panel is shrouded by a mysterious darkness..."</i></h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Event Coordinator
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="sean"></div>
                            <h2 class="mdl-card__title-text name">Sean Luchen</h2>
                            <h2 class="mdl-card__title-text description">"Making games combines my two favourite things: recursion and making games."</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Discord Manager
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="zhihan"></div>
                            <h2 class="mdl-card__title-text name">Zhihan Yu</h2>
                            <h2 class="mdl-card__title-text description">“You are pretty good.”</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Historian
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="soohyun"></div>
                            <h2 class="mdl-card__title-text name">Soohyun Cho</h2>
                            <h2 class="mdl-card__title-text description">"Final Fantasy X is best Final Fantasy."</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Public Relations
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                    </div>

                    <h1 class="section-title" id="facilitators">CLUB</h1>
                    <div class="mdl-grid">
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="eric"></div>
                            <h2 class="mdl-card__title-text name">Eric McCormick</h2>
                            <h2 class="mdl-card__title-text description">Best teeth in the game.</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Lead Mentor
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="mert"></div>
                            <h2 class="mdl-card__title-text name">Mert Arslan</h2>
                            <h2 class="mdl-card__title-text description"><i>"This info panel is shrouded by a mysterious darkness..."</i></h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Mentor
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="tom"></div>
                            <h2 class="mdl-card__title-text name">Tom Barezer Ayalon</h2>
                            <h2 class="mdl-card__title-text description">"If your game doesn't have VFX and particle systems, it is not a game."</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Mentor
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="weylan"></div>
                            <h2 class="mdl-card__title-text name">Weylan Wang</h2>
                            <h2 class="mdl-card__title-text description">"Who thought it was a smart idea to put me in charge."</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Mentor
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="jennifer"></div>
                            <h2 class="mdl-card__title-text name">Jennifer Kim</h2>
                            <h2 class="mdl-card__title-text description">Best teeth in the game.</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Mentor
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="brian"></div>
                            <h2 class="mdl-card__title-text name">Brian Stone</h2>
                            <h2 class="mdl-card__title-text description">"If you put a waterfall in your video game and there's nothing behind it, you should go to jail."</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Mentor
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="alexchan"></div>
                            <h2 class="mdl-card__title-text name">Alex Chan</h2>
                            <h2 class="mdl-card__title-text description">"Had to send this photo in to Tom by Friday."</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Mentor
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                    </div>
                    <h1 class="section-title" id="facilitators">DECAL</h1>
                    <div class="mdl-grid">
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="jennifer"></div>
                            <h2 class="mdl-card__title-text name">Jennifer Kim</h2>
                            <h2 class="mdl-card__title-text description">Best teeth in the game.</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Lead Facilitator
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="weylan"></div>
                            <h2 class="mdl-card__title-text name">Weylan Wang</h2>
                            <h2 class="mdl-card__title-text description">"Who thought it was a smart idea to put me in charge."</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Lead Facilitator
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="tom"></div>
                            <h2 class="mdl-card__title-text name">Tom Barezer Ayalon</h2>
                            <h2 class="mdl-card__title-text description">"If your game doesn't have VFX and particle systems, it is not a game."</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Facilitator
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="lucas"></div>
                            <h2 class="mdl-card__title-text name">Lucas Liu</h2>
                            <h2 class="mdl-card__title-text description">"Games are cool. Making games is cooler."</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Facilitator
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="austin"></div>
                            <h2 class="mdl-card__title-text name">Austin Wangyu</h2>
                            <h2 class="mdl-card__title-text description">Best teeth in the game</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Facilitator
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="vera"></div>
                            <h2 class="mdl-card__title-text name">Vera Wang</h2>
                            <h2 class="mdl-card__title-text description">Best teeth in the game</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Facilitator
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="dalton"></div>
                            <h2 class="mdl-card__title-text name">Dalton Do</h2>
                            <h2 class="mdl-card__title-text description">"If there was ever an ideal model for a facilitator, it would be Dalton."</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Facilitator
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="eric"></div>
                            <h2 class="mdl-card__title-text name">Eric McCormick</h2>
                            <h2 class="mdl-card__title-text description">Best teeth in the game.</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Facilitator
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
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