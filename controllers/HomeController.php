<?php

class HomeController extends BaseController
{
    function index() {
        $this->cats = $this->model->getCategories();
        $this->forMeContent = $this->model->getForMe();
        $this->sliderContent = $this->model->slider();
    }

    function mail()
    {
        if ($this->isPost) {
            $to = "root@localhost.com"; // this is your Email address
            $from = $_POST['email']; // this is the sender's Email address
            $full_name = $_POST['full_name']."\r\n";
            $subject = "Orders from \"Monys Kitchen\"";
            $message = $_POST['message'];
            $body = $full_name . $_POST['email'] . "<br>\r\n" . " Съобщение:" . "\r\n" .$message ;

            $headers = "From: Monys Kitchen";
            $headers = "Content-Type: text/html; charset=UTF-8";
            if (strlen($full_name) <= 1){
                $this->setValidationError("full_name", "Невалидно име");
                return;
            }
            if (strlen($from) <= 0 && filter_var($from, IS_VALIDATE_EMAIL)){
                $this->setValidationError("email", "Моля въведете валидна електронна поща");
                return;
            }
            if (strlen($message) <= 1){
                $this->setValidationError("message", "Съобщението не е валидно");
                return;
            }

            if (mail($to, $subject, $body, $headers)) {
                $this->addInfoMessage("Писмото е изпратено успешно!");
                $this->redirect("");
            } else {
                $this->addErrorMessage("Грешка: Писмото не е изпратено!");
            }

        }

    }
}
