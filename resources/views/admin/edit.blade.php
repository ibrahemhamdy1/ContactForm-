@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
              {!!Form::model($message,array( 'method' => 'PATCH','action'=>['CustomerController@update',$message->id]))!!}
              @include('admin.form')
              {!!Form::close()!!}
              <!-- The  end our Form -->
            </div>
        </div>
    </div>
</div>
@endsection
