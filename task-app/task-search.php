<?php 

    include('database.php');

    $search = $_POST['search'];

    if(!empty($search)){
        $query = "SELECT * FROM task WHERE name LIKE '$search%'";
        $result = pg_query($connection, $query);
        if(!$result){
            die('Query failed: '. pg_result_error($connection));
        }
        $json = array();
        while($row = pg_fetch_array($result)){
            $json[] = array(
                'name' => $row['name'],
                'description' => $row['description'],
                'id' => $row['id']
            );
            }
            $jsonstring = json_encode($json);
            echo $jsonstring;
    }
?>