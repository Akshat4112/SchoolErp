<?php
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $db->query("SELECT * FROM skills WHERE skill LIKE '%".$searchTerm."%' ORDER BY skill ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['skill'];
}
//return json data
echo json_encode($data);
?>