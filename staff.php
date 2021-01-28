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
            $title="Staff";
            include 'header.php';
        ?>
        <div class="background staff"></div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <h1 class="page-title">Staff</h1>
                <div class="tabs-picker">
                    <span id="officerLink">Officer</span>
                    <span id="mentorLink">Mentor</span>
                    <span id="facilitatorLink">Facilitator</span>
                </div>
                    <div id="officerPage">
                        <div class="mdl-grid">
                            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                                <div class="mdl-card__title mdl-card--expand" id="imon"></div>
                                <h2 class="mdl-card__title-text name">Imon Husain</h2>
                                <h2 class="mdl-card__title-text description">"Don't screw with me! I have the power of god and anime on my side!"</h2>
                                <div class="mdl-card__actions mdl-card--border">
                                    President
                                    <button class="info-button" onclick="info(this)">Quote</button>
                                </div>
                            </div>
                            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                                <div class="mdl-card__title mdl-card--expand" id="matthew"></div>
                                <h2 class="mdl-card__title-text name">Matthew Guo</h2>
                                <h2 class="mdl-card__title-text description">"You know the sound that a fork makes in the garbage disposal? That's the sound my brain makes all the time."</h2>
                                <div class="mdl-card__actions mdl-card--border">
                                    Vice President
                                    <button class="info-button" onclick="info(this)">Quote</button>
                                </div>
                            </div>
                            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                                <div class="mdl-card__title mdl-card--expand" id="robert"></div>
                                <h2 class="mdl-card__title-text name">Robert Qiu</h2>
                                <h2 class="mdl-card__title-text description">"As a child, all we want is to grow up. Now that we're here, we just want to be kids again."</h2>
                                <div class="mdl-card__actions mdl-card--border">
                                    Webmaster
                                    <button class="info-button" onclick="info(this)">Quote</button>
                                </div>
                            </div>
                            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                                <div class="mdl-card__title mdl-card--expand" id="alexle"></div>
                                <h2 class="mdl-card__title-text name">Alex Le</h2>
                                <h2 class="mdl-card__title-text description">"Okay, that's all the time I've got. I gotta get back to playing Animal Crossing: New Leaf on my Nintendo 3DS."</h2>
                                <div class="mdl-card__actions mdl-card--border">
                                    Industry Outreach
                                    <button class="info-button" onclick="info(this)">Quote</button>
                                </div>
                            </div>
                            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                                <div class="mdl-card__title mdl-card--expand" id="kponce"></div>
                                <h2 class="mdl-card__title-text name">Kevin Ponce</h2>
                                <h2 class="mdl-card__title-text description"><i>Best teeth in the game.</i></h2>
                                <div class="mdl-card__actions mdl-card--border">
                                    Event Coordinator
                                    <button class="info-button" onclick="info(this)">Quote</button>
                                </div>
                            </div>
                            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                                <div class="mdl-card__title mdl-card--expand" id="ansa"></div>
                                <h2 class="mdl-card__title-text name">Ansa Schmulbach</h2>
                                <h2 class="mdl-card__title-text description">"One nice thing about adulthood is you can do what you want. I put my elbows on the dinner table, because I am allowed to."</h2>
                                <div class="mdl-card__actions mdl-card--border">
                                    Public Relations
                                    <button class="info-button" onclick="info(this)">Quote</button>
                                </div>
                            </div>
                            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                                <div class="mdl-card__title mdl-card--expand" id="vivian"></div>
                                <h2 class="mdl-card__title-text name">Vivian Liu</h2>
                                <h2 class="mdl-card__title-text description">"(=^･ω･^=)"</h2>
                                <div class="mdl-card__actions mdl-card--border">
                                    Treasurer
                                    <button class="info-button" onclick="info(this)">Quote</button>
                                </div>
                            </div>
                            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                                <div class="mdl-card__title mdl-card--expand" id="zhihan"></div>
                                <h2 class="mdl-card__title-text name">Zhihan Yu</h2>
                                <h2 class="mdl-card__title-text description">“You are pretty good.”</h2>
                                <div class="mdl-card__actions mdl-card--border">
                                    Historian
                                    <button class="info-button" onclick="info(this)">Quote</button>
                                </div>
                            </div>
                            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                                <div class="mdl-card__title mdl-card--expand" id="celine"></div>
                                <h2 class="mdl-card__title-text name">Celine Tang</h2>
                                <h2 class="mdl-card__title-text description">big uwu energy</h2>
                                <div class="mdl-card__actions mdl-card--border">
                                    Graphic Designer
                                    <button class="info-button" onclick="info(this)">Quote</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="facilitatorPage">
                        <div class="mdl-grid">
                        	<div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                                <div class="mdl-card__title mdl-card--expand" id="jasmine"></div>
                                <h2 class="mdl-card__title-text name">Jasmine Zhang</h2>
                                <h2 class="mdl-card__title-text description">berkeley is soup and i am fork</h2>
                                <div class="mdl-card__actions mdl-card--border">
                                    Lead Facilitator
                                    <button class="info-button" onclick="info(this)">Quote</button>
                                </div>
                            </div>
                            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                                <div class="mdl-card__title mdl-card--expand" id="katpan"></div>
                                <h2 class="mdl-card__title-text name">Katherine Pan</h2>
                                <h2 class="mdl-card__title-text description">Boba is a meal don’t @ me</h2>
                                <div class="mdl-card__actions mdl-card--border">
                                    Facilitator
                                    <button class="info-button" onclick="info(this)">Quote</button>
                                </div>
                            </div>
                            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                                <div class="mdl-card__title mdl-card--expand" id="kponce"></div>
                                <h2 class="mdl-card__title-text name">Kevin Ponce</h2>
                                <h2 class="mdl-card__title-text description"><i>Best teeth in the game.</i></h2>
                                <div class="mdl-card__actions mdl-card--border">
                                    Facilitator
                                    <button class="info-button" onclick="info(this)">Quote</button>
                                </div>
                            </div>
                            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                                <div class="mdl-card__title mdl-card--expand" id="celine"></div>
                                <h2 class="mdl-card__title-text name">Celine Tang</h2>
                                <h2 class="mdl-card__title-text description">big uwu energy</h2>
                                <div class="mdl-card__actions mdl-card--border">
                                    Facilitator
                                    <button class="info-button" onclick="info(this)">Quote</button>
                                </div>
                            </div>
                            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                                <div class="mdl-card__title mdl-card--expand" id="laura"></div>
                                <h2 class="mdl-card__title-text name">Laura Pei</h2>
                                <h2 class="mdl-card__title-text description">"live life eat bread"</h2>
                                <div class="mdl-card__actions mdl-card--border">
                                    Facilitator
                                    <button class="info-button" onclick="info(this)">Quote</button>
                                </div>
                            </div>
                            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                                <div class="mdl-card__title mdl-card--expand" id="aaron"></div>
                                <h2 class="mdl-card__title-text name">Aaron Lin</h2>
                                <h2 class="mdl-card__title-text description">"Sometimes I think, sometimes I don't, I think it depends."</h2>
                                <div class="mdl-card__actions mdl-card--border">
                                    Facilitator
                                    <button class="info-button" onclick="info(this)">Quote</button>
                                </div>
                            </div>
                            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                                <div class="mdl-card__title mdl-card--expand" id="ritchy"></div>
                                <h2 class="mdl-card__title-text name">Ritchy Lam</h2>
                                <h2 class="mdl-card__title-text description">"hobbies include: drinking boba, playing aram, grinding mmorpgs, and drawing"</h2>
                                <div class="mdl-card__actions mdl-card--border">
                                    Facilitator
                                    <button class="info-button" onclick="info(this)">Quote</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="mentorPage">
                        <div class="mdl-grid">
                        	<div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                                <div class="mdl-card__title mdl-card--expand" id="alexchan"></div>
                                <h2 class="mdl-card__title-text name">Alex Chan</h2>
                                <h2 class="mdl-card__title-text description">"Had to send this photo in to Tom by Friday."</h2>
                                <div class="mdl-card__actions mdl-card--border">
                                    Lead Mentor
                                    <button class="info-button" onclick="info(this)">Quote</button>
                                </div>
                            </div>
                            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                                <div class="mdl-card__title mdl-card--expand" id="robert"></div>
                                <h2 class="mdl-card__title-text name">Robert Qiu</h2>
                                <h2 class="mdl-card__title-text description">"As a child, all we want is to grow up. Now that we're here, we just want to be kids again."</h2>
                                <div class="mdl-card__actions mdl-card--border">
                                    Mentor
                                    <button class="info-button" onclick="info(this)">Quote</button>
                                </div>
                            </div>
                            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                                <div class="mdl-card__title mdl-card--expand" id="willx"></div>
                                <h2 class="mdl-card__title-text name">William Xie</h2>
                                <h2 class="mdl-card__title-text description">super mario bros. 2 baby!</h2>
                                <div class="mdl-card__actions mdl-card--border">
                                    Mentor
                                    <button class="info-button" onclick="info(this)">Quote</button>
                                </div>
                            </div>
                            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                                <div class="mdl-card__title mdl-card--expand" id="kponce"></div>
                                <h2 class="mdl-card__title-text name">Kevin Ponce</h2>
                                <h2 class="mdl-card__title-text description"><i>Best teeth in the game.</i></h2>
                                <div class="mdl-card__actions mdl-card--border">
                                    Mentor
                                    <button class="info-button" onclick="info(this)">Quote</button>
                                </div>
                            </div>
                            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                                <div class="mdl-card__title mdl-card--expand" id="alston"></div>
                                <h2 class="mdl-card__title-text name">Alston Chan</h2>
                                <h2 class="mdl-card__title-text description">Best teeth in the game.</h2>
                                <div class="mdl-card__actions mdl-card--border">
                                    Mentor
                                    <button class="info-button" onclick="info(this)">Quote</button>
                                </div>
                            </div>
                            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                                <div class="mdl-card__title mdl-card--expand" id="jane"></div>
                                <h2 class="mdl-card__title-text name">Jane Lo</h2>
                                <h2 class="mdl-card__title-text description">*sad windows startup noises*</h2>
                                <div class="mdl-card__actions mdl-card--border">
                                    Art Mentor
                                    <button class="info-button" onclick="info(this)">Quote</button>
                                </div>
                            </div>
                            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
                                <div class="mdl-card__title mdl-card--expand" id="celine"></div>
                                <h2 class="mdl-card__title-text name">Celine Tang</h2>
                                <h2 class="mdl-card__title-text description">big uwu energy</h2>
                                <div class="mdl-card__actions mdl-card--border">
                                    Art Mentor
                                    <button class="info-button" onclick="info(this)">Quote</button>
                                </div>
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