<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="col-lg-12">
                    <div class="container" style="width: max-content; margin-bottom: 5%;">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <?php 
                            foreach ($showDmBlog as $row) {
                                if ($row['id'] != 4) {                                                                
                                    $id = $row['id'];
                                    $slug =  $row['slug'];
                                    $linksp = ROOT_URL.'/bai-viet/'.$slug.'-'.$id.'/page-1';
                                    if($_GET['slug'] == $row['slug']){
                                        echo '  <label class="btn primary-2-active active " for="danhmuc'.$row['id'].'">
                                                    <input type="radio" name="options"  autocomplete="off">
                                                    <a class="text-white" id="danhmuc'.$row['id'].'" href="'.$linksp.'">'.$row['name'].' </a>
                                                </label>
                                            ';
                                    }else{
                                        echo '  <label class="btn btn-primary-2" for="danhmuc'.$row['id'].'>
                                                    <input type="radio" name="options"  autocomplete="off">
                                                    <a class="text-white" id="danhmuc'.$row['id'].'" href="'.$linksp.'">'.$row['name'].' </a>
                                                </label>
                                            ';
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                    <?php
                        foreach ($ds as $row) {
                            $date = date('m/d/Y', $row['date']);
                            $img =PATH_IMG_SITE.explode(",",$row['img'])[0];
                            $link = ROOT_URL."/bai-viet/".$row['slug'].'-'.$id;
                            echo ' <div class="blog-card">
                                        <div class="meta">
                                            <a href="'.$link .'">
                                                <div class="photo"
                                                    style="background-image: url(\''.$img.'\')">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="description">
                                            
                                            <a href="'.$link .'"><h1 class="limit-content-2">'.addslashes($row['name']).'</h1></a>
                                            
                                            <p class="limit-content-2 color-gray mt-1">'.addslashes($row['description']) .'</p>
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
                                    </div>';
                        }
                        
                    
                    ?>
                
                    </div>
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
