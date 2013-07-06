<?php
$query = "{query}";

require_once('workflows.php');
$wf = new Workflows();

$params = preg_split("/[\s,]+/", $query);

$a = $params[0];
$b = $params[1];
$c = $params[2];

$data = (($b / $a) * $c);

$wf->result( $int.'.'.time(), "$data", "$data", 'If '.$a.' is '.$b.' them '.$c.' is '.$data, 'icon.png'  );
echo $wf->toxml();

?>