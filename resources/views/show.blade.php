@extends('layouts.app')

@section('content')

<h3>sample</h3>

<form action="/enter" method="post" >
    {{ csrf_field() }}

<input type="text" placeholder="fullname" name="fullname"/>
<input type="text" placeholder="NIC" name="nic"/>
<input type="text" placeholder="type" name="type"/>
<input type="submit" name="submit" value="enter"/>
</form>

@endsection