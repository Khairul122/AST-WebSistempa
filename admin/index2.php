
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Login Page - SisPa (Sistem Penggajian)</title>
	<link rel="shortcut icon" href="favicon.ico" />
	<meta name="description" content="User login page" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/font-awesome/4.1.0/css/font-awesome.min.css" />

	<!-- text fonts -->
	<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />

	<!-- ace styles -->
	<link rel="stylesheet" href="assets/css/ace.min.css" />

	<!--[if lte IE 9]>
	<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
	<![endif]-->
	<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
	<link rel="stylesheet" href="assets/css/kondisi.css" />

	<!--[if lte IE 9]>
	<link rel="stylesheet" href="assets/css/ace-ie.min.css" />
	<![endif]-->

<script type="text/javascript">
function validasi(form){
if (form.username.value ==""){
alert("Anda belum mengisikan Username");
form.username.focus();
return (false);
}
     
if (form.password.value == ""){
alert("Anda belum mengisikan Password");
form.password.focus();
return (false);
}

return (true);
}
</script>
</head>

<body class="login-layout blur-login" OnLoad="document.login.username.focus();">
<div class="login-container">
<div class="center">
	<h1>
		<i class="ace-icon fa fa-eye green"></i>
		<span class="red">SisPa</span><span class="white">Admin</span>
	</h1>
	<span class="white"><h5>Sistem Penggajian Pegawai & Dosen USU</h5></span>
<form action="signinAction.php" method="POST">
  <input checked id='signin' name='action' type='radio' value='signin'>
  <label for='signin'>Sign in</label>
  <input id='signup' name='action' type='radio' value='signup'>
  <label for='signup'>Sign up</label> 
  <input id='reset' name='action' type='radio' value='reset'>
  <label for='reset'>Reset</label>
  <div id='wrapper'>
    <div id='arrow'></div>
    <input id='email' placeholder='Email' type='text' name="email">
    <input id='pass' placeholder='Password' type='password' name="password">
    <input id='repass' placeholder='Repeat password' type='password' name="repassword">
  </div>
  <button type='submit'>
    <span>
      Reset password
      <br>
      Sign in
      <br>
      Sign up
    </span>
  </button>
</form>
<div id='hint'>Click on the tabs</div>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
<script >/* JS what? */
//# sourceURL=pen.js
</script>
</body>
</html>
