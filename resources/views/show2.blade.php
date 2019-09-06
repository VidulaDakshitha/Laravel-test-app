@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h3>Sample</h3>


        </div>
        <div class="col-sm-2">

        <a class="btn btn-sm btn-success" href="{{ route('doctor.create')}}">create new doctor</a>
        </div>


    </div>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
        <p>{{$message}}</p>
        </div>

    @endif

    <table class="table table-hover table-sm">
        <tr>
            <th width="50px"><b>No</b></th>
            <th width="200px"><b>full Name</b></th>
            <th width="200px"><b>NIC</b></th>
            <th width="200px"><b>type</b></th>
            <th width="180px"><b>Action</b></th>
        </tr>

        @foreach ($doctors as $doctor)

            <tr>
            <td>{{++$i}}</td>
            <td>{{$doctor->fullname}}</td>
            <td>{{$doctor->nic}}</td>
            <td>{{$doctor->type}}</td>
            <td>
            <form action= "{{ route('doctor.destroy', $doctor->id) }}" method="POST">

            <a class="btn btn-sm btn-success" href="{{ route('doctor.show', $doctor->id)}}">show</a>
            <a class="btn btn-sm btn-warning" href="{{ route('doctor.edit', $doctor->id)}}">edit</a> 

             @csrf
             @method('DELETE')
             
             <button type="submit" class="btn btn-sm btn-danger">Delete</button>


                </form>
                

            </td>

            </tr>
        @endforeach


    </table>

    {!! $doctors->links()!!}


</div>

{{-- <form action="/send" method="post">

    <input type="text" name="find" value="enter"/>
    <input type="submit" name="submit" value"searchit" />

</form> --}}

@endsection