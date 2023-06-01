<?php

class LoginController extends Login
{
    private $uname;
    private $password;
    

    public function __construct($uname, $password)
    {
        $this->uname = $uname;
        $this->password = $password;
    }

    public function LoginUser()
    {
        if($this->EmptyInput() == false)
        {
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        $this->GetUser($this->uname, $this->password);
    }

    private function EmptyInput()
    {
        $result;

        if (empty($this->uname) || empty($this->password))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }

        return $result;
    }

   
}