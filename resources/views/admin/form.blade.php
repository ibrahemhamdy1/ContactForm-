
              <!-- Here WE Start our Form -->
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>

                            {!!Form::text('name', null,array('class'=>'validate form-control','id'=>'name',"placeholder">="Enter name"))!!}
 {{ csrf_field() }}
                            {{ $errors->login->first('name') }}



                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address
                            </label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                {!!Form::text('email', null,array('class'=>'validate form-control','id'=>'email',"placeholder">="Enter your email"))!!}

                                {{ $errors->login->first('email') }}
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 text-center">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <!-- <textarea name="message" id="message" class="form-control" rows="9" cols="25" -->
                                <!-- placeholder="Message"></textarea> -->
                                {!!Form::textarea('message', null,array('class'=>'validate form-control','id'=>'message',"placeholder">="Enter your message"))!!}

                                {{ $errors->login->first('message') }}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
