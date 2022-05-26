<?php

$cats = ['Pilkis', 'Murkis'];

if (!file_exists(__DIR__. '/cats.json')) {
    file_put_contents(__DIR__. '/cats.json', json_encode([]));
}

$nowCats = json_decode(file_get_contents(__DIR__. '/cats.json'));

