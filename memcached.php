<?php
$m = new Memcached();
$m->addServer('localhost', 11211);

$m->flush(0);

echo $m->getResultCode()
?>
