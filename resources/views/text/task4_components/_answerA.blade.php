<div class="container mt-5">
    <h2 class="mb-4">Analiza błędu [42P01]: relacja "cregister.creg" nie istnieje</h2>

    <div class="card mb-4">
        <div class="card-header bg-danger text-white">
            <h3>Przyczyna błędu</h3>
        </div>
        <div class="card-body">
            <p>Kod błędu <strong>[42P01]</strong> wskazuje na brakującą tabelę (relację) w bazie danych. System zgłasza, że nie może znaleźć tabeli o nazwie "creg" w schemacie "cregister".</p>

            <h5>Możliwe przyczyny:</h5>
            <ul class="list-group">
                <li class="list-group-item">1. Tabela "creg" nigdy nie została utworzona w schemacie "cregister"</li>
                <li class="list-group-item">2. Wystąpił błąd w nazwie (literówka lub niewłaściwa wielkość liter)</li>
                <li class="list-group-item">3. Schemat "cregister" nie istnieje</li>
                <li class="list-group-item">4. Brak uprawnień do dostępu do tej tabeli</li>
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
                <code>SELECT * FROM information_schema.tables
                    WHERE table_schema = 'cregister' AND table_name = 'creg';</code>
            </div>

            <h4 class="mt-4">Naprawa w zależności od przyczyny</h4>
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Jeśli tabela nie istnieje:</strong>
                    <ul>
                        <li>Utwórz brakującą tabelę zgodnie z wymaganiami</li>
                        <li>Przywróć z kopii zapasowej</li>
                    </ul>
                </li>
                <li class="list-group-item">
                    <strong>Jeśli jest literówka:</strong>
                    <ul>
                        <li>Popraw nazwę tabeli w zapytaniu SQL</li>
                    </ul>
                </li>
                <li class="list-group-item">
                    <strong>Jeśli problem z uprawnieniami:</strong>
                    <div class="bg-light p-3 mt-2 rounded">
                        <code>GRANT SELECT ON cregister.creg TO current_user;</code>
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
                <li class="list-group-item">Sprawdź skrypty migracji bazy danych</li>
                <li class="list-group-item">Zweryfikuj nazwy schematu i tabeli w aplikacji</li>
                <li class="list-group-item">Rozważ mechanizm weryfikacji struktury bazy przy starcie aplikacji</li>
            </ul>
        </div>
    </div>
</div>
