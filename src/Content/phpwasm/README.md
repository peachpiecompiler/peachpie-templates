## phpwasm

Template for running PHP scripts on a client side by Blazor. The template contains a Blazor web application, which is created just from PHP scripts. 

### How to run

1. Install peachpie templates
2. `dotnet new phpwasm -lang PHP`
3. `dotnet restore`
4. Modify `PHPScripts` library (PHP) (optional)
5. `dotnet build`
6. `dotnet run --project BlazorApp\Server`
