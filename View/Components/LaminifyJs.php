<?php

namespace Vendor\Laminify\View\Components;

use Illuminate\View\Component;
use Vendor\Laminify\Helpers\Minifier;

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
