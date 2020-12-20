<?php

namespace App\Http\Livewire\Admin\Admin;

use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin.admin-dashboard-component')->layout('layouts.base');
    }
}
