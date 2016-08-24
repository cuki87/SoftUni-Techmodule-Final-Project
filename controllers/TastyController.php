<?php

class TastyController extends BaseController
{
    function index(){
        $this->cats = $this->model->index();
    }
    function products(int $cat_id)
    {
        $this->products = $this->model->products($cat_id);
        //$this->title = $this->model->products($cat_id)['cat_name'];
    }

    function productView(int $id)
    {
        $this->product = $this->model->productView($id);
    }
}