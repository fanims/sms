<?php include 'db/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <!-- Left Sidebar -->
    <div id="sidebar" class="sidebar py-3">
        <div class="text-center mb-4">
            <img src="logo.png" alt="Logo" class="mb-3" style="max-width: 120px;">
            <h5>Student Management</h5>
        </div>
        <div class="nav flex-column">
            <!-- Dashboard -->
            <a href="#dashboard" class="sidebar-link active" data-bs-toggle="tab" data-bs-target="#dashboard">
                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
            </a>
            
            <!-- Students Section -->
            <div class="sidebar-heading mt-3 mb-2 ps-3 text-uppercase small">
                <i class="fas fa-user-graduate me-2"></i> Students
            </div>
            <a href="#addStudent" class="sidebar-link ms-3" data-bs-toggle="tab" data-bs-target="#addStudent">
                <i class="fas fa-user-plus me-2"></i> Add Student
            </a>
            <a href="#studentList" class="sidebar-link ms-3" data-bs-toggle="tab" data-bs-target="#studentList">
                <i class="fas fa-list me-2"></i> Student List
            </a>

            <!-- Fees Section -->
            <div class="sidebar-heading mt-3 mb-2 ps-3 text-uppercase small">
                <i class="fas fa-money-bill me-2"></i> Fees
            </div>
            <a href="#feesDetails" class="sidebar-link ms-3" data-bs-toggle="tab" data-bs-target="#feesDetails">
                <i class="fas fa-file-invoice-dollar me-2"></i> Fees Details
            </a>

            <!-- Settings -->
            <div class="sidebar-heading mt-3 mb-2 ps-3 text-uppercase small">
                <i class="fas fa-cog me-2"></i> Settings
            </div>
            <a href="#settings" class="sidebar-link ms-3" data-bs-toggle="tab" data-bs-target="#settings">
                <i class="fas fa-sliders-h me-2"></i> General Settings
            </a>
        </div>
    </div>

    <!-- Main Content Area -->
    <div id="main-content">
        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <button id="sidebarToggle" class="btn btn-dark d-md-none">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                <img src="admin-avatar.png" alt="Admin" class="rounded-circle" style="width: 32px;">
                                Admin User
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#profile">Profile</a></li>
                                <li><a class="dropdown-item" href="#settings">Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid py-4">

            <!-- Main Content Area -->
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <!-- Dashboard Tab -->
                        <div class="tab-pane fade show active" id="dashboard">
                            <h4 class="mb-4">Dashboard</h4>
                            <!-- Dashboard Cards -->
                            <div class="row mb-4">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary text-white">
                                        <div class="card-body">
                                            <h5>Total Students</h5>
                                            <h2>250</h2>
                                            <i class="fas fa-users float-end fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-success text-white">
                                        <div class="card-body">
                                            <h5>Fees Collected</h5>
                                            <h2>$25,000</h2>
                                            <i class="fas fa-dollar-sign float-end fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-warning text-white">
                                        <div class="card-body">
                                            <h5>Pending Fees</h5>
                                            <h2>$5,000</h2>
                                            <i class="fas fa-clock float-end fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-danger text-white">
                                        <div class="card-body">
                                            <h5>Defaulters</h5>
                                            <h2>15</h2>
                                            <i class="fas fa-exclamation-triangle float-end fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <!-- Add Student Tab -->
                        <div class="tab-pane fade" id="addStudent">
                            <h4 class="mb-4">Add New Student</h4>
                            <form class="row g-3" action=" " method="POST">
                                <!-- Personal Details Section -->
                                <h5 class="border-bottom pb-2">Personal Details</h5>
                                <div class="col-md-6">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="first_name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Roll Number</label>
                                    <input type="text" class="form-control" name="roll_number" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Class</label>
                                    <select class="form-select" name="class" required>
                                        <option value="">Select Class</option>
                                        <option>PG</option>
                                        <option>Nursary</option>
                                        <option>KG</option>
                                        <option>One</option>
                                        <option>Two</option>
                                        <option>Three</option>
                                        <option>Four</option>
                                        <option>Five</option>
                                        <option>Six</option>
                                        <option>Seven</option>
                                        <option>Eight</option>
                                        <option>Nine</option>
                                        <option>Ten</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Section</label>
                                    <select class="form-select" name="section" required>
                                        <option value="">Select Section</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Parent's Name</label>
                                    <input type="text" class="form-control" name="parent_name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Contact Number</label>
                                    <input type="tel" class="form-control" name="contact_number" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control" name="address" rows="2"></textarea>
                                </div>

                                <!-- Fee Details Section -->
                                <h5 class="border-bottom pb-2 mt-4">Fee Details</h5>
                                <div class="col-md-4">
                                    <label class="form-label">Admission Fee</label>
                                    <input type="number" class="form-control fee-input" name="admission_fee" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Tuition Fee (Monthly)</label>
                                    <input type="number" class="form-control fee-input" name="tuition_fee" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Total Fee</label>
                                    <input type="number" class="form-control" id="totalFee" readonly>
                                </div>

                                <!-- Payment Details -->
                                <h5 class="border-bottom pb-2 mt-4">Initial Payment</h5>
                                <div class="col-md-4">
                                    <label class="form-label">Payment Method</label>
                                    <select class="form-select" name="payment_method" required>
                                        <option value="">Select Payment Method</option>
                                        <option>Cash</option>
                                        <option>Online Transfer</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Payment Date</label>
                                    <input type="date" class="form-control" name="payment_date" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Amount Paid</label>
                                    <input type="number" class="form-control" name="amount_paid" required>
                                </div>

                                <div class="col-12 mt-4">
                                    <button type="submit" name="submit" class="btn btn-primary">
                                        <i class="fas fa-save me-2"></i>Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary ms-2">
                                        <i class="fas fa-undo me-2"></i>Reset Form
                                    </button>
                                </div>
                            </form>
                            <?php
                                if(isset($_POST['submit'])) {
                                $first_name = $_POST['first_name'];
                                $last_name = $_POST['last_name'];
                                $roll_number = $_POST['roll_number'];
                                $class = $_POST['class'];
                                $section = $_POST['section'];
                                $parent_name = $_POST['parent_name'];
                                $contact_number = $_POST['contact_number'];
                                $address = $_POST['address'];
                                $admission_fee = $_POST['admission_fee'];
                                $tuition_fee = $_POST['tuition_fee'];
                                $payment_method = $_POST['payment_method'];
                                $payment_date = $_POST['payment_date'];
                                $amount_paid = $_POST['amount_paid'];

                                $sql = "INSERT INTO students (first_name, last_name, roll_number, class, section, parent_name, contact_number, address, admission_fee, tuition_fee, payment_method, payment_date, amount_paid) 
                                        VALUES ('$first_name', '$last_name', '$roll_number', '$class', '$section', '$parent_name', '$contact_number', '$address', '$admission_fee', '$tuition_fee', '$payment_method', '$payment_date', '$amount_paid')";

                                if(mysqli_query($conn, $sql)) {
                                    header("Location: index.php?success=1#addStudent");
                                    exit();
                                } else {
                                    header("Location: index.php?error=" . urlencode(mysqli_error($conn)) . "#addStudent");
                                    exit();
                                }
                                } else {
                                    header("Location: index.php");
                                exit();
                                }
                            ?>
                        </div>
        
                        <!-- Student List Tab -->
                        <div class="tab-pane fade" id="studentList">
                            <h4 class="mb-4">Student List</h4>
                            <div class="table-responsive">
                                <div class="mb-3">
                                    <input type="text" class="form-control table-search" placeholder="Search...">
                                </div>
                                <table class="table table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Roll No</th>
                                            <th>Name</th>
                                            <th>Class</th>
                                            <th>Parent's Name</th>
                                            <th>Contact</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sql = "SELECT * FROM students ORDER BY id DESC";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
                                                    echo "<tr>";
                                                    echo "<td>" . $row['roll_number'] . "</td>";
                                                    echo "<td>" . $row['first_name'] . " " . $row['last_name'] . "</td>";
                                                    echo "<td>" . $row['class'] . "-" . $row['section'] . "</td>";
                                                    echo "<td>" . $row['parent_name'] . "</td>";
                                                    echo "<td>" . $row['contact_number'] . "</td>";
                                                    echo "<td>
                                                            <button class='btn btn-sm btn-primary'><i class='fas fa-edit'></i></button>
                                                            <button class='btn btn-sm btn-danger'><i class='fas fa-trash'></i></button>
                                                            <button class='btn btn-sm btn-info'><i class='fas fa-eye'></i></button>
                                                        </td>";
                                                    echo "</tr>";
                                                }
                                            } else {
                                                echo "<tr><td colspan='6' class='text-center'>No students found</td></tr>";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
        
                        <!-- Fees Details Tab -->
                        <div class="tab-pane fade" id="feesDetails">
                            <h4 class="mb-4">Fees Details</h4>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <div class="mb-3">
                                        <input type="text" class="form-control table-search" placeholder="Search...">
                                    </div>
                                    <thead class="table-light">
                                        <tr>
                                            <th>Receipt No</th>
                                            <th>Student Name</th>
                                            <th>Fee Type</th>
                                            <th>Amount</th>
                                            <th>Payment Date</th>
                                            <th>Payment Method</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>FEE001</td>
                                            <td>John Doe</td>
                                            <td>Tuition Fee</td>
                                            <td>$500</td>
                                            <td>2024-03-15</td>
                                            <td>Cash</td>
                                            <td><span class="badge bg-success">Paid</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-info"><i class="fas fa-print"></i></button>
                                                <button class="btn btn-sm btn-secondary"><i class="fas fa-download"></i></button>
                                            </td>
                                        </tr>
                                        <!-- Add more rows -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>