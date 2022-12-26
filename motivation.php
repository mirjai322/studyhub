<?php require __DIR__ . "/session.php"; ?><!--session must be started; user must be logged in-->

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Motivation</title>
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

  <div class="nav3">
    <!-- mini nav bar / links back to other pages -->
    <div id="three">
      <h1 style="font-size:50px;">motivation.</h1>
      <br>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="generalstudy.php">General Study Resources</a></li>
        <li><a href="resources.php">AP Specific Resources</a></li>
      </ul>

    </div>
  </div>
  <div class="section3">
    <br><br><br>

    <!-- links to music for studying -->
    <div class="white">
      <center>
        <br><br>
        <h1>STUDY MUSIC<h1><br>
            <p style="font-size:18px">
              <a style="color:#b87a7a" href="https://www.youtube.com/watch?v=jfKfPfyJRdk" target="_blank">Lofi
                Beats</a>.
            </p><br>
            <p style="font-size:18px">
              <a style="color:#b87a7a" href="https://www.youtube.com/watch?v=axkOqrLtDXo" target="_blank">City Girl -
                Neon
                Impasse (lofi).</a>
            </p><br>
            <p style="font-size:18px">
              <a style="color:#b87a7a" href="https://www.youtube.com/watch?v=xN-MPshaMng" target="_blank">"how to never
                have
                another worry" - Syros (lofi).</a>
            </p><br>
            <p style="font-size:18px">
              <a style="color:#b87a7a" href="https://www.youtube.com/watch?v=r0z8pE9Ix9M" target="_blank">3 hour winter
                lofi.</a>
            </p><br>
            <br>
      </center>
    </div>

    <br><br><br>

    <!-- embeded studying with me youtube videos -->
    <div class="white">
      <br><br>
      <center>
        <h1>STUDY WITH ME</h1><br><br>

        <iframe width="600" height="345" src="https://www.youtube.com/embed/1DXojsPU15U">
        </iframe>
        <br><br>
        <iframe width="600" height="345" src="https://www.youtube.com/embed/IdjDjxNn9ws">
        </iframe>
        <br><br>
        <iframe width="600" height="345" src="https://www.youtube.com/embed/0lA6QOTt2PQ">
        </iframe>
      </center>
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