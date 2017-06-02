<?php

class aboutMapper extends mapper
{
    public function updateabout($got){
        $fact=$got[0]->interest_facts;
        $zap="UPDATE about SET interest_facts ='$fact' WHERE id=".$got[0]->id;
        if($this->db->query($zap)){
            echo "Information updated";
        }
    }

}