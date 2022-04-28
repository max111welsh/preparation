<h1>route des employers</h1>
<ul>
    @foreach($employers as $employer)
        <li><a href="/employers/{{$employer->id}}">{{$employer->Nom}}</a></li>
    @endforeach
</ul>
<a class="btn btn-primary" href="/employers/create">Ajouter</a>
@if(session('succes'))
    <p class="alert alert-success" role="alert">
        {{session('succes')}}
    </p>
@endif







