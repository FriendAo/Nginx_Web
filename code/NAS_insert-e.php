<!DOCTYPE html>
<html lang="en">
    <head>
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
        <!--修改导航条背景-->
        <style type="text/css">
            .navbar-default {
            background-color:#222
        }
        </style>
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
                    <a class="navbar-brand page-scroll" href="#page-top">提交数据</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="./littlepaper-e.html">继续录入</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="../index.html">返回首页</a>
                        </li> 
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>	
        <div id="page-content" class="index-page">
            <!-- ////////////Content Box 01 -->
            <section class="box-content box-5" id="contact">
                <div class="container">
                    <div>
                        <?php
                            header("Content-type: text/html; charset=utf-8");
                            
                            /*
                             $host = SAE_MYSQL_HOST_M;
                             $port = SAE_MYSQL_PORT;
                             $dbname = SAE_MYSQL_DB;
                             $user = SAE_MYSQL_USER;
                             $pass = SAE_MYSQL_PASS;
                             */
                            $host='localhost';
                            $port='3306';
                            $user='root';
                            $pass='';
                            $dbname='LittlePaper';
                            
                            //连接数据库,必须用 mysqli 写
                            $link = new mysqli($host,$user,$pass,$dbname,$port);
                            
                            //数据库连接时发生的错误
                            if(mysqli_connect_errno()){
                                echo '数据库连接出现了错误，错误的信息是：'.mysqli_connect_error();
                                exit();
                            }
                            
                            //设置插入数据库的字符集格式，避免数据库中的数据出现乱码
                            mysqli_set_charset($link,"utf8");
                            mysqli_query($link,"set names utf-8");
                            
                            
                            //初始化变量并写入数据
                            $name = isset($_POST['person']) ? trim($_POST['person']) : '';
                            $name_1 = isset($_POST['person_1']) ? trim($_POST['person_1']) : '';
                            $name_2 = isset($_POST['person_2']) ? trim($_POST['person_2']) : '';
                            $name_3 = isset($_POST['person_3']) ? trim($_POST['person_3']) : '';
                            $name_4 = isset($_POST['person_4']) ? trim($_POST['person_4']) : '';
                            $name_5 = isset($_POST['person_5']) ? trim($_POST['person_5']) : '';
                            $motorcycle_type = isset($_POST['motorcycle_type'])?$_POST['motorcycle_type']: '';
                            $section = isset($_POST['section']) ? $_POST['section'] : '';
                            $station = isset($_POST['station']) ? $_POST['station'] : '';
                            $sort = isset($_POST['sort']) ? $_POST['sort'] : '';
                            //int转字符串
                            $old_downtime = $_POST['downtime_y'].'-'.$_POST['downtime_m'].'-'.$_POST['downtime_d'];
                            //字符串转date
                            $downtime = date("Y-m-d",strtotime($old_downtime));
                            //格式化类型,整数1转01
                            $downtime_m = sprintf("%02d",$_POST['downtime_m']);
                            
                            $input="insert into `LittlePaper`.`Data` (motorcycle_type,section,station,sort,downtime,min,fault_phenomenon,process,cause,person,person_1,person_2,person_3,person_4,person_5) values ('$motorcycle_type','$section','$station','$sort','$downtime','$_POST[min]','$_POST[fault_phenomenon]','$_POST[process]','$_POST[cause]','$name','$name_1','$name_2','$name_3','$name_4','$name_5')";
                            
                            //查询数据
                            $output = "SELECT COUNT(*) AS count FROM `LittlePaper`.`Data` WHERE date_format(downtime,'%m') like '$downtime_m' and (person like '$name' OR person_1 like '$name' OR person_2 like '$name' OR person_3 like '$name' OR person_4 like '$name' OR person_5 like '$name')";
                            $result = mysqli_query($link,$output);
                            $rows = mysqli_fetch_array($result);
                            
                            $output1 = "SELECT COUNT(*) AS count FROM `LittlePaper`.`Data` WHERE date_format(downtime,'%m') like '$downtime_m' and (person like '$name_1' OR person_1 like '$name_1' OR person_2 like '$name_1' OR person_3 like '$name_1' OR person_4 like '$name_1' OR person_5 like '$name_1')";
                            $result1 = mysqli_query($link,$output1);
                            $rows1 = mysqli_fetch_array($result1);
                            
                            $output2 = "SELECT COUNT(*) AS count FROM `LittlePaper`.`Data` WHERE date_format(downtime,'%m') like '$downtime_m' and (person like '$name_2' OR person_1 like '$name_2' OR person_2 like '$name_2' OR person_3 like '$name_2' OR person_4 like '$name_2' OR person_5 like '$name_2')";
                            $result2 = mysqli_query($link,$output2);
                            $rows2 = mysqli_fetch_array($result2);
                            
                            $output3 = "SELECT COUNT(*) AS count FROM `LittlePaper`.`Data` WHERE date_format(downtime,'%m') like '$downtime_m' and (person like '$name_3' OR person_1 like '$name_3' OR person_2 like '$name_3' OR person_3 like '$name_3' OR person_4 like '$name_3' OR person_5 like '$name_3')";
                            $result3 = mysqli_query($link,$output3);
                            $rows3 = mysqli_fetch_array($result3);
                            
                            $output4 = "SELECT COUNT(*) AS count FROM `LittlePaper`.`Data` WHERE date_format(downtime,'%m') like '$downtime_m' and (person like '$name_4' OR person_1 like '$name_4' OR person_2 like '$name_4' OR person_3 like '$name_4' OR person_4 like '$name_4' OR person_5 like '$name_4')";
                            $result4 = mysqli_query($link,$output4);
                            $rows4 = mysqli_fetch_array($result4);
                            
                            $output5 = "SELECT COUNT(*) AS count FROM `LittlePaper`.`Data` WHERE date_format(downtime,'%m') like '$downtime_m' and (person like '$name_5' OR person_1 like '$name_5' OR person_2 like '$name_5' OR person_3 like '$name_5' OR person_4 like '$name_5' OR person_5 like '$name_5')";
                            $result5 = mysqli_query($link,$output5);
                            $rows5 = mysqli_fetch_array($result5);
                            
                            //输出
                            if (!mysqli_query($link,$input)){
                                printf("Error: %s\n", mysqli_error($link));
                                exit();
                            }else{
                                mysqli_free_result($result);
                                mysqli_close($link);
                            }
                        ?>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class=intro>录入成功!</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class=intro>请确认录入内容</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class=intro>车型：</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" >
                                <input type="text" class="form-control" name="motorcycle_type_o" value="<?php echo $motorcycle_type;?>" value="readonly" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class=intro>工段：</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" >
                                <input type="text" class="form-control" name="section_o" value="<?php echo $section;?>" value="readonly" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class=intro>工位：</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" >
                                <input type="text" class="form-control" name="station_o" value="<?php echo $station;?>" value="readonly" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class=intro>设备类别：</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" >
                                <input type="text" class="form-control" name="sort_o" value="<?php echo $sort;?>" value="readonly" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class=intro>停台日期：</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" >
                                <input type="text" class="form-control" name="downtime_o" value="<?php echo $_POST['downtime_y'].'年'.$_POST['downtime_m'].'月'.$_POST['downtime_d'].'日';?>" value="readonly" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class=intro>停台时间：</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" >
                                <input type="text" class="form-control" name="min_o" value="<?php echo $_POST['min'];?>" value="readonly" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class=intro>故障现象：</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" >
                                <input type="text" class="form-control" name="fault_phenomenon_o" value="<?php echo $_POST['fault_phenomenon'];?>" value="readonly" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class=intro>处理过程：</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" >
                                <input type="text" class="form-control" name="process_o" value="<?php echo $_POST['process'];?>" value="readonly" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class=intro>问题原因：</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" >
                                <input type="text" class="form-control" name="cause_o" value="<?php echo $_POST['cause'];?>" value="readonly" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class=intro>维修人员：</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group" >
                                <input type="text" class="form-control" name="name_0_o" value="<?php echo $name;?>" value="readonly" readonly/>
                            </div>
                            </div>
                        <div class="col-md-3">
                            <div class="form-group" >
                                <input type="text" class="form-control" name="name_0_t_o" value="<?php echo $_POST['downtime_m'].'月共计录入'.($rows[0]+1).'条';?>" value="readonly" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group" >
                                <input type="text" class="form-control" name="name_1_o" value="<?php echo isset($name_1) ? $name_1 : '';?>" value="readonly" readonly/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group" >
                                <input type="text" class="form-control" name="name_1_t_o" value="<?php if($name_1){echo $_POST['downtime_m'].'月共计录入'.(@$rows1[0]+1).'条';}else{ echo '';}?>" value="readonly" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group" >
                                <input type="text" class="form-control" name="name_2_o" value="<?php echo isset($name_2) ? $name_2 : '';?>" value="readonly" readonly/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group" >
                                <input type="text" class="form-control" name="name_2_t_o" value="<?php if($name_2){echo $_POST['downtime_m'].'月共计录入'.(@$rows2[0]+1).'条';}else{ echo '';}?>" value="readonly" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group" >
                                <input type="text" class="form-control" name="name_3_o" value="<?php echo isset($name_3) ? $name_3 : '';?>" value="readonly" readonly/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group" >
                                <input type="text" class="form-control" name="name_3_t_o" value="<?php if($name_3){echo $_POST['downtime_m'].'月共计录入'.(@$rows3[0]+1).'条';}else{ echo '';}?>" value="readonly" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group" >
                                <input type="text" class="form-control" name="name_4_o" value="<?php echo isset($name_4) ? $name_4 : '';?>" value="readonly" readonly/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group" >
                                <input type="text" class="form-control" name="name_4_t_o" value="<?php if($name_4){echo $_POST['downtime_m'].'月共计录入'.(@$rows4[0]+1).'条';}else{ echo '';}?>" value="readonly" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group" >
                                <input type="text" class="form-control" name="name_5_o" value="<?php echo isset($name_5) ? $name_5 : '';?>" value="readonly" readonly/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group" >
                                <input type="text" class="form-control" name="name_5_t_o" value="<?php if($name_5){echo $_POST['downtime_m'].'月共计录入'.(@$rows5[0]+1).'条';}else{ echo '';}?>" value="readonly" readonly/>
                            </div>
                        </div>
                    </div>
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
