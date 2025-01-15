<?php

$xml= new DoMDocument;
$xml->load ("Index.xml");

if ($xml-schemavalidate("schema.xsd")){
    echo "xml is valid";
}
else{
    echo "xml is not valid";
}

