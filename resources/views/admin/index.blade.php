@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>
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
        <td><button type="button" name="button">Delete</button></td>

          </tr>
        @endforeach




    </tbody>
  </table>
</div>

@endsection
