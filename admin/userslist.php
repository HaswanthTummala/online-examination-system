<?php
session_start();
include"header.php";
include"../connections.php";
if(!isset($_SESSION["admin"]))
{
    ?>

    <script type="text/javascript">
    window.location="index.php";
    </script>
    <?php



}
?>

<div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Users List</h1>
                    </div>
                </div>
            </div>
            

        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            
                            <div class="card-body">
                                <!-- Credit Card -->
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">contact</th>
                                            <th scope="col">Delect</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $count=0;
                                        $res=mysqli_query($link,"select * from registeration");
                                        while($row=mysqli_fetch_array($res))
                                        {
                                            $count=$count+1;
                                            ?>
                                            <tr>
                                            <th scope="row"><?php echo $count;?></th>
                                            <td><?php echo $row["firstname"];?></td>
                                            <td><?php echo $row["lastname"];?>
                                            <td><?php echo $row["username"];?>
                                            <td><?php echo $row["password"];?>
                                            <td><?php echo $row["email"];?>
                                            <td><?php echo $row["contact"];?>
                                            </td>
                                            <td><a href="deleteuser.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
</td>
                                            

                                        </tr>
                                            <?php
                                        }
                                        ?>
                                        
                                        </tbody>
                                </table>

                                

                            </div>
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->
                                             
                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                               


<?php
include"footer.php";
?>