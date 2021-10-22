# Form component
Form component

### Form
- action=""
- method="post"
- name="contact"
- autocomplete="off"
- accept-charset="utf-8"
- enctype="multipart/form-data" (_only upload files_)
- novalidate="novalidate" (_no validate inputs with HTML5_)

### Inputs
- Name
- Last Name
- Email
- Phone
- Message

### Features
- Reset form
- Validate inputs
- Format phone
- Show message
- Submit Ajax

### 🔄 reCAPTCHA
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
  // ❌ reCaptcha not verified
  console.log('El catpcha no ha sido completado');
}else{
  // 📤 Submit AJAX
  _FormSubmit();
  
  // ✅ reCaptch verified reset
  grecaptcha.reset();
}
```

### Mailer
1.- https://getcomposer.org/download/

2.- (Global install), using for example:
````
sudo mv composer.phar /usr/local/bin/composer
```


### ⚙️ Tools
- jQuery
- Gsap
- 🔗 [PHPMailer](https://github.com/PHPMailer/PHPMailer)
- 🔗 [reCAPTCHA](https://developers.google.com/recaptcha/docs/display)
