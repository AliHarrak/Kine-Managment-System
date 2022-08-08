<?php

namespace App\Http\Livewire;

use Vildanbina\LivewireTabs\TabsComponent;
use App\Models\User;



use Livewire\Component;

class UserTab extends TabsComponent
{
    public $userId;

    public function model()
    {
        return User::findOrNew($this->userId);
    }
}
