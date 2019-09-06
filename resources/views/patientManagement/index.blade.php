@extends('layouts.app')

@section('content')
    <h1>This is sample login page</h1>

<form action="/check2" method="POST">
    {{ csrf_field() }}
    <input type="text" placeholder="phone" name="nic"/>
    {{-- <input type='text' placeholder="" name="pnumber"/> --}}
    <input type="submit" value="send"/>
</form>

@endsection
 
