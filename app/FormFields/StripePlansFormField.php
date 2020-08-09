<?php

namespace App\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;

class StripePlansFormField extends AbstractHandler
{
    protected $codename = 'plan_features';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('formfields.plan_features', [
            'row' => $row,
            'options' => $options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent
        ]);
    }
}
