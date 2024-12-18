<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\ModelQuiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class QuizController extends Controller
{   
    public function index(Request $request)
{
    // Ambil nama tabel dari query parameter, default 'quizzes'
    $table = $request->get('table', 'quizsmatik', 'quizsmaipa', 'quizsmaips', 'quizsmapkn',
        'quizumum', 'quizpolitik', 'quizteknologi', 'quizzes','quiztwk','quiztkp','quiztkp','quizsmpipa','quizsmppkn','quizsmpips','quizsmpenglis','quiztesiq','quizsdips','quizsdmtk',
        'quizsdpkn','quiz_s_d_ipa');  // Pastikan ini adalah nama tabel yang valid
    // Daftar tabel yang valid
    $validTables = [
        'quizsmatik', 'quizsmaipa', 'quizsmaips', 'quizsmapkn',
        'quizumum', 'quizpolitik', 'quizteknologi', 'quizzes','quiztwk','quiztkp','quiztkp','quizsmpipa','quizsmppkn','quizsmpips','quizsmpenglis','quiztesiq','quizsdips','quizsdmtk',
        'quizsdpkn','quiz_s_d_ipa'    ];
    // Pastikan tabel yang dipilih ada dalam daftar valid
    if (!in_array($table, $validTables)) {
        $table = 'quizzes';  // Atur ke default jika tabel tidak valid
    }
    // Ambil semua kategori untuk dropdown
    $categories = Category::all();
    // Ambil semua pertanyaan dari tabel yang dipilih
    $questions = (new ModelQuiz())->setTableName($table)->get();
    // Kirim data ke view
    return view('admin.index', compact('questions', 'categories', 'table'));
}
    public function create()
    {
        // Ambil semua kategori yang ada
        $categories = Category::all();
        // Tampilkan halaman create dengan data kategori
        return view('admin.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'quiz' => 'required|string',
            'jawaban_a' => 'required|string',
            'jawaban_b' => 'required|string',
            'jawaban_c' => 'required|string',
            'jawaban_d' => 'required|string',
            'jawaban_benar' => 'required|in:A,B,C,D',
            'category_id' => 'required|exists:categories,id',
        ]);
        // Cari kategori dan ambil nama tabel
        $category = Category::findOrFail($request->category_id);
        $tableName = $category->table_name;
        // Menggunakan model ModelQuiz dengan nama tabel dinamis
        $modelQuiz = new ModelQuiz();
        $modelQuiz->setTableName($tableName);
        $modelQuiz->create($request->only(['quiz', 'jawaban_a', 'jawaban_b', 'jawaban_c', 'jawaban_d', 'jawaban_benar']));
        return redirect()->route('admin.index', ['table' => $request->table])
                     ->with('success', 'Pertanyaan berhasil ditambahkan ke tabel ' . $request->table);
    }
    public function edit($table, $id)
{
    // Cari kategori dan nama tabel
    $category = Category::where('table_name', $table)->first();
    $tableName = $category->table_name;

    // Temukan pertanyaan berdasarkan ID
    $modelQuiz = new ModelQuiz();
    $modelQuiz->setTableName($tableName);
    $question = $modelQuiz->findOrFail($id);

    // Kirim data ke view edit
    return view('admin.edit', compact('question', 'table'));
}

public function update(Request $request, $table, $id)
{
    $request->validate([
        'quiz' => 'required|string',
        'jawaban_a' => 'required|string',
        'jawaban_b' => 'required|string',
        'jawaban_c' => 'required|string',
        'jawaban_d' => 'required|string',
        'jawaban_benar' => 'required|in:A,B,C,D',
    ]);

    // Cari kategori dan nama tabel
    $category = Category::findOrFail($request->category_id); // Kategori ini bisa dipakai jika perlu
    $tableName = $category->table_name;

    // Temukan pertanyaan berdasarkan ID
    $modelQuiz = new ModelQuiz();
    $modelQuiz->setTableName($tableName);
    $question = $modelQuiz->findOrFail($id);

    // Update pertanyaan
    $question->update($request->only(['quiz', 'jawaban_a', 'jawaban_b', 'jawaban_c', 'jawaban_d', 'jawaban_benar']));

    return redirect()->route('admin.index', ['table' => $table])
                     ->with('success', 'Pertanyaan berhasil diperbarui di tabel ' . $table);
}

public function destroy($table, $id)
{
    // Cari kategori dan nama tabel
    $category = Category::where('table_name', $table)->first();
    $tableName = $category->table_name;

    // Temukan pertanyaan berdasarkan ID
    $modelQuiz = new ModelQuiz();
    $modelQuiz->setTableName($tableName);
    $question = $modelQuiz->findOrFail($id);

    // Hapus pertanyaan
    $question->delete();

    return redirect()->route('admin.index', ['table' => $table])
                     ->with('success', 'Pertanyaan berhasil dihapus.');
}



}