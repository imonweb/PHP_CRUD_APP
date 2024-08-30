<div class="table-responsive" id="showUser">
  <table class="table table-striped table-sm table-bordered">
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
    <tbody>
      <?php for($i=1;$i<100;$i++) : ?>
      <tr class="text-center text-secondary">
        <td><?= $i ?></td>
        <td>User 1 <?= $i ?></td>
        <td>User lastname <?= $i ?></td>
        <td>user@gmail.com <?= $i ?></td>
        <td>12345678 <?= $i ?></td>
        <td>
          <a href="#" title="View Details" class="text-success mx-1"><i class="fa-solid fa-circle-info"></i></a>
          <a href="#" title="Update" class="text-warning mx-1"><i class="fa-solid fa-pen-to-square"></i></a>
          <a href="#" title="Delete" class="text-danger"><i class="fa-solid fa-trash-can"></i></a>
        </td>
      </tr>
      <?php endfor; ?>
    </tbody>
  </table>
</div>