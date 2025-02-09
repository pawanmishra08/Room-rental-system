<?php

include"connection.php";
if(!empty($_GET['id']))
{
    $id = $_GET['id'];

    $edit_sql = "SELECT * FROM `room_info` WHERE id = '$id' ";
    $result = $conn->query($edit_sql);
    $data = $result->fetch_assoc();
    print_r($data);

    //print_r($_POST);  to see the error!
    //print_r($data)

    if(isset($_POST['submit'])) {
        print_r($$_POST);
        $id= $_POST['id'];
        $name= $_POST['name'];
        $email= $_POST['email'];
        $address= $_POST['address'];
        $phone= $_POST['phone_number'];
        $room_type= $_POST['room_type'];
        $room_no= $_POST['room_no'];
        $password= $_POST['password'];

        $updatesql = "UPDATE `room_info` SET `name`='$name',`email`= '$email',`address`='$address',`phone_number`='$phone',`room_type`='$room_type',`room_no`='$room_no',`password`='$password' WHERE id = $id";
        if($conn->query($updatesql)) {
            header("Location: home.php");
        }
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!-- As a link -->
    <nav class="navbar bg-body-tertiary" style ="background-color: orange !important;">
      <div class="container-fluid">
       <a class="navbar-brand mx-auto" href="#"> Edit Rooms Information</a>
      </div>
    </nav>

    <div class ="container-fluid">
      <div class= "row">
        <div class = "col-6 mx-auto">
          <div class = "card p-3">

            <form action ="" method ="POST">
              <input type = "hidden" value = "<?php echo $data['id']; ?>" name= "id">

              <div>
               <label for= "name" style="font-weight: bold;">Name:</label>
               <input for = "text" value="<?php echo $data['name']; ?>"  name ="name" class= "form-control" id= "name" placeholder ="please enter your name">
              </div>

              <div class="mb-3">
               <label for="exampleInputEmail1" style="font-weight: bold;" class="form-label">Email</label>
               <input type="email" value="<?php echo $data['email']; ?>" name ="email" class="form-control" id="exampleInputEmail1" placeholder ="please enter your email adress">
              </div>
              <div class="mb-3">
               <label for="phone" class="phone" style="font-weight: bold;">phone</label>
               <input type="number" value="<?php echo $data['phone_number']; ?>"name="phone" class="form-control" id="phone" placeholder ="Enter your contact number">
              </div>
              <div class="mb-3">
               <label class="adress" for="adress" style="font-weight: bold;">Address</label>
               <input type="adress" value="<?php echo $data['address']; ?>"name="adress" class="form-control" id="adress" placeholder ="Enter your adress">
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
                                    <input type="radio" value="<?php echo $data['room_type']; ?>"name="room_type" value="NON-AC"> Non-AC Room
                                </label>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label" style="font-weight: bold;">Password</label>
                                <input type="password" value="<?php echo $data['password']; ?>"name= "password" class="form-control" placeholder="Enter the password here!">
                            </div>

             <button type="submit"  name ="submit" class="btn btn-success">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>