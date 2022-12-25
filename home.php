<?php require __DIR__ . "/session.php"; ?><!--//session must be started in order for this page to load, meaning user must have logged in-->

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
  <body onload="setTitle()"><!--when page loads, execute function setTitle()-->
  <script> //internal javascript
    function setTitle(){
      document.getElementById("studyhubTitle").innerHTML = "studyhub"; //change innerHTML of element with id of studyhubTitle to "studyhub"
    }
  </script>
</head>
  
  <!--navigation bar with 3 tabs-->
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
        <div class="bg"></div><!--image-->
      </article>

      <aside>
        <div class="description">
          <h1 id="studyhubTitle" style="font-size:50px;"></h1><!--inner HTML changed in internal javascript-->
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