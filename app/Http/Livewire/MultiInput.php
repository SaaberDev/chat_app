<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use App\Models\faq;
use Illuminate\Http\Request;
use Livewire\Component;

class MultiInput extends Component
{
    public $input = 1;

    public function incrementInput()
    {
        $this->input++;
    }

    public function decrementInput()
    {
        $this->input--;
    }


    public function render()
    {
        return view('livewire.multi-input');
    }
}
