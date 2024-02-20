<?php

namespace Models;

use Core\Database;
use Core\Application;

class Sample
{
    protected $db;

    public function __construct()
    {
        $this->db = Application::resolve(Database::class);
    }

    public function findAll()
    {
        return $this->db->query(
            "SELECT * FROM samples"
        )->all();
    }

    public function findOne()
    {
        return $this->db->query(
            "SELECT 
            s.*,
            sl.sample_link,
            sl.song_link
            FROM 
            samples s
            LEFT JOIN 
            sample_links sl ON s.sample_id = sl.sample_id
            WHERE s.sample_id = :sample_id",
            [
                'sample_id' => $_GET['id']
            ]
        )->findOrFail();
    }
}