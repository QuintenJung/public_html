<?php
global $title;
$title = 'controlRoom';
?>

@extends('layouts.def')

@section('content')
<li>
    <a href="bug">allBugs</a>
</li>
<li>
    <a href="user">allUser</a>
</li>
<li>
    @if( Auth::user()?->id != "" )
    <a href="user/{{ Auth::user()?->id }}">accountInfo</a>
    @endif
</li>
<li>
    <a href="bug/create">createTicket</a>
</li>
<li>
    <a href="/logout">logOut</a>
</li>
<li>
    <a href="user/login">logIn</a>
</li>
<P>
{{ Auth::user()?->name }}
 </P>
    <p>DEVs</p>
@endsection