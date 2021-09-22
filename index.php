<?php if(isset($_POST["n"])){$n=$_POST["n"];$c=$_POST["c"];if(file_put_contents("n/".$n,$c)){header("Location: /");}}?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Boku</title>
  <style>
    html,body{height:100%}
    body,a,textarea,form,input{box-sizing:border-box;margin:0;padding:0}
    body{max-width:700px;margin:0 auto;padding:12px;font:14px/19px sans-serif;color:#2a3fa8}
    a{color:#2a3fa8;text-decoration:none;height:19px}
    a::after{content:"";display:block}
    form{height:100%}
    form>*{outline:0}
    #n{width:170px;height:19px;border:1px solid #ccc;font:12px/15px Verdana,sans-serif;padding:4px}
    #s{background:none;color:#2e3fa8;border:0;font:inherit;height:19px;cursor:pointer}
    textarea{width:100%;height:calc(100% - 29px);resize:none;padding:9px;font:inherit;margin-top:10px;border:1px solid #ccc}
    textarea:focus,#name:focus{border:1px solid #2e3fa8}
    form>*:not(textarea){margin-right:18px}
  </style>
</head>
<body>
    <?php if(isset($_GET["r"])){$r=$_GET["r"];$f=file_get_contents($r);?>
    <form action="" method="post">
    <input type="text" id="n" name="n" value="<?=basename($r);?>">
    <input type="submit" value="Save" id="s">
    <a href="/">Exit</a>
    <textarea name="c"><?=$f;?></textarea>
    </form>
    <?php }else{?>
    <a href="?r">+ Write</a><br>
    <?php if(!file_exists("n")){mkdir("n");}else{foreach(glob("n/*") as $f){echo"<a href='?r=".$f."'>".basename($f)."</a>";}}}?>
</body>
</html>