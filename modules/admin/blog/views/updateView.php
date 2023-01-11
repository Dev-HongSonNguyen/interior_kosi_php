<?php get_header('', 'Chỉnh sửa bài viết') ?>

    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Chỉnh sửa bài viết</h5>
                <!--end::Page Title-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">

            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">Form thông tin bài viết</h3>
                </div>
                <!--begin::Form-->
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tiêu đề bài viết</label>
                            <input type="text" name="title_blog" class="form-control" placeholder="Nhập tiêu đề bài viết" value="<?php echo $blog['title_blog'] ?>" />
                            <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh</label><br>
                            <input type="file" name="img_blog" class="" placeholder="Hình ảnh" value="<?php echo $blog['img_blog'] ?>" />
                            <img src="<?php echo $blog['img_blog']?>" alt="" style="width: 70px;">
                            <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                        </div>
                        <div class="form-group mb-1">
                            <label for="descriptionCategoryInput">Mô tả bài viết</label>
                            <textarea name="des_blog" class="form-control" id="descriptionCategoryInput" rows="3"><?php echo $blog['des_blog'] ?></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Chỉnh sửa</button>
                        <a href="?role=admin&mod=blog" class="btn btn-default">Quay về</a>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div><!--end::Entry-->
<?php get_footer() ?>