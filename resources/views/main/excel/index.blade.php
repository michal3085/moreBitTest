@extends('_layout')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Konwersja Komórki Excel</h2>

        <form action="{{ route('excel.convert') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="cell" class="form-label">Podaj komórkę (np. A1, B2, AA10)</label>
                <input type="text" class="form-control" id="cell" name="cell" value="{{ old('cell') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Konwertuj</button>
        </form>

        @if (session('result'))
            <div class="alert alert-success mt-3">
                Wartość: <strong>{{ session('result') }}</strong>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
