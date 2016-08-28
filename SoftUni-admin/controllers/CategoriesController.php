<?php

class CategoriesController extends BaseController
{
    function index()
    {
      $this->categories = $this->model->getCategories();
    }

    function add()
    {
        if ($this->isPost) {
            $name = $_POST['name'];
            if (strlen($name) <= 0) {
                $this->setValidationError("name", "Полето не може да бъде празно");
            }
            $description = $_POST['description'];
            if (strlen($description) <= 0) {
                $this->setValidationError("description", "Полето не може да бъде празно");
            }
            elseif (strlen(utf8_decode($description)) > 50){
                $this->setValidationError("description", "Полето не може да съдържа повече от 50 символа");
            }
            $picture = $_POST['picture'];

            if ($this->formValid()) {
                if ($this->model->addCategory($name, $description, $picture)) {
                    $this->addInfoMessage("Категорията е добавена успешно");
                    $this->redirect("categories");
                } else {
                    $this->addErrorMessage("Грешка: Неуспешно добавяне на категорията");
                }
            }
        }
    }

    function getByID(int $id){
        $category = $this->model->getById($id);
        if (!$category){
            $this->addErrorMessage("Грешка: Няма такава категория");
            $this->redirect("categories");
        }
        $this->category = $category;
    }

    function edit(int $id)
    {
        if ($this->isPost) {
            $name = $_POST['name'];
            if (strlen($name) <= 0) {
                $this->setValidationError("name", "Полето не може да бъде празно");
            }
            $description = $_POST['description'];
            if (strlen($description) <= 0) {
                $this->setValidationError("description", "Полето не може да бъде празно");
            }
            elseif (strlen(utf8_decode($description)) > 50){
                $this->setValidationError("description", "Полето не може да съдържа повече от 50 символа");
            }
            $picture = $_POST['picture'];

            if ($this->formValid()) {
                if ($this->model->editCategory($id, $name, $description, $picture)) {
                    $this->addInfoMessage("Категорията е редактирана успешно");
                    $this->redirect("categories");
                } else {
                    $this->addErrorMessage("Грешка: Неуспешно редактиране на категорията");
                }
            }
        }
        $this->getByID($id);
    }

    function delete(int $id)
    {
      if ($this->isPost){
          if($this->model->deleteCategory($id)){
              $this->addInfoMessage("Категорията е изтрита успешно");
          }
          else{
              $this->addErrorMessage("Грешка: Неуспешно изтриване на категория");
          }
          $this->redirect("categories");
      }
      else{
          $this->getByID($id);
      }
    }
}
