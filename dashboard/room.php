<?php


$server = "localhost";
$username ="root";
$pass="";
$dbname ="room-rental-system";
$conn = new mysqli($server, $username ,$pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone_number'];
    $room_type = $_POST['room_type'];
    $room_no = $_POST['room_no'];

    $sql = "INSERT INTO `room_info`( `name`, `email`, `address`, `phone_number`, `room_type`, `room_no`) VALUES ('$name','$email','$address','$phone','$room_type','$room_no',)";
   $conn= "connected here!";
    if($conn->query($sql))
    {
        echo "submitted successfully!";
    } else {
        echo "Something went wrong";
    }
}

$fetchsql = "SELECT * FROM `room_info`";
$result = $conn->query($fetchsql);
$data = $result->fetch_all(MYSQLI_ASSOC);
// echo "<pre>";
// print_r($data);
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Room</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    <!-- As a link -->
    <nav class="navbar bg-body-tertiary" style="background-color: Green !important;">
        <div class="container-fluid">
            <a class="navbar-brand mx-auto" href="#">fill the form to book the room!!</a>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card p-3">
                    <form action="" method="POST">

                        <div class="mb-3">
                            <label for="name" class="form-label" style="font-weight: bold;">Name:</label>
                            <input type="name" name="name" class="form-control" placeholder="please enter your name!">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" style="font-weight: bold;">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                placeholder="Please! Enter your Email Address">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="address" style="font-weight: bold;">Address</label>
                            <input type="address" class="form-control"  name="address" placeholder="Address!">
                        </div>
                        <div class ="mb-3">
                            <label for ="phone" class="form-label" style="font-weight: bold;">phone_number</label>
                            <input type="text" class= "form-control" name ="phone_number" placeholder = "Enter your contact details!">
                        </div>
                        <div class="mb-3">
                            <label for="room_size" class="form-label" style="font-weight: bold;">Room_no</label>
                            <input type="number" class="form-control" name="room_size" placeholder="How many rooms you want to book!">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: bold;">Room_Type</label>
                            <div>
                                <label>
                                    <input type="radio" name="room_type" value="AC" required> AC Room
                                </label>
                                <label>
                                    <input type="radio" name="room_type" value="NON-AC"> Non-AC Room
                                </label>
                            </div>
                            <button type="submit"  name="submit" class="btn btn-success">Click Here to book room!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope = "col">S.N.</th>
                <th scope = "col">name</th>
                <th scope = "col">Email</th>
                <th scope = "col">Address</th>
                <th scope = "col">phone_number</th>
                <th scope = "col">Room_type</th>
                <th scope = "col">room_no</th>
                <th scope = "col">Actions</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $i= 1;
            foreach($data as $value){ ?>
              <tr>
                <th scope=" row"><?php echo $i++; ?> </th>
                <td><?php echo $value['name']; ?> </td>
                <td><?php echo $value['email']; ?> </td>
                <td><?php echo $value['address']; ?> </td>
                <td><?php echo $value['phone_number']; ?> </td>
                <td><?php echo $value['room_type']; ?> </td>
                <td><?php echo $value['room_no']; ?> </td>
                <td>
                <a href ="std_edit.php?id=<?php echo $value['id']; ?>"  class="bi bi-pen"></button>
                <a href ="std_delete.php?id=<?php echo $value['id']; ?>" class="bi bi-trash"></button>
                </td>
              </tr>
             <?php }
            ?>
            </tbody>
        </table>
    </div>
</body>

</html>