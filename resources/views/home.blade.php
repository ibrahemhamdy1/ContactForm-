@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
              <!-- Here WE Start our Form -->
            {!!Form::open(array('url' => '/form', 'method' => 'POST'))!!}
                <div class="row">
                    {{ csrf_field() }}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>

                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required="required" />
                            {{ $errors->login->first('name') }}



                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address
                            </label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email"  name="email" placeholder="Enter email" required="required" />
                                {{ $errors->login->first('email') }}
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 text-center">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25"
                                placeholder="Message"></textarea>
                                {{ $errors->login->first('message') }}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
                {!!Form::close()!!}
                <!-- The  end our Form -->

            </div>
        </div>

    </div>
</div>

@endsection
