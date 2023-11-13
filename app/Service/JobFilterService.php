<?php

namespace App\Service;

use App\Models\Attribute;
use App\Models\Career;

class JobFilterService
{
    public static function getFilterJob()
    {
        $experience = Attribute::where('a_type', Attribute::TYPE_EXPERIENCE)->get();
        $ranks = Attribute::where('a_type', Attribute::TYPE_RANK)->get();
        $formOfWork = Attribute::where('a_type', Attribute::TYPE_FORM_OF_WORK)->get();
        $careers = Career::all();
        $viewData = [
            'experience' => $experience,
            'careers' => $careers,
            'ranks' => $ranks,
            'formOfWork' => $formOfWork,
        ];
        return $viewData;
    }
}
