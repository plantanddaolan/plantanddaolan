<div class="nav-navicon admin-main admin-sidebar">

    <div class="sideMenu am-icon-dashboard" style="color:#aeb2b7; margin: 10px 0 0 0;"> 欢迎系统管理员：<%=name%></div>
    <div class="sideMenu">
        <h3 class="am-icon-flag on"><em></em> <a href="#">植物种类</a></h3>
        <ul>
            <li><a href="">植物列表</a></li>
            <li class="func" dataType='html' dataLink='msn.htm' iconImg='images/msn.gif'>乔木</li>
            <li>灌木</li>
        </ul>
        <h3 class="am-icon-cart-plus"><em></em> <a href="#"> 校内导览图</a></h3>
        <ul>
            <li>图片列表</li>
            <li>主页面轮播图</li>
            <li>校园分区图</li>
            <li>校园鸟瞰效果图</li>
        </ul>
        <h3 class="am-icon-users"><em></em> <a href="#">植物景观节点</a></h3>
        <ul>
            <li>记忆点介绍</li>
            <li>植物景观特色</li>
            <li>植物文化</li>
            <li>节点名称由来</li>
            <li>轮播图</li>
            <li>色彩组合分析图</li>
            <li>节点种植平面图</li>
        </ul>
        <h3 class="am-icon-volume-up"><em></em> <a href="#">信息通知</a></h3>
        <ul>
            <li>站内消息 /留言</li>
            <li>短信</li>
            <li>邮件</li>
            <li>微信</li>
            <li>客服</li>
        </ul>
        <h3 class="am-icon-gears"><em></em> <a href="#">系统设置</a></h3>
        <ul>
            <li>数据备份</li>
            <li>邮件/短信管理</li>
            <li>上传/下载</li>
            <li>权限</li>
            <li>网站设置</li>
            <li>第三方支付</li>
            <li>提现 /转账 出入账汇率</li>
            <li>平台设置</li>
            <li>声音文件</li>
        </ul>
    </div>
    <!-- sideMenu End -->

    <script type="text/javascript">
        jQuery(".sideMenu").slide({
            titCell: "h3", //鼠标触发对象
            targetCell: "ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
            effect: "slideDown", //targetCell下拉效果
            delayTime: 300, //效果时间
            triggerTime: 150, //鼠标延迟触发时间（默认150）
            defaultPlay: true,//默认是否执行效果（默认true）
            returnDefault: true //鼠标从.sideMen移走后返回默认状态（默认false）
        });
    </script>


</div>