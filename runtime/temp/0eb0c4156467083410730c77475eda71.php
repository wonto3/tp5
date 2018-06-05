<?php /*a:2:{s:69:"F:\phpStudy\WWW\tp5\public/../application/admin/view\account\add.html";i:1527759262;s:69:"F:\phpStudy\WWW\tp5\public/../application/admin/view\base\common.html";i:1527752665;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>控制台 - Bootstrap后台管理系统模版Ace下载</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- basic styles -->
    <link href="/tp5/public/static/ace/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/tp5/public/static/ace/assets/css/font-awesome.min.css" />

    <!--[if IE 7]>
    <link rel="stylesheet" href="/tp5/public/static/ace/assets/css/font-awesome-ie7.min.css" />
    <![endif]-->

    <!-- page specific plugin styles -->

    <!-- ace styles -->

    <link rel="stylesheet" href="/tp5/public/static/ace/assets/css/ace.min.css" />
    <link rel="stylesheet" href="/tp5/public/static/ace/assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="/tp5/public/static/ace/assets/css/ace-skins.min.css" />

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/tp5/public/static/ace/assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->

    <script src="/tp5/public/static/ace/assets/js/ace-extra.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="/tp5/public/static/ace/assets/js/html5shiv.js"></script>
    <script src="/tp5/public/static/ace/assets/js/respond.min.js"></script>
    <![endif]-->
    <style>
        .main-content {
            margin-left: 0;
        }
    </style>
</head>

<body>

<div class="main-container" id="main-container">

    <div class="main-container-inner">

        
<div class="main-content">
    <div class="page-content">
        <div class="page-header">
            <h1>
               添加管理员
            </h1>
        </div><!-- /.page-header -->

        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <form class="form-horizontal" role="form" method="post" action="<?php echo url('account/post'); ?>">
                    <input type="hidden" name="id" value="<?php echo htmlentities($id); ?>">
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">账户名</label>
                        <div class="col-sm-9">
                            <input type="text" id="form-field-1" name="username" placeholder="请填写账户名" class="col-xs-10 col-sm-5" />
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-2">密码</label>
                        <div class="col-sm-9">
                            <input type="password" id="form-field-2" name="password" placeholder="请填写密码" class="col-xs-10 col-sm-5" />
                            <span class="help-inline col-xs-12 col-sm-7">
                                <span class="middle">密码长度不低于6位</span>
                            </span>
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right">状态</label>
                        <div class="col-sm-9">
                            <label>
                                <input name="status" value="1" type="radio" class="ace" checked />
                                <span class="lbl"> 正常</span>
                            </label>
                            &nbsp;&nbsp;
                            <label>
                                <input name="status" value="0" type="radio" class="ace" />
                                <span class="lbl"> 禁止</span>
                            </label>
                        </div>
                    </div>
                    <div class="clearfix form-actions">
                        <div class="col-md-offset-3 col-md-9">
                            <button class="btn btn-info" type="submit">
                                <i class="icon-ok bigger-110"></i>
                                提交
                            </button>
                            &nbsp; &nbsp; &nbsp;
                            <button class="btn" type="reset">
                                <i class="icon-undo bigger-110"></i>
                                重置
                            </button>
                        </div>
                    </div>
                </form>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div><!-- /.main-content -->


    </div><!-- /.main-container-inner -->

</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="/tp5/public/static/ace/assets/js/jquery-2.0.3.min.js"></script>
<!-- <![endif]-->

<!--[if IE]>
<script src="/tp5/public/static/ace/assets/js/jquery-1.10.2.min.js"></script>
<![endif]-->

<script src="/tp5/public/static/ace/assets/js/jquery.mobile.custom.min.js"></script>
<script src="/tp5/public/static/ace/assets/js/bootstrap.min.js"></script>
<script src="/tp5/public/static/ace/assets/js/typeahead-bs2.min.js"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="/tp5/public/static/ace/assets/js/excanvas.min.js"></script>
<![endif]-->

<script src="/tp5/public/static/ace/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="/tp5/public/static/ace/assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="/tp5/public/static/ace/assets/js/jquery.slimscroll.min.js"></script>
<script src="/tp5/public/static/ace/assets/js/jquery.easy-pie-chart.min.js"></script>
<script src="/tp5/public/static/ace/assets/js/jquery.sparkline.min.js"></script>
<script src="/tp5/public/static/ace/assets/js/flot/jquery.flot.min.js"></script>
<script src="/tp5/public/static/ace/assets/js/flot/jquery.flot.pie.min.js"></script>
<script src="/tp5/public/static/ace/assets/js/flot/jquery.flot.resize.min.js"></script>

<!-- ace scripts -->
<script type="text/javascript">
    jQuery(function($) {
        $('table th input:checkbox').on('click' , function(){
            var that = this;
            $(this).closest('table').find('tr > td:first-child input:checkbox')
                    .each(function(){
                        this.checked = that.checked;
                        $(this).closest('tr').toggleClass('selected');
                    });

        });
    })
</script>
<script src="/tp5/public/static/ace/assets/js/ace-elements.min.js"></script>
<script src="/tp5/public/static/ace/assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->

</body>
</html>

