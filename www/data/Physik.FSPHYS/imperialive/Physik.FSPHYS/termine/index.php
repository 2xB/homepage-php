<?php
use de\uni_muenster\fsphys;
require_once 'init.php';
require_once 'office_hours.php';

fsphys\run_and_catch(function() {
	echo fsphys\office_hours_html();
});
?>

<?php
/*
	Imperia modules…
*/
?>

<?php
fsphys\run_and_catch(function() {
	echo fsphys\office_hours_break_html();
});
?>

