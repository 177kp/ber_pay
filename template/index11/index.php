<!DOCTYPE html>
<html>
<head>
    <title>BER分支付系统中转平台</title>

    <!-- MATERIALIZE CSS -->
    <link type="text/css" rel="stylesheet" href="<?php echo STATIC_ROOT?>css/materialize.min.css" media="screen"/>
    <!-- PRICING CSS -->
    <link type="text/css" rel="stylesheet" href="<?php echo STATIC_ROOT?>css/pricing.css" media="screen"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<!-- START PRICING TABLE CONTAINER -->
<div class="container">

    <!-- START PRICING TABLE ROW -->
    <div class="row">

        <!-- MATERIALIZE CSS USES 12 COLUMN GRID SYSTEM, DETAILS http://materializecss.com/grid.html -->
        <div class="col s12 m4">

            <!-- START PRICING PLAN -->
            <div class="card pricing style-2">

                <!-- START PLAN TITLE DIV. -->
                <!-- CHANGE COLOR BY CHANGING LAST CSS CLASS (teal) AVAILABLE COLOR CLASSES LISTED HERE http://materializecss.com/color.html -->
                <div class="plan-title waves-effect waves-block waves-light teal">
                    <h5 class="white-text">
                        <span class="plan">黄金会员</span>
                    </h5>
                </div>
                <!-- END PLAN TITLE DIV. -->

                <!-- START PRICE INFO DIV. -->
                <div class="price waves-effect waves-block waves-light teal lighten-1">
                    <h4 class="white-text">
                        <span class="currency">$</span>
                        <span class="amount">69</span>
                        <span class="period">/人民币</span>
                    </h4>
                </div>
                <!-- END PRICE INFO DIV. -->

                <div class="card-content">

                    <!-- START FEATURE LIST -->
                    <ul class="collection">

                        <!-- USE FOLLOWING LIST ITEM AS EXAMPLE TO ADD TOOLTIP IN FEATURE -->
                        <li class="collection-item">后台生成短链</li>
                        <li class="collection-item">短链管理</li>
                        <li class="collection-item">专属无限制API接口（供有能里的开发者使用，有完整的文档和SDK）</li>
                    </ul>
                    <!-- END FEATURE LIST -->

                    <!-- START SIGN UP BUTTON -->
                    <div class="plan-signup-btn">
                        <a id="start-now-starter" class="btn waves-effect waves-block waves-light no-margin white-text"
                           href="#">前往购买</a>
                    </div>
                    <!-- END SIGN UP BUTTON -->

                </div>
            </div>
            <!-- END PRICING PLAN -->

        </div>

        <!-- FEATURED PLAN ( USE EXTRA CLASS z-depth-4 TO RAISE FEATURED PLAN )-->
        <div class="col s12 m4">

            <!-- START PRICING PLAN -->
            <div class="card pricing style-2 z-depth-4">

                <!-- START PLAN TITLE DIV. -->
                <div class="plan-title waves-effect waves-block waves-light yellow darken-3">
                    <h5 class="dark-grey-text">
                        <span class="plan">钻石会员</span>
                    </h5>
                </div>
                <!-- END PLAN TITLE DIV. -->

                <!-- START PRICE INFO DIV. -->
                <div class="price waves-effect waves-block waves-light yellow darken-2">
                    <h4 class="dark-grey-text">
                        <span class="currency">$</span>
                        <span class="amount">99</span>
                        <span class="period">/人民币</span>
                    </h4>
                </div>
                <!-- END PRICE INFO DIV. -->

                <div class="card-content">

                    <!-- START FEATURE LIST -->
                    <ul class="collection">
                        <li class="collection-item">后台生成短链</li>
                        <li class="collection-item">短链管理</li>
                        <li class="collection-item">专属无限制API接口（供有能里的开发者使用，有完整的文档和SDK）</li>
                        <li class="collection-item">被举报短链申诉恢复</li>
                        <li class="collection-item">防红链接无广告内容</li>
                        <li class="collection-item">防红链接直接预览，无提示内容（选择使用）</li>
                    </ul>
                    <!-- END FEATURE LIST -->

                    <!-- START SIGN UP BUTTON -->
                    <div class="plan-signup-btn">
                        <a id="start-now-plus"
                           class="btn-large waves-effect waves-block waves-light no-margin white-text yellow darken-2"
                           href="#"><span class="dark-grey-text">购买</span></a>
                    </div>
                    <!-- END SIGN UP BUTTON -->

                </div>
            </div>
            <!-- END PRICING PLAN -->

        </div>
        <div class="col s12 m4">

            <!-- START PRICING PLAN -->
            <div class="card pricing style-2">

                <!-- START PLAN TITLE DIV. -->
                <div class="plan-title waves-effect waves-block waves-light teal">
                    <h5 class="white-text">
                        <span class="plan">至尊会员</span>
                    </h5>
                </div>
                <!-- END PLAN TITLE DIV. -->

                <!-- START PRICE INFO DIV. -->
                <div class="price waves-effect waves-block waves-light teal lighten-1">
                    <h4 class="white-text">
                        <span class="currency">$</span>
                        <span class="amount">199</span>
                        <span class="period">/人民币</span>
                    </h4>
                </div>
                <!-- END PRICE INFO DIV. -->

                <div class="card-content">

                    <!-- START FEATURE LIST -->
                    <ul class="collection">
                        <li class="collection-item">后台生成短链</li>
                        <li class="collection-item">短链管理</li>
                        <li class="collection-item">专属无限制API接口（供有能里的开发者使用，有完整的文档和SDK）</li>
                        <li class="collection-item">被举报短链申诉恢复</li>
                        <li class="collection-item">防红链接无广告内容</li>
                        <li class="collection-item">防红链接直接预览，无提示内容（选择使用）</li>
                        <li class="collection-item">申诉已拉黑长链</li>
                        <li class="collection-item">专属客户端（内置您的API接口）</li>
                    </ul>
                    <!-- END FEATURE LIST -->

                    <!-- START SIGN UP BUTTON -->
                    <div class="plan-signup-btn">
                        <a id="start-now-premium" class="btn waves-effect waves-block waves-light no-margin white-text"
                           href="">注册</a>
                    </div>
                    <!-- END SIGN UP BUTTON -->

                </div>
            </div>
            <!-- END PRICING PLAN -->

        </div>
    </div>
    <!-- END PRICING TABLE ROW -->

</div>
<!-- END PRICING TABLE CONTAINER -->

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo STATIC_ROOT?>js/materialize.min.js"></script>
</body>
</html>
