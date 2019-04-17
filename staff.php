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
                            <div class="mdl-card__title mdl-card--expand" id="gabby"></div>
                            <h2 class="mdl-card__title-text name">Gabby Delforge</h2>
                            <h2 class="mdl-card__title-text description">Best teeth in the game</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                President
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="tom"></div>
                            <h2 class="mdl-card__title-text name">Tom Barezer Ayalon</h2>
                            <h2 class="mdl-card__title-text description">"If your game doesn't have VFX and particle systems, it is not a game."</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Vice President
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="darren"></div>
                            <h2 class="mdl-card__title-text name">Darren Wang</h2>
                            <h2 class="mdl-card__title-text description">"In everything that must be done, there is an element of fun ... I hope."</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Industry Outreach
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="rahul"></div>
                            <h2 class="mdl-card__title-text name">Rahul Kumar</h2>
                            <h2 class="mdl-card__title-text description">Best teeth in the game</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Industry Outreach
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="weylan"></div>
                            <h2 class="mdl-card__title-text name">Weylan Wang</h2>
                            <h2 class="mdl-card__title-text description">"Who thought it was a smart idea to put me in charge."</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Treasurer
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="austin"></div>
                            <h2 class="mdl-card__title-text name">Austin Wangyu</h2>
                            <h2 class="mdl-card__title-text description">Best teeth in the game</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Event Coordinator
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
                            <div class="mdl-card__title mdl-card--expand" id="jireh"></div>
                            <h2 class="mdl-card__title-text name">Jireh Chew</h2>
                            <h2 class="mdl-card__title-text description">“Count to three. Congratulations, you can count better than Valve!”</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Community Manager
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
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="imon"></div>
                            <h2 class="mdl-card__title-text name">Imon Husain</h2>
                            <h2 class="mdl-card__title-text description">"Don't screw with me! I have the power of god and anime on my side!"</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Webmaster
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                    </div>

                    <h1 class="section-title" id="facilitators">CLUB</h1>
                    <div class="mdl-grid">
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="wes"></div>
                            <h2 class="mdl-card__title-text name">Wes Pickering</h2>
                            <h2 class="mdl-card__title-text description">"Why worry about school work, when instead you could be making completely optional, extra-curricular video games?"</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Lead Mentor
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="sabrina"></div>
                            <h2 class="mdl-card__title-text name">Sabrina Wong</h2>
                            <h2 class="mdl-card__title-text description">"I'm surrounded by monkeys"</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Mentor
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="george"></div>
                            <h2 class="mdl-card__title-text name">George Tao</h2>
                            <h2 class="mdl-card__title-text description">"If your game isn't a game, then it doesn't have VFX and particle systems."</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Mentor
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="jared"></div>
                            <h2 class="mdl-card__title-text name">Jared Zhao</h2>
                            <h2 class="mdl-card__title-text description">"Game ideas are a dime a dozen. Following through is the hardest part. I know first hand."</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Mentor
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="jireh"></div>
                            <h2 class="mdl-card__title-text name">Jireh Chew</h2>
                            <h2 class="mdl-card__title-text description">“Count to three. Congratulations, you can count better than Valve!”</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Mentor
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
                    </div>

                    <h1 class="section-title" id="facilitators">DECAL</h1>
                    <div class="mdl-grid">
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="jennifer"></div>
                            <h2 class="mdl-card__title-text name">Jennifer Kim</h2>
                            <h2 class="mdl-card__title-text description">Best teeth in the game</h2>
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
                            <div class="mdl-card__title mdl-card--expand" id="sabrina"></div>
                            <h2 class="mdl-card__title-text name">Sabrina Wong</h2>
                            <h2 class="mdl-card__title-text description">"I'm surrounded by monkeys"</h2>
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
                            <div class="mdl-card__title mdl-card--expand" id="wes"></div>
                            <h2 class="mdl-card__title-text name">Wes Pickering</h2>
                            <h2 class="mdl-card__title-text description">"Why worry about school work, when instead you could be making completely optional, extra-curricular video games?"</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Facilitator
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="george"></div>
                            <h2 class="mdl-card__title-text name">George Tao</h2>
                            <h2 class="mdl-card__title-text description">"If your game isn't a game, then it doesn't have VFX and particle systems."</h2>
                            <div class="mdl-card__actions mdl-card--border">
                                Facilitator
                                <button class="info-button" onclick="info(this)">INFO</button>
                            </div>
                        </div>
                        <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                            <div class="mdl-card__title mdl-card--expand" id="darren"></div>
                            <h2 class="mdl-card__title-text name">Darren Wang</h2>
                            <h2 class="mdl-card__title-text description">"In everything that must be done, there is an element of fun ... I hope."</h2>
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