<style>
    .navbar {
        background-color: #282c34; /* Fondo oscuro */
        color: #61dafb; /* Texto de color azul claro */
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        font-family: "Comic Sans MS", cursive, sans-serif;
    }

    .nav-option {
        display: flex;
    }

    .nav-option a {
        margin: 0; /* Eliminar margen entre las opciones */
        padding: 8px 10px; /* Reducir el padding */
        border-radius: 0.5px;
        background-color: #61dafb; /* Fondo azul claro */
        color: #282c34; /* Texto oscuro */
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .nav-option a:hover,
    .nav-option a.active {
        background-color: #21a1f1; /* Azul más oscuro al pasar el mouse o activo */
        color: #ffffff; /* Texto blanco para contraste */
    }
</style>

<body>
    <div class="navbar">
        <div class="{{ setActivo('home') }}"><a href="{{ route('home') }}">Home</a></div>
        <div class="{{ setActivo('alumnos.create') }}"><a href="{{ route('alumnos.create') }}">Ingreso</a></div>
        <div class="{{ setActivo('alumnos') }}{{ setActivo('alumnos.show') }}{{ setActivo('alumnos.create') }}"><a href="{{ route('alumnos') }}">Listado</a></div>
    </div>
</body>
