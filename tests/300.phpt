--TEST--
FFI 300: FFI preloading
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--INI--
ffi.preload=tests/300.h
--FILE--
<?php
$ffi = FFI::scope("TEST_300");
$ffi->printf("Hello World from %s!\n", "PHP");
?>
--EXPECT--
Hello World from PHP!
