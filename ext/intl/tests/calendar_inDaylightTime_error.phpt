--TEST--
IntlCalendar::inDaylightTime(): bad arguments
--INI--
date.timezone=Atlantic/Azores
--SKIPIF--
<?php
if (!extension_loaded('intl'))
	die('skip intl extension not enabled');
--FILE--
<?php
ini_set("intl.error_level", E_WARNING);

var_dump(intlcal_in_daylight_time(1));
--EXPECTF--
Fatal error: Uncaught TypeError: intlcal_in_daylight_time() expects argument #1 ($calendar) to be of type IntlCalendar, int given in %s:%d
Stack trace:
#0 %s(%d): intlcal_in_daylight_time(1)
#1 {main}
  thrown in %s on line %d
