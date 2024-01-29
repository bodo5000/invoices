<?php

namespace App\Livewire\Dashboard;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layout.dashboard.index')]
#[Title('dashBoard')]
class Dashboard extends Component
{

    public function render()
    {
        return view('livewire.dashboard.dashboard');
    }
}
