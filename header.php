<header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
        <!-- Title -->
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" id="navfont" href="index.php">
                <div style="height: 70px;"><img src="images/logo.png" style="width:50px;height:50px; "></div>
            </a>
        </nav>
        <span style="margin-left: -19px;" class="mdl-layout-title" id="titlefont">
            &ensp; <?php echo $title; ?> 
        </span>
        <div class="mdl-layout-spacer"></div>
        <nav class="mdl-navigation mdl-layout--large-screen-only">

            <div class="dropdown">
                <a class="mdl-navigation__link dropbtn" id="navfont" href="decal.php">&ensp;Decal &ensp;<i class="fas fa-caret-down"></i></a>
                <div class="dropdown-content">
                    <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSf_MxxVvcaQQYLrnCQFQOTmNTmg3Sf7n-C_kL_OigRXW6iOAQ/viewform">Apply
                        &ensp;<i class="fas fa-external-link-alt"></i></a>

                    <a href="decal.php">Syllabus</a>
                    <a href="labs.php">Labs</a>
                </div>
            </div>
            <!-- <a class="mdl-navigation__link" id="navfont" href="labs.php">Labs</a> -->
            <div class="dropdown">
                <a class="mdl-navigation__link dropbtn" id="navfont" href="club.php"> &ensp;Club &ensp; <i class="fas fa-caret-down"></i></a>
                <div class="dropdown-content">

                    <a target="_blank" href="https://discord.gg/AnbuQba">Discord &ensp;<i class="fas fa-external-link-alt"></i></a>
                    <a href="gamejams.php">Game Jams</a>
                    <a href="club.php">About</a>
                </div>
            </div>
            <!--      <a class="mdl-navigation__link" id="navfont" href="gamejams.php">Game Jams</a> -->

        </nav>
    </div>
</header>