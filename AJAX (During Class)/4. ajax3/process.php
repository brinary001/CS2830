<?php
// Created by Professor Wergeles for CS2830 at the University of Missouri


	$name = empty($_POST['name']) ? 'Unknown' : $_POST['name'];
	$hobby = empty($_POST['hobby']) ? 'no hobby' : $_POST['hobby'];
	$age = empty($_POST['age']) ? 'indeterminant' : $_POST['age'];
	
	print "<b>$name likes $hobby and has an age of $age years.</b><br><br>\n";
	print "<img class='centeredImage' src='hobby.jpg' alt='hobby'>\n";
?>