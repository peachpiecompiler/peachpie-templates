## Peachpie Templates

This repository contains various `dotnet` project templates to be used for creating Peachpie compiled applications.

## Using templates
0. Install peachpie templates via: `dotnet new -i "Peachpie.Templates::*"` 
1. Create a project based on chosen template e.g.: `dotnet new peachpie-console`
2. Restore packages for the newly created project: `dotnet restore`
3. Run the project: `dotnet run`

> You need to install peachpie templates only once. They get stored in ~HOME/.templateengine cache. 

## Prerequisites
- .NET Core SDK 1.0.3
- PowerShell (only for building)

## Contributing templates & building

### Adding a new template:
- Go to `./src/Content`
- Create a new folder with name mathing the template's `shortName`
- Fill the folder with all that is required for a template 
    - [Official documentation on template creation](https://github.com/dotnet/templating/wiki/%22Runnable-Project%22-Templates)
    - [Tutorial on MSDN](https://blogs.msdn.microsoft.com/dotnet/2017/04/02/how-to-create-your-own-templates-for-dotnet-new/)
    - [Short introduction on rehansaeed.com](http://rehansaeed.com/custom-project-templates-using-dotnet-new/)
    - [What is required for a peachpie project](http://www.peachpie.io/2017/04/msbuild-netcoreapp1-1.html)

### Building & testing
- Invoke `.\build.ps1`
  - Packages all templates into a nuget package (see `/out/Peachpie.Templates.x.y.z.nupkg`)
  - Installs the the templates package to current `.templateengine`  cache
  - Tries to create a project from each one, restore it, and build it
- After invoking the build script your template should be listed among `dotnet new -all`

