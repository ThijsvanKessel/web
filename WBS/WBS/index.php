<?php
    include("inc/db.php");
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Character set   -->
	<meta charset="utf-8">

    <!-- custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

	<title>WBSMonitor</title>
</head>
<body>
    <div class="main-container">
        <h1>Projects</h1>
    <h2>Latest Projects</h2>
    <div class="tablecontainer1">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Project Name</th>
                    <th>Estimated Time (minutes)</th>
                    <th>Actual Time (minutes)</th>
                    <th>View</th>
                    <th>Add Task</th>
                    <th>Delete Project</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $getProjects = "SELECT * FROM `wbsprojects`";
                    $result = mysqli_query($con, $getProjects);
                    while($row = mysqli_fetch_assoc($result))
                    {   
                ?>

                <tr>
                    <td>
                        <a><?php echo $row['ProjectID']; ?></a>
                    </td>
                    <td>
                        <a><?php echo $row['ProjectName']; ?></a>
                    </td>
                    <td>
                        <a><?php echo $row['ProjectTime']; ?></a>
                    </td>
                    <td>
                        <a></a>
                    </td>
                    <td>
                        <button class="bluebutton">View Project</button>
                    </td>
                    <td>
                        <button class="greenbutton">Add Task</button>
                    </td>
                    <td>
                        <button class="redbutton">Delete</button>
                    </td>
                </tr>

                <?php }  ?>
            </tbody>
        </table> 
        <button class="greenbutton">add a project button</button>   
        </div>
    </div>

	<!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- Custom js  -->
    <script src="js/main.js"></script>
</body>

    