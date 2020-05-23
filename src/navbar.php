<?php
session_start();
echo '
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: linear-gradient(0deg, #ff8c00  0%,#ff6200  100%)!important;padding-bottom: 0px;padding-top: 0px">
  <div class="container">
    <a class="navbar-brand" href="./#">
    <img src="img/logo.png" style="border-radius: 50%;height: 50px">
    </a>
    <button id="lnwbar" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <img name="menu" src="img/menu.png" style="height: 30px">
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto js-signin-modal-trigger">
        <li class="nav-item">
          <a class="nav-link" name="nav-item" href="./#news" onClick="$("button").attr("aria-expanded","false");">ข่าวสาร</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" name="nav-item" href="./#services">บริการ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" name="nav-item" href="./#article">บทความ</a>
        </li>';
if (isset($_SESSION['UNAME'])) {
	echo '
        <li class="nav-item">
        <a class="nav-link" name="nav-item">ยินดีต้อนรับ คุณ ' . $_SESSION['UNAME'] . '</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" name="nav-item" href="logout.php">ออกจากระบบ</a>
          </li>
          </ul>
      </div>
      </div>
      </nav>';
} else {
	echo '
        <li class="nav-item">
        <a class="nav-link" name="nav-item" href="#0" data-signin="login">เข้าสู่ระบบ</a>
          </li>
      </ul>
      </div>
      </div>
      </nav>';
}

?>

<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class="cd-signin-modal js-signin-modal">
	<!-- this is the entire modal form, including the background -->
	<div class="cd-signin-modal__container">
		<!-- this is the container wrapper -->
		<ul class="cd-signin-modal__switcher js-signin-modal-switcher js-signin-modal-trigger">
			<li><a href="#0" data-signin="login" data-type="login">เข้าสู่ระบบ</a></li>
			<li><a href="#0" data-signin="signup" data-type="signup">สมัครสมาชิก</a></li>
		</ul>

		<div class="cd-signin-modal__block js-signin-modal-block" data-type="login">
			<!-- log in form -->
			<form class="cd-signin-modal__form" id="myform" action="check_login.php" method="POST">
				<p class="cd-signin-modal__fieldset">
					<label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="signin-email">อีเมลล์</label>
					<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signin-email" type="email" placeholder="อีเมลล์" name="uname">
					<span class="cd-signin-modal__error">Error message here!</span>
				</p>

				<p class="cd-signin-modal__fieldset">
					<label class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace" for="signin-password">รหัสผ่าน</label>
					<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signin-password" type="password" placeholder="รหัสผ่าน" name="password">

					<span class="cd-signin-modal__error">Error message here!</span>
				</p>

				<p class="cd-signin-modal__fieldset">
					<input type="checkbox" id="remember-me" checked class="cd-signin-modal__input ">
					<label for="remember-me">จำรหัสผ่าน</label>
				</p>

				<p class="cd-signin-modal__fieldset">
					<input class="cd-signin-modal__input cd-signin-modal__input--full-width" type="submit" value="เข้าสู่ระบบ">
				</p>
			</form>


		</div> <!-- cd-signin-modal__block -->

		<div class="cd-signin-modal__block js-signin-modal-block" data-type="signup">
			<!-- sign up form -->
			<form class="cd-signin-modal__form" action="insert.php" method="POST">
				<p class="cd-signin-modal__fieldset">
					<label class="cd-signin-modal__label cd-signin-modal__label--username cd-signin-modal__label--image-replace" for="signup-username">ชื่อผู้ใช้งาน</label>
					<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-username" type="text" placeholder="ชื่อผู้ใช้งาน" name="reg_usr" require>

				</p>

				<p class="cd-signin-modal__fieldset">
					<label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="signup-email">อีเมลล์</label>
					<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-email" type="email" placeholder="อีเมลล์" name="reg_email" require>

				</p>

				<p class="cd-signin-modal__fieldset">
					<label class="cd-signin-modal__label cd-signin-modal__label--password cd-signin-modal__label--image-replace" for="signup-password">รหัสผ่าน</label>
					<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="signup-password" type="password" placeholder="รหัสผ่าน" name="reg_pass" require>

				</p>

				<p class="cd-signin-modal__fieldset">
					<input type="checkbox" id="accept-terms" class="cd-signin-modal__input ">
					<label for="accept-terms">ฉันยอมรับ <a href="#0">ข้อตกลง</a></label>
				</p>

				<p class="cd-signin-modal__fieldset">
					<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding" type="submit" value="สมัครสมาชิก">
				</p>
			</form>
		</div> <!-- cd-signin-modal__block -->

		<div class="cd-signin-modal__block js-signin-modal-block" data-type="reset">
			<!-- reset password form -->
			<p class="cd-signin-modal__message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

			<form class="cd-signin-modal__form">
				<p class="cd-signin-modal__fieldset">
					<label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="reset-email">E-mail</label>
					<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="reset-email" type="email" placeholder="E-mail">
					<span class="cd-signin-modal__error">Error message here!</span>
				</p>

				<p class="cd-signin-modal__fieldset">
					<input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding" type="submit" value="Reset password">
				</p>
			</form>

			<p class="cd-signin-modal__bottom-message js-signin-modal-trigger"><a href="#0" data-signin="login">Back to log-in</a></p>
		</div> <!-- cd-signin-modal__block -->
		<a href="#0" class="cd-signin-modal__close js-close">Close</a>
	</div> <!-- cd-signin-modal__container -->
</div>