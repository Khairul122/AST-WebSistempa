
<!DOCTYPE html><html class=''>
<head>
  <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script>
  <script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script>
  <script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script>
  <meta charset='UTF-8'>
  <meta name="robots" content="noindex">
  <link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /
  ><link rel="canonical" href="https://codepen.io/fbrz/pen/pvZRNK?limit=all&page=89&q=form" />
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="css/kondisi.css">


<style class="cp-pen-styles">@import url(https://fonts.googleapis.com/css?family=Raleway:700,800);

html, body { margin: 0; }

:focus { outline: none; }
::-webkit-input-placeholder { color: #DEDFDF; }
::-moz-placeholder { color: #DEDFDF; }
:-moz-placeholder { color: #DEDFDF; }
::-ms-input-placeholder { color: #DEDFDF; }

body {
  background: #6ED0F6;
  color: #fff;
  font-family: 'Raleway', sans-serif;
  -webkit-font-smoothing: antialiased;
}

#wrapper, label, #arrow, button span { -webkit-transition: all .5s cubic-bezier(.6,0,.4,1); transition: all .5s cubic-bezier(.6,0,.4,1); }

#wrapper { overflow: hidden; }

#signin:checked ~ #wrapper { height: 178px; }
#signin:checked ~ #wrapper #arrow { left: 32px; }
#signin:checked ~ button span { -webkit-transform: translate3d(0,-72px,0); transform: translate3d(0,-72px,0); }

#signup:checked ~ #wrapper { height: 262px; }
#signup:checked ~ #wrapper #arrow { left: 137px; }
#signup:checked ~ button span { -webkit-transform: translate3d(0,-144px,0); transform: translate3d(0,-144px,0); }

#reset:checked ~ #wrapper { height: 94px; }
#reset:checked ~ #wrapper #arrow { left: 404px; }
#reset:checked ~ button span { -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0); }

form {
  width: 450px;
  height: 370px;
  margin: -185px -225px;
  position: absolute;
  left: 50%;
  top: 50%;
}

input[type=radio] { display: none; }

label {
  cursor: pointer;
  display: inline-block;
  font-size: 22px;
  font-weight: 800;
  opacity: .5;
  margin-bottom: 30px;
  text-transform: uppercase;
}
label:hover {
  -webkit-transition: all .3s cubic-bezier(.6,0,.4,1);
  transition: all .3s cubic-bezier(.6,0,.4,1);
  opacity: 1;
}
label[for="signin"] { margin-right: 20px; }
label[for="reset"] { float: right; }
input[type=radio]:checked + label { opacity: 1; }

input[type=text],
input[type=password] {
  background: #fff;
  border: none;
  border-radius: 8px;
  font-size: 27px;
  font-family: 'Raleway', sans-serif;
  height: 72px;
  width: 99.5%;
  margin-bottom: 10px;
  opacity: 1;
  text-indent: 20px;
  -webkit-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
}
button {
  background: #079BCF;
  border: none;
  border-radius: 8px;
  color: #fff;
  cursor: pointer;
  font-family: 'Raleway', sans-serif;
  font-size: 27px;
  height: 72px;
  width: 100%;
  margin-bottom: 10px;
  overflow: hidden;
  -webkit-transition: all .3s cubic-bezier(.6,0,.4,1);
  transition: all .3s cubic-bezier(.6,0,.4,1);
}
button span {
  display: block;
  line-height: 72px;
  position: relative;
  top: -2px;
  -webkit-transform: translate3d(0,0,0);
          transform: translate3d(0,0,0);
}
button:hover {
  background: #007BA5;
}

#arrow {
  height: 0;
  width: 0;
  border-bottom: 10px solid #fff;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  position: relative;
  left: 32px;
}


#hint {
  width: 100%;
  text-align: center;
  position: absolute;
  bottom: 20px;
}</style></head>
<body>
  <div class="login-page">
    <p class="pp">Silahkan Login Terlebih Dahulu</p>
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
</body></html>