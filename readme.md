## Peachpie Templates

This repository contains various `dotnet` project templates to be used for creating Peachpie compiled applications.

## Using
To be able to use peachpie templates just download & install them from nuget via `dotnet new -i "Peachpie.Templates::*"` command. After that you should be able to see them among other installed templates (see `dotnet new -all`). 

## Templates

### console-app

Template for creating .NET core console applications in PHP. 

#### How to run
1. Install peachpie templates
2. `dotnet new peachpie-console`
3. `dotnet restore`
4.  Modify `program.php` (optional)
5. `dotnet run`

### web-app

Template for a simple PHP web application hosten on Kestrel and ASP.NET Core pipeline.

#### How to run
1. Install peachpie templates
2. `dotnet new peachpie-web`
3. `dotnet restore`
4.  Modify `website/index.php` (optional)
5. `dotnet run`

## Prerequisites
- .NET Core SDK 1.0.3

## Building

## Testing

