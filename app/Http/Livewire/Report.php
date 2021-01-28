<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Logs;

class Report extends Component
{
    public function render()
    {
        return view('livewire.report',[
            'logss' => Logs::all()->where('created_at','>=', \Carbon\Carbon::Today()),
        ]);
    }
}
