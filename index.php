<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Boku</title>
  <style>
      html,body{height:100%}body{max-width:700px;margin:0 auto;padding:12px;font:14px/19px sans-serif;color:#2a3fa8}
      body,a{box-sizing:border-box}
      a{color:#2a3fa8;text-decoration:none}
      a::after{content:"";display:block}
  </style>
</head>
<body>
    <a href="w.php">+ Write</a><br>
    <?php
    if (!file_exists("n")){mkdir("n");}
    else{foreach(glob("n/*") as $f) {
            echo "<a href='w.php?r=".$f."'>".basename($f)."</a>";
        }
    }
    ?>
</body>
</html>