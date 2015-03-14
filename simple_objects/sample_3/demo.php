<?php
// require_once 'Character.class.php';
// require_once 'Character/Dragon.class.php';
// require_once 'Character/Wolf.class.php';

// Abstract example
require_once 'Abstract.class.php';
require_once 'Character/Human.class.php';

$user = new Human();
$user->Attack();
$user->Setup(1, 2);

