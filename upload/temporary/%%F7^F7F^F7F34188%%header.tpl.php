<?php /* Smarty version 2.6.6, created on 2013-08-03 22:19:25
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'header.tpl', 77, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" onkeypress="keyfind(event)">
<head prefix="og: http://ogp.me/ns/fb#">
<title><?php if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['pagetitle']; ?>
 - <?php endif;  echo $this->_tpl_vars['site_name']; ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="<?php if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['pagetitle']; ?>
 - <?php endif;  if ($this->_tpl_vars['metadescription'] != ""):  echo $this->_tpl_vars['metadescription']; ?>
 - <?php endif;  echo $this->_tpl_vars['site_name']; ?>
">
<meta name="keywords" content="<?php if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['pagetitle']; ?>
,<?php endif;  if ($this->_tpl_vars['metakeywords'] != ""):  echo $this->_tpl_vars['metakeywords']; ?>
,<?php endif;  echo $this->_tpl_vars['site_name']; ?>
">
<meta name="title" content="<?php if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['pagetitle']; ?>
 - <?php endif;  echo $this->_tpl_vars['site_name']; ?>
" />
<meta property="og:title" content="<?php if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['pagetitle']; ?>
 - <?php endif;  echo $this->_tpl_vars['site_name']; ?>
"/>
<meta property="og:site_name" content="<?php if ($this->_tpl_vars['pagetitle'] != ""):  echo $this->_tpl_vars['pagetitle']; ?>
 - <?php endif;  echo $this->_tpl_vars['site_name']; ?>
"/>
<meta property="og:url" content="<?php echo $this->_tpl_vars['baseurl']; ?>
/"/>
<meta property="og:type" content="blog" />
<meta property="fb:app_id" content=""/>
<meta property="fb:admins" content="<?php echo $this->_tpl_vars['FACEBOOK_ADMIN']; ?>
"/>
<?php if ($this->_tpl_vars['viewpage'] == '1'): ?><link rel="image_src" href="<?php echo $this->_tpl_vars['purl']; ?>
/t/l-<?php echo $this->_tpl_vars['p']['pic']; ?>
" / ><?php endif; ?>
<link href="<?php echo $this->_tpl_vars['baseurl']; ?>
/css/style.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="icon" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/favicon.ico" />
<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/favicon.ico" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js"></script>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/js/jquery.scrollTo-1.4.2-min.js"></script>
</head>
<body id="page-landing" class="main-body ">
<div id="fb-root"></div>
<?php if ($this->_tpl_vars['enable_fc'] == '1'): ?>
<?php echo '
<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>
  FB.init({appId: \'';  echo $this->_tpl_vars['FACEBOOK_APP_ID'];  echo '\', status: true,
           cookie: true, xfbml: true});
  FB.Event.subscribe(\'auth.login\', function(response) {
    window.location.reload();
  });	  
</script>
'; ?>

<?php endif; ?>
<div id="tmp-img" style="display:none"></div>
<?php echo '
<script type="text/javascript"> 
function rmt(l) { var img = new Image(); img.src = l; document.getElementById(\'tmp-img\').appendChild(img); } 
function myWindow(location, address, gaCategory, gaAction) { _gaq.push([\'_trackEvent\', gaCategory, gaAction,  address, 1]); var w = 640; var h = 460; var sTop = window.screen.height/2-(h/2); var sLeft = window.screen.width/2-(w/2); var sharer = window.open(address, "myWindow", "status=1,height="+h+",width="+w+",top="+sTop+",left="+sLeft+",resizable=0"); }
</script>
'; ?>

<div id="head-wrapper">

    <div id="searchbar_container">
        <div id="searchbar_wrapper">
            <div id="header_searchbar"  style="display:none;">
                <div id="search_wrapper">
                    <form action="<?php echo $this->_tpl_vars['baseurl']; ?>
/search">
                        <input id="sitebar_search_header" type="text" class="search search_input" name="query" tabindex="1" placeholder="<?php echo $this->_tpl_vars['lang189']; ?>
"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="head-bar">
        <h1><a class="snowman" href="http://www.facebook.com/<?php echo $this->_tpl_vars['FACEBOOK_PROFILE']; ?>
" target="_blank" >Facebook</a><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/"><?php echo $this->_tpl_vars['site_name']; ?>
</a></h1>
        <ul class="main-menu" style="overflow:visible">            
            <li><a class="<?php if ($this->_tpl_vars['menu'] == 1): ?>current<?php endif; ?>" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/hot"><?php echo $this->_tpl_vars['lang201']; ?>
</a></li>
            <li><a class="<?php if ($this->_tpl_vars['menu'] == 2): ?>current<?php endif; ?>" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/fast" onclick="_gaq.push(['_trackEvent', 'Lab', 'Clicked', 'Go', 1]); "><?php echo $this->_tpl_vars['lang200']; ?>
</a></li>
            <li><a class="add-post <?php if ($this->_tpl_vars['menu'] == 3): ?>current<?php endif; ?>" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/submit" onclick="_gaq.push(['_trackEvent', 'New-Post', 'Clicked', 'Headbar', 1]);"><?php echo $this->_tpl_vars['lang199']; ?>
</a></li>            
        </ul>
        <ul class="main-2-menu">
            <?php if ($_SESSION['USERID'] != ""): ?>
            <li>
                <?php echo '
                <script type="text/javascript">
                function loadContent(elementSelector, sourceURL) {
                $(""+elementSelector+"").load(""+sourceURL+"");
                }
                </script>
                '; ?>

                <div id="loadme"></div>
                <div id="profile-menu" class="profile-menu">
                <a id="profile-username" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/<?php echo ((is_array($_tmp=$_SESSION['USERNAME'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" class="profile-button"><?php echo ((is_array($_tmp=$_SESSION['USERNAME'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a>
                <ul>
                    <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/settings"><?php echo $this->_tpl_vars['lang45']; ?>
</a></li>
                    <li><a href="javascript:loadContent('#loadme', '<?php echo $this->_tpl_vars['baseurl']; ?>
/log_out');"><?php echo $this->_tpl_vars['lang198']; ?>
</a></li>
                </ul>
                </div>
            </li>
            <?php else: ?>         
            <li id="side-bar-signup">
            <a class="signup-button green" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/signup" label="Header"><?php echo $this->_tpl_vars['lang148']; ?>
</a>
            </li>            
            <li><a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/login" class="button"><?php echo $this->_tpl_vars['lang197']; ?>
</a></li>            
            <?php endif; ?>
            <li><a class="random-button" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/random" id="rand-but"><strong><?php echo $this->_tpl_vars['lang196']; ?>
</strong></a></li>
            <li><a class="search-button search-toggler" href="javascript:void(0);"><strong><?php echo $this->_tpl_vars['lang189']; ?>
</strong></a></li>
        </ul>
    </div>
</div>
<?php echo '
<script type="text/javascript">
$(\'.search-button\').click(function(){
    $(\'#header_searchbar\').toggle(\'slow\');
    });
</script>
'; ?>
              
<div id="container" style="">
<?php if ($this->_tpl_vars['viewpage'] == '1'): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js1.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'js.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>