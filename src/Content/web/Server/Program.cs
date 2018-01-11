using System;
using Microsoft.AspNetCore.Builder;
using Microsoft.AspNetCore.Hosting;
using Microsoft.Extensions.DependencyInjection;
using Peachpie.Web;

namespace MyWebsite.1.Server
{
    class Program
    {
        static void Main(string[] args)
        {
            var host = new WebHostBuilder()
                .UseKestrel()
                .UseUrls("http://*:5004/")
                .UseStartup<Startup>()
                .Build();

            host.Run();
        }
    }
	
	class Startup
    {
        public void ConfigureServices(IServiceCollection services)
        {
            // Adds a default in-memory implementation of IDistributedCache.
            services.AddDistributedMemoryCache();

            services.AddSession(options =>
            {
                options.IdleTimeout = TimeSpan.FromMinutes(30);
                options.Cookie.HttpOnly = true;
            });
        }

        public void Configure(IApplicationBuilder app)
        {
            app.UseSession();

            app.UsePhp(new PhpRequestOptions(scriptAssemblyName: "MyWebsite.1"));
            app.UseDefaultFiles();
            app.UseStaticFiles();
        }
    }
}