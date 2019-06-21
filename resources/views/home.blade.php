@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark"><font color="white">Welkom, {{ auth()->user()->name }}</font></div>

                <div class="card-body bg-dark">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <font color="white"><h3>Wat is je fitness doel?<hr></h3>
                    {!! Form::open(['action' => 'UserController@update', 'method' => 'post']) !!}
                         @csrf
                         @method('PUT')


                        <div class="form-group">
                            {{Form::label('musclebuilding', 'Muscle Building')}}
                            {{Form::radio('musclebuilding', 1)}}
                        </div>
                        <div class="form-group">
                            {{Form::label('weight_loss', 'Losing Weight')}}
                            {{Form::radio('weight_loss', 1)}}
                        </div>
                        <div class="form-group">
                        <h3>Hoeveel dagen wil je trainen?<hr></h3>
                            {{Form::label('days', 'Dagen')}}
                            {{Form::select('days',[ 0,1,2,3,4,5,6,7])}}
                        </div>
                        {{Form::hidden('_method', 'POST')}}
                        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!}
                    </font>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
