<?php
include '../includes/header.php';
include '../includes/sidebar.php';
include '../includes/db.php';

$id = $_GET['id'];

// Ambil data berdasarkan ID
$query = "SELECT * FROM portofolio WHERE id = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $id);
$stmt->execute();
$portofolio = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    // Upload gambar baru jika ada
    if ($_FILES['image']['name']) {
        $targetDir = "assets/images/";
        $imageName = basename($_FILES['image']['name']);
        $targetFilePath = $targetDir . $imageName;
        move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath);

        // Update data termasuk gambar
        $query = "UPDATE portofolio SET title = :title, description = :description, image = :image WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':image', $imageName);
    } else {
        // Update data tanpa gambar
        $query = "UPDATE portofolio SET title = :title, description = :description WHERE id = :id";
        $stmt = $conn->prepare($query);
    }
    
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    
    header("Location: index.php");
    exit;
}
?>

<!-- Wrapper untuk seluruh konten -->
<div id="content-wrapper" class="d-flex flex-column">
  
  <!-- Konten utama -->
  <div id="content">
    
    <!-- Navbar bagian atas -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
      <h1 class="h3 mb-0 text-gray-800">Edit Portfolio</h1>
    </nav>

    <!-- Container utama -->
    <div class="container-fluid">
      
      <!-- Card untuk form edit -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Edit Project</h6>
        </div>
        <div class="card-body">
          <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label>Title</label>
              <input type="text" name="title" class="form-control" value="<?= $portofolio['title'] ?>" required>
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea name="description" class="form-control" required><?= $portofolio['description'] ?></textarea>
            </div>
            <div class="form-group">
              <label>Image</label>
              <input type="file" name="image" class="form-control">
              <br>
              <?php if (!empty($portofolio['image'])) : ?>
                <img src="assets/images/<?= $portofolio['image'] ?>" width="150">
              <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
          </form>
        </div>
      </div>
    </div>
    <!-- Akhir dari container utama -->
  </div>
  <!-- Akhir dari konten utama -->


<?php include '../includes/footer.php'; ?>
