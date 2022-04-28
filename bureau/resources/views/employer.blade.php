<h1>route d'un employer</h1>
<ul>

        <li>{{$employer->id}}</li>
        <li>{{$employer->Nom}}</li>
        <li>{{$employer->Prénom}}</li>
        <li>{{$employer->code_employer}}</li>

</ul>
<a href="/employers/{{$employer->id}}/edit" class="btn btn-primary">Modifier</a>
