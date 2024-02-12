<?php

include_once __DIR__.'/autoloader.php';
include_once __DIR__."/header.php";
include_once __DIR__."/navbar.php";
foreach ($fileArray as $key) {
    new AutoLink($key);
}
    # code...

include_once __DIR__."/footer.php";
