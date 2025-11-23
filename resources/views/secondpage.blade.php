@extends('layouts.stan');

@section('1ahref')
    <p>dit is de eerste href</p>
@endsection

@section('2ahref')
    <a href="{{ url('/home') }}" >home</a>
@endsection