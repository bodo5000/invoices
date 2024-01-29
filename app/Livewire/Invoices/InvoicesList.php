<?php

namespace App\Livewire\Invoices;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layout.dashboard.index')]
#[Title('invoice-list')]
class InvoicesList extends Component
{
    public function render()
    {
        return view('livewire.invoices.invoices-list');
    }
}
