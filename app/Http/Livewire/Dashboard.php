<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Logs;
use App\Models\Boarder;
use App\Models\Room;
use App\Models\Appliance;
use Carbon\Carbon;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {

        return view('livewire.dashboard.dashboard',[
            'logss' => Logs::where('created_at','>=',Carbon::Today())->paginate(5),
            'boarder' => Boarder::all()->count(),
            'room' => Room::all()->count(),
            'appliances' => Appliance::all()->count(),
        ]);
    }
}
