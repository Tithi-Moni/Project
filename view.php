<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-success text-white text-center">
                <h2>Student Details</h2>
            </div>
            <div class="card-body">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $first_name = htmlspecialchars($_POST['first_name']);
                        $last_name = htmlspecialchars($_POST['last_name']);
                        $id = htmlspecialchars($_POST['id']);
                        $email = htmlspecialchars($_POST['email']);
                        $department = htmlspecialchars($_POST['department']);
                        $phone = htmlspecialchars($_POST['phone']);
                        $blood_group = htmlspecialchars($_POST['blood_group']);

                        echo "<p><strong>First Name:</strong> $first_name</p>";
                        echo "<p><strong>Last Name:</strong> $last_name</p>";
                        echo "<p><strong>ID:</strong> $id</p>";
                        echo "<p><strong>Email:</strong> $email</p>";
                        echo "<p><strong>Department:</strong> $department</p>";
                        echo "<p><strong>Phone:</strong> $phone</p>";
                        echo "<p><strong>Blood Group:</strong> $blood_group</p>";
                    } else {
                        echo "<p>No data submitted!</p>";
                    }
                ?>
                <a href="result_input.html" class="btn btn-primary w-100 mt-3">Go to Result Input</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
