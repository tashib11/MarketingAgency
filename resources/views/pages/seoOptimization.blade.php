@extends('layout.app')
@section('content')
    @include('component.MenuBar')
    @include('component.SEOBlog')
    {{-- @include('component.Footer') --}}

    <script>
        (async () => {
            await Category();
            $(".preloader").delay(70).fadeOut(100).addClass('loaded');
        })()
    </script>
@endsection
