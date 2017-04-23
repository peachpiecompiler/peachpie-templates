## web-app

Template for a dotnet library written in PHP. Code from all .php files gets compiteled into one .NET assembly that can be referenced from any .NET language, be it C#, F#, VB, or - thanks to Peachpie - PHP.

### How to run
1. Install peachpie templates
2. `dotnet new peachpie-phplib`
3. `dotnet restore`
4.  Modify `lib.php` (optional)
5. `dotnet run`