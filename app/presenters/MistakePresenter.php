<?php
namespace App\Presenters;

use App\Model\ClassWithName;

class MistakePresenter extends BasePresenter {
    
    public function renderArray($variable) {
        $array = array("jedna", "dva", "tři");
        $this->template->first = $aray[0];
    }

    public function renderGet($variable) {
        $this->template->getVariable = $variable;
        $this->template->getMistake = $variabble;
    }
    
    public function renderObject() {
        $object = new ClassWithName("tested");
        $object->namee = "notTested";
    }

}
