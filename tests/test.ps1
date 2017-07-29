# install templates
dotnet new --debug:reinit
dotnet new -i "$PSScriptRoot/../out/Peachpie.Templates.*.nupkg"

# prepare folder for templates testing
mkdir "$PSScriptRoot/../tmp"
Set-Location "$PSScriptRoot/../tmp"

# get all available templates
$templates = Get-ChildItem -dir "$PSScriptRoot/../src/Content"

$error = 0;

# for each template create its project, restore it, and build it
foreach($template in $templates){
    Remove-Item "./*" -Recurse -Force

    dotnet new $template.Name
    if(!($?)) { $error += 1; continue }
    dotnet restore 
    if(!($?)) { $error += 1; continue }
    dotnet build
    if(!($?)) { $error += 1; continue }
}

# remove tmp folder
Set-Location "$PSScriptRoot/.."
Remove-Item "./tmp" -Force -Recurse

Write-Output "Number of errored templates: $error"
exit $error