<?php
class database {
    var $db;
    var $result;
    public function database() {
        $this->opendb();
    }
    
    public function opendb() {
        global $db;
        $koneksi = mysql_pconnect($db['hostname'], $db['user'], $db['pass']) or trigger_error(mysql_error(),E_USER_ERROR);
        if($koneksi) {
            $this->db=$koneksi;
            if(!$this->selectdb()) {
                trigger_error(mysql_error(),E_USER_ERROR);
            }
        }    
    }
    
    public function selectdb() {
        global $db;
        //echo debug($db);
        return mysql_selectdb($db["database"]);
    }
    
    public function execsql($q) {
        $t=mysql_query($q) or trigger_error(mysql_error(),E_USER_ERROR);
        return $t; 
    }
    
    public function loadquery($sql) {
        $tmp = $this->execsql($sql);
        if($tmp) {
           $rec=array();
            while($data = mysql_fetch_array($tmp)) {
                $rec[] = $data;
            }
            return $rec;
        }
        else {
            trigger_error(mysql_error(),E_USER_ERROR);        
        }
    }
    
    public function query($sql) {
        $tmp = $this->execsql($sql);
        if($tmp) {
           return mysql_fetch_array($tmp);
        }
        else {
            trigger_error(mysql_error(),E_USER_ERROR);        

        }
    }
    
    public function close() {
        mysql_close($this->db) or trigger_error(mysql_error(),E_USER_ERROR);
    }
}
?>