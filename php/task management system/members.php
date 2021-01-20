<?php 
        $con = mysqli_connect("localhost","root","","task_management_system");
        
        if (mysqli_connect_errno()) {
            //echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die("Failed to connect to MySQL: " . mysqli_connect_error());
            //exit();
        }

        $update = false;
        $user_name_ = $first_name = $lastName = $contact = $address = $email = $password = "";
        $user_name_err = $first_name_err = $lastName_err = $contact_err = $address_err = $email_err = $password_err = "";
        if (isset($_REQUEST['edit'])) {
            $update = true;
            $id = $_REQUEST['edit'];
            
            $record = mysqli_query($con, "SELECT * FROM members WHERE user_id=$id");
            
            if (mysqli_num_rows($record) ==1) {
                
                $num = mysqli_fetch_array($record);
                $user_name_=$num['user_id'];
                $first_name=$num['first_name'];
                $lastName=$num['last_name'];
                $contact=$num['contact_number'];
                $address=$num['address'];
                $email=$num['email'];
                $password=$num['password'];
                
            }
    
        }
        if (isset($_REQUEST['delete'])){
            $id = $_REQUEST['delete'];
            mysqli_query($con, "DELETE  FROM members WHERE user_id=$id");
        }
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            if(empty($_POST['txtUserName'])){
                $user_name_err="* Name is required";
            }else{
                $user_name_=$_POST['txtUserName'];
            }

            if(empty($_POST['txtFirstName'])){
                $first_name_err="* Name is required";
            }else{
                
                $first_name=$_POST['txtFirstName'];
            }

            if(empty($_POST['txtLastName'])){
                $lastName_err="* Name is required";
            }else{
                $lastName=$_POST['txtLastName'];
            }

            if(empty($_POST['txtContactNo'])){
                $contact_err="* Name is required";
            }else{
                $contact=$_POST['txtContactNo'];
            }


            if(empty($_POST['txtAddress'])){
                $address_err="* Name is required";
            }else{
                $address=$_POST['txtAddress'];
            }

            if(empty($_POST['txtEmail'])){
                $email_err="* Name is required";
            }else{
                $email=$_POST['txtEmail'];
            }

            if(empty($_POST['txtPassword'])){
                $password_err="* email is required";
            }else{
                $password=$_POST['txtPassword'];
            }

            if($user_name_!="" && $first_name!="" && $lastName!="" && $contact!="" && $email!="" && $password!=""){
                // Check connection
                if(isset($_REQUEST['save'])){
                    $sql="INSERT INTO members(user_id, first_name, last_name, contact_number,address,email,password) VALUES ('$user_name_','$first_name','$lastName','$contact','$address','$email','$password')";
                    if (mysqli_query($con, $sql)) {
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($con);
                    }
                }if(isset($_REQUEST['update'])){
                    $sql="UPDATE members SET first_name='$first_name' WHERE user_id='$user_name_'";
                    if (mysqli_query($con, $sql)) {
                        echo "Updated Successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($con);
                    }
                }

                
                
            }

            //echo $user_name." ".$first_name." ".$lastName." ".$contact." ".$address." ".$email." ".$password." ";
        }
        

?>
<!DOCTYPE html>
<html>

<head>
    <title>Members</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .pos-star1 {
            top: 50px;
            left: 50px;
        }

        .pos-star2 {
            top: 100px;
            left: 100px;
        }

        .pos-star3 {
            top: 50px;
            left: 150px;
        }

        .pos-star4 {
            top: 50px;
            right: 50px;
        }

        .pos-star5 {
            top: 100px;
            right: 100px;
        }

        .pos-star6 {
            top: 50px;
            right: 150px;
        }


        .star {
            width: 20px;
            height: 20px;
            background-color: white;
            display: block;
            border-radius: 50%;
            float: left;
            position: absolute;
            transform-origin: 50% 50%;
            animation-name: star3;
            animation-duration: 20s;
            animation-iteration-count: infinite;
            animation-timing-function: ease;
            transform-origin: 50% 50%;
            transition: all 0.3s ease-out;
        }

        .star:before {
            width: 20px;
            height: 20px;
            content: "";
            background-color: red;
            position: absolute;
            transform: scale(1, 2) rotate(45deg);
            animation-name: star1;
            animation-duration: 3s;
            animation-iteration-count: infinite;
            animation-timing-function: ease-out;
            border-radius: 20%;
            transition: all 0.3s ease-out;
        }

        .star:after {
            width: 20px;
            height: 20px;
            content: "";
            background-color: red;
            position: absolute;
            transform: scale(2, 1) rotate(45deg);
            animation-name: star2;
            animation-duration: 3s;
            animation-iteration-count: infinite;
            animation-timing-function: ease-out;
            animation-delay: 0.2s;
            border-radius: 20%;
            transition: all 0.3s ease-out;
        }

        @keyframes star1 {
            0% {
                transform: scale(1, 2) rotate(45deg);
            }

            50% {
                transform: scale(1, 1) rotate(45deg);
            }

            100% {
                transform: scale(1, 2) rotate(45deg);
            }
        }

        @keyframes star2 {
            0% {
                transform: scale(2, 1) rotate(45deg);
            }

            50% {
                transform: scale(1, 1) rotate(45deg);
            }

            100% {
                transform: scale(2, 1) rotate(45deg);
            }
        }

        @keyframes star3 {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        #all-members table,tr,th,td{
            border: solid;
            border: 1px solid #ddd;
        }
        #all-members table{
            width: 100%;
            border-collapse: collapse;
            
        }
        #all-members{
            padding: 10px;
        }
        #all-members tr:nth-child(even){background-color: #f2f2f2;}

        #all-members tr:hover {background-color: #ddd;}

        #all-members th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>


    
    <!-- Header -->
    <div class="star pos-star1 "></div>
    <div class="star pos-star2 "></div>
    <div class="star pos-star3 "></div>
    <div class="star pos-star4 "></div>
    <div class="star pos-star5 "></div>
    <div class="star pos-star6 "></div>
    <div class="header">
        <h1>Calculators</h1>
    </div>

    <!-- The flexible grid (content) -->
    <div class="row">
        <div class="side">
            <ul>
                <li><a class="active" href="#">Members</a></li>
                <li><a href="#">Task</a></li>
            </ul>
        </div>
        <div class="main">
            <h2 style="text-align: center;">Add Members</h2>
            <hr>
            <div id="input-row">
                <div class="input-area">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <div>
                        <div class="input-lable">
                            <label for="">User Name:</label>
                        </div>
                        <div class="input">
                            <input type="text" id="txtWeight" id="txtUserName" name="txtUserName"  value="<?php echo $user_name_; ?>">
                        </div>
                        <div>
                            <?php echo $user_name_err; ?>
                        </div>
                    </div>

                    <div>
                        <div class="input-lable">
                            <label for="">First Name:</label>
                        </div>
                        <div class="input">
                            <input type="text" id="txtWeight" name="txtFirstName" value="<?php echo $first_name; ?>">
                        </div>
                        <div>
                            <?php echo $first_name_err; ?>
                        </div>
                    </div>

                    <div>
                        <div class="input-lable">
                            <label for="">Last Name:</label>
                        </div>
                        <div class="input">
                            <input type="text" id="txtWeight" name="txtLastName" value="<?php echo $lastName; ?>">
                        </div>
                        <div>
                            <?php echo $lastName_err; ?>
                        </div>
                    </div>

                    <div>
                        <div class="input-lable">
                            <label for="">Contact No:</label>
                        </div>
                        <div class="input">
                             <input type="text" id="txtWeight" name="txtContactNo" value="<?php echo $contact; ?>">

                        </div>
                        <div>
                            <?php echo $contact_err; ?>
                        </div>
                    </div>

                    <div>
                        <div class="input-lable">
                            <label for="">Address:</label>
                        </div>
                        <div class="input">
                            <input type="text" name="txtAddress" value="<?php echo $address; ?>">
                        </div>
                        <div>
                            
                        </div>
                    </div>
                    <div>
                        <div class="input-lable">
                            <label for="">Email:</label>
                        </div>
                        <div class="input">
                            <input type="text" id="txtWeight" name="txtEmail" value="<?php echo $email; ?>">
                        </div>
                        <div>
                            <?php echo $email_err; ?>
                        </div>
                    </div>

                    <div>
                        <div class="input-lable">
                            <label for="">Password:</label>
                        </div>
                        <div class="input">
                            <input type="password" name="txtPassword" value="<?php echo $password; ?>">
                        </div>
                        <div>
                            <?php echo $password_err; ?>
                        </div>
                    </div>

                    <div>
                        <div class="input-lable">

                        </div>
                        <div class="input">
                        <?php if($update == true) { ?>
				            <button class="button" type="submit" name="update" style="background: red;" onclick="back()"> Update </button>
				            <?php } elseif ($update == false) { ?>
				 	        <button class="button" type="submit" name="save" onclick="clear()"> Save </button>
				            <?php } ?>

                        </div>

                    </div>

                    </form>
                    
                   
                    
                </div>

                <div class="stage" style="width: 120px; height: 120px;">
                    <div class="spinner" style="float: right;">
                        <div class="face1">1</div>
                        <div class="face2">2</div>
                        <div class="face3">3</div>
                        <div class="face4">4</div>
                        <div class="face5">5</div>
                        <div class="face6">6</div>
                    </div>
                </div>
            </div>

            <div id="all-members">
                <table>
                    <tr>
                        <th>User Name</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        
                    </tr>
                    <?php 
                        // retrive data from members table
                    // Check connection
                        
                        $sql = "SELECT * FROM members";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                    echo "<td>".$row["user_id"]."</td>";
                                    echo "<td>".$row["first_name"]."</td>";
                                    echo "<td>".$row["last_name"]."</td>";
                                    echo "<td>".$row["address"]."</td>";
                                    echo "<td>".$row["contact_number"]."</td>";
                                    echo "<td>".$row["email"]."</td>";
                                    echo "<td>".$row["password"]."</td>";

                                    echo "<td><a href=members.php?edit='".urlencode($row["user_id"])."'>Edit</a></td>";
                                    
                                    echo "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href=members.php?delete='".urlencode($row["user_id"])."'>Delete</a></td><tr>";

                                echo "</tr>";
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <h2>&copy; 2021</h2>
    </div>

</body>

</html>

<?php mysqli_close($con); ?>