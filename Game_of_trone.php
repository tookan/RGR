<?php
class Game_of_trone
{
    public $id;
    public $name_person;
    public $inf_person;
    public $age_person;
    public $br_sist;
    public function gettingform()
    {
        $this->name_person=$_POST['name_person'];
        $this->inf_person=$_POST['inf_person'];
        $this->age_person=$_POST['age_person'];
        $this->br_sist=$_POST['br_sist'];
    }
}
