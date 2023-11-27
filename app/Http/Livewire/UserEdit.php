<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserEdit extends Component
{
    public $user_id;
    public $name;
    public $email;

    public function mount($users)
    {
        $this->user_id = $users->id;
        $this->name = $users->name;
        $this->email = $users->email;
    }

    public function render()
    {
        return view('livewire.user-edit');
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email,' . $this->user_id,
        ]);

        User::where('id', $this->user_id)->update([
            'name' => $this->name,
            'email' => $this->email
        ]);

        return redirect()->route('home')->with('success', 'data telah diubah');
    }
}
