## Peachpie Templates

This repository contains various `dotnet` project templates to be used for creating Peachpie compiled applications.

## Using
0. Install peachpie templates via: `dotnet new -i "Peachpie.Templates::*"` 
1. Create a project based on chosen template e.g.: `dotnet new peachpie-console`
2. Restore packages for the newly created project: `dotnet restore`
3. Run the project: `dotnet run`

> You need to install peachpie templates only once. They get stored in ~HOME/.templateengine cache. 

## Prerequisites
- .NET Core SDK 1.0.3
- PowerShell (only for building)

## Building

- `git clone https://github.com/peachpiecompiler/peachpie-templates.git`
- `cd peachpie-templates`
- `.\build.ps1`

## Testing

