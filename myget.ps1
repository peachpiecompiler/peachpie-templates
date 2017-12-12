Param(
  [string]$version = $env:PackageVersion,
  [string]$suffix = $env:PrereleaseTag
)

Invoke-Expression "$PSScriptRoot/build/build.ps1 $version $suffix"
Invoke-Expression "$PSScriptRoot/tests/test.ps1"