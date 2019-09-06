@extends('layouts.app')

@section('content')

<h3>details</h3>

<strong>First name</strong> {{$doctors->fullname}}<br>

<strong>NIC</strong> {{$doctors->nic}}<br>

<strong>Type</strong> {{$doctors->type}}<br>

<a href="{{ route('doctor.index')}}" class="btn btn-sm btn-success">Back</a>


@endsection