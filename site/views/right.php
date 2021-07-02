<?php if (isset($test)) {
    echo '123';
    exit();
}?>
<div class="col-lg-3 sidebar fixed-location">
    <div class="right fix">
        <div class="sidebar-box bg-white ftco-animate">
            <form action="<?=ROOT_URL?>/san-pham" method="post" class="search-form  search-input">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-10 col-md-11 col-sm-11 col-11 p-r-0">
                        <input type="text"  name="keysearch" class="keysearch form-control" placeholder="Search...">
                    </div>
                    <div class="col-lg-2 col-md-1 col-sm-1 col-1">
                        <button style="background: none;border: none;" type="submit"><span type="submit" class="icon fa fa-search"></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="sidebar-box bg-white ftco-animate">
            <h3 class="heading-sidebar buttontitle">Tin Mới</h3>
            <div class="p-2">

            <?php
                    foreach ($getLastestNews as $row) {
                        $id = $row['id'];
                        $date = date('m/d/Y', $row['date']);
                        $link = ROOT_URL . "/bai-viet/" . $row['slug'] . '-' . $id;
                        $img = PATH_IMG_SITE . explode(",", $row['img'])[0];
                        echo '<div class="container-sider">
                            <div class="left-sider">
                                <a href="' . $link . '">
                                    <img class="img-sidebar" src="' . $img . '" width="50%" alt="">
                                </a>
                            </div>
                            <div class="containerright-sider d-flex align-items-center">
                                <div class="row">
                                    <div class="col-md-12 heading-section ftco-animate limit-content-3">
                                        <a href="' . $link . '"><h6>' . $row['name'] . '</h6></a>

                                    </div>
                                    <div class="col-md-12 heading-section ftco-animate limit-content-1 mt-2">
                                        <h6 class="color-gray">' . $date . '</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>';
}
?>

            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-12 col-md-6 col-sm-6">
                <div class="sidebar-box bg-white ftco-animate ">
                <h3 class="heading-sidebar color-main buttontitle">KHO MEDIA</h3>
                <!-- <iframe width="100%" height="200" src="https://www.youtube.com/embed/<?=$video['linkyoutube']?>"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe> -->
                <div class="p-2">
                    <script src="https://apis.google.com/js/platform.js"></script>
                    <div class="g-ytsubscribe" data-channelid="UCGzhS0mRNympJQQ0PStn7CQ" data-layout="full" data-count="default"></div>
                    <iframe width="100%" height="250px" src="https://www.youtube.com/embed/Elkc4s_Swuw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            </div>
            <div class="col-12 col-lg-12 col-md-6 col-sm-6">
                <div class="sidebar-box bg-white ftco-animate m-0">
                    <h3 class="heading-sidebar buttontitle">KẾT NỐI MẠNG XÃ HỘI</h3>
                    <!-- <iframe class="p-2" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsachmem.vn&tabs=timeline&width=300&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1259082827813860"
                        width="100%" height="300px" style="border:none;overflow:hidden;display:block !important"
                        scrolling="no" frameborder="0" allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                    </iframe> -->
                    <!-- <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsachmem.vn%2F&tabs=timeline&width=340&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=1259082827813860" 
                        width="100%" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" 
                        allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                    </iframe> -->
                    <div class="fanpage-lg">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsachmem.vn%2F&tabs=timeline&width=260&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=1259082827813860" 
                            width="100%" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" data-lazy="true"
                            allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                        </iframe>
                    </div>

                    <div class="fanpage-md">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsachmem.vn%2F&tabs=timeline&width=430&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=1259082827813860" 
                            width="100%" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" data-lazy="true"
                            allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                        </iframe>
                    </div>

                    <div class="fanpage-mobile">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsachmem.vn%2F&tabs=timeline&width=570&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=1259082827813860" 
                        width="100%" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0"  data-lazy="true"
                        allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                    </iframe>
                    </div>

                </div>
                
            </div>
        </div>


    </div>
</div>