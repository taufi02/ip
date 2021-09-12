<div class="p-8">
    <div class="card shadow-xl p-8 bg-base-200">
        <table class="table table-compact table-zebra">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Instansi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($instansis as $instansi)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $instansi->nama }}</td>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">
                            No data available
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="flex items-center mt-16 space-x-4">
            <input type="checkbox" checked="checked" class="toggle toggle-primary" wire:model="update.is_active" wire:change="update">
            <span>Izinkan pengguna untuk mengupdate data</span>
        </div>
        <form wire:submit.prevent="create">
            <div class="flex justify-between items-center mt-4">
                <input type="text" placeholder="Nama Instansi" class="input input-primary flex-grow" wire:model="instansi">
                <button class="btn btn-primary ml-4">
                    Tambah data
                </button>
            </div>
            <small>@error('instansi') <span class="error">{{ $message }}</span> @enderror</small>
        </form>

    </div>

</div>
