## blazorwasm

Template for running PHP scripts on a client side by Blazor. The template contains a Blazor web application with Razor pages and pages generated from PHP scripts. 

### How to run
1. Install peachpie templates
2. `dotnet new blazorwasm -lang PHP`
3. `dotnet restore`
4.  Modify `PHPScripts` library (PHP) or ```Blazor.Client``` (Razor) (optional)
5. `dotnet build`
6. `dotnet run --project BlazorApp\Server`
