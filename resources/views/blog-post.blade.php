@extends('layout')

@section('content')
    {{-- calling data from the routes --}}
   {{$welcome}} {{ $data['title'] }}
@endsection
