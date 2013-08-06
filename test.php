<?php
require "lib.php";

$t->follow("http://localhost:81/php/tester/form.php");
$t->fill("name", "1");
$t->fill("content1", "2");
$t->click("submit");
$t->should_see("1");
$t->should_see("2");
