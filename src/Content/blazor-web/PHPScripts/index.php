<?php
    require("/headers/defaultHeader.php");
?>

<h1>Index</h1>

<h3>Easy Configuration</h3>
<p>This static web was configured just by 2 lines of code.</p>
<pre>
public static async Task Main(string[] args)
    {
        var builder = WebAssemblyHostBuilder.CreateDefault(args);

        // Configure logging
        builder.Logging.SetMinimumLevel(LogLevel.Debug); // Debug does not work

        // Add PHP
        <b>builder.AddPhp(new[] { typeof(force).Assembly });</b>
        // builder.RootComponents.Add(typeof(PhpScriptProvider), "#app", ParameterView.FromDictionary(new Dictionary<string, object>() { { "ContextLifetime", SessionLifetime.Persistant} }));
        <b>builder.RootComponents.Add(typeof(PhpScriptProvider), "#app");</b>
            
        await builder.Build().RunAsync();
    }
</pre>

<h3>Offline</h3>
<p>You can try the offline mode by disabling it in the developer tools.</p>
<p>You can navigate through the website, but external resources (like images) can not be loaded in offline mode.</p>
<img src="Web/images/offlineMode.png" width="600" height="200"/>

<?php
    require("/footers/defaultFooter.php");
?>