<?php

class ProductsController extends BaseController
{
    function index()
    {
      $this->products = $this->model->getProducts();
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
            $price = $_POST['price'];

            $picture = $_POST['picture'];

            $category = $_POST['category'];
            if ($category == 0) {
                $this->setValidationError("$category", "Трябва да изберете категория");
            }

            if ($this->formValid()) {
                if ($this->model->addProduct($name, $description, $price, $picture, $category)) {
                    $this->addInfoMessage("Продуктът е добавен успешно");
                    $this->redirect("products");
                } else {
                    $this->addErrorMessage("Грешка: Неуспешно добавяне на продукт");
                }
            }
        }
        $this->getCategories();
    }

    function getByID(int $id){
        $product = $this->model->getById($id);
        if (!$product){
            $this->addErrorMessage("Грешка: Няма такъв продукт");
            $this->redirect("products");
        }
        $this->product = $product;
    }

    function getCategories()
    {
        $this->categories = $this->model->getCategories();
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
            $picture = $_POST['picture'];

            $price = $_POST['price'];

            $category = $_POST['category'];
            if ($category == 0) {
                $this->setValidationError("$category", "Трябва да изберете категория");
            }

            if ($this->formValid()) {
                if ($this->model->editProduct($id, $name, $description, $picture, $price, $category)) {
                    $this->addInfoMessage("Продуктът е редактиран успешно");
                    $this->redirect("products");
                } else {
                    $this->addErrorMessage("Грешка: Неуспешно редактиране на продукта");
                }
            }
        }
        $this->getByID($id);
        $this->getCategories();
    }

    function delete(int $id)
    {
        if ($this->isPost){
            if($this->model->deleteProduct($id)){
                $this->addInfoMessage("Продуктът е изтрит успешно");
            }
            else{
                $this->addErrorMessage("Грешка: Неуспешно изтриване на продукт");
            }
            $this->redirect("products");
        }
        else{
            $this->getByID($id);
        }
    }
}
