Vous avez recu un email depuis {{env('APP_NAME')}} @if($file ?? false)> recrutement @else contact @endif
<p>
    Nom: {{ $nom }}
</p>
<p>
    Email: {{ $email }}
</p>
<p>
    Téléphone: {{ $telephone }}
</p>
<p>
    Message: {{ $formation_message }}
</p>
@if($formation ?? false)
    <p>
        Formation concernée : <a href="{{route('formation_slug',array('formation'=>$formation))}}"> {{ $formation }}</a>
    </p>
@endif
@if($date_choisie ?? false)
    <p>
        Date choisie : {{ $date_choisie }}
    </p>
@endif
@if($file ?? false)
    <p>
        CV : <a href="{{ URL::to('/').$file }}">{{ URL::to('/').$file }}</a>
    </p>
@endif