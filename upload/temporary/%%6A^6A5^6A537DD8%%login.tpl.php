<?php /* Smarty version 2.6.6, created on 2013-08-20 23:27:32
         compiled from login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'login.tpl', 4, false),)), $this); ?>
<!DOCTYPE html>
<html lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<title><?php echo ((is_array($_tmp=$this->_tpl_vars['pagetitle'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</title>
<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/favicon.ico" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta content="width=device-width; initial-scale=1.0;" name="viewport" />
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/css/connect.css" media="screen,projection" type="text/css" />
</head>

<body id="page-signup">
    <div class="signup-wrapper">
        <a class="signup-login-btn" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/signup"><?php echo $this->_tpl_vars['lang23']; ?>
<b><?php echo $this->_tpl_vars['lang24']; ?>
</b></a>
        <div class="header">
        	<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
"><h1></h1></a>
        </div>
        <div class="content">
            <div class="description">
                <h2><?php echo $this->_tpl_vars['lang91']; ?>
</h2>
                <div class="spcl-button-wrap">
                	<a class="spcl-button facebook badge-facebook-connect" label="LoginFormFacebookButton" next="" <a class="spcl-button facebook badge-facebook-connect" label="LoginFormFacebookButton" next="" href="https://www.facebook.com/dialog/permissions.request?app_id=<?php echo $this->_tpl_vars['FACEBOOK_APP_ID']; ?>
&display=page&next=<?php echo $this->_tpl_vars['baseurl']; ?>
/&response_type=code&fbconnect=1&perms=email,user_birthday,user_about_me"><?php echo $this->_tpl_vars['lang25']; ?>
</a>
                </div>
                <p class="message"> </p>
            </div>
            <form id="form-signup-login" class="generic" action="<?php echo $this->_tpl_vars['baseurl']; ?>
/login" method="post">
            	<?php if ($this->_tpl_vars['error'] != ""): ?>
                <p id="setup-msg" class="message red"><?php echo $this->_tpl_vars['error']; ?>
</p>
                <?php endif; ?>
                <div id="login-username-block" class="field">
                	<label><?php echo $this->_tpl_vars['lang36']; ?>
</label>
                	<input id="login-username" type="text" class="text" name="username" placeholder="<?php echo $this->_tpl_vars['lang36']; ?>
" tabindex="1" maxlength="200" value=""/>
                </div>
                <div id="login-password-block" class="field">
                    <label><?php echo $this->_tpl_vars['lang2']; ?>

                    <span>(<a id="login-to-recover" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/forgot"><?php echo $this->_tpl_vars['lang28']; ?>
<span class="badge-js" style="color:#a900f0;" key="?"></span></a>)</span>
                    </label>
                    <input id="login-password" type="password" class="text" name="password" placeholder="<?php echo $this->_tpl_vars['lang2']; ?>
" tabindex="3" maxlength="32"/>
                </div>
                <div class="action">
                	<input id="logsub" type="hidden" name="logsub" value="1"></input>
                	<input id="login-submit" type="submit" class="submit-button" value="<?php echo $this->_tpl_vars['lang29']; ?>
"></input>
                </div>
            </form>
        </div>
    </div>
    <div id="fb-root"></div>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/connect.js"></script>
</body>
</html>