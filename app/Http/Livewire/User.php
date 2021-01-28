<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User as userModel;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;

class User extends Component
{
    use WithPagination;
    public $name,$email,$password;
    public function render()
    {
       
        return view('livewire.user.user',[
            'users' => userModel::paginate(10),
        ]);
    }

    public function save(){
        userModel::create([
            'name' => $this->name,
            'email'=>$this->email,
            'password' => Hash::make($this->password),
        ]);
        $this->alert(
            'success',
            'User Added Successfully!'
        );
        $this->name="";
        $this->email="";
        $this->password="";
    }
}
