<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Boarder;
use App\Models\Logs as logsModel;
use Livewire\WithPagination;
use Carbon\Carbon;

class Logs extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $qr;
    public function render()
    {
        if($this->qr == null){

        }else{
         $data = $this->qr[0];
        $get = Boarder::find($data);
            logsModel::create([
                'boarder_id' => $get->id,
            ]);
            $this->alert(
                'success',
                'Logs Added Successfully!'
            );
            $this->qr = null;
        }
        return view('livewire.logs.logs',[
            'logss' => logsModel::where('created_at','>=', Carbon::Today())->paginate(10),
        ]);
    }
}
