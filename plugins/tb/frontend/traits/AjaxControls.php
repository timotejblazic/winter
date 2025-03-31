<?php

namespace Tb\Frontend\traits;

trait AjaxControls
{
    public function InputAjax($type='', $name='', $dataTrack='false', $dataRequest='', $value='')
    {
        return '
            <input type="' . $type . '" value="' . $value . '" name="' . $name . '" id="' . $name . '" data-track-input="' . $dataTrack . '" data-request="' . $dataRequest . '" data-request-flash="">
        ';
    }

    public function ButtonAjax($name='', $dataRequest='')
    {
        return '
            <button class="btn btn-primary" type="submit" data-request="' . $dataRequest . '">' . $name . '</button>
        ';
    }
}
