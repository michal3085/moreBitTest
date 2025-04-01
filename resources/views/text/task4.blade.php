@extends('_layout')

@section('content')
    <div class="container mt-5">
        <!-- Nawigacja tabów -->
        <ul class="nav nav-tabs" id="errorTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="tab-a" data-bs-toggle="tab" href="#content-a" role="tab" aria-controls="content-a" aria-selected="true">A</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-b" data-bs-toggle="tab" href="#content-b" role="tab" aria-controls="content-b" aria-selected="false">B</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-c" data-bs-toggle="tab" href="#content-c" role="tab" aria-controls="content-c" aria-selected="false">C</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-d" data-bs-toggle="tab" href="#content-d" role="tab" aria-controls="content-d" aria-selected="false">D</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-e" data-bs-toggle="tab" href="#content-e" role="tab" aria-controls="content-e" aria-selected="false">E</a>
            </li>
        </ul>

        <div class="tab-content mt-3">
            <!-- Tab A -->
            <div class="tab-pane fade show active" id="content-a" role="tabpanel" aria-labelledby="tab-a">
                @include('text.task4_components._answerA')
            </div>

            <!-- Puste taby B-E -->
            <div class="tab-pane fade" id="content-b" role="tabpanel" aria-labelledby="tab-b">
                @include('text.task4_components._answerB')
            </div>
            <div class="tab-pane fade" id="content-c" role="tabpanel" aria-labelledby="tab-c">
                <h2>Brak danych dla zakładki C</h2>
            </div>
            <div class="tab-pane fade" id="content-d" role="tabpanel" aria-labelledby="tab-d">
                <h2>Brak danych dla zakładki D</h2>
            </div>
            <div class="tab-pane fade" id="content-e" role="tabpanel" aria-labelledby="tab-e">
                <h2>Brak danych dla zakładki E</h2>
            </div>
        </div>
    </div>
@endsection
