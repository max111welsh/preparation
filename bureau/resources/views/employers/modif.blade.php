<h1>Modifier un employer</h1>
<form action="/employers/{{$employer->id}}" method="POST">
    @method('PUT')
    @csrf


    <label for="nom_employer">Nom</label>
    <input id="nom_employer" type="text" name="Nom" value="{{$employer->Nom}}">

    <label for="prénom_employer">Prénom</label>
    <input id="prénom_employer" type="text" name="Prénom" value="{{$employer->Prénom}}">

    <label for="age_employer">Age</label>
    <input id="age_employer" type="number" name="age" value="{{$employer->age}}">

    <label for="code_employer">Code_employer</label>
    <input id="code_employer" type="number" name="code_employer" value="{{$employer->code_employer}}">



    <button type="submit" class="btn btn-primary">Yeah envoyer !</button>
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
