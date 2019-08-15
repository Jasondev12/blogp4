<?php

function get_posts(){

    global $db;

    $req = $db->query("SELECT * FROM posts WHERE posted='1' ORDER BY date ASC");

    $results = [];
    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }

    return $results;
}
