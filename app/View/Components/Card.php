<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $id;
    public $title;
    public $photo;
    public $desc;
    public $author;
    public function __construct($data)
    {
        $this->id = $data->id;
        $this->title = $data->title;
        $this->photo = $data->photo_url;
        $this->desc = $data->description;
        $this->author = $data->author_id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.card');
    }
}
