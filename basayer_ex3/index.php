<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <?php require_once "setHead.php" ?>
    <?php require_once "connect.php" ?>

</head>
<body>
    <div class="container my-5">
        <h2>รายชื่อสมาชิก ปวช. ชส.1</h2>
        <a class="btn btn-primary" herf="/basayer_ex3/create.php" role="button">เพิ่มสมาชิก</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Addres</th>
                    <th>Create at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[phone]</td>
                    <td>$row[address]</td>
                    <td>$row[create_at]</td>
                 </tr>
                 <a class='btn btn-primary btn-sm' href='#'>แก้ไข</a>
                  <a class='btn btn-danger btn-sm' href='#'>ลบ</a>

                        </td>
                        </tr>
                        ";
                }?>
                   
                
</td>
</tr>
</tbody>
        </table>               
    </div>
</body>
</html>