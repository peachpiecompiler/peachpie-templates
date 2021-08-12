using Microsoft.AspNetCore.Components.WebAssembly.Hosting;
using Microsoft.Extensions.Logging;
using Peachpie.Blazor;
using System.Threading.Tasks;

namespace MyPHPWebsite.1.Client
{
    public class Program
    {
        public static async Task Main(string[] args)
        {
            var builder = WebAssemblyHostBuilder.CreateDefault(args);

            // uncomment to remove logging
            // builder.Logging.SetMinimumLevel(LogLevel.None);

            // Add PHP
            builder.AddPhp(new[] { typeof(force).Assembly });
            builder.RootComponents.Add(typeof(PhpScriptProvider), "#app");
            
            await builder.Build().RunAsync();
        }
    }
}
