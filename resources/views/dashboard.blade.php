@extends('layouts.app')

@section('content')
@if (session('succes') )
<p class="pb-4 text-center text-4xl text-green-600">{{ session('succes')  }}</p>

@endif

@endsection
