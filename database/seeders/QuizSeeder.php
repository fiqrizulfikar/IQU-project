<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    public function run()
    {
        DB::table('quiztkp')->insert([
            [
                'quiz' => 'Apa yang akan Anda lakukan jika diminta atasan untuk menyelesaikan pekerjaan di luar tanggung jawab Anda?',
                'jawaban_a' => 'Menolak karena pekerjaan tersebut bukan bagian dari tugas saya',
                'jawaban_b' => 'Menerima dengan senang hati dan berusaha menyelesaikannya dengan baik',
                'jawaban_c' => 'Membicarakan dengan atasan agar pekerjaan tersebut dialihkan ke orang lain',
                'jawaban_d' => 'Melakukan pekerjaan tersebut setengah hati karena tidak sesuai dengan tanggung jawab saya',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Jika Anda bekerja dalam tim dan ada anggota tim yang tidak bekerja dengan maksimal, apa yang Anda lakukan?',
                'jawaban_a' => 'Mengabaikan dan melanjutkan pekerjaan saya sendiri',
                'jawaban_b' => 'Mengkritik rekan tersebut di depan tim agar merasa malu',
                'jawaban_c' => 'Mencoba berbicara baik-baik dengan rekan tersebut untuk mencari solusi',
                'jawaban_d' => 'Menyalahkan rekan tersebut di depan atasan',
                'jawaban_benar' => 'C',
            ],
            [
                'quiz' => 'Jika Anda merasa stres dengan pekerjaan yang menumpuk, apa yang Anda lakukan?',
                'jawaban_a' => 'Mengambil waktu untuk beristirahat sejenak agar bisa fokus kembali',
                'jawaban_b' => 'Menyerah dan tidak menyelesaikan pekerjaan tersebut',
                'jawaban_c' => 'Mencari cara untuk menyelesaikan pekerjaan secara cepat tanpa memperhatikan kualitas',
                'jawaban_d' => 'Berkonsultasi dengan atasan atau rekan kerja untuk mencari solusi',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Jika Anda diberi tugas baru yang tidak Anda kuasai, bagaimana Anda menyikapinya?',
                'jawaban_a' => 'Menolak tugas tersebut dan meminta pekerjaan yang sudah saya kuasai',
                'jawaban_b' => 'Menerima tantangan tersebut dan berusaha untuk mempelajarinya',
                'jawaban_c' => 'Mencari orang lain untuk menyelesaikan tugas tersebut',
                'jawaban_d' => 'Mengabaikan tugas tersebut karena merasa tidak mampu',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Bagaimana cara Anda mengatur waktu antara pekerjaan dan kehidupan pribadi?',
                'jawaban_a' => 'Mengatur waktu dengan baik untuk keduanya agar seimbang',
                'jawaban_b' => 'Memilih bekerja lebih banyak tanpa memperhatikan kehidupan pribadi',
                'jawaban_c' => 'Mengabaikan pekerjaan untuk lebih banyak menikmati waktu pribadi',
                'jawaban_d' => 'Bekerja terus menerus agar dapat menghindari masalah pribadi',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Bagaimana Anda menanggapi kritik yang diberikan oleh atasan?',
                'jawaban_a' => 'Menerima kritik tersebut dengan lapang dada dan berusaha memperbaiki diri',
                'jawaban_b' => 'Merasa tersinggung dan tidak mau menerima kritik',
                'jawaban_c' => 'Membalas kritik dengan alasan untuk membela diri',
                'jawaban_d' => 'Mengabaikan kritik dan melanjutkan pekerjaan tanpa perubahan',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Jika Anda menghadapi tugas yang sulit, apa yang Anda lakukan?',
                'jawaban_a' => 'Mencari cara-cara yang efektif dan menyelesaikan tugas tersebut dengan baik',
                'jawaban_b' => 'Meninggalkan tugas tersebut dan menunggu bantuan',
                'jawaban_c' => 'Mengabaikan tugas tersebut dan fokus pada pekerjaan yang lebih mudah',
                'jawaban_d' => 'Berhenti dan mengeluh tentang kesulitan yang dihadapi',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Jika ada anggota tim yang memiliki pandangan yang berbeda dengan Anda, apa yang Anda lakukan?',
                'jawaban_a' => 'Mengabaikan pandangan mereka dan tetap dengan pendapat saya sendiri',
                'jawaban_b' => 'Berusaha memahami pandangan mereka dan mencari solusi yang saling menguntungkan',
                'jawaban_c' => 'Menyalahkan mereka karena tidak sepaham dengan saya',
                'jawaban_d' => 'Mencoba meyakinkan mereka dengan cara yang keras agar mereka setuju dengan saya',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Bagaimana Anda mengatasi kegagalan dalam pekerjaan?',
                'jawaban_a' => 'Menganalisis penyebab kegagalan dan belajar dari pengalaman tersebut',
                'jawaban_b' => 'Menyalahkan orang lain atas kegagalan tersebut',
                'jawaban_c' => 'Mengabaikan kegagalan dan melanjutkan pekerjaan tanpa evaluasi',
                'jawaban_d' => 'Menyerah dan tidak mencoba lagi',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Jika Anda merasa pekerjaan Anda tidak dihargai, bagaimana sikap Anda?',
                'jawaban_a' => 'Berbicara dengan atasan untuk mencari solusi agar pekerjaan saya lebih dihargai',
                'jawaban_b' => 'Mengeluh kepada rekan kerja dan berharap atasan menyadari',
                'jawaban_c' => 'Meninggalkan pekerjaan tanpa memberi tahu siapapun',
                'jawaban_d' => 'Bekerja lebih keras untuk mendapatkan pengakuan',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Jika Anda diminta untuk melakukan pekerjaan yang tidak Anda sukai, apa yang Anda lakukan?',
                'jawaban_a' => 'Menyelesaikan pekerjaan tersebut dengan baik meskipun tidak menyukainya',
                'jawaban_b' => 'Menolak untuk melakukan pekerjaan tersebut',
                'jawaban_c' => 'Mencari cara untuk menghindari pekerjaan tersebut',
                'jawaban_d' => 'Mengeluh tentang pekerjaan tersebut',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Bagaimana Anda menghadapi perubahan dalam organisasi atau pekerjaan?',
                'jawaban_a' => 'Menyesuaikan diri dengan perubahan tersebut dan mencari cara agar bisa beradaptasi',
                'jawaban_b' => 'Mengeluh dan tidak menerima perubahan tersebut',
                'jawaban_c' => 'Menghindari perubahan dengan cara tetap melakukan pekerjaan seperti sebelumnya',
                'jawaban_d' => 'Menentang perubahan dan mencari cara untuk kembali ke kondisi sebelumnya',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Jika Anda bekerja dengan deadline yang ketat, apa yang Anda lakukan?',
                'jawaban_a' => 'Mengatur waktu dengan baik dan memprioritaskan pekerjaan agar dapat diselesaikan tepat waktu',
                'jawaban_b' => 'Bekerja dengan terburu-buru tanpa memperhatikan kualitas',
                'jawaban_c' => 'Menunda-nunda pekerjaan hingga deadline mendekat',
                'jawaban_d' => 'Mengabaikan deadline dan berharap pekerjaan selesai dengan sendirinya',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Bagaimana cara Anda mengatasi perbedaan pendapat dalam tim?',
                'jawaban_a' => 'Mencari solusi yang dapat diterima oleh semua anggota tim',
                'jawaban_b' => 'Mengabaikan perbedaan tersebut dan tetap melanjutkan pekerjaan',
                'jawaban_c' => 'Menyerahkan keputusan kepada atasan atau pemimpin tim',
                'jawaban_d' => 'Memaksakan pendapat saya meskipun tidak disetujui oleh tim',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Jika Anda melihat rekan kerja Anda sedang bekerja terlalu keras, apa yang Anda lakukan?',
                'jawaban_a' => 'Memberikan dukungan dan menawarkan bantuan jika dibutuhkan',
                'jawaban_b' => 'Mengabaikan dan melanjutkan pekerjaan saya sendiri',
                'jawaban_c' => 'Mengkritik mereka karena tidak bekerja dengan bijak',
                'jawaban_d' => 'Menyarankan mereka untuk bekerja lebih santai',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang Anda lakukan jika Anda mendapatkan tanggung jawab yang lebih besar di tempat kerja?',
                'jawaban_a' => 'Menerima tanggung jawab tersebut dengan senang hati dan berusaha untuk memberikan yang terbaik',
                'jawaban_b' => 'Merasa terbebani dan tidak ingin menerima tanggung jawab tersebut',
                'jawaban_c' => 'Mengalihkan tanggung jawab tersebut kepada orang lain',
                'jawaban_d' => 'Mengabaikan tanggung jawab tersebut dan hanya menyelesaikan pekerjaan saya sendiri',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Jika Anda diberi kesempatan untuk berkarir di luar negeri, bagaimana sikap Anda?',
                'jawaban_a' => 'Menerima kesempatan tersebut untuk mengembangkan diri dan mendapatkan pengalaman baru',
                'jawaban_b' => 'Menolak kesempatan tersebut karena tidak ingin meninggalkan keluarga',
                'jawaban_c' => 'Mengabaikan kesempatan tersebut dan tetap bekerja di tempat yang sama',
                'jawaban_d' => 'Mengajukan permintaan untuk bekerja dari jarak jauh',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang Anda lakukan jika mendapatkan pekerjaan yang sangat menantang?',
                'jawaban_a' => 'Menerima tantangan tersebut dengan semangat dan berusaha memberikan yang terbaik',
                'jawaban_b' => 'Menghindari tantangan tersebut karena merasa tidak mampu',
                'jawaban_c' => 'Menyerah tanpa mencoba',
                'jawaban_d' => 'Mencari jalan pintas untuk menyelesaikan pekerjaan',
                'jawaban_benar' => 'A',
             ],
        ]);      
    }
}
