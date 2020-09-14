## WpDotNet

Template for creating ASP.NET Core WpDotNet applications. For more details see https://docs.peachpie.io/scenarios/wordpress/overview/.

## How to run

1. Install peachpie templates
   ```
   dotnet new -i Peachpie.Templates::*
   ```
2. Create the project
   ```
   dotnet new wpdotnet
   ```
3. create and run  MySql database
   - default database name: `wordpress`
   - default host: `localhost:3306`
   - default credentials: `root`:`password`
3. Start the project
   ```
   dotnet run
   ```
