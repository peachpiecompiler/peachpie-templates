using Microsoft.AspNetCore.Components.WebAssembly.Hosting;
using Microsoft.Extensions.Configuration;
using Microsoft.Extensions.DependencyInjection;
using Microsoft.Extensions.Logging;
using System;
using System.Collections.Generic;
using Peachpie.Blazor;
using System.Threading.Tasks;

namespace BlazorApp.Client
{
    public class Program
    {
        public static async Task Main(string[] args)
        {
            var builder = WebAssemblyHostBuilder.CreateDefault(args);
            builder.RootComponents.Add<App>("#app");

            // Configure logging
            builder.Logging.SetMinimumLevel(LogLevel.None);

            builder.AddPhp(new[] { typeof(force).Assembly});


            await builder.Build().RunAsync();
        }
    }
}
