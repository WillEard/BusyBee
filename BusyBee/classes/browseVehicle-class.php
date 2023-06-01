<?php


class Browse extends DBClass
{
    protected function GetRows()
    {
        $stmt = $this->Connect()->prepare('SELECT * FROM vehicles');

        if (!$stmt->execute(array()))
        {
            $stmt = null;
            header("location: ../Browse.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0)
        {
            $stmt = null;
            header("location: ../Browse.php?error=nothingfound");
            exit();
        }

        $rowData = $stmt->fetchall(PDO::FETCH_ASSOC);

        return $rowData;
    }

    protected function GetNumberOfRows()
    {
        $stmt = $this->Connect()->prepare('SELECT * FROM vehicles');

        if (!$stmt->execute(array()))
        {
            $stmt = null;
            header("location: ../Browse.php?error=stmtfailed");
            exit();
        }

        $rowCount = $stmt->rowCount();

        return $rowCount;
    }
}