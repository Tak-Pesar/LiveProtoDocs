# Invoking

?> Note, Here we want to explain to you how exactly you can use raw [functions](en/functions.md) and directly exchange your requests between your client and Telegram servers.

---

## Object-Oriented Method Chaining

```php
$peer = $client->get_entity('@LiveProto');

$text = 'Hello <tg-emoji emoji-id = "5233599134019100925">👋</tg-emoji> | <a href = "https://t.me/LiveProto">LiveProto</a>';

list($message,$entities) = $client->html($text);

var_dump($client->messages->sendMessage(peer : $peer,message : $message,random_id : random_int(PHP_INT_MIN,PHP_INT_MAX),entities : $entities));
```

---

```php
$peer = $client->get_entity('@LiveProto');

$text = 'Hello [👋](tg://emoji?id=5233599134019100925) | [LiveProto](https://t.me/LiveProto)';

list($message,$entities) = $client->markdown($text);

$namespace = ($client->messages);

var_dump($namespace->sendMessage(peer : $peer,message : $message,random_id : random_int(PHP_INT_MIN,PHP_INT_MAX),entities : $entities));
```

---

## Dynamic Method Invocation

```php
$peer = $client->get_entity('@LiveProto');

$text = '<u>Hello 👋</u> | <b>LiveProto</b>';

list($message,$entities) = $client->html($text);

var_dump($client('messages.sendMessage',['peer' => $peer,'message' => $message,'random_id' => random_int(PHP_INT_MIN,PHP_INT_MAX),'entities' => $entities]));
```

---

```php
$peer = $client->get_entity('@LiveProto');

$text = '__Hello 👋__ | **LiveProto**';

list($message,$entities) = $client->markdown($text);

var_dump($client('messages/sendMessage',array('peer' => $peer,'message' => $message,'random_id' => random_int(PHP_INT_MIN,PHP_INT_MAX),'entities' => $entities)));
```