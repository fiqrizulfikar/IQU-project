<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pertanyaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Tambah Pertanyaan</h1>

        @if(session('success'))
            <div class="alert alert-success mt-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form untuk menambahkan pertanyaan -->
        <form action="{{ isset($question) ? route('admin.questions.update', ['id' => $question->id, 'table' => $table]) : route('admin.questions.store') }}" method="POST">
            @csrf
            @if(isset($question))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label for="quiz" class="form-label">Pertanyaan</label>
                <input type="text" class="form-control" name="quiz" id="quiz" value="{{ $question->quiz ?? '' }}" required>
            </div>

            <div class="mb-3">
                <label for="jawaban_a" class="form-label">Jawaban A</label>
                <input type="text" class="form-control" name="jawaban_a" id="jawaban_a" value="{{ $question->jawaban_a ?? '' }}" required>
            </div>

            <div class="mb-3">
                <label for="jawaban_b" class="form-label">Jawaban B</label>
                <input type="text" class="form-control" name="jawaban_b" id="jawaban_b" value="{{ $question->jawaban_b ?? '' }}" required>
            </div>

            <div class="mb-3">
                <label for="jawaban_c" class="form-label">Jawaban C</label>
                <input type="text" class="form-control" name="jawaban_c" id="jawaban_c" value="{{ $question->jawaban_c ?? '' }}" required>
            </div>

            <div class="mb-3">
                <label for="jawaban_d" class="form-label">Jawaban D</label>
                <input type="text" class="form-control" name="jawaban_d" id="jawaban_d" value="{{ $question->jawaban_d ?? '' }}" required>
            </div>

            <div class="mb-3">
                <label for="jawaban_benar" class="form-label">Jawaban Benar</label>
                <select name="jawaban_benar" id="jawaban_benar" class="form-select" required>
                    <option value="A" {{ isset($question) && $question->jawaban_benar == 'A' ? 'selected' : '' }}>A</option>
                    <option value="B" {{ isset($question) && $question->jawaban_benar == 'B' ? 'selected' : '' }}>B</option>
                    <option value="C" {{ isset($question) && $question->jawaban_benar == 'C' ? 'selected' : '' }}>C</option>
                    <option value="D" {{ isset($question) && $question->jawaban_benar == 'D' ? 'selected' : '' }}>D</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Pilih Kategori</label>
                <select name="category_id" class="form-select" required onchange="updateTableName()">
                    <option value="">-- Pilih Kategori --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" data-table="{{ $category->table_name }}"
                            {{ isset($question) && $category->id == $question->category_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Pertanyaan</button>
        </form>
    </div>

    <script>
        // Update the table name dynamically based on selected category
        function updateTableName() {
            const selectedCategory = document.querySelector('select[name="category_id"]');
            const tableName = selectedCategory.options[selectedCategory.selectedIndex].dataset.table;
            // Send the table name with the form to the backend (could be included in hidden field or route)
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>