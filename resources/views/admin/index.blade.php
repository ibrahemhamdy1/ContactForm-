@extends('layouts.app')

@section('content')
<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>created_at</th>
        <th>created_at</th>
        <th>Edit</th>
        <th>Delete</th>

      </tr>
    </thead>
    <tbody>

        @foreach($customers as $customer)
        <tr>
        <td>{{$customer['id']}}</td>
        <td>{{$customer['name']}}</td>
        <td>{{$customer['email']}}</td>
        <td>{{$customer['message']}}</td>
        <td>{{$customer['created_at']}}</td>
        <td>{{$customer['updated_at']}}</td>
        <td><a href="{{url('admin/'.$customer['id'].'/edit')}}"><button type="button" name="button">Edit</button></a></td>
        <td>
                                     {!! Form::open(['method'=>'DELETE','action'=>['CustomerController@destroy',$customer->id]]) !!}
                                    {!! Form::submit('X',['class'=>'btn btn-denger']) !!}
                                    {!! Form::close() !!}

                                    </td>
          </tr>
        @endforeach




    </tbody>
  </table>
</div>

@endsection
