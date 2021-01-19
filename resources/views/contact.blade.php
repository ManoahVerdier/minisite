@extends('layouts.app')

@if($formation ?? false)
    @if($session)
        @section('title', env('APP_NAME').' - Inscription - '.$formation->titre)
    @else 
        @section('title', env('APP_NAME').' - Contact - '.$formation->titre)    
    @endif
@else
    @section('title', env('APP_NAME').' - Contact')
@endif

@if($formation ?? false)
    @if($session)
        @section('description', env('APP_NAME').' - Inscription - '.$formation->titre)
    @else 
        @section('description', env('APP_NAME').' - Contact - '.$formation->titre)
    @endif
@else
    @section('description', env('APP_NAME').' - Contact')
@endif

@section('captcha')
<script src="https://www.google.com/recaptcha/api.js"></script>
@endsection

@section('body-attr')
id="contact-page"
@endsection

{{-- Header --}}
@section('header')
    @include('layouts.partials.header.main')
    @include('layouts.partials.header.mobile')
@endsection


{{-- Content --}}
@section('content')
<section id="formation-detail">
    <div class="container py-4">
        <h1 class="w-100 text-center blue mb-4">Nous contacter</h1>
        <p>
            Vous souhaitez un renseignement ? un devis ? ou tout simplement parler à un consultant. 
            N’hésitez pas à nous joindre par téléphone ou remplissez ce formulaire pour être recontacté immédiatement.
        </p>
        <div class="row">

            <div class="col-12 col-md-6 offset-md-3">
                @if($success ?? false)
                <div class="alert alert-success">
                    {!!$success!!}
                </div>
                @endif

                {!! Form::open(['route'=>'contact.store']) !!}
                <div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                    {!! Form::text('nom', old('nom'), ['class'=>'form-control', 'placeholder'=>'Nom']) !!}
                    <span class="text-danger">{{ $errors->first('nom') }}</span>
                </div>

                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Email']) !!}
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>

                <div class="form-group {{ $errors->has('telephone') ? 'has-error' : '' }}">
                    {!! Form::text('telephone', old('telephone'), ['class'=>'form-control', 'placeholder'=>'Téléphone']) !!}
                    <span class="text-danger">{{ $errors->first('telephone') }}</span>
                </div>

                <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                    {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Message']) !!}
                    <span class="text-danger">{{ $errors->first('message') }}</span>
                </div>

                @if($formation ?? false)
                    @if($session)
                        <label for="session">Choix de la session :</label>
                        {!!Form::select('session', explode(',',$formation->sessions))!!}
                    @endif
                    {!! Form::hidden('formation_id', $formation->id, ['class'=>'form-control', 'placeholder'=>'Formation']) !!}
                @endif
                <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                    <div class="px-0 offset-md-3 col-md-6 pull-center text-center">
                        {!! app('captcha')->display() !!}
                        @if ($errors->has('g-recaptcha-response'))
                            <span class="text-danger">
                                {{ $errors->first('g-recaptcha-response') }}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-blue">Envoyer</button>
                </div>
                
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
{!! NoCaptcha::renderJs() !!}
@endsection

{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection