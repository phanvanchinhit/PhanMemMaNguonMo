<div class="container">
    <!-- Tab cat -->
    <?php $i = 3; $c = 33; foreach ($catalog_list as $row): ?>
        <style>
            .kt-category-tabs .tab-head .nav-tab li.active,
            .kt-category-tabs .tab-head .nav-tab li:hover{
                background-color: <?php echo $row->color;?> ;
            }
            .kt-category-tabs .tab-head .nav-tab li.active a,
            .kt-category-tabs .tab-head .nav-tab li:hover a{
                color: #fff;
                border-color: <?php echo $row->color;?> ;
            }

            ///
            .electronic-center-<?php echo $row->id_catalog?> .tab-head,
            .electronic-center-<?php echo $row->id_catalog?> .tab-head .nav-tab li.active a,
            .electronic-center-<?php echo $row->id_catalog?> .tab-head .nav-tab li:hover a{
                border-color: <?php echo $row->color;?> !important;
            }
            .electronic-center-<?php echo $row->id_catalog?> .tab-head .nav-tab li.active,
            .electronic-center-<?php echo $row->id_catalog?> .tab-head .nav-tab li:hover{
                background-color: <?php echo $row->color;?> !important;
            }
        </style>
        <div class="kt-category-tabs kt-tab-fadeeffect margin-top-50 electronic-center-<?php echo $row->id_catalog?>" >
            <div class="tab-head" style="border-color: <?php echo $row->color;?>">
                <h3 class="title"><a href=""><img class="icon" src="<?php echo base_url('upload'); ?>/icons/<?php echo $c; ?>.png" alt=""><?php echo $row->name; ?> </a></h3>
                <ul class="nav-tab">
                    <li class="active"><a data-animated="fadeInUp" data-toggle="tab" href="#tab-<?php echo $i; ?>">Mới Nhất</a></li>
                    <li><a data-animated="fadeInUp" data-toggle="tab" href="#tab-<?php echo $i+1; ?>">Xem Nhiều</a></li>
                    <!--            <li class="active"><a data-animated="fadeInUp" data-toggle="tab" href="#tab-7">Bestseller</a></li>-->
                    <!--            <li><a data-animated="fadeInUp" data-toggle="tab" href="#tab-8">Most Viewed</a></li>-->
                    <!--            <li><a data-animated="fadeInUp" data-toggle="tab" href="#tab-7">New Arrivals</a></li>-->
                    <!--            <li><a href="#">Women</a></li>-->
                    <!--            <li><a href="#">Men</a></li>-->
                    <!--            <li><a href="#">Accsessories</a></li>-->
                </ul>
                <div class="floor-elevator">
                    <a class="btn-elevator up  fa fa-angle-up"></a>
                    <a class="btn-elevator down fa fa-angle-down"></a>
                </div>
            </div>
            <div class="category-tab-content">
                <div class="top-banner">
                    <div class="row margin-0">
                        <div class="col-sm-6 padding-0">
                            <a class="bannereffect-1" href="#"><img src="<?php echo base_url('upload'); ?>/banners/<?php echo $row->image_left;?>" alt="<?php echo $row->image_left;?>"></a>
                        </div>
                        <div class="col-sm-6 padding-0">
                            <a class="bannereffect-1" href="#"><img src="<?php echo base_url('upload'); ?>/banners/<?php echo $row->image_right;?>" alt="<?php echo $row->image_right;?>"></a>
                        </div>
                    </div>
                </div>
                <div class="tab-inner has-banner-left">
                    <div class="left-banner">
                        <a href="#"><a class="bannereffect-2" href="#"><img src="<?php echo base_url('upload'); ?>/banners/<?php echo $row->image_content;?>" alt="<?php echo $row->image_content;?>"></a></a>
                    </div>
                    <div class="tab-content-products">
                        <div class="tab-container">
                            <div id="tab-<?php echo $i; ?>" class="tab-panel active">
                                <ul class="owl-carousel" data-loop="true" data-nav="false" data-dots="false" data-margin="0" data-responsive='{"0":{"items":1,"nav":"false"},"480":{"items":2,"nav":"false"},"768":{"items":3},"1000":{"items":4}}'>
                                    <?php foreach ($row->subs as $subs){ ?>
                                        <?php foreach ($subs->sub_pr as $product){ ?>
                                            <li class="product-item style10">
                                                <div class="product-inner">
                                                    <div class="thumb">
                                                        <a href="<?php echo base_url('chi-tiet-san-pham/'.seoname($product->name_catalog).'/'.seoname($product->name).'/'.$product->id_product) ?>">
                                                            <img src="<?php echo base_url('upload'); ?>/products/<?php echo $product->image_link; ?>" alt="">
                                                        </a>
                                                        <a href="<?php echo base_url('chi-tiet-san-pham/'.seoname($product->name_catalog).'/'.seoname($product->name).'/'.$product->id_product) ?>" title="Quick View" class="button quick-view yith-wcqv-button">Chi Tiết Sản Phẩm</a>
                                                        <div class="group-button">
                                                            <a class="wishlist" href="#">Wishlist</a>
                                                            <a class="compare button" href="<?php echo base_url('chi-tiet-san-pham/'.seoname($product->name_catalog).'/'.seoname($product->name).'/'.$product->id_product) ?>">Compare</a>
                                                            <a class="button add_to_cart_button" href="<?php echo base_url('cart/add/'.$product->id_product); ?>">Add to cart</a>
                                                        </div>

                                                    </div>
                                                    <div class="info">
                                                        <h3 class="product-name short"><a href="<?php echo base_url('chi-tiet-san-pham/'.seoname($product->name_catalog).'/'.seoname($product->name).'/'.$product->id_product) ?>"><?php echo $product->name; ?></a></h3>
                                                        <?php if($product->discount > 0){ ?>
                                                            <span class="price"><?php echo number_format($product->price - $product->discount); ?> VNĐ</span>
                                                            <span class="price" style="text-decoration: line-through; color: #0b0b0b"><?php echo number_format($product->price); ?> VNĐ</span>
                                                        <?php }else{ ?>
                                                            <span class="price"><?php echo number_format($product->price); ?> VNĐ</span>

                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </li>
                                        <?php }} ?>
                                </ul>
                            </div>
                            <div id="tab-<?php echo $i+1; ?>" class="tab-panel">
                                <ul class="owl-carousel" data-loop="true" data-nav="false" data-dots="false" data-margin="0" data-responsive='{"0":{"items":1,"nav":"false"},"480":{"items":2,"nav":"false"},"768":{"items":3},"1000":{"items":4}}'>
                                    <?php foreach ($row->subs as $subs){ ?>
                                        <?php foreach ($subs->sub_pr as $product){ ?>
                                            <li class="product-item style10">
                                                <div class="product-inner">
                                                    <div class="thumb">
                                                        <a href="<?php echo base_url('chi-tiet-san-pham/'.seoname($product->name_catalog).'/'.seoname($product->name).'/'.$product->id_product) ?>">
                                                            <img src="<?php echo base_url('upload'); ?>/products/<?php echo $product->image_link; ?>" alt="">
                                                        </a>
                                                        <a href="<?php echo base_url('chi-tiet-san-pham/'.seoname($product->name_catalog).'/'.seoname($product->name).'/'.$product->id_product) ?>" title="Quick View" class="button quick-view yith-wcqv-button">Chi Tiết Sản Phẩm</a>
                                                        <div class="group-button">
                                                            <a class="wishlist" href="#">Wishlist</a>
                                                            <a class="compare button" href="<?php echo base_url('chi-tiet-san-pham/'.seoname($product->name_catalog).'/'.seoname($product->name).'/'.$product->id_product) ?>">Compare</a>
                                                            <a class="button add_to_cart_button" href="<?php echo base_url('cart/add/'.$product->id_product); ?>">Add to cart</a>
                                                        </div>

                                                    </div>
                                                    <div class="info">
                                                        <h3 class="product-name short"><a href="<?php echo base_url('chi-tiet-san-pham/'.seoname($product->name_catalog).'/'.seoname($product->name).'/'.$product->id_product) ?>"><?php echo $product->name; ?></a></h3>
                                                        <?php if($product->discount > 0){ ?>
                                                            <span class="price"><?php echo number_format($product->price - $product->discount); ?> VNĐ</span>
                                                            <span class="price" style="text-decoration: line-through; color: #0b0b0b"><?php echo number_format($product->price); ?> VNĐ</span>
                                                        <?php }else{ ?>
                                                            <span class="price"><?php echo number_format($product->price); ?> VNĐ</span>

                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            </li>
                                        <?php }} ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $i = $i + 3; $c++; endforeach; ?>
    <!-- ./Tab cat -->

</div>