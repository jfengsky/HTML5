<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>index</title>
<link rel="stylesheet" href="assets/css/reset.css">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
<link rel="stylesheet" href="assets/css/header/header.css" />
<script src="assets/libs/jquery.2.0.0.js"></script>
<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
<script src="assets/libs/underscore.1.4.4.js"></script>
<script src="assets/libs/backbone.1.0.0.js"></script>
</head>
<body>
<?php 
  require('php/header.php');
?>
<section data-role="collapsible" data-collapsed="false">
  <h4>Heading</h4>
  <ul data-role="listview">
      <li><a href="#">List item 1</a></li>
      <li><a href="#">List item 2</a></li>
      <li><a href="#">List item 3</a></li>
  </ul>
</section>
<section data-role="controlgroup">
  <a href="#" data-role="button">Timeline</a>
  <a href="#" data-role="button">Mentions</a>
  <a href="#" data-role="button">Retweets</a>
</section>
<footer class="ui-body-a ui-body" data-position="fixed">
  <nav data-role="navbar">
      <ul>
        <li><a href="#" data-icon="grid">标题2</a></li>
        <li><a href="#" data-icon="star">标题4</a></li>
        <li><a href="#" data-icon="gear">C</a></li>
        <li><a href="#" data-icon="arrow-l">D</a></li>
        <li><a href="#" data-icon="arrow-r">E</a></li>
      </ul>
  </nav>
</footer>
<script src="assets/libs/seajs/sea.js"></script>
</body>
</html>