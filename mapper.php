<?php
class mapper
{
    public $mydbname;
    public $db;
    public function __construct()
    {
        connection::getInstance();
        $this->db = connection::$db;
        self::setname();
    }

    public function download($id = NULL)
    {
        $mydbname = $this->mydbname;
        if ($id != NULL) {
            $zap = "SELECT * FROM " . $mydbname . " WHERE id=" . $id;
        } else {
            $zap = "SELECT * FROM   $mydbname";
        }
        $down = $this->db->query($zap);
        $i = 0;
        while ($res = $down->fetch_object($mydbname)) {
            $notes[$i] = $res;
            $i++;
        }
        return $notes;
    }

    private function setname()
    {
        $this->mydbname = preg_replace("/(\w+)Mapper/", '$1', get_class($this));
    }
}