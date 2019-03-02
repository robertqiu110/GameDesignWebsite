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
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.purple-blue.min.css">
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
          $title="Bear Jams";
          include 'header.php';
        ?>
        <main class="mdl-layout__content">
            <a href="https://tinyurl.com/bearjams2018"><img src="images/bearjams.png" style=" width: 100%; height: auto"></img></a>
            <div class="page-content">
                <h1 class="section-title" id="schedule">BEAR JAMS FALL 2018</h1>
                <p>Bear Jams Fall 2018 has concluded. Thanks to all who participated.<br>
                    You can find all of the entries <a href="https://itch.io/jam/bear-jams/entries">here</a>.</p>

                <!-- <h1 class="section-title" id="schedule">SCHEDULE</h1>

      <table class="mdl-shadow--3dp" id="gamejam" style="font-family: 'Roboto-Regular'; text-decoration: none; text-align: left; font-size: 1.1rem; padding-left: 24px">
        <tbody>
          <tr>
            <th>&nbsp;Day&nbsp;</th>
            <th>&nbsp;Time</th>
            <th>&nbsp;Event</th>
          </tr>
           <tr>
            <td class="weeknum" rowspan="7">Friday, Sept 21</td>
          </tr>
          <tr>
            <td>7:00 PM</td>
            <td>Welcome / Mixer</td>
          </tr>

          <tr class="gray-bg">
            <td>7:30 PM</td>
            <td>Intro / Schedule of Events</td>
          </tr>

           <tr>
            <td>8:00 PM</td>
            <td>THEME ANNOUNCEMENT</td>
          </tr>

          <tr class="gray-bg">
            <td>8:30 PM</td>
            <td>Designing a Game Workshop</td>
          </tr>

           <tr>
            <td>9:00 PM</td>
            <td>Intro to Unity Workshop</td>
          </tr>

          <tr class="gray-bg">
            <td>10:00 PM</td>
            <td><div style="color: red">LIBRARY CLOSED (all participants must go home)</div></td>
          </tr>
          <tr>
            <td class="weeknum" rowspan="6">Saturday Sept 22</td>
          </tr>
           <tr>
            <td>9:00 AM</td>
            <td><div style="color: green">LIBRARY OPENS</div></td>
          </tr>

          <tr class="gray-bg">
            <td>11:00 AM</td>
            <td>Art Workshop</td>
          </tr>

           <tr>
            <td>12:00 PM</td>
            <td>Programming in Unity Workshop</td>
          </tr>

          <tr class="gray-bg">
            <td>8:00 PM</td>
            <td>Building / Publishing Workshop</td>
          </tr>

          <tr>
            <td>10:00 PM</td>
            <td><div style="color: red">LIBRARY CLOSED (all participants must go home)</div></td>
          </tr>

          <tr>
            <td class="weeknum" rowspan="4">Sunday Sept 23</td>
          </tr>
          <tr class="gray-bg">
            <td>10:00 AM</td>
            <td style="color: red">Submissions due</td>
            
          </tr>

           <tr>
            <td>4:00 PM</td>
            <td>Winner Announcements (in Moffitt 150D)</td>
          </tr>

          <tr class="gray-bg">
            <td>5:00 PM</td>
            <td>Showcase</td>
          </tr>
          
        </tbody>
      </table>
      <br> -->


                <h1 class="section-title" id="schedule">RULES AND GUIDELINES</h1>

                <p>
                    1. No NSFW, offensive or inappropriate projects. All projects should follow the <a href="https://tinyurl.com/y8ec2s83">Code
                        of Conduct</a>.<br>
                    2. The maximum group size is 5.<br>
                    3. Follow the honor code. We will not ask to see your project files but we expect you to not copy
                    or steal
                    assets. Assets from the Unity Asset Store are acceptable as long as they are credited on your
                    submission. Art
                    and sound assets from online also fall into this category: they may be used, but must be credited.<br>
                    4. You MUST follow the Code of Conduct. A quick tl;dr: Do NOT be destructive and do NOT be mean to
                    your
                    fellow participants.
                    Respect all other participants and your team members. <br>
                    If you have any problems or want to report anything, please reach out to a staff member at the
                    staff table or
                    to any of the admins or mods on Discord.
                    5. You must upload your game to itch.io and submit it through GDD at Berkeley's Bear Jams (<a href="https://itch.io/jam/bear-jams">https://itch.io/jam/bear-jams</a>)
                    for it to be considered.
                    6. The winners get featured on the front page of our website.<br>
                    7. We do not have a place for you to stay overnight. While we do encourage teams to continue
                    working
                    together, we unfortunately cannot provide a place for teams to work overnight. We have voice chat
                    channels on
                    Discord to communicate with your teams while you are not working together.<br>
                    8. Have fun creating games and meeting new people!


                </p>
                <br /><br /><br />



                <div class="mdl-cell mdl-cell--4-col" style="height: 25vh"></div>

            </div>

            <!-- fixes a bug for some reason -->
            <div class="mdl-button__container">
            </div>
            <?php include 'footer.php'; ?>
        </main>



    </div>

</body>

</html>