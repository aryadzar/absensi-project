@extends('dashboard.dashboard-layout.index')

@section('title', "Presensi Pegawai")
@section('nama_pegawai', 'Ahmad Januari')
@section('role', "Pegawai")




@section('content')
    <div class=" flex justify-between">
        <h1 class="text-2xl font-semibold"> <span class=" text-blue-500"><i class="fas fa-fingerprint"></i>  Presensi</span></h1>
        <h1 class="text-2xl text-blue-500 font-semibold">{{ Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y') }}</h1>
    </div>
    <!-- Container -->
    <div class="bg-blue-100 p-6 mx-auto mt-5 rounded-lg shadow-lg inline-block">
            <div class="grid grid-cols-2 gap-4">
                <div>
                  <label for="lokasi" class="block text-gray-700 text-sm font-bold mb-2">
                    Lokasi Anda
                  </label>
                  <input type="text" id="lokasi" class="shadow appearance-none border rounded w-full py-2 px-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan lokasi">
                </div>
                <div>
                  <label for="instansi" class="block text-gray-700 text-sm font-bold mb-2">
                    Instansi
                  </label>
                  <input type="text" id="instansi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  
               placeholder="Nama Instansi">
                </div>
              <div>
                <label for="status-kehadiran" class="block text-gray-700 text-sm font-bold mb-2">
                  Status Kehadiran
                </label>
                <select id="status-kehadiran" class="form-select appearance-none block w-full px-3 py-2 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                  <option value="">Pilih Status Kehadiran</option>
                  <option value="hadir">Hadir</option>
                  <option value="telat">Telat</option>
                  <option value="tidak-hadir">Tidak Hadir</option>
                </select>
                </div>
                <div>
                    <label for="bujurlintang" class="block text-gray-700 text-sm font-bold mb-2">
                      Bujur Lintang
                    </label>
                    <input type="text" id="bujurlintang" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  
                 placeholder="Bujur Lintang">
                </div>
            </div>

    </div>

@endsection

