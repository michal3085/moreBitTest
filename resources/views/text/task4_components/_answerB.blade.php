<div class="container mt-5">
    <h2 class="mb-4">Analiza błędu: "Nie można wypisać wniosku na dzień, w którym nie ma zatrudnienia"</h2>

    <div class="card mb-4">
        <div class="card-header bg-danger text-white">
            <h3>Przyczyna błędu</h3>
        </div>
        <div class="card-body">
            <p>Ten błąd występuje, gdy użytkownik próbuje złożyć wniosek na okres, w którym nie był zatrudniony.</p>

            <h5>Możliwe przyczyny:</h5>
            <ul class="list-group">
                <li class="list-group-item">1. Data początkowa lub końcowa wniosku wypada poza okresem zatrudnienia</li>
                <li class="list-group-item">2. Użytkownik nigdy nie był zatrudniony, ale próbuje złożyć wniosek</li>
                <li class="list-group-item">3. Wystąpił błąd w systemie pobierania danych o zatrudnieniu</li>
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
                <code>SELECT start_date, end_date FROM employment WHERE user_id = ?;</code>
            </div>

            <h4 class="mt-4">Naprawa w zależności od przyczyny</h4>
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Jeśli data wniosku jest poza okresem zatrudnienia:</strong>
                    <ul>
                        <li>Użytkownik powinien wybrać poprawny zakres dat</li>
                        <li>Można dodać podpowiedź z okresem zatrudnienia</li>
                    </ul>
                </li>
                <li class="list-group-item">
                    <strong>Jeśli użytkownik nigdy nie był zatrudniony:</strong>
                    <ul>
                        <li>Zablokować możliwość składania wniosków</li>
                        <li>Wyświetlić bardziej szczegółowy komunikat błędu</li>
                    </ul>
                </li>
                <li class="list-group-item">
                    <strong>Jeśli problem wynika z błędu w bazie danych:</strong>
                    <div class="bg-light p-3 mt-2 rounded">
                        <code>SELECT * FROM employment WHERE employee_id = ? AND NOW() BETWEEN employment_date AND employment_date;</code>
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
                <li class="list-group-item">Dodanie walidacji na frontendzie, aby uniemożliwić wybór dat spoza zatrudnienia</li>
                <li class="list-group-item">Wyświetlenie okresu zatrudnienia obok pól daty</li>
                <li class="list-group-item">Sprawdzenie integralności danych w bazie</li>
            </ul>
        </div>
    </div>
</div>
