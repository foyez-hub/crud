<?php
include 'config.php';
include 'fun.php';


if (isset($_POST['save'])) {

    $id = $_POST['id'];
    $first = $_POST['first'];
    $last = $_POST['last'];
    $infoOBJ = new InfoTable($id, $first, $last);
    $infoOBJ->insert();
}

$inforead = new InfoTable("", "", "");

if (isset($_POST['read'])) {

    $id = $_POST['id1'];

    $tem = new InfoTable($id, "", "");

    $tem->read();

    $inforead = $tem;
}


if (isset($_POST['update'])) {
    

    

    $tem = new InfoTable($_POST['id'],$_POST['first1'],$_POST['last1']);
    $tem->update();

}

if (isset($_POST['delete'])) {
    
    $tem = new InfoTable($_POST['id'],$_POST['first1'],$_POST['last1']);
    $tem->delete();

}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>

        <table>

            <tr>
                <th>ADD</th>
                <th>Show</th>
            </tr>

            <tr>
                <td>




                    <form action="" method="POST">

                        <h2>ID</h2>
                        <input type="text" name="id" value=""> <br>
                        <h2>First Name</h2>
                        <input type="text" name="first" value=""> <br>
                        <h2>Last Name</h2>
                        <input type="text" name="last" value=""> <br>

                        <input type="submit" name="save" value="Save"> </br>
                    </form>

                </td>

                <td>
                    <form action="" method="POST">

                        <h2>Provide your ID</h2>

                        <input type="text" name="id1" value=""> <br>
                        <input type="submit" name="read" value="read"> </br>

                        <h2>Your INFO</h2>
                        <h2>ID</h2>
                        <input type="text" name="id" value="<?php if (isset($inforead->id))  echo $inforead->id ?>"> <br>

                        <h2>First Name</h2>
                        <input type="text" name="first1" value="<?php if (isset($inforead->first))  echo $inforead->first ?>"> <br>
                        <h2>Last Name</h2>
                        <input type="text" name="last1" value="<?php if (isset($inforead->last))  echo $inforead->last ?>"> <br>

                        <input type="submit" name="update" value="update"> </br>
                        <input type="submit" name="delete" value="delete"> </br>



                    </form>

                </td>


            </tr>

        </table>

    </div>



</body>

</html>