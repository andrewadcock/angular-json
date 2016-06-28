<!DOCTYPE html>
<html ng-app="app">
<head>
    <base href="/">
    <title>Angular and JSON Theme</title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <h1><a href="<?php echo get_home_url(); ?>">Angular and JSON Theme</a></h1>
</header>

<div ng-view></div>

<footer>

</footer>

</body>
</html>