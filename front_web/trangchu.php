
    <main>
        <div id="carousel1" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img
                            src="https://theme.hstatic.net/1000309753/1000718324/14/slideshow_1.jpg?v=209"
                            class="d-block w-100" alt="slideshow 1">
                </div>
                <div class="carousel-item">
                    <img
                            src="https://theme.hstatic.net/1000309753/1000718324/14/slideshow_2.jpg?v=209"
                            class="d-block w-100" alt="slideshow 2">
                </div>
                <div class="carousel-item">
                    <img
                            src="https://theme.hstatic.net/1000309753/1000718324/14/slideshow_3.jpg?v=209"
                            class="d-block w-100" alt="slideshow 3">
                </div>
            </div>
        </div>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://theme.hstatic.net/1000309753/1000718324/14/home_category_1_banner.jpg?v=209"
                            alt="" srcset="">
                        <div class="container-fluid title">
                            <h6>Món ngon buổi sáng</h6>
                            <a href="./blog.php" class="button">Xem ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://theme.hstatic.net/1000309753/1000718324/14/home_category_2_banner.jpg?v=209"
                            alt="">
                        <div class="container-fluid title">
                            <h6>Món ngon buổi sáng</h6>
                            <a href="./blog.php" class="button">Xem ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://theme.hstatic.net/1000309753/1000718324/14/home_category_3_banner.jpg?v=209"
                            alt="">
                        <div class="container-fluid title">
                            <h6>Món ngon buổi sáng</h6>
                            <a href="./blog.php" class="button">Xem ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://theme.hstatic.net/1000309753/1000718324/14/home_category_4_banner.jpg?v=209"
                            alt="">
                        <div class="container-fluid title">
                            <h6>Món ngon buổi sáng</h6>
                            <a href="./blog.php" class="button">Xem ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-5">
            <h2 class="text-center">Sản phẩm mới</h2>
            <div class="row justify-content-center">
                <?php include __DIR__.'/../include/new_product.php';?>
                
            </div>
        </div>
        <div class="container-fluid pt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://theme.hstatic.net/1000309753/1000718324/14/block_home_category1.jpg?v=209"
                                class="img-top" alt="">
                        </div>
                        <div class="card-img-overlay">
                            <p>Sản phẩm bán chạy</p>
                            <h4>Món ngon buổi sáng</h4><br>
                            <a href="?tab=sanpham" class="button">Mua ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://theme.hstatic.net/1000309753/1000718324/14/block_home_category2.jpg?v=209"
                                class="img-top" alt="">
                        </div>
                        <div class="card-img-overlay">
                            <p>BOUILLABAISSE</p>
                            <h4>SALAD KIỂU PHÁP</h4><br>
                            <a href="?tab=sanpham" class="button">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://theme.hstatic.net/1000309753/1000718324/14/block_home_category3.jpg?v=209"
                                class="img-top" alt="">
                        </div>
                        <div class="card-img-overlay">
                            <p>Sản phẩm mới</p>
                            <h4>BUỔI SÁNG HEALTHY</h4><br>
                            <a href="?tab=sanpham" class="button">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-5">
            <h2 class="text-center" id="banchay">Sản phẩm bán chạy</h2>
            <div class="row justify-content-center">
                <?php include (__DIR__ ."/../include/sanphambanchay.php"); ?>
            
            </div>
        </div>
        <div class="container-fluid pt-5">
            <div class="row">
                <div class="col-6"
                    style="background: url(https://theme.hstatic.net/1000309753/1000718324/14/home_about_image.jpg?v=209);background-repeat:no-repeat;height: 700px; padding-top: 300px;padding-left: 60px;">
                    <h2 style="font-size: 55px;color:white;">Về chúng tôi</h2>
                    <a href="./gioithieu.php" class="button">Xem ngay</a>
                </div>
                <div class="col-6" style="background-color: rgba(173, 255, 47, 0.1);">
                    <p>
                    Tại Fresh Organic, chúng tôi đam mê cung cấp cho bạn những sản phẩm hữu cơ chất lượng cao trực tiếp từ những nguồn tài nguyên thiên nhiên. Chúng tôi tin vào sức mạnh của thực phẩm tự nhiên, lành mạnh để nuôi dưỡng và tái tạo cơ thể của bạn, đồng thời thúc đẩy các phương pháp bền vững và thân thiện với môi trường.
                    <p>                    Tại Fresh Organic, chúng tôi đam mê cung cấp cho bạn những sản phẩm hữu cơ chất lượng cao trực tiếp từ những nguồn tài nguyên thiên nhiên. Chúng tôi tin vào sức mạnh của thực phẩm tự nhiên, lành mạnh để nuôi dưỡng và tái tạo cơ thể của bạn, đồng thời thúc đẩy các phương pháp bền vững và thân thiện với môi trường.
                    </p>
                    <p>
                    Từ rau củ tươi sáng và tươi ngon cho đến trái cây thịt mềm và đậm đà, danh mục sản phẩm tươi của chúng tôi được chọn lọc cẩn thận để mang đến cho bạn những gì tốt nhất từ thiên nhiên. Chúng tôi ưu tiên sự thích hợp theo mùa, đảm bảo bạn có thể thưởng thức hương vị và chất dinh dưỡng tối đa. Với Fresh Organic, bạn có thể tin tưởng mỗi miếng thức ăn đều tràn đầy hương vị, tốt cho sức khỏe và mang lại tác động tích cực cho môi trường.
                    </p>
                    <p>Ngoài loại rau củ và trái cây đa dạng, chúng tôi cũng cung cấp một loạt các sản phẩm hữu cơ khác, bao gồm các mặt hàng cần thiết cho nhà bếp, sản phẩm từ sữa, thịt và nhiều hơn thế nữa. Mỗi sản phẩm được lựa chọn một cách cẩn thận để đáp ứng các tiêu chuẩn chất lượng nghiêm ngặt của chúng tôi, giúp bạn tạo ra những bữa ăn ngon lành và bổ dưỡng cho bạn và người thân yêu của bạn.</p>
                    <p>Hãy cùng chúng tôi trên hành trình hướng tới một lối sống lành mạnh và bền vững hơn. Trải nghiệm sự khác biệt mà Fresh Organic mang đến cho bữa ăn của bạn - một hương vị tinh khiết, một cam kết chân thành và một tương lai xanh hơn. Khám phá danh mục sản phẩm của chúng tôi ngay hôm nay và khám phá niềm vui của cuộc sống tươi mới, hữu cơ.</p>
                </div>
            </div>
        </div>
            </div>
        </div>
    </main>
    
    