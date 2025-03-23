
@extends('layout.app')
@section('content')
    @include('component.MenuBar')
    @include('component.PolicyList')
    @include('component.Footer')
    <script>
        (async () => {
            await Category();
            await Policy()
            $(".preloader").delay(90).fadeOut(100).addClass('loaded');
        })()
    </script>
@endsection


