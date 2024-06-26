<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $classAlert;
    public $classAlertClose;
    /**
     * Create a new component instance.
     */
    public function __construct($type = 'success')
    {
        switch ($type) {
            case 'success':
                $this->classAlert = 'bg-green-100 border border-green-400 text-green-700';
                $this->classAlertClose = 'text-green-500';
                break;
            case 'error':
                $this->classAlert = 'bg-red-100 border border-red-400 text-red-700';
                $this->classAlertClose = 'text-red-500';
                break;
            default:
                $this->classAlert = 'bg-gray-100 border border-gray-400 text-gray-700';
                $this->classAlertClose = 'text-danger-500';
                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
