<h1>Ajouter un employer</h1>
<form method="POST" action="/employers" >
    @csrf
    <label for="nom_employer">Nom</label>
    <input id="nom_employer" type="text" name="Nom" value="{{old('Nom')}}">

    <label for="prénom_employer">Prénom</label>
    <input id="prénom_employer" type="text"  name="Prénom" value="{{old('Prénom')}}">

    <label for="age_employer">Age</label>
    <input id="age_employer" type="number" name="age" value="{{old('age')}}">

    <label for="code_employer">Code_employer</label>
    <input id="code_employer" type="number" name="code_employer" value="{{old('code_employer')}}">

    <button type="submit">Yeah envoyer !</button>
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
