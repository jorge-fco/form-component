<?php
	//Generate a random string.
	$token = openssl_random_pseudo_bytes(16);

	//Convert the binary data into hexadecimal representation.
	$token = bin2hex($token);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--TITLE-->
	<title>Form</title>

	<!--ICONS-->
	<script src="https://kit.fontawesome.com/4643810438.js" crossorigin="anonymous"></script>

	<!--CSS-->
	<link rel="stylesheet" href="assets/css/form.css?v=0.03">
</head>
<body>
	<main class="page">
		<section class="page__section">
			<div class="page__container">
				<div class="page__title">
					<h1>Form</h1>
				</div>

				<!--MESSAGE-->
				<div class="form__message js-form-message" role="message">
					<span></span>
				</div>
				<!--MESSAGE-->

				<form action="controller" method="post" class="js-form" accept-charset="UTF-8" autocomplete="off" name="contact" novalidate="novalidate">
					<input type="hidden" name="token" value="<?= $token; ?>">

					<!--NAME-->
					<div class="form__item" role="item">
						<label for="name"><span>*</span>Nombre</label>
						<input type="text" name="name" class="js-form-input-name"
							maxlength="30"
							size="30"
							id="name"
							pattern="[a-zA-Z]*"
							data-required="true"
							required="true">

						<div class="form__message__input js-form-input-message" role="alert"></div>
					</div>
					<!--NAME-->

					<!--LAST NAME-->
					<div class="form__item" role="item">
						<label for="lastname"><span>*</span>Apellido</label>
						<input type="text" name="lastname" class="js-form-input-last-name"
							maxlength="30"
							size="30"
							id="lastname"
							pattern="[a-zA-Z]*"
							data-required="true"
							required="true">

						<div class="form__message__input js-form-input-message" role="alert"></div>
					</div>
					<!--LAST NAME-->

					<!--EMAIL-->
					<div class="form__item" role="item">
						<label for="email"><span>*</span>Email</label>
						<input type="email" name="email" class="js-form-input-email"
							placeholder="example@gmail.com"
							maxlength="30"
							size="30"
							id="email"
							data-required="true"
							required="true">

						<div class="form__message__input js-form-input-message" role="alert"></div>
					</div>
					<!--EMAIL-->

					<!--PHONE-->
					<div class="form__item" role="item">
						<label for="phone"><span>*</span>Phone</label>
						<input type="tel" name="phone" class="js-form-input-phone"
							placeholder="(33) 1234 5678"
							pattern="[0-9\-]*"
							maxlength="13"
							minlength="13"
							size="13"
							id="phone"
							required="true">

						<div class="form__message__input js-form-input-message" role="alert"></div>
					</div>
					<!--PHONE-->

					<div class="form__item" role="item">
						<label for="message">Mensaje</label>
						<textarea name="message" maxlength="80" size="80" id="message"></textarea>
					</div>

					<div class="form__item" role="item">
						<button type="submit" name="submit" class="button button-primary js-form-button-submit">
							Enviar
							<i class="fas fa-paper-plane"></i>
						</button>
					</div>
				</form>
			</div>
		</section>
	</main>

	<!--J A V A S C R I P T-->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/plugins/ScrollToPlugin.min.js"></script>
	<script src="assets/js/form.js?v=0.04"></script>
</body>
</html>

