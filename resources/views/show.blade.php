@extends('layout')
@section('content')
<h3>detaille ETUDIANTS</h3>
<table>
    <tr>
        <td>
            <p><b class="lbl">IDS</b>{{$students->IDS}}</p>
            <p><b class="lbl">NOM</b>{{$students->NOM}}</p>
            <p><b class="lbl">ADRESSE</b>{{$students->ADRESSE}}</p>
            <p><b class="lbl">PHONE</b>{{$students->EMAIL}}</p>
            <p><b class="lbl">PARCOURS</b>{{$students-PARCOURS}}</p>
            <p><b class="lbl">EMAIL</b>{{$students->PHONE}}</p>
            <p><b class="lbl">IMAGE</b>{{$students->IMAGE}}</p>
        </td>
    </tr>
</table>
@endsection