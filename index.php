<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Est-ce que c'est bientôt le week-end ?</title>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
       <style type="text/css">
           body {
              text-align:center;
              padding-top:40px
           }
           img {
             border:0px;
           }
           p.msg {
             font-family:Verdana;
             font-size:40px;
             padding-bottom:40px
           }
           p#footer {
             text-align:right;
           }
       </style>
   </head>

   <?php
     require_once('core.php');

   ?>
   <body>
			<p class="msg">
				<?php echo Weekend::getText() ?>
			</p>

      <?php if (false !== Weekend::checkNotWorkingDay()): ?>
      <p class="msg">
        <?php echo Weekend::getSubText() ?>
      </p>
      <?php endif; ?>


      <?php
        $msg = "Mais demain, on ne travaille pas \o/";

        if (false !== Weekend::checkTomorrowNotWorkingDay()):?>
        <p class="msg">
          <?php echo $msg; ?>
        </p>
      <?php endif; ?>
      <p id='footer'><a href='http://twitter.com/BientotLeWE'><img src='twitter.png' alt='Twitter' title='Twitter' /></a></p>

      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-45060868-1', 'estcequecestbientotleweekend.fr');
        ga('send', 'pageview');

      </script>
   </body>
</html>
