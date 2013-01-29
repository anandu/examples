<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!-- # Copyright 2010 RightScale, Inc. All rights reserved. -->


<?php

include '../config/solr_conf.php';

$options = array
(
   'hostname' => "$host",
   'port'     => '8983',
   'timeout'  => '2',
);
$solr = new SolrClient( $options );


if (  $solr->ping() ) {
$result="succeeded";
    }
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>RightScale Unified Test App</title>
    <link rel="stylesheet" type="text/css" href="../style.css" />  
</head>

<body>

<div id="header">
<div id="logo"><img src="images/logo.png" /></div>
</div>

<div class="code_container">
<div class="code">

<h3>  
Solr configuration=<?php echo $result; ?>
</h3>

</div>
</div>

</body>
</html>
