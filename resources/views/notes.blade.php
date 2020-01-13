@extends('layout')

@section('title', 'Listado de notas')

@section('content')
    <main class="content">
        <div class="cards">
            @forelse($notes as $note)
                <div class="card card-small">
                    <div class="card-body">
                        <h4>{{ $note->title }}</h4>

                        <p>
                            {!! $note->content !!} {{-- @todo: Purify HTML or use Markdown instead! --}}
                        </p>
                    </div>

                    <footer class="card-footer">
                        <a href="{{ route('notes.edit', ['id' => $note->id]) }}" class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>
            @empty
                <p>No hay notas disponibles en este momento <a href="#">Agrega una?</a></p>
            @endforelse
        </div>
    </main>
@endsection
