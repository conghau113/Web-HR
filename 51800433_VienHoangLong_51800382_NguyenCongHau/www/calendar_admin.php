<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/style.css">
    <title>Ngày nghỉ phép</title>
</head>
<?php
require_once('db.php');
$page = 'calendar_admin';
$calendar = load_calendar();
?>

<body>
    <div class="wrapper">
        <?php include('includes/sidebar.php'); ?>
        <div id="content">
            <!-- Navbar -->
            <?php include('includes/navbar.php'); ?>
            <!-- Page Content  -->
            <div class="container-fluid">
                <div class="col-xl-12 col-lg-9">
                    <div class="card shadow mb-4 mt-5">
                        <!-- Card Body -->
                        <div class="card-header">
                            <h4 class="font-weight-bold text-primary">Bảng Danh Sách Yêu Cầu Xin Nghỉ Phép</h4>
                            <h6 class="font-weight-bold text-danger">*Note: Tổng ngày nghỉ trong năm là 12 ngày nhân viên, trưởng phòng 15 ngày</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mã nhân viên</th>
                                            <th>Họ và tên</th>
                                            <th>Yêu cầu</th>
                                            <th>Thời gian</th>
                                            <th>Lí do</th>
                                            <th>Phê duyệt</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($calendar)) { ?>
                                        <tbody>
                                            <tr>
                                                <td><?= $row['id'] ?></td>
                                                <td><?= $row['username'] ?></td>
                                                <td><?= check_dayoff($row['ngayBatDau'], $row['ngayKetThuc']) . ' ngày' ?></td>
                                                <td><?= date('d/m/Y', strtotime($row['ngayBatDau'])) . '-' . date('d/m/Y', strtotime($row['ngayKetThuc'])) ?></td>
                                                <td>
                                                    <a class="btn click-detail-calender text-primary">Chi tiết<a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-success btn-icon-split click-accept-calender">
                                                        <span class="icon text-white-100"><i class="fa fa-check"></i></span>

                                                    </a>
                                                    <a class="btn btn-danger btn-icon-split click-cancel-calender">
                                                        <span class="icon text-white-100"><i class="fa fa-times"></i></span>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    <?php } ?>
                                </table>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Trước</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Sau</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dialog detail calendar -->
        <div id="detail-calender" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="myForm" method="">
                        <div class="modal-header">
                            <h3 class="modal-title">Thông tin chi tiết ngày nghỉ</h3>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="num-rd">Mã nhân viên: </label>
                                <span>NV01</span>
                            </div>
                            <div class="form-group">
                                <label for="name-rd">Họ và tên: </label>
                                <strong>Viên Hoàng Long</strong>
                            </div>
                            <div class="form-group">
                                <label for="name-rmd">Chức vụ: </label>
                                <span>Trưởng phòng CNTT</span>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="name-rmd">Số ngày đã nghỉ: </label>
                                        <span>5 ngày</span>
                                    </div>
                                    <div class="col">
                                        <label for="name-rmd">Số ngày nghỉ còn lại: </label>
                                        <span>9 ngày</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5 class="font-weight-bold">Yêu cầu xin nghỉ</h5>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="name-rmd">Số ngày yêu cầu: </label>
                                        <span>3 ngày</span>
                                    </div>
                                    <div class="col">
                                        <label for="name-rmd">Thời gian: </label>
                                        <span>12/12/21 - 15/12/21</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name-rmd">Lí do: </label>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus optio earum at velit ipsa harum ipsum, minus a officia commodi? Blanditiis iusto vel repellat atque facere assumenda asperiores sint veritatis?</p>
                            </div>
                        </div>
                        <div class="modal-footer pull-left">
                            <button type="button" class="btn br-color" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Cancel calendar -->
        <div id="cancel-calendar" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <hp class="modal-title">Phê duyệt</hp>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Bạn có chắc rằng không duyệt đơn xin nghỉ phép này ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                        <button type="button" class="btn btn-danger">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="/main.js"></script>
</body>

</html>