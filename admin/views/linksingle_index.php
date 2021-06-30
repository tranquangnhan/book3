<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="mt-0 header-title">Danh mục</h4>                    
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th width="50%">Tên danh mục</th> 
                                    <th width="50%">Loại</th> 
                                    <th>Sửa</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php
                                $stt = 0;
                                foreach ($list as $row) {
                                    $stt++;
                                    $linkEdit = '?ctrl=linksingle&act=edit&id='.$row['id'];
                                    $type = ($row['type'] == 1)? '<div class="text-danger">Học Sinh</div>': '<div class="text-success">Giáo Viên</div>';                                       
                                    echo '<tr>
                                            <td>'.$stt.'</td>
                                            <td>'.$row['name'].'</td>
                                            <td>'.$type.'</td>
                                            <td><a><a name="" id="" class="btn btn-primary" href="'.$linkEdit.'" role="button"><i class="fa fa-edit"></i></a></a></a></td>
                                        </tr>';
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>      
        </div> 
    </div> 
</div>
