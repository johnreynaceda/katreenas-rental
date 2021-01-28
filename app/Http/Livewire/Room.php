<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Room as roomModel;
use Livewire\WithPagination;

class Room extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $updateMode=false,$room,$payment,$room_id;

    public function render()
    {
        return view('livewire.room.room',[
            'rooms' => roomModel::paginate(10),
        ]);
    }


    public function save(){
        roomModel::create([
            'room' => $this->room,
            'amount' => $this->payment,
        ]);
        $this->alert(
            'success',
            'Room Added Successfully!'
        );
        $this->room="";
        $this->payment="";
        
           
    }

    public function edit($id){
        $this->updateMode=true;
        $data = roomModel::find($id);
        $this->room = $data->room;
        $this->payment = $data->amount;
        $this->room_id = $data->id;
    }

    public function canceledit(){
        $this->room="";
        $this->payment="";
        $this->updateMode=false;
    }

    public function saveedit(){
        $data = roomModel::find($this->room_id);
        $data->update([
            'room' => $this->room,
            'amount' => $this->payment,
        ]);
        $this->alert(
            'success',
            'Room Updated Successfully!'
        );
        $this->room="";
        $this->payment="";
        $this->updateMode=false;
    }
    
    public function delete($id)
    {
       roomModel::find($id)->delete();
       $this->alert(
        'success',
        'Room Deleted Successfully!'
    );
    }
}
