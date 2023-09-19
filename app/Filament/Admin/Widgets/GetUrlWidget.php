<?php

namespace App\Filament\Admin\Widgets;

use Filament\Facades\Filament;
use Filament\Widgets\Widget;
use Illuminate\Contracts\View\View;

class GetUrlWidget extends Widget
{
    protected static string $view = 'filament.admin.widgets.get-url-widget';

    protected function getViewData(): array
    {
        return [
            'url' => Filament::getPanel('tenant')->getUrl(),
        ];
    }
}
