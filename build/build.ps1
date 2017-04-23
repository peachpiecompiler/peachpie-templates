Param(
  [string]$suffix
)

# nuget.exe pack
$nugetargs = "pack", "$PSScriptRoot/../src/Peachpie.Templates.nuspec", "-OutputDirectory", "out"
if ($suffix) { $nugetargs += "-Suffix", $suffix }
./tools/nuget.exe $nugetargs