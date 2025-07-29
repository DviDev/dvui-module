@props([
'suite',
'alias'
])
@if(app()->isLocal())
<!-- {{"🤖 $suite::$alias 🤖" }} -->
@endif
