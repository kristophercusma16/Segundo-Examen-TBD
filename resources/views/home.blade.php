@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="container">
        <h2 class="mt-4">Bienvenido a la Página de Inicio</h2>
        <p class="lead">Esta es la página principal de nuestro sitio. Aquí encontrarás la información del estudiante que realizó el examen: KRISTOPHER LEONARDO CUSMA CARDOSO.</p>
        
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sección 1</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Contenido de ejemplo para la sección 1. Puedes personalizar este texto según tus necesidades.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sección 2</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Contenido de ejemplo para la sección 2. Puedes personalizar este texto según tus necesidades.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sección 3</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Contenido de ejemplo para la sección 3. Puedes personalizar este texto según tus necesidades.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection