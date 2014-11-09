<?php
namespace App\Presenters;
use Nette\Application\UI\Form;

class RegisterPresenter extends BasePresenter {

    public function createComponentRegisterForm() {
        $form = new Form();
        $form->addText("login", "Zadejte jméno: ")
            ->setRequired("Jméno je povinné.");
        $form->addText("age", "Zadejte věk: ")
            ->setRequired("Věk je povinný.")
            ->setType('number')
            ->addRule(Form::RANGE, "Musíte být plnoletý.", array(18, null));
        $form->addPassword('password', "Zadejte heslo: ")
            ->setRequired("Heslo je povinné");
        $form->addSubmit("send", "Zaregistrovat se");
        $form->onSuccess[] = $this->registerFormSucceeded;
        return $form;
    }
    
    public function registerFormSucceeded(Form $form) {
        $values = $form->getValues();
        $this->redirect("Registered:", array("login" => $values->login));
    }

}
