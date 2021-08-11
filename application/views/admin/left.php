
<div id="leftSide" style="padding-top:30px;">

    <!-- Account panel -->

    <div class="sideProfile">
        <a href="#" title="" class="profileFace"><img src="<?php echo public_url(); ?>/admin/images/user.png" width="40"></a>
        <span>Xin chào: <strong>admin!</strong></span>
        <span>Phan Văn Chính</span>
        <div class="clear"></div>
    </div>
    <div class="sidebarSep"></div>
    <!-- Left navigation -->

    <?php $this->load->helper('admin'); ?>

    <ul id="menu" class="nav">

        <li class="home">

            <a href="<?php echo admin_url(); ?>" class="active" id="current">
                <span>Bảng điều khiển</span>
                <strong></strong>

            </a>


        </li>
        <li class="product">

            <a href="admin/product.html" class=" exp">
                <span>Môn Học</span>
                <strong>2</strong>
            </a>

            <ul class="sub">
                <li>
                    <a href="<?php echo admin_url('product');?>">
                        Môn Học							</a>
                </li>
                <li>
                    <a href="<?php echo admin_url('catalog'); ?>">
                        Khoa - Lớp							</a>
                </li>
            </ul>

        </li>
        <li class="account">

            <a href="" class=" exp">
                <span>Tài khoản</span>
                <strong>3</strong>
            </a>

            <ul class="sub">
                <li>
                    <a href="<?php echo admin_url('admin')?>">
                        Ban quản trị							</a>
                </li>
                <li>
                    <a href="<?php echo admin_url('group')?>">
                        Nhóm quản trị							</a>
                </li>
                <li>
                    <a href="<?php echo admin_url('user')?>">
                        Thành viên							</a>
                </li>
            </ul>

        </li>
    </ul>

</div>
<div class="clear"></div>
