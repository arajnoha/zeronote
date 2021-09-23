<!DOCTYPE html><html><head><meta charset="utf-8"><title>note</title><style>
html,body{height:100%}
body,a,textarea,form,input,summary{box-sizing:border-box;margin:0;padding:0}
body{max-width:700px;margin:0 auto;padding:12px;font:14px/19px sans-serif}
a,summary{color:#2a3fa8;text-decoration:none;height:19px}
body>a::after{content:"";display:block}
form{height:100%}
form>*{outline:0}
#n{width:170px;height:19px;border:1px solid #ccc;font:12px/15px Verdana,sans-serif;padding:4px}
#s{background:none;color:#2e3fa8;border:0;font:inherit;height:19px;cursor:pointer}
textarea{width:100%;height:calc(100% - 29px);resize:none;padding:9px;font:inherit;margin-top:10px;border:1px solid #ccc}
textarea:focus,#name:focus{border:1px solid #2e3fa8}
form>*:not(textarea){margin-right:18px}
summary{list-style:none;cursor:pointer}
</style></head><body>
<?php 
session_start();
if(isset($_POST["l"]) && $_POST["l"]=="xxx"){$_SESSION["l"]="1";}
if(isset($_SESSION["l"]) && $_SESSION["l"]=="1"){
if(isset($_POST["n"])){$n=$_POST["n"];$c=$_POST["c"];if(file_put_contents("n/".$n,$c)){header("Location: /");}}
if(isset($_GET["d"])){$d=$_GET["d"];if(unlink($d)){header("Location: /");}}
if(isset($_GET["o"])){$d=$_GET["o"];if(session_destroy()){header("Location: /");}}
if(isset($_POST["s"])){$s=$_POST["s"]."*";}else{$s="";}?>
<?php if(isset($_GET["r"])){$r=$_GET["r"];$f=file_get_contents($r);?>
<form action="" method="post">
<input type="text" id="n" name="n" value="<?=basename($r);?>">
<input type="submit" value="Save" id="s">
<a href="/">Exit</a>
<?php if($r!==""){?><a href="?d=<?=$r;?>">Delete</a><?php }?>
<textarea name="c"><?=$f;?></textarea>
</form>
<?php }else{?>
<a href="?r">🖋 Write</a><details><summary>🔎 Search</summary>
<form action="" method="post"><input type="text" name="s"></form></details>
<?php if($s!==""){?><a href="/">❌ Clear search</a><?php }?>
<a href="?o">🔐 Logout</a><br>
<?php if(!file_exists("n")){mkdir("n");}else{foreach(glob("n/*".$s) as $f){echo"<a href='?r=".$f."'>".basename($f)."</a>";}}}?>
<?php }else{?><form action="" method="post">Password<br><input type="text" name="l" autofocus></form><?php }?>
</body>
</html>
