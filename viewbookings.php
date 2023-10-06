<?php
  require("admin/include/connect.php");
//   require("<admin/dashboard.php");
  session_start();
   //session not set or not true
   if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
   {
      header("location: login.php");
      exit;
   } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <!-- <link rel="stylesheet" href="prostyle.css"> -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

  <!-- My CSS -->
  <link rel="stylesheet" href="dashstyle.css">

  <title>manage bookings</title>
  <style>
    .add {
    text-decoration: none;
    padding: 2px 5px;
    background: #8e44ad;
    color: white;
    border-radius: 3px;
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
}
h1{
  color: #8e44ad;
  text-align: center;
}
  
  .edit {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
    

}

.del {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 20px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}
 

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #8e44ad;
  color: white;
}
h1{
  color: #8e44ad;
  text-align: center;
}

.add-product-form{
    width: 80%;
    align-items: center;
  }
  .add-product-form input{
    font-size: 1.2rem;
  }
  </style>
</head>
<body>


  
  <!-- CONTENT -->
  <section id="content">
    
    <main>
      <div class="head-title">
        <div class="left">
          <h1 style="color:#8e44ad">Dashboard</h1>
          <ul class="breadcrumb">
            <li>
              <a href="#">Dashboard</a>
            </li>
            <li><i class='bx bx-chevron-right' ></i></li>
            <li>
              <a class="active" href="#">Home</a>
            </li>
          </ul>
        </div><br><br><br>
        
      </div>

     
<?php

@include 'include/connect.php';

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php// include 'header.php'; ?>

<div class="container">

<section class="display-product-table">

   <table id ="customers" style="font-size: 1rem;">
 <h1 style="font-size:2.5rem"> Manage bookings</h1>
      <thead>
         <tr></tr>
         <th> id</th>
         <th> name</th>
         <th> username</th>
         <th> contact no.</th>
         <th> address</th>
         <th> place to visit</th>
         <th> no. of person</th>
         <th> arrival date</th>
         <th> departure date</th>
         <th> mode of transportation</th>
         <th>delete</th>
         <th>update the tourist for their trip</th>

      </thead>

      <tbody>
         <?php
         
            $select_products = mysqli_query($con, "SELECT * FROM `tbl_bookings` ORDER BY `bid` DESC ");
            if(mysqli_num_rows($select_products) > 0){
               while($row = mysqli_fetch_assoc($select_products)){
         ?>

         <tr>
		 <td><?php echo $row['bid']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['place']; ?></td>
            <td><?php echo $row['person']; ?></td>
            <td><?php echo $row['arrivals']; ?></td>
            <td><?php echo $row['departures']; ?></td>
            <td><?php echo $row['mot']; ?></td>
            <td>
               <a href="deletebookings.php?delete=<?php echo $row['bid']; ?>" class="del" onclick="return confirm('are your sure you want to delete this?');"> <i></i> delete </a>
            </td>
            <td>
               <a href="managepackage.php?edit=<?php echo $row['bid']; ?>" class="edit"> <i></i> update </a>
            </td>
         </tr>

         <?php
            };    
            }else{
               echo "<div class='empty'>no tourist added</div>";
            };
         ?>
      </tbody>
   </table>

</section>

</body>
</html>

