<header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
        <!-- Title -->
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" id="navfont" href="index.php">
                <div style="height: 70px;"><img src="images/logo.png" style="width:50px;height:50px; "></div>
            </a>
        </nav>
        <span style="margin-left: -19px;" class="mdl-layout-title" id="titlefont">
            &ensp;
            <?php echo $title; ?>
        </span>
        <div class="mdl-layout-spacer"></div>
        <nav class="mdl-navigation mdl-layout--large-screen-only">

            <div class="dropdown">
                <a class="mdl-navigation__link dropbtn" id="navfont" href="decal.php">&ensp;Decal &ensp;<i class="fas fa-caret-down"></i></a>
                <div class="dropdown-content">
                    <a target="_blank" href="https://decal.berkeley.edu/courses/4961">Apply
                        &ensp;<i class="fas fa-external-link-alt"></i></a>
                    <a href="decal.php">Syllabus</a>
                    <a href="labs.php">Labs</a>
                </div>
            </div>
            <div class="dropdown">
                <a class="mdl-navigation__link dropbtn" id="navfont" href="club.php"> &ensp;Club &ensp; <i class="fas fa-caret-down"></i></a>
                <div class="dropdown-content">
                    <a target="_blank" href="https://tinyurl.com/GDDatBerkeley">Discord &ensp;<i class="fas fa-external-link-alt"></i></a>
                    <a href="events.php">Events</a>
                    <a href="club.php">About</a>
                </div>
            </div>
            <a class="mdl-navigation__link" id="navfont" href="games.php">Games</a>
            <a class="mdl-navigation__link" id="navfont" href="staff.php">Staff</a>
        </nav>
    </div>
</header>
<div class="mdl-layout__drawer mdl-layout--small-screen-only">
    <span class="mdl-layout-title" id="titlefont">GDD: Fall 2019</span>
    <nav class="mdl-navigation">
        <a class="mdl-navigation__link" id="navfont" href="decal.php">Decal</a>
        <a class="mdl-navigation__link" id="navfont" href="labs.php">Labs</a>
        <a class="mdl-navigation__link" id="navfont" href="club.php">Club</a>
        <a class="mdl-navigation__link" id="navfont" href="events.php">Events</a>
        <a class="mdl-navigation__link" id="navfont" href="games.php">Games</a>
        <a class="mdl-navigation__link" id="navfont" href="staff.php">Staff</a>
    </nav>
</div>