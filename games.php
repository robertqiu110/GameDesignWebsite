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
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
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
                <a href="https://gddberkeley.itch.io/" id="joindisc">Our itch.io Page</a>
                <h1 class="section-title" id="games-bigger-heading">Fall 2020</h1>
                <div class="mdl-grid">
                    <?php 
                        $file = file_get_contents("games.json");
                        $json = (array)json_decode($file, true);
                        foreach($json as $item) {
                            if ($item["semester"] == "Fall 2020") {
                                echo 
                                '<a target="_blank" href="'.$item["link"].'"><div>
                                    <div style="background-image: url(\''.$item["image"].'\')"></div>
                                    <p>'.$item["name"].'</p>
                                </div></a>';
                            }
                        }
                    ?>
                </div>
                <h1 class="section-title" id="games-bigger-heading">Spring 2020</h1>
                <div class="mdl-grid">
                    <?php 
                        $file = file_get_contents("games.json");
                        $json = (array)json_decode($file, true);
                        foreach($json as $item) {
                            if ($item["semester"] == "Spring 2020") {
                                echo 
                                '<a target="_blank" href="'.$item["link"].'"><div>
                                    <div style="background-image: url(\''.$item["image"].'\')"></div>
                                    <p>'.$item["name"].'</p>
                                </div></a>';
                            }
                        }
                    ?>
                </div>
                <h1 class="section-title" id="games-bigger-heading">Fall 2019</h1>
                <div class="mdl-grid">
                    <?php 
                        $file = file_get_contents("games.json");
                        $json = (array)json_decode($file, true);
                        foreach($json as $item) {
                            if ($item["semester"] == "Fall 2019") {
                                echo 
                                '<a target="_blank" href="'.$item["link"].'"><div>
                                    <div style="background-image: url(\''.$item["image"].'\')"></div>
                                    <p>'.$item["name"].'</p>
                                </div></a>';
                            }
                        }
                    ?>
                </div>
                <h1 class="section-title" id="games-bigger-heading">Spring 2019</h1>
                <div class="mdl-grid">
                    <?php 
                        $file = file_get_contents("games.json");
                        $json = (array)json_decode($file, true);
                        foreach($json as $item) {
                            if ($item["semester"] == "Spring 2019") {
                                echo 
                                '<a target="_blank" href="'.$item["link"].'"><div>
                                    <div style="background-image: url(\''.$item["image"].'\')"></div>
                                    <p>'.$item["name"].'</p>
                                </div></a>';
                            }
                        }
                    ?>
                </div>
                <h1 class="section-title" id="games-bigger-heading">Summer 2018</h1>
                <div class="mdl-grid">
                    <?php 
                        $file = file_get_contents("games.json");
                        $json = (array)json_decode($file, true);
                        foreach($json as $item) {
                            if ($item["semester"] == "Summer 2018") {
                                echo 
                                '<a target="_blank" href="'.$item["link"].'"><div>
                                    <div style="background-image: url(\''.$item["image"].'\')"></div>
                                    <p>'.$item["name"].'</p>
                                </div></a>';
                            }
                        }
                    ?>
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