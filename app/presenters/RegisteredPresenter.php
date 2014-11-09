<?php
namespace App\Presenters;

class RegisteredPresenter extends BasePresenter {

    public function renderDefault($login) {
        $this->template->registered = "Jste registrován jako $login.";
    }

}
