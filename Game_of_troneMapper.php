<?php

class Game_of_troneMapper extends mapper
{
    public function addhero(Game_of_trone $got)
    {
        $mydbname = $this->mydbname;
        $id = $this->db->query("SELECT max(id)+1 FROM Game_of_trone");
        $id = $id->fetch_assoc();
        $zap = "INSERT into " . $mydbname . "
        (id,name_person,inf_person,age_person,br_sist) 
        VALUES ('" . $id['max(id)+1'] . "','$got->name_person', '$got->inf_person','$got->age_person','$got->br_sist')";
        if ($this->db->query($zap) == TRUE) {
            echo 'New hero added';
        }

    }

    public function deletehero($got)

        $zap = "DELETE FROM Game_of_trone WHERE id=" . $got[0]->id;
        if ($this->db->query($zap)) {
            echo 'Hero deleted succesfuly';
        }

    }
}