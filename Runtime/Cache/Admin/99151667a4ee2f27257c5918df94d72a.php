<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo ($meta_title); ?>|江苏师范大学</title>
    <link href="/xgxt/Public/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="/xgxt/Public/Admin/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="/xgxt/Public/Admin/css/behavior.css" media="all">
    <link rel="stylesheet" type="text/css" href="/xgxt/Public/Admin/css/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="/xgxt/Public/Admin/css/plugin.css" media="all">
	<!--<script type="text/javascript" src="/xgxt/Public/Admin/scripts/lib/jquery-2.1.1.min.js"></script>-->
	<!--<script type="text/javascript" src="/xgxt/Public/Admin/scripts/ajaxapi.js"></script>-->
     <!--[if lt IE 9]>
    <script type="text/javascript" src="/xgxt/Public/static/jquery-1.10.2.min.js"></script>
    <![endif]--><!--[if gte IE 9]><!-->
    <!--<![endif]-->
    
</head>
<body>
    <!-- 头部 -->
    	<!-- Navbar -->
		<nav class="navbar navbar-default my-navbar" id="my-navbar" role="navigation">
			<!-- container-fluid -->
			<div class="container-fluid">	
				<!-- navbar-header -->
				<div class="navbar-header">
					<button class="navbar-toggle collapsed my-navbar-mobile-menu" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" type="button">
						<span class="sr-only">Toggle navigation</span>
						<span class="glyphicon glyphicon-th my-navbar-mobile-menu-glyphicon"></span>
					</button>
					<a class="navbar-brand my-navbar-brand" href="#">
						<span class="my-navbar-brand-title">江苏师范大学</span>
					</a>
				</div>
				<!-- 主导航 -->
			       <div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
					<!-- my-navbar-btn的active是自己写的，切记 -->	
			            <?php if(is_array($__MENU__["main"])): $i = 0; $__LIST__ = $__MENU__["main"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><a class="btn btn-xs my-navbar-btn" href="<?php echo (u($menu["url"])); ?>">
								<span class="<?php echo ($menu["icon"]); ?>"></span> 
								<p class="text-center my-navbar-btn-title"><?php echo ($menu["title"]); ?></p>
							</a><?php endforeach; endif; else: echo "" ;endif; ?>
			        </ul>
				</div>
			</div>
			<!-- container-fluid End -->
		</nav>	
		<!-- Navbar End-->
    <!-- /头部 -->
    <div class="main-container" id="main-container">

    	<div class="my-sidebar" id="my-sidebar">
    	<div id="subnav" class="subnav">
    		<ul class="list-group" >
				<li class="list-group-item text-center hidden-xs my-sidebar-userinfo">
					<span class="my-sidebar-userinfo-title">当前用户：<em title="<?php echo session('user_auth.username');?>"><?php echo session('user_auth.username');?></em></span>
				</li>
				<!-- header Start-->
				<li class="list-group-item text-center my-sidebar-header">
						<span class="my-sidebar-header-title">办公系统</span>
				</li>
				<!-- header End-->
				<?php if(is_array($__MENU__["child"])): $i = 0; $__LIST__ = $__MENU__["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub_menu): $mod = ($i % 2 );++$i;?><!-- 子导航 -->
                    <?php if(!empty($sub_menu)): ?><li class="list-group-item text-center my-sidebar-btn">
						   		<span class="<?php echo ($style); ?>"></span>
						   		<?php if(!empty($key)): ?><span class="<?php echo next(explode(',',$key));?>"><?php echo current(explode(',',$key));?></span><?php endif; ?>
						</li>
						<ul class="list-group my-sidebar-sub">
							<?php if(is_array($sub_menu)): $i = 0; $__LIST__ = $sub_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li class="list-group-item text-center my-sidebar-subbtn" data-index="1">
									<a href="<?php echo (u($menu["url"])); ?>">
										<span class="glyphicon glyphicon-plus-sign my-sidebar-subbtn-glyphicon"></span>
										<span class="my-sidebar-subbtn-title"><?php echo ($menu["title"]); ?></span>	
									</a>		
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul><?php endif; endforeach; endif; else: echo "" ;endif; ?> 
            </ul>
            </div>
    	</div>
    	<div class="main-content" id="main-content">
    	
    	<div class="content" id="content">
	    	<div id="top-alert" class="fixed alert alert-error" style="display: none;">
	        	<button class="close fixed" style="margin-top: 4px;">&times;</button>
	        <div class="alert-content">这是内容</div>
    </div>
    		
<div class="tab-wrap">
    <!-- 表格列表 -->
    <div class="tb-unit posr">
        <form class="save-category" action="<?php echo U('AuthManager/addToClass');?>" method="post" enctype="application/x-www-form-urlencoded">
            <input type="hidden" name="uid" value="<?php echo I('uid');?>">
           
                	<div class="table-responsive my-notice-table">
					    <table class="table table-bordered table-hover">
                		   <?php echo R('AuthManager/tree', array($group_list));?>
                	    </table>
                	</div>
            </div>

            <div class="tb-unit-bar">
                <button class="btn btn-default submit-btn ajax-post" type="submit" target-form="save-category">确 定</button>
                <button class="btn btn-default btn-return" onclick="javascript:history.back(-1);return false;">返 回</button>
            </div>
        </form>
    </div>
</div>
<!-- /表格列表 -->

    	</div>	
    	</div>
    </div>

    
    
    
    
    <script src="/xgxt/Public/Admin/scripts/lib/require.js" data-main="/xgxt/Public/Admin/scripts/common"></script>
    


	<script type="text/javascript">

			var a="."+<?php echo ($list["id"]); ?>;
			$(function()}{ 
			$(a).on("click",function(){ 
			alert(5345634);
			//$(".a<?php echo ($list["id"]); ?>").slideToggle();
		});
	});
	




    +function($){
        /* 分类展开收起 */
        $(".category dd").prev().find(".fold i").addClass("icon-unfold")
            .click(function(){
                var self = $(this);
                if(self.hasClass("icon-unfold")){
                    self.closest("dt").next().slideUp("fast", function(){
                        self.removeClass("icon-unfold").addClass("icon-fold");
                    });
                } else {
                    self.closest("dt").next().slideDown("fast", function(){
                        self.removeClass("icon-fold").addClass("icon-unfold");
                    });
                }
            });

        var auth_groups = [<?php echo ($authed_group); ?>];
        $('.cate_id').each(function(){
            if( $.inArray( parseInt(this.value,10),auth_groups )>-1 ){
                $(this).prop('checked',true);
            }
        });
	    $('select[name=group]').change(function(){
		    location.href = this.value;
	    });
    }(jQuery);
    //导航高亮
    highlight_subnav('<?php echo U('AuthManager/index');?>');
</script>
<script>
    $(".authMngr-fahr-checkbox input[type='checkbox']").on("click", function () {
        var isChecked = $(this).is(":checked");
        $(this).closest("dt.authMngr-fahr-checkbox").
                next("dd").
                find("input[type='checkbox']").
                prop("checked", isChecked);
    });
    
    $(".authMngr-son-checkbox input[type='checkbox']").on("click", function () {
        var $closestDD = $(this).closest("dd"),
            allSonCheckbox = $closestDD.find("input[type='checkbox']"),
            isChecked = false,
            temp;

        $.each(allSonCheckbox, function (key, value) {
            temp = $(value).is(":checked");
            if (temp === true){
                isChecked = temp;
            } 
        });

        $closestDD.
                prev("dt").
                find("input[type='checkbox']").
                prop("checked", isChecked);
    });

</script>

    
</body>
</html>