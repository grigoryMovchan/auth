<?php

/**
 * Регистрация нового пользователя
 */
class JoinController extends Controller
{

    public function getPage()
    {
        if (isset($_POST['send'])) {
            if ($this->auth->reg($_POST['login'], $_POST['password'], $_POST['password2'], $_POST['mail'])) {
                $this->view->generate('/auth/joinSuccessful.php', 'authTemplate.php');
            } else {
                $this->error = $this->auth->getErrors();
                $this->view->generate('/auth/joinForm.php', 'authTemplate.php', $this->data, $this->error);
            }
        } else {
            $this->view->generate('/auth/joinForm.php', 'authTemplate.php');
        }
    }

}
