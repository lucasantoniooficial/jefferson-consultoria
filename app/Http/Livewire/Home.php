<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class Home extends Component
{
    public $open = true;

    public $quantity;

    public $price;
    public $results = [];

    protected $rules = [
        'price' => 'required',
        'quantity' => 'required'
    ];


    public function save()
    {
        $this->validate();

        array_push($this->results, [
            'price' => $this->price,
            'quantity' => $this->quantity,
            'total' => $this->price * $this->quantity
        ]);

        $this->reset(['price', 'quantity']);
    }

    public function confirmSave()
    {
        Order::query()->insert($this->results);
    }
    public function render()
    {
        return view('livewire.home');
    }
}
