<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductForm extends Component
{
    public $action;
    public $buttonText;
    public $product;
    
        public function __construct($action, $buttonText = 'Submit' ,$product = null)
        {
            $this->action = $action;
            $this->buttonText = $buttonText;
            $this->product = $product;
            
            
        }

   
    public function render(): View|Closure|string
    {
        return view('components.product-form');
    }
}

