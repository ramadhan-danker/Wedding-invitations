<?php

namespace App\Forms\Components;

use App\Models\Theme;
use Filament\Forms\Components\Field;

class RadioTheme extends Field
{
    protected string $view = 'forms.components.radio-theme';

    public $message;
}