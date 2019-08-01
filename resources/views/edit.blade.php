@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Business</div>

                <div class="panel-body"> 

                  {!!Form::open(['action' => ['ListingsController@update',$listings->id],'method' => 'POST'])!!}
                    {!! csrf_field() !!}
                    {{Form::bstext('name',$listings->name,['placeholder' => 'Enter name'])}}
                    {{Form::bstextarea('address',$listings->address,['placeholder' => 'Enter address'])}}
                    {{Form::bstext('web',$listings->web,['placeholder' => 'Enter web'])}}
                    {{Form::bstext('phone',$listings->web,['placeholder' => 'Enter phone'])}}
                    {{Form::bstext('bio',$listings->bio,['placeholder' => 'Enter bio'])}}
                    {{Form::hidden('_method','PUT')}}
                    {{Form::bssubmit('Submit')}}

                  {!!Form::close()!!}
                           
                </div>
            </div>
        </div>
    </div>


@endsection