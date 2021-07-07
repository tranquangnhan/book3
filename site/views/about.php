<main class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <div class="content-div">
                    <?php if (isset($aboutDetail)) {
                            echo $aboutDetail['content'];
                    } else if (isset($page) && $page == 1) { ?>
                        <section id="about" class="my-5">
                            
                            <div class="row">
                                <div class="col-12">
                                    <div class="content-about">
                                        <p>
                                        <b>Global Success</b> là bộ sách giáo khoa Tiếng Anh được biên soạn dựa trên 
                                        <i>Chương trình giáo dục phổ thông môn tiếng Anh </i>(Ban hành kèm theo Thông tư số <b> 32/2018/TT-BGDĐT</b> ngày 26 tháng 12 năm 2018 của Bộ trưởng Bộ Giáo dục và Đào tạo) và <i> Khung năng lực ngoại ngữ 6 bậc dùng cho Việt Nam</i> của Bộ Giáo dục và Đào tạo.
                                        </p>

                                        <p>
                                        Bộ sách do GS.TS. Hoàng Văn Vân là Tổng chủ biên và có sự hợp tác chặt chẽ về chuyên môn và nghiệp vụ giữa <b>Nhà xuất bản Giáo dục Việt Nam</b> 
                                         với các nhà xuất bản danh tiếng trên thế giới <b>Macmillan Education </b>(ở bậc Tiểu học) và <b> Pearson Education </b>(ở bậc Trung học cơ sở và Trung học phổ thông).
                                        </p>
                                    </div>
                                </div>
<!-- 
                                <div class="col-6">
                                    <div class="img">
                                        <img src="images/globalsuccess.jpg" class="img-fluid banner-img" alt="">
                                    </div>
                                </div> -->
                            </div>
                        </section>

                       <section class="section" id="">
                            <div class="container ftco-animate">
                                <!-- <div class="row justify-content-center text-center mb-5">
                                    <div class="col-md-7">
                                    <h2 class="title-1" data-aos="fade-up">BỘ SGK TIẾNG ANH <br> GLOBAL SUCCESS</h2>
                                    </div>
                                </div> -->
                                <div class="row">
                                    <div class="col-md-6 col-lg-3 col-6 col-6 aos-init aos-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/about/tieng-anh-1" class="room ">
                                            <figure class="img-wrap m-0 text-center">
                                                <img src="<?=PATH_URL?>images/biasachgt1.png" alt="Cơ sở pháp lý 1" class="w-80-center hover-scale img-fluid mb-3">
                                            </figure>
                                            <p class="text-center font-weight-bold"> Lớp 1</p>
                                        </a>
                                    </div>

                                    <div class="col-md-6 col-lg-3 col-6 col-6 aos-init aos-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/about/tieng-anh-2" class="room">
                                            <figure class="img-wrap m-0 text-center">
                                                <img src="<?=PATH_URL?>images/biasachgt2.png" alt="" class="w-80-center hover-scale img-fluid mb-3">
                                            </figure>
                                            <p class="text-center font-weight-bold"> Lớp 2</p>
                                        </a>
                                    </div>

                                    <div class="col-md-6 col-lg-3 col-6 col-6 aos-init aos-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room disabled-link">
                                            <figure class="img-wrap m-0 text-center comming">
                                                <img src="<?=PATH_URL?>images/biasachgt3.png" alt="" class="w-80-center hover-scale img-fluid mb-3 ">
                                            </figure>
                                            <p class="text-center font-weight-bold"> Lớp 3</p>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-6 col-6 aos-init aos-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room disabled-link">
                                            <figure class="img-wrap m-0 text-center comming">
                                                <img src="<?=PATH_URL?>images/biasachgt4.png" alt="Cơ sở pháp lý 1" class="w-80-center img-fluid mb-3">
                                            </figure>
                                            <p class="text-center font-weight-bold"> Lớp 4</p>
                                        </a>
                                    </div>

                                    <div class="col-md-6 col-lg-3 col-6 col-6 aos-init aos-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room disabled-link">
                                            <figure class="img-wrap m-0 text-center comming">
                                                <img src="<?=PATH_URL?>images/biasachgt5.png" alt="" class="w-80-center hover-scale img-fluid mb-3">
                                            </figure>
                                            <p class="text-center font-weight-bold"> Lớp 5</p>
                                        </a>
                                    </div>

                                    <div class="col-md-6 col-lg-3 col-6 col-6 aos-init aos-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/about/tieng-anh-6" class="room">
                                            <figure class="img-wrap m-0 text-center">
                                                <img src="<?=PATH_URL?>images/biasachgt6.png" alt="" class="w-80-center hover-scale img-fluid mb-3">
                                            </figure>
                                            <p class="text-center font-weight-bold"> Lớp 6</p>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-6 col-6 aos-init aos-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room disabled-link">
                                            <figure class="img-wrap m-0 text-center comming">
                                                <img src="<?=PATH_URL?>images/biasachgt7.png" alt="Cơ sở pháp lý 1" class="w-80-center hover-scale img-fluid mb-3">
                                            </figure>
                                            <p class="text-center font-weight-bold"> Lớp 7</p>
                                        </a>
                                    </div>

                                    <div class="col-md-6 col-lg-3 col-6 col-6 aos-init aos-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room disabled-link">
                                            <figure class="img-wrap m-0 text-center comming">
                                                <img src="<?=PATH_URL?>images/biasachgt8.png" alt="" class="w-80-center hover-scale img-fluid mb-3">
                                            </figure>
                                            <p class="text-center font-weight-bold"> Lớp 8</p>
                                        </a>
                                    </div>
<!-- dov -->
                                    <div class="col-md-6 col-lg-3 col-6 col-6 aos-init aos-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room disabled-link">
                                            <figure class="img-wrap m-0 text-center comming">
                                                <img src="<?=PATH_URL?>images/biasachgt9.png" alt="" class="w-80-center hover-scale img-fluid mb-3">
                                            </figure>
                                            <p class="text-center font-weight-bold"> Lớp 9</p>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-6 col-6 aos-init aos-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room disabled-link">
                                            <figure class="img-wrap m-0 text-center comming">
                                                <img src="<?=PATH_URL?>images/biasachgt10.png" alt="Cơ sở pháp lý 1" class="w-80-center hover-scale img-fluid mb-3">
                                            </figure>
                                            <p class="text-center font-weight-bold"> Lớp 10</p>
                                        </a>
                                    </div>

                                    <div class="col-md-6 col-lg-3 col-6 col-6 aos-init aos-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room disabled-link">
                                            <figure class="img-wrap m-0 text-center comming">
                                                <img src="<?=PATH_URL?>images/biasachgt11.png" alt="" class="w-80-center hover-scale img-fluid mb-3">
                                            </figure>
                                            <p class="text-center font-weight-bold"> Lớp 11</p>
                                        </a>
                                    </div>

                                    <div class="col-md-6 col-lg-3 col-6 col-6 aos-init aos-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room disabled-link">
                                            <figure class="img-wrap m-0 text-center comming">
                                                <img src="<?=PATH_URL?>images/biasachgt12.png" alt="" class="w-80-center hover-scale img-fluid mb-3">
                                            </figure>
                                            <p class="text-center font-weight-bold"> Lớp 12</p>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </section>

                        <section class="section" id="phaply">
                            <div class="container ftco-animate">
                                <div class="row justify-content-center text-center mb-5">
                                    <div class="col-md-12">
                                        <h2 class="title-1" data-aos="fade-up">PHƯƠNG PHÁP BIÊN SOẠN</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-3 col-6 aos-init aos-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                            <figure class="img-wrap m-0 text-center">
                                                <img src="<?=PATH_URL?>/images/family.svg" alt="Cơ sở pháp lý 1" class="w-80-center hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="p-3 padding-top-0 text-center">
                                                <p>Theo đường hướng giao tiếp  </p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-6 col-lg-3 col-6 aos-init aos-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                            <figure class="img-wrap m-0 text-center">
                                                <img src="<?=PATH_URL?>/images/presentation1.svg" alt="" class="w-80-center hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="p-3 padding-top-0 text-center">
                                                <p> Tích hợp các kĩ năng</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-6 col-lg-3 col-6 aos-init aos-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                            <figure class="img-wrap m-0 text-center">
                                                <img src="<?=PATH_URL?>/images/checklist.svg" alt="" class="w-80-center hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="p-3 padding-top-0 text-center">
                                                <p>Lấy việc học là trung tâm <br>(learning-centred)  </p>
                                            </div>
                                        </a>
                                    </div>

                                    
                                    
                                    <div class="col-md-6 col-lg-3 col-6 aos-init aos-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                            <figure class="img-wrap m-0 text-center">
                                                <img src="<?=PATH_URL?>/images/webpage.svg" alt="" class="w-80-center hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="p-3 padding-top-0 text-center">
                                                <p> Hệ thống chủ điểm và chủ đề khoa học, thống nhất.</p>
                                            </div>
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </section>

                        <section class="section" id="diemmanh">
                            <div class="container ftco-animate">
                                <div class="row justify-content-center text-center mb-5">
                                    <div class="col-md-12">
                                    <h2 class="title-1" data-aos="fade-up">PHÁT TRIỂN TOÀN DIỆN KIẾN THỨC VÀ KỸ NĂNG</h2>
                                    </div>
                                </div>
                                <div class="row ftco-animate">
                                    <div class="col-md-6 col-lg-3 col-6 aos-init ftco-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                            <figure class="img-wrap1">
                                                <div class="hover-scale-white w-100 d-flex justify-content-center ">
                                                    <img src="<?=PATH_URL?>images/icon-gioithieu-1.png" alt="Điểm nổi bật" class="img-fluid mb-3">
                                                </div>    
                                            </figure>
                                            <div class="text-center">
                                                <p class="p-3 fz-1em hover-color-blue m-0">KỸ NĂNG NGÔN NGỮ</p>
                                                <p class="font-15 fz-1em color-black">Phát huy toàn diện bốn kỹ năng nghe, nói, đọc, viết giúp hình thành và phát triển năng lực giao tiếp bằng Tiếng Anh.</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-6 col-lg-3 col-6 aos-init ftco-animate " data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                            <figure class="img-wrap1">
                                                <div class="hover-scale-white w-100 d-flex justify-content-center">
                                                    <img src="<?=PATH_URL?>images/icon-gioithieu-2.svg" alt="Điểm nổi bật" class="img-fluid mb-3">
                                                </div>    
                                            </figure>
                                            <div class="text-center">
                                                <p class="p-3 fz-1em hover-color-blue m-0">KIẾN THỨC NGÔN NGỮ</p>
                                                <p class="font-15 fz-1em color-black">Đảm bảo kiến thức ngôn ngữ tiếng Anh bao gồm ngữ âm, từ vựng, ngữ pháp.</p>
                                            </div>
                                        </a>
                                    </div>
                                
                                    <div class="col-md-6 col-lg-3 col-6 aos-init ftco-animate pr-10" data-aos="fade-up">
                                    <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                        <figure class="img-wrap1">
                                            <div class="hover-scale-white w-100 d-flex justify-content-center">
                                                <img src="<?=PATH_URL?>images/icon-gioithieu-3.svg" alt="Điểm nổi bật" class="img-fluid mb-3">
                                            </div>
                                        </figure>
                                        <div class="text-center">
                                            <p class="p-3 fz-1em hover-color-blue m-0">KIẾN THỨC VĂN HÓA</p>
                                            <p class="font-15 fz-1em color-black">Mở rộng kiến thức về văn hóa và con người các nước trên thế giới, xây dựng niềm tự hào về văn hóa dân tộc.</p>
                                        </div>
                                    </a>
                                    </div>
                                    
                                    <div class="col-md-6 col-lg-3 col-6 aos-init ftco-animate" data-aos="fade-up">
                                    <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                        <figure class="img-wrap1">
                                            <div class="hover-scale-white w-100 d-flex justify-content-center">
                                                <img src="<?=PATH_URL?>images/icon-gioithieu-4.svg" alt="Điểm nổi bật" class="img-fluid mb-3">
                                            </div>
                                        </figure>
                                        <div class="text-center">
                                            <p class="pl-2 pr-2 pt-3 pb-3 hover-color-blue m-0">KĨ NĂNG PHẨM CHẤT THẾ KỶ 21</p>
                                            <p class="font-15 fz-1em color-black">Hình thành, phát triển những năng lực, phẩm chất và kĩ năng học tập, làm việc thế kỷ 21.</p>
                                        </div>
                                    </a>
                                    </div>

                                </div>
                            </div>
                        </section>

                        <section class="section" id="">
                            <div class="container ftco-animate">
                                <div class="row justify-content-center text-center mb-3">
                                    <div class="col-md-12">
                                    <h2 class="title-1" data-aos="fade-up">DỄ HỌC, DỄ DẠY, DỄ TIẾP CẬN</h2>
                                    </div>
                                </div>
                                <div class="row ftco-animate d-flex justify-content-center fadeInUp ftco-animated">
                                    <div class="col-lg-10 content-tick-father">
                                        <div class="content-tick d-flex align-items-center ftco-animate">
                                            <div class="content-tick-icon">
                                                <img src="<?=PATH_URL?>/images/checked.svg" alt="">
                                            </div>
                                            <div class="content-tick-content">
                                                <p class="fz-1em">  Bám sát khung Chương trình giáo dục phổ thông môn tiếng Anh và Khung năng lực ngoại ngữ 6 bậc dùng cho Việt Nam của Bộ Giáo dục và Đào tạo.</p>
                                            </div>
                                        </div>

                                        <div class="content-tick d-flex align-items-center ftco-animate">
                                            <div class="content-tick-icon">
                                                <img src="<?=PATH_URL?>/images/checked.svg" alt="">
                                            </div>
                                            <div class="content-tick-content">
                                                <p class="fz-1em">Đảm bảo lộ trình học tập xuyên suốt từ lớp 1 đến lớp 12.</p>
                                            </div>
                                        </div>

                                        <div class="content-tick d-flex align-items-center ftco-animate">
                                            <div class="content-tick-icon">
                                                <img src="<?=PATH_URL?>/images/checked.svg" alt="">
                                            </div>
                                            <div class="content-tick-content">
                                                <p class="fz-1em"> Phù hợp với điều kiện dạy và học bộ môn Tiếng Anh trong nhà trường phổ thông Việt Nam.</p>
                                            </div>
                                        </div>                                      

                                        <div class="content-tick d-flex align-items-center ftco-animate">
                                            <div class="content-tick-icon">
                                                <img src="<?=PATH_URL?>/images/checked.svg" alt="">
                                            </div>
                                            <div class="content-tick-content">
                                                <p class="fz-1em">  Nội dung gần gũi với tư duy tâm lý lứa tuổi của học sinh, kết hợp hài hòa các giá trị văn hóa Việt Nam, khu vực và quốc tế.</p>
                                            </div>
                                        </div>

                                        <div class="content-tick d-flex align-items-center ftco-animate">
                                            <div class="content-tick-icon">
                                                <img src="<?=PATH_URL?>/images/checked.svg" alt="">
                                            </div>
                                            <div class="content-tick-content">
                                                <p class="fz-1em"> Tích hợp liên môn tương quan với các môn học khác trong Chương trình Giáo dục Phổ thông 2018.</p>
                                            </div>
                                        </div>

                                        <div class="content-tick d-flex align-items-center ftco-animate">
                                            <div class="content-tick-icon">
                                                <img src="<?=PATH_URL?>/images/checked.svg" alt="">
                                            </div>
                                            <div class="content-tick-content">
                                                <p class="fz-1em"> Hệ thống kiến thức đảm bảo cho học sinh đáp ứng các kì thi trong nước và quốc tế.</p>
                                            </div>
                                        </div>

                                        <div class="content-tick d-flex align-items-center ftco-animate">
                                            <div class="content-tick-icon">
                                                <img src="<?=PATH_URL?>/images/checked.svg" alt="">
                                            </div>
                                            <div class="content-tick-content">
                                                <p class="fz-1em">  Tài nguyên đi kèm phong phú và đa dạng, cập nhật thường xuyên.</p>
                                            </div>
                                        </div>

                                        <div class="content-tick d-flex align-items-center ftco-animate">
                                            <div class="content-tick-icon">
                                                <img src="<?=PATH_URL?>/images/checked.svg" alt="">
                                            </div>
                                            <div class="content-tick-content">
                                                <p class="fz-1em">  Hệ thống tập huấn, đào tạo, bồi dưỡng, hỗ trợ đầy đủ và đồng bộ.</p>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </section>

                        <section class="section" id="tainguyen">
                            <div class="container ftco-animate">
                                <div class="row justify-content-center text-center mb-5 ftco-animate">
                                    <div class="col-md-12">
                                        <h2 class="title-1" data-aos="fade-up">TÀI NGUYÊN HỖ TRỢ BỘ SÁCH</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-lg-3 col-6 aos-init ftco-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien/tai-nguyen" class="room">
                                            <figure class="img-wrap">
                                                <img src="<?=PATH_URL?>images/world-book-day.svg" alt="Tài nguyên hỗ trợ bộ sách" class="hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="text-center">
                                                <p class="p-3">Sách Học Sinh</p>
                                            </div>
                                        </a>
                                    </div>
                                    
                                    <div class="col-md-4 col-lg-3 col-6 aos-init ftco-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien/tai-nguyen" class="room">
                                            <figure class="img-wrap">
                                                <img src="<?=PATH_URL?>images/storytelling.svg" alt="Tài nguyên hỗ trợ bộ sách" class="hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="text-center">
                                                <p class="p-3">Sách Bài Tập</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-4 col-lg-3 col-6 aos-init ftco-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien/tai-nguyen" class="room">
                                            <figure class="img-wrap">
                                                <img src="<?=PATH_URL?>images/books.svg" alt="Tài nguyên hỗ trợ bộ sách" class="hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="text-center">
                                                <p class="p-3">Sách Giáo Viên</p>
                                            </div>
                                        </a>
                                    </div>
                                    
                                    <div class="col-md-4 col-lg-3 col-6 aos-init ftco-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien/tai-nguyen" class="room">
                                            <figure class="img-wrap">
                                                <img src="<?=PATH_URL?>images/Logo-SM-(New).png" alt="Tài nguyên hỗ trợ bộ sách" class="hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="text-center">
                                                <p class="p-3">Sách Mềm</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-4 col-lg-3 col-6 aos-init ftco-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien/tai-nguyen" class="room">
                                            <figure class="img-wrap">
                                                <img src="<?=PATH_URL?>images/logo-main-cat-1.png" alt="Tài nguyên hỗ trợ bộ sách" class="hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="text-center">
                                                <p class="p-3">Phân Phối Chương Trình</p>
                                            </div>
                                        </a>
                                    </div>

                                    
                                    <div class="col-md-4 col-lg-3 col-6 aos-init ftco-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien/tai-nguyen" class="room">
                                            <figure class="img-wrap">
                                                <img src="<?=PATH_URL?>images/1624608386-plan.svg" alt="Tài nguyên hỗ trợ bộ sách" class="hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="text-center">
                                                <p class="p-3">Giáo Án Giờ Lên Lớp</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-4 col-lg-3 col-6 aos-init ftco-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien/tai-nguyen" class="room">
                                            <figure class="img-wrap">
                                                <img src="<?=PATH_URL?>images/tn4.svg" alt="Tài nguyên hỗ trợ bộ sách" class="hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="text-center">
                                                <p class="p-3">Bài Giảng Điện Tử</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-4 col-lg-3 col-6 aos-init ftco-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien/tai-nguyen" class="room">
                                            <figure class="img-wrap">
                                                <img src="<?=PATH_URL?>images/1624608322-illustration.svg" alt="Tài nguyên hỗ trợ bộ sách" class="hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="text-center">
                                                <p class="p-3">Video Tiết Giảng Minh Hoạ</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-4 col-lg-3 col-6 aos-init ftco-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien/tai-nguyen" class="room">
                                            <figure class="img-wrap">
                                                <img src="<?=PATH_URL?>images/exam.svg" alt="Tài nguyên hỗ trợ bộ sách" class="hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="text-center">
                                                <p class="p-3">Đề Kiểm Tra</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-4 col-lg-3 col-6 aos-init ftco-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien/tai-nguyen" class="room">
                                            <figure class="img-wrap">
                                                <img src="<?=PATH_URL?>images/bo the tu.png" alt="Tài nguyên hỗ trợ bộ sách" class="hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="text-center">
                                                <p class="p-3">Bộ Thẻ Từ</p>
                                            </div>
                                        </a>
                                    </div>

                            
                                    <div class="col-md-4 col-lg-3 col-6 aos-init ftco-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien/tai-nguyen" class="room">
                                            <figure class="img-wrap">
                                                <img src="<?=PATH_URL?>images/tranh tinh huong.png" alt="Tài nguyên hỗ trợ bộ sách" class="hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="text-center">
                                                <p class="p-3">Tranh Tình Huống</p>
                                            </div>
                                        </a>
                                    </div>


                                    <div class="col-md-4 col-lg-3 col-6 aos-init ftco-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien/tai-nguyen" class="room">
                                            <figure class="img-wrap">
                                                <img src="<?=PATH_URL?>images/bo quan roi.png" alt="Tài nguyên hỗ trợ bộ sách" class="hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="text-center">
                                                <p class="p-3">Bộ Quân Rối </p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-4 col-lg-3 col-6 aos-init ftco-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien/tai-nguyen" class="room">
                                            <figure class="img-wrap">
                                                <img src="<?=PATH_URL?>images/SL3-1-S.png" alt="Tài nguyên hỗ trợ bộ sách" class="hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="text-center">
                                                <p class="p-3">Story Land</p>
                                            </div>
                                        </a>
                                    </div>

                                    
                                    <div class="col-md-4 col-lg-3 col-6 aos-init ftco-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien/tai-nguyen" class="room">
                                            <figure class="img-wrap">
                                                <img src="<?=PATH_URL?>images/mortarboard.svg" alt="Tài nguyên hỗ trợ bộ sách" class="hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="text-center">
                                                <p class="p-3">Tập Huấn Chuyên Môn</p>
                                            </div>
                                        </a>
                                    </div>


                                    
                                    <div class="col-md-4 col-lg-3 col-6 aos-init ftco-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien/tai-nguyen" class="room">
                                            <figure class="img-wrap">
                                                <img src="<?=PATH_URL?>images/tn20.svg" alt="Tài nguyên hỗ trợ bộ sách" class="hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="text-center">
                                                <p class="p-3">Diễn Đàn Giáo Viên</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-4 col-lg-3 col-6 aos-init ftco-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien/tai-nguyen" class="room">
                                            <figure class="img-wrap">
                                                <img src="<?=PATH_URL?>images/PngItem_3370120.png" alt="Tài nguyên hỗ trợ bộ sách" class="hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="text-center">
                                                <p class="p-3">Hỗ trợ - Giải đáp Tư vấn 24/7</p>
                                            </div>
                                        </a>
                                    </div>

                                </div>                            
                            </div>                            
                        </section>

                    
                        <!-- 
                        <section class="py-5" id="">
                            <div class="container ftco-animate">
                                <div class="row justify-content-center text-center mb-5 ftco-animate">
                                    <div class="col-md-12">
                                        <h2 class="title-1" data-aos="fade-up">SÁCH SỐ</h2>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-12 col-lg-5 ml-auto order-lg-1 position-relative mb-5 col-6 aos-init" data-aos="fade-up">
                                        <img src="<?=PATH_URL?>/images/sachso.png" class="img-fluid rounded">
                                    </div>
                                    <div class="col-md-12 col-lg-7 order-lg-2 col-6 aos-init" data-aos="fade-up">
                                        <p class="mb-5 font-weight-bold" >Nền tảng học tập trực tuyến kết nối nhà trường, phụ huynh và học sinh. Giúp tăng cường trải nghiệm học tập trên nền tảng số đồng thời nâng cao chất lượng học tập mang lại kết quả vượt trội.</p>
                                   

                                        <a href="https://sachso.edu.vn/">
                                        <label class="category btn btn-primary-2 font-weight-600 move-to" data-to="phaply">
                                            TRUY CẬP NGAY
                                        </label>
                                    </a>  
                                    </div>
                                </div>
                            </div>
                        </section> -->

                    <?php } else if (isset($page) && $page == 2) { ?>
                        <section class="button m-5">
                            <div class="w-100 text-center">                        
                                <a href="#">
                                    <label class="category btn btn-primary-2 font-weight-600 move-to" data-to="phaply">
                                        PHÁP lý
                                    </label>
                                </a>  
                                <a href="#">
                                    <label class="category btn btn-primary-2 font-weight-600 move-to" data-to="cautruc">
                                        CẤU TRÚC
                                    </label>
                                </a>    
                                <a href="#">
                                    <label class="category btn btn-primary-2 font-weight-600 move-to" data-to="tainguyen">
                                        TÀI NGUYÊN
                                    </label>
                                </a>
                                <a href="#">
                                    <label class="category btn btn-primary-2 font-weight-600">
                                        VIDEO - HÌNH ẢNH
                                    </label>
                                </a>  
                                <a href="#">
                                    <label class="category btn btn-primary-2 font-weight-600">
                                        HỎI ĐÁP
                                    </label>
                                </a>  
                                <a href="#">
                                    <label class="category btn btn-primary-2 font-weight-600">
                                        PHÁP lý
                                    </label>
                                </a>  
                                <a href="#">
                                    <label class="category btn btn-primary-2 font-weight-600">
                                        LIÊN HỆ
                                    </label>
                                </a>  
                            </div>
                        </section>

                        <section class="section" id="phaply">
                            <div class="container ftco-animate">
                                <div class="row justify-content-center text-center mb-5">
                                    <div class="col-md-7">
                                    <h2 class="title-1" data-aos="fade-up">Cơ sở pháp lý</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 col-6 aos-init aos-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                            <figure class="img-wrap m-0 text-center">
                                                <img src="<?=PATH_URL?>/images/family.svg" alt="Cơ sở pháp lý 1" class="w-80-center hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="p-3 padding-top-0 text-center">
                                                <p>Tiếp nối bộ sách giáo khoa tiếng Anh 1 Famly &amp; Friends National Edition được sử dụng rộng rãi trong năm học 2020 – 2021</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-6 col-lg-4 col-6 aos-init aos-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                            <figure class="img-wrap m-0 text-center">
                                                <img src="<?=PATH_URL?>/images/checklist.svg" alt="" class="w-80-center hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="p-3 padding-top-0 text-center">
                                                <p>Được đánh giá cao từ Hội đồng thẩm định SGK và các địa phương dạy thử nghiệm</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-6 col-lg-4 col-6 aos-init aos-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                            <figure class="img-wrap m-0 text-center">
                                                <img src="<?=PATH_URL?>/images/approved.svg" alt="" class="w-80-center hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="p-3 padding-top-0 text-center">
                                                <p> Bộ Giáo dục và Đào tạo phê duyệt là SGK tiếng Anh lớp 2 kể từ năm học 2021 – 2022 cho Chương trình làm quen tiếng Anh.</p>
                                            </div>
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </section>

                        <section class="section" id="diemmanh">
                            <div class="container ftco-animate">
                                <div class="row justify-content-center text-center mb-5">
                                    <div class="col-md-7">
                                    <h2 class="title-1" data-aos="fade-up">ĐIỂM NỔI BẬT CỦA BỘ SÁCH</h2>
                                    </div>
                                </div>
                                <div class="row ftco-animate">
                                    <div class="col-md-6 col-lg-4 col-6 aos-init ftco-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                            <figure class="img-wrap1">
                                                <div class="hover-scale-white w-100">
                                                    <img src="<?=PATH_URL?>images/diemmanh1.svg" alt="Điểm nổi bật" class="img-fluid mb-3">
                                                </div>    
                                            </figure>
                                            <div class="text-center">
                                                <p class="p-3 color-black m-0">Communication Competence</p>
                                                <p class="font-15 hover-color-blue">Tập trung phát triển năng lực giao tiếp cho học sinh</p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-6 col-lg-4 col-6 aos-init ftco-animate" data-aos="fade-up">
                                    <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                        <figure class="img-wrap1">
                                            <div class="hover-scale-white w-100">
                                                <img src="<?=PATH_URL?>images/diemmanh2.svg" alt="Điểm nổi bật" class="img-fluid mb-3">
                                            </div>                
                                        </figure>
                                        <div class="text-center">
                                            <p class="p-3 color-black m-0">The Whole-Child Development Approach</p>
                                            <p class="font-15 hover-color-blue">Phương pháp phát triển học sinh toàn diện</p>
                                        </div>
                                    </a>
                                    </div>

                                    <div class="col-md-6 col-lg-4 col-6 aos-init ftco-animate" data-aos="fade-up">
                                    <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                        <figure class="img-wrap1">
                                            <div class="hover-scale-white w-100">
                                                <img src="<?=PATH_URL?>images/diemmanh3.svg" alt="Điểm nổi bật" class="img-fluid mb-3">
                                            </div>
                                        </figure>
                                        <div class="text-center">
                                            <p class="p-3 color-black m-0">Exam Preparation</p>
                                            <p class="font-15 hover-color-blue">Các dạng bài tập giúp HS tiệm cận các tiếng Anh chuấn quốc gia và quốc tế thông qua việc thực hành sách TA từ lớp 3 – 12.</p>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="section m-5" id="cautruc">
                            <div class="container ftco-animate">
                                <div class="row justify-content-center text-center mb-5 ftco-animate">
                                    <div class="col-md-8">
                                    <h2 class="title-1 m-0" data-aos="fade-up">CẤU TRÚC BỘ SÁCH</h2>
                                        <p data-aos="fade-up" data-aos-delay="100" class= col-6"aos-init aos-animate">Cuốn sách được biên soạn cho Chương trình làm quen tiếng Anh lớp 2 của Bộ Giáo dục – Đào tạo</p>
                                    </div>
                                </div>
                                    <div class="row cautruc ftco-animate">
                                        <div class="col-md-12 col-lg-12 col-6 aos-init" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                            <div class="text-center cautruc color-black m-5" style="font-weight: bold; font-size: 20px;">
                                                GỒM 35 TUẦN HỌC VÀ KIỂM TRA TRONG NĂM HỌC
                                            </div>
                                            <figure class="img-wrap1 text-center">
                                                <div class="hover-scale-white w-100">
                                                    <img src="<?=PATH_URL?>images/cautruc1.svg" alt="Cấu trúc" class="img-fluid mb-3">
                                                </div>
                                            </figure>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="row cautruc mt-5 ftco-animate">
                                        <div class="col-md-12 col-lg-12 col-6 aos-init" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                            <div class="text-center cautruc color-black m-5" style="font-weight: bold; font-size: 20px; text-transform: uppercase;">
                                                Tiếng Anh 2 Family &amp; Friends National Edition có 7 chủ đề tương ứng với 34 tuần học
                                            </div>
                                            <figure class="img-wrap1">
                                                <div class="hover-scale-white w-100">    
                                                    <img src="<?=PATH_URL?>images/cautruc2.svg" alt="Cấu trúc" class="img-fluid mb-3">
                                                </div>
                                            </figure>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="row cautruc ftco-animate">
                                        <div class="col-md-12 col-lg-12 col-6 aos-init" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                            <div class="text-center cautruc color-black m-4" style="font-weight: bold; font-size: 20px; text-transform: uppercase;">
                                                Mỗi chủ đề/Đơn vị bài học được chia thành 6 bài học nhất quán
                                            </div>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6 col-lg-4 col-6 aos-init ftco-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                            <figure class="img-wrap m-0 text-center">
                                                <img src="<?=PATH_URL?>images/book.svg" alt="Cấu trúc" class="w-80-center hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="text-center">
                                                <p class="p-3 color-black m-0">Bài 1 Giới thiệu từ</p>
                                                <p class="hover-color-blue">Dạy và thực hành nhóm từ mới. Học và ghi nhớ từ mới qua bài chant và hoạt động sticker</p>
                                            </div>
                                        </a>
                                        </div>

                                        <div class="col-md-6 col-lg-4 col-6 aos-init ftco-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                            <figure class="img-wrap m-0 text-center">
                                            <img src="<?=PATH_URL?>/images/melody.svg" alt="Cấu trúc" class="w-80-center hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="text-center">
                                            <p class="p-3 color-black m-0">Bài 2 Ngữ pháp và bài hát</p>
                                            <p class="hover-color-blue">Dạy và thực hành các điểm ngữ pháp của một chủ đề (unit)</p>
                                            </div>
                                        </a>
                                        </div>

                                        <div class="col-md-6 col-lg-4 col-6 aos-init ftco-animate" data-aos="fade-up">
                                        <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                            <figure class="img-wrap m-0 text-center">
                                                <img src="<?=PATH_URL?>/images/conversation.svg" alt="Cấu trúc" class="w-80-center hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="text-center">
                                                <p class="p-3 color-black m-0">Bài 3 Âm và chữ cái</p>
                                                <p class="hover-color-blue">Dạy mối quan hệ giữa âm và chữ cái – học sinh sẽ học nhận biết chữ cái thường và in hoa và các âm của chữ cái</p>
                                            </div>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-md-6 col-lg-4 col-6 aos-init ftco-animate" data-aos="fade-up">
                                            <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                                <figure class="img-wrap m-0 text-center">
                                                    <img src="<?=PATH_URL?>/images/countdown.svg" alt="Cấu trúc" class="w-80-center hover-scale img-fluid mb-3">
                                                </figure>
                                                <div class="text-center">
                                                    <p class="p-3 color-black m-0">Bài 4 Số đếm</p>
                                                    <p class="hover-color-blue">Học đếm đến 20 và nhận biết các từ tương ứng với số đếm sau khi hoàn thành Tiếng Anh 2 Family &amp; Friends National Edition</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-6 col-lg-4 col-6 aos-init ftco-animate" data-aos="fade-up">
                                            <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                                <figure class="img-wrap m-0 text-center">
                                                    <img src="<?=PATH_URL?>images/conversation.svg" alt="Cấu trúc" class="w-80-center hover-scale img-fluid mb-3">
                                                </figure>
                                                <div class="text-center">
                                                    <p class="p-3 color-black m-0">Bài 5 Âm và chữ cái </p>
                                                    <p class="hover-color-blue">Giới thiệu thêm các âm và chữ cái giúp học sinh phát triển kĩ năng đọc, ôn lại các âm và từ vựng đã học</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-6 col-lg-4 col-6 aos-init ftco-animate" data-aos="fade-up">
                                            <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                                <figure class="img-wrap m-0 text-center">
                                                    <img src="<?=PATH_URL?>images/open-book.svg" alt="Cấu trúc" class="w-80-center hover-scale img-fluid mb-3">
                                                </figure>
                                                <div class="text-center">
                                                    <p class="p-3 color-black m-0">Bài 6 Câu chuyện</p>
                                                    <p class="hover-color-blue">Bài ôn tập của mỗi đơn vị bài học – bao gồm từ vựng và điểm ngữ pháp đã học trong các bài trước, tạo cơ hội cho HS thực hành đóng vai – act out</p>
                                                </div>
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="section" id="tainguyen">
                            <div class="container ftco-animate">
                                <div class="row justify-content-center text-center mb-5 ftco-animate">
                                    <div class="col-md-12">
                                        <h2 class="title-1" data-aos="fade-up">TÀI NGUYÊN HỖ TRỢ BỘ SÁCH</h2>
                                    </div>
                                </div>
                                <div class="row">
                                <?php foreach($sprs as $itemsprs) { ?>
                                    <div class="col-md-6 col-lg-3 col-6 aos-init ftco-animate" data-aos="fade-up">
                                    <?php
                                        if ($itemsprs['name'] == 'Sách học sinh') { ?>
                                            <a href="<?=ROOT_URL?>/hoc-sinh" class="room">
                                        <?php } else if ($itemsprs['name'] == 'Sách giáo viên') { ?>
                                            <a href="<?=ROOT_URL?>/giao-vien" class="room">
                                        <?php } else if ($itemsprs['name'] == 'Sách bài tập') { ?> 
                                            <a href="<?=ROOT_URL?>/sach-giao-khoa" class="room">
                                        <?php } else { ?>                                      
                                        <a href="<?=ROOT_URL?>/giao-vien/tai-nguyen" class="room">
                                        <?php } ?>
                                            <figure class="img-wrap">
                                                <img src="<?=PATH_IMG_SITE?><?=$itemsprs['img']?>" alt="Tài nguyên hỗ trợ bộ sách" class="hover-scale img-fluid mb-3">
                                            </figure>
                                            <div class="text-center">
                                                <p class="p-3"><?=$itemsprs['name']?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>                            
                        </section>

                        <section>
                            <div class="container">
                                <div class="slide">
                                    <div class="owl-carousel owl-theme" id="slide-about-page">
                                        <div class="slide-about-item">
                                            <a href="<?=ROOT_URL?>/san-pham"><img src="<?=PATH_IMG_SITE?>Bia-TA4_SHS_1.png" alt="Cấu trúc" class="hover-scale img-fluid mb-3"></a>
                                        </div>

                                        <div class="slide-about-item">
                                            <a href="<?=ROOT_URL?>/san-pham"><img src="<?=PATH_IMG_SITE?>Bia-TA5_SHS_1.png" alt="Cấu trúc" class="hover-scale img-fluid mb-3"></a>
                                        </div>

                                        <div class="slide-about-item">
                                            <a href="<?=ROOT_URL?>/san-pham"><img src="<?=PATH_IMG_SITE?>Bia-TA5_SHS_2.png" alt="Cấu trúc" class="hover-scale img-fluid mb-3"></a>
                                        </div>

                                        <div class="slide-about-item">
                                            <a href="<?=ROOT_URL?>/san-pham"><img src="<?=PATH_IMG_SITE?>Bia-TA5_SBT.png" alt="Cấu trúc" class="hover-scale img-fluid mb-3"></a>
                                        </div>

                                        <div class="slide-about-item">
                                            <a href="<?=ROOT_URL?>/san-pham"><img src="<?=PATH_IMG_SITE?>Bia-TA5_SBT.png" alt="Cấu trúc" class="hover-scale img-fluid mb-3"></a>
                                        </div>

                                        <div class="slide-about-item">
                                            <a href="<?=ROOT_URL?>/san-pham"><img src="<?=PATH_IMG_SITE?>Bia-TA7-SHS-1.png" alt="Cấu trúc" class="hover-scale img-fluid mb-3"></a>
                                        </div>

                                        <div class="slide-about-item">
                                            <a href="<?=ROOT_URL?>/san-pham"><img src="<?=PATH_IMG_SITE?>Bia-TA7-SHS-2.png" alt="Cấu trúc" class="hover-scale img-fluid mb-3"></a>
                                        </div>                                      
                                                                
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="py-5" id="">
                            <div class="container ftco-animate">
                                <div class="row justify-content-center text-center mb-5 ftco-animate">
                                    <div class="col-md-12">
                                        <h2 class="title-1" data-aos="fade-up">SÁCH SỐ</h2>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-12 col-lg-5 ml-auto order-lg-1 position-relative mb-5 col-6 aos-init" data-aos="fade-up">
                                        <img src="<?=PATH_URL?>/images/sachso.png" class="img-fluid rounded">
                                    </div>
                                    <div class="col-md-12 col-lg-7 order-lg-2 col-6 aos-init" data-aos="fade-up">
                                        <p class="mb-5 font-weight-bold" >Nền tảng học tập trực tuyến kết nối nhà trường, phụ huynh và học sinh. Giúp tăng cường trải nghiệm học tập trên nền tảng số đồng thời nâng cao chất lượng học tập mang lại kết quả vượt trội.</p>
                                   

                                        <a href="https://sachso.edu.vn/">
                                        <label class="category btn btn-primary-2 font-weight-600 move-to" data-to="phaply">
                                            TRUY CẬP NGAY
                                        </label>
                                    </a>  
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php } else if (isset($page) & $page == 3) { ?>
                        <?php require 'about-other.php'; ?>
                    <?php } else {?>
                    <h1 class="text-center text-uppercase ftco-animate">GIỚI THIỆU VỀ NHÀ XUẤT BẢN GIÁO DỤC VIỆT NAM</h1>
                    <div class="col-8 my-4 mr-0-auto ftco-animate">
                        <div class="about-img w-100 ">
                            <img src="<?=PATH_URL?>/images/about-cat-1.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <p>Nhà xuất bản Giáo dục Việt Nam (trước đây là Nhà xuất bản Giáo dục) trực thuộc Bộ Giáo dục và Đào tạo, được thành lập ngày 01 tháng 6 năm 1957. Nhà xuất bản Giáo dục Việt Nam có nhiệm vụ tổ chức biên soạn, biên tập, in, phát hành sách giáo khoa và các sản phẩm giáo dục phục vụ nghiên cứu, giảng dạy, học tập của các ngành học, bậc học; giúp Bộ Giáo dục và Đào tạo chỉ đạo công tác thiết bị giáo dục và thư viện trường học trên toàn quốc.</p>
                    <p>Tháng 5 năm 2003, Thủ tướng Chính phủ ra quyết định chuyển Nhà xuất bản Giáo dục sang hoạt động theo mô hình Công ty mẹ - Công ty con. Tháng 7 năm 2010, Bộ Giáo dục và Đào tạo có quyết định chuyển Công ty mẹ - Nhà xuất bản Giáo dục Việt Nam thành Công ty trách nhiệm hữu hạn một thành viên do Nhà nước làm chủ sở hữu, với tên gọi đầy đủ: CÔNG TY TRÁCH NHIỆM HỮU HẠN MỘT THÀNH VIÊN NHÀ XUẤT BẢN GIÁO DỤC VIỆT NAM. Tên giao dịch quốc tế: Vietnam Education Publishing House Limited Company.</p>
                    <p>Trên chặng đường 63 năm xây dựng và phát triển, Nhà xuất bản Giáo dục Việt Nam hiện là nhà xuất bản lớn nhất trong cả nước với hệ thống các đơn vị thành viên, mỗi năm xuất bản hàng nghìn tựa sách giáo dục và sản xuất thiết bị, đồ dùng dạy học đa dạng phục vụ nhà trường. Những năm qua, Nhà xuất bản Giáo dục Việt Nam luôn hoàn thành tốt nhiệm vụ chính trị được giao: đảm bảo cung ứng đầy đủ, đồng bộ, kịp thời sách giáo khoa, các sản phẩm giáo dục phục vụ học sinh, giáo viên và đông đảo bạn đọc trong cả nước.</p>
                    <p>Nhà xuất bản Giáo dục Việt Nam có đội ngũ cán bộ, công nhân viên có trình độ chuyên môn cao gồm nhiều giáo sư, phó giáo sư, tiến sĩ, thạc sĩ, cử nhân đủ các chuyên ngành khoa học cơ bản; có đội ngũ biên tập viên chuyên ngành giàu kinh nghiệm, nhiệt tình, tâm huyết với nghề; đội ngũ họa sĩ, kĩ thuật viên chế bản, thiết kế đồ họa giỏi; đội ngũ công nhân kĩ thuật in lành nghề; các chuyên gia thiết bị giáo dục, thư viện trường học, chuyên gia kinh tế, chuyên gia quản lí giỏi.</p>
                    <p>Nhà xuất bản Giáo dục Việt Nam thường xuyên, tích cực tham gia công tác xã hội, hoạt động từ thiện: nhận nuôi dưỡng nhiều Bà mẹ Việt Nam anh hùng, ủng hộ sách giáo khoa cho học sinh là con các chiến sĩ đang bảo vệ Trường Sa, tặng sách cho thư viện trường học vùng khó khăn, tặng quà tết cho người nghèo, xây dựng nhà tình nghĩa, ủng hộ đồng bào bị thiên tai, bão lũ,...</p>
                    <p>Nhà xuất bản Giáo dục Việt Nam đã vinh dự được Đảng, Nhà nước tặng thưởng Huân chương Hồ Chí Minh cùng nhiều Huân, Huy chương cao quý, Bằng khen, Cờ thi đua của nhiều Bộ, Ngành trao tặng.</p>
                    <p>Tiếp tục thực hiện tốt nhiệm vụ được giao, các đơn vị trong hệ thống Nhà xuất bản Giáo dục Việt Nam luôn phấn đấu không ngừng, đổi mới nâng cao chất lượng, phong phú, đa dạng hóa sản phẩm, nâng cao ý thức trách nhiệm, tinh thần tự chủ, tiếp tục củng cố và phát triển hệ thống ngày một vững mạnh, góp phần phục vụ tốt nhất sự nghiệp giáo dục, đào tạo của nước nhà.</p>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</main>
