<?php

	function menuBuilder($obj){
		echo('<ul>');
		
		foreach ($obj as $key => $value){
			echo( '<li><a href="' .$value[ 'MenuLink']. '">' .$value['MenuName'] . '</a></li>');
		}
	echo('</ul>');
	}
?>