<?php include './inc/data.php'; ?>
<?php include './inc/header.php'; ?>

<?php
$id = $_GET['id'] ?? null;
if ($id && isset($books[$id])) {
    $book = $books[$id];
} else {
    echo "<p class='text-danger'>Book not found.</p>";
    include 'inc/footer.php';
    exit;
}
?>

<div class="card mb-4">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="<?= $book['image']; ?>" class="img-fluid rounded-start" alt="<?= $book['title']; ?>">
        </div>
        <div class="col-md-8">
            <div class="card-body" style="text-align:center;  justify-content: center;">
                <h3 class="card-title"><?= $book['title']; ?></h3>
                <p class="card-text" ><?= $book['description']; ?></p>
                <a href="index.php" class="btn btn-secondary">Back to Home</a>
            </div>
        </div>
    </div>
</div>

<?php include './inc/footer.php'; ?>
