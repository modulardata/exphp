<?php
// Interface must requeire before
require_once('DotSyntax.interface.php');
require_once('Parsed.interface.php');
require_once('Compiled.interface.php');

require_once('PHP.class.php');
require_once('Java.class.php');

$php = new PHP();
$java = new JavaInterface();