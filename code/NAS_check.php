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

        <!-- Bootstrap Core CSS-->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="../css/reset.css"> <!-- CSS reset -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/animated-logo.min.css"><!-- Logo -->
        <link rel="stylesheet" href="../css/our-team.css"> <!-- Resource style -->
        
        <!-- Custom Fonts -->
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
        <!-- Js -->
        <script src="../js/modernizr.js"></script> <!-- Modernizr -->
        <script src="../js/Chart.js"></script>
        <!-- D-M-Y-->
        <script src="../js/date.js"> </script>
        <!-- user.css-->
   
    </head>
    <body>
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
                    <a class="navbar-brand page-scroll" href="#page-top">数据分析</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>					
                            <a class="page-scroll" href="#top">首页</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#data">详细数据</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="../index.html">返回主页</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="./NAS_check.php">重置页面</a>
                        </li> 
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>	
        <div id="page-content" class="index-page">
            <!-- ////////////Content Box 01 -->
            <section id="top" class="box-content box-2 box-style">
                <div class="container">
                <div class="row">
                    <div class="col-sm-6 box-item">
                        <form name="form1" method="post" action="NAS_check.php">
                               <!--////////车型///////-->			  
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <div class=intro ><input type="radio"   name="view" value="motorcycle_type" checked="true">车型：</div>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <tr bgcolor=5272BA> 
                                                <td>
                                                    <input type="checkbox"   name="motorcycle_type_c[]" id= "NCS" value="NCS">NCS
                                                    <input type="checkbox"   name="motorcycle_type_c[]" id= "NF" value="NF">NF
                                                </td>    
                                            </tr>
                                        </div>
                                    </div>
                                </div>				
                                <!-- ////////工段////////-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class=intro><input type="radio"   name="view" value="section">工段：</div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <tr bgcolor=5272BA>
                                                <td>
                                                    <input type="checkbox"   name="section_c[]" id= "UB1" value="前部" >前部
                                                    <input type="checkbox"   name="section_c[]" id= "UB1" value="下部一">下部一
                                                    <input type="checkbox"   name="section_c[]" id= "UB2" value="下部二">下部二
                                                    <input type="checkbox"   name="section_c[]" id= "AB" value="主焊" >主焊
                                                    <input type="checkbox"   name="section_c[]" id= "ST" value="侧围">侧围
                                                    <input type="checkbox"   name="section_c[]" id= "SK" value="门盖">门盖
                                                    <input type="checkbox"   name="section_c[]" id= "AIN" value="装配">装配
                                                </td> 													
                                            </tr>
                                        </div>
                                    </div>
                                </div>														
                                <!--////////设备分类////////-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class=intro><input type="radio"   name="view" value="sort">设备类别：</div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <td> 	
                                                <input type="checkbox"   name="sort_c[]"  value="机器人(含电柜)">机器人(含电柜)
                                                <input type="checkbox"   name="sort_c[]"  value="机器人外围设备">机器人外围设备
                                            </td> 													
                                        </div>
                                        <div class="form-group">
                                            <td>
                                                <input type="checkbox"   name="sort_c[]"  value="手动电阻焊">手动电阻焊
                                                <input type="checkbox"   name="sort_c[]"  value="自动电阻焊">自动电阻焊
                                                <input type="checkbox"   name="sort_c[]"  value="电弧焊">电弧焊
                                            </td>    
                                        </div>
                                        <div class="form-group">
                                            <td>
                                                <input type="checkbox"   name="sort_c[]"  value="手动螺柱焊">手动螺柱焊
                                                <input type="checkbox"   name="sort_c[]"  value="自动螺柱焊">自动螺柱焊
                                            </td> 
                                        </div>
                                        <div class="form-group">
                                            <td>
                                                <input type="checkbox"   name="sort_c[]"  value="手动涂胶机">手动涂胶机
                                                 <input type="checkbox"   name="sort_c[]"  value="自动涂胶机">自动涂胶机
                                            </td> 
                                        </div>
                                        <div class="form-group">
                                            <td>			   
                                                <input type="checkbox"   name="sort_c[]"  value="人机界面">人机界面
                                                <input type="checkbox"   name="sort_c[]"  value="生产辅助">生产辅助
                                            </td>    
                                        </div>
                                        <div class="form-group">
                                            <td>			   
                                                <input type="checkbox"   name="sort_c[]"  value="输送设备">输送设备
                                                <input type="checkbox"   name="sort_c[]"  value="旋转设备">旋转设备
                                            </td>    
                                        </div>
                                        <div class="form-group">
                                            <td>  
                                                <input type="checkbox"   name="sort_c[]"  value="冲铆">冲铆
                                                <input type="checkbox"   name="sort_c[]"  value="压合">压合
                                                <input type="checkbox"   name="sort_c[]"  value="框架">框架													
                                            </td>    
                                        </div>										
                                    </div>
                                </div>
                                <!--////////时间////////-->
                                <div class="row">								
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class=intro>按年查询：</div> 
                                            <input type="text" class="form-control" name="downtime_y_c" id="downtime_y_c"/>        
                                        </div>
                                    </div>	 

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class=intro>按月查询：</div> 
                                            <input type="text" class="form-control" name="downtime_m_c" id="downtime_m_c"/>        
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class=intro>按日查询：</div>
                                            <input type="text" class="form-control" name="downtime_d_c" id="downtime_d_c"/>  
                                        </div>
                                    </div>		
                                </div>
                                <!--////////关键词////////-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class=intro>关键字：</div> 
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="key_word" id="name"/>        
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
                                            <input type="text" class="form-control" name="person_c" placeholder="姓名"/>
                                        </div>
                                    </div>
                                </div>
                                <!--////////提交////////-->
                                <div class="row">							
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-3 btn-block" name="btnContactUs" id="btnContactUs">查询</button>
                                        </div>
                                    </div>
                                </div>
                        </form>


                    </div>
                    <div class="col-sm-6 box-item">
                        <!--chart-->
                        <!--从php提取需要的值在html中使用-->
                        <div name="user" >
                            <input type="hidden" id="total" value="<?php echo @$rows_all;?>"/>
                            <input type="hidden" id="viewChoose" value="<?php echo @$view;?>"/>
                            <!--车型选择-->
                            <input type="hidden" id="motorcycleType_ncs" value="<?php echo @$motorcycle_type_c[0];?>"/>
                            <input type="hidden" id="motorcycleType_nf" value="<?php echo @$motorcycle_type_c[1];?>"/>
                            <input type="hidden" id="motorcycleTypeData_ncs" value="<?php echo @$rows_motorcycleType_ncs;?>"/>
                            <input type="hidden" id="motorcycleTypeData_nf" value="<?php echo @$rows_motorcycleType_nf;?>"/>
                            <!--工段选择-->
                            <input type="hidden" id="section_ub1_1" value="<?php echo @$section_c[0];?>"/>
                            <input type="hidden" id="section_ub1" value="<?php echo @$section_c[1];?>"/>
                            <input type="hidden" id="section_ub2" value="<?php echo @$section_c[2];?>"/>
                            <input type="hidden" id="section_ab" value="<?php echo @$section_c[3];?>"/>
                            <input type="hidden" id="section_st" value="<?php echo @$section_c[4];?>"/>
                            <input type="hidden" id="section_sk" value="<?php echo @$section_c[5];?>"/>
                            <input type="hidden" id="section_ain" value="<?php echo @$section_c[6];?>"/>
                            <input type="hidden" id="sectionData_ub1_1" value="<?php echo @$rows_section_ub1_1;?>"/>
                            <input type="hidden" id="sectionData_ub1" value="<?php echo @$rows_section_ub1;?>"/>
                            <input type="hidden" id="sectionData_ub2" value="<?php echo @$rows_section_ub2;?>"/>
                            <input type="hidden" id="sectionData_ab" value="<?php echo @$rows_section_ab;?>"/>
                            <input type="hidden" id="sectionData_st" value="<?php echo @$rows_section_st;?>"/>
                            <input type="hidden" id="sectionData_sk" value="<?php echo @$rows_section_sk;?>"/>
                            <input type="hidden" id="sectionData_ain" value="<?php echo @$rows_section_ain;?>"/>
                            <!--工段选择-->
                            <input type="hidden" id="sort_0" value="<?php echo @$sort_c[0];?>"/>
                            <input type="hidden" id="sort_1" value="<?php echo @$sort_c[1];?>"/>
                            <input type="hidden" id="sort_2" value="<?php echo @$sort_c[2];?>"/>
                            <input type="hidden" id="sort_3" value="<?php echo @$sort_c[3];?>"/>
                            <input type="hidden" id="sort_4" value="<?php echo @$sort_c[4];?>"/>
                            <input type="hidden" id="sort_5" value="<?php echo @$sort_c[5];?>"/>
                            <input type="hidden" id="sort_6" value="<?php echo @$sort_c[6];?>"/>
                            <input type="hidden" id="sort_7" value="<?php echo @$sort_c[7];?>"/>
                            <input type="hidden" id="sort_8" value="<?php echo @$sort_c[8];?>"/>
                            <input type="hidden" id="sort_9" value="<?php echo @$sort_c[9];?>"/>
                            <input type="hidden" id="sort_10" value="<?php echo @$sort_c[10];?>"/>
                            <input type="hidden" id="sort_11" value="<?php echo @$sort_c[1];?>"/>
                            <input type="hidden" id="sort_12" value="<?php echo @$sort_c[12];?>"/>
                            <input type="hidden" id="sort_13" value="<?php echo @$sort_c[13];?>"/>
                            <input type="hidden" id="sort_14" value="<?php echo @$sort_c[14];?>"/>
                            <input type="hidden" id="sort_15" value="<?php echo @$sort_c[15];?>"/>
                            <input type="hidden" id="sortData_0" value="<?php echo @$rows_sort_0;?>"/>
                            <input type="hidden" id="sortData_1" value="<?php echo @$rows_sort_1;?>"/>
                            <input type="hidden" id="sortData_2" value="<?php echo @$rows_sort_2;?>"/>
                            <input type="hidden" id="sortData_3" value="<?php echo @$rows_sort_3;?>"/>
                            <input type="hidden" id="sortData_4" value="<?php echo @$rows_sort_4;?>"/>
                            <input type="hidden" id="sortData_5" value="<?php echo @$rows_sort_5;?>"/>
                            <input type="hidden" id="sortData_6" value="<?php echo @$rows_sort_6;?>"/>
                            <input type="hidden" id="sortData_7" value="<?php echo @$rows_sort_7;?>"/>
                            <input type="hidden" id="sortData_8" value="<?php echo @$rows_sort_8;?>"/>
                            <input type="hidden" id="sortData_9" value="<?php echo @$rows_sort_9;?>"/>
                            <input type="hidden" id="sortData_10" value="<?php echo @$rows_sort_10;?>"/>
                            <input type="hidden" id="sortData_11" value="<?php echo @$rows_sort_11;?>"/>
                            <input type="hidden" id="sortData_12" value="<?php echo @$rows_sort_12;?>"/>
                            <input type="hidden" id="sortData_13" value="<?php echo @$rows_sort_13;?>"/>
                            <input type="hidden" id="sortData_14" value="<?php echo @$rows_sort_14;?>"/>
                            <input type="hidden" id="sortData_15" value="<?php echo @$rows_sort_15;?>"/>
                        </div>
                        <!--建立显示chart图表的画布-->
                        <div>
                            <canvas id="myChart" "width:100%;"></canvas>
                        </div>
                        <script type="text/javascript">
                            //初始化视图选择参数
                            var view = document.getElementById("viewChoose").value;

                            //视图选择:车型
                            if (view == 'motorcycle_type'){
                                var label_0 = document.getElementById("motorcycleType_ncs").value;
                                var label_1 = document.getElementById("motorcycleType_nf").value;
                                
                                var data_0 = document.getElementById("motorcycleTypeData_ncs").value;
                                var data_1 = document.getElementById("motorcycleTypeData_nf").value;

                                var data = {
                                    labels: [label_0, label_1],
                                    datasets: [{
                                        data: [data_0, data_1],
                                        backgroundColor: ["#FF6384","#36A2EB"]
                                    }]
                                };
                            }
                            //视图选择:工段
                            if (view == 'section'){
                                var label_0 = document.getElementById("section_ub1_1").value;
                                var label_1 = document.getElementById("section_ub1").value;
                                var label_2 = document.getElementById("section_ub2").value;
                                var label_3 = document.getElementById("section_ab").value;
                                var label_4 = document.getElementById("section_st").value;
                                var label_5 = document.getElementById("section_sk").value;
                                var label_6 = document.getElementById("section_ain").value;
                                
                                var data_0 = document.getElementById("sectionData_ub1_1").value;
                                var data_1 = document.getElementById("sectionData_ub1").value;
                                var data_2 = document.getElementById("sectionData_ub2").value;
                                var data_3 = document.getElementById("sectionData_ab").value;
                                var data_4 = document.getElementById("sectionData_st").value;
                                var data_5 = document.getElementById("sectionData_sk").value;
                                var data_6 = document.getElementById("sectionData_ain").value;
                                
                                var data = {
                                    labels: [label_0, label_1, label_2, label_3, label_4, label_5, label_6],
                                    datasets: [{
                                        data: [data_0, data_1, data_2, data_3, data_4, data_5, data_6],
                                        backgroundColor: ["#FF6384", "#36A2EB", "#FF6633", "#33FF33", "#33FFFF", "#FF9966", "#9966FF"]
                                    }]
                                };
                            }
                            //视图选择:设备
                            if (view == 'sort'){
                                var label_0 = document.getElementById("sort_0").value;
                                var label_1 = document.getElementById("sort_1").value;
                                var label_2 = document.getElementById("sort_2").value;
                                var label_3 = document.getElementById("sort_3").value;
                                var label_4 = document.getElementById("sort_4").value;
                                var label_5 = document.getElementById("sort_5").value;
                                var label_6 = document.getElementById("sort_6").value;
                                var label_7 = document.getElementById("sort_7").value;
                                var label_8 = document.getElementById("sort_8").value;
                                var label_9 = document.getElementById("sort_9").value;
                                var label_10 = document.getElementById("sort_10").value;
                                var label_11 = document.getElementById("sort_11").value;
                                var label_12 = document.getElementById("sort_12").value;
                                var label_13 = document.getElementById("sort_13").value;
                                var label_14 = document.getElementById("sort_14").value;
                                var label_15 = document.getElementById("sort_15").value;
                                
                                var data_0 = document.getElementById("sortData_0").value;
                                var data_1 = document.getElementById("sortData_1").value;
                                var data_2 = document.getElementById("sortData_2").value;
                                var data_3 = document.getElementById("sortData_3").value;
                                var data_4 = document.getElementById("sortData_4").value;
                                var data_5 = document.getElementById("sortData_5").value;
                                var data_6 = document.getElementById("sortData_6").value;
                                var data_7 = document.getElementById("sortData_7").value;
                                var data_8 = document.getElementById("sortData_8").value;
                                var data_9 = document.getElementById("sortData_9").value;
                                var data_10 = document.getElementById("sortData_10").value;
                                var data_11 = document.getElementById("sortData_11").value;
                                var data_12 = document.getElementById("sortData_12").value;
                                var data_13 = document.getElementById("sortData_13").value;
                                var data_14 = document.getElementById("sortData_14").value;
                                var data_15 = document.getElementById("sortData_15").value;
                                
                                var data = {
                                    labels: [label_0, label_1, label_2, label_3, label_4, label_5, label_6, label_7, label_8, label_9, label_10, label_11, label_12, label_13, label_14, label_15],
                                    datasets: [{
                                        data: [data_0, data_1, data_2, data_3, data_4, data_5, data_6, data_7, data_8, data_9, data_10, data_11, data_12, data_13, data_14, data_15],
                                        backgroundColor: ["#FF6384", "#36A2EB", "#FF6633", "#33FF33", "#33FFFF", "#FF9966", "#9966FF", "#3399CC", "#996666", "#FFFF00", "#33CCCC", "#33CC99", "#99CC99", "#CCCCFF", "FF99CC", "#CC0033"]
                                    }]
                                };
                            }

                            var ctx = document.getElementById("myChart").getContext("2d");
                            // Get the context of the canvas element we want to select
                            var myBarChart = new Chart(ctx, {
                                    //responsive:true,
                                    type: 'pie',
                                    data: data,
                                    // options: defaults,
                                });
                        </script>
                    </div>
                </div>
                </div>
            </section>
            <section id="data" class="box-content box-2 ">

                <div class="table-responsive text-center" >
                    <?php
                        function isMobile(){
                            $useragent=isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
                            $useragent_commentsblock=preg_match('|\(.*?\)|',$useragent,$matches)>0?$matches[0]:'';
                            function CheckSubstrs($substrs,$text){
                                foreach($substrs as $substr)
                                    if(false!==strpos($text,$substr)){
                                        return true;
                                    }
                                    return false;
                                    }
                                $mobile_os_list=array('Google Wireless Transcoder','Windows CE','WindowsCE','Symbian','Android','armv6l','armv5','Mobile','CentOS','mowser','AvantGo','Opera Mobi','J2ME/MIDP','Smartphone','Go.Web','Palm','iPAQ');
                                $mobile_token_list=array('Profile/MIDP','Configuration/CLDC-','160×160','176×220','240×240','240×320','320×240','UP.Browser','UP.Link','SymbianOS','PalmOS','PocketPC','SonyEricsson','Nokia','BlackBerry','Vodafone','BenQ','Novarra-Vision','Iris','NetFront','HTC_','Xda_','SAMSUNG-SGH','Wapaka','DoCoMo','iPhone','iPod');
                                
                                $found_mobile=CheckSubstrs($mobile_os_list,$useragent_commentsblock) || CheckSubstrs($mobile_token_list,$useragent);
                                
                                if ($found_mobile){
                                    return true;
                                }else{
                                    return false;
                                }
                            }
                        if (isMobile()){
                            echo '手机端</br>';
                            echo '数据库共计:'.@$rows_all.'条</br>';
                            echo "<table  class='table table-bordered table-striped table-condensed' >";
                            echo "<th width='3%' style='vertical-align:middle;text-align:center;'>序号</th>";
                            echo "<th width='3%' style='vertical-align:middle;text-align:center;'>区域</th>";
                            echo "<th width='3.5%' style='vertical-align:middle;text-align:center;'>工段</th>";
                            echo "<th width='3%' style='vertical-align:middle;text-align:center;'>工位</th>";
                            echo "<th width='8%' style='vertical-align:middle;text-align:center;'>设备</th>";
                            echo "<th width='8%' style='vertical-align:middle;text-align:center;'>时间</th>";
                            echo "<th width='3%' style='vertical-align:middle;text-align:center;'>停台分钟</th>";
                            echo "<th width='15%' style='vertical-align:middle;text-align:center;'>现象</th>";
                            echo "<th width='15%' style='vertical-align:middle;text-align:center;'>过程</th>";
                            echo "<th width='15%' style='vertical-align:middle;text-align:center;'>原因</th>";
                            echo "<th width='3.5%' style='vertical-align:middle;text-align:center;'>人员</th>";
                            echo "<th width='3.5%' style='vertical-align:middle;text-align:center;'>人员</th>";
                            echo "<th width='3.5%' style='vertical-align:middle;text-align:center;'>人员</th>";
                            echo "<th width='3.5%' style='vertical-align:middle;text-align:center;'>人员</th>";
                            echo "<th width='3.5%' style='vertical-align:middle;text-align:center;'>人员</th>";	
                            echo "<th width='3.5%' style='vertical-align:middle;text-align:center;'>人员</th>";
                        }else{
                            echo '电脑端</br>';
                            echo '数据库共计:'.@$rows_all.'条</br>';
                            echo "<table  class='table table-bordered table-striped table-condensed' >";
                            echo "<th width='3%' style='vertical-align:middle;text-align:center;'>序号</th>";
                            echo "<th width='3%' style='vertical-align:middle;text-align:center;'>区域</th>";
                            echo "<th width='3.5%' style='vertical-align:middle;text-align:center;'>工段</th>";
                            echo "<th width='3%' style='vertical-align:middle;text-align:center;'>工位</th>";
                            echo "<th width='8%' style='vertical-align:middle;text-align:center;'>设备</th>";
                            echo "<th width='8%' style='vertical-align:middle;text-align:center;'>时间</th>";
                            echo "<th width='3%' style='vertical-align:middle;text-align:center;'>停台分钟</th>";
                            echo "<th width='15%' style='vertical-align:middle;text-align:center;'>现象</th>";
                            echo "<th width='15%' style='vertical-align:middle;text-align:center;'>过程</th>";
                            echo "<th width='15%' style='vertical-align:middle;text-align:center;'>原因</th>";
                            echo "<th width='3.5%' style='vertical-align:middle;text-align:center;'>人员</th>";
                            echo "<th width='3.5%' style='vertical-align:middle;text-align:center;'>人员</th>";
                            echo "<th width='3.5%' style='vertical-align:middle;text-align:center;'>人员</th>";
                            echo "<th width='3.5%' style='vertical-align:middle;text-align:center;'>人员</th>";
                            echo "<th width='3.5%' style='vertical-align:middle;text-align:center;'>人员</th>";	
                            echo "<th width='3.5%' style='vertical-align:middle;text-align:center;'>人员</th>";
                        }
                        while($rows=mysqli_fetch_array($result)){
                            echo'<tr>';
                            for($i=0;$i<$colums-2;$i++){
                                echo "<td style='vertical-align:middle;text-align:center;'>$rows[$i]</td>";
                            }
                            echo'</tr>';
                        }
                        mysqli_free_result($result);
                        mysqli_close($link);
                    ?>
                </div>
            </section>
        </div>
        

        

        
        <!-- jQuery -->
        <script src="../js/jquery-2.1.1.js"></script>
        <script src="../js/masonry.pkgd.min.js"></script>
        <script src="../js/jquery.flexslider-min.js"></script>
        <script src="../js/main.js"></script> <!-- Resource jQuery -->

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
