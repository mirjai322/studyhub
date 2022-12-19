<?php

//any time you use session, you must use session start
session_start();
session_destroy();

header("Location: index.php");
exit; //good practice to add exit after sending a location header. not needed here tho because last line