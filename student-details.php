<?php
    include "config/connection.php";
    include "config/session.php";
?>
<?php

    if (isset($_POST['roll']) and $identitiyof == 'teacher' or $identitiyof == 'admin' or $identitiyof == 'head'){
        $sql = "SELECT * FROM students where `userid`='".$_POST['roll']."'";
    }else{
    $sql = "SELECT * FROM students where `userid`='".$user_id."'";
    }

    // $sql = "SELECT * FROM students where `userid`='".$user_id."'";
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
    <title>AKKHOR | Students Details</title>
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
                    <h3>Students</h3>
                    <ul>
                        <li>
                            <a href="index-2.html">Home</a>
                        </li>
                        <li>Student Details</li>
                    </ul>
                </div>
                <?php
                    if ($identitiyof == 'teacher' or $identitiyof == 'admin' or $identitiyof == 'head'){
                        echo '<form action="student-details.php" method="post">
                            <input type="text" name="roll">
                            <button type="submit">Chek details</button>
                            </form>';
                    }
                ?>
                

                <!-- Breadcubs Area End Here -->
                <!-- Student Details Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>About Me</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
        
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-info-details">
                            <div class="item-img">
                                <img src="assets/img/profile/student/<?php echo $img?>" alt="student" width="280px">  <!--280px 330px-->
                                <!-- <img src="assets/img/figure/student1.jpg" alt="student"> -->
                            </div>
                            <div class="item-content">
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium"><?php echo $fname; ?></h3>
                                    <div class="header-elements">
                                        <ul>
                                            <li><a href="#"><i class="far fa-edit"></i></a></li>
                                            <li><a href="#"><i class="fas fa-print"></i></a></li>
                                            <li><a href="#"><i class="fas fa-download"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p><?php echo $bio ; ?></p>
                                <div class="info-table table-responsive">
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
                <!-- Student Details Area End Here -->
                <?php include 'include/footer.inc.php';?>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <?php include 'include/js.inc.php';?>
</body>
</html>
<?php
    // $sql = "SELECT * FROM students where `userid`='".$user_id."'";
    // $result = $conn->query($sql);
    // if ($result->num_rows > 0) {
    // while($row = $result->fetch_assoc()) {
    // echo 
    //     "<p>Name : ". $row["fname"]. "</p>
    //     <p>Father Name : ". $row["father"]. "</p>
    //     <div class='row'>
    //         <div class='col-sm-6'><p>Sem : ". $row["lname"]. "</p></div>
    //         <div class='col-sm-6'><p>Roll No. : ". $row["dob"]. "</p></div>
    //         <div class='col-sm-6'><p>Branch : ". $row["gender"]. "</p></div>
    //         <div class='col-sm-6'><p>Session : ". $row["city"]. "</p></div>
    //     </div>
    //     <p>Address : ". $row["state"]. "</p>"
    // ;
    // }
    // } else { echo "Aree Yaar kya kar rahe ho? sahi Details fill kro"; }
    // $conn->close();
?>
