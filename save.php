<?php
$html = $_POST['html'];
file_put_contents('./xml/'.$_POST["name"].'.xml', $html);
echo 'Sauvé !';
?>