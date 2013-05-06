<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>响应式布局</title>
<?php
//<meta name="viewport" content="width=device-width, initial-scale=1" />
?>
<link rel="stylesheet" href="assets/css/reset.css">
<?php
/*
<link rel="stylesheet" media="screen and (max-width: 720px)" href="../assets/css/global_720x1280.css" />
<link rel="stylesheet" media="screen and (max-width: 640px)" href="../assets/css/global_640x1136.css" />
<link rel="stylesheet" media="screen and (max-width: 640px)" href="../assets/css/global_640x960.css" />

<link rel="stylesheet" media="screen and (max-width: 480px)" href="../assets/css/global_480x800.css" />
*/
?>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
<link rel="stylesheet" href="assets/css/global_720x1280.css" />
<link rel="stylesheet" href="assets/css/animate_720x1280.css">
<script src="assets/libs/jquery.2.0.0.js"></script>
<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
<script src="assets/libs/underscore.1.4.4.js"></script>
<script src="assets/libs/backbone.1.0.0.js"></script>
</head>
<body>

<ul data-role="listview" data-inset="true">
  <li><a href="#">
    <img src="../../_assets/img/album-bb.jpg">
    <h2>Broken Bells</h2>
    <p>Broken Bells</p></a>
  </li>
  <li><a href="#">
    <img src="../../_assets/img/album-hc.jpg">
    <h2>Warning</h2>
    <p>Hot Chip</p></a>
  </li>
  <li><a href="#">
    <img src="../../_assets/img/album-p.jpg">
    <h2>Wolfgang Amadeus Phoenix</h2>
    <p>Phoenix</p></a>
  </li>
</ul>

<div class="ui-body-a ui-body">
  <div data-role="navbar">
      <ul>
        <li><a href="#" data-icon="grid">标题2</a></li>
        <li><a href="#" data-icon="star">标题4</a></li>
        <li><a href="#" data-icon="gear">C</a></li>
        <li><a href="#" data-icon="arrow-l">D</a></li>
        <li><a href="#" data-icon="arrow-r">E</a></li>
      </ul>
  </div>
</div>
<script src="assets/libs/seajs/sea.js"></script>
</body>
</html>