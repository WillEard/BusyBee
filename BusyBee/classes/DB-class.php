<?php

    class DBClass
    {
        protected function Connect()
        {
            try
            {
                $username = "root";
                $password = "";

                $databaseManager = new PDO('mysql:host=localhost;dbname=busy bee', $username, $password);

                return $databaseManager;
            }
            catch(PDOException $e)
            {
                echo 'Exception Caught: ', $e->getMessage(), "<br/>";
                die();
            }
        }
    }
    ?>


