            {{ Form::open(array('url' => 'upload' , 'files' => 'true')) }}  
                    {{ Form::file('file') }}
                    {{ Form::submit('Submit') }}
            {{ Form::close() }}
