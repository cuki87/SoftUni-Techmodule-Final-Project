<?php

class FormeController extends BaseController
{
    function index()
    {
      $this->content = $this->model->getForMe();
    }

    function updateContent()
    {
        if ($this->isPost) {
            if ($_POST['act'] == 'photo'){
                $photo = $_POST['photo'];
                if ($photo <= 0) {
                    $this->setValidationError("photo", "Избери снимка");
                }
                if ($this->formValid()) {
                    if ($this->model->changePhoto($photo)) {
                        $this->addInfoMessage("Снимката е сменена успешно");
                        $this->redirect("forme");
                    } else {
                        $this->addErrorMessage("Грешка: Неуспешна смяна на снимката");
                    }
                }
            }
            else if($_POST['act'] == 'content') {
                $content = $_POST['content'];
                if ($this->formValid()) {
                    if ($this->model->editForMe($content)) {
                        $this->addInfoMessage("Информацията е редактирана успешно");
                        $this->redirect("forme");
                    } else {
                        $this->addErrorMessage("Грешка: Неуспешно редактиране на информацията");
                    }
                }
            }
        }
    }
}
