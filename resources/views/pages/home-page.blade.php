@extends('layout.app')
@section('content')
    @include('component.MenuBar')
    @include('component.Home')
    {{-- @include('component.HeroSlider') --}}
    @include('component.Services')


    @include('component.ExclusiveProducts')
    @include('component.TopBrands')
    @include('component.Footer')
    <script>
        (async () => {
            await Category();
            // await Home();
            // await Services();
            $(".preloader").delay(90).fadeOut(100).addClass('loaded');
            await Popular();
            await New();
            await Top();
            await Trending();
            await TopBrands();
        })()
    </script>
@endsection

