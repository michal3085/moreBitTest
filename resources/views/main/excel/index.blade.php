@extends('main._layout')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Konwersja Komórki Excel</h2>

        <form action="{{ route('excel.convert') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="cell" class="form-label">Podaj komórkę (np. A1, B2, AA10)</label>
                <input type="text" class="form-control" id="cell" name="cell" required>
            </div>

            <button type="submit" class="btn btn-primary">Konwertuj</button>
        </form>

        @if (isset($result))
            <div class="alert alert-success mt-3">
                Wartość: <strong>{{ $result }}</strong>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger mt-3">
                {{ session('error') }}
            </div>
        @endif
    </div>
@endsection
