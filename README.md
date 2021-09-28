# Form component
Form component

### Inputs
- Name
- Email
- Phone
- Message

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
```
if(response.length == 0) {
  // ❌ reCaptcha not verified
}else{
  // ✅ reCaptch verified reset
	grecaptcha.reset();
  
  // Submit AJAX
	_FormSubmit();
}
```

### ⚙️ Tools
- 🔗 [PHPMailer](https://github.com/PHPMailer/PHPMailer)
- 🔗 [reCAPTCHA](https://developers.google.com/recaptcha/docs/display)
