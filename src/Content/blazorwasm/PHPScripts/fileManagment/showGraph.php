<?php
function printGraph($graph)
{
	echo "<div style='position:relative;width:500px;height:500px;background-color:grey;'>";
	foreach($graph as $item)
	{
		echo "<div style='position:absolute;width:3px;height:3px;background-color:black;left:".strval($item[0])."px;top:".strval(500 - $item[1])."px'></div>";
	}
	echo "</div>";
}