<?php

class UsersController extends BaseController
{
    public function login()
    {
      if($this->isPost){
          $username = $_POST['username'];
          $password = $_POST['password'];
          $user_id = $this->model->login($username, $password);

          if ($user_id !== false){
              $_SESSION['username'] = $username;
              $_SESSION['user_id'] = $user_id;
              $avatar = $this->model->getAvatar($user_id);
              $_SESSION['avatar'] = $avatar['profile_picture'];
              $this->addInfoMessage("Влязохте успешно");
              $this->redirect("");
          }
          else{
              $this->addErrorMessage("Грешка: Неуспешен вход");
          }
      }
    }

    public function register()
    {
		if($this->isPost){
		    $username = $_POST['username'];
		    $password = $_POST['password'];
		    $passwordConfirm = $_POST['passwordConfirm'];
		    $fullName = $_POST['fullName'];
		    $email = $_POST['email'];
		    $phone = $_POST['phone'];
		    $profilePic = $_POST['profilePic'];

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
            /*
            if (strlen($profilePic) <= 0){
                $this->addErrorMessage("Профилната снимка е задължителна");
                return;
            }

            $UploadedFileName=$_FILES['profilePic']['name'];
            if($UploadedFileName!='')
            {
                $upload_directory = APP_ROOT."/content/uploads/profilePics"; //This is the folder which you created just now
                $TargetPath=time().$UploadedFileName;
                var_dump($TargetPath);
                if(move_uploaded_file($_FILES['files']['tmp_name'], $upload_directory.$TargetPath))
                {

                }
            }
*/
            $user_id = $this->model->register($username, $password, $fullName, $email, $phone);
            if ($user_id !== false){
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $user_id;
                $this->addInfoMessage("Регистрацията е успешна");
                $this->redirect("");
            }
            else{
                $this->addErrorMessage("Грешка: Регистрацията е неуспешна");
            }
        }
    }

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
