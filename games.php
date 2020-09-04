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
            $title="Games";
            include 'header.php';
        ?>
        <div class="background games"></div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->
                <!--
                <h1 class="section-title" id="games-bigger-heading">Fall 2019</h1>
                <div class="mdl-grid">
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/533543" height="167" 
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/53228" height="167" 
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/530870" height="167" 
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/532854" height="167" 
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/532870" height="167" 
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/532239" height="167" 
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/532685" height="167" 
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/532920" height="167" 
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/532997" height="167" 
                        width="552" frameborder="0"></iframe>
                </div>
                <h1 class="section-title" id="games-bigger-heading">Spring 2019</h1>
                <h1 class="section-title" id="games-reg-heading">Club</h1>
                <div class="mdl-grid">
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/382608" height="167" 
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/373871" height="167" 
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/479162" height="167" 
                        width="552" frameborder="0"></iframe>
                </div>
                <h1 class="section-title" id="games-reg-heading">Decal</h1>
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
                <h1 class="section-title" id="games-bigger-heading">Summer 2018</h1>
                <div class="mdl-grid">
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/260893" height="167"
                        width="552" frameborder="0"></iframe>
                    <iframe class="mdl-cell mdl-cell--6-col mdl-shadow--2dp" src="https://itch.io/embed/261877" height="167"
                        width="552" frameborder="0"></iframe>
                </div>
                -->
                <h1 class="section-title" id="games-bigger-heading">Spring 2020</h1>
                <div class="mdl-grid">
                    <a target="_blank" href="https://sparklyrainbows.itch.io/into-the-dating-sim"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1hZ2UvNjMxMDM3LzMzODE0NzIucG5n/794x1000/Jf%2Fg5b.png')"></div>
                        <p>Into the Dating Sim</p>
                    </div></a>
                    <a target="_blank" href="https://ericzeno.itch.io/steal-the-spotlight"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1nLzMzOTQxOTMucG5n/original/sIsLf1.png')"></div>
                        <p>Steal the Spotlight</p>
                    </div></a>
                    <a target="_blank" href="https://brian-royston.itch.io/clone"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1nLzMzODM4OTkuanBn/original/%2Fii3P8.jpg')"></div>
                        <p>Clone</p>
                    </div></a>
                    <a target="_blank" href="https://jonathan2502.itch.io/on-stolen-time"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1nLzMzODUwNjYucG5n/347x500/qJdGsy.png')"></div>
                        <p>On Stolen Time</p>
                    </div></a>
                    <a target="_blank" href="https://arthurolga.itch.io/whisper-of-souls"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1nLzMyNjAyNTAucG5n/347x500/voOK%2By.png')"></div>
                        <p>Whisper of Souls</p>
                    </div></a>
                    <a target="_blank" href="https://donttalktothewizard.itch.io/dont-talk-to-the-wizard-final"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1nLzMzODg5ODkucG5n/315x250%23c/gmK34b.png')"></div>
                        <p>Don't Talk to the Wizard</p>
                    </div></a>
                    <a target="_blank" href="https://chobrandon.itch.io/kitsu-tama"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1hZ2UvNTg2Njk2LzMzOTA0NDYucG5n/794x1000/RCeWnU.png')"></div>
                        <p>Kitsu Tama</p>
                    </div></a>
                    <a target="_blank" href="https://ajsales.itch.io/ghost-quest"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1nLzMzNjg0OTYucG5n/347x500/rowLP7.png')"></div>
                        <p>Ghost Quest: The Phantom Game</p>
                    </div></a>
                    <a target="_blank" href="https://weylanwang.itch.io/questionablecontent"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1hZ2UvNTc0NDY4LzMwMjIzMTMucG5n/794x1000/6e82wK.png')"></div>
                        <p>The Search For Questionable Content</p>
                    </div></a>
                    <a target="_blank" href="https://c1rcu1t.itch.io/within-me"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1nLzMzODEyMTUuanBn/315x250%23c/PcuYE9.jpg')"></div>
                        <p>Within Me</p>
                    </div></a>
                    <a target="_blank" href="https://funplings.itch.io/jerry-mander"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1nLzMzODIwNTQucG5n/315x250%23c/i8bZK5.png')"></div>
                        <p>Jerry Mander: The Rise And Fall Of The American Dream</p>
                    </div></a>
                    <a target="_blank" href="https://daidiimon.itch.io/bondfire"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1nLzMzMDI0NTgucG5n/original/xy3Mv7.png')"></div>
                        <p>Bondfire</p>
                    </div></a>
                    <a target="_blank" href="https://atimzhao.itch.io/goodnight-lucid-dream"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1nLzMzOTA4OTMucG5n/315x250%23c/Jgoe5X.png')"></div>
                        <p>Goodnight, Lucid Dream</p>
                    </div></a>
                    <a target="_blank" href="https://jkong22pc.itch.io/cyberrunner"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1nLzMzODkxNjgucG5n/315x250%23c/loe7D6.png')"></div>
                        <p>CyberRunner</p>
                    </div></a>
                </div>
                <h1 class="section-title" id="games-bigger-heading">Fall 2019</h1>
                <div class="mdl-grid">
                    <a target="_blank" href="https://apps.apple.com/us/app/zombie-football/id1493885643"><div>
                        <div style="background-image: url('https://lh3.googleusercontent.com/GuCzM5XGuu1ldkn0T2aCdzEIfZFQ4hXmDNO0F3KTqV_QzhNSZJzMYajtuiaIm17oTMhQ=s360-rw')"></div>
                        <p>Zombie Football!</p>
                    </div></a>
                    <a target="_blank" href="https://uragano.itch.io/dusk-island"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1hZ2UvNTMzNTQzLzI3NzM5OTIucG5n/794x1000/QQTK2k.png')"></div>
                        <p>Dusk Island</p>
                    </div></a>
                    <a target="_blank" href="https://eeease.itch.io/radical-jumper"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1hZ2UvNTMyMjgvMjM2Mzk4LmpwZw==/794x1000/3%2B%2BMwm.jpg')"></div>
                        <p>Radical Jumper</p>
                    </div></a>
                    <a target="_blank" href="https://sparklyrainbows.itch.io/switch"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1hZ2UvNTMwODcwLzI3NjczNzQucG5n/794x1000/tJoBDZ.png')"></div>
                        <p>S'witch</p>
                    </div></a>
                    <a target="_blank" href="https://seedhanyoung.itch.io/seed"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1hZ2UvNTMyODU0LzI3NzA1ODEucG5n/794x1000/oEjuvq.png')"></div>
                        <p>SEED</p>
                    </div></a>
                    <a target="_blank" href="https://bladeforge.itch.io/jack-of-all-blades"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1nLzI3NzA0NzcucG5n/315x250%23c/w9abn2.png')"></div>
                        <p>Jack of All Blades</p>
                    </div></a>
                    <a target="_blank" href="https://jayl109.itch.io/palette-town"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1hZ2UvNTMyMjM5LzI3Njk4OTcucG5n/794x1000/p9lQUt.png')"></div>
                        <p>Palette Town</p>
                    </div></a>
                    <a target="_blank" href="https://red-abbey.itch.io/one-mans-sky"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1hZ2UvNTMyNjg1LzI3NzEyMTAucG5n/794x1000/C9IwqN.png')"></div>
                        <p>One Man's Sky</p>
                    </div></a>
                    <a target="_blank" href="https://thehuecreators.itch.io/hue"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1hZ2UvNTMyOTIwLzI3NzA3MDEucG5n/794x1000/ENUe%2FM.png')"></div>
                        <p>Hue</p>
                    </div></a>
                    <a target="_blank" href="https://estherc123.itch.io/leave"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1hZ2UvNTMyOTk3LzI3NzIxMTgucG5n/794x1000/9e8M9p.png')"></div>
                        <p>LEAVE</p>
                    </div></a>
                </div>
                <h1 class="section-title" id="games-bigger-heading">Spring 2019</h1>
                <h1 class="section-title" id="games-reg-heading">Club</h1>
                <div class="mdl-grid">
                    <a target="_blank" href="https://wespickering.itch.io/laser"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1nLzIwODgwOTEucG5n/347x500/cBbENz.png')"></div>
                        <p>L.A.S.E.R.</p>
                    </div></a>
                    <a target="_blank" href="https://c1rcu1t.itch.io/roll-ette"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1nLzIwODU3OTAucG5n/347x500/pR4hol.png')"></div>
                        <p>Roll-ette</p>
                    </div></a>
                    <a target="_blank" href="https://daidiimon.itch.io/hyper-strike"><div>
                        <div style="background-image: url('images/gddicon.png')"></div>
                        <p>Hyper Strike</p>
                    </div></a>
                </div>
                <h1 class="section-title" id="games-reg-heading">Decal</h1>
                <div class="mdl-grid">
                    <a target="_blank" href="https://stephenzhou.itch.io/loot-dungeon"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1hZ2UvNDE4OTc4LzIwODYwOTcucG5n/794x1000/dLlGJ7.png')"></div>
                        <p>Loot Dungeon</p>
                    </div></a>
                    <a target="_blank" href="https://murderhobos.itch.io/murderhobos"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1nLzIwODYxNjIucG5n/315x250%23c/c4c9rX.png')"></div>
                        <p>Murderhobos</p>
                    </div></a>
                    <a target="_blank" href="https://planemogame.itch.io/download"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1hZ2UvNDE4OTY5LzIwODc4MjEucG5n/794x1000/g4iJrn.png')"></div>
                        <p>Planemo</p>
                    </div></a>
                    <a target="_blank" href="https://gloliva.itch.io/shrouded-by-darkness"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1hZ2UvNDE4ODQzLzIwODU0NzMucG5n/794x1000/F9USZb.png')"></div>
                        <p>Shrouded by Darkness</p>
                    </div></a>
                    <a target="_blank" href="https://uncreative001.itch.io/the-black-swordsman"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1hZ2UvNDE4ODUyLzIwODYzODkucG5n/794x1000/M7uf%2F5.png')"></div>
                        <p>The Black Swordsman</p>
                    </div></a>
                    <a target="_blank" href="https://daltondo.itch.io/too-many-cooks"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1hZ2UvNDE4OTcwLzIwODYwMDUucG5n/794x1000/cbeuah.png')"></div>
                        <p>Too Many Cooks</p>
                    </div></a>
                </div>
                <h1 class="section-title" id="games-bigger-heading">Summer 2018</h1>
                <div class="mdl-grid">
                    <a target="_blank" href="https://sablen.itch.io/causality-hacking"><div>
                        <div style="background-image: url('images/gddicon.png')"></div>
                        <p>Casuality Hacking</p>
                    </div></a>
                    <a target="_blank" href="https://wespickering.itch.io/zosar"><div>
                        <div style="background-image: url('https://img.itch.zone/aW1hZ2UvMjYxODc3LzEzMDAxMjIucG5n/315x250%23c/UlBF0A.png')"></div>
                        <p>Zosar</p>
                    </div></a>
                </div>
                <a href="https://gddberkeley.itch.io/" id="joindisc">Our itch.io Page</a>
            </div>
            <!-- fixes a bug for some reason -->
            <div class="mdl-button__container">
            </div>
            <?php include 'footer.php'; ?>
        </main>
    </div>
</body>

</html>