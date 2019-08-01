@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Business</div>

                <div class="panel-body">

                  {!!Form::open(['action' => 'ListingsController@store','method' => 'POST'])!!}
                    {!! csrf_field() !!}
                    {{Form::bstext('name','',['placeholder' => 'Enter name'])}}
                    {{Form::bstextarea('address','',['placeholder' => 'Enter address'])}}
                    {{Form::bstext('web','',['placeholder' => 'Enter web'])}}
                    {{Form::bstext('phone','',['placeholder' => 'Enter phone'])}}
                    {{Form::bstext('bio','',['placeholder' => 'Enter bio'])}}
                    {{Form::bssubmit('Submit')}}

                  {!!Form::close()!!}
                           
                </div>
            </div>
        </div>
    </div>


@endsection