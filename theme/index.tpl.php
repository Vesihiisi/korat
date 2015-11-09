<!doctype html>
<html lang='<?=$lang?>' class='no-js'>
<head>
<meta charset='utf-8'/>
<title><?=get_title($title)?></title>
<?php if(isset($favicon)): ?><link rel='shortcut icon' href='<?=$favicon?>'/><?php endif; ?>
<?php foreach($stylesheets as $file): ?>
<link rel='stylesheet' type='text/css' href='<?=$file?>'/>
<?php endforeach; ?>
<script src='<?=$modernizr?>'></script>
</head>
<body>
<div id='wrapper' class='wrapper'>
<header>
<?php
echo $header;
echo CNav::GenerateMenu($nav);
?>
</header>
<main>
<?php
echo $main;
?></main>
<footer>
<?php
echo $footer;
?>
</footer>
</div>
<?php if(isset($jquery)):?><script src='<?=$jquery?>'></script><?php endif; ?>
<?php if(isset($javascript_include)): foreach($javascript_include as $val): ?>
<script src='<?=$val?>'></script>
<?php endforeach; endif; ?>
</body>
</html>
