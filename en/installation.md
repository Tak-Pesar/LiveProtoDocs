# Installation

You can install the library and use it in two ways, the first way is to use [Phar File](en/installation.md#Phar) and the second way is to use [Composer](en/installation.md#Composer)

---

## Phar

If you want to have a quick and easy start, it is recommended to use this method, you can download library in the form of a single file as `liveptoto.phar`

```php
<?php

if(file_exists('liveptoto.phar') === false):
    copy('https://phar.liveproto.dev/v/latest/liveptoto.phar','liveptoto.phar');
endif;

require_once 'liveptoto.phar';
```

?> Note, By changing `latest` to the version you want, you can use any version for example :

```php
<?php

if(file_exists('liveptoto-v0.0.1.phar') === false):
    copy('https://phar.liveproto.dev/v/0.0.1/liveptoto.phar','liveptoto-v0.0.1.phar');
endif;

require_once 'liveptoto-v0.0.1.phar';
```

?> Note, You can also use a file to automatically download the latest phar file for you and even update it automatically (`auto-update`) and include it

```php
<?php

if(file_exists('liveptoto.php') === false):
    copy('https://phar.liveproto.dev/liveptoto.php','liveptoto.php');
endif;

require_once 'liveptoto.php';
```

---

## Composer

You can also use the following command line to install the library

> _This is the best way_

```bash
composer require takpesar/liveproto
```

!> **Composer v2+ is required !**

And finally, follow the code below to use the library

```php
<?php

require_once 'vendor/autoload.php';
```

---

### Composer from scratch 

> `composer.json` file content :

```json
{
    "name": "yourname/yourproject",
    "description": "Project Description",
    "type": "project",
    "autoload": {
        "psr-4": {
            "Yourname\\Yourproject\\": "src/"
        }
    },
    "authors": [
        {
            "name": "Tak Pesar",
            "email": "loser.man.2007@gmail.com"
        }
    ],
    "require": {
        "php": "^8.2",
        "takpesar/liveproto": "*"
    }
}
```
> Then run this command line

```bash
composer update
```