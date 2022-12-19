<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Service;
use Livewire\Component;

class ServiceDetailsComponent extends Component
{
    public $slug;
    public function mount($slug){
        $this->slug = $slug;
    }

    public function render()
    {
        $service = Category::where('slug', $this->slug)->first();
        $p_services = Category::inRandomOrder()->limit(8)->get();
        $categories = Category::get();
        return view('livewire.service-details-component', ['service' => $service, 'p_services' => $p_services, 'categories' => $categories ]);
    }
}