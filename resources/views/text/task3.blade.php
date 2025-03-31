@extends('_layout')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Propozycja pól w tabeli użytkowników (users)</h2>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Kolumna</th>
                <th>Typ danych</th>
                <th>Opis</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>user_id</td>
                <td>BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT</td>
                <td>Unikalny identyfikator użytkownika</td>
            </tr>
            <tr>
                <td>user_type</td>
                <td>ENUM('individual', 'company')</td>
                <td>Określa, czy to osoba fizyczna (individual), czy firma (company)</td>
            </tr>
            <tr>
                <td>user_name</td>
                <td>VARCHAR(255)</td>
                <td>Imię osoby fizycznej lub nazwa firmy</td>
            </tr>
            <tr>
                <td>user_email</td>
                <td>VARCHAR(255) UNIQUE</td>
                <td>Unikalny adres e-mail</td>
            </tr>
            <tr>
                <td>user_birth_date</td>
                <td>DATE NULLABLE</td>
                <td>Data urodzenia (tylko dla osób fizycznych)</td>
            </tr>
            <tr>
                <td>user_nip</td>
                <td>VARCHAR(10) NULLABLE UNIQUE</td>
                <td>NIP firmy (10 cyfr, tylko dla firm)</td>
            </tr>
            <tr>
                <td>created_at</td>
                <td>TIMESTAMP DEFAULT CURRENT_TIMESTAMP</td>
                <td>Data utworzenia</td>
            </tr>
            <tr>
                <td>updated_at</td>
                <td>TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP</td>
                <td>Data aktualizacji</td>
            </tr>
            </tbody>
        </table>

        <h2 class="mt-4">Metody weryfikacyjne</h2>
        <ul class="list-group">
            <li class="list-group-item"><strong>Unikanie redundancji danych:</strong>
                <ul>
                    <li>Adres e-mail musi być unikalny → klucz unikalny (UNIQUE).</li>
                    <li>NIP musi być unikalny → klucz unikalny (UNIQUE), tylko dla firm.</li>
                </ul>
            </li>
            <li class="list-group-item"><strong>Poprawność wprowadzanych danych:</strong>
                <ul>
                    <li>Adres e-mail → walidacja formatem email.</li>
                    <li>NIP → dokładnie 10 cyfr, tylko cyfry (regex:/^\d{10}$/).</li>
                    <li>Data urodzenia → nie może być w przyszłości (before_or_equal:today).</li>
                </ul>
            </li>
            <li class="list-group-item"><strong>Spójność danych:</strong>
                <ul>
                    <li>Osoby fizyczne (user_type = 'individual') muszą mieć user_birth_date, ale user_nip = NULL.</li>
                    <li>Firmy (user_type = 'company') muszą mieć user_nip, ale user_birth_date = NULL.</li>
                    <li>Brak wartości NULL w kluczowych polach (user_name, user_email).</li>
                </ul>
            </li>
            <li class="list-group-item"><strong>Indeksy dla optymalizacji zapytań:</strong>
                <ul>
                    <li>Indeks na user_email (UNIQUE) dla szybszego wyszukiwania.</li>
                    <li>Indeks na user_nip (UNIQUE) dla firm.</li>
                    <li>Indeks na user_type (częste filtrowanie po rodzaju użytkownika).</li>
                </ul>
            </li>
        </ul>

        <h2 class="mt-2">Dodatkowo</h2>
        Możemy za pomocą np. jQuery pokazywać bądź ukrywać pole NIP i odpowiednio walidować to w form request, na podstawie wybranego 'user_type'.<br>
    </div>
@endsection
