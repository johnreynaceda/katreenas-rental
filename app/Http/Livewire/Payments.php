<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Boarder;
use App\Models\Payment as paymentModel;
use Livewire\WithPagination;

class Payments extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $boarders,$boarder_name,$boarder_id,$room,$monthly,$amount;
    public function render()
    {
        // $this->payments = \App\Models\Payment::where('boarder_id',$this->boarder_id)->paginate();
        $this->boarders = Boarder::all();
        return view('livewire.payments.payments',[
            'payments' => paymentModel::where('boarder_id',$this->boarder_id)->paginate(5),
        ]);
    }

    public function get($id){
        $data = Boarder::find($id);
        $this->boarder_id = $data->id;
        $this->boarder_name = $data->lastname.", ".$data->firstname." ".$data->middlename[0].".";
        $this->room = $data->room->room[1];
    //    dd($data->room->amount);
    $app =$data->appliances->sum('payment');
    $room_pay = $data->room->amount;
    $this->monthly = $room_pay+$app;
   
       
        

    }

    public function add(){
        
       paymentModel::create([
        'boarder_id' => $this->boarder_id,
        'amount' => $this->amount,
       ]);
       $this->alert(
        'success',
        'Payment Successfully!'
    );
    $this->amount ="";
    }
}
