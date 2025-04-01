<div class="container mt-5">
    <h2 class="mb-4">Analiza błędu [Failed to load resource: net::ERR_FAILED]</h2>

    <div class="card mb-4">
        <div class="card-header bg-danger text-white">
            <h3>Przyczyna błędu</h3>
        </div>
        <div class="card-body">
            <p>Błąd <strong>net::ERR_FAILED</strong> oznacza, że przeglądarka nie mogła załadować zasobu, takiego jak obraz, plik CSS, JavaScript lub inny zasób sieciowy. Przyczyny tego błędu mogą być różne, w tym problemy z siecią, błędna ścieżka do pliku, problemy z serwerem lub przeglądarką.</p>

            <h5>Możliwe przyczyny:</h5>
            <ul class="list-group">
                <li class="list-group-item">1. Niepoprawny URL do zasobu (np. literówka w ścieżce pliku)</li>
                <li class="list-group-item">2. Zasób nie istnieje na serwerze (np. brakujący plik)</li>
                <li class="list-group-item">3. Błędy sieciowe (np. problem z połączeniem z serwerem)</li>
                <li class="list-group-item">4. Problemy z CORS (Cross-Origin Resource Sharing)</li>
                <li class="list-group-item">5. Błędy po stronie serwera (np. brak dostępu do pliku lub niewłaściwe uprawnienia)</li>
                <li class="list-group-item">6. Problemy z przeglądarką (np. zablokowanie pliku lub cache)</li>
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
                <code>Sprawdź ścieżkę URL do zasobu i upewnij się, że zasób istnieje na serwerze.</code>
            </div>

            <h4 class="mt-4">Naprawa w zależności od przyczyny</h4>
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Jeśli URL jest niepoprawny:</strong>
                    <ul>
                        <li>Sprawdź i popraw ścieżkę do pliku, upewnij się, że nie ma literówek</li>
                        <li>Użyj narzędzi deweloperskich w przeglądarce, aby sprawdzić szczegóły błędu</li>
                    </ul>
                </li>
                <li class="list-group-item">
                    <strong>Jeśli zasób nie istnieje:</strong>
                    <ul>
                        <li>Upewnij się, że plik istnieje na serwerze w odpowiednim folderze</li>
                        <li>Jeśli brak pliku, wgraj go ponownie</li>
                    </ul>
                </li>
                <li class="list-group-item">
                    <strong>Jeśli problem z CORS:</strong>
                    <div class="bg-light p-3 mt-2 rounded">
                        <code>Ustaw odpowiednie nagłówki CORS na serwerze</code>
                    </div>
                </li>
                <li class="list-group-item">
                    <strong>Jeśli problem z uprawnieniami:</strong>
                    <div class="bg-light p-3 mt-2 rounded">
                        <code>Sprawdź i popraw uprawnienia do pliku lub katalogu na serwerze</code>
                    </div>
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
                <li class="list-group-item">Sprawdź ścieżki URL w aplikacji i upewnij się, że zasoby są dostępne</li>
                <li class="list-group-item">Używaj narzędzi deweloperskich w przeglądarce do debugowania błędów</li>
                <li class="list-group-item">Rozważ implementację logowania błędów, aby szybciej identyfikować brakujące zasoby</li>
            </ul>
        </div>
    </div>
</div>
