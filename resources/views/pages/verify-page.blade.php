@extends('layout.app')
@section('content')
    @include('component.MenuBar')
    @include('component.Verify')
    {{-- @include('component.Footer') --}}
    <script>
        (async () => {
            $(".preloader").delay(70).fadeOut(100).addClass('loaded');
        })()
    </script>
@endsection

