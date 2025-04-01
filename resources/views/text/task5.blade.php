@extends('_layout')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Obieg Dokumentu Wychodzącego</h2>

        <!-- Dodanie stylów i skryptów dla highlight.js -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/atom-one-dark.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
        <script>hljs.highlightAll();</script>

        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                <h3>1. Wyszczególnienie Aktorów</h3>
            </div>
            <div class="card-body">
                <p>W procesie obiegu pisma wychodzącego biorą udział następujące osoby:</p>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Pracownik (Inicjator dokumentu):</strong> Osoba, która rozpoczyna proces wysyłki pisma wychodzącego. Może przesłać pismo do akceptacji przez Kierownika.</li>
                    <li class="list-group-item"><strong>Kierownik:</strong> Odpowiedzialny za akceptację pisma wychodzącego. Jeśli jest dostępny, akceptuje pismo. Jeśli jest na urlopie, akceptację przejmuje jego zastępca.</li>
                    <li class="list-group-item"><strong>Dyrektor:</strong> Odpowiedzialny za zatwierdzenie pisma wychodzącego. Jeśli jest dostępny, zatwierdza pismo. Jeśli jest na urlopie, zatwierdzenie przejmuje jego zastępca.</li>
                    <li class="list-group-item"><strong>Zastępca Kierownika:</strong> Osoba pełniąca rolę Kierownika, gdy ten jest na urlopie.</li>
                    <li class="list-group-item"><strong>Zastępca Dyrektora:</strong> Osoba pełniąca rolę Dyrektora, gdy ten jest na urlopie.</li>
                </ul>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                <h3>2. Zamodelowanie Obiegu Dokumentu</h3>
            </div>
            <div class="card-body">
                <p>Obieg dokumentu można przedstawić w następujący sposób:</p>
                <ul class="list-group">
                    <li class="list-group-item">Pismo wychodzące generowane przez pracownika.</li>
                    <li class="list-group-item">Pismo wysyłane do Akceptacji Kierownika.</li>
                    <li class="list-group-item">Kierownik akceptuje pismo, jeśli jest dostępny; w przeciwnym razie Zastępca Kierownika je akceptuje.</li>
                    <li class="list-group-item">Po akceptacji przez Kierownika, pismo trafia do Zatwierdzenia przez Dyrektora.</li>
                    <li class="list-group-item">Dyrektor zatwierdza pismo, jeśli jest dostępny; w przeciwnym razie Zastępca Dyrektora je zatwierdza.</li>
                    <li class="list-group-item">Pismo zostało wysłane.</li>
                </ul>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                <h3>3. Struktura Bazy Danych</h3>
            </div>
            <div class="card-body">
                <h4 class="mt-3">Users</h4>
                <pre><code class="language-sql bg-black" style="border-radius: 15px;">
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    role VARCHAR(50) NOT NULL,
    is_on_vacation BOOLEAN DEFAULT FALSE
);
                </code></pre>

                <h4 class="mt-4">Documents</h4>
                <pre><code class="language-sql bg-black" style="border-radius: 15px;">
CREATE TABLE documents (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    status VARCHAR(50) NOT NULL,
    created_by INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (created_by) REFERENCES users(id)
);
                </code></pre>

                <h4 class="mt-4">Approvals</h4>
                <pre><code class="language-sql bg-black" style="border-radius: 15px;">
CREATE TABLE approvals (
    id INT PRIMARY KEY AUTO_INCREMENT,
    document_id INT,
    user_id INT,
    action VARCHAR(50), -- 'approved' or 'rejected'
    approval_type VARCHAR(50), -- 'manager' or 'director'
    approved_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    is_substitute BOOLEAN DEFAULT FALSE, -- Jeżeli akceptacja została dokonana przez zastępcę
    FOREIGN KEY (document_id) REFERENCES documents(id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);
                </code></pre>

                <h4 class="mt-4">Substitutes</h4>
                <pre><code class="language-sql bg-black" style="border-radius: 15px;">
CREATE TABLE substitutes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT, -- Kierownik lub Dyrektor
    substitute_id INT, -- Zastępca
    start_date DATE,
    end_date DATE,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (substitute_id) REFERENCES users(id)
);
                </code></pre>
            </div>
        </div>

        <div class="card">
            <div class="card-header bg-success text-white">
                <h3>4. Przykład Kodu PHP (Procesowanie Pisma Wychodzącego)</h3>
            </div>
            <div class="card-body">
                <p>Poniżej znajduje się przykład kodu PHP, który pokazuje procesowanie pisma wychodzącego:</p>
                <pre><code class="language-php bg-black" style="border-radius: 15px;">
&lt;?php
class DocumentFlow {
    protected $document;
    protected $employee;
    protected $manager;
    protected $director;
    protected $substituteManager;
    protected $substituteDirector;

    public function __construct($document, $employee, $manager, $director, $substituteManager, $substituteDirector) {
        $this->document = $document;
        $this->employee = $employee;
        $this->manager = $manager;
        $this->director = $director;
        $this->substituteManager = $substituteManager;
        $this->substituteDirector = $substituteDirector;
    }

    public function startProcess() {
        $this->sendToManager();
    }

    public function sendToManager() {
        if ($this->manager->isAvailable()) {
            $this->manager->approveDocument($this->document);
            $this->sendToDirector();
        } else {
            $this->substituteManager->approveDocument($this->document);
            $this->sendToDirector();
        }
    }

    public function sendToDirector() {
        if ($this->director->isAvailable()) {
            $this->director->approveDocument($this->document);
            $this->sendToFinalStep();
        } else {
            $this->substituteDirector->approveDocument($this->document);
            $this->sendToFinalStep();
        }
    }

    public function sendToFinalStep() {
        echo "Pismo zostało wysłane.";
    }
}
?&gt;
                </code></pre>
            </div>
        </div>
    </div>
@endsection
