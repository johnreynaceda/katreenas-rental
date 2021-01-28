<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Appliance as applianceModel;


class Appliance extends Component
{
    public $updateMode=false,$appliance,$payment,$appliance_id;
    public function render()
    {
        return view('livewire.appliance.appliance',[
            'appliances' => applianceModel::paginate(10),
        ]);
    }

    public function save(){
        applianceModel::create([
            'appliance' => $this->appliance,
            'payment' => $this->payment,
        ]);
        $this->alert(
            'success',
            'Appliances Added Successfully!'
        );
        $this->appliance="";
        $this->payment="";
        
           
    }

    public function edit($id){
        $this->updateMode=true;
        $data = applianceModel::find($id);
        $this->appliance = $data->appliance;
        $this->payment = $data->payment;
        $this->appliance_id = $data->id;
    }

    public function canceledit(){
        $this->appliance="";
        $this->payment="";
        $this->updateMode=false;
    }

    public function saveedit(){
        $data = applianceModel::find($this->appliance_id);
        $data->update([
            'appliance' => $this->appliance,
            'payment' => $this->payment,
        ]);
        $this->alert(
            'success',
            'Appliances Updated Successfully!'
        );
        $this->appliance="";
        $this->payment="";
    }
    
    public function delete($id)
    {
       applianceModel::find($id)->delete();
       $this->alert(
        'success',
        'Appliances Deleted Successfully!'
    );
    }
}
