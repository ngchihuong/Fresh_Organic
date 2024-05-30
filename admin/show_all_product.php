

    <?php require('../db/connect.php'); ?>
    <div class="container-fluid row">
        <div class="col-3">
            <div class="dropdown">
                <button class="btn border dropdown-toggle" type="button" data-toggle="dropdown">Danh mục sản phẩm
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <?php include "../include/category_all.php" ?>
                </ul>
            </div><br>
            <div>

                <form method="get" action="">
                    <input type="text" name="search" placeholder="Tìm kiếm">
                    <button type="submit" name="submit" style="border: 0;background-color: transparent;"><svg
                            xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 30 30" fill="none">
                            <path
                                d="M13.0072 0.0371635C5.83468 0.0371635 0 5.87184 0 13.0444C0 20.217 5.83468 26.0516 13.0072 26.0516C15.1999 26.0516 17.3554 25.5314 19.1764 24.5279C19.3223 24.7035 19.484 24.8652 19.6595 25.0111L23.3759 28.7274C23.719 29.1136 24.1375 29.4255 24.6056 29.644C25.0736 29.8626 25.5814 29.9832 26.0978 29.9984C26.6141 30.0136 27.1282 29.9231 27.6083 29.7324C28.0884 29.5418 28.5245 29.255 28.8897 28.8897C29.255 28.5245 29.5418 28.0884 29.7324 27.6083C29.9231 27.1282 30.0136 26.6141 29.9984 26.0978C29.9832 25.5814 29.8626 25.0736 29.644 24.6056C29.4255 24.1375 29.1136 23.719 28.7274 23.3759L25.0111 19.6595C24.83 19.4784 24.6308 19.3165 24.4165 19.1764C25.4199 17.3554 26.0516 15.2371 26.0516 13.0072C26.0516 5.83468 20.217 0 13.0444 0L13.0072 0.0371635ZM13.0072 3.75352C18.173 3.75352 22.2981 7.87867 22.2981 13.0444C22.2981 15.4972 21.4062 17.7642 19.8453 19.4365C19.8082 19.4737 19.771 19.5109 19.7338 19.548C19.5583 19.6939 19.3966 19.8556 19.2507 20.0312C17.6155 21.5177 15.3857 22.3725 12.9701 22.3725C7.80435 22.3725 3.67919 18.2473 3.67919 13.0816C3.67919 7.91584 7.80435 3.79068 12.9701 3.79068L13.0072 3.75352Z"
                                fill="black" />
                        </svg>
                    </button>
                </form>
            </div><br>
            <a href="add_product.php" target="blank" class="border" ><button class="btn btn-info">Thêm sản phẩm</button></a><br>
            <br>
            <a href="show_all_category.php" target="blank" class="border" ><button class="btn btn-info">Danh mục</button> </a>
        </div>
        <div class="col-9">
            <div class="d-flex">
                <h1>Tất cả sản phẩm</h1>
            </div>
            <?php
            if (isset($_GET["report"])) {
                echo $_GET["report"];
            }
            include "../include/show_product_admin.php";
            ?>
        </div>
    </div>
