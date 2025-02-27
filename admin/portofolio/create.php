<?php
include '../includes/header.php';
include '../includes/sidebar.php';
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    // Upload gambar jika ada
    if ($_FILES['image']['name']) {
        $targetDir = "assets/images/";
        $imageName = basename($_FILES['image']['name']);
        $targetFilePath = $targetDir . $imageName;
        move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath);
    } else {
        $imageName = "";
    }

    // Simpan data ke database
    $query = "INSERT INTO portofolio (title, description, image) VALUES (:title, :description, :image)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':image', $imageName);
    $stmt->execute();
    
    header("Location: index.php");
    exit;
}
?>

  <!-- Bagian konten utama -->
  <div id="content-wrapper" class="d-flex flex-column">
    
    <!-- Konten halaman -->
    <div id="content">
        <!-- Navbar bagian atas -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
      <h1 class="h3 mb-0 text-gray-800">Tambah Portfolio</h1>
    </nav>     
      <!-- Container utama -->
      <div class="container-fluid">
        
        <!-- Card untuk form create -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Project</h6>
          </div>
          <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" required></textarea>
              </div>
              <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
              <a href="index.php" class="btn btn-secondary">Batal</a>
            </form>
          </div>
        </div>
      </div>
      <!-- Akhir dari container utama -->
    </div>
    <!-- Akhir dari konten halaman -->
    
    <?php include '../includes/footer.php'; ?>