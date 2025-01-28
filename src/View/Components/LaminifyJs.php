<?php

namespace Akufikri\Laminify\View\Components;

use Illuminate\View\Component;
use Akufikri\Laminify\Helpers\Minifier;

class LaminifyJs extends Component
{
    public function render()
    {
        return function (array $data) {
            $content = Minifier::minifyJs($data['slot']);
            return "<script>{$content}</script>";
        };
    }
}
