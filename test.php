<?php
require "lib.php";

$t->follow("http://localhost:81/php/tester/form.php");
$t->fill("title", "some title");
$t->fill("content", "some content");
$t->submit();
$t->should_see("some title");
$t->should_see("some content");
