<?php
include "config/connection.php";
include "config/session.php";
?>
<?php
    $sql = "SELECT * FROM students where `userid`='".$user_id."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $fname= $row["fname"];
            $mname=$row["mname"];
            $lname=$row["lname"];
            $dob=$row["dob"];
            $gender=$row["gender"];
            $father=$row["father"];
            $mother=$row["mother"]; 
            $class=$row["class"];
            $roll=$row["roll"];
            $section=$row["section"];
            $blood_group=$row["blood_group"];
            $religion=$row["religion"];
            $email=$row["email"];
            $phone=$row["phone"];
            $phone2=$row["phone2"];
            $stu_adhaar=$row["stu_adhaar"];
            $father_adhaar=$row["father_adhaar"];
            $mother_adhaar=$row["mother_adhaar"];
            $bio=$row["bio"];
            $img=$row["img"];
            $parent_occtupation=$row["parent_occtupation"];
            $address=$row["address"];
            $city=$row["city"];
            $state=$row["state"];
            $pincode=$row["pincode"];
            $joinnig=$row["joinnig"];
            $join_class=$row["join_class"];
            $currant_class=$row["currant_class"];
            $drop_date=$row["drop_date"];
            $class_id=$row["class_id"];
            $payment=$row["payment"];
            $amount=$row["amount"];
            $transport_id=$row["transport_id"];
            $hostel_id=$row["hostel_id"];
            $father=$row["father"];
        }
    }
    $conn->close();
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <title>AKKHOR | Student</title>
    <?php include 'include/css.inc.php';?> 
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
        <?php include 'include/header_menu.inc.php';?>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <?php include 'include/sidebar.inc.php';?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Admin Dashboard</h3>
                    <ul>
                        <li>
                            <a href="index-2.html">Home</a>
                        </li>
                        <li>Student</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <div class="row">
                    <!-- Student Info Area Start Here -->
                    <div class="col-4-xxxl col-12">
                        <div class="card dashboard-card-ten">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>About Me</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="student-info">
                                    <div class="media media-none--xs">
                                        <div class="item-img">
                                        <img src="assets/img/profile/student/<?php echo $img?>" class="media-img-auto" alt="student">
                                        </div>
                                        <div class="media-body">
                                            <h3 class="item-title"><?php echo $fname; ?></h3>
                                            <p><?php echo $bio ; ?></p>
                                        </div>
                                    </div>
                                    <div class="table-responsive info-table">
                                        <table class="table text-nowrap">
                                            <tbody>
                                                <tr>
                                                    <td>Name:</td>
                                                    <td class="font-medium text-dark-medium"><?php echo $fname ; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Gender:</td>
                                                    <td class="font-medium text-dark-medium"><?php echo $gender ; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Father Name:</td>
                                                    <td class="font-medium text-dark-medium"><?php echo $father ; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Mother Name:</td>
                                                    <td class="font-medium text-dark-medium"><?php echo $mother ;?></td>
                                                </tr>
                                                <tr>
                                                    <td>Date Of Birth:</td>
                                                    <td class="font-medium text-dark-medium"><?php echo $dob ;?></td>
                                                </tr>
                                                <tr>
                                                    <td>Religion:</td>
                                                    <td class="font-medium text-dark-medium"><?php echo $religion ;?></td>
                                            </tr>
                                            <tr>
                                                <td>Father Occupation:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $parent_occtupation ;?></td>
                                            </tr>
                                            <tr>
                                                <td>E-mail:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $email ;?></td>
                                            </tr>
                                            <tr>
                                                <td>Admission Date:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $joinnig ;?></td>
                                            </tr>
                                            <tr>
                                                <td>Class:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $class ;?></td>
                                            </tr>
                                            <tr>
                                                <td>Section:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $section ;?></td>
                                            </tr>
                                            <tr>
                                                <td>Roll:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $roll ;?></td>
                                            </tr>
                                            <tr>
                                                <td>Address:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $address ;?></td>
                                            </tr>
                                            <tr>
                                                <td>Phone:</td>
                                                <td class="font-medium text-dark-medium"><?php echo $phone ;?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Student Info Area End Here -->
                    <div class="col-8-xxxl col-12">
                        <div class="row">
                            <!-- Summery Area Start Here -->
                            <div class="col-lg-4">
                                <div class="dashboard-summery-one">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="item-icon bg-light-red">
                                                <i class="flaticon-money text-red"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="item-content">
                                                <div class="item-title">Due Fees</div>
                                                <div class="item-number"><span><i class="fa-solid fa-indian-rupee-sign p-3"></i></span><span class="counter" data-num="45003">45,003</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="dashboard-summery-one">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="item-icon bg-light-yellow">
                                                <i class="flaticon-mortarboard text-orange"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="item-content">
                                                <div class="item-title">Result</div>
                                                <div class="item-number"><span class="counter" data-num="16">16</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="dashboard-summery-one">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="item-icon bg-light-yellow">
                                                <i class="flaticon-percentage-discount text-orange"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="item-content">
                                                <div class="item-title">Attendance</div>
                                                <div class="item-number"><span class="counter" data-num="94">94</span><span>%</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Summery Area End Here -->
                            <!-- Exam Result Area Start Here -->
                            <div class="col-lg-12">
                                <div class="card dashboard-card-eleven">
                                    <div class="card-body">
                                        <div class="heading-layout1">
                                            <div class="item-title">
                                                <h3>All Exam Results</h3>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                                    aria-expanded="false">...</a>

                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-box-wrap">
                                            <form class="search-form-box">
                                                <div class="row gutters-8">
                                                    <div class="col-lg-4 col-12 form-group">
                                                        <input type="text" placeholder="Search by Exam ..."
                                                            class="form-control">
                                                    </div>
                                                    <div class="col-lg-3 col-12 form-group">
                                                        <input type="text" placeholder="Search by Subject ..."
                                                            class="form-control">
                                                    </div>
                                                    <div class="col-lg-3 col-12 form-group">
                                                        <input type="text" placeholder="dd/mm/yyyy"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col-lg-2 col-12 form-group">
                                                        <button type="submit"
                                                            class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="table-responsive result-table-box">
                                                <table class="table display data-table text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                <div class="form-check">
                                                                    <input type="checkbox"
                                                                        class="form-check-input checkAll">
                                                                    <label class="form-check-label">ID</label>
                                                                </div>
                                                            </th>
                                                            <th>Exam Name</th>
                                                            <th>Subject</th>
                                                            <th>Grade</th>
                                                            <th>Percent</th>
                                                            <th>Date</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    <label class="form-check-label">#0021</label>
                                                                </div>
                                                            </td>
                                                            <td>Class Test</td>
                                                            <td>English</td>
                                                            <td>A</td>
                                                            <td>99.00 > 100</td>
                                                            <td>22/02/2019</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle"
                                                                        data-toggle="dropdown" aria-expanded="false">
                                                                        <span
                                                                            class="flaticon-more-button-of-three-dots"></span>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-times text-orange-red"></i>Close</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    <label class="form-check-label">#0022</label>
                                                                </div>
                                                            </td>
                                                            <td>Class Test</td>
                                                            <td>English</td>
                                                            <td>A</td>
                                                            <td>99.00 > 100</td>
                                                            <td>22/02/2019</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle"
                                                                        data-toggle="dropdown" aria-expanded="false">
                                                                        <span
                                                                            class="flaticon-more-button-of-three-dots"></span>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-times text-orange-red"></i>Close</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    <label class="form-check-label">#0023</label>
                                                                </div>
                                                            </td>
                                                            <td>Class Test</td>
                                                            <td>Chemistry</td>
                                                            <td>A</td>
                                                            <td>99.00 > 100</td>
                                                            <td>22/02/2019</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle"
                                                                        data-toggle="dropdown" aria-expanded="false">
                                                                        <span
                                                                            class="flaticon-more-button-of-three-dots"></span>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-times text-orange-red"></i>Close</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    <label class="form-check-label">#0024</label>
                                                                </div>
                                                            </td>
                                                            <td>Class Test</td>
                                                            <td>English</td>
                                                            <td>A</td>
                                                            <td>99.00 > 100</td>
                                                            <td>22/02/2019</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle"
                                                                        data-toggle="dropdown" aria-expanded="false">
                                                                        <span
                                                                            class="flaticon-more-button-of-three-dots"></span>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-times text-orange-red"></i>Close</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    <label class="form-check-label">#0025</label>
                                                                </div>
                                                            </td>
                                                            <td>Class Test</td>
                                                            <td>Chemistry</td>
                                                            <td>A</td>
                                                            <td>99.00 > 100</td>
                                                            <td>22/02/2019</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle"
                                                                        data-toggle="dropdown" aria-expanded="false">
                                                                        <span
                                                                            class="flaticon-more-button-of-three-dots"></span>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-times text-orange-red"></i>Close</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    <label class="form-check-label">#0025</label>
                                                                </div>
                                                            </td>
                                                            <td>Class Test</td>
                                                            <td>Chemistry</td>
                                                            <td>D</td>
                                                            <td>70.00 > 100</td>
                                                            <td>22/02/2019</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle"
                                                                        data-toggle="dropdown" aria-expanded="false">
                                                                        <span
                                                                            class="flaticon-more-button-of-three-dots"></span>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-times text-orange-red"></i>Close</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    <label class="form-check-label">#0025</label>
                                                                </div>
                                                            </td>
                                                            <td>Class Test</td>
                                                            <td>English</td>
                                                            <td>C</td>
                                                            <td>80.00 > 100</td>
                                                            <td>22/02/2019</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle"
                                                                        data-toggle="dropdown" aria-expanded="false">
                                                                        <span
                                                                            class="flaticon-more-button-of-three-dots"></span>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-times text-orange-red"></i>Close</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    <label class="form-check-label">#0025</label>
                                                                </div>
                                                            </td>
                                                            <td>Class Test</td>
                                                            <td>English</td>
                                                            <td>B</td>
                                                            <td>99.00 > 100</td>
                                                            <td>22/02/2019</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle"
                                                                        data-toggle="dropdown" aria-expanded="false">
                                                                        <span
                                                                            class="flaticon-more-button-of-three-dots"></span>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-times text-orange-red"></i>Close</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input">
                                                                    <label class="form-check-label">#0025</label>
                                                                </div>
                                                            </td>
                                                            <td>First Semister</td>
                                                            <td>English</td>
                                                            <td>A</td>
                                                            <td>99.00 > 100</td>
                                                            <td>22/02/2019</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle"
                                                                        data-toggle="dropdown" aria-expanded="false">
                                                                        <span
                                                                            class="flaticon-more-button-of-three-dots"></span>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-times text-orange-red"></i>Close</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                        <a class="dropdown-item" href="#"><i
                                                                                class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Exam Result Area End Here -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4-xxxl col-xl-6 col-12">
                        <div class="card dashboard-card-three">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Attendence</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="doughnut-chart-wrap">
                                    <canvas id="student-doughnut-chart" width="100" height="270"></canvas>
                                </div>
                                <div class="student-report">
                                    <div class="student-count pseudo-bg-blue">
                                        <h4 class="item-title">Absent</h4>
                                        <div class="item-number">28.2%</div>
                                    </div>
                                    <div class="student-count pseudo-bg-yellow">
                                        <h4 class="item-title">Present</h4>
                                        <div class="item-number">65.8%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- calendar -->
                    <?php include 'include/calendar.inc.php';?>
                    
                    <div class="col-4-xxxl col-12">
                        <div class="card dashboard-card-six">
                            <div class="card-body">
                                <div class="heading-layout1 mg-b-17">
                                    <div class="item-title">
                                        <h3>Notifications</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="notice-box-wrap">
                                    <div class="notice-list">
                                        <div class="post-date bg-skyblue">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag mene esom tus eleifend
                                                lectus
                                                sed maximus mi faucibusnting.</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-yellow">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag printing.</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-pink">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag Nulla rhoncus eleifensed
                                                mim
                                                us mi faucibus id. Mauris vestibulum non purus lobortismenearea</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-skyblue">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag mene esom text of the
                                                printing.</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-yellow">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag printing.</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-pink">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School manag meneesom.</a></h6>
                                        <div class="entry-meta"> Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Area Start Here -->
                <?php include 'include/footer.inc.php';?>
                <!-- Footer Area End Here -->
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <?php include 'include/js.inc.php';?>

</body>
</html>