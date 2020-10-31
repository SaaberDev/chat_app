<?php

namespace App\Http\Livewire;

use App\Http\Requests\CustomerRequest;
use Livewire\Component;

class AddCustomers extends Component
{
    public function render(CustomerRequest $request)
    {
        return view('livewire.add-customers');
    }
}
