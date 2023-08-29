<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Biodata extends CI_Controller
{
    public function index()
    {
        $this->load->view('biodata/biodata');
    }
    public function dataPribadi()
    {
        $data['nama'] = 'Ahsan Ramadan';
        $data['jk'] = 'Laki laki';
        $data['alamat'] = 'Jl Barau barau';
        $data['wa'] = '0896 2150 0376';
        $this->load->view('biodata/data-pribadi.php', $data);
    }
    public function dataSiswa()
    {
        $data['judul'] = "Daftar Siswa SMK MUDA";

        $siswa = [
            [
                'no' => '1',
                'nama' => 'Adyadma Renjiro',
                'jk' => 'Laki laki',
                'alamat' => 'Jl. Melati',
                'wa' => '089621500376'
            ],
            [
                'no' => '2',
                'nama' => 'Ahsan Ramadan',
                'jk' => 'Perempuan',
                'alamat' => 'Jl. Barau barau',
                'wa' => '082137378313'
            ],
            [
                'no' => '3',
                'nama' => 'Aldo Wiranata',
                'jk' => 'Laki laki',
                'alamat' => 'Jl. Kusuma',
                'wa' => '0831673113131'
            ],
            [
                'no' => '4',
                'nama' => 'Aqila Raisa Putri M.',
                'jk' => 'Perempuan',
                'alamat' => 'Jl. Medang Bakar IV',
                'wa' => '0831673116541'
            ],
            [
                'no' => '5',
                'nama' => 'Arif Rahman Hakim',
                'jk' => 'Laki laki',
                'alamat' => 'Jl. Pepaya',
                'wa' => '08316731131654'
            ],
            [
                'no' => '6',
                'nama' => 'Arifin',
                'jk' => 'Laki laki',
                'alamat' => 'Jl. Balam',
                'wa' => '083167316543131'
            ],
            [
                'no' => '7',
                'nama' => 'Azzahra Putri Utami',
                'jk' => 'Perempuan',
                'alamat' => 'Jl. Sigunggung',
                'wa' => '083164213131'
            ],
            [
                'no' => '8',
                'nama' => 'Farros Ammar D.',
                'jk' => 'Laki laki',
                'alamat' => 'Jl. Mawar',
                'wa' => '0831673118671'
            ],
            [
                'no' => '9',
                'nama' => 'Juanda Rafki F.',
                'jk' => 'Laki laki',
                'alamat' => 'Jl. Mawir',
                'wa' => '0831673186731'
            ],
            [
                'no' => '10',
                'nama' => 'M. Cuan Dika J.',
                'jk' => 'Laki laki',
                'alamat' => 'Jl. Harapan Raya',
                'wa' => '08316731187631'
            ],
            [
                'no' => '11',
                'nama' => 'M. Farell Rahadian',
                'jk' => 'Laki laki',
                'alamat' => 'Jl. Sudirman',
                'wa' => '083167319781'
            ],
            [
                'no' => '12',
                'nama' => 'M. Fadhlih',
                'jk' => 'Laki laki',
                'alamat' => 'Jl. Kamis',
                'wa' => '08316731865731'
            ],
            [
                'no' => '13',
                'nama' => 'M. Rafli Abrar',
                'jk' => 'Laki laki',
                'alamat' => 'Jl. Melati',
                'wa' => '08316654131'
            ],
            [
                'no' => '14',
                'nama' => 'Piral',
                'jk' => 'Laki laki',
                'alamat' => 'Jl. Kusuma',
                'wa' => '0831673131231'
            ],
            [
                'no' => '15',
                'nama' => 'Saidul Adzka',
                'jk' => 'Laki laki',
                'alamat' => 'Jl. Nanas',
                'wa' => '0831673114231'
            ],
            [
                'no' => '16',
                'nama' => 'Setia Budi',
                'jk' => 'Laki laki',
                'alamat' => 'Jl. Kuningan',
                'wa' => '083167342113131'
            ],
            [
                'no' => '17',
                'nama' => 'Tia Refviani Putri',
                'jk' => 'Perempuan',
                'alamat' => 'Jl. Cipta Karya',
                'wa' => '0831673313131'
            ],

        ];
        $data['siswa'] = $siswa;
        $this->load->view('biodata/data-siswa.php', $data);
    }
}
