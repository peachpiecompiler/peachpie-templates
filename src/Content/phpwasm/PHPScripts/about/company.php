<?php
    require("/headers/defaultHeader.php");
?>

<h1>Company</h1>
<p>Something about company...</p>
<p>You can enable navigating to an external resource in Blazor.Server/StartUp.cs by adding this.</p>
<pre>
    //If you have external resources like images, you can add them in this way
    app.UseStaticFiles(new StaticFileOptions
    {
        FileProvider = new PhysicalFileProvider(Path.Combine(Directory.GetParent(Environment.CurrentDirectory).Parent.FullName, "Web\\wwwroot")),
        RequestPath = "/Web"
    });
</pre>

<?php
    require("/footers/defaultFooter.php");
?>