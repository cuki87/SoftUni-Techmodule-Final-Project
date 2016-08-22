<?php

class HomeController extends BaseController
{
    function index() {
        $this->cats = $this->model->getCategories();
        $this->forMeContent = $this->model->getForMe();
        $this->sliderContent = $this->model->slider();
    }
}
