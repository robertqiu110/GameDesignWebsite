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
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" type="text/css" href="calendar.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
</head>

<body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <?php
            $title="DesInv 198-4: Video Game Design and Development, Spring 2019";
            include 'header.php';
        ?>
        <div class="background decal"></div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--4-col" style="height: 2vh"></div>
                </div>
                <h1 class="section-title" id="course-description">COURSE DESCRIPTION</h1>
                <p>
                    This course is a deep dive into the creation of games, from beginning to end.
                    Over the course of the semester, students will pitch a game, form small teams, and
                    build a project from start to finish with help from the instructors. Students are not
                    required to have any prior game development experience but it is required that a
                    student taking the course either has basic art, music or programming abilities. They will
                    also learn about the different roles that exist within the industry, how to apply their skills
                    to them, and form an understanding about how to best prepare themselves to find their
                    way into these roles. This will be a rigorous class, one that will require a lot of time and
                    dedication. Students will be selected via the application due Friday, August 30th at
                    11:59 PM, to ensure that the class composition reflects a diverse range of skills,
                    backgrounds, and proficiency levels.
                </p>
                <ul class="toc">
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
                </ul>
                <h1 class="section-title" id="course-info">COURSE INFO</h1>
                <div>
                    <p>
                        <strong>Time:</strong> M/W 6:30-8:00pm
                    </p>
                    <p>
                        <strong>Location:</strong> Dwinelle 215
                    </p>
                    <p>
                        <strong>Lead Facilitators:</strong> Weylan Wang
                    </p>
                    <p>
                        <strong>Faculty of Record:</strong> Ren Ng
                    </p>
                    <p>
                        <strong>Course Email:</strong> berkeley.gamedev@gmail.com
                    </p>
                </div>
                <h1 class="section-title" id="office-hours">OFFICE HOURS</h1>
                <div>
                    <p>
                        <strong>Time:</strong> TBD
                    </p>
                    <p>
                        <strong>Location:</strong> TBD
                    </p>
                </div>
                <h1 class="section-title" id="schedule">SCHEDULE</h1>
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
                        <tr class="white-bg">
                            <td class="weeknum" rowspan="1">0</td>
                            <td>W 08/28</td>
                            <td>1</td>
                            <td class="td-left">Course Overview and Info Session</a><br> Past semester game showcase</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Location: TBD</td>
                        </tr>
                        <!-- Week 1 -->
                        <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">1</td>
                            <td>M 09/02</td>
                            <td>2</td>
                            <td class="td-left">Labour Day</td>
                            <td class="weeknum" rowspan="2"><a href="https://www.gamedesigning.org/learn/game-design-principles/
                            ">Game Design Principles</a><br>Read by 09/04</td>
                            <td></td>
                            <td class="proj1">
                            </td>
                            <td>Location: TBD</td>
                        </tr>
                        <tr class="gray-bg">
                            <td>W 09/04</td>
                            <td>3</td>
                            <td class="td-left">Intro to Unity- Basics</td>
                            <td></td>
                            <td class="proj1">Assign Project 1</td>
                            <td>Location: TBD</td>
                        </tr>
                        <!-- Week 2 -->
                        <tr class="white-bg">
                            <td class="weeknum" rowspan="2">2</td>
                            <td>M 09/09</td>
                            <td>4</td>
                            <td class="td-left">Intro to Unity- Programming</td>
                            <td class="weeknum" rowspan="2"><a href="https://gamedevlibrary.com/the-difference-between-good-graphics-and-good-aesthetics-in-video-games-eb012c2e3cbe">Good Graphics vs Aesthetics in Video Games</a><br>Read by 09/11</td>
                            <td></td>
                            <td class="proj1">
                            </td>
                            <td>Location: TBD</td>
                        </tr>
                        <tr class="white-bg">
                            <td>W 09/11</td>
                            <td>5</td>
                            <td class="td-left">Intro to Unity - The art pipeline
                            </td>
                            <td></td>
                            <td class="proj1">Project 1 Part 1 due</td>
                            <td>Location: TBD</td>
                        </tr>
                        <!-- week 3 -->
                        <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">3</td>
                            <td>M 09/16</td>
                            <td>6</td>
                            <td class="td-left">Intro to Unity- Advanced Topics</td>
                            <td class="weeknum" rowspan="2"><a href="https://www.gamasutra.com/view/feature/132341/the_13_basic_principles_of_.php?page=2">Basic Principles of Game Design</a><br>Read by 09/18</td>
                            <td></td>
                            <td class="proj1"></td>
                            <td>Location: TBD</td>
                        </tr>
                        <tr class="gray-bg">
                            <td>W 09/18</td>
                            <td>7</td>
                            <td class="td-left">Basics of Game design</td>
                            <td>Lab: Colliders/Spriting</td>
                            <td class="proj2"></td>
                            </td>
                            <td>Location: TBD</td>
                        </tr>
                        <!-- week 4 -->
                        <tr class="white-bg">
                            <td class="weeknum" rowspan="2">4</td>
                            <td>M 09/23</td>
                            <td>8</td>
                            <td class="td-left">Game Loops/Design Docs</td>
                            <td class="weeknum" rowspan="2"><a href="http://www.gamasutra.com/view/feature/134571/how_to_pitch_your_project_to_.php">How to Pitch your Project to Publishers</a><br>Read by 09/25</td>
                            <td>Lab: Rigidbodies/Animations</td>
                            <td class="proj2">Project 1 Part 2 due/<br>Project 2 Assigned</td>
                            <td>Location: TBD</td>
                        </tr>
                        <tr class="white-bg">
                            <td>W 09/25</td>
                            <td>9</td>
                            <td class="td-left">Group dynamics, Pitch day explanation,
                                tools and assets</td>
                            <td>Lab: Coroutines/Animator</td>
                            <td class="proj2"></td>
                            <td>Location: TBD</td>
                        </tr>
                        <!-- Week 5 -->
                        <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">5</td>
                            <td>M 09/30</td>
                            <td>10</td>
                            <td class="td-left">Showcase game jam projects, project 3 explained, project work meetings, small group pitch discussions
                            </td>
                            <td class="weeknum" rowspan="2"><a href="https://gamedevelopment.tutsplus.com/articles/how-and-why-to-write-a-great-game-design-document--cms-23545">How and Why to Write a Great Game Design Document</a><br>Read by 10/02</td>
                            <td></td>
                            <td class="proj3">Game Jam due</td>
                            <td>Location: TBD</td>
                        </tr>
                        <tr class="gray-bg">
                            <td>W 10/02</td>
                            <td>11</td>
                            <td class="td-left"><strong>Pitch Day</strong></td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: TBD</td>
                        </tr>
                        <!-- Week 6 -->
                        <tr class="white-bg">
                            <td class="weeknum" rowspan="2">6</td>
                            <td>M 10/07</td>
                            <td>12</td>
                            <td class="td-left">MVP, Teams are assembled + brainstorming session</td>
                            <td class="weeknum" rowspan="2"><a href="https://www.gamasutra.com/view/feature/185258/best_practices_five_tips_for_.php?print=1">5 Tips for Better Playtesting</a><br>Read by 10/09</td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: TBD</td>
                        </tr>
                        <tr class="white-bg">
                            <td>W 10/09</td>
                            <td>13</td>
                            <td class="td-left">Project work meeting</td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: TBD</td>
                        </tr>
                        <!-- Week 7 -->
                        <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">7</td>
                            <td>M 10/14</td>
                            <td>14</td>
                            <td class="td-left">Lecture TBD</td>
                            <td class="weeknum" rowspan="2"><a href="https://www.gamasutra.com/view/feature/130989/team__corporate_structure_is_the_.php">Team and Corporate Structure</a><br>Read by 10/16</td>
                            <td></td>
                            <td class="proj3">Milestone 0: Game Design Doc Due</td>
                            <td>Location: TBD</td>
                        </tr>
                        <tr class="gray-bg">
                            <td>W 10/16</td>
                            <td>15</td>
                            <td class="td-left">Lecture TBD, Project work meeting</td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: TBD</td>
                        </tr>
                        <!-- Week 8 -->
                        <tr class="white-bg">
                            <td class="weeknum" rowspan="2">8</td>
                            <td>M 10/21</td>
                            <td>16</td>
                            <td class="td-left">Milestone 1 Delivery: Demo and Feedback</td>
                            <td class="weeknum" rowspan="2"><a href="http://www.gamasutra.com/blogs/WesleyRockholz/20140418/215819/10_Insightful_Playtest_Questions.php">Insightful Playtest Questions</a><br>Read by 10/23</td>
                            <td></td>
                            <td class="proj3">Milestone 1</td>
                            <td>Location: TBD</td>
                        </tr>
                        <tr>
                            <td>W 10/23</td>
                            <td>17</td>
                            <td class="td-left">Lecture TBD, Project work meeting</td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: TBD</td>
                        </tr>
                        <!-- Week 9 -->
                        <tr class="white-bg">
                            <td class="weeknum" rowspan="2">9</td>
                            <td>M 10/28</td>
                            <td>18</td>
                            <td class="td-left">Potential Guest Lecture TBD</td>
                            <td class="weeknum" rowspan="2"><a href="http://www.gamasutra.com/blogs/ThomasGrip/20140429/216467/4Layers_A_Narrative_Design_Approach.php">4 Layers, A Narrative Design Approach</a><br>Read by 10/30</td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: TBD</td>
                        </tr>
                        <tr class="white-bg">
                            <td>W 10/30</td>
                            <td>19</td>
                            <td class="td-left">Lecture TBD, Project work meeting</td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: TBD</td>
                        </tr>
                        <!-- Week 10 -->
                        <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">10</td>
                            <td>M 11/4</td>
                            <td>20</td>
                            <td class="td-left"><strong>Milestone 2 Delivery: Demo and Feedback</strong></td>
                            <td class="weeknum" rowspan="2"><a href="https://www.cnet.com/news/microsofts-new-xbox-adaptive-controller-puts-disabled-players-back-in-the-game/">Xbox Adaptive Controller</a><br>Read by 11/16</td>
                            <td></td>
                            <td class="proj3">Milestone 2</td>
                            <td>Location: TBD</td>
                        </tr>
                        <tr class="gray-bg">
                            <td>W 11/6</td>
                            <td>21</td>
                            <td class="td-left">Lecture TBD, Project work meeting</td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: TBD</td>
                        </tr>
                        <!-- Week 11 -->
                        <tr class="white-bg">
                            <td class="weeknum" rowspan="2">11</td>
                            <td>M 11/11</td>
                            <td>22</td>
                            <td class="td-left">Veteran's Day</td>
                            <td class="weeknum" rowspan="2"><a href="http://www.gamestudies.org/0101/juul-gts/">A Brief Note on Games and Narratives</a><br>Read by 11/13</td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: TBD</td>
                        </tr>
                        <tr class="white-bg">
                            <td>W 11/13</td>
                            <td>23</td>
                            <td class="td-left">Lecture TBD, Project work meeting</td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: TBD</td>
                        </tr>
                        <!-- Week 12 -->
                        <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">12</td>
                            <td>M 11/18</td>
                            <td>24</td>
                            <td class="td-left"><strong>Milestone 3 Delivery: Demo and Feedback</strong></td>
                            <td class="weeknum" rowspan="2"><a href="https://gamedevelopment.tutsplus.com/tutorials/the-many-ways-to-show-the-player-how-its-done-with-in-game-tutorials--gamedev-400">The Many Ways to Show the Player how it's Done with In-Game Tutorials</a><br>Read by 11/20</td>
                            <td></td>
                            <td class="proj3">Milestone 3</td>
                            <td>Location: TBD</td>
                        </tr>
                        <tr class="gray-bg">
                            <td>W 11/20</td>
                            <td>25</td>
                            <td class="td-left">Lecture TBD, Project work meeting</td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: TBD</td>
                        </tr>
                        <!-- Week 13 -->
                        <tr class="white-bg">
                            <td class="weeknum" rowspan="2">13</td>
                            <td>M 11/25</td>
                            <td>26</td>
                            <td class="td-left">Lecture TBD, Project work meeting</td>
                            <td class="weeknum" rowspan="2"><a href="https://www.gamasutra.com/blogs/CalebCompton/20180618/320219/Game_Design_in_Real_Life_Gamification.php">Game Design in Real Life: Gamification</a><br>Read by 11/27</td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: TBD</td>
                        </tr>
                        <tr class="white-bg">
                            <td>W 11/27</td>
                            <td>27</td>
                            <td class="td-left">Thanksgiving Break</td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: TBD</td>
                        </tr>
                        <!-- Week 14 -->
                        <tr class="gray-bg">
                            <td class="weeknum" rowspan="2">14</td>
                            <td>M 12/2</td>
                            <td>28</td>
                            <td class="td-left">Building and Publishing, Project work meeting</td>
                            <td></td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: TBD</td>
                        </tr>
                        <tr class="gray-bg">
                            <td>W 12/4</td>
                            <td>29</td>
                            <td class="td-left"><strong>Game/course postmortem writeup due</strong></td>
                            <td></td>
                            <td></td>
                            <td class="proj3">Postmortem Writeup Due</td>
                            <td>Location: TBD</td>
                        </tr>
                        <!-- Week 15 -->
                        <tr class="white-bg">
                            <td class="weeknum" rowspan="2">15</td>
                            <td>M 12/9</td>
                            <td>30</td>
                            <td class="td-left"><strong>Showcase</strong></td>
                            <td></td>
                            <td></td>
                            <td class="proj3"></td>
                            <td>Location: TBD</td>
                        </tr>
                    </tbody>
                </table>
                <br />
                <h1 class="section-title" id="past-projects">PAST PROJECTS</h1>
                <ul>
                    <li style="font-size: 1.5rem"><a class="mdl-list__item-primary-content" href="https://itch.io/c/309983/gddcal-spring-2018-showcase">Spring
                            2018</a></li>
                    <li style="font-size: 1.5rem"><a class="mdl-list__item-primary-content" href="https://itch.io/c/430270/gdd-fall-2018-final-showcase">Fall
                            2018</a></li>
                    <li style="font-size: 1.5rem"><a class="mdl-list__item-primary-content" href="https://itch.io/c/527416/gdd-spring-2019-final-showcase">Spring
                            2019</a></li>
                </ul>
                <h1 class="section-title" id="prerequisites">PREREQUISITES</h1>
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
                <h1 class="section-title" id="course-structure">COURSE STRUCTURE</h1>
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
                <h1 class="section-title" id="projects">THE PROJECTS</h1>
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
                    <strong>Team size:</strong> 3-5 people
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
                <h1 class="section-title" id="labs">LABS</h1>
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
                <h1 class="section-title" id="grading">GRADING</h1>
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
                <h1 class="section-title" id="general-policy">GENERAL POLICY</h1>
                <p>
                    Attendance matters! If you cannot be at class, you <strong>must</strong> let an instructor and your team lead know.
                    Only two unexcused absences will be allowed, and any further absences will result in your grade
                    dropping <strong>10% per absence</strong>. If you are in danger of not passing come the end of the semester, the
                    instructors will let people know what can be done to remedy that.
                </p>
                <br />
                <br />
                <br />
                <br />
            </div>
            <!-- fixes a bug for some reason -->
            <div class="mdl-button__container">
            </div>
            <?php include 'footer.php' ?>
        </main>
    </div>
</body>

</html>