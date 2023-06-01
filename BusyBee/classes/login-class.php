<?php


class Login extends DBClass
{
    protected function GetUser($userID, $pass)
    {
        $stmt = $this->Connect()->prepare('SELECT Pass FROM users WHERE Username = ? OR Email = ?;');

        if (!$stmt->execute(array($userID, $pass)))
        {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0)
        {
            $stmt = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }

        $hashedPW = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPass = password_verify($pass, $hashedPW[0]["Pass"]);

        if (!$checkPass)
        {
            $stmt = null;
            header("location: ../index.php?error=incorrectpassword");
            exit();
        }
        elseif($checkPass)
        {
            $stmt = $this->Connect()->prepare('SELECT * FROM users WHERE Username = ? OR Email = ? AND Pass = ?;');

            if (!$stmt->execute(array($userID, $userID, $pass)))
            {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            if ($stmt->rowCount() == 0)
            {
                $stmt = null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["UserID"];
            $_SESSION["username"] = $user[0]["Username"];

            $stmt = null;
        }

        
    }

}