@extends('layout')

@section('title','Alumno | ' . $alumno->nombre_alumno)

@section('content')
<tr>
    <td colspan="4"><strong>Nombre:</strong> {{ $alumno->nombre_alumno}}</td>
</tr>
<tr>
    <td colspan="4"><strong>Curso:</strong> {{ $alumno->curso}}</td>
</tr>
<tr>
    <td colspan="4"><strong>Nota 1:</strong> {{ $alumno->nota_1_alumno}}</td>
</tr>
<tr>
    <td colspan="4"><strong>Nota 2:</strong> {{ $alumno->nota_2_alumno}}</td>
</tr>
<tr>
    <td colspan="4"><strong>Promedio:</strong> {{ $alumno->promedio_alumno}}</td>
</tr>
<tr>
    <td colspan="4"><strong>Condición:</strong> {{ $alumno->condicion_alumno}}</td>
</tr>
<tr>
    <td colspan="4"><strong>Registrado:</strong> {{ $alumno->created_at->diffForHumans() }}</td>
</tr>
@endsection
