Param(
  [string]$suffix = $env:PrereleaseTag
)

# nuget.exe pack
$nugetargs = "pack", "./src/Peachpie.Templates.nuspec", "-OutputDirectory", "out"
if ($suffix) { $nugetargs += "-Suffix", $suffix }
./tools/nuget.exe $nugetargs

# TODO: test templates
