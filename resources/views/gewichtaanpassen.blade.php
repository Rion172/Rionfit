@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark">
                   <font color="white">Welkom, {{ $user->name }}</font>
                </div>

                <div class="card-body bg-dark">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    					<font color="white"><div class="form-group">
                            <h3>Vul hier je gewicht in als die is veranderd</h3>
                                {!! Form::open(array( 'route' => 'gewichten')) !!}
                                @csrf
                         		@method('PUT')

                                {{Form::label('userweight', 'Gewicht')}}
                                {{Form::text('userweight','')}}
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