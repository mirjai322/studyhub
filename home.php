<?php require __DIR__ . "/session.php"; ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>study website</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <script src="script.js"></script>
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
  <body onload="setTitle()">
  <script>
    function setTitle(){
      document.getElementById("studyhubTitle").innerHTML = "studyhub";
    }
  </script>
</head>

<body onload="message()">

  <div id="container">
    <div class="nav">
      <header>
        <ul id="mainnav">
          <li class="navSection"><a href="generalstudy.php">General Study
              Resources</a></li>
          <li class="navSection"><a href="/studyhub/resources.php">AP Specific Resources</a>
          </li>
          <li class="navSection"><a href="motivation.php">Motivation</a></li>
        </ul>
      </header>
    </div>

    <section>
      <article>
        <div class="bg"></div>
      </article>

      <aside>
        <div class="description">
          <h1 id="studyhubTitle" style="font-size:50px;"></h1>
          <!--inline CSS-->
          <br>
          <h5 style="font-size:16px;">A website full of resources <br> to make studying easier for <br>you.</h5>
          <!--inline CSS-->

        </div>

      </aside>
    </section>

    <footer>
      <p id="footer">@ 2022. All Rights Reserved.</p>
      <!--used internal CSS-->
    </footer>

  </div>
</body>

</html>