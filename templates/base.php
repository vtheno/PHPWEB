<?php
session_start(); 
setcookie(session_name(), session_id(), time() + 300 , "/"); 
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/static/style.css" />
<title><?php echo "{$base->getTitle()}"; ?>
</title>
</head>
<body class="body">
  <?php 
    echo "{$body}";
    ?>
</body>
</html>
