<?php

    class Test extends Dbh
    {
        public function getUsers()
        {
            $sql = "SELECT * FROM users";
            $stmt = $this->connect()->query($sql);
            $row = $stmt->fetch();
            while ($row)
             {
                echo $row['users_firstname'] . '<br>';
             }
            
        }
    }

?>