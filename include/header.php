<?php session_start();
$tab = "";
if (isset($_GET["tab"])) {
    $tab = $_GET["tab"];
}
$total_prod = 0;
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
    foreach ($cart as $product) {
        $total_prod += 1;
    }
}

?>
<div class="header container pt-4 pb-4">

    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="?tab=trangchu">Fresh Organic</a>

        <!-- Navbar Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar Content -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item <?php
                if ($tab == "trangchu" || $tab == "") {
                    echo "active";
                }
                ?>">
                    <a class="nav-link" href="?tab=trangchu">Trang chủ</a>
                </li>
                <li class="nav-item <?php
                if ($tab == "sanpham") {
                    echo "active";
                }
                ?>">
                    <a class="nav-link" href="?tab=sanpham">Sản phẩm</a>
                </li>
                <li class="nav-item <?php
                if ($tab == "blog") {
                    echo "active";
                }
                ?>">
                    <a class="nav-link" href="?tab=blog">Blog</a>
                </li>
                <li class="nav-item <?php
                if ($tab == "gioithieu") {
                    echo "active";
                }
                ?>">
                    <a class="nav-link" href="?tab=gioithieu">Giới thiệu</a>
                </li>
                <li class="nav-item
                <?php
                if ($tab == "lienhe") {
                    echo "active";
                }
                ?>">
                    <a class="nav-link" href="?tab=lienhe">Liên hệ</a>
                </li>
            </ul>
            <!-- Search Form -->
            <form class="form-inline ml-auto d-flex" method="get" action="" onsubmit="return checkSearch()">
                <input type="text" name="tab" value="sanpham" hidden>
                <input class="form-control mr-sm-2" name="search" id="searchInput" type="search" placeholder="Search"
                    aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <button class="btn btn-outline-primary my-2 my-sm-0 ml-2" type="submit">
                <a href="__DIR__ ./../front_web/xemgiohang.php" style="position:relative;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 239 180" fill="none">
                        <path
                            d="M12.7377 0.0606206C8.77599 0.694496 5.22834 2.8762 2.8752 6.12577C0.522057 9.37535 -0.443817 13.4266 0.190058 17.3883C0.823933 21.3501 3.00563 24.8977 6.25521 27.2509C9.50479 29.604 13.5561 30.5699 17.5178 29.936H62.3308L65.0196 37.4048L77.2685 74.7491L89.5174 112.093C90.7124 115.977 95.7913 119.562 99.6751 119.562H204.239C208.421 119.562 213.201 115.977 214.397 112.093L238.596 37.4048C239.791 33.521 237.998 29.936 233.815 29.936H101.169L89.8162 8.42573C88.607 5.9568 86.74 3.86945 84.4207 2.39352C82.1013 0.917581 79.4197 0.110319 76.671 0.0606206L16.9203 0.0606206C16.0258 -0.0202069 15.1259 -0.0202069 14.2315 0.0606206C13.6345 0.0247379 13.0359 0.0247379 12.439 0.0606206L12.7377 0.0606206ZM107.144 149.437C98.7788 149.437 92.2062 156.01 92.2062 164.375C92.2062 172.74 98.7788 179.313 107.144 179.313C115.509 179.313 122.082 172.74 122.082 164.375C122.082 156.01 115.509 149.437 107.144 149.437ZM196.77 149.437C188.405 149.437 181.832 156.01 181.832 164.375C181.832 172.74 188.405 179.313 196.77 179.313C205.135 179.313 211.708 172.74 211.708 164.375C211.708 156.01 205.135 149.437 196.77 149.437Z"
                            fill="black" />
                    </svg>
                    <span style="position:absolute;color:red;">
                        <?php echo $total_prod; ?>
                    </span>
                </a>
            </button>
            <?php
            if (isset($_SESSION["id"])) { ?>
                <button class="btn btn-outline-primary my-2 my-sm-0 ml-2">

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 240 274" fill="none">
                        <path
                            d="M120.303 136.807C158.014 136.807 188.577 106.243 188.577 68.5327C188.577 30.8219 158.014 0.258667 120.303 0.258667C82.5921 0.258667 52.0289 30.8219 52.0289 68.5327C52.0289 106.243 82.5921 136.807 120.303 136.807ZM168.095 153.875H159.187C147.346 159.316 134.171 162.409 120.303 162.409C106.435 162.409 93.3133 159.316 81.4187 153.875H72.5111C32.9335 153.875 0.823364 185.985 0.823364 225.563V247.752C0.823364 261.887 12.2913 273.355 26.4261 273.355H214.18C228.314 273.355 239.782 261.887 239.782 247.752V225.563C239.782 185.985 207.672 153.875 168.095 153.875Z"
                            fill="black" />
                    </svg>
                    <?php echo $_SESSION['name']; ?>
                </button>


                <a href="__DIR__./../front_web/signout.php"><button class="btn btn-outline-primary my-2 my-sm-0 ml-2"
                        type="submit">Đăng xuất</button></a>
            <?php } else { ?>

                <a href="__DIR__ ./../front_web/signin.php">
                    <button class="btn btn-outline-primary my-2 my-sm-0 ml-2" type="submit">Login</button>
                </a>
            <?php } ?>
            <!-- Login Button -->

        </div>
    </nav>
</div>
<script>
    function checkSearch() {
        // Lấy giá trị từ ô nhập liệu
        var searchValue = document.getElementById('searchInput').value;

        // Kiểm tra xem ô nhập liệu có dữ liệu hay không
        if (searchValue.trim() === "") {
            alert("Vui lòng nhập thông tin để tìm kiếm.");
            return false; // Ngăn chặn gửi form
        }

        // Nếu có dữ liệu, tiếp tục gửi form
        return true;
    }
</script>