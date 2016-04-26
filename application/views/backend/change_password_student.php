<!DOCTYPE html>
<html lang="en">
<head>
<?php
	$system_name	=	$this->db->get_where('settings' , array('type'=>'system_name'))->row()->description;
	$system_title	=	$this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;
	?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Neon Admin Panel" />
<meta name="author" content="" />
<title><?php echo get_phrase('login');?>|<?php echo $system_title;?></title>
<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/neon-core.css">
<link rel="stylesheet" href="assets/css/neon-theme.css">
<link rel="stylesheet" href="assets/css/neon-forms.css">
<link rel="stylesheet" href="assets/css/custom.css">
<script src="assets/js/jquery-1.11.0.min.js"></script>

<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
<link rel="shortcut icon" href="assets/images/favicon.png">
</head>
<body class="page-body login-page login-form-fall" data-url="http://neon.dev">

<!-- This is needed when you send requests via Ajax --> 
<script type="text/javascript">
var baseurl = '<?php echo base_url();?>';
</script>
<div class="login-container">
  <div class="login-progressbar-indicator">
    <h3>43%</h3>
    <span>logging in...</span> </div>
  <div class="login-progressbar">
    <div></div>
  </div>
  
  <div class="login-form">
    
    <!-- progress bar indicator -->
    
    <div class="login-content">
      <div class="login-form-inner">
        <h2 class="form-title" >Page Inc School</h2>
        <div class="sep text-center"><img src="assets/images/login-sep.png" class="img-responsive" width="295" height="8"/></div>
        <div class="form-login-error">
          <h3>Invalid login</h3>
          <p>Please enter correct email and password!</p>
        </div>
        <form method="post" role="form" id="" action="<?php base_url()?>index.php?student/change_password/do_update">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon"> <i class="entypo-user"></i> </div>
              <input type="password" class="form-control" name="old_password" id="old_password" placeholder="Old Password"/></div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon"> <i class="entypo-key"></i> </div>
              <input type="password" class="form-control" name="new_password" id="new_password" placeholder="New Password" autocomplete="off" />
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon"> <i class="entypo-key"></i> </div>
              <input type="password" class="form-control" name="confirm_new_password" id="confirm_new_password" placeholder="Confirm New Password" autocomplete="off" />
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-login">Submit</button>
          </div>
        </form>
       </div>
    </div>
  </div>
</div>

<!-- Bottom Scripts --> 
<script src="assets/js/gsap/main-gsap.js"></script> 
<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script> 
<script src="assets/js/bootstrap.js"></script> 
<script src="assets/js/joinable.js"></script> 
<script src="assets/js/resizeable.js"></script> 
<script src="assets/js/neon-api.js"></script> 
<script src="assets/js/jquery.validate.min.js"></script> 
<script src="assets/js/neon-login_student.js"></script> 
<script src="assets/js/neon-custom.js"></script> 
<script src="assets/js/neon-demo.js"></script>
</body>
</html>