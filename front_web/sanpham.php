<body>
    <?php
    include __DIR__ . "/../db/connect.php";
    ?>
    <main>
        <img src="https://theme.hstatic.net/1000309753/1000718324/14/collection_banner.jpg?v=209" width="100%" alt="">
        <div class="container mt-5">


            <h3>Tất cả sản phẩm</h3>
            <nav class="navbar navbar-expand-sm">

                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <div class="dropdown">
                                    <button class="btn border dropdown-toggle" type="button" data-toggle="dropdown">Danh
                                        mục sản phẩm
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        
                                        <?php include __DIR__ . "/../include/category_all.php" ?>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <button class="btn border dropdown-toggle" type="button" data-toggle="dropdown">Giá
                                        sản phẩm
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a class="text-success" href="?price=product_price >0 &tab=sanpham">Tất cả giá</a></li>
                                        <li><a class="text-success"
                                                href="?price=product_price > 0&price2=product_price < 50000 &tab=sanpham">0-50000₫</a>
                                        </li>
                                        <li><a class="text-success"
                                                href="?price=product_price >= 50000&price2=product_price < 100000 &tab=sanpham">50000-100000₫</a>
                                        </li>
                                        <li><a class="text-success"
                                                href="?price=product_price >= 100000&price2=product_price < 150000 &tab=sanpham">100000-150000₫</a>
                                        </li>
                                        <li><a class="text-success" href="?price=product_price >= 150000 &tab=sanpham">Trên
                                                150000₫</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

            </nav>


            <?php include __DIR__ . "/../include/product_display.php"; ?>
        </div>
    </main>
    <?php mysqli_close($conn) ?>
</body>