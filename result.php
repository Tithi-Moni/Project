<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your CGPA</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-info text-white text-center">
                <h2>Your CGPA</h2>
            </div>
            <div class="card-body">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $cgpa = htmlspecialchars($_POST['cgpa']);
                        echo "<p><strong>Your CGPA is:</strong> $cgpa</p>";
                    } else {
                        echo "<p>No CGPA data available!</p>";
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
