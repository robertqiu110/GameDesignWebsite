<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="decal.js"></script>
    <link rel="stylesheet" type="text/css" href="calendar.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
</head>

<body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <?php
            $title="Decal";
            include 'header.php';
        ?>
        <div class="background decal"></div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->
                <h1 class="page-title">Decal</h1>
                <div class="tabs-picker">
                    <span id="syllabusLink">Syllabus</span>
                    <span id="scheduleLink">Schedule</span>
                    <span id="labsLink">Labs</span>
                </div>
                <div id="syllabusPage">
                    <div class="page-main">
                        <div style="background-image: url('images/decal_fa19.jpg'); width: 700px;"></div>
                        <p>
                            This course is a deep dive into the creation of games, from beginning to end. Over the course of the semester, students will pitch a game, form small teams, and build a project from start to finish with help from the instructors. Students are not required to have any prior game development experience but it is required that a student taking the course either has basic art, music or programming abilities. 
                            <br><br>
                            They will also learn about the different roles that exist within the industry, how to apply their skills to them, and form an understanding about how to best prepare themselves to find their way into these roles. This will be a rigorous class, one that will require a lot of time and dedication. Students will be selected via the application due Sunday, January 24th at 11:59 PM, to ensure that the class composition reflects a diverse range of skills, backgrounds, and proficiency levels.
                            <br><br>
                            <a href="https://decal.berkeley.edu/courses/5455">Apply Here</a>
                        </p>
                    </div>
                    <!--<ul class="toc">
                        <h6 class="section-title">Contents</h6>
                        <a href="#course-info">Course Info</a>
                        <a href="#office-hours">Office Hours</a>
                        <a href="#schedule">Schedule</a>
                        <a href="#past-projects">Past Projects</a>
                        <a href="#course-description">Course Description</a>
                        <a href="#prerequisites">Prerequisites</a>
                        <a href="#course-structure">Course Structure</a>
                        <a href="#projects">Projects</a>
                        <a href="#written-responses">Written Responses</a>
                        <a href="#required-materials">Required Materials</a>
                        <a href="#grading">Grading</a>
                        <a href="#general-policy">General Policy</a>
                        <a href="#facilitators">Facilitators</a>
                    </ul>-->
                    <div id="decal-course-info" style="display: flex">
                        <div>
                            <h1 class="section-title" id="course-info">Course Info</h1>
                            <div>
                                <p>
                                    <strong>Time:</strong> Wed/Fri 7:00-8:30pm
                                </p>
                                <p>
                                    <strong>Location:</strong> Zoom
                                </p>
                                <p>
                                    <strong>Lead Facilitators:</strong> Jasmine Zhang, Katherine Pan
                                </p>
                                <p>
                                    <strong>Faculty of Record:</strong> Ren Ng
                                </p>
                                <p>
                                    <strong>Course Email:</strong> decal@gamedev.berkeley.edu
                                </p>
                            </div>
                        </div>
                        <div style="margin-left: 200px">
                            <h1 class="section-title" id="office-hours">Office Hours</h1>
                            <div>
                                <p>
                                    <strong>Time:</strong> Mon 4-5pm, Fri 12-1pm PT
                                </p>
                                <p>
                                    <strong>Location:</strong> Discord
                                </p>
                            </div>
                        </div>
                    </div>
                    <h1 class="section-title" id="past-projects">Past Projects</h1>
                    <ul>
                        <li style="font-size: 1.5rem"><a class="mdl-list__item-primary-content" href="https://itch.io/c/1295230/gdd-fall-2020-showcase">Fall
                               2020</a></li>
                        <li style="font-size: 1.5rem"><a class="mdl-list__item-primary-content" href="https://itch.io/c/850031/gdd-spring-2020-showcase">Spring
                                2020</a></li>
                        <li style="font-size: 1.5rem"><a class="mdl-list__item-primary-content" href="https://itch.io/c/675428/gdd-fall-2019-showcase">Fall
                                2019</a></li>
                        <li style="font-size: 1.5rem"><a class="mdl-list__item-primary-content" href="https://itch.io/c/527416/gdd-spring-2019-final-showcase">Spring
                                2019</a></li>
                        <li style="font-size: 1.5rem"><a class="mdl-list__item-primary-content" href="https://itch.io/c/430270/gdd-fall-2018-final-showcase">Fall
                                2018</a></li>
                        <li style="font-size: 1.5rem"><a class="mdl-list__item-primary-content" href="https://itch.io/c/309983/gddcal-spring-2018-showcase">Spring
                                2018</a></li>
                    </ul>
                    <h1 class="section-title" id="prerequisites">Prerequisites</h1>
                    <p>
                        This class is open to both programmers and artists. You are not required to have any prior game
                        development experience.
                    </p>
                    <h6>Programmers</h6>
                    <p>
                        Have completed CS61A and CS61B (concurrently is ok)
                    </p>
                    <h6>Artists</h6>
                    <p>
                        Some artistic background, familiarity with some digital art tools. A portfolio works
                    </p>
                    <h1 class="section-title" id="course-structure">Course Structure</h1>
                    <p>
                        The class meets <strong>twice a week</strong>, for an hour and a half each meeting and <strong>attendance
                            is required.</strong>
                        For the first four weeks, meetings will be tutorial lectures, designed to provide students with
                        knowledge of how the Unity engine works and best practices for implementing game mechanics.
                        The majority of the classes for the first half of the course will be in the form of hands-on lab
                        assignments.
                    </p>
                    <p>
                        Project teams are formed around Week 6 and the course will assume the following structure:
                    </p>
                    <p>
                        The first ~20 minutes of class will be a short lecture. On the first class of the week, a project work meeting will follow.
                        On the second class of the week there will be a work day following. Occasionally, the second class of the week will be 
                        replaced with a guest lecture or playtest.
                    </p>
                    <p>
                        During the project work meetings:
                    </p>
                    <p>
                        Teams will meet, check in with a facilitator about their progress, and plan their work schedule for
                        the next week.
                        Teams will work on their projects and get help from facilitators.
                        The lectures from Week 6 onward will be determined during the semester based on what the students
                        need. The lectures will come from a variety of sources: instructors, industry contacts, alumni, and
                        possibly the students themselves.
                    </p>
                    <h1 class="section-title" id="projects">The Projects</h1>
                    <h6>Project 1</h6>
                    <p>
                        Programmers will follow along a series of tutorial videos to create a game
                        from scratch. After completing the game, each student will be required to design and
                        implement their own mechanics, artwork, or SFX and music. This project will reinforce
                        key concepts introduced in the lectures given in the first four weeks of the class.
                        Programmers will learn the fundamentals of creating a project in Unity by following the
                        tutorial. Artists will learn to create and incorporate their own assets by designing and
                        importing their own assets into a mechanically completed game.
                    </p>
                    <p>
                        <strong>Team size:</strong> 1 person
                    </p>
                    <h6>Project 2</h6>
                    <p>
                        A one week &#34;game jam&#34; type project where the goal is to try and build a game in a week. The
                        main purpose of this project is to teach students about scope and what can be done in a week. It will
                        also serve as a way for each student to see what kind of group dynamic works best for them.
                    </p>
                    <p>
                        <strong>Team size:</strong> 2-3 people
                    </p>
                    <h6>Project 3</h6>
                    <p>
                        The flagship project for the course is a game designed and built by the
                        students themselves over the course of approximately two months. Students will begin
                        preparing pitches in Week 5 with guidance from the instructors, and will present their
                        pitches to the entire class in Week 6. Students will then select which projects they are
                        interested in, and the instructors will form teams based on their interests and skills.
                        From there on out, the teams will work with the instructors and their team leads to
                        create a schedule. The instructors will also assign labs to each team based on the
                        project that team is working on; the labs will provide the team with resources that will be
                        useful to know when working on the project. While working on the project, the teams will
                        work with and receive feedback from the facilitators and other students. All projects will
                        be graded based on how well they achieve five milestones.

                    </p>
                    <p>
                        <strong>Team size:</strong> 3-4 people
                    </p>
                    <p>
                        At each milestone, all projects are shared with the rest of the class. These milestones are as
                        follows:
                    </p>
                    <p>
                        <strong>Milestone 0:</strong> Each team is expected to have a game design document completed.
                        The design document needs to include an explanation for the vision of the game
                        as well as the specifics for the core aspects of the game. The teams are also
                        expected to create a week by week breakdown of tasks.
                    </p>
                    <p>
                        <strong>Milestone 1:</strong>  Minimum Viable Product (MVP): Playable prototype of the original
                        pitch. The core mechanics and the first iteration of the core art assets of the
                        game should be implemented. Effectively this milestone exists to ensure that the
                        games are fun, and to provide teams with feedback regarding how their game
                        can be improved.
                    </p>
                    <p>
                        <strong>Milestone 2:</strong> Alpha Build: All of the main mechanics should be in place. The
                        general art style should be decided on and the main assets (character,
                        environment) should be in place. A first pass should be done on the rest of the
                        art assets. There should be a basic but complete level as intended to appear in
                        the final game. This build can have bugs.
                    </p>
                    <p>
                        <strong>Milestone 3:</strong> Beta Build: The main mechanics should no longer have any bugs.
                        Most of the art assets should be completed and in the game. The game and its
                        levels should be mostly complete. This build needs to have a certain level of
                        polish; having a few small bugs and incomplete minor assets is fine at this build.
                    </p>
                    <p>
                        <strong>Milestone 4 (showcase):</strong> Release Build: Finished Project. The game should be
                        complete, and in line with the original pitch. It should be polished, playable from
                        start to finish, and mostly bug free.
                    </p>
                    <p>
                        At each milestone, team members will fill out team evaluations that will be factored into your
                        grade.
                    </p>
                    <h1 class="section-title" id="labs">Labs</h1>
                    <p>
                        In the first few weeks, students will work through instructor made, CS-style labs
                        that are focused on teaching a particular aspect of Unity that will aid students in making
                        their projects throughout the semester. Labs will be assigned in class and due the
                        following week.They are completed upon answering check-off questions with a
                        facilitator. Each lab is graded by completion.
                    </p>
                    <h1 class="section-title" id="written-responses">WRITTEN RESPONSES</h1>
                    <p>
                        Students will be responsible for several written assignments. One is a reflection
                        for project 2 to journal their progress within the week that they develop their game. The
                        second is a game design document for the final project that details the design of your
                        game as well as a week by week breakdown of tasks. Lastly students will be required to
                        submit a short write-up detailing their thoughts on the project and the course as a
                        whole.
                    </p>
                    <h1 class="section-title" id="required-readings">REQUIRED READINGS</h1>
                    <p>
                        Students will be required to read one article on game design concepts and
                        principles every week. Basic questions will be asked to the students to ensure that
                        students have been keeping up with the required readings. A link to each week’s
                        reading is provided in the syllabus below and also posted on the course website.
                    </p>
                    <h1 class="section-title" id="required-materials">REQUIRED MATERIALS</h1>
                    <p>
                        Every student will need a laptop capable of running Photoshop, Illustrator, and Unity3D.
                        No textbooks are required. Two recommended resources are articles from
                        www.gamasutra.com and videos from www.gdcvault.com.
                    </p>
                    <h1 class="section-title" id="grading">Grading</h1>
                    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                        <tbody>
                            <tr>
                                <td style="font-weight:bold; text-align: left; ">Labs</td>
                                <td>10%</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold; text-align: left; ">Project 1</td>
                                <td>10%</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold; text-align: left; ">Project 2</td>
                                <td>10%</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold; text-align: left; ">Project 3</td>
                                <td>60%</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold; text-align: left; ">Written Responses</td>
                                <td>10%</td>
                            </tr>
                        </tbody>
                    </table>
                    <h6>Project 1 and 2:</h6>
                    <p>
                        Graded on completion of project specifications
                    </p>
                    <p>
                        Grading will consist of a P/NP and some feedback on your project
                    </p>
                    <h6>Project 3 (Per milestone):</h6>
                    <p>
                        Mentor evaluation: 40%
                    </p>
                    <p>
                        Peer evaluations: 40%
                    </p>
                    <p>
                        Project score: 20%
                    </p>
                    <p>
                        Project score is based off of progress made not percentage of pitch completed
                    </p>
                    <br />
                    <p style="font-weight:bold ">
                        A minimum of 70% is required to pass the course.
                    </p>
                    <h1 class="section-title" id="general-policy">General Policy</h1>
                    <p>
                        Attendance matters! If you cannot be at class, you <strong>must</strong> let an instructor and your team lead know.
                        Only two unexcused absences will be allowed, and any further absences will result in your grade
                        dropping <strong>10% per absence</strong>. If you are in danger of not passing come the end of the semester, the
                        instructors will let people know what can be done to remedy that.
                    </p>
                </div>
                <div id="schedulePage">
                    <table class="mdl-shadow--3dp" id="calendar" style="font-family: 'Roboto-Regular'; text-decoration: none; text-align: left; font-size: 1.1rem;  padding-left: 24px">
                        <tbody>
                            <tr>
                                <th>&nbsp;Week&nbsp;</th>
                                <th>&nbsp;Day</th>
                                <th>&nbsp;#</th>
                                <th>&nbsp;Lecture</th>
                                <th>&nbsp;Reading</th>
                                <th>&nbsp;Lab Links</th>
                                <th>&nbsp;Project</th>
                                <th>Office Hours</th>
                            </tr>
                            <!-- Week 0 -->
                            <tr class="gray-bg">
                                <td class="weeknum" rowspan="2">0</td>
                                <td>We 1/27</td>
                                <td>1</td>
                                <td class="td-left"><a href="https://docs.google.com/presentation/d/1kp4aZAzZWOLNQI8HU08U1M3wVhnF9Rx4tUo78cfacHw/edit?usp=sharing">
                                    Intro to Unity- Basics</a><br><a href="https://docs.google.com/presentation/d/1XnE1p-jA1bh8wQsROIGwY0KnBrcUCwwyj-cGK6RMkcg/edit?usp=sharing">
                                    Course Overview and Info Session</a></td>
                                <td class="weeknum" rowspan="2"><a href = "https://www.gamedesigning.org/learn/game-design-principles/">Game Design Principles </a></td> 
                                <td><a href="https://github.com/berkeleyGamedev/UnityBasics"> Intro to Unity Lab</a></td>
                                <td></td>
                                <td>Location: TBD</td>
                            </tr>
                            <!-- Week 1 -->
                            <tr class="white-bg">
                                
                                <td>Fr 1/29</td>
                                <td>2</td>
                                <td class="td-left"><a href="https://docs.google.com/presentation/d/1twFQPvbr33NX5J8hJwdG94jc52iU56foO3ZwchNFVAs/edit?usp=sharing">Intro to Game design</a></td>
                                <td>Programers Lab:<a href=" https://github.com/berkeleyGamedev/BasicScriptingLab"> Intro to Programming</a><br> Artist Lab:
                                    <a href = "https://github.com/berkeleyGamedev/PixelArtAndSpritingLab">Spriting</a> </td>
                                <td class='proj1'>Project 1 Part 1: <a href="https://tinyurl.com/ArtFa19">Artists</a><br><a href="https://tinyurl.com/ArtHybridFa19">Art/Programmer Hybrid</a><br>
                                    <a href="https://tinyurl.com/MusicFa19">Music/Programmer Hybrid</a><br><a href="https://tinyurl.com/ProgrammerFa19">Programmers</a></td>
                                <td>Location: TBD</td>
                            </tr>
                            <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">1</td>
                                <td>We 2/3</td>
                                <td>3</td>
                                <td class="td-left"><a href="https://docs.google.com/presentation/d/1v0Mn8L6bcns6wOqbL1k14nXMlLEKZIIuelkD8zhwsrU/edit?usp=sharing">Intro to the Art Pipeline</a><br>
                                <a href="https://docs.google.com/presentation/d/1cqfFVIt-sQnva0OJzowyKR9utmwiLEQJDVCOB-RUchI/edit?usp=sharing">Character Design</a></td>
                                <td class="weeknum" rowspan="2"><a href = "https://gamedevlibrary.com/the-difference-between-good-graphics-and-good-aesthetics-in-video-games-eb012c2e3cbe ">Good Graphics V.S Good Aesthetics</a></td>
                                <td class = "weeknum" rowspam = "2" >Programers Lab:<a href="https://github.com/berkeleyGamedev/Advanced-Scripting">Advanced Unity Programming</a><br> Artist Lab:
                                    <a href = "https://github.com/berkeleyGamedev/AnimatorAndBlendTreesLab">Animations</a></td>
                                <td></td>
                                <td>Location: TBD</td>
                            </tr>
                            <!-- Week 2 -->
                            <tr class="white-bg">
                                
                                <td>Fr 2/5</td>
                                <td>4</td>
                                <td class="td-left"><a href="https://docs.google.com/presentation/d/1TRRwG4IOPl3pGnW1dz3YHurMaj7fc4WQ_jlzkFPrkrc/edit?usp=sharing">Animation Lecture</a></td>
                                <td >Programers Lab: <a href="https://github.com/berkeleyGamedev/ColliderLab">Colliders</a><br> Artist Lab: 
                                    <a href = "https://github.com/berkeleyGamedev/TilemapLab">Tile Map</a></td>
                                <td class='proj1'>Project 1 Part 1 due <br>Project 1 Part 2:<br><a href = " http://tiny.cc/proj1programmer"> Programmer</a><br><a href=" http://tiny.cc/proj1musichybrid"> Progrmmaer Musician Hybrid</a><br>
                                <a href= " http://tiny.cc/proj1arthybrid">Programmer Artist Hybrid </a> <br><a href = "http://tiny.cc/proj1artist">Artist</a> </td>
                                <td>Location: TBD</td>
                            </tr>
                            <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">2</td>
                                <td>We 2/10</td>
                                <td>5</td>
                                <td class="td-left">Game Loops</td>
                                <td class= "weeknum" rowspan = "2"><a href="https://www.gamasutra.com/view/feature/132341/the_13_basic_principles_of_.php?page=2 ">Basic Principles of Gameplay Design</a></td>
                                <td>Programmer Lab: <a href="">Rigidbodies</a><br> Artist Lab: <a href="">Animator</a></td>
                                <td></td>
                                <td>Location: TBD</td>
                            </tr>
                            <!-- week 3 -->
                            <tr class="white-bg">
                                
                                <td>Fr 2/12</td>
                                <td>6</td>
                                <td class="td-left"><a href=""></a>UI Lecture</td>
                                <td>Programmer Lab: <a href="">Unity UI</a><br>Artist Lab: <a href="">UI Asset Creation</a></td>
                                <td class="proj1">Project 1 Part 2 due <br><a href = "http://tiny.cc/Fa20Proj2Spec">Project 2 Assigned</a></td>
                                <td>Location: TBD</td>
                            </tr>
                            <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">3</td>
                                <td>We 2/17</td>
                                <td>7</td>
                                <td class="td-left">Group Dynamics and Design Docs</td>
                                <td class="weeknum" rowspan="2"><a href="http://www.gamasutra.com/view/feature/134571/how_to_pitch_your_project_to_.php">How to Pitch your Project to Publishers</a></td>
                                <td>Programmer Lab: <a href="">Coroutines</a><br>Artist Lab: <a href="">Environment Design</a></td>
                                <td></td>
                                <td>Location: TBD</td>
                            </tr>
                            <!-- week 4 -->
                            <tr class="white-bg">
                                
                                <td>Fr 2/19</td>
                                <td>8</td>
                                <td class="td-left">MVP Lecture</td>
                                <td></td>
                                <td class="proj2">Project 2 Due</td>
                                <td>Location: TBD</td>
                            </tr>
                            <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">4</td>
                                <td>We 2/24</td>
                                <td>9</td>
                                <td class="td-left">Pitch Day</td>
                                <td class="weeknum" rowspan="2"><a href="https://gamedevelopment.tutsplus.com/articles/how-and-why-to-write-a-great-game-design-document--cms-23545">How and Why to Write a Great Game Design Document</a></td>
                                <td></td>
                                <td></td>
                                <td>Location: TBD</td>
                            </tr>
                            <!-- Week 5 -->
                            <tr class="white-bg">
                                
                                <td>Fr 2/26</td>
                                <td>10</td>
                                <td class="td-left">Project 2 Showcase</td>
                                
                                <td></td>
                                <td class='proj3'>Project 3 Teams are Assembled</td>
                                <td>Location: TBD</td>
                            </tr>
                            <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">5</td>
                                <td>We 3/3</td>
                                <td>11</td>
                                <td class="td-left"></td>
                                <td class="weeknum" rowspan="2"><a href="https://www.gamasutra.com/view/feature/185258/best_practices_five_tips_for_.php?print=1">5 Tips for Better Playtesting</a></td>
                                <td></td>
                                <td>Project Work Meeting</td>
                                <td>Location: TBD</td>
                            </tr>
                            <!-- Week 6 -->
                            <tr class="white-bg">
                                
                                <td>Fr 3/5</td>
                                <td>12</td>
                                <td class="td-left">AI Design</td>
                                <td></td>
                                <td class='proj3'>Milestone 0: Game Design Doc Due</td>
                                <td>Location: TBD</td>
                            </tr>
                            <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">6</td>
                                <td>We 3/10</td>
                                <td>13</td>
                                <td class="td-left">Game Feel</td>
                                <td class="weeknum" rowspan="2"><a href="https://www.gamasutra.com/view/feature/130989/team__corporate_structure_is_the_.php">Team and Corporate Structure</a></td>
                                <td></td>
                                <td>Project work meeting</td>
                                <td>Location: TBD</td>
                            </tr>
                            <!-- Week 7 -->
                            <tr class="white-bg">
                                
                                <td>Fr 3/12</td>
                                <td>14</td>
                                <td class="td-left"></td>
                                <td></td>
                                <td class="proj3">Milestone 1 Delivery: Demo and Feedback</td>
                                <td>Location: TBD</td>
                            </tr>
                            <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">7</td>
                                <td>We 3/17</td>
                                <td>15</td>
                                <td class="td-left">Lecture: Music and SFX</td>
                                <td class="weeknum" rowspan="2"><a href="http://www.gamasutra.com/blogs/WesleyRockholz/20140418/215819/10_Insightful_Playtest_Questions.php">Insightful Playtest Questions</a></td>
                                <td></td>
                                <td>Project work meeting</td>
                                <td>Location: TBD</td>
                            </tr>
                            <!-- Week 8 -->
                            <tr class="white-bg">
                                
                                <td>Fr 3/19</td>
                                <td>16</td>
                                <td class="td-left">Lecture: Potential Guest Lecture (TBD)</td>
                                <td></td>
                                <td></td>
                                <td>Location: TBD</td>
                            </tr>
                            <tr  class="gray-bg">
                            <td class="weeknum" rowspan="2">8</td>
                                <td>We 3/24</td>
                                <td>17</td>
                                <td class="td-left">Spring Break</td>
                                <td class="weeknum" rowspan="2"><a href="http://www.gamasutra.com/blogs/ThomasGrip/20140429/216467/4Layers_A_Narrative_Design_Approach.php">4 Layers, A Narrative Design Approach</a></td>
                                <td></td>
                                <td></td>
                                <td>Location: TBD</td>
                            </tr>
                            <!-- Week 9 -->
                            <tr class="white-bg">
                                
                                <td>Fr 3/26</td>
                                <td>18</td>
                                <td class="td-left">Spring Break</td>
                                
                                <td></td>
                                <td></td>
                                <td>Location: TBD</td>
                            </tr>
                            <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">9</td>
                                <td>We 3/31</td>
                                <td>19</td>
                                <td class="td-left">Lecture: Tutorials</td>
                                <td class="weeknum" rowspan="2"><a href="https://www.cnet.com/news/microsofts-new-xbox-adaptive-controller-puts-disabled-players-back-in-the-game/">Xbox Adaptive Controller</a></td>
                                <td></td>
                                <td>Project Work Meeting</td>
                                <td>Location: TBD</td>
                            </tr>
                            <tr class="white-bg">
                                <td>Fr 4/2</td>
                                <td>20</td>
                                <td class="td-left"><strong>Milestone 2 Delivery: Demo and Feedback</strong></td>
                                <td></td>
                                <td></td>
                                <td>Location: TBD</td>
                            </tr>
                            <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">10</td>
                                <td>We 4/7</td>
                                <td>21</td>
                                <td class="td-left">Lecture TBD</td>
                                <td class="weeknum" rowspan="2"><a href="http://www.gamestudies.org/0101/juul-gts/">A Brief Note on Games and Narratives</a></td>
                                <td></td>
                                <td>Project work meeting</td>
                                <td>Location: TBD</td>
                            </tr>
                            <!-- Week 10 -->
                            <tr class="white-bg">
                                <td>Fr 4/9</td>
                                <td>22</td>
                                <td class="td-left">Potential Guest Lecture, TBD</td>
                                <td></td>
                                <td class='proj3'>Milestone 2</td>
                                <td>Location: TBD</td>
                            </tr>
                            <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">11</td>
                                <td>We 4/14</td>
                                <td>23</td>
                                <td class="td-left">Accessibility Lecture</td>
                                <td class="weeknum" rowspan="2"><a href="https://gamedevelopment.tutsplus.com/tutorials/the-many-ways-to-show-the-player-how-its-done-with-in-game-tutorials--gamedev-400">The Many Ways to Show the Player how it's Done with In-Game Tutorials</a></td>
                                <td></td>
                                <td>Project work meeting</td>
                                <td>Location: TBD</td>
                            </tr>
                            <!-- Week 11 -->
                            <tr class="white-bg">
                                <td>Fr 4/16</td>
                                <td>24</td>
                                <td class="td-left"><strong>Miestone 3 Delivery: Demo and Feedback</strong></td>
                                <td></td>
                                <td></td>
                                <td>Location: TBD</td>
                            </tr>
                            <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">12</td>
                                <td>We 4/21</td>
                                <td>25</td>
                                <td class="td-left">State of the Industry</td>
                                <td class="weeknum" rowspan="2"><a href="https://www.gamasutra.com/blogs/CalebCompton/20180618/320219/Game_Design_in_Real_Life_Gamification.php">Game Design in Real Life: Gamification</a></td>
                                <td></td>
                                <td>Project work meeting</td>
                                <td>Location: TBD</td>
                            </tr>
                            <!-- Week 12 -->
                            <tr class="white-bg">
                                <td>Fr 4/23</td>
                                <td>26</td>
                                <td class="td-left">Potential Guest Lecture (TBD)</td>
                                <td></td>
                                <td></td>
                                <td>Location: TBD</td>
                            </tr>
                            <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">13</td>
                                <td>We 4/28</td>
                                <td>27</td>
                                <td class="td-left">Building and Publishing</td>
                                <td></td>
                                <td></td>
                                <td>Project work meeting</td>
                                <td>Location: TBD</td>
                            </tr>
                            <!-- Week 13 -->
                            <tr class="white-bg">
                                <td>Fr 4/30</td>
                                <td>28</td>
                                <td class="td-left"><strong>Game/course postmortem writeup due</strong></td>
                                <td></td>
                                <td></td>
                                <td>Course Postmortem writeup due</td>
                                <td>Location: TBD</td>
                            </tr>
                            <!-- Week 14 -->
                            <tr class="gray-bg">
                                <td class="weeknum" rowspan="2">14</td>
                                <td>We 5/05</td>
                                <td>29</td>
                                <td class="td-left">Dead Week</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Location: TBD</td>
                            </tr>
                            <tr class="white-bg">
                                <td>Fr 5/07</td>
                                <td>30</td>
                                <td class="td-left">Dead Week</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Location: TBD</td>
                            </tr>
                            <!-- Week 15 -->
                            <tr class="gray-bg">
                                <td class="weeknum" rowspan="2">15</td>
                                <td>Tu 5/4 (tentative)</td>
                                <td>31</td>
                                <td class="td-left"><strong>Showcase</strong></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Location: TBD</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="labsPage">
                    <h1 class="section-title" id="course-description">Programming Labs</h1>
                    <ul class='mdl-list' id="labs">
                        <a class="no-hover" href="https://github.com/berkeleyGamedev/RigidbodyAdvanced">
                            <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                                <img class="lab-image" src="images/labs/Rigidbody Advanced.png">
                                <span class="mdl-list__item-primary-content">
                                    <span>Advanced Movement</span>
                                    <span class="mdl-list__item-text-body">
                                        Dive into the finer details of movement. In this lab you’ll be learning more about
                                        advanced movement mechanics and how your design choices in game might impact your
                                        movement decisions. Also learn about aerial movement, friction, and bounciness
                                        levels. Finally, you’ll be learning about some design philosophy regarding aerial
                                        movement and jumping.
                                    </span>
                                </span>
                            </li>
                        </a>
                        <a class="no-hover" href="https://github.com/berkeleyGamedev/Advanced-Scripting">
                            <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                                <img class="lab-image" src="images/labs/Advanced Scripting.PNG">
                                <span class="mdl-list__item-primary-content">
                                    <span>Advanced Scripting</span>
                                    <span class="mdl-list__item-text-body">
                                        Remember basic scripting? This is level 2. Complete a fruit ninja like game by
                                        implementing a number of things such as a spawner and the “fruit.” Also, you get to
                                        learn a number of ways to keep your code organized and clean so that when you work
                                        in a team, other programmers do not have trouble working with your code.
                                    </span>
                                </span>
                            </li>
                        </a>
                        <a class="no-hover" href="https://github.com/berkeleyGamedev/AudioLab">
                            <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                                <img class="lab-image" src="images/labs/Audio Lab.png">
                                <span class="mdl-list__item-primary-content">
                                    <span>Audio</span>
                                    <span class="mdl-list__item-text-body">
                                        Ready to have your collective brains blown out by awesome audio? Good. This lab
                                        covers the built in Unity tools for audio mixing and effects. The lab covers an
                                        audio manager script for managing various audio sources, and the lab will also
                                        cover audio mixers. Audio mixers allow for different effects and sounds to have
                                        different output volumes and various adjustments such as lowpass, reverb, and more.
                                        This lab does not cover spatial audio, audio editing, or music composition.
                                    </span>
                                </span>
                            </li>
                        </a>
                        
                        <a class="no-hover" href="https://github.com/berkeleyGamedev/BasicScriptingLab">
                            <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                                <img class="lab-image" src="images/labs/Basic Scripting.png">
                                <span class="mdl-list__item-primary-content">
                                    <span>Basic Scripting</span>
                                    <span class="mdl-list__item-text-body">
                                        By jove, this is it. This is your first lab in Unity which will implement various
                                        gameplay mechanics with using public variables and the inspector. Enemy attacks and
                                        player health are affected using code and the inspector in this lab. Coding will
                                        not be covered in this lab, but programmers should read the additional passages for
                                        more information on the code itself. Prefabs, a base for various kinds of
                                        GameObjects, are covered in this lab from their creation as well as their use.
                                        Enemies will be derived from a base prefab called Enemy, and students will create a
                                        new enemy based off of the Prefab.
                                    </span>
                                </span>
                            </li>
                        </a>
                        <a class="no-hover" href="https://github.com/berkeleyGamedev/ColliderLab">
                            <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                                <img class="lab-image" src="images/labs/CollidersScreenshot.png">
                                <span class="mdl-list__item-primary-content">
                                    <span>Colliders</span>
                                    <span class="mdl-list__item-text-body">
                                        In this lab you’ll learn all about colliders - the part of Unity’s physics engine
                                        that lets objects actually interact with each other. By the end of this lab, you’ll
                                        have learned the difference between physical and trigger colliders, become familiar
                                        with all the functions you need to know to use colliders effectively, and have used
                                        colliders to create a basic platformer and a simple motion-activated boss.
                                    </span>
                                </span>
                            </li>
                        </a>
                        <a class="no-hover" href="https://github.berkeley.edu/berkeley-gamedev/CoroutinesLab">
                            <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                                <img class="lab-image" src="images/labs/CoroutinesScreenshot.jpg">
                                <span class="mdl-list__item-primary-content">
                                    <span>Coroutines</span>
                                    <span class="mdl-list__item-text-body">
                                        In this lab, you’ll learn all about Unity coroutines! Coroutines are an amazing
                                        tool to make cool looking transitions, smooth out your movement and animations, and
                                        improve the performance of your game, so they’re definitely worth learning! Through
                                        the course of this lab, you’ll implement color fading, enemy spawning, and smooth
                                        movement and develop a solid understanding of coroutines that will allow you to
                                        apply them in a wide variety of situations going forward.
                                    </span>
                                </span>
                            </li>
                        </a>
                        <a class="no-hover" href="https://github.com/berkeleyGamedev/DelegatesAndEventsLab">
                            <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                                <img class="lab-image" src="images/labs/Delegates And Events.PNG">
                                <span class="mdl-list__item-primary-content">
                                    <span>Delegates and Events</span>
                                    <span class="mdl-list__item-text-body">
                                        Complete a top down survival shooter by implementing delegates and events. You will
                                        learn about what they are, how to use them and most importantly, why to use them as
                                        you create the game.
                                    </span>
                                </span>
                            </li>
                        </a>
                        <a class="no-hover" href="https://github.com/berkeleyGamedev/IntroToLightingLab">
                            <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                                <img class="lab-image" src="images/labs/Lighting.png">
                                <span class="mdl-list__item-primary-content">
                                    <span>Lighting</span>
                                    <span class="mdl-list__item-text-body">
                                        This lab covers the basics of Unity lighting in 3D, from the different types of
                                        lights to how lights interact with objects and materials. It touches into different
                                        lighitng effects and model materials and shaders. Lighting can change the entire
                                        mood and by the end of the lab, you'll know how to manipulate the basics to achieve
                                        the desired effect in Unity.
                                    </span>
                                </span>
                            </li>
                        </a>
                        
                        <a class="no-hover" href="https://github.com/berkeleyGamedev/RaycastingLab">
                            <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                                <img class="lab-image" src="images/labs/Raycasting.PNG">
                                <span class="mdl-list__item-primary-content">
                                    <span>Raycasting</span>
                                    <span class="mdl-list__item-text-body">
                                        Here we explain the basics of raycasting in 2D. We go over how to use a few
                                        different types of shapes and how exactly they work in comparison to the default
                                        ray. At the end, you will have completed a very small and basic game all about
                                        shooting down circles with your lasers.
                                    </span>
                                </span>
                            </li>
                        </a>
                        <a class="no-hover" href="https://github.com/berkeleyGamedev/Rigidbody-Basics">
                            <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                                <img class="lab-image" src="images/labs/Rigidbody and Movement Basics.png">
                                <span class="mdl-list__item-primary-content">
                                    <span>Rigidbody Basics</span>
                                    <span class="mdl-list__item-text-body">
                                        In this basic lab, you’ll be learning all about Rigidbodies, the component that
                                        controls an object’s position through physics simulation. Through Rigidbodies,
                                        you’ll learn about all the components necessary to achieve basic smooth movement.
                                        There will also be an introduction to input settings! Extremely important unless
                                        you plan on making a text based adventure game.
                                    </span>
                                </span>
                            </li>
                        </a>
                        <a class="no-hover" href="https://github.com/berkeleyGamedev/TransitioningSavingAndBuildingLab">
                            <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                                <img class="lab-image" src="images/labs/TranSavBuild.PNG">
                                <span class="mdl-list__item-primary-content">
                                    <span>Transitioning, Saving, and Building Scenes</span>
                                    <span class="mdl-list__item-text-body">
                                        In this lab we introduce you to transitioning from one scene to a new scene, saving
                                        data so that it persists both between scenes and between game sessions, and
                                        building an executable to test everything.
                                    </span>
                                </span>
                            </li>
                        </a>
                        
                        <a class="no-hover" href="https://github.com/berkeleyGamedev/UnityBasics">
                            <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                                <img class="lab-image" src="images/labs/Basics.PNG">
                                <span class="mdl-list__item-primary-content">
                                    <span>Unity Basics</span>
                                    <span class="mdl-list__item-text-body">
                                        Most basic introduction to all things Unity. This lab goes over the format, object
                                        structure and most general information of Unity. This does not require any
                                        knowledge of Unity, coding or art. By the end of the lab, you’ll have made a simple
                                        space game moving around to get collectibles.
                                    </span>
                                </span>
                            </li>
                        </a>
                        
                    </ul>
                    <h1 class="section-title" id="course-description">Art Labs</h1>
                    <ul class="mdl-list">
                        <a class="no-hover" href="https://github.com/berkeleyGamedev/AnimatorAndBlendTreesLab">
                            <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                                <img class="lab-image" src="images/labs/Blend Trees.png">
                                <span class="mdl-list__item-primary-content">
                                    <span>Animator/Blend Tree</span>
                                    <span class="mdl-list__item-text-body">
                                        In this lab, you’ll create smooth transitions between 2D animations using Blend
                                        Trees. Blend trees are a must for organizing complicated animation transitions in
                                        Animator. They’re used to quickly handle transitions between animations when the
                                        player provides new input. In 3D games, they actually interpolate between the two
                                        animations, creating a smooth transition. We will only be going over the 2D
                                        version, but all the concepts apply to 3D animations.
                                    </span>
                                </span>
                            </li>
                        </a>
                        <a class="no-hover" href="https://github.com/berkeleyGamedev/ParticleEffectsLab">
                            <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                                <img class="lab-image" src="images/labs/Intro To Particle Effects.PNG">
                                <span class="mdl-list__item-primary-content">
                                    <span>Particle Effects</span>
                                    <span class="mdl-list__item-text-body">
                                        Learn about the thought process that goes into creating a lightning effect as you
                                        create your own customizable lightning effect. By going through this lab, you will
                                        gain a basic understanding over a few of the particle system modules and moving
                                        forward, you will have the ability to use those modules to create your own unique
                                        effects.
                                    </span>
                                </span>
                            </li>
                        </a>
                        <a class="no-hover" href="https://github.com/berkeleyGamedev/SpritingLab">
                            <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                                <img class="lab-image" src="images/labs/Spriting.png">
                                <span class="mdl-list__item-primary-content">
                                    <span>Pixel Art Spriting</span>
                                    <span class="mdl-list__item-text-body">
                                        In this lab, you will cover the basics of pixel spriting. It will teach you some of
                                        the technical ideas such as jaggies and dithering so that you are able to create
                                        your own game ready sprites and assets. It also covers the basic workflow as well
                                        as useful resources in learning even more. This lab is in Photoshop; however you
                                        can use any other pixel sprinting software. Unity is not required for this lab.
                                    </span>
                                </span>
                            </li>
                        </a>
                        
                        <a class="no-hover" href="https://github.com/berkeleyGamedev/AnimationLab">
                            <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                                <img class="lab-image" src="images/labs/Animation.png">
                                <span class="mdl-list__item-primary-content">
                                    <span>Sprite Animations</span>
                                    <span class="mdl-list__item-text-body">
                                        In this lab, you will be getting a preview of the game animation pipeline, from a
                                        Photoshop sprite to a finished Unity animation. Along with introducing the basics
                                        of animation principles, we will be introducing two methods of creating animations:
                                        a sprite-based method, and a puppet-based method that uses many of the tools that
                                        3D animations use.
                                    </span>
                                </span>
                            </li>
                        </a>
                        
                        
                        <a class="no-hover" href="https://github.com/berkeleyGamedev/TilemapLab">
                            <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                                <img class="lab-image" src="images/labs/Tilemaps.png">
                                <span class="mdl-list__item-primary-content">
                                    <span>Tilemaps</span>
                                    <span class="mdl-list__item-text-body">
                                        In this lab, you’ll learn how to use Tilemaps to create a level. It will go over
                                        the process of cutting a spritesheet and assigning sprites to specific tiles. The
                                        Unity implemented Tilemap is able to easily create new levels with specific tiles
                                        that contain rules, animations, randomizationndom generation, and tile setting
                                        conditions. It is an easy way to make many levels and, once set up, easy for
                                        everyone of all programming levels to do. With more programming, more unique
                                        brushes, rulesets and randomization can be created to generate dynamic levels
                                        without the hassle of gameobjects and prefabs.
                                    </span>
                                </span>
                            </li>
                        </a>
                        <a class="no-hover" href="https://github.com/berkeleyGamedev/UILab">
                            <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                                <img class="lab-image" src="images/labs/UI_Lab.png">
                                <span class="mdl-list__item-primary-content">
                                    <span>User Interface (UI)</span>
                                    <span class="mdl-list__item-text-body">
                                        This is a lab to get you acquainted with UI in Unity. You will create a basic shop
                                        using all UI elements. It will cover everything step by step from what a canvas is
                                        to implementing masks. This first half of this lab goes over the Unity components
                                        you need and the second half is split, where programmers learn the scripting
                                        required for events and artists learn about the design behind UI.
                                    </span>
                                </span>
                            </li>
                        </a>
                        <a class="no-hover" href="https://github.com/berkeleyGamedev/3DRiggingSkinnnigAndAnimatingLab">
                            <li class="mdl-list__item mdl-list__item--three-line mdl-shadow--2dp" id="lab-list">
                                <img class="lab-image" src="images/labs/3DRigSkinAnim.PNG">
                                <span class="mdl-list__item-primary-content">
                                    <span>3D Rigging, Skinning, and Animating</span>
                                    <span class="mdl-list__item-text-body">
                                        This lab covers how to rig, skin, and animate in Maya. Rigging is the act of
                                        deciding where the various joints and bones of a model will be placed, skinning
                                        means to merge the bones and joints with the actual model so that the model can be
                                        manipulated, and animating is the actual animation of the model using the joints
                                        and bones.
                                    </span>
                                </span>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
            <!-- fixes a bug for some reason -->
            <div class="mdl-button__container">
            </div>
            <?php include 'footer.php' ?>
        </main>
    </div>
</body>

</html>