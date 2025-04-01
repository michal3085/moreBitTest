<div class="container mt-5">
    <h2 class="mb-4">[25-Nov-2022 15:05:2022 Europe/Warsaw] Export danych do Sage ERP FK -1</h2>

    <div class="card mb-4">
        <div class="card-header bg-danger text-white">
            <h3>Przyczyna błędu</h3>
        </div>
        <div class="card-body">
            <p>Błąd <strong>[FK -1]</strong> oznacza problem związany z eksportem danych do systemu Sage ERP. Może on wynikać z wielu różnych czynników, w tym problemów z danymi lub konfiguracją systemu zewnętrznego.</p>

            <h5>Możliwe przyczyny:</h5>
            <ul class="list-group">
                <li class="list-group-item">1. Brakujące lub niepoprawne dane w bazie danych (np. brakujące rekordy lub niewłaściwe formatowanie danych).</li>
                <li class="list-group-item">2. Błąd w konfiguracji eksportu (np. błędne mapowanie pól między aplikacją a systemem Sage ERP).</li>
                <li class="list-group-item">3. Problemy z połączeniem lub autoryzacją do systemu Sage ERP (np. błędne dane logowania, wygaśnięcie sesji, zmiany w API).</li>
                <li class="list-group-item">4. Nieprawidłowe ustawienia eksportu lub błędy w konfiguracji eksportu w aplikacji (np. brak wymaganych parametrów lub niewłaściwy format danych).</li>
                <li class="list-group-item">5. Problemy z kompatybilnością wersji aplikacji i Sage ERP (np. zmiany w API lub różnice w wymaganiach systemowych).</li>
            </ul>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h3>Proponowane rozwiązania</h3>
        </div>
        <div class="card-body">
            <h4 class="mt-4">Naprawa w zależności od przyczyny</h4>
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Jeśli problem wynika z brakujących danych:</strong>
                    <ul>
                        <li>Upewnij się, że wszystkie wymagane dane są dostępne i poprawnie wprowadzone w bazie danych.</li>
                        <li>Przeprowadź walidację danych przed eksportem.</li>
                    </ul>
                </li>
                <li class="list-group-item">
                    <strong>Jeśli problem leży po stronie konfiguracji eksportu:</strong>
                    <ul>
                        <li>Sprawdź mapowanie pól między aplikacją a Sage ERP i upewnij się, że wszystkie wymagane pola są prawidłowo przypisane.</li>
                    </ul>
                </li>
                <li class="list-group-item">
                    <strong>Jeśli problem dotyczy połączenia z systemem Sage ERP:</strong>
                    <div class="bg-light p-3 mt-2 rounded">
                    </div>
                    <ul>
                        <li>Sprawdź dane logowania i konfigurację API (np. tokeny, klucze API).</li>
                        <li>Upewnij się, że masz dostęp do internetu i że system Sage ERP jest dostępny.</li>
                    </ul>
                </li>
                <li class="list-group-item">
                    <strong>Jeśli wystąpił błąd w konfiguracji eksportu:</strong>
                    <ul>
                        <li>Upewnij się, że wszystkie wymagane parametry są ustawione poprawnie.</li>
                        <li>Sprawdź dokumentację eksportu danych i sprawdź, czy wszystkie dane spełniają wymagania systemu Sage ERP.</li>
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
                <li class="list-group-item">Przeprowadź testy połączenia z systemem Sage ERP i sprawdź, czy połączenie jest stabilne i prawidłowe.</li>
                <li class="list-group-item">Weryfikuj poprawność mapowania pól przed rozpoczęciem eksportu danych.</li>
                <li class="list-group-item">Użyj mechanizmów logowania, aby monitorować proces eksportu i zapisywać szczegóły dotyczące błędów eksportu.</li>
                <li class="list-group-item">Zaktualizuj aplikację i dokumentację do najnowszych wersji kompatybilnych z systemem Sage ERP.</li>
            </ul>
        </div>
    </div>
</div>
