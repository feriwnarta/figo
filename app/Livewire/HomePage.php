<?php

namespace App\Livewire;

use App\Models\Sensor;
use Livewire\Component;
use Livewire\WithPagination;

class HomePage extends Component
{

    use WithPagination;

    public function render()
    {
        $data = Sensor::orderBy('created_at', 'desc')->first();
        $history = Sensor::orderBy("created_at", "desc")->paginate(10);
        return view('livewire.home-page', [
            'sensor' => $data,
            "histories" => $history
        ]);
    }
}
