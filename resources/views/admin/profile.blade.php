@extends('admin.layouts.index')

@section('content')
    {{$user->full_name}}
    {{$user->email}}
    {{$user->phone}}
    {{$user->type}}
    {{$user->userLevel->name }}
@endsection
