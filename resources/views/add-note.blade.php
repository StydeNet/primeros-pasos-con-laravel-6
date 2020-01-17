@extends('layout')

@section('title', 'Crea una nota')

@section('content')
    <main class="content">
        <div class="cards">
            <div class="card card-center">
                <div class="card-body">
                    <h1>Nueva nota</h1>

                    @if ($errors->any())
                        <div class="errors">
                            <p><strong>Por favor corrige los siguientes errores:</strong></p>

                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ url('notas') }}">
                        @csrf

                        <label for="title" class="field-label">Título: </label>
                        <input type="text" name="title" value="{{ old('title') }}" id="title" class="field-input @error('title') field-error @enderror">
                        @error('title')
                            <p class="error-message">{{ $message }}</p>
                        @enderror

                        <label for="content" class="field-label">Contenido:</label>
                        <textarea name="content" id="content" rows="10" class="field-textarea @error('content') field-error @enderror">{{ old('content') }}</textarea>
                        @error('content')
                        <p class="error-message">{{ $message }}</p>
                        @enderror

                        <button type="submit" class="btn btn-primary">Crear nota</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
