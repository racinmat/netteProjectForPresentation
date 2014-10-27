<?php
namespace App\Presenters;
use Nette\Application\UI\Form;

class MistakePresenter extends BasePresenter {
    
    public function renderArray($variable) {
        $array = array("jedna", "dva", "tři");
        $this->template->first = $array[0];
    }

    public function renderGet($variable) {
        $this->template->getVariable = $variable;
        $this->template->getMistake = $variabble;
    }

}
