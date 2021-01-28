<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Room;
use App\Models\Appliance;
use App\Models\Boarder as boarderModel;

class Boarder extends Component
{
    public $rooms,$appliances,$addModal=false,$updateModal=false, $qrmodal=false,$qr,$updateMode=false;
    public $search;
    public $fname,$mname,$lname,$bdate,$address,$contact,$email,$room_id,$appliance_id=[],$boader_id;
    public function render()
    {
        $this->rooms = Room::all();
        $this->appliances = Appliance::all();
        return view('livewire.boarder.boarder',[
            'boarders' => boarderModel::where('lastname', 'like', '%'.$this->search.'%')->orWhere('firstname', 'like', '%'.$this->search.'%')->orWhere('firstname', 'like', '%'.$this->search.'%')->paginate(10),
        ]);
    }
    public function add(){
        $this->addModal=true;  

       
    }

    public function save(){
       $data = boarderModel::create([
        'firstname' => $this->fname,
        'middlename' => $this->mname,
        'lastname' => $this->lname,
        'birthdate' => $this->bdate,
        'address' => $this->address,
        'contact' => $this->contact,
        'email' => $this->email,
        'room_id' => $this->room_id,
       ]);

       $boarder = boarderModel::find($data->id);
       $boarder->appliances()->attach($this->appliance_id);
       $this->fname = "";
       $this->mname = "";
       $this->lname = "";
       $this->bdate = "";
       $this->address = "";
       $this->contact ="";
       $this->email = "";
       $this->room_id = null;
    $this->addModal=false;
    $this->emit('swal:modal', [
        'type'  => 'success',
        'title' => 'Boarder Added Successfully!',
        
    ]);
    }

    public function qr($id){
       $this->qrmodal=true;
       $this->qr = $id;
    //    dd($this->qr);
    }
    public function edit($id){
        $this->updateModal=true;
        $data = boarderModel::find($id);
        $this->fname = $data->firstname;
        $this->mname = $data->middlename;
        $this->lname = $data->lastname;
        $this->bdate = $data->birthdate;
        $this->address = $data->address;
        $this->contact = $data->contact;
        $this->email = $data->email;
        $this->room_id = $data->room_id;
        $this->boader_id = $data->id;
    }
    public function canceledit(){
        $this->updateModal=false;
        $this->fname = "";
        $this->mname = "";
        $this->lname = "";
        $this->bdate = "";
        $this->address = "";
        $this->contact ="";
        $this->email = "";
        $this->room_id = null;
    }

    public function saveedit(){
        $data = boarderModel::find($this->boader_id);
        $data->update([
            'firstname' => $this->fname,
            'middlename' => $this->mname,
            'lastname' => $this->lname,
            'birthdate' => $this->bdate,
            'address' => $this->address,
            'contact' => $this->contact,
            'email' => $this->email,
            'room_id' => $this->room_id,
        ]);
        $boarder = boarderModel::find($data->id);
       $boarder->appliances()->sync($this->appliance_id);
   
       $this->fname = "";
       $this->mname = "";
       $this->lname = "";
       $this->bdate = "";
       $this->address = "";
       $this->contact ="";
       $this->email = "";
       $this->room_id = null;
       $this->updateModal=false;
    }

    public function delete($id){
        $boarder = boarderModel::find($id);
        $boarder->appliances()->detach($this->appliance_id);
        boarderModel::find($id)->delete();
    }


}
