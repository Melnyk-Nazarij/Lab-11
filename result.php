<?php
$fileContent = file('Result.txt');
foreach ($fileContent as $oneLine) {
	echo $oneLine."<br>";
}
?>