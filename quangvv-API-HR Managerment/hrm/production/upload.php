<select>
<?php include('connect.php');
$team   =   "SELECT * FROM `teams`";

$query  =   mysqli_query($conn,$team);

while($row    =   mysqli_fetch_array($query))
{
    ?>
    <option name="team" value="<?php echo $row['id'] ?>"><?php echo $row['id'] ?></option>

<?php } ?></select>