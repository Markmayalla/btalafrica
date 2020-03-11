@php
    $backgroundImage = isset($background) ? "background: url('$background');" : null
@endphp
<div class="d-flex w-100 justify-content-center bg-accent text-{{ $color ?? 'light' }} align-items-center" 
    style="{{ $backgroundImage ?? '' }} background-size:cover; background-position:center; background-repeat:no-repeat; height:{{ $height ?? "200px" }};">
    <h1 class="display-4">{{ $name ?? config('app.name') }}</h1>
</div>