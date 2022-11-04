<?php

namespace Database\Seeders;

use App\Models\Rule;
use Illuminate\Database\Seeder;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// type SIKAP PERILAKU
        Rule::create([
            'name' => 'Tidak membawa buku penghubung dan kartu pelajar.',
            'poin' => 10,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Membuat kegaduhan di kelas atau di sekolah.',
            'poin' => 10,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Mencoret-coret dinding, pintu, meja, kursi, pagar, dan fasilitas sekolah.',
            'poin' => 10,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Membawa atau bermain kartu remi dan domino di sekolah.',
            'poin' => 10,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Menghidupkan dan mengendarai sepeda motor di area tertentu dalam sekolah.',
            'poin' => 10,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Bermain bola di lapangan(tidak memakai baju OR), di koridor dan di kelas.',
            'poin' => 10,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Melindungi teman yang bersalah.',
            'poin' => 15,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Menghidupkan handphone waktu KBM.',
            'poin' => 20,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Berpacaran di Sekolah dan berduaan yang tidak pada mestinya.',
            'poin' => 30,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Berperilaku jorok atau asusila, baik di dalam maupun di luar sekolah.',
            'poin' => 40,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Merayakan ulang tahun secara berlebihan.',
            'poin' => 40,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Membuang sampah tidak pada tempat sampah khusus yang ditentukan.',
            'poin' => 40,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Merusak taman dan tanaman yang ada di area sekolah.',
            'poin' => 40,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Menyalahgunakan uang SPP atau uang sekolah/kelas.',
            'poin' => 50,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Membawa atau membunyikan petasan di sekolah.',
            'poin' => 50,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Memalsukan surat izin masuk/keluar sekolah.',
            'poin' => 75,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Meloncat jendela dan pagar sekolah.',
            'poin' => 80,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Merusak sarana dan prasarana sekolah.',
            'poin' => 80,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Mengancam / mengintimidasi / bullying teman sekelas/sekolah.',
            'poin' => 100,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Bertindak tidak sopan / melecehkan Kepala Sekolah, Guru dan Karyawan Sekolah.',
            'poin' => 150,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Mengancam / mengintimidasi Kepala Sekolah, Guru dan Karyawan Sekolah.',
            'poin' => 150,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Menyalahgunakan media sosial yang merugikan pihak lain yang berhubungan dengan sekolah.',
            'poin' => 150,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Berjudi dalam bentuk apapun di sekolah.',
            'poin' => 150,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Membawa senjata tajam, senjata api dsb. di sekolah.',
            'poin' => 150,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Terlibat langsung maupun tidak langsung perkelahian / tawuran di sekolah, di luar sekolah atau antar sekolah.',
            'poin' => 150,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Mengikuti aliran / perkumpulan / geng terlarang / Komunitas LGBT dan radikalisme.',
            'poin' => 150,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Membuat atau memakai tatto di tubuh.',
            'poin' => 250,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Melakukan pelecehan seksual (pemerkosaan, dll).',
            'poin' => 250,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Membawa, menggunakan atau mengedarkan miras dan narkoba.',
            'poin' => 250,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Membawa atau membuat VCD Porno, buku porno, majalah porno atau sesuatu yang berbau pornografi dan pornoaksi.',
            'poin' => 250,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Mencuri di sekolah dan di luar sekolah.',
            'poin' => 250,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Memalsukan stempel sekolah, edaran sekolah atau tanda tangan Kepala Sekolah, guru dan karyawan sekolah.',
            'poin' => 250,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Terlibat atau melakukan tindakan kriminal.',
            'poin' => 250,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Mencemarkan nama baik sekolah.',
            'poin' => 250,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Terbukti hamil /  menghamili.',
            'poin' => 250,
            'rule_type_id' => 1
        ]);
        Rule::create([
            'name' => 'Terbukti menikah.',
            'poin' => 250,
            'rule_type_id' => 1
        ]);

        // type KERAJINAN
        Rule::create([
            'name' => 'Datang Terlambat.',
            'poin' => 10,
            'rule_type_id' => 2
        ]);
        Rule::create([
            'name' => 'Meninggalkan kelas tanpa izin.',
            'poin' => 10,
            'rule_type_id' => 2
        ]);
        Rule::create([
            'name' => 'Di kantin saat jam pembelajaran.',
            'poin' => 10,
            'rule_type_id' => 2
        ]);
        Rule::create([
            'name' => 'Tidak melaksanakan piket harian 7K dan Jumat bersih.',
            'poin' => 10,
            'rule_type_id' => 2
        ]);
        Rule::create([
            'name' => 'Tidur di Kelas saat pelajaran berlangsung.',
            'poin' => 10,
            'rule_type_id' => 2
        ]);
        Rule::create([
            'name' => 'Pulang sebelum waktunya, tanpa izin dari sekolah.',
            'poin' => 20,
            'rule_type_id' => 2
        ]);
        Rule::create([
            'name' => 'Tidak mengikuti upacara.',
            'poin' => 20,
            'rule_type_id' => 2
        ]);
        Rule::create([
            'name' => 'Tidak mengikuti kegiatan sekolah.',
            'poin' => 20,
            'rule_type_id' => 2
        ]);
        Rule::create([
            'name' => 'Tidak mengikuti kegiatan ekstrakurikuler pramuka wajib.',
            'poin' => 20,
            'rule_type_id' => 2
        ]);
        Rule::create([
            'name' => 'Tidak mengikuti pembiasaan membaca kitab suci agama.',
            'poin' => 20,
            'rule_type_id' => 2
        ]);
        Rule::create([
            'name' => 'Tidak mengikuti kegiatan literasi.',
            'poin' => 20,
            'rule_type_id' => 2
        ]);

        // type KERAPIAN
        Rule::create([
            'name' => 'Tidak memakai seragam sesuai dengan ketentuan.',
            'poin' => 10,
            'rule_type_id' => 3
        ]);
        Rule::create([
            'name' => 'Seragam dicoret-coret.',
            'poin' => 10,
            'rule_type_id' => 3
        ]);
        Rule::create([
            'name' => 'Melipat lengan baju, baju tidak dikancingkan, tidak rapi.',
            'poin' => 10,
            'rule_type_id' => 3
        ]);
        Rule::create([
            'name' => 'Berambut panjang tidak sesuai ketentuan (putra).',
            'poin' => 10,
            'rule_type_id' => 3
        ]);
        Rule::create([
            'name' => 'Tidak memakai kaos kaki sesuai ketentuan.',
            'poin' => 10,
            'rule_type_id' => 3
        ]);
        Rule::create([
            'name' => 'Atribut seragam tidak lengkap.',
            'poin' => 10,
            'rule_type_id' => 3
        ]);
        Rule::create([
            'name' => 'Memakai perhiasan berlebihan / tidak sesuai ketentuan.',
            'poin' => 10,
            'rule_type_id' => 3
        ]);
        Rule::create([
            'name' => 'Memakai make-up berlebihan (putri).',
            'poin' => 30,
            'rule_type_id' => 3
        ]);
        Rule::create([
            'name' => 'Memakai tindik telinga lebih dari 1 (putri) dan tindik lidah.',
            'poin' => 30,
            'rule_type_id' => 3
        ]);
    }
}
