
        <div class="coppyright">Copyrights © 2021 pvchinh</div>

        <a href="#" class="scroll_top" title="Scroll to Top"><i class="fa fa-arrow-up" style="color: white"></i></a>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <script>
            $(document).ready(function(){
                $('.online-support').hide();
                $('.support-icon-right h3').click(function(e){
                    e.stopPropagation();
                    $('.online-support').slideToggle();
                });
                $('.online-support').click(function(e){
                    e.stopPropagation();
                });
                $(document).click(function(){
                    $('.online-support').slideUp();
                });
            });
        </script>

        <style>

            .support-icon-right {
                background: #F0F3EF;
                position: fixed;
                right: 0;
                bottom: 0;
                top: auto !important
                z-index: 9;
                overflow: hidden;
                width: 250px;
                color: #fff!important;
                -webkit-transition: all 0.3s;
                -moz-transition: all 0.3s;
                -ms-transition: all 0.3s;
                -o-transition: all 0.3s;
                transition: all 0.3s;
            }

            .support-icon-right h3 {

                font-weight: bold;
                font-size: 13px!important;
                font-family: Arial;
                color: #fff!important;
                margin: 0!important;
                background-color: #3B5998;
                cursor: pointer;
            }

            .support-icon-right i {
                background-color: #3B5998;
                padding: 15px 15px 12px 15px;
                margin-right: 15px;
                border-right: 1px solid #fff;;
            }
            .online-support {
                display: none;
            }
        </style>


    </div>
