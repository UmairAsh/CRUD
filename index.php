<?php
include 'header.php';
?>
<?php 
    $dbcon = mysqli_connect("localhost","root","","crud") or die ("Coonection Failed");

    $query = "SELECT * FROM student JOIN course ON student.sclass = course.cid";

    $result = mysqli_query($dbcon, $query) or die ("No Data Found");

    if (mysqli_num_rows($result) > 0) {
   
?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php 
                while ($row = mysqli_fetch_assoc($result)) {
                   
                
            ?>
            <tr>
                <td><?php echo $row['sid'];?></td>
                <td><?php echo $row['sname'];?></td>
                <td><?php echo $row['saddress'];?></td>
                <td><?php echo $row['cname'];?></td>
                <td><?php echo $row['sphone'];?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid'];?>'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <?php 
                }
            ?>
        </tbody>
    </table>
    <?php 
        }
        mysqli_close($dbcon);
    ?>
</div>
</div>
</body>
</html>
