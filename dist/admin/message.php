<?php
session_start();

include './User.php';

if (isset($_SESSION['user_id'])) {
    User::check();
}

$pdo = DB::connect();

$order = filter_input(INPUT_GET, 'order');

$order = ($order == 'asc') ? 'desc' : 'asc';

if ($sort = filter_input(INPUT_GET, 'sortby')) { // filter GET variable to prevent crawling
    $stmt = $pdo->prepare("SELECT * FROM subscribe ORDER BY {$sort} {$order}"); // Use prepared statement to prevent SQL injection
    $stmt->execute();
} else { // if sort is not set, show as default
    $stmt = $pdo->query('SELECT * FROM subscribe');
}

include './partials/_header.php';

?>

  <div class="container">
    <main role="main" class="col-md-9 mx-auto col-lg-10">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Subscribes</h2>

  <a href="logout.php">logout</a>
      </div>

      <h3>Manage Subscribes</h3>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th><a href="message.php?sortby=id&order=<?= $order; ?>">ID</a></th>
              <th><a href="message.php?sortby=name&order=<?= $order; ?>">Name</a></th>
              <th class="text-center"><a href="message.php?sortby=email&order=<?= $order; ?>">Email</a></th>
              <th class="text-center">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($stmt as $row): ?>
            <tr>
              <td><?= $row['id']; ?></td>
              <td><?= $row['name']; ?></td>
              <td class="text-center"><a href="pageForm.php?page_id=<?= $row['id']; ?>"><?= $row['email']; ?><i class="fas fa-envelope"?></i></a></td>
              <td class="text-center"><a href="actions/deletePage.php?page_id=<?= $row['id']; ?>"><i class="fas fa-trash-alt"?></i></a></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>

<?php

include './partials/_footer.php';
