<?php
include '../includes/header.php';
include '../includes/sidebar.php';
include '../includes/db.php';

// Query untuk mengambil semua data portofolio
$query = "SELECT * FROM portofolio";
$stmt = $conn->prepare($query);
$stmt->execute();
$portofolios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Main Content -->
<div id="content-wrapper" class="d-flex flex-column">
  
  <!-- Main Content -->
  <div id="content">
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
      <h1 class="h3 mb-0 text-gray-800">Portofolio List</h1>
    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">
      <a href="create.php" class="btn btn-primary mb-3">Add New Portofolio</a>

      <!-- Data Table -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($portofolios as $index => $portofolio): ?>
                  <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($portofolio['title']) ?></td>
                    <td><?= htmlspecialchars($portofolio['description']) ?></td>
                    <td><img src="../assets/images/<?= $portofolio['image'] ?>" alt="<?= $portofolio['title'] ?>" width="100"></td>
                    <td style="width: 100px;">
                      <a href="edit.php?id=<?= $portofolio['id'] ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                      <a href="delete.php?id=<?= $portofolio['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?php include '../includes/footer.php'; ?>