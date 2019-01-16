<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php echo "{$blogpost['title']} - Läxhjälpens blogg"; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' />
    <link href="css/laxhjalpen.css" rel="stylesheet" />
</head>
<body class="subpage">
<?php
require "masthead.php";
Require "menu.php";

echo <<<MAIN
<div role="main">
    <article class="singleblogpost">
    <h2>{$blogpost['title']}</h2>
    <p><small>Posted {$blogpost['pubdate']} av {$blogpost['username']}</small></p>
    <div class="blogtext">
    {$blogpost['text']}
    </div>
    </article>
    </div>
MAIN;

require "footer.php";
?>
</body>