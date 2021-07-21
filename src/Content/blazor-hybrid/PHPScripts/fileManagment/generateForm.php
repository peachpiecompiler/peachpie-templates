<form action="phpstandalone.php" method="get">
    <label for="function">Function of graph: </label><br/>
	<select name="function" id="function"><br/>
        <option value="const" selected>Constant</option><br/>
        <option value="linear">Linear</option><br/>
    </select><br/>
    <label for="start">Begin value of x: </label><br/>
    <input name="start" id="start" type="number" min="0"/><br/>
    <label for="step">Step of x: </label><br/>
    <input name="step" id="step" type="number" min="1"/><br/>
    <label for="count">Count of samples: </label><br/>
    <input name="count" id="count" type="number" min="1"/><br/>
    <input type="hidden" name="action" value="parametersSetG"/><br/>
    <input type="submit" value="Submit"/><br/>
</form>
