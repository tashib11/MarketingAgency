@extends('layout.app')
@section('content')
    @include('component.MenuBar')
    @include('component.Home')
    {{-- @include('component.HeroSlider') --}}
    @include('component.Services')
    @include('component.Benefits')
    @include('component.HomeConsultancy')
    @include('component.Footer')
    <script>
        (async () => {
            await Category();
            // await Home();
            await loadServices() ;
            $(".preloader").delay(70).fadeOut(100).addClass('loaded');

        })()
    </script>
@endsection

