<?php 

require_once 'db.php';
$db = new Database();

// print_r($db);

if(isset($_POST['action']) && $_POST['action'] == 'view'){
  $output = '';
  $data = $db->read();
  // print_r($data);
  if($db->totalRowCount()>0){
    $output .= '<table class="table table-striped table-sm table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>';
    foreach($data as $row){
      $output .= '<tr class="text-center text-secondary">
        <td>' . $row['id'] . '</td>
        <td>' . $row['first_name'] . '</td>
        <td>' . $row['last_name'] . '</td>
        <td>' . $row['email'] . '</td>
        <td>' . $row['phone'] . '<td>
        <td> 
          <a href="#" title="View Details" class="text-success mx-1"><i class="fa-solid fa-circle-info"></i></a>
          <a href="#" title="Update" class="text-warning mx-1"><i class="fa-solid fa-pen-to-square"></i></a>
          <a href="#" title="Delete" class="text-danger"><i class="fa-solid fa-trash-can"></i></a>
        </td></tr>';
    }
  }
}