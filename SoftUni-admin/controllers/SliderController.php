<?php

class SliderController extends BaseController
{
    function index() {
      $this->slides = $this->model->getSlides();
    }

    function getById(int $id)
    {
        $slide = $this->model->getById($id);
        if (!$slide){
            $this->addErrorMessage("Грешка: Няма такъв слайд");
            $this->redirect("");
        }
        $this->slide = $slide;
    }

    public function add()
    {
        if ($this->isPost){
            $slide = $_POST['slide'];
            if ($slide <= 0){
                $this->setValidationError("slide", "Качи слайд");
            }
            if ($this->formValid()) {
                if ($this->model->addSlide($slide)) {
                    $this->addInfoMessage("Слайдът е добавен успешно");
                    $this->redirect("slider");
                } else {
                    $this->addErrorMessage("Грешка: Неуспешно добавяне на слайд");
                }
            }
        }
    }
    public function delete(int $id)
    {
        if($this->model->deleteSlide($id)){
            $this->addInfoMessage("Слайдът е изтрит успешно");
            $this->redirect("slider");
        } else {
            $this->addErrorMessage("Грешка: Неуспешно изтриване на слайд");
        }
    }
}
