<?php 

$json = '[{"nome":"Daniel","idade":24},{"nome":"Rafael","idade":35}]';

$data = json_decode($json, true);

var_dump($data);


 ?>