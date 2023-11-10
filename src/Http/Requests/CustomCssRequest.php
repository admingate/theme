<?php

namespace Admingate\Theme\Http\Requests;

use Admingate\Support\Http\Requests\Request;

class CustomCssRequest extends Request
{
    public function rules(): array
    {
        return [
            'custom_css' => 'nullable|string',
        ];
    }
}
