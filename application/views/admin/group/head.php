<div class="titleArea">
    <div class="wrapper">
        <div class="pageTitle">
            <h5>Nhóm quản trị</h5>
            <span>Quản lý các chức vụ</span>
        </div>

        <div class="horControlB menu_action">
            <ul>
                <li><a href="<?php echo admin_url('group/add'); ?>">
                        <img src="<?php echo public_url(); ?>/admin/images/icons/control/16/add.png">
                        <span>Thêm mới</span></a>
                </li>

                <li>
                    <a href="admin/admin/?feature=1.html">
                        <img src="<?php echo public_url(); ?>/admin/images/icons/control/16/feature.png">
                        <span>Tiêu biểu</span>
                    </a>
                </li>

                <li><a href="<?php echo admin_url('group/index'); ?>">
                        <img src="<?php echo public_url(); ?>/admin/images/icons/control/16/list.png">
                        <span>Danh sách</span></a>
                </li>
            </ul>
        </div>

        <div class="clear"></div>
    </div>
</div>
<script type="text/javascript">
    (function($)
    {
        $(document).ready(function()
        {
            var main = $('#form');

            // Tabs
            main.contentTabs();
        });
    })(jQuery);
</script>
