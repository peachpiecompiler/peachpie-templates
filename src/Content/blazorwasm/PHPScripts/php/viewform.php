<h1>Global Variables Dump</h1>
<h3>GET</h3>
<?php
	foreach($_GET as $key => $value)
	{
		echo "<p>$key => $value</p>";
	}
?>
<h3>POST</h3>
<?php
	foreach($_POST as $key => $value)
	{
		echo "<p>$key => $value</p>";
	}
?>
<h3>FILES</h3>
<?php
	function printFile($file)
	{
		echo "<p>" . "Field name: " . $file->fieldName . "</p>";
		echo "<p>" . "Name: " . $file->name . "</p>";
		echo "<p>" . "Size: " . $file->size . "</p>";
		echo "<p>" . "Type: " . $file->type . "</p>";
		echo "<p>" . "Id: " . $file->id . "</p>";
		echo "<p>Base64 content:\n" . GetBrowserFileContent($file->id) . "</p>";
	}

	foreach($_FILES as $key => $value)
	{
		echo "<h4>$key</h4>";
		printFile($value);
	}
?>