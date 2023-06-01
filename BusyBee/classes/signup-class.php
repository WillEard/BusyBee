<?php

class SignUp extends DBClass
{

    protected function SetUser($userID, $pass, $email)
    {
        $stmt = $this->Connect()->prepare('INSERT INTO users (Username, Pass, Email, Subscriber) VALUES (?, ?, ?, FALSE);');

        $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($userID, $hashedPass, $email)))
        {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

   protected function CheckUser($userID, $email)
   {
        $stmt = $this->Connect()->prepare('SELECT Username FROM users WHERE Username = ? OR Email = ?;');

        if (!$stmt->execute(array($userID, $email)))
        {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        
        $resultCheck;
        if($stmt->rowCount() > 0)
        {
            $resultCheck = false;
        }
        else
        {
            $resultCheck = true;
        }
        
        return $resultCheck;
   }

   protected function GetUserID($uname)
    {
        $stmt = $this->Connect()->prepare('SELECT UserID FROM users WHERE Username = ?;');

        if (!$stmt->execute(array($uname)))
        {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0)
        {
            $stmt = null;
            header("location: profile.php?error=profilenotfound");
            exit();
        }

        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $profileData;
    }


    
}