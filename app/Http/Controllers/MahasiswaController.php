<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', ['mahasiswa'=> $mahasiswa]);
    }

    public function create()
    {
        return view ('mahasiswa.form-mahasiswa');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nim' => 'required|size:9|unique:mahasiswas',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'fakultas' => 'required',
            'jurusan' => 'required',
            'ipk'        => '',
        ]);

        //mass assignment

        Mahasiswa::create($validateData);

        $request->session()->flash('pesan', "Data Mahasiswa berhasil diinput ke database");
        return redirect()->route('mahasiswas.index');
    }


    public function detail($mahasiswas)
    {
        $result=Mahasiswa::find($mahasiswas);
        return view('mahasiswa.detail-mahasiswa', ['mahasiswas'=>$result]);
    }

    public function edit($mahasiswa)
    {
        $result=Mahasiswa::find($mahasiswa);
        return view('mahasiswa.edit-mahasiswa', ['mahasiswa'=>$result]);
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validateData = $request->validate([
            'nim' => 'required|size:9|unique:mahasiswas,nim,'.$mahasiswa->id,
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'fakultas' => 'required',
            'jurusan' => 'required',
            'ipk'        => 'required',
        ]);

            Mahasiswa::where('id', $mahasiswa->id)->update($validateData);
            $request->session()->flash('pesan',"Data berhasil diperbaharui");
            return redirect()->route('mahasiswas.detail', ['mahasiswa'=>$mahasiswa->id]);
    }

    public function updateORM()
    {
        $mahasiswa = Mahasiswa::find(1);
        $mahasiswa->tempat_lahir = 'Kab. Bekasi';
        $mahasiswa->save();

        dump($mahasiswa);

    }


    public function delete(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswas.index')
        ->with('pesan',"Data berhasil dihapus");
    }

    
    public function deleteORM()
    {
        $mahasiswa = Mahasiswa::where('ipk','>',3)->delete();
        dump($mahasiswa);
    }

    public function cekObject()
    {
        $mahasiswa = new Mahasiswa;

        dump($mahasiswa);
    }

    public function insert()
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = 'J3D118098';
        $mahasiswa->nama = 'Muhammad Agung Zuhdi';
        $mahasiswa->tempat_lahir = 'Bulan';
        $mahasiswa->tanggal_lahir = '2000-01-11';
        $mahasiswa->fakultas = 'SV';
        $mahasiswa->jurusan = 'Teknik Komputer';
        $mahasiswa->ipk = 3.8;
        $mahasiswa->save(); //itu method dari eloquent model
        
        dump($mahasiswa);
    }

    public function massAssignment()
    {
        
        $mahasiswa=Mahasiswa::create(
             [
                'nim' => 'J3C118104',
                'nama' => 'Indah Mawarni Hadiyanti',
                'tempat_lahir' => 'Depok',
                'tanggal_lahir' => '2000-08-15',
                'fakultas' => 'SV',
                'jurusan' => 'Manajemen Informatika',
                'ipk' => 3.9

            ]
            );
        $mahasiswa1=Mahasiswa::create(
            [
                'nim' => 'J3D118126',
                'nama' => 'Muhamad Raihan',
                'tempat_lahir' => 'Depok',
                'tanggal_lahir' => '2000-08-04',
                'fakultas' => 'SV',
                'jurusan' => 'Teknik Komputer',
                'ipk' => 3.5

            ]
            );
        $mahasiswa2=Mahasiswa::create(
            [
                'nim' => 'J3D118122',
                'nama' => 'Adi Hendrawan Saputra',
                'tempat_lahir' => 'Bekasi',
                'tanggal_lahir' => '2000-07-05',
                'fakultas' => 'SV',
                'jurusan' => 'Teknik Komputer',
                'ipk' => 3.7

            ]
            );
        
        $mahasiswa3=Mahasiswa::create(
            [
                'nim' => 'J3D218186',
                'nama' => 'Yasonia Pratiwi',
                'tempat_lahir' => 'Bukittinggi',
                'tanggal_lahir' => '2000-08-10',
                'fakultas' => 'SV',
                'jurusan' => 'Teknik Komputer',
                'ipk' => 3.8

            ]
            );
        $mahasiswa4=Mahasiswa::create(
            [
                'nim' => 'J3D218189',
                'nama' => 'Okta Graedmicko',
                'tempat_lahir' => 'Banten',
                'tanggal_lahir' => '2000-08-25',
                'fakultas' => 'SV',
                'jurusan' => 'Teknik Komputer',
                'ipk' => 3.6

            ]
            );
        $mahasiswa5=Mahasiswa::create(
            [
                'nim' => 'J3D118129',
                'nama' => 'Esto Triramdani Nurlustiawan',
                'tempat_lahir' => 'Bandung',
                'tanggal_lahir' => '2000-10-04',
                'fakultas' => 'SV',
                'jurusan' => 'Teknik Komputer',
                'ipk' => 3.6

            ]
            );

            return "Berhasil diproses";
    
    }

    public function updateWhere()
    {
        $mahasiswa = Mahasiswa::where('nim','J3D118098')->first();
        $mahasiswa->ipk = 4.0;
        $mahasiswa->save();

        dump($mahasiswa);
    }

    public function massUpdate()
    {
        Mahasiswa::where('nim','J3D218186')->first()->update([
            'tanggal_lahir' => '2000-08-10',
            'ipk' => 4.0
        ]);
        
        return "Berhasil diupdate";
    }


    public function all()
    {
        $result = Mahasiswa::all();
        /*
        dump($result);
        //kalo mau seleksi manual sesuai index
        echo($result[0]->id).'<br>';
        echo($result[0]->nim).'<br>';
        echo($result[0]->nama).'<br>';
        */

        foreach ($result as $mahasiswa) {
            echo($mahasiswa->id).'<br>';
            echo($mahasiswa->nim).'<br>';
            echo($mahasiswa->nama).'<br>';
            echo($mahasiswa->tempat_lahir).'<br>';
            echo($mahasiswa->tanggal_lahir).'<br>';
            echo($mahasiswa->fakultas).'<br>';
            echo($mahasiswa->jurusan).'<br>';
            echo($mahasiswa->ipk).'<br>';
            echo "<hr>";
        }
    }
    public function allView()
    {
        $mahasiswas = Mahasiswa::all();
        return view('tampil-mahasiswa',['mahasiswas' => $mahasiswas]);
    }
    public function getWhere()
    {
        $mahasiswas = Mahasiswa::where('ipk','>','3.9') //lebih dari 3.9
            ->orderBy('nama', 'desc')
            ->get();
        return view('tampil-mahasiswa',['mahasiswas' => $mahasiswas]);
    }
}
