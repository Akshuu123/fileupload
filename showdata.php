<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form class="showdata" action="showdata.php" method="post">
        <label for="image">Image Id</label>
        <br>
        <input type="number" name="number" id="number" min="0">
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
<?php
include_once 'db.php';
// form to show data
error_reporting(0); //error hide kr di
$id = $_POST['number'];
if ($id == null) {
    echo '  <span id="showdata_span"> please select id </span>';
} else {
    $id;
    $sql = " SELECT * FROM images WHERE id = $id ";
    $result = $conn->query($sql);
    echo '<pre>';
    // print_r($result);

    if ($result->num_rows == 1) {
        while ($data = $result->fetch_assoc()) {
            $imageurl = 'uploads/' . $data['file_name']; ?>

            <div class='outputimage'>
                <img src="<?php echo $imageurl; ?>">
                <a href="showdata.php">Search Another Id</a>
            </div>
            <?php
        }
    }
}
?>