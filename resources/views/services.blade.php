@extends('layouts.landing')

@section('title','Services')
    
@section('content')
<h1>Services</h1>
<div class="cards">
@component('_components.card')
    @slot('title','Service 1')
    @slot('content','lorem ipsum dlor set  asinim.')
    @endcomponent
@component('_components.card')   
    @slot('title','Service 2')
    @slot('content','lorem ipsum dlor set  asinim.')
    @endcomponent
@component('_components.card')
    @slot('title','Service 3')
    @slot('content','lorem ipsum dlor set  asinim.')
    @endcomponent
@component('_components.card')
    @slot('title','Service 4')
    @slot('content','lorem ipsum dlor set  asinim.')
@endcomponent
    @component('_components.card')
    @slot('title','Service 5')
    @slot('content','lorem ipsum dlor set  asinim.')
@endcomponent
    @component('_components.card')
    @slot('title','Service 6')
    @slot('content','lorem ipsum dlor set  asinim.')
@endcomponent
    @component('_components.card')
    @slot('title','Service 7')
    @slot('content','lorem ipsum dlor set  asinim.')
@endcomponent
</div>
@endsection