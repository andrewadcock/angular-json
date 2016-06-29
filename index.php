<!DOCTYPE html>
<html ng-app="app">
<head>
    <base href="/">
    <title>Angular and JSON Theme</title>
    <?php wp_head(); ?>
    <script src="http://pc035860.github.io/angular-highlightjs/angular-highlightjs.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
</head>
<body>
<header>
    <h1><a href="<?php echo get_home_url(); ?>">Angular and JSON Theme</a></h1>
</header>

<pre><code>$var = test;</code></pre>
<div hljs ng-view class="container"></div>

<footer>

</footer>

</body>
</html>