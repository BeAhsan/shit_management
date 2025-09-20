<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TableActions extends Component
{
    public $editRoute;
    public $deleteRoute;
    public $showRoute;
    public $modelId;
    public $editText;
    public $deleteText;
    public $showText;
    public $showIcon;
    public $size;
    public $vertical;
    public $deleteConfirmation;
    public $extraButtons;

    public function __construct(
        $editRoute = null,
        $deleteRoute = null,
        $showRoute = null,
        $modelId = null,
        $editText = 'Edit',
        $deleteText = 'Delete',
        $showText = 'View',
        $showIcon = true,
        $size = 'sm',
        $vertical = false,
        $deleteConfirmation = 'Are you sure you want to delete this item?',
        $extraButtons = []
    )
    {
        $this->editRoute = $editRoute;
        $this->deleteRoute = $deleteRoute;
        $this->showRoute = $showRoute;
        $this->modelId = $modelId;
        $this->editText = $editText;
        $this->deleteText = $deleteText;
        $this->showText = $showText;
        $this->showIcon = $showIcon;
        $this->size = $size;
        $this->vertical = $vertical;
        $this->deleteConfirmation = $deleteConfirmation;
        $this->extraButtons = $extraButtons;
    }

    public function render()
    {
        return view('components.table-actions');
    }
}
