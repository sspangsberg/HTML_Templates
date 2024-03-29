<!doctype html>
<html>
  <head>
    <?=Loader::element("header_required"); ?>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='<?=$view->getThemePath();?>/style.css'/>
  </head>
  <body>
    <div class="<?=$c->getPageWrapperClass()?>"> <!-- Makes the web site scroll when we edit (avoid cutting) -->
    <div class="main">
      <div class="container">
        <?php
            $a = new Area('Title');
            $a->display($c);
        ?>

        <?php
            $a = new Area('Description');
            $a->display($c);
        ?>

        <!--
        <h1>MOVE</h1>
        <p>Form healthy habits to take your fitness to the next level
        </p>
        <a class="btn" href="">START NOW</a>
        -->

      </div>
    </div>

    <div class="supporting">
      <div class="container">
        <div class="col">
          <h2>Move</h2>

          <?php
              $a = new Area('Column 1');
              $a->display($c);
          ?>
          <!--<p>Become more active by tracking your runs, rides, and walks.</p>-->

        </div>
        <div class="col">
          <h2>Sync</h2>

          <?php
              $a = new Area('Column 2');
              $a->display($c);
          ?>
          <!--<p>Access your activity on your phone, tablet, or computer.</p>-->

        </div>
        <div class="col">
          <h2>Compete</h2>

          <?php
              $a = new Area('Column 3');
              $a->display($c);
          ?>
          <!--<p>Set personal challenges and see how you rank against your friends.</p>-->

        </div>


        <div class="clearfix"></div>
      </div>
    </div>


    <div class="feature">
      <div class="container">
        <p><h2>Move. Rest. Recover. Move</h2></p>
      </div>
    </div>
  </div>

    <?=Loader::element("footer_required"); ?>
  </body>
</html>
