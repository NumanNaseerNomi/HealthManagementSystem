@extends('layouts.master-layouts')
@section('title')
    @if ($patient )
        {{ __('Update Patient Details') }}
    @else
        {{ __('Add New Patient') }}
    @endif
@endsection
@section('body')

    <body data-topbar="dark" data-layout="horizontal">
    @endsection
    @section('content')
    @endsection
    @section('script')
        <script>
        </script>
    @endsection
