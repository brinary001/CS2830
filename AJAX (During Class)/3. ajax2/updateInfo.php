<?php
// Created by Professor Wergeles for CS2830 at the University of Missouri


	sleep(3);

	$infoId = empty($_GET['infoId']) ? 'quote1' : $_GET['infoId'];

	switch($infoId) {
		case 'quote1':
			$info = 'A person who never made a mistake <i>never tried anything new</i>.';
			break;
		case 'quote2':
			$info = 'I know quite certainly that I myself have no special talent; curiosity, obsession and dogged endurance, combined with self-criticism have brought me to my ideas.';
			break;
		case 'quote3':
			$info = 'Great spirits have always <strong>encountered violent opposition</strong> from mediocre minds.';
			break;
		case 'quote4':
			$info = 'If my theory of relativity is proven successful, Germany will claim me as a German and France will declare that I am a citizen of the world. Should my theory prove untrue, France will say I am a German and Germany will declare that I am a Jew.';
			break;
		default: 
			$info = "Who the heck is Einstein?";
			break;
	}

	print $info;
?>