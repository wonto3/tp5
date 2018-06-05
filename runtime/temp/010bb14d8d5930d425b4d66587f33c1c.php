<?php /*a:2:{s:71:"F:\phpStudy\WWW\tp5\public/../application/admin/view\account\index.html";i:1527761568;s:69:"F:\phpStudy\WWW\tp5\public/../application/admin/view\base\common.html";i:1527752665;}*/ ?>
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

        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->

                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="header smaller lighter blue">
                            <button class="btn btn-primary" onclick="location.href='<?php echo url('account/add'); ?>'">添加管理员</button>
                        </h3>
                        <div class="table-header">
                            管理员列表
                        </div>

                        <div class="table-responsive">
                            <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="center">
                                        <label>
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </th>
                                    <th>账户名</th>
                                    <th>状态</th>
                                    <th>登录时间</th>
                                    <th>操作</th>
                                </tr>
                                </thead>

                                <tbody>
                                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?>
                                        <tr>
                                            <td class="center">
                                                <label>
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>
                                            <td><?php echo htmlentities($row['username']); ?></td>
                                            <td class="hidden-480">
                                                <?php if($row['status']==0): ?>
                                                    <span class="label label-sm label-warning">禁止</span>
                                                <?php else: ?>
                                                    <span class="label label-sm label-success">正常</span>
                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo htmlentities(date("Y-m-d H:i:s",!is_numeric($row['logintime'])? strtotime($row['logintime']) : $row['logintime'])); ?></td>
                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <a class="green" href="<?php echo url('account/edit'); ?>">
                                                        <i class="icon-pencil bigger-130"></i>
                                                    </a>
                                                    <a class="red" href="#">
                                                        <i class="icon-trash bigger-130"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <?php echo $page; ?>
                    </div>
                </div>
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

