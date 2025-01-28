<?php

namespace Akufikri\Laminify\View\Components;

use Illuminate\View\Component;
use Akufikri\Laminify\Helpers\Minifier;

class LaminifyCss extends Component
{
    public function render()
    {
        return function (array $data) {
            $content = Minifier::minifyCss($data['slot']);
            return "<style>{$content}</style>";
        };
    }
}
