@extends('layout')
@section('content')
<h3>AJOUTER ETUDIANT</h3>
<form action="{{root('student.store')" method="POST" enctype="multipart/form-data"> 
    @csrf
<div class="form-group">
<label for="name">IDS:</label>
<input type="text" class="form-controle" name="id">
</div>

<div class="form-group">
<label for="name">NOM:</label>
<input type="text" class="form-controle" name="nom">
</div>

<div class="form-group">
<label for="name">ADRESSE:</label>
<input type="text" class="form-controle" name="adresse">
</div>

<div class="form-group">
<label for="name">PHONE:</label>
<input type="text" class="form-controle" name="phone">
</div>

<div class="form-group">
<label for="name">EMAIL:</label>
<input type="text" class="form-controle" name="email">
</div>

<div class="form-group">
<label for="name">PARCOURS:</label>
<input type="text" class="form-controle" name="parcours">
</div>

<div class="form-group">
<label for="name">IMAGE:</label>
<input type="file" class="form-controle" name="image">
</div>

<button type="submit" class="btn btn-primary">AJOUTER</button>

</form>


@endsection