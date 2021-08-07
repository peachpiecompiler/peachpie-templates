<h2>Form example 1</h2>
<p>You can create a form and use get method.</p>

<form method="get" action="php/viewform.php">
    <label>Username:</label>
    <input name="username" type="text" required="required"/><br/>
    <label>Email:</label>
    <input name="email" type="email"><br/>
    <label>Age:</label>
    <input name="age" type="number" min="0"/><br/>
    <label>Comment:</label>
    <textarea name="comment" required="required"></textarea><br/>
    <label>Publish:</label>
    <select name="publish">
        <option value="private" selected>private</option>
        <option value="public">public</option>
    </select><br/>
    <input type="submit" value="Submit"/><br/>
</form>