# Methods

?> Note, In this section, we only introduced the methods that are for your convenience to work with raw api, and I call them custom methods

---

## send_code()

Send the confirmation code to the given phone number

Usable by :
- [x] Users
- [ ] Bots

##### <pre>Arguments</pre>
- phone_number(<small>string</small>) :
  - The phone to which the code will be sent

- ...settings(<small>mixed</small>) :
  - Any additional parameters you give will be passed to the [codeSettings](types/codeSettings.md) construct

##### <pre>Returns</pre>

An instance of [SentCode](returns/auth/sentCode.md)

##### <pre>Example</pre>

```php
$client->send_code(phone_number : '+1234567890');

$client->send_code(phone_number : '+8884567890',unknown_number : true);
```

---

## sign_in()

Logs in to Telegram to an existing user or bot

Usable by :
- [x] Users
- [x] Bots

##### <pre>Arguments</pre>
- code(<small>string</small>,<small>int</small>,<small>null</small>) :
  - The code that Telegram sent. Note that if you have sent this code through the application itself it will immediately expire. If you want to send the code, obfuscate it somehow. If you’re not doing any of this you can ignore this note

- password(<small>string</small>,<small>null</small>) :
  - 2FA password, should be used if a previous call raised an exception with `SESSION_PASSWORD_NEEDED` message

- token(<small>string</small>,<small>null</small>) :
  - Used to sign in as a bot

- email(<small>string</small>,<small>null</small>) :
  - Set email verification
 
##### <pre>Returns</pre>

An instance of [Authorization](returns/auth/authorization.md)

##### <pre>Example</pre>

```php
$client->sign_in(code : 12345);
$client->sign_in(code : 12345,email : 'tak@liveproto.dev');

$client->sign_in(password : 'HelloWorld');

$client->sign_in(token : '4839574812:AAFD39kkdpWt3ywyRZergyOLMaJhac60qc');
```

---

## sign_up()

This method is used to create a new account and your client must be [official](configuration.md#Official)

Usable by :
- [x] Users
- [ ] Bots

##### <pre>Arguments</pre>
- first_name(<small>string</small>) :
  - Set a first name for your account

- last_name(<small>string</small>) :
  - Set a last name for your account

##### <pre>Returns</pre>

An instance of [Authorization](returns/auth/authorization.md)

##### <pre>Example</pre>

```php
$client->sign_up(first_name : 'Tak',last_name : 'Pesar');
```

---

## resend_code()

Description

Usable by :
- [x] Users
- [ ] Bots

##### <pre>Returns</pre>

An instance of [SentCode](returns/auth/sentCode.md)

##### <pre>Example</pre>

```php
$client->resend_code();
```

---

## cancel_code()

Description

Usable by :
- [x] Users
- [ ] Bots

##### <pre>Returns</pre>

An instance of [Bool](returns/bool.md)

##### <pre>Example</pre>

```php
$client->cancel_code();
```

---

## firebase_sms()

This method is used to send code as sms and your client must be [official](configuration.md#Official)

Usable by :
- [x] Users
- [ ] Bots

##### <pre>Arguments</pre>
- safety(<small>string</small>,<small>null</small>) :
  - Safety net token

- push(<small>string</small>,<small>null</small>) :
  - IOS push secret

##### <pre>Returns</pre>

An instance of [Bool](returns/bool.md)

##### <pre>Example</pre>

```php
$client->firebase_sms();
```

---

## log_out()

Description

Usable by :
- [x] Users
- [x] Bots

##### <pre>Returns</pre>

An instance of [LoggedOut](returns/auth/loggedOut.md)

##### <pre>Example</pre>

```php
$client->log_out();
```

---

## login_token()

Description

Usable by :
- [x] Users
- [ ] Bots

##### <pre>Arguments</pre>
- except_ids(<small>array&lt;int&gt;</small>) :
  - List of already logged-in user IDs, to prevent logging in twice with the same user

##### <pre>Returns</pre>

String like `tg://login?token=base64encodedtoken`

##### <pre>Example</pre>

```php
$client->login_token();
```

---

## accept_token()

Description

Usable by :
- [x] Users
- [ ] Bots

##### <pre>Arguments</pre>
- token(<small>string</small>) :
  - Login token embedded in QR code

##### <pre>Returns</pre>

An instance of [Authorization](returns/authorization.md)

##### <pre>Example</pre>

```php
$client->accept_token(token : 'tg://login?token=base64encodedtoken');
```

---

## wait_token()

Description

Usable by :
- [x] Users
- [ ] Bots

> [!NOTE]
> An alert of type 'note' using global style 'callout'.

##### <pre>Arguments</pre>
- <details>
<summary>except_ids(<small>array&lt;int&gt;</small>) <kbd>optional</kbd> :</summary>
<kbd>
default :
hellotoyoutooifyouwanttocomeoverandwatchthekidstonightandIwillbethereisn'tanyofthephotoof the photo of the photo of the photo of file for it and then with you guys
</kbd>
</details>

  - List of already logged-in user IDs, to prevent logging in twice with the same user

- timeout(<small>int</small>) :
  - Set a time out for waiting

##### <pre>Returns</pre>

An instance of [Authorization](returns/auth/authorization.md)

##### <pre>Example</pre>

```php
$client->wait_token(timeout : 60);
```

---

## update_password()

Description

Usable by :
- [x] Users
- [ ] Bots

##### <pre>Arguments</pre>
- first_name(<small>string</small>) :
  - Set a first name for your account

- last_name(<small>string</small>) :
  - Set a last name for your account

##### <pre>Returns</pre>

An instance of [Authorization](returns/auth/authorization.md)

##### <pre>Example</pre>

```php
$client->sign_up(first_name : 'Tak',last_name : 'Pesar');
```

---

## sign_up()

Description

Usable by :
- [x] Users
- [ ] Bots

##### <pre>Arguments</pre>
- first_name(<small>string</small>) :
  - Set a first name for your account

- last_name(<small>string</small>) :
  - Set a last name for your account

##### <pre>Returns</pre>

An instance of [Authorization](returns/auth/authorization.md)

##### <pre>Example</pre>

```php
$client->sign_up(first_name : 'Tak',last_name : 'Pesar');
```

