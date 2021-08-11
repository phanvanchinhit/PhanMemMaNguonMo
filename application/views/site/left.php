<div class="header-control">

    <div class="main-menu-wapper">
        <a class="mobile-navigation" href="#">
						<span class="icon">
							<span></span>
							<span></span>
							<span></span>
						</span>
            Main Menu
        </a>
        <ul class="kt-nav main-menu clone-main-menu">
            <li class="menu-item-has-children">
                <a href="<?php echo base_url(); ?>">Trang Chủ</a>

            </li>

            <?php if (isset($user_info) && $user_info != ''): ?>
                <li><a style="text-transform: capitalize;" href="<?php echo site_url('user/index'); ?>">Xin
                        chào:<?php echo $user_info->name; ?></a></li>
                <li><a style="text-transform: capitalize;" href="<?php echo site_url('user/logout'); ?>">Đăng Xuất</a>
                </li>
            <?php else: ?>
                <li><a href="<?php echo site_url('user/login') ?>">Đăng Nhập</a></li>
                <li><a href="<?php echo site_url('user/register') ?>">Đăng Ký</a></li>
            <?php endif; ?>
        </ul>
    </div>
</div>