<?php
$connect_error = 'Sorry we\'re experiencing connection problems.';
mysql_connect('localhost', 'root', 'dawid7') or die ($connect_error);
mysql_select_db('my_website') or die ($connect_error);
?>