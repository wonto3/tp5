<?php /*a:1:{s:69:"F:\phpStudy\WWW\tp5\public/../application/admin/view\index\theme.html";i:1527496235;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>主题切换</title>
    <link href="/tp5/public/static/win10/plugins/theme_switcher/theme_switcher.css" rel="stylesheet">
    <script type="text/javascript" src="/tp5/public/static/win10/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="/tp5/public/static/win10/js/win10.child.js"></script>
</head>
<body>
<!--主题设置-->
<div id="theme_body">
    <div id="theme_area" class="theme_area">
        <!--主题图片-->
    </div>
    <div class="h10"></div>
</div>
<div class="clear"></div>

</body>
</html>
<script>
    $(function () {

        //此处预定义了背景数据，其实可以用ajax获取
        var themes = [
            {
                "pic": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg1.jpg",
                "thumb": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg1_small.jpg",
                "title": "win10"
            },
            {
                "pic": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg2.jpg",
                "thumb": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg2_small.jpg",
                "title": "梦幻光影"
            },
            {
                "pic": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg3.jpg",
                "thumb": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg3_small.jpg",
                "title": "扬帆起航"
            },
            {
                "pic": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg4.jpg",
                "thumb": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg4_small.jpg",
                "title": "乡土气息"
            },
            {
                "pic": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg5.jpg",
                "thumb": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg5_small.jpg",
                "title": "绿色清新"
            },
            {
                "pic": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg6.jpg",
                "thumb": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg6_small.jpg",
                "title": "Win8"
            },
            {
                "pic": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg7.jpg",
                "thumb": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg7_small.jpg",
                "title": "蓝色海岸"
            },
            {
                "pic": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg8.jpg",
                "thumb": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg8_small.jpg",
                "title": "冰天雪地"
            },
            {
                "pic": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg9.jpg",
                "thumb": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg9_small.jpg",
                "title": "繁花满树"
            },
            {
                "pic": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg10.jpg",
                "thumb": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg10_small.jpg",
                "title": "精灵小鸟"
            },
            {
                "pic": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg11.jpg",
                "thumb": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg11_small.jpg",
                "title": "炫酷跑车"
            },
            {
                "pic": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg12.jpg",
                "thumb": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg12_small.jpg",
                "title": "中国风"
            },
            {
                "pic": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg13.jpg",
                "thumb": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg13_small.jpg",
                "title": "Winxp"
            },
            {
                "pic": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg14.jpg",
                "thumb": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg14_small.jpg",
                "title": "淡雅唯美"
            },
            {
                "pic": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg15.jpg",
                "thumb": "/tp5/public/static/win10/plugins/theme_switcher/bg/bg15_small.jpg",
                "title": "Win7"
            },
        ];

        var theme_area=$("#theme_area");
        theme_area.on('click','.theme_setting',function () {
            var pic=$(this).data('pic');
            Win10_parent.setBgUrl({main:pic});

            //此处你也许想用ajax把修改信息保存到服务器。。。

        });




        themes.forEach(function (t) {
            var theme=$("<a href=\"javascript:;\" data-pic=\""+t.pic+"\" class=\"theme_setting \">\n" +
                    "            <div class=\"theme_icon\"><img src=\""+t.thumb+"\"></div>\n" +
                    "            <div class=\"theme_text\">"+t.title+"</div>\n" +
                    "        </a>");
            theme_area.append(theme)
        });


    });
</script>