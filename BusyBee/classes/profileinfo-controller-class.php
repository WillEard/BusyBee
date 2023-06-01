<?php

class ProfileInfoController extends ProfileInfo
{
    private $userID;
    private $userName;

    public function __construct($userID, $userName)
    {
        $this->userID = $userID;
        $this->userName = $userName;
    }

    public function DefaultProfileInfo()
    {
        $profileAbout = "Talk about yourself here!";
        $profileTitle = $this->userName;
        $profileText = "Welcome to my profile!";

        $this->SetDefaultProfileInfo($profileAbout, $profileTitle, $profileText, $this->userID);
    }

    public function DefaultProfileBasicInfo()
    {
        $firstName = "First Name";
        $surname = "Surname";
        $phoneNumber = "00000000000";

        $this->SetDefaultProfileBasicInfo($firstName, $surname, $phoneNumber, $this->userID);
    }

    public function UpdateProfileInfo($about, $introTitle, $introText)
    {
        //Error Handling
        if ($this->EmptyInputCheck($about, $introTitle, $introText) == true)
        {
            header("location: profilesettings.php?error=emptyinput");
            exit();
        }

        // Update profile information
        $this->SetNewProfileInfo($about, $introTitle, $introText, $this->userID);
    }

    public function UpdateProfileBasicInfo($firstName, $surname, $phoneNo)
    {
        /*
        if ($this->EmptyInputCheckBasicInfo($firstName, $surname, $phoneNo) == true)
        {
            header("location: profilesettings.php?error=emptyinput");
            exit();
        }
        */

        $this->SetNewProfileBasicInfo($firstName, $surname, $phoneNo, $this->$userID);
    }

    private function EmptyInputCheck($about, $introTitle, $introText)
    {
        $result;

        if (empty($about) || empty($introTitle) || empty($introTitle))
        {
            $result = true;
        }
        else
        {
            $result = false;
        }

        return $result;
    }

    private function EmptyInputCheckBasicInfo($firstName, $surname, $phoneNo)
    {
        $result;

        if (empty($firstName) || empty($surname) || empty($phoneNo))
        {
            $result = true;
        }
        else
        {
            $result = false;
        }

        return $result;
    }
}