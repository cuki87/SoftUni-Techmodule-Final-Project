<?php

class UsersController extends BaseController
{
    public function profile(int $id)
    {
        if ($this->isPost) {
            $password = $_POST['password'];
            if (strlen($password) < 4) {
                $this->setValidationError("password", "Паролата трябва да бъде поне 4 символа");
            }
            $password_confirm = $_POST['passwordConfirm'];
            if ($password !== $password_confirm) {
                $this->setValidationError("passwordConfirm", "Паролите не съвпадат");
            }
            $full_name = $_POST['fullName'];
            if (strlen($full_name) <= 0) {
                $this->setValidationError("fullName", "Пълното име не може да бъде празно");
            }
            $email = $_POST['email'];
            if (strlen($email) <= 0) {
                $this->setValidationError("email", "Email не може да бъде празно");
            }
            $phone = $_POST['phone'];
            if (strlen($phone) <= 0) {
                $this->setValidationError("phone", "Телефонът не може да бъде празно");
            }

            if ($this->formValid()) {
                if ($this->model->editProfile($id, $password, $full_name, $email, $phone)) {
                    $this->addInfoMessage("Профилът е редактиран успешно");
                } else {
                    $this->addErrorMessage("Грешка: Неуспешно редактиране на профила");
                }
                $this->redirect("");
            }
        }

        $user = $this->model->getById($id);
        if (!$user){
            $this->addErrorMessage("Грешка: Няма такъв потребител");
            $this->redirect("");
        }
        $this->user = $user;
    }

    public function logout()
    {
		session_destroy();
        $this->redirect("");
    }
}
