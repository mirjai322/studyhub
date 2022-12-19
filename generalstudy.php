<?php require __DIR__ . "/session.php"; ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>General Study Resources</title>
  <link href="style.css" rel="stylesheet" type="text/css" />

  <style>
    /*internal CSS -- applies to footer */
    li:hover {
      cursor: pointer;
      transition: 0.2s ease;
    }

    footer {
      left: 0;
      bottom: 0;
      width: 100%;
      height: 100px;
      background-color: #948f8f;
      color: white;
      text-align: center;
    }

    #footer {
      position: relative;
      top: 40px;
    }
  </style>
  <script src="script.js"></script>

</head>

<body>

  <div class="nav1">
    <div id="one">
      <!-- mini nav bar / links back to other pages -->
      <h1 style="font-size:50px;">general study resources.</h1>
      <br>
      <ul>
        <div>
          <li><a href="home.php">Home</a></li>
        </div>
        <div>
          <li><a href="resources.php">AP Specific Resources</a></li>
        </div>
        <div>
          <li><a href="motivation.php">Motivation Resources</a></li>
        </div>
      </ul>
    </div>
  </div>

  <div class="section1">
    <br><br><br>

    <!-- links to general informational websites -->
    <div class="white">
      <br><br>
      <h1>Some of the best informational and knowledge retaining websites to aid in studying ...</h1><br><br>
      <p style="font-size:18px"><strong>Khan Academy</strong> has free lessons and practice in almost every course of
        study. Here is the
        <a style="color:#b87a7a" href="https://www.khanacademy.org/" target="_blank">official website</a>.
      </p><br>
      <p style="font-size:18px"><strong>Quizlet</strong> allows you to create global or private flashcard sets and
        continually test
        yourself until memorization. Here is the <a style="color:#b87a7a;" href="https://quizlet.com"
          target="_blank">official website</a>.</p><br>
      <p style="font-size:18px">As a bonus, <strong>Grammarly</strong> is generally helpful for any aspect of work,
        especially writing.
        Here is the <a style="color:#b87a7a;" href="https://www.grammarly.com/" target="_blank">link to get it</a>.</p>
      <br><br>
    </div>
    
    <br><br><br>

    <!--links to notetaking and organizational platforms -->
    <div class="white">
      <br><br>
      <h1>Some of the best organizational and notetaking apps ...</h1><br><br>
      <p style="font-size:18px"><strong>Notion</strong> is platform designed to create a productivity workspace for
        personal or team-based settings. It is beyond efficient in keeping track of tasks. Here is the
        <a style="color:#b87a7a" href="https://www.notion.so/" target="_blank">official website</a>.
      </p><br>
      <p style="font-size:18px"><strong>Evernote</strong> is a note-taking and task management application designed to
        make your work more accessible. Here is the <a style="color:#b87a7a;" href="https://evernote.com"
          target="_blank">official website</a>.</p>
      <br><br>
    </div>
    
    <br><br><br>

    <!-- links to timer websites -->
    <div class="white">
      <br><br>
      <h1>Some of the best time management techniques ...</h1><br><br>
      <p style="font-size:18px">The <strong>Pomodoro Technique</strong> breaks work into focus intervals. Here is the <a
          style="color:#b87a7a" href="https://pomofocus.io/" target="_blank">timer page</a>.</p>
      <br><br>
    </div>

    <br><br><br><br><br>

    <!-- footer -->
    <footer>
      <p id="footer">@ 2022. All Rights Reserved.</p>
      <!--used internal CSS-->
    </footer>
  </div>

</body>

</html>