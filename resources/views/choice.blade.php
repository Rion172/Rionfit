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
                    
                   <font color="white"><h4>{{ 'Dit zijn je gegevens!' }}</h4></font>
                    <hr>
                    <div class="form-group">

                     <font color="white">{{ "je start gewicht is ".$user->weight." KG" }}
                     <br>
                     {{ "je lengte is ".$user->height." M" }}
                     <br>
                     <br>
                     {{ $user->days." training dagen"}}
                     <br>
                     <br>

                     <a class="btn btn-outline-success" 

                     @if($user->musclebuilding === 1)

                     href="{{asset('musclebuilding')}}"

                     @else

                     href="{{asset('weightloss')}}"

                     @endif

                     role="button">Training Schema</a>

                     <a class="btn btn-primary" href="{{asset('gewichtaanpassen')}}" role="button">Gewicht toevoegen</a>
                    </div>
                </div>
                {!! $chart->container() !!}
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js"></script>
{!! $chart->script() !!}
@endsection
