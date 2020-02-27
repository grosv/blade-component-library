<?php


namespace Grosv\BladeComponentLibrary\Components;

use Illuminate\View\Component;

class SuccessAlertComponent extends Component
{


   /** @var string */
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }


    public function render()
    {
        return view('components.success_alert');
    }
}