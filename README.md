# π Form component
Formulario para proyectos web.

### Form
- action=""
- method="post"
- name="contact"
- autocomplete="off"
- accept-charset="utf-8"
- enctype="multipart/form-data" (_only upload files_)
- novalidate="novalidate" (_no validate inputs with HTML5_)

### π· Inputs
- Name
- Last Name
- Email
- Phone
- Message

### π  Features
- Reset form
- Validate inputs
- βοΈFormat phone
- Show message
- Submit Ajax
- recaptcha

### π€ Mailer
1.- https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos

2.- https://getcomposer.org/download/

3.- (Global install), using for example:
```
sudo mv composer.phar /usr/local/bin/composer
```

4.- https://github.com/PHPMailer/PHPMailer

### π reCAPTCHA
1.- Add script
```html
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
```

2.- Create project: https://www.google.com/recaptcha/about/

3.- Generate Site Key.

4.- Add element HTML
```html
<div class="g-recaptcha" data-sitekey="your_site_key"></div>
```

5.- Add code JavaScript
```javascript
// Init grecaptcha response
var response = grecaptcha.getResponse();

// Check reCaptcha response
if(response.length == 0) {
	// β reCaptcha not verified
	console.log('El catpcha no ha sido completado');
}else{
	// π€ Submit AJAX
	SubmitFormAJAX(_url, _data, _meth
  
	// β reCaptch verified reset
	grecaptcha.reset();
}
```

### βοΈ Tools
- jQuery
- Gsap
- Composer
- π [PHPMailer](https://github.com/PHPMailer/PHPMailer)
- π [reCAPTCHA](https://developers.google.com/recaptcha/docs/display)
