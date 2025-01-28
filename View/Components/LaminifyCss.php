<?php

namespace Vendor\Laminify\View\Components;

use Illuminate\View\Component;
use Vendor\Laminify\Helpers\Minifier;

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
