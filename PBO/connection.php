<?php

    class Connection{
        private $mysql;

        public function __construct(String $host, String $dbname, String $username, String $password){
            $this->mysql = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        }

        public function select_from(String $table_name, String $select_param, Array $inner_joins = [], String $where = ""){
            $select_query = "select " . $select_param . " from " . $table_name;
            
            $inner_join_keys = [" inner join ", " on "];
            for ($i = 0; $i < count($inner_joins) - 1;$i++ ){
                $select_query = $select_query . $inner_join_keys[0] . $inner_joins[$i] . $inner_join_keys[1] . $inner_joins[$i+1];
            }
            
            if ($where){
                $select_query = $select_query . " where " . $where;
            }
            
            return $this->get_sql()->query($select_query)->fetchAll();
        }

        public function insert_to(String $table_name, String $params){
            $insert_query = "insert into " . $table_name . " values(" . $params . ")";

            return $this->get_sql()->query($insert_query);
        }

        public function update(String $table_name, String $set_param, String $where){
            $update_query = "update " . $table_name . " set " . $set_param . " where " . $where;

            return $this->get_sql()->query($update_query);
        }

        public function delete_from(String $table_name, String $where){
            $delete_query = "delete from " . $table_name . " where " . $where;

            return $this->get_sql()->query($delete_query);
        }

        public function get_sql(){
            return $this->mysql;
        }

        
    }

    $con = new Connection("localhost", "shinirfandb", "root", "");

?>