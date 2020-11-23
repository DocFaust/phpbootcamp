<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Data;

use PDO;

/**
 * Description of PostsRepository
 *
 * @author docfa
 */
class PostsRepository {

    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function fetchAll() {
        $sql = "SELECT * FROM posts";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS, "App\\Data\\PostModel");
        return $posts;
    }

}
