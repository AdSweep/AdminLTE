<?php
/* Pi-hole: A black hole for Internet advertisements
*  (c) 2017 Pi-hole, LLC (https://pi-hole.net)
*  Network-wide ad blocking via your own hardware.
*
*  This file is copyright under the latest version of the EUPL.
*  Please see LICENSE file for your rights under this license. */ ?>

<div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" style="float:none">
  <div class="panel panel-default">
    <div class="p-0">
      <div style="text-align: center;"><img class="p-0" src="img/adsweep-login.png" width="<?php if ($boxedlayout) { ?>100%<?php } else { ?>50%<?php } ?>"></div>
      <div id="cookieInfo" class="panel-title text-center" style="color:#F00; font-size: 150%" hidden>Verify that cookies are allowed for <samp><?php echo $_SERVER['HTTP_HOST']; ?></samp></div>
      <?php if ($wrongpassword) { ?>
        <div class="form-group has-error login-box-msg">
          <label class="control-label"><i class="fa fa-times-circle"></i> Wrong password!</label>
        </div>
      <?php } ?>
    </div>

    <div class="panel-body">
      <form action="" id="loginform" method="post">
        <div class="form-group has-feedback <?php if ($wrongpassword) { ?>has-error<?php } ?> ">
          <input type="password" id="loginpw" name="pw" class="form-control" placeholder="Wachtwoord" autofocus>
          <span class="fa fa-key form-control-feedback"></span>
        </div>
        
            <button type="submit" href="#" class="btn btn-light pull-right"><i class="glyphicon glyphicon-log-in"></i>&nbsp;&nbsp;&nbsp;Log in</button>

        <br>
      </form>
    </div>
  </div>
</div>
