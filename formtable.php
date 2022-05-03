<?php
    include"config.php";
    $sql="select * from `form`";
    $result=mysqli_query($con,$sql);
?>
<html>
<body>
    <table border="1" align="center">
        <tr>
            <td colspan="6" aligh="right"></td>
            <th><input type="submit" value="search"></th>
        </tr>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Passwored</th>
        <th>Contact</th>
        
        <th>Edit</th>
        <th>Delete</th>
</tr>
<?php
    while($row=mysqli_fetch_assoc($result))       
    {
?>
    <tr>
        <td><?php echo $row['id'];?></td>
         <td><?php echo $row['name'];?></td>
         <td><?php echo $row['email'];?></td>
         <td><?php echo $row['password'];?></td>
         <td><?php echo $row['contact'];?></td>
         
         <td><a href="edit.php?id=<?php echo $row['id']?>">EDIT</a></td>
         <td><a href="delete.php?id=<?php echo $row['id']?>">DELETE</a></td>
    </tr>
    <?php
    }
    ?>
        </table>
</body>
</html>
         











    

