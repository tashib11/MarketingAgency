
@extends('layout.app')
@section('content')
    @include('component.MenuBar')
    @include('component.Blog')
    @include('component.Footer')
    <script>
        (async () => {
             await Category();
             await loadBlog();
            $(".preloader").delay(70).fadeOut(100).addClass('loaded');

        })()
    </script>
@endsection


