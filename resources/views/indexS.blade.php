@extends('layout')
@section('content')
<h3>LISTES ETUDIANTS</h3>
<div class="table-wrapper">
<table class="fl-table">
<thead>
    <tr>
        <th>IdS</th>
        <th>NOM</th>
        <th>ADRESSE</th>
        <th>PHONE</th>
        <th>EMAIL</th>
        <th>PARCOURS</th>
        <th>IMAGE</th>
        <th>MODIFIER</th>
        <th>SUPPRIMER</th>
    </tr>
</thead>
<tbody>
    @foreach($student as $student)
    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->nom}}</td>
        <td>{{$student->adresse}}</td>
        <td>{{$student->phone}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->parcours}}</td>
        <td>{{$student->image}}</td>
        <td>
            <form  method="POST">
                <a class="btn btn-info" href="{route{'student.show',student->id}}">AFFICHER</a>
            </form>
        </td>
        <td>
            <form  method="POST">
                <a class="btn btn-info" href="{route{'student.edit',student->id}}">MODIFFIER</a>
            </form>
        </td>
        <td>
            <form  method="POST">
                <a class="btn btn-primary" href="{route{'student.delete',student->id}}">SUPPRIMER</a>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
@endsection