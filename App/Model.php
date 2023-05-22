<?php

namespace App;

abstract class Model
{
    public $id;

    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, [], static::class);
    }

    public static function findById($id) {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE .  " WHERE id IN($id)";
        $result = $db->query($sql, [], static::class);

        return empty($result) ? false : $result[0];
    }

    public static function getLastThreeRecords() {
        $db = new Db();
//        SELECT * FROM table_name ORDER BY id DESC LIMIT 0,100;
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT 0, 3';
        return $db->query($sql, [], static::class);
    }
}