<?php
function formatPhoneNumber($phoneNumber) {
    $phoneNumber = preg_replace('/[^0-9]/','',$phoneNumber);

    if(strlen($phoneNumber) > 10) {
        $countryCode = substr($phoneNumber, 0, strlen($phoneNumber)-10);
        $areaCode = substr($phoneNumber, -10, 3);
        $nextThree = substr($phoneNumber, -7, 3);
        $lastFour = substr($phoneNumber, -4, 4);

        $phoneNumber = $countryCode.''.$areaCode.' '.$nextThree.' '.$lastFour;
    }
    else if(strlen($phoneNumber) == 10) {
        $areaCode = substr($phoneNumber, 0, 3);
        $nextThree = substr($phoneNumber, 3, 3);
        $lastFour = substr($phoneNumber, 6, 4);

        $phoneNumber = ''.$areaCode.' '.$nextThree.' '.$lastFour;
    }
    else if(strlen($phoneNumber) == 7) {
        $nextThree = substr($phoneNumber, 0, 3);
        $lastFour = substr($phoneNumber, 3, 4);

        $phoneNumber = $nextThree.' '.$lastFour;
    }

    return $phoneNumber;
}
?>
<script type="text/javascript">
    (function($)
    {
        $(document).ready(function()
        {

        });
    })(jQuery);
</script>
<style>

    .list_product_info li
    {
        width:100%;
        float:left;
    }
    .bodyc{
        width: 500px !important;
        padding: 20px;
    }
</style>
<div class="widget mg0 form_load" id="main_popup">

    <div class="title">
        <img src="<?php echo public_url('admin'); ?>/images/icons/dark/users.png" alt="" class="titleIcon" />
        <h6>Thông tin chi tiết khách hàng</h6>
    </div>

    <div class="bodyc">
            <div class="tran_info">
                <div class="left fontB f13 mb5 blue">Thông tin khách hàng</div>
                <div class="clear"></div>

                <ul class="list2 valueB link">
                    <li>
                        <span>Mã khách hàng</span>
                        <font class="red"><?php echo $info->id_user; ?></font>
                        <div class="clear"></div>
                    </li>

                    <li>
                        <span>Họ tên</span>
                        <?php echo $info->name; ?>
                        <div class="clear"></div>
                    </li>

                    <li>
                        <span>Email</span>
                        <?php echo $info->email; ?>
                        <div class="clear"></div>
                    </li>


                    <li>
                        <span>Số điện thoại</span>
                        <?php echo formatPhoneNumber($info->phone ) ?>
                        <div class="clear"></div>
                    </li>

                    <li>
                        <span>Địa chỉ</span>
                        <?php echo $info->adress; ?>
                        <div class="clear"></div>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        <div class="clear"></div>

        <div class="clear" style='height:5px'></div>

        <div class="clear" style='height:5px'></div>
    </div>
</div>