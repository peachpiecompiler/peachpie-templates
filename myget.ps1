Param(
  [string]$suffix = $env:PrereleaseTag
)

Invoke-Expression "$PSScriptRoot/build/build.ps1 $suffix"
Invoke-Expression "$PSScriptRoot/tests/test.ps1"