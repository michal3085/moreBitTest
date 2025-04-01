<div class="container mt-5">
    <h2 class="mb-4">Analiza błędu [22P02]: Invalid input syntax for integer: "30B"</h2>

    <div class="card mb-4">
        <div class="card-header bg-danger text-white">
            <h3>Przyczyna błędu</h3>
        </div>
        <div class="card-body">
            <p>Błąd <strong>[22P02]</strong> występuje, ponieważ w zapytaniu SQL próbujesz przypisać wartość <strong>"30B"</strong> do kolumny, która oczekuje liczby całkowitej (integer). Baza danych nie może poprawnie przetworzyć wartości zawierającej litery.</p>

            <h5>Możliwe przyczyny:</h5>
            <ul class="list-group">
                <li class="list-group-item">1. Wartość zawiera nieprawidłowy znak (litery, znaki specjalne) w miejscu, gdzie oczekiwana jest liczba.</li>
                <li class="list-group-item">2. Wprowadzenie błędnych danych przez użytkownika (np. w formularzu).</li>
                <li class="list-group-item">3. Błąd w zapytaniu SQL, które przekazuje nieprawidłowe dane do bazy.</li>
                <li class="list-group-item">4. Złe przypisanie wartości po stronie Backend'u</li>
            </ul>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h3>Proponowane rozwiązania</h3>
        </div>
        <div class="card-body">
            <h4 class="mt-3">Weryfikacja problemu</h4>
            <div class="bg-light p-3 mb-3 rounded">
                <code>SELECT * FROM example_table WHERE example_id = '30B';</code>
            </div>

            <h4 class="mt-4">Naprawa w zależności od przyczyny</h4>
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Jeśli użytkownik wprowadził błędne dane:</strong>
                    <ul>
                        <li>Dodaj walidację na poziomie front-endu i back-endu, aby upewnić się, że dane są liczbami całkowitymi.</li>
                    </ul>
                </li>
                <li class="list-group-item">
                    <strong>Jeśli błąd wynika z zapytania SQL:</strong>
                    <ul>
                        <li>Upewnij się, że zapytanie przekazuje prawidłową wartość do kolumny oczekującej liczby całkowitej.</li>
                    </ul>
                </li>
                <li class="list-group-item">
                    <strong>Jeśli problem leży po stronie backendu:</strong>
                    <ul>
                        <li>Upewnij się, że dane są konwertowane lub walidowane przed zapisaniem do bazy danych.</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="card">
        <div class="card-header bg-success text-white">
            <h3>Zalecenia</h3>
        </div>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item">Sprawdź formularze i upewnij się, że użytkownicy nie wprowadzają nieprawidłowych danych (np. liter w polach liczbowych).</li>
                <li class="list-group-item">Zweryfikuj zapytania SQL, aby upewnić się, że dane są przekazywane w odpowiednim formacie.</li>
                <li class="list-group-item">Wprowadź mechanizm walidacji po stronie serwera w celu ochrony przed błędnymi danymi.</li>
            </ul>
        </div>
    </div>
</div>
