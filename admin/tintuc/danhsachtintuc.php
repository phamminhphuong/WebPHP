<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Học PHP</title>
    <!-- include -->
    <?php include('../layout/linkstyle.php')?>
    <!--  -->
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <!-- include header -->
        <?php include('../layout/header.php')?>
        <!-- include menu -->
        <?php include('../layout/menu.php')?>
        <!--  -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Trang admin
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">
                            <i class="fa fa-dashboard"></i> Home</a>
                    </li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Danh sách tin tức</h3>
                                <h4> <a href="themtintuc.php"> Thêm </a></h4>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_length" id="example1_length">
                                                <label>Show
                                                    <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> entries</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div id="example1_filter" class="dataTables_filter">
                                                <label>Search:
                                                    <input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
                                                            style="width: 182px;"> Id </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                                                            style="width: 224px;"> Tiêu đề </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                                                            style="width: 224px;"> Chi tiết </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                                                            style="width: 224px;"> Hinh anh </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                                                            style="width: 224px;"> Số lượt xem </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                                                            style="width: 224px;"> Idloaitin </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                                            style="width: 199px;"> Thao tác </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                     include('../../connect/connect.php');
                                                     $sql = ' SELECT * FROM tintuc';
                                                     $result = mysqli_query($conn, $sql);
                                                     if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                        while($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">
                                                            <?php echo $row["id"]?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row["tieude"]?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row["chitiet"]?>
                                                        </td>
                                                        <td>
                                                            <img src="../../align/image/<?php echo $row["hinhanh"]?>" width="100px" height="100px" alt="">
                                                        </td>
                                                        <td>
                                                            <?php echo $row["soluotxem"]?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row["idloaitin"]?>
                                                        </td>
                                                        <td>
                                                            <a href="suatintuc.php?idtintuc=<?php echo $row['id'];?>">Edit</a> |
                                                            <a onclick="return confirm('Bạn có muốn xóa');"  href="xoatintuc.php?idtintuc=<?php echo $row['id'];?>">Delete</a>
                                                        </td>
                                                    </tr>
                                                    <?php 
                                                              }
                                                            } else {
                                                                echo "0 results";
                                                            }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button previous disabled" id="example1_previous">
                                                        <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a>
                                                    </li>
                                                    <li class="paginate_button active">
                                                        <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a>
                                                    </li>
                                                    <li class="paginate_button ">
                                                        <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a>
                                                    </li>
                                                    <li class="paginate_button ">
                                                        <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a>
                                                    </li>
                                                    <li class="paginate_button ">
                                                        <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a>
                                                    </li>
                                                    <li class="paginate_button ">
                                                        <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a>
                                                    </li>
                                                    <li class="paginate_button ">
                                                        <a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a>
                                                    </li>
                                                    <li class="paginate_button next" id="example1_next">
                                                        <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- include footer -->
        <?php include('../layout/footer.php')?>
        <!-- include footer -->
    </div>
    <!-- ./wrapper -->
    <!-- include script -->
    <?php include('../layout/linkscript.php')?>
    <!--  -->

</body>

</html>