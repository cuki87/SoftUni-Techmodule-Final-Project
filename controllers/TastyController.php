<?php

class TastyController extends BaseController
{
    function index(){
        $this->cats = $this->model->index();
    }
    function products(int $cat_id)
    {
        $this->products = $this->model->products($cat_id);
       if (!$this->products){
           $this->addErrorMessage("Грешка: Няма такава категория");
           $this->redirect('tasty');
       }
    }

    function productView(int $id)
    {
        $this->product = $this->model->productView($id);
        if (!$this->product){
            $this->addErrorMessage("Грешка: Няма такъв продукт");
            $this->redirect('tasty');
        }
    }
}