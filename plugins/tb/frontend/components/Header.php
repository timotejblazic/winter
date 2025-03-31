<?php namespace Tb\Frontend\Components;

use Cms\Classes\ComponentBase;
use Tb\Frontend\traits\AjaxControls;
use Winter\Storm\Support\Facades\Flash;
use Winter\Storm\Support\Facades\Input;

class Header extends ComponentBase
{
    use AjaxControls;

    /**
     * Gets the details for the component
     */
    public function componentDetails()
    {
        return [
            'name'        => 'header Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * Returns the properties provided by the component
     */
    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['input1'] = $this->InputAjax('number', 'input1', 'false', 'onGetNumber', 0);
        $this->page['input2'] = $this->InputAjax('number', 'input2', 'false', 'onGetNumber', 0);
        $this->page['reset'] = $this->ButtonAjax('Reset', 'onReset');
        $this->page['hide'] = $this->ButtonAjax('Hide', 'onHide');
    }

    public function onGetNumber()
    {
        $input1Value = Input::get("input1");

        $input2 = $this->InputAjax('number', 'input2', 'false', 'onGetNumber', $input1Value);

        return [
            '#input2_id' => $this->renderPartial('@input', ['input2' => $input2])
        ];
    }

    public function onReset()
    {
        $input1 = $this->InputAjax('number', 'input1', 'false', 'onGetNumber', 0);
        $input2 = $this->InputAjax('number', 'input2', 'false', 'onGetNumber', 0);

        return [
            '#controls' => $this->renderPartial('@controls', ['input1' => $input1, 'input2' => $input2])
        ];
    }

    public function onHide()
    {
        return [
            '#controls' => $this->renderPartial('@controls', ['hide' => 1])
        ];
    }
}
