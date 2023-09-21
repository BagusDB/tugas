<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <head>
	<meta charset="UTF-8">
	<title><?= $data['title']?></title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head><link rel="stylesheet" href="<?= base_url; ?>/dist/css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<section class="forms-section">
<h1 class="section-title"></h1>
  <div class="forms">
    <div class="form-wrapper is-active">
      <button type="button" class="switcher switcher-login">
        Login
        <span class="underline"></span>
      </button>
      <form class="form form-login" method="POST" action="<?= base_url; ?>/auth/prosesLogin">
        <fieldset>
          <div class="input-block">
            <label>Username</label>
            <input type="text" name="username" required autocomplete="off">
          </div>
          <div class="input-block">
            <label>Password</label>
            <input type="password" name="password" required autocomplete="off">
          </div>
          <div class="input-block">
            <label>Level</label>
            <select name="level" id="">
              <option value="1">Admin</option>
              <option value="2">Kasir</option>
            </select>
          </div>
          <div class="g-recaptcha" data-sitekey="6LeYzz8oAAAAAGC-D-WaRnCg0yJepnoo6Anz7CoQ"></div>
        </fieldset>
        <button type="submit" class="btn-login">Login</button>
      </form>
    </div>
    <div class="form-wrapper">
      <button type="button" class="switcher switcher-signup">
        Sign Up
        <span class="underline"></span>
      </button>
      <form class="form form-signup" method="POST" action="<?= base_url; ?>/auth/prosesRegister">
        <fieldset>
          <div class="input-block">
            <label for="signup-email">Username</label>
            <input id="signup-email" type="text" name="username" required autocomplete="off">
          </div>
          <div class="input-block">
            <label for="signup-password">Password</label>
            <input id="signup-password" type="password" name="password" required autocomplete="off">
          </div>
          <div class="input-block">
            <label for="signup-password-confirm">Confirm password</label>
            <input id="signup-password-confirm" type="password" name="conpass" required autocomplete="off">
          </div>
        </fieldset>
        <button type="submit" class="btn-signup">Register</button>
      </form>
    </div>
  </div>
</section>
<!-- partial -->
  <script  src="<?= base_url; ?>/dist/js/script.js"></script>

</body>
</html>
