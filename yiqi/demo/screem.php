<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>响应式布局</title>
<?php
//<meta name="viewport" content="width=device-width, initial-scale=1" />
?>
<link rel="stylesheet" href="../assets/css/reset.css">
<?php
/*
<link rel="stylesheet" media="screen and (max-width: 720px)" href="../assets/css/global_720x1280.css" />
<link rel="stylesheet" media="screen and (max-width: 640px)" href="../assets/css/global_640x1136.css" />
<link rel="stylesheet" media="screen and (max-width: 640px)" href="../assets/css/global_640x960.css" />

<link rel="stylesheet" media="screen and (max-width: 480px)" href="../assets/css/global_480x800.css" />
*/
?>
<link rel="stylesheet" href="../assets/css/global_720x1280.css" />
<link rel="stylesheet" href="../assets/css/animate_720x1280.css">
<script src="../assets/libs/jquery.2.0.0.js"></script>
<script src="../assets/libs/underscore.1.4.4.js"></script>
<script src="../assets/libs/backbone.1.0.0.js"></script>
</head>
<body>
<div class="main">
  <div class="enemy">
    <ul>
      <?php
      // enemy 1
      ?>
      <li class="enemy0" id="J_enemy0">
        <div class="rolebox partner_attack_move">
          <?php
            /*
            <dl class="skilllist">
              <dt></dt>
            </dl>
            */
          ?>
          <img src="http://localhost/imagesize/img.php?size=172x202">
          <div class="health">
            <span class="blood" style=""></span>
          </div>
        </div>
      </li>
      <?php
      // enemy 2
      ?>
      <li class="enemy1" id="J_enemy1">
        <div class="rolebox">
          <img src="http://localhost/imagesize/img.php?size=172x202">
          <div class="health">
            <span class="blood" style=""></span>
          </div>
        </div>
      </li>
      <?php
      // enemy 3
      ?>
      <li class="enemy2" id="J_enemy2">
        <div class="rolebox">
          <img src="http://localhost/imagesize/img.php?size=172x202">
          <div class="health">
            <span class="blood" style=""></span>
          </div>
        </div>
      </li>
      <?php
      // enemy 4
      ?>
      <li class="enemy3" id="J_enemy3">
        <div class="rolebox">
          <img src="http://localhost/imagesize/img.php?size=172x202">
          <div class="health">
            <span class="blood" style=""></span>
          </div>
        </div>
      </li>
      <?php
      // enemy 5
      ?>
      <li class="enemy4" id="J_enemy4">
        <div class="rolebox">
          <img src="http://localhost/imagesize/img.php?size=172x202">
          <div class="health">
            <span class="blood" style=""></span>
          </div>
        </div>
      </li>
    </ul>
  </div>
  <div class="partner">
    <ul>
      <?php
      // partner 1
      ?>
      <li class="partner0" id="J_partner0">
        <div class="rolebox enemy_attack_move">
          <?php
            /*
            <dl class="skilllist">
              <dt></dt>
            </dl>
            */
          ?>
          <img src="http://localhost/imagesize/img.php?size=172x202">
          <div class="health">
            <span class="blood" style=""></span>
          </div>
        </div>
      </li>
      <?php
      // partner 2
      ?>
      <li class="partner1" id="J_partner1">
        <div class="rolebox">
          <img src="http://localhost/imagesize/img.php?size=172x202">
          <div class="health">
            <span class="blood" style=""></span>
          </div>
        </div>
      </li>
      <?php
      // partner 3
      ?>
      <li class="partner2" id="J_partner2">
        <div class="rolebox">
          <img src="http://localhost/imagesize/img.php?size=172x202">
          <div class="health">
            <span class="blood" style=""></span>
          </div>
        </div>
      </li>
      <?php
      // partner 4
      ?>
      <li class="partner3" id="J_partner3">
        <div class="rolebox">
          <img src="http://localhost/imagesize/img.php?size=172x202">
          <div class="health">
            <span class="blood" style=""></span>
          </div>
        </div>
      </li>
      <?php
      // partner 5
      ?>
      <li class="partner4" id="J_partner4">
        <div class="rolebox">
          <img src="http://localhost/imagesize/img.php?size=172x202">
          <div class="health">
            <span class="blood" style=""></span>
          </div>
        </div>
      </li>
    </ul>
  </div>
  <div class="ice ice_attack00"></div>
</div>
<input type="button" value="click" id="J_click">
<script src="assets/libs/seajs/sea.js"></script>
</body>
</html>