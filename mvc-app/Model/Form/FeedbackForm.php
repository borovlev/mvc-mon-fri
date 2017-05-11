<?php

namespace Model\Form;

use Library\Request;

class FeedbackForm
{
    public $email;
    public $author;
    public $message;
    public $flashMessage;

    public function __construct(Request $request)
    {
        $this->email = $request->post('email');
        $this->author = $request->post('author');
        $this->message = $request->post('message');
    }

    public function isValid()
    {
        // TODO: create
        $this->flashMessage = ' ';

        if (empty($this->email) or empty($this->author) or empty($this->message)) {
            $this->flashMessage = "Заполните все поля";
            return false;
        }
        elseif (preg_match('/[0-9]/', $this->author)) {
            $this->flashMessage = "Имя не должно содержать цифры!";
            return false;

        }
        elseif (!preg_match('/@/', $this->email))
        {
            $this-$flashMessage = "Не правильный электронный адрес";
            return false;

        }
        else {
            return true;
        }

    }
}