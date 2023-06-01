<?php

class SignupController extends SignUp
{
    private $uname;
    private $password;
    private $confirmPassword;
    private $email;

    public function __construct($uname, $password, $confirmPassword, $email)
    {
        $this->uname = $uname;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;
        $this->email = $email;   
    }

    public function SignUpUser()
    {
        if($this->EmptyInput() == false)
        {
            header("location: ../SignUp.php?error=emptyinput");
            exit();
        }

        if($this->InvalidUid() == false)
        {
            header("location: ../SignUp.php?error=invalidusername");
            exit();
        }

        if($this->InvalidEmail() == false)
        {
            header("location: ../SignUp.php?error=invalidemail");
            exit();
        }

        if($this->PasswordMatch() == false)
        {
            header("location: ../SignUp.php?error=incorrectpass");
            exit();
        }

        if($this->CheckUserExists() == false)
        {
            header("location: ../SignUp.php?error=usernameoremailtaken");
            exit();
        }

        if ($this->CheckPasswordStrength() == false)
        {
            header("location: ../SignUp.php?error=passwordnotsecure");
            exit();
        }
        
        $this->SetUser($this->uname, $this->password, $this->email);
    }

    private function EmptyInput()
    {
        $result;

        if (empty($this->uname) || empty($this->password) || empty($this->confirmPassword) || empty($this->email))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }

        return $result;
    }

    private function InvalidUid()
    {
        $result;

        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uname))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }

        return $result;
    }

    private function InvalidEmail()
    {
        $result;

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }

        return $result;
    }

    private function PasswordMatch()
    {
        $result;

        if($this->password !== $this->confirmPassword)
        {
            $result = false;
        }
        else
        {
            $result = true;
        }

        return $result;
    }

    private function CheckUserExists()
    {
        $result;

        if(!$this->CheckUser($this->uname, $this->email))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }

        return $result;
    }

    private function CheckPasswordStrength()
    {
        $result;

        
        if (strlen($this->password) < 5)
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        
        return $result;
    }

    public function FetchUserID($uname)
    {
        $userId = $this->GetUserID($uname);

        return $userId[0]["UserID"];
    }
}