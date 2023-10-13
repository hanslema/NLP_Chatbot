<?php

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Middleware\Dialogflow;

$botman = BotManFactory::create();

$dialogflow = new Dialogflow('YOUR_CLIENT_ACCESS_TOKEN_HERE');
$botman->middleware->received($dialogflow);

$botman->hears('Hello', function (Botman $bot) {
    $bot->reply('Hello there!');
});

$botman->listen();
