@extends ('layouts.admin_master')
@section('content')
<div id="page-wrapper">
              <div class="row">
                            <div class="col-lg-12">
                                          <h3 class="page-header">All Book</h3>
                            </div>
              </div>
              <div class="row">
              <div class="col-md-12">
              {{ Form::open(array('url' => URL::current() ,  'method' => 'POST','files' => 'true')) }}
                                          <div class="form-group">
                                                        @foreach($errors->get('bookname') as $error )
                                                                      <div class="alert alert-danger">
                                                                                    {{ $error }}
                                                                      </div>
                                                        @endforeach
                                                        {{ Form::text('bookname', Input::old('bookname') , array('class' => 'form-control', 'placeholder' => 'Book Name')) }}
                                          </div>              
                                          <div class="form-group">
                                                        @foreach($errors->get('description') as $error )
                                                        <div class="alert alert-danger">
                                                                      {{ $error }}
                                                        </div>        
                                                        @endforeach
                                                        {{ Form::textarea('description', null , array('class' => 'form-control', 'placeholder' => 'Description','id' =>'ckeditor')) }} 
                                          </div>              
                                          <div class="form-group">
                                                        @foreach($errors->get('author') as $error )
                                                        <div class="alert alert-danger">
                                                                     {{ $error }}
                                                        </div>
                                                        @endforeach
                                                        {{ Form::text('author', null , array('class' => 'form-control', 'placeholder' => 'Author')) }} 
                                          </div>      
                                          <div class="form-group">
                                                        @foreach($errors->get('price') as $error )
                                                        <div class="alert alert-danger">
                                                                      {{ $error }}
                                                        </div>
                                                        @endforeach
                                                        {{ Form::text('price', null , array('class' => 'form-control', 'placeholder' => 'price')) }} 
                                          </div>          
                                          <div class="form-group">
                                                        @foreach($errors->get('publisher') as $error )
                                                        <div class="alert alert-danger">
                                                                      {{ $error }}
                                                        </div>
                                                        @endforeach
                                                        {{ Form::text('publisher', null , array('class' => 'form-control', 'placeholder' => 'Publisher')) }} 
                                          </div>             
                                          <div class="form-group">
                                                        {{ Form::file('file' , null , array('class' => 'form-control'))}}
                                          </div>
                                          <div class="form-group">
                                                        {{ Form::submit('Submit' , array('class' => 'btn btn-primary btn-block btn-lg' ))}}
                                          </div>   
                                   {{ Form::close() }}
              </div>
              </div>   
</div>
@stop




