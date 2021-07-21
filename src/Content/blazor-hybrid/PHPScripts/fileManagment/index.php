<?php
function generateGraph($begin, $step, $count, $function)
{
	$graph = array();
    $end = $begin + $step * $count;
    for($begin; $begin <= $end; $begin += $step)
    {
        if ($function == "const") {
            $graph[] = [$begin,1];
        }
        elseif ($function == "linear") {
            $graph[] = [$begin,$begin];
        }
    }

	return $graph;
}

function CsvToString($csv)
{
	
	$result = "";
	foreach($csv as $line)
	{
		if (isset($line[0]) && ($line[1]))
		$result = $result . strval($line[0]) . "," . strval($line[1]) . "\n";
	}
	return $result;
}

function printGraphView()
{
	global $graph;
	if ($_GET["action"] == "download") {
		$file = CreateFile(CsvToString($graph),"text/csv", "graph.csv");
		DownloadFile($file->id);
	}
	else {
		require("/fileManagment/showGraph.php");
		printGraph($graph);
		require("/fileManagment/downloadForm.php");
	}
}

if (isset($graph) && $_GET["action"] == "download") {
	printGraphView();
}
else {
	if ($_GET["action"] === "parametersSetF") {
		$data = GetBrowserFileContent($_FILES["file1"]->id);
		$lines = explode("\n", base64_decode($data));
		$graph = array_map('str_getcsv', $lines);
		printGraphView();
	}
	elseif ($_GET["action"] === "parametersSetG") {
		$start = intval($_GET["start"]);
		$count = intval($_GET["count"]);
		$step = intval($_GET["step"]);
		$graph = generateGraph($start, $step, $count, $_GET["function"]);
		printGraphView();
	}
	elseif ($_GET["action"] === "generate") {
		require("/fileManagment/generateForm.php");
	}
	elseif ($_GET["action"] === "inputFile") {
		require("/fileManagment/fileForm.php");
	}
	else {
		require("/fileManagment/chooseForm.php");
	}
}
unset($_GET["action"]);
