## web-app

Template for a dotnet class library written in PHP. Code from all .php files gets compiled into one .NET assembly that can be referenced from any .NET project, be it C#, F#, VB, or - thanks to Peachpie - PHP.

### How to run
1. Install peachpie templates
2. `dotnet new peachpie-classlibrary`
3. `dotnet restore`
4.  Modify `lib.php` (optional)
5. `dotnet build`
