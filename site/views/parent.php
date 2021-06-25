<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <?php $stt = 0; foreach ($ds as $row) { $stt++;
                        $img   = PATH_IMG_SITE.explode(",",$row['img'])[0];
                        $date  = date('m/d/Y', $row['date']);
                        $link = ROOT_URL."/bai-viet/".$row['slug'].'-'.$row['iddm'];

                    ?>
                    <div class="blog-card <?php echo ($stt == 1) ? 'mt-0' : '' ?>">
                        <div class="meta">
                            <a href="<?=$link?>">
                                <div class="photo"
                                    style="background-image: url('<?=$img?>')">
                                </div>                            
                            </div>
                        </a>
                        <div class="description">
                            <a href="<?=$link?>"><h1 class="limit-content-2"><?=$row['name']?></h1></a>
                            <p class="limit-content-2 color-gray mt-1"><?=$row['description']?></p>
                            <div class="row mt-2">
                                <div class="col-6">
                                    <h6>'.$date.'</h6>
                                </div>
                                <div class="col-6">
                                    <p class="read-more m-0">
                                        <a href="'.$link .'">Đọc thêm</a>
                                    </p>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="block-27">
                            <ul>
                                <?=$Pagination?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php require 'right.php'; ?>
        </div>
</section>

