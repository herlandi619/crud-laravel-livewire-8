<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;



class UserTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $cari = '';

    public function updatingCari()
    {
        $this->resetPage();
    }

    public $listeners = [
        'userStore' => 'render'
    ];

    public function render()
    {
        $users = User::where('name', 'like', '%' . $this->cari . '%')->paginate(5);

        return view('livewire.user-table', [
            'users' => $users
        ]);
    }

    public function delete($id)
    {
        $users = User::where('id', $id)->first();
        $users->delete();

        return redirect()->route('home')->with('success', 'Data Berhasil dihapus');
    }
}
