<?php

namespace App\View\Components;

use Illuminate\View\Component;

class card extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $id;
    public $name;
    public $price;
    public $img;
    public $description;
    public function __construct($name,$price,$img,$description,$id)
    {
        //
        $this->name=$name;
        $this->price=$price;
        $this->img=$img;
        $this->description=$description;
        $this->id=$id;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card');
    }
}
