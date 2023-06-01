<?php

// MVC - MODEL CLASS

class ProfileInfo extends DBClass{

    protected function GetProfileInfo($userID)
    {
        $stmt = $this->Connect()->prepare('SELECT * FROM profiles WHERE users_id = ?;');

        if (!$stmt->execute(array($userID)))
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

    // UPDATES information for profile when user writes their own.
    protected function SetNewProfileInfo($profileAbout, $profileTitle, $profileText, $userID)
    {
        $stmt = $this->Connect()->prepare('UPDATE profiles SET profiles_about = ?, profiles_introtitle = ?, profiles_introtext = ? WHERE users_id = ?;');

        if (!$stmt->execute(array($profileAbout, $profileTitle, $profileText, $userID)))
        {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function SetNewProfileBasicInfo($firstName, $surname, $phoneNumber, $userID)
    {
        $stmt = $this->Connect()->prepare('UPDATE profiles SET FirstName = ?, Surname = ?, PhoneNo = ? WHERE users_id = ?;');

        if (!$stmt->execute(array($firstName, $surname, $phoneNumber, $userID)))
        {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    // DEFAULT for when user creates their account
    protected function SetDefaultProfileInfo($profileAbout, $profileTitle, $profileText, $userID)
    {
        $stmt = $this->Connect()->prepare('INSERT INTO profiles (profiles_about, profiles_introtitle,  profiles_introtext, users_id) VALUES (?, ?, ?, ?);');

        if (!$stmt->execute(array($profileAbout, $profileTitle, $profileText, $userID)))
        {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function SetDefaultProfileBasicInfo($firstName, $surname, $phoneNumber, $userID)
    {
        $stmt = $this->Connect()->prepare('UPDATE profiles SET FirstName = ?, Surname = ?, PhoneNo = ? WHERE users_id = ?;');

        if (!$stmt->execute(array($firstName, $surname, $phoneNumber, $userID)))
        {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }
}