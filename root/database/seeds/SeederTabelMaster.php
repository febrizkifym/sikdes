<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SeederTabelMaster extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_pekerjaan')->insert([
            ['pekerjaan' => 'Wiraswasta'],
            ['pekerjaan' => 'Ibu Rumah Tangga'],
            ['pekerjaan' => 'Petani'],
            ['pekerjaan' => 'Buruh Tani'],
            ['pekerjaan' => 'Buruh Migran'],
            ['pekerjaan' => 'Pegawai Negeri Sipil'],
            ['pekerjaan' => 'Pengrajin Industri'],
            ['pekerjaan' => 'Pedagang Keliling'],
            ['pekerjaan' => 'Peternak'],
            ['pekerjaan' => 'Nelayan'],
            ['pekerjaan' => 'Montir'],
            ['pekerjaan' => 'Dokter Swasta'],
            ['pekerjaan' => 'Bidan Swasta'],
            ['pekerjaan' => 'Perawat Swasta'],
            ['pekerjaan' => 'Pembantu Rumah Tangga'],
            ['pekerjaan' => 'TNI'],
            ['pekerjaan' => 'POLRI'],
            ['pekerjaan' => 'Pensiunan PNS/TNI/POLRI'],
            ['pekerjaan' => 'Pengusaha Kecil dan Menengah'],
            ['pekerjaan' => 'Pengacara'],
            ['pekerjaan' => 'Notaris'],
            ['pekerjaan' => 'Dukun Kampung Terlatih'],
            ['pekerjaan' => 'Jasa Pengobatan Alternatif'],
            ['pekerjaan' => 'Dosen Swasta'],
            ['pekerjaan' => 'Pengusaha Besar'],
            ['pekerjaan' => 'Arsitektur'],
            ['pekerjaan' => 'Seniman/Artis'],
            ['pekerjaan' => 'Karyawan Perusahaan Swasta'],
            ['pekerjaan' => 'Karyawan Perusahaan Pemerintah'],
            ['pekerjaan' => 'Jasa'],
            ['pekerjaan' => 'Honorer'],
            ['pekerjaan' => 'Pelajar'],
        ]);
        DB::table('m_agama')->insert([
            ['agama' => 'Islam'],
            ['agama' => 'Kristen'],
            ['agama' => 'Katholik'],
            ['agama' => 'Hindu'],
            ['agama' => 'Budha'],
            ['agama' => 'Khonghucu'],
            ['agama' => 'Kepercayaan Kepada Tuhan YME'],
            ['agama' => 'Aliran Kepercayaan Lainnya']
        ]);
        DB::table('m_cacat')->insert([
            ['cacat' => 'Tuna Rungu'],
            ['cacat' => 'Tuna Wicara'],
            ['cacat' => 'Tuna Netra'],
            ['cacat' => 'Tuna Daksa'],
            ['cacat' => 'Lumpuh'],
            ['cacat' => 'Sumbing'],
            ['cacat' => 'Cacat Kulit'],
            ['cacat' => 'Idiot'],
            ['cacat' => 'Gila'],
            ['cacat' => 'Stress'],
            ['cacat' => 'Autis']
        ]);
        DB::table('m_pendidikan')->insert([
            ['tingkat' => 'Usia 3-6 tahun yang belum masuk TK'],
            ['tingkat' => 'Usia 3-6 tahun yang sedang TK/Play Group'],
            ['tingkat' => 'Usia 7-18 tahun yang tidak pernah sekolah'],
            ['tingkat' => 'Usia 7-18 tahun yang sedang sekolah'],
            ['tingkat' => 'Usia 18-56 tahun yang tidak pernah sekolah'],
            ['tingkat' => 'Usia 18-56 tahun yang pernah SD tapi tidak pernah tamat'],
            ['tingkat' => 'Tamat SD'],
            ['tingkat' => 'Belum tamat SD/sederajat'],
            ['tingkat' => 'Usia 12-56 tahun tidak tamat SLTP'],
            ['tingkat' => 'Usia 18-56 tahun tidak tamat SLTA'],
            ['tingkat' => 'Tamat SMP/sederajat'],
            ['tingkat' => 'Tamat SMA/sederajat'],
            ['tingkat' => 'Tamat D-1/sederajat'],
            ['tingkat' => 'Tamat D-2/sederajat'],
            ['tingkat' => 'Tamat D-3/sederajat'],
            ['tingkat' => 'Tamat S-1/sederajat'],
            ['tingkat' => 'Tamat S-2/sederajat'],
            ['tingkat' => 'Tamat S-3/sederajat'],
            ['tingkat' => 'Tamat SLB A'],
            ['tingkat' => 'Tamat SLB B'],
            ['tingkat' => 'Tamat SLB C']
        ]);
    }
}
