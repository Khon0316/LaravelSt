@extends('layouts.master')

@section('style')
    <style>
        body { background: green; color: white; }
    </style>
@endsection

@section('content')
    <p>child view 'content' section</p>

    @include('partials.footer')
@endsection

@section('script')
    <script>
        alert('child view script');
    </script>
@endsection
