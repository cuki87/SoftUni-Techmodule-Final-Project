<?php

class UsersController extends BaseController
{
    public function index()
    {
        $this->users = $this->model->getUsers();
    }

    function getById(int $id)
    {
        $user = $this->model->getById($id);
        if (!$user){
            $this->addErrorMessage("Грешка: Няма такъв потребител");
            $this->redirect("");
        }
        $this->user = $user;
    }

    public function add()
    {
        if($this->isPost){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $passwordConfirm = $_POST['passwordConfirm'];
            $fullName = $_POST['fullName'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $profilePic = $_POST['profilePic'];
            $admin = $_POST['admin'];

            if (strlen($username) <= 1){
                $this->setValidationError("username", "Невалидно потребителско име");
                return;
            }
            if (strlen($password) <= 3){
                $this->setValidationError("password", "Паролата трябва да бъде поне 4 символа");
                return;
            }
            if ($password != $passwordConfirm){
                $this->setValidationError("passwordConfirm", "Паролите не съвпадат");
                return;
            }
            if (strlen($fullName) <= 0){
                $this->setValidationError("fullName", "Име и фамилия са задължителни");
                return;
            }
            if (strlen($email) <= 0){
                $this->setValidationError("email", "E-mail е задължителен");
                return;
            }
            if (strlen($phone) <= 0){
                $this->setValidationError("phone", "Телефонът е задължителен");
                return;
            }
            if (empty($admin)){
                $admin = null;
            }
            $user_id = $this->model->addUser($username, $password, $fullName, $email, $phone, $profilePic, $admin);
            if ($user_id !== false){
                $this->addInfoMessage("Потребител с ID ". $user_id ." е добавен");
                $this->redirect("users");
            }
            else{
                $this->addErrorMessage("Грешка: Неуспешно добавяне на потребител");
            }
        }
    }

    public function edit(int $id)
    {
        if ($this->isPost) {
            $username = $_POST['username'];
            $fullName = $_POST['fullName'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $profilePic = $_POST['profilePic'];
            $admin = $_POST['admin'];

            if (strlen($username) <= 1) {
                $this->setValidationError("username", "Невалидно потребителско име");
                return;
            }
            if (strlen($fullName) <= 0) {
                $this->setValidationError("fullName", "Име и фамилия са задължителни");
                return;
            }
            if (strlen($email) <= 0) {
                $this->setValidationError("email", "E-mail е задължителен");
                return;
            }
            if (strlen($phone) <= 0) {
                $this->setValidationError("phone", "Телефонът е задължителен");
                return;
            }
            if (empty($admin)) {
                $admin = null;
            }

            if ($this->formValid()) {
                if ($this->model->editUser($id, $username, $fullName, $email, $phone, $profilePic, $admin)) {
                    $this->addInfoMessage("Потребител с ID " . $id . " е редактиран");
                    $this->redirect("users");
                } else {
                    $this->addErrorMessage("Грешка: Неуспешно редактиране на потребителя");
                }
            }
        }
        $this->getByID($id);

    }

    public function delete(int $id)
    {
        if($this->model->deleteUser($id)){
            $this->addInfoMessage("Потребител с ID " . $id . " е изтрит");
            $this->redirect("users");
        } else {
            $this->addErrorMessage("Грешка: Неуспешно изтриване на потребителя");
        }
    }
    public function logout()
    {
		session_destroy();
        $this->redirect("");
    }
}
