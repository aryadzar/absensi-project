@extends('dashboard_pegawai.dashboard-layout.index')

@section('title', 'Dashboard Pegawai')
@section('nama_pegawai', Auth::user()->name)
@section('role', 'Pegawai')
@section('content')

<div class="mb-3">
    <h1 class="text-2xl font-semibold"><i class="fa-solid fa-book text-blue-500 mr-2 dark:text-white"></i> <span class="dark:text-white text-blue-500">Log Book</span></h1>
</div>

<!-- Attendance Table -->
<div class="bg-blue-100 dark:bg-slate-500 p-6 grid grid-cols-1 lg:grid-cols-2 mt-5 rounded-sm">
    <!-- Table -->
    <div class="col-span-3">
        <table class="w-full bg-white rounded-md shadow-lg overflow-hidden" id="my-table">
            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="p-2 text-left">Tanggal</th>
                    <th class="p-2 text-left">Status</th>
                    <th class="p-2 text-left">Waktu Kehadiran</th>
                    <th class="p-2 text-left">Catatan Harian</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b hover:bg-gray-100">
                    <td class="p-2 text-gray-700">01-10-2024</td>
                    <td class="p-2">
                        <span class="badge badge-warning font-bold">Belum Mengisi</span>
                    </td>
                    <td class="p-2 text-gray-700">07.40 WIB</td>
                    <td class="p-2 text-gray-700">
                        <div class="flex justify mb-5">
                            <!-- Add Button with modal trigger -->
                            <button class="btn bg-blue-500 rounded p-1 px-5" onclick="document.getElementById('my_modal_add').showModal()">
                                <i class="fa-solid fa-plus text-white"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="border-b hover:bg-gray-100">
                    <td class="p-2 text-gray-700">01-10-2024</td>
                    <td class="p-2">
                        <span class="badge badge-success font-bold">Sudah Mengisi</span>
                    </td>
                    <td class="p-2 text-gray-700">07.40 WIB</td>
                    <td class="p-2 text-gray-700">
                        <div class="flex justify mb-5">
                            <!-- Eye Button with modal trigger -->
                            <button class="btn bg-blue-500 rounded p-1 px-5" onclick="document.getElementById('my_modal_8').showModal()">
                                <i class="fa-solid fa-eye text-white"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- Detail Catatan Harian -->
<dialog id="my_modal_8"
        class="modal-box w-11/12 max-w-xl bg-blue-100 p-6 rounded-lg shadow-lg dark:bg-blue-950 dark:text-white">
    <h1 class="text-2xl font-semibold mb-7 ">
        <span class="text-blue-500 dark:text-blue-300">
            <i class="fa-solid fa-list-check lg:pr-[10px]"></i>Detail Catatan Harian
        </span>
    </h1>
    <div class="grid-rows-2">
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-gray-700 dark:text-gray-200 font-semibold">Tanggal</label>
                <input type="text" value="01-10-2024"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-white dark:text-black"
                    readonly>
            </div>
        </div>
        <div class="py-5">
            <label class="block text-gray-700 dark:text-gray-200 font-semibold">Keterangan</label>
            <textarea readonly
                class="w-full h-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-white dark:text-black h-32">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero.

                Fusce sed volutpat turpis, eget dapibus mauris. Cras vel orci quis tellus dapibus ullamcorper. Vivamus a massa vel nulla consequat suscipit. Integer in turpis risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
            </textarea>
        </div>
        <div class="modal-action flex justify-center items-center">
            <button onclick="document.getElementById('my_modal_8').close()" class="btn px-10 text-white"
                style="background-color: #19213F;">OK</button>
        </div>
    </div>
</dialog>



<!-- Script -->
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
<script>
    if (document.getElementById("my-table") && typeof simpleDatatables.DataTable !== 'undefined') {
        const dataTable = new simpleDatatables.DataTable("#my-table", {
            searchable: true,
            sortable: false
        });
    }
</script>

@endsection
