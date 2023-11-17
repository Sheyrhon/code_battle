<?php

namespace App\Http\Livewire\Web;

use Livewire\Component;

class Hello extends Component
{
    public $i = 0;
    public function toster(){
        $this->i++;
    }
    public function render()
    {
        return view('livewire.web.hello');
    }
}
