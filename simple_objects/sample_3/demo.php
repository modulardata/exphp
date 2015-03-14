<?php
require_once 'Character.class.php';
require_once 'Character/Human.class.php';
require_once 'Character/Dragon.class.php';
require_once 'Character/Wolf.class.php';

$Character = new Wolf(120, 230, 30);
$Character->Attack();
