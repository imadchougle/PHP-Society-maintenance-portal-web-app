<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maintenance";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT roomNo FROM maintenance_tb1";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {

    $roomNo_arr[] = array(
        'roomNo' => $row['roomNo'],
      );


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Maintenance Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <script defer src="https://pyscript.net/alpha/pyscript.js"></script>
<style>
#show {
  position: absolute;
  top: 100%;
  left: 50%;
  transform: translate(-50%, -50%);
}

 </style>


</head>
<body>
<button id = "show" class = "btn btn-primary" type = "submit" pys-onClick="show">Society Notice</button>

<py-script>
            import webbrowser

            def show(*args, **kwargs):
                url= 'http://127.0.0.1:5000/downloads'
                webbrowser.open_new_tab(url)
    </py-script>




<div class="container">
    <div class="jumbotron text-center">
  <h1>Gokuldham Co. Housing Society</h1>


  <p>Monthly Maintenance Payment Portal</p>
</div>




<div class = "container">
    <table class="table">
    <thead>
            <tr>
                <td>Room No</td>
                <td>Name</td>
                <td>Amount</td>
                <td>Pay</td>
                <td>Status</td>
            </tr>
        </thead>

        <tbody>
        <tr class='bg-danger text-white' >
                <td colspan='5'>Ground Floor</td>
            </tr>

            <tr>

                <form action="pay3.php" method="POST">
                    <td>001 <input type="hidden" name='roono' value='001'> </td>
                    <td>Taarak Mehta <input type="hidden" name='mname' value="Taarak Mehta"> </td>
                    <td>800 <input type="hidden" name='amt' value='800'></td>


                    <?php
                   $is001 = 'false';
                foreach($roomNo_arr as $r) {

                    if($r['roomNo'] == 001){

                        $is001 = 'true';

                    }
                }


                if($is001 == 'true'){
                    echo "<td><input type='submit' value='Pay Now' name='paynow' class='btn btn-secondary' disabled></td>";
                    echo '<td><div class="btn btn-success disabled " > paid</div> </td>';
                }else{
                    echo "<td><input type='submit' value='Pay Now' name='paynow' class='btn btn-success'></td>";
                    echo '<td><div class="btn btn-danger disabled " > unpaid</div> </td>';
                }
                ?>
                </form>
            </tr>


            <tr>

                <form action="pay3.php" method="POST">
                    <td>002 <input type="hidden" name='roono' value='002'> </td>
                    <td>Dr. Hansraj Hathi <input type="hidden" name='mname' value="Dr. Hansraj Hathi"> </td>
                    <td>1200 <input type="hidden" name='amt' value='1200'></td>

                    <?php
                $is002 = 'false';
                foreach($roomNo_arr as $r) {

                    if($r['roomNo'] == 002){

                        $is002 = 'true';

                    }
                }



                if($is002 == 'true'){
                    echo "<td><input type='submit' value='Pay Now' name='paynow' class='btn btn-secondary' disabled></td>";
                    echo '<td><div class="btn btn-success disabled " > paid</div> </td>';
                }else{
                    echo "<td><input type='submit' value='Pay Now' name='paynow' class='btn btn-success'></td>";
                    echo '<td><div class="btn btn-danger disabled " > unpaid</div> </td>';
                }


                ?>

                </form>
            </tr>

            <tr class='bg-danger text-white' id='secondfloor'>
                <td colspan='5'>First Floor</td>
            </tr>

            <tr>

                <form action="pay3.php" method="POST">
                    <td>101 <input type="hidden" name='roono' value='101'> </td>
                    <td>Atmaram Bhide <input type="hidden" name='mname' value="Atmaram Bhide"> </td>
                    <td>550 <input type="hidden" name='amt' value='550'></td>

                    <?php
                $is101 = 'false';
                foreach($roomNo_arr as $r) {

                    if($r['roomNo'] == 101){

                        $is101 = 'true';

                    }
                }


                if($is101 == 'true'){
                    echo "<td><input type='submit' value='Pay Now' name='paynow' class='btn btn-secondary' disabled></td>";
                    echo '<td><div class="btn btn-success disabled " > paid</div> </td>';
                }else{
                    echo "<td><input type='submit' value='Pay Now' name='paynow' class='btn btn-success'></td>";
                    echo '<td><div class="btn btn-danger disabled " > unpaid</div> </td>';
                }


                ?>

                </form>
            </tr>

            <tr>

                <form action="pay3.php" method="POST">
                    <td>102 <input type="hidden" name='roono' value='102'> </td>
                    <td>Jethalal Gada <input type="hidden" name='mname' value="Jethalal Gada"> </td>
                    <td>4000 <input type="hidden" name='amt' value='4000'></td>

                    <?php
                $is102 = 'false';
                foreach($roomNo_arr as $r) {

                    if($r['roomNo'] == 102){

                        $is102 = 'true';

                    }
                }


                if($is102 == 'true'){
                    echo "<td><input type='submit' value='Pay Now' name='paynow' class='btn btn-secondary' disabled></td>";
                    echo '<td><div class="btn btn-success disabled " > paid</div> </td>';
                }else{
                    echo "<td><input type='submit' value='Pay Now' name='paynow' class='btn btn-success'></td>";
                    echo '<td><div class="btn btn-danger disabled " > unpaid</div> </td>';
                }


                ?>

                </form>
            </tr>

            <tr>

                <form action="pay3.php" method="POST">
                    <td>103 <input type="hidden" name='roono' value='103'> </td>
                    <td>Roshan Singh Sodhi <input type="hidden" name='mname' value="Roshan Singh Sodhi"> </td>
                    <td>550 <input type="hidden" name='amt' value='550'></td>

                    <?php
                $is103 = 'false';
                foreach($roomNo_arr as $r) {

                    if($r['roomNo'] == 103){

                        $is103 = 'true';

                    }
                }


                if($is103 == 'true'){
                    echo "<td><input type='submit' value='Pay Now' name='paynow' class='btn btn-secondary' disabled></td>";
                    echo '<td><div class="btn btn-success disabled " > paid</div> </td>';
                }else{
                    echo "<td><input type='submit' value='Pay Now' name='paynow' class='btn btn-success'></td>";
                    echo '<td><div class="btn btn-danger disabled " > unpaid</div> </td>';
                }


                ?>

                </form>
            </tr>

            <tr class='bg-danger text-white' id='secondfloor'>
                <td colspan='5'>Second Floor</td>
            </tr>
            <tr>

                <form action="pay3.php" method="POST">
                    <td>201 <input type="hidden" name='roono' value='201'> </td>
                    <td>Babita ji <input type="hidden" name='mname' value="Babita ji"> </td>
                    <td>1820 <input type="hidden" name='amt' value='1820'></td>

                    <?php
                $is201 = 'false';
                foreach($roomNo_arr as $r) {

                    if($r['roomNo'] == 201){

                        $is201 = 'true';

                    }
                }


                if($is201 == 'true'){
                    echo "<td><input type='submit' value='Pay Now' name='paynow' class='btn btn-secondary' disabled></td>";
                    echo '<td><div class="btn btn-success disabled " > paid</div> </td>';
                }else{
                    echo "<td><input type='submit' value='Pay Now' name='paynow' class='btn btn-success'></td>";
                    echo '<td><div class="btn btn-danger disabled " > unpaid</div> </td>';
                }


                ?>

                </form>
            </tr>





        </tbody>
    </table>

</div>

<script> src = "demo.js "></script>


</body>
</html>
