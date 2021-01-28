<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Livewire\QrCode;
class Qr extends Component
{
    public function render()
    {
        QrCode::size(300)->generate('A basic example of QR code!');
        return view('livewire.qr');
    }
}
