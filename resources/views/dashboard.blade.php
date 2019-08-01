@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard 
                
                <span  class="pull-right">
                    <a href="/listings/create" class="btn btn-sm btn-success">Create Listing</a> 
                </span>
                </div> 

                <div class="panel-body">
                   @if(count($listings))
                        <table class="table table-stripped">
                            <tr>
                                <th>company</th>
                                <th>action</th>
                            </tr>
                            @foreach($listings as $listing)
                            <tr>
                                <td>{{$listing->name}}</td>
                                <td>
                                <a href="/listings/{{$listing->id}}/edit" class="btn btn-danger">Edit</a>&nbsp;
                                {!! Form::open(['action'=>['ListingsController@destroy',$listing->id],'method'=>'POST']) !!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::bssubmit('Delete',['class'=>'btn btn-danger'])}}
                                {!!Form::close() !!}

                               
                                </td>
                            </tr>
                            @endforeach
                        
                        </table>
                   @endif                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
