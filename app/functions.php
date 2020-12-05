<?php

    /**
     * Validation message
     */
    function validate($msg, $type = 'danger'){
        return '<p class="alert alert-'.$type.'">'. $msg .'<button class="close" data-dismiss="alert">&times;</button></p>';
    }






    /**
     * Database Control ( Insert )
     */
    function insert($sql){
        global $connection;
        $connection -> query($sql);
    }

    /**
     * Data check
     */
    function valueCheck($table, $column, $val){
        global $connection;

        $sql = "SELECT  $column FROM $table WHERE  $column='$val'";
        $data = $connection -> query($sql);
        return  $data -> num_rows;
    }

/**
 * users table
 * @return array|null
 */
    function auth (){
        global $connection;

        $id = $_SESSION['user_id'];

        $sql = "SELECT  * FROM users WHERE  id='$id'";
        $data = $connection -> query($sql);
        return $data -> fetch_assoc();
    }


    /**
     * get table data
     */
        function all($table,$order='DESC'){
            global $connection;
            $sql = "SELECT * FROM $table ORDER BY id $order";
           return $connection -> query($sql);
        }








