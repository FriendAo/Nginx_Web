<!DOCTYPE html>
<html lang="en">
<head>
	<?php
        require ("./NAS_checkResult.php");
        ?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by 365Bootstrap dot com - Free Responsive Html5 Templates">

    <title>维修中心电气工段NAS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="../css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/animated-logo.min.css"><!-- Logo -->

	
	<!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- Js -->
	<!-- Modernizr -->	
	<script src="../js/modernizr.js"></script>
	<!-- D-M-Y-->
	<script src="../js/date.js"> </script>
	<script type="text/javascript">
									var link = document.getElementById("home").value;
									alert(link);
								
								</script>
	<!--修改导航条背景-->
	<style type="text/css">		
		 .navbar-default {
			background-color:#222
		 }
	</style>
			
	<script type="text/javascript">
		$(function ()){
			$('myTab a:last').tab('show')
		})
	</script>	 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
		value='+i+++'
    <![endif]-->
</head>
<body>
	<!--导航条-->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#contact">数据中心</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  
					<li>
                        <a class="page-scroll" href="./littlepaper.php">重置页面</a>
                    </li>            
					<li>
                        <a class="page-scroll" href="../index.html">返回主页</a>
                    </li>            
                </ul>
				<ul class="nav  nav-tabs navbar-left">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li>
                        <a class="page-scroll" href="#home" data-toggle="tab" name="home" value="e" >电气</a>
                    </li>            
					<li>
                        <a class="page-scroll" href="#1" data-toggle="tab">机械化</a>
                    </li> 
					<li>
                        <a class="page-scroll" href="#2" data-toggle="tab">激光焊</a>
                    </li>					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>	
	<!-- /////////////////////////////////////////Content -->	        
	<section class="box-content box-5 ">
		<div class="tab-content">		
			<div class="tab-pane fade in active">
				<div class="container">
					<div class="row heading">
						<div class="col-lg-12">
							<h2>电气工段小票录入系统</h2>
							<hr>
							<div class="intro">The Littlepaper system of Electric Section</div>
						</div>
					</div>				
					<div class="row">
						<div class="single-facts text-center col-sm-3 col-xs-12 mb-30">
							<i class="icofont icofont-hat-alt"></i>
							<h1 class="counter plus"><?php echo @$rows_all;?></h1>
							<p>本月小票数量</p>
						</div>
						<div class="single-facts text-center col-sm-3 col-xs-12 mb-30">
							<i class="icofont icofont-user-suited"></i>
							<h1 class="counter">56</h1>
							<p>本月巡检次数</p>
						</div>
						<div class="single-facts text-center col-sm-3 col-xs-12 mb-30">
							<i class="icofont icofont-history"></i>
							<h1 class="counter">11</h1>
							<p>本月停台</p>
						</div>
						<div class="single-facts text-center col-sm-3 col-xs-12 mb-30">
							<i class="icofont icofont-users-social"></i>
							<h1 class="counter plus">1</h1>
							<p>本月改进次数</p>
						</div>
					</div>
				</div>
			</div>
				
			<div class="tab-pane fade" id="home">
				<div class="container">
					<div class="row heading">
						<div class="col-lg-12">
							<h2>电气工段小票录入系统</h2>
							<hr>
							<div class="intro">The Littlepaper system of Electric Section</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div id="contact-form">
								<form name="form1" method="post" action="./NAS_insert.php" >
									<!--////////车型///////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>车型：</div> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<tr bgcolor=5272BA> 
												<td>
													<input type="radio"   name="motorcycle_type" id= "NCS" value="NCS" required="required">NCS
													<input type="radio"   name="motorcycle_type" id= "NF" value="NF" required="required">NF
													
												</td>    
												</tr>
											</div>
										</div>
									</div>
									<!-- ////////工段////////-->
									
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>工段：</div> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<tr bgcolor=5272BA>
													<td>
													   <input type="radio"   name="section" id= "UB1_1" value="前部" required="required">前部
													   <input type="radio"   name="section" id= "UB1" value="下部一" required="required">下部一
													   <input type="radio"   name="section" id= "UB2" value="下部二" required="required">下部二
													   <input type="radio"   name="section" id= "AB" value="主焊" required="required">主焊
													   <input type="radio"   name="section" id= "ST" value="侧围" required="required">侧围
													   <input type="radio"   name="section" id= "ST" value="门盖" required="required">门盖
													   <input type="radio"   name="section" id= "ST" value="装配" required="required">装配
													</td> 													
												</tr>
											</div>
										</div>
									</div>
									<!--////////工位////////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>工位：</div> 
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group" >
											<input type="text" onKeyUp=value=value.replace(/[\W]/g,'') class="form-control" name="station" id="name" placeholder="例：4535 或 4535r 或 4535a" required="required"/>
											</div>
										</div>
									</div>
									

									<!--////////设备分类////////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>设备类别：</div> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<td>
												   <input type="radio"   name="sort"  value="机器人(含电柜)" required="required">机器人（含电柜）
												   <input type="radio"   name="sort"  value="机器人外围设备" required="required">机器人外围设备
												</td> 													
											</div>
											<div class="form-group">
												<td>
												   <input type="radio"   name="sort"  value="手动电阻焊" required="required">手动电阻焊
												   <input type="radio"   name="sort"  value="自动电阻焊" required="required">自动电阻焊
												   <input type="radio"   name="sort"  value="电弧焊" required="required">电弧焊
												</td>    
											</div>
											<div class="form-group">
												<td>
												   <input type="radio"   name="sort"  value="手动螺柱焊" required="required">手动螺柱焊
												   <input type="radio"   name="sort"  value="自动螺柱焊" required="required">自动螺柱焊
												</td> 
											</div>
											<div class="form-group">
												<td>
												   <input type="radio"   name="sort"  value="手动涂胶机" required="required">手动涂胶机
												   <input type="radio"   name="sort"  value="自动涂胶机" required="required">自动涂胶机
												</td> 
											</div>
											<div class="form-group">
												<td>
												   <input type="radio"   name="sort"  value="人机界面" required="required">人机界面
												   <input type="radio"   name="sort"  value="生产辅助" required="required">生产辅助
												</td>    
											</div>
											<div class="form-group">
												<td>
												   <input type="radio"   name="sort"  value="输送设备" required="required">输送设备
												   <input type="radio"   name="sort"  value="旋转设备" required="required">旋转设备
												</td>    
											</div>
											<div class="form-group">
												<td>
													<input type="radio"   name="sort"  value="冲铆" required="required">冲铆
													<input type="radio"   name="sort"  value="压合" required="required">压合
													<input type="radio"   name="sort"  value="框架" required="required">框架
												</td>
											</div>
											
										</div>
									</div>
									<!--////////停台日期////////-->
									<div class="row">  
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>停台日期：</div> 
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
											<select name="downtime_y" class="form-control" id="tYEAR" size="1" onChange="createSelect()"></select> 
											</div>
										</div>  
										<div class="col-md-2">
											<div class="form-group">
											<select name="downtime_m" class="form-control" id="tMON" size="1" onChange="createSelect();"></select> 
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
											<select name="downtime_d" class="form-control" id="tDAY" size="1" ></select> 
											<script type="text/javascript">createSelect("1","tYEAR","tMON","tDAY");</script>
																						
											</div>
										</div>
									</div>
									<!--////////停台时间////////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>停台时间（分钟）：</div> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group" >
												<input type="text" onKeyUp="value=value.replace(/\D/g,'')" class="form-control" name="min" id="subject" placeholder="15" required="required"/>
											</div>
										</div>
									</div>
									<!--////////故障现象////////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>故障现象：</div> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<textarea name="fault_phenomenon" id="fault_phenomenon" class="form-control" rows="4" cols="25" placeholder="Message" required="required"></textarea>
											</div>
										</div>
									</div>
									
									<!--////////处理过程////////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>处理过程：</div> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
											   <textarea name="process" id="process" class="form-control" rows="4" cols="25" placeholder="Message" required="required"></textarea>
											</div>
										</div>
									</div>	
									<!--////////处理原因////////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>问题原因：</div> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
											   <textarea name="cause" id="cause" class="form-control" rows="4" cols="25" placeholder="Message" required="required"></textarea>
											</div>
										</div>
									</div>
									<!--////////维修人员////////
									<input type="button" value="删除"  onclick="del('+i+')"/>
									-->
									<div class="row"  >
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>维修人员：</div>     
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
											 <input type="text"  class="form-control" name="person" placeholder="姓名" required="required">
											 <script>var i=1</script>
											 <input type="button"  class="btn btn-info" class="btn btn-3 btn-block" onclick="insertAdjacentHTML('beforebegin','<input type=text  class=form-control placeholder=姓名 name=person_'+i+++'>')" value="添加">
											</div>
										</div>
									</div>
									<!--////////提交////////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">						
											<button type="submit" class="btn btn-3 btn-block" name="btnSubmit" id="btnSubmit" value="电气">提交小票</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
	
			<div class="tab-pane fade" id="1">
				<div class="container">
					<div class="row heading">
						<div class="col-lg-12">
							<h2>电气工段小票录入系统</h2>
							<hr>
							<div class="intro">The Littlepaper system of Electric Section</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div id="contact-form">
								<form name="form2" method="post" action="NAS_insert.php">
									<!--////////车型///////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>车型：</div> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<tr bgcolor=5272BA> 
												<td>
													<input type="radio"   name="motorcycle_type" id= "NCS" value="NCS" required="required">NCS
													<input type="radio"   name="motorcycle_type" id= "NF" value="NF" required="required">NF
												</td>    
												</tr>
											</div>
										</div>
									</div>
									<!-- ////////工段////////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>工段：</div> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<tr bgcolor=5272BA>
														<td>
														   <input type="radio"   name="section" id= "UB1" value="前部" required="required">前部
														   <input type="radio"   name="section" id= "UB1" value="下部一" required="required">下部一
														   <input type="radio"   name="section" id= "UB2" value="下部二" required="required">下部二
														   <input type="radio"   name="section" id= "AB" value="主焊" required="required">主焊
														   <input type="radio"   name="section" id= "ST" value="侧围" required="required">侧围
														   <input type="radio"   name="section" id= "ST" value="装配" required="required">装配
														</td> 													
												</tr>
											</div>
										</div>
									</div>
									<!--////////工位////////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>工位：</div> 
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group" >
											<input type="text"  class="form-control" name="station" id="name" placeholder="例：Tb13或42区A100" required="required" />
											</div>
										</div>
									</div>
									
									
									<!--////////设备分类////////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>设备类别：</div> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
														<td>
														   <input type="radio"   name="sort"  value="链式移行机" required="required">链式移行机
														   <input type="radio"   name="sort"  value="链式升降台" required="required">链式升降台
														   <input type="radio"   name="sort"  value="液压升降台" required="required">液压升降台
														</td> 
											</div>
											<div class="form-group">
														<td>			   
														   <input type="radio"   name="sort"  value="输送辊床" required="required">输送辊床
														   <input type="radio"   name="sort"  value="旋转辊床" required="required">旋转辊床 
														</td> 
											</div>
											<div class="form-group">
														<td>   
														   <input type="radio"   name="sort"  value="升降机" required="required">升降机
														   <input type="radio"   name="sort"  value="轨道移行机" required="required">轨道移行机
														</td> 
											</div>
											<div class="form-group">
														<td>			   
														   <input type="radio"   name="sort"  value="EMS" required="required">EMS
														   <input type="radio"   name="sort"  value="生产辅助" required="required">生产辅助
														</td> 													
											</div>
										</div>
									</div>
									<!--////////停台日期////////-->
									<div class="row">  
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>停台日期：</div> 
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
											<select name="downtime_y" class="form-control" id="tYEAR1" size="1" onChange="createSelect()"></select> 
											</div>
										</div>  
										<div class="col-md-2">
											<div class="form-group">
											<select name="downtime_m" class="form-control" id="tMON1" size="1" onChange="createSelect();"></select> 
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
											<select name="downtime_d" class="form-control" id="tDAY1" size="1" ></select> 
											<script type="text/javascript">createSelect("1","tYEAR1","tMON1","tDAY1");</script> 
											</div>
										</div>
									</div>
									<!--////////停台时间////////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>停台时间（分钟）：</div> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group" >
												<input type="text" onKeyUp="value=value.replace(/\D/g,'')" class="form-control" name="min" id="subject" placeholder="15" required="required" />
											</div>
										</div>
									</div>
									<!--////////故障现象////////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>故障现象：</div> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<textarea name="fault_phenomenon" id="fault_phenomenon" class="form-control" rows="4" cols="25" required="required"
												placeholder="Message"></textarea>        
											</div>
										</div>
									</div>
									<!--////////处理过程////////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>处理过程：</div> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
											   <textarea name="process" id="process" class="form-control" rows="4" cols="25" required="required"
												placeholder="Message"></textarea>
											</div>
										</div>
									</div>	
									<!--////////处理原因////////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>问题原因：</div> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
											   <textarea name="cause" id="cause" class="form-control" rows="4" cols="25" required="required"
												placeholder="Message"></textarea>
											</div>
										</div>
									</div>
									<!--////////维修人员////////-->
									<div class="row"  >

										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>维修人员：</div>     
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
											 
											 <input type="text"  class="form-control" name="person" placeholder="姓名" required="required"/>
											 <script>var i=1</script>
											 <input type="button"  class="btn btn-info" class="btn btn-3 btn-block" onclick="insertAdjacentHTML('beforebegin','<input type=text  class=form-control placeholder=姓名 name=person_'+i+++'>')" value="添加">
											   
											</div>
										</div>
									</div>
									<!--////////提交////////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">						
											<button type="submit" class="btn btn-3 btn-block" name="btnSubmit" id="btnSubmit" value="机械化">提交小票</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
	
			<div class="tab-pane fade"id="2">
				<div class="container">
					<div class="row heading">
						<div class="col-lg-12">
							<h2>电气工段小票录入系统</h2>
							<hr>
							<div class="intro">The Littlepaper system of Electric Section</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div id="contact-form">
								<form name="form3" method="post" action="NAS_insert.php">
									<!--////////车型///////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>车型：</div> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<tr bgcolor=5272BA> 
												<td>
													<input type="radio"   name="motorcycle_type" id= "NCS" value="NCS" required="required">NCS
													<input type="radio"   name="motorcycle_type" id= "NF" value="NF" required="required">NF
												</td>    
												</tr>
											</div>
										</div>
									</div>
									<!-- ////////工段////////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>工段：</div> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<tr bgcolor=5272BA>
														<td>
														   <input type="radio"   name="section" id= "UB2" value="下部二" required="required">下部二
														   <input type="radio"   name="section" id= "AB" value="主焊"    required="required">主焊
														   <input type="radio"   name="section" id= "ST" value="门盖"    required="required">门盖
														</td> 													
												</tr>
											</div>
										</div>
									</div>
									<!--////////工位////////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>工位：</div> 
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group" >
											<input type="text" onKeyUp="value=value.replace(/[\W]/g,'')" class="form-control" name="station" id="name" placeholder="例：4535" required="required" />
											</div>
										</div>
									</div>
									

									<!--////////设备分类////////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>设备类别：</div> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">

														<td>
														   <input type="radio"   name="sort"  value="激光焊" required="required">激光焊
														   <input type="radio"   name="sort"  value="电弧焊" required="required">电弧焊
														   <input type="radio"   name="sort"  value="在线测量" required="required">在线测量
														   <input type="radio"   name="sort"  value="生产辅助" required="required">生产辅助

														</td> 
											</div>

										</div>
									</div>
									<!--////////停台日期////////-->
									<div class="row">  
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>停台日期：</div> 
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
											<select name="downtime_y" class="form-control" id="tYEAR2" size="1" onChange="createSelect()"></select> 
											</div>
										</div>  
										<div class="col-md-2">
											<div class="form-group">
											<select name="downtime_m" class="form-control" id="tMON2" size="1" onChange="createSelect();"></select> 
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
											<select name="downtime_d" class="form-control" id="tDAY2" size="1" ></select> 
											<script type="text/javascript">createSelect("1","tYEAR2","tMON2","tDAY2");</script> 
											</div>
										</div>
									</div>
									<!--////////停台时间////////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>停台时间（分钟）：</div> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group" >
												<input type="text" onKeyUp="value=value.replace(/\D/g,'')" class="form-control" name="min" id="subject" placeholder="15" required="required" />
											</div>
										</div>
									</div>
									<!--////////故障现象////////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>故障现象：</div> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<textarea name="fault_phenomenon" id="fault_phenomenon" class="form-control" rows="4" cols="25" required="required"
												placeholder="Message"></textarea>        
											</div>
										</div>
									</div>
									<!--////////处理过程////////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>处理过程：</div> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
											   <textarea name="process" id="process" class="form-control" rows="4" cols="25" required="required"
												placeholder="Message"></textarea>
											</div>
										</div>
									</div>	
									<!--////////处理原因////////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>问题原因：</div> 
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
											   <textarea name="cause" id="cause" class="form-control" rows="4" cols="25" required="required"
												placeholder="Message"></textarea>
											</div>
										</div>
									</div>
									<!--////////维修人员////////-->
									<div class="row"  >

										<div class="col-md-12">
											<div class="form-group">
											   <div class=intro>维修人员：</div>     
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
											 
											 <input type="text"  class="form-control" name="person" placeholder="姓名" required="required"/>
											 <script>var i=1</script>
											 <input type="button"  class="btn btn-info" class="btn btn-3 btn-block" onclick="insertAdjacentHTML('beforebegin','<input type=text  class=form-control placeholder=姓名 name=person_'+i+++'>')" value="添加">
											   
											</div>
										</div>
									</div>
									<!--////////提交////////-->
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">						
											<button type="submit" class="btn btn-3 btn-block" name="btnSubmit" id="btnSubmit" value="激光焊">提交小票</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>				
	</section>
<!-- /////////////////////////////////////////Footer -->

	<!-- jQuery -->
	<script src="../js/jquery-2.1.1.js"></script>
	<script src="../js/masonry.pkgd.min.js"></script>
	<script src="../js/jquery.flexslider-min.js"></script>
	<script src="../js/main.js"></script> <!-- Resource jQuery -->
	
	<script src="../js/plugins.js"></script>
	<script src="../js/main-1.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="../js/bootstrap.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="../js/agency.js"></script>

	<!-- Animated Top -->
	<script src="../js/jquery.easing.min.js"></script>
	<script src="../js/classie.js"></script>
	<script src="../js/cbpAnimatedHeader.js"></script>
	


</body>
</html>
