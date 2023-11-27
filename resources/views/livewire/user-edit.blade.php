<div>
    <div class="row">
        <div class="col">


            <div class="row d-flex justify-content-center">

                <div class="col-md-6">
                    <h2 class="text-center">-Edit Form-</h2>
                    <a href="{{ route('home') }}" class="">Kembali</a>
                    <div class="card">
                        <div class="card-body">

                            <form wire:submit.prevent="update">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" wire:model="name">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" wire:model="email">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
