<div>
    <div class="card">
        <div class="card-body">
            {{-- <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input wire:model='name' type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="input your name..">
            </div> --}}

            {{-- <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea wire:model="name" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div> --}}

            {{-- <input type="radio" name="jenis_kelamin" value="laki-laki" wire:model="name"> Laki - Laki
            <input type="radio" name="jenis_kelamin" value="perempuan" wire:model="name"> Perempuan --}}

            <select class="form-select" wire:model="name">
                <option hidden>Pilih Jenis Kelamin</option>
                <option value="laki-laki">Laki-Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>
    </div>

    <div class="mt-3">
        <p>Jenis Kelamin saya adalah {{ $name }}</p>
    </div>

</div>
