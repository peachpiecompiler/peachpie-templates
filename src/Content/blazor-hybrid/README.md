## blazor-hybrid

Template for running PHP scripts on a client side by Blazor. The template contains a Blazor web application with Razor pages and pages generated from PHP scripts. 

### How to run
1. Install peachpie templates
2. `dotnet new blazor-hybrid`
3. `dotnet restore`
4.  Modify `PHPScripts` library (PHP) or ```Blazor.Client``` (Razor) (optional)
5. `dotnet build`
6. `dotnet run --project BlazorApp\Server`
