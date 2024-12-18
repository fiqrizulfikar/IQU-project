<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ModelQuiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index($table = null) // $table adalah parameter opsional
    {
        // Ambil kategori atau sesuaikan berdasarkan tabel
        $categories = Category::all();

        // Jika $table ada, proses sesuai tabel yang dipilih, misalnya
        // menggunakan $table untuk mengambil soal dari kategori yang dipilih
        // Contoh: $quizzes = Quiz::where('table', $table)->get();

        return view('admin.index', compact('categories', 'table'));
    }
    
    public function create($table)
    {
        $allowedTables = ['quizsmatik', 'quizsmaipa', 'quizsmaips', 'quizsmapkn']; // Daftar tabel yang valid
        if (!in_array($table, $allowedTables)) {
            abort(404, 'Table not found.');
        }

        return view('admin.create', compact('table'));
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

        try {
            // Cari kategori dan ambil nama tabel
            $category = Category::findOrFail($request->category_id);
            $tableName = $category->table_name;

            // Gunakan model ModelQuiz dengan nama tabel dinamis
            $modelQuiz = new ModelQuiz();
            $modelQuiz->setTableName($tableName);
            $modelQuiz->create($request->only([
                'quiz', 'jawaban_a', 'jawaban_b', 'jawaban_c', 'jawaban_d', 'jawaban_benar'
            ]));

            return redirect()->route('admin.index', ['table' => $tableName])
                ->with('success', 'Pertanyaan berhasil ditambahkan ke tabel ' . $tableName);

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function edit($table, $id)
    {
        try {
            $modelQuiz = new ModelQuiz();
            $modelQuiz->setTableName($table);

            // Ambil pertanyaan berdasarkan ID
            $question = $modelQuiz->findOrFail($id);

            // Ambil semua kategori
            $categories = Category::all();

            return view('admin.create', compact('question', 'categories', 'table'));

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($table, $id)
    {
        try {
            $modelQuiz = new ModelQuiz();
            $modelQuiz->setTableName($table);

            // Hapus pertanyaan berdasarkan ID
            $modelQuiz->findOrFail($id)->delete();

            return redirect()->route('admin.index', ['table' => $table])
                ->with('success', 'Pertanyaan berhasil dihapus!');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
