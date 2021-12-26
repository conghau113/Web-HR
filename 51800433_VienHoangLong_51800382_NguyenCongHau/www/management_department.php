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
    <title>Phòng ban</title>
</head>

<body>
    <div class="wrapper">
        <?php include('includes/sidebar.php'); ?>
        <div id="content">
            <!-- Navbar -->
            <?php include('includes/navbar.php'); ?>
            <!-- Page Content  -->
            <div class="container-fluid">
                <div class="col-xl-12 col-lg-9">
                    <div class="card shadow mb-4">
                        <!-- Card Body -->
                        <div class="card-header py-3">
                            <h4 class="font-weight-bold text-primary">Bảng Danh Sách Phòng Ban</h4>
                            <div class="row pl-3">
                                <div class="click-create-department mr-2">
                                    <button class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                                        Create department</button>

                                </div>
                                <div class="click-create-promote">
                                    <button class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                                        Promote</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-outline mb-2">
                                <input type="search" class="form-control" placeholder="Search..." />

                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered text-center table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Số phòng</th>
                                            <th>Trưởng phòng</th>
                                            <th>Phòng Ban</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>A1</td>
                                            <td>Viên Hoàng Long</td>
                                            <td> <a href="#" class="font-weight-bold click-details-department">Phòng CNTT</a></td>
                                            <td>
                                                <a class="btn btn-primary btn-icon-split click-update-department">
                                                    <span class="icon text-white-50"><i class="fa fa-edit"></i></span>
                                                    <span>Edit</span>
                                                </a>
                                                <a class="btn btn-danger btn-icon-split click-delete-department">
                                                    <span class="icon text-white-50"><i class="fa fa-trash"></i></span>
                                                    <span>Delete</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A1</td>
                                            <td>Viên Hoàng Long</td>
                                            <td> <a href="#" class="font-weight-bold click-details-department">Phòng CNTT</a></td>
                                            <td>
                                                <a class="btn btn-primary btn-icon-split click-update-department">
                                                    <span class="icon text-white-50"><i class="fa fa-edit"></i></span>
                                                    <span>Edit</span>
                                                </a>
                                                <a class="btn btn-danger btn-icon-split click-delete-department">
                                                    <span class="icon text-white-50"><i class="fa fa-trash"></i></span>
                                                    <span>Delete</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A1</td>
                                            <td>Viên Hoàng Long</td>
                                            <td> <a href="#" class="font-weight-bold click-details-department">Phòng CNTT</a></td>
                                            <td>
                                                <a class="btn btn-primary btn-icon-split click-update-department">
                                                    <span class="icon text-white-50"><i class="fa fa-edit"></i></span>
                                                    <span>Edit</span>
                                                </a>
                                                <a class="btn btn-danger btn-icon-split click-delete-department">
                                                    <span class="icon text-white-50"><i class="fa fa-trash"></i></span>
                                                    <span>Delete</span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
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
        <!-- Dialog create department-->
        <div id="create-department" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="myForm" method="">
                        <div class="modal-header">
                            <h5 class="modal-title">Thêm phòng ban mới</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="num-room">Số phòng</label>
                                <input name="num-room" class="form-control" type="text" placeholder="Số phòng" id="num-room">
                            </div>
                            <div class="form-group">
                                <label for="name-room">Tên phòng ban</label>
                                <input name="name-room" class="form-control" type="text" placeholder="Tên phòng ban" id="name-room">
                            </div>
                            <div class="form-group">
                                <label for="desc-room">Mô tả</label>
                                <textarea id="desc-room" name="desc-room" rows="4" class="form-control" placeholder="Mô tả"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer pull-left">
                            <button type="button" class="btn br-color" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn br-color">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Dialog create promote -->
        <div id="create-promote" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="myForm" method="">
                        <div class="modal-header">
                            <h5 class="modal-title">Bổ nhiệm nhân viên</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="position">Nhân viên</label>
                                <select class="form-control" id="position">
                                    <option>Viên Hoàng Long</option>
                                    <option>Diệp Nguyễn Trọng Phúc</option>
                                    <option>Nguyễn Công Hậu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="position">Chức vụ</label>
                                <select class="form-control" id="position">
                                    <option>Nhân viên</option>
                                    <option>Trưởng phòng</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="department">Phòng ban</label>
                                <select class="form-control" id="department">
                                    <option>Phòng tài chính</option>
                                    <option>Phòng marketing</option>
                                    <option>Phòng kết toán</option>
                                    <option>Phòng nhân sự</option>
                                    <option>Phòng CNTT</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer pull-left">
                            <button type="button" class="btn br-color" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn br-color">Promote</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Dialog delete department -->
        <div id="delete-department" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <hp class="modal-title">Xóa phòng ban</hp>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Bạn có chắc rằng muốn xóa phòng ban này ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dialog update department -->
        <div id="update-department" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="myForm" method="">
                        <div class="modal-header">
                            <h5 class="modal-title">Chỉnh sửa phòng ban</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="id-room">Mã số phòng</label>
                                <input name="id-room" class="form-control" type="text" id="id-room" readonly>
                            </div>
                            <div class="form-group">
                                <label for="num-room">Số phòng</label>
                                <input name="num-room" class="form-control" type="text" placeholder="Số phòng" id="num-room">
                            </div>
                            <div class="form-group">
                                <label for="name-room">Tên phòng ban</label>
                                <input name="name-room" class="form-control" type="text" placeholder="Tên phòng ban" id="name-room">
                            </div>
                            <div class="form-group">
                                <label for="desc-room">Mô tả</label>
                                <textarea id="desc-room" name="desc-room" rows="4" class="form-control" placeholder="Mô tả"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer pull-left">
                            <button type="button" class="btn br-color" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn br-color">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Dialog details department-->
        <div id="details-department" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="myForm" method="">
                        <div class="modal-header">
                            <h5 class="modal-title">Chi tiết phòng ban</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="num-rd">Số phòng</label>
                                <input name="num-rd" class="form-control" type="text" placeholder="Số phòng" id="num-rd" readonly>
                            </div>
                            <div class="form-group">
                                <label for="name-rd">Tên phòng ban</label>
                                <input name="name-rd" class="form-control" type="text" placeholder="Tên phòng ban" id="name-rd" readonly>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="name-rmd">Trưởng phòng</label>
                                        <input name="name-rmd" class="form-control" type="text" placeholder="Tên phòng ban" id="name-rmd" readonly>
                                    </div>
                                    <div class="col">
                                        <label for="name-rmd">Số lượng nhân viên</label>
                                        <input name="name-rmd" class="form-control" type="text" placeholder="Tên phòng ban" id="name-rmd" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="desc-rd">Mô tả</label>
                                <textarea id="desc-rd" name="desc-rd" rows="6" class="form-control" placeholder="Mô tả" readonly></textarea>
                            </div>
                        </div>
                        <div class="modal-footer pull-left">
                            <button type="button" class="btn br-color" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
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