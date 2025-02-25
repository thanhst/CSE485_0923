<?php
/* // Dịch vụ bảo vệ
session_start();

// Kiểm tra thông tin
if (isset($_SESSION['isLogin'])) {
    header("Location: login.php");
} */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3CMS</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Template CSS Style -->
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div>
        <div class="content__top">
            <span class="content__title">Users</span>
            <div class="content__top--wrapped">
                <button class="btn btn--white">Delete</button>
                <a href="./user_add.php" class="content__btn">
                    ADD USER
                    <span><i class="fa-solid fa-plus"></i></span>
                </a>
            </div>
        </div>
        <div class="content__body">
            <?php
            require_once './connect.php';
            $query = 'Select * from users';
            $users = mysqli_query($strConnection, $query);
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th><input class="primary__checkbox" type="checkbox" name="" id=""></th>
                        <th>Full Name </th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Groups</th>
                        <th>Mobile</th>
                        <th>Date Of Birth</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) {
                        $user['gender'] == 'Male' ? $gender = 'Male' : $gender = 'Female';
                        $user['stt'] == 1 ? $status = '<i class="fa-solid fa-circle stt-active"></i>' : $status = '<i class="fa-solid fa-circle"></i>';
                    ?>
                        <tr>
                            <td><input class="content_checkbox" type="checkbox" name="" id=""></td>
                            <td><a href="./user_info.php?id=<?= $user['id'] ?>"><img src="<?= $user['image'] ?>" alt="#"><?= $user['fullname'] ?></a></td>
                            <td><strong class="text-start"><?= $user['email'] ?></strong></td>
                            <td><?= $gender ?></td>
                            <td><span class="highlight"><?= $user['job'] ?></span></td>
                            <td><?= $user['mobile'] ?></td>
                            <td><span class="text-start"><?= $user['dob'] ?></span></td>
                            <td><?= $status ?></td>
                            <td>
                                <ul class="content__menu">
                                    <li><a style="background-color: #4CBC9A" href="./user_info.php?id=<?= $user['id'] ?>"><i class="fa-solid fa-shield-halved"></i></a></li>
                                    <li><a style="background-color: #ff6a59" href="./user_edit.php?id=<?= $user['id'] ?>"><i class="fa-solid fa-pencil"></i></a></li>
                                    <li><a data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #f75a5b" href=""><i class="fa-solid fa-trash"></i></a>
                                        <!-- Button trigger modal -->
                                       <!--  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
 -->
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Thông báo</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Bạn có chắc chắn muốn xóa người dùng này?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                                        <button type="button" class="btn btn-primary">Xác nhận</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>


        <div class="content__footer">
            <div class="footer__left">
                <span>Page 1 of 3.</span>
            </div>
            <div class="footer__right">
                <a href="" class="btn"><i class="fa-solid fa-chevron-left"></i></a>
                <a href="" class="btn active">1</a>
                <a href="" class="btn">2</a>
                <a href="" class="btn">3</a>
                <a href="" class="btn"><i class="fa-solid fa-chevron-right"></i></a>
            </div>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>