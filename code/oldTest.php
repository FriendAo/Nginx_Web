//图形显示数据
if ($view == 'sort'){
    //        @$output_sort_0 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '机器人(含电柜)'";
    //        $result_sort_0 = mysqli_query($link,$output_sort_0);
    //        $rows_sort_0 = mysqli_affected_rows($link);
    //
    //        @$output_sort_1 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '机器人外围设备'";
    //        $result_sort_1 = mysqli_query($link,$output_sort_1);
    //        $rows_sort_1 = mysqli_affected_rows($link);
    //
    //        @$output_sort_2 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '手动电阻焊'";
    //        $result_sort_2 = mysqli_query($link,$output_sort_2);
    //        $rows_sort_2 = mysqli_affected_rows($link);
    //
    //        @$output_sort_3 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '自动电阻焊'";
    //        $result_sort_3 = mysqli_query($link,$output_sort_3);
    //        $rows_sort_3 = mysqli_affected_rows($link);
    //
    //        @$output_sort_4 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '电弧焊'";
    //        $result_sort_4 = mysqli_query($link,$output_sort_4);
    //        $rows_sort_4 = mysqli_affected_rows($link);
    //
    //        @$output_sort_5 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '手动螺柱焊'";
    //        $result_sort_5 = mysqli_query($link,$output_sort_5);
    //        $rows_sort_5 = mysqli_affected_rows($link);
    //
    //        @$output_sort_6 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '自动螺柱焊'";
    //        $result_sort_6 = mysqli_query($link,$output_sort_6);
    //        $rows_sort_6 = mysqli_affected_rows($link);
    //
    //        @$output_sort_7 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '手动涂胶机'";
    //        $result_sort_7 = mysqli_query($link,$output_sort_7);
    //        $rows_sort_7 = mysqli_affected_rows($link);
    //
    //        @$output_sort_8 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '自动涂胶机'";
    //        $result_sort_8 = mysqli_query($link,$output_sort_8);
    //        $rows_sort_8 = mysqli_affected_rows($link);
    //
    //        @$output_sort_9 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '人机界面'";
    //        $result_sort_9 = mysqli_query($link,$output_sort_9);
    //        $rows_sort_9 = mysqli_affected_rows($link);
    //
    //        @$output_sort_10 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '生产辅助'";
    //        $result_sort_10 = mysqli_query($link,$output_sort_10);
    //        $rows_sort_10 = mysqli_affected_rows($link);
    //
    //        @$output_sort_11 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '输送设备'";
    //        $result_sort_11 = mysqli_query($link,$output_sort_11);
    //        $rows_sort_11 = mysqli_affected_rows($link);
    //
    //        @$output_sort_12 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '旋转设备'";
    //        $result_sort_12 = mysqli_query($link,$output_sort_12);
    //        $rows_sort_12 = mysqli_affected_rows($link);
    //
    //        @$output_sort_13 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '冲铆'";
    //        $result_sort_13 = mysqli_query($link,$output_sort_13);
    //        $rows_sort_13 = mysqli_affected_rows($link);
    //
    //        @$output_sort_14 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '压合'";
    //        $result_sort_14 = mysqli_query($link,$output_sort_14);
    //        $rows_sort_14 = mysqli_affected_rows($link);
    //
    //        @$output_sort_15 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '框架'";
    //        $result_sort_15 = mysqli_query($link,$output_sort_15);
    //        $rows_sort_15 = mysqli_affected_rows($link);
    @$output_sort_0 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '$sort_c[0]'";
    $result_sort_0 = mysqli_query($link,$output_sort_0);
    $rows_sort_0 = mysqli_affected_rows($link);
    
    @$output_sort_1 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '$sort_c[1]'";
    $result_sort_1 = mysqli_query($link,$output_sort_1);
    $rows_sort_1 = mysqli_affected_rows($link);
    
    @$output_sort_2 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '$sort_c[2]'";
    $result_sort_2 = mysqli_query($link,$output_sort_2);
    $rows_sort_2 = mysqli_affected_rows($link);
    
    @$output_sort_3 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '$sort_c[3]'";
    $result_sort_3 = mysqli_query($link,$output_sort_3);
    $rows_sort_3 = mysqli_affected_rows($link);
    
    @$output_sort_4 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '$sort_c[4]'";
    $result_sort_4 = mysqli_query($link,$output_sort_4);
    $rows_sort_4 = mysqli_affected_rows($link);
    
    @$output_sort_5 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '$sort_c[5]'";
    $result_sort_5 = mysqli_query($link,$output_sort_5);
    $rows_sort_5 = mysqli_affected_rows($link);
    
    @$output_sort_6 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '$sort_c[6]'";
    $result_sort_6 = mysqli_query($link,$output_sort_6);
    $rows_sort_6 = mysqli_affected_rows($link);
    
    @$output_sort_7 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '$sort_c[7]'";
    $result_sort_7 = mysqli_query($link,$output_sort_7);
    $rows_sort_7 = mysqli_affected_rows($link);
    
    @$output_sort_8 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '$sort_c[8]'";
    $result_sort_8 = mysqli_query($link,$output_sort_8);
    $rows_sort_8 = mysqli_affected_rows($link);
    
    @$output_sort_9 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '$sort_c[9]'";
    $result_sort_9 = mysqli_query($link,$output_sort_9);
    $rows_sort_9 = mysqli_affected_rows($link);
    
    @$output_sort_10 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '$sort_c[10]'";
    $result_sort_10 = mysqli_query($link,$output_sort_10);
    $rows_sort_10 = mysqli_affected_rows($link);
    
    @$output_sort_11 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '$sort_c[11]'";
    $result_sort_11 = mysqli_query($link,$output_sort_11);
    $rows_sort_11 = mysqli_affected_rows($link);
    
    @$output_sort_12 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '$sort_c[12]'";
    $result_sort_12 = mysqli_query($link,$output_sort_12);
    $rows_sort_12 = mysqli_affected_rows($link);
    
    @$output_sort_13 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '$sort_c[13]'";
    $result_sort_13 = mysqli_query($link,$output_sort_13);
    $rows_sort_13 = mysqli_affected_rows($link);
    
    @$output_sort_14 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '$sort_c[14]'";
    $result_sort_14 = mysqli_query($link,$output_sort_14);
    $rows_sort_14 = mysqli_affected_rows($link);
    
    @$output_sort_15 = "SELECT * FROM `LittlePaper`.`Data` WHERE sort LIKE '$sort_c[15]'";
    $result_sort_15 = mysqli_query($link,$output_sort_15);
    $rows_sort_15 = mysqli_affected_rows($link);
    
    
}

//图形显示数据
if ($view == 'section'){
    //        @$output_section_ub1_1 = "SELECT * FROM `LittlePaper`.`Data` WHERE section LIKE '前部'";
    //        $result_section_ub1_1 = mysqli_query($link,$output_section_ub1_1);
    //        $rows_section_ub1_1 = mysqli_affected_rows($link);
    //
    //        @$output_section_ub1 = "SELECT * FROM `LittlePaper`.`Data` WHERE section LIKE '下部一'";
    //        $result_section_ub1 = mysqli_query($link,$output_section_ub1);
    //        $rows_section_ub1 = mysqli_affected_rows($link);
    //
    //        @$output_section_ub2 = "SELECT * FROM `LittlePaper`.`Data` WHERE section LIKE '下部二'";
    //        $result_section_ub2 = mysqli_query($link,$output_section_ub2);
    //        $rows_section_ub2 = mysqli_affected_rows($link);
    //
    //        @$output_section_ab = "SELECT * FROM `LittlePaper`.`Data` WHERE section LIKE '主焊'";
    //        $result_section_ab = mysqli_query($link,$output_section_ab);
    //        $rows_section_ab = mysqli_affected_rows($link);
    //
    //        @$output_section_st = "SELECT * FROM `LittlePaper`.`Data` WHERE section LIKE '侧围'";
    //        $result_section_st = mysqli_query($link,$output_section_st);
    //        $rows_section_st = mysqli_affected_rows($link);
    //
    //        @$output_section_sk = "SELECT * FROM `LittlePaper`.`Data` WHERE section LIKE '门盖'";
    //        $result_section_sk = mysqli_query($link,$output_section_sk);
    //        $rows_section_sk = mysqli_affected_rows($link);
    //
    //        @$output_section_ain = "SELECT * FROM `LittlePaper`.`Data` WHERE section LIKE '装配'";
    //        $result_section_ain = mysqli_query($link,$output_section_ain);
    //        $rows_section_ain = mysqli_affected_rows($link);
    @$output_section_ub1_1 = "SELECT * FROM `LittlePaper`.`Data` WHERE section LIKE '$section_c[0]'";
    $result_section_ub1_1 = mysqli_query($link,$output_section_ub1_1);
    $rows_section_ub1_1 = mysqli_affected_rows($link);
    
    @$output_section_ub1 = "SELECT * FROM `LittlePaper`.`Data` WHERE section LIKE '$section_c[1]'";
    $result_section_ub1 = mysqli_query($link,$output_section_ub1);
    $rows_section_ub1 = mysqli_affected_rows($link);
    
    @$output_section_ub2 = "SELECT * FROM `LittlePaper`.`Data` WHERE section LIKE '$section_c[2]'";
    $result_section_ub2 = mysqli_query($link,$output_section_ub2);
    $rows_section_ub2 = mysqli_affected_rows($link);
    
    @$output_section_ab = "SELECT * FROM `LittlePaper`.`Data` WHERE section LIKE '$section_c[3]'";
    $result_section_ab = mysqli_query($link,$output_section_ab);
    $rows_section_ab = mysqli_affected_rows($link);
    
    @$output_section_st = "SELECT * FROM `LittlePaper`.`Data` WHERE section LIKE '$section_c[4]'";
    $result_section_st = mysqli_query($link,$output_section_st);
    $rows_section_st = mysqli_affected_rows($link);
    
    @$output_section_sk = "SELECT * FROM `LittlePaper`.`Data` WHERE section LIKE '$section_c[5]'";
    $result_section_sk = mysqli_query($link,$output_section_sk);
    $rows_section_sk = mysqli_affected_rows($link);
    
    @$output_section_ain = "SELECT * FROM `LittlePaper`.`Data` WHERE section LIKE '$section_c[6]'";
    $result_section_ain = mysqli_query($link,$output_section_ain);
    $rows_section_ain = mysqli_affected_rows($link);
}

//图形显示数据
//    if ($view == 'motorcycle_type'){
//        @$output_motorcycleType_ncs = "SELECT * FROM `LittlePaper`.`Data` WHERE motorcycle_type LIKE 'NCS'";
//        $result_motorcycleType_ncs = mysqli_query($link,$output_motorcycleType_ncs);
//        $rows_motorcycleType_ncs = mysqli_affected_rows($link);
//
//        @$output_motorcycleType_nf = "SELECT * FROM `LittlePaper`.`Data` WHERE motorcycle_type LIKE 'NF'";
//        $result_motorcycleType_nf = mysqli_query($link,$output_motorcycleType_nf);
//        $rows_motorcycleType_nf = mysqli_affected_rows($link);
//    }
if ($view == 'motorcycle_type'){
    @$output_motorcycleType_ncs = "SELECT * FROM `LittlePaper`.`Data` WHERE motorcycle_type LIKE '$motorcycle_type_c[0]'";
    $result_motorcycleType_ncs = mysqli_query($link,$output_motorcycleType_ncs);
    $rows_motorcycleType_ncs = mysqli_affected_rows($link);
    
    @$output_motorcycleType_nf = "SELECT * FROM `LittlePaper`.`Data` WHERE motorcycle_type LIKE '$motorcycle_type_c[1]'";
    $result_motorcycleType_nf = mysqli_query($link,$output_motorcycleType_nf);
    $rows_motorcycleType_nf = mysqli_affected_rows($link);
}

//                    if ($view == 'motorcycle_type'){
//                        echo 'NCS车型共计:'.@$rows_motorcycleType_ncs.'条</br>';
//                        echo 'NF车型共计:'.@$rows_motorcycleType_nf.'条</br>';
//                    }
//                    if ($view == 'section'){
//                        echo '前部工段共计:'.@$rows_section_ub1_1.'条</br>';
//                        echo '下部一工段共计:'.@$rows_section_ub1.'条</br>';
//                        echo '下部二工段共计:'.@$rows_section_ub2.'条</br>';
//                        echo '主焊工段共计:'.@$rows_section_ab.'条</br>';
//                        echo '侧围工段共计:'.@$rows_section_st.'条</br>';
//                        echo '门盖工段共计:'.@$rows_section_sk.'条</br>';
//                        echo '装配工段共计:'.@$rows_section_ain.'条</br>';
//
//                    }
//                    if ($view == 'sort'){
//                        echo '机器人(含电柜)'.'故障共计:'.@$rows_sort_0.'条</br>';
//                        echo '机器人外围设备'.'故障共计:'.@$rows_sort_1.'条</br>';
//                        echo '手动电阻焊'.'故障共计:'.@$rows_sort_2.'条</br>';
//                        echo '自动电阻焊'.'故障共计:'.@$rows_sort_3.'条</br>';
//                        echo '电弧焊'.'故障共计:'.@$rows_sort_4.'条</br>';
//                        echo '手动螺柱焊'.'故障共计:'.@$rows_sort_5.'条</br>';
//                        echo '自动螺柱焊'.'故障共计:'.@$rows_sort_6.'条</br>';
//                        echo '手动涂胶机'.'故障共计:'.@$rows_sort_7.'条</br>';
//                        echo '自动涂胶机'.'故障共计:'.@$rows_sort_8.'条</br>';
//                        echo '人机界面'.'故障共计:'.@$rows_sort_9.'条</br>';
//                        echo '生产辅助'.'故障共计:'.@$rows_sort_10.'条</br>';
//                        echo '输送设备'.'故障共计:'.@$rows_sort_11.'条</br>';
//                        echo '旋转设备'.'故障共计:'.@$rows_sort_12.'条</br>';
//                        echo '冲铆'.'故障共计:'.@$rows_sort_13.'条</br>';
//                        echo '压合'.'故障共计:'.@$rows_sort_14.'条</br>';
//                        echo '框架'.'故障共计:'.@$rows_sort_15.'条</br>';
//                    }

//                            $i=1;
//                            echo '录入成功！你录入的内容是：','</br>','</br>',
//                            '车型：'.$motorcycle_type.'</br>',
//                            '工段：'.$section.'</br>',
//                            '工位：'.$station.'</br>',
//                            '设备类别：'.$sort.'</br>',
//                            '停台日期：'.$_POST['downtime_y'].'年'.$_POST['downtime_m'].'月'.$_POST['downtime_d'].'日</br>',
//                            '停台时间：'.$_POST['min'].'min'.'</br>',
//                            '故障现象：'.$_POST['fault_phenomenon'].'</br>',
//                            '处理过程：'.$_POST['process'].'</br>',
//                            '问题原因：'.$_POST['cause'].'</br>',
//                            '维修人员：'.$name.','.$_POST['downtime_m'].'月共计录入'.($rows[0]+$i).'条</br>';
//                            if($name_1)
//                                echo '维修人员：'.$name_1.','.$_POST['downtime_m'].'月共计录入'.($rows1[0]+$i).'条</br>';
//                            if($name_2)
//                                echo '维修人员：'.$name_2.','.$_POST['downtime_m'].'月共计录入'.($rows2[0]+$i).'条</br>';
//                            if($name_3)
//                                echo '维修人员：'.$name_3.','.$_POST['downtime_m'].'月共计录入'.($rows3[0]+$i).'条</br>';
//                            if($name_4)
//                                echo '维修人员：'.$name_4.','.$_POST['downtime_m'].'月共计录入'.($rows4[0]+$i).'条</br>';
//                            if($name_5)
//                                echo '维修人员：'.$name_5.','.$_POST['downtime_m'].'月共计录入'.($rows5[0]+$i).'条</br>';

<!--////////异步测试////////-->调用php，       <script src="../js/qingqiu.js"></script>
<div class="row"  >
<div class="col-md-12">
<label class="col-sm-6 box-item">请输入要查询的内容:</label>
<br />
<br />
<input name="neirong" type="text" class="form-control" />
<div style="display:none;" class="yanzhengtishi">内容不能为空哦</div>
<input type="button" value='异步测试' class="btn btn-3 btn-block" onclick="qingqiu()" />
</div>
</div>
//php，接收请求
if(isset($_GET['q'])){
    $q=$rows_all;
    echo '返回值：'.$q.','.$rows_type;
}
//qingqiu.js
//验证和查询方法
function qingqiu()
{
    var data=document.form1.neirong;
    if(data.value==0){
        //表单值为空时弹出提示
        $(document).ready(function(){
                          $(".yanzhengtishi").slideDown("slow");
                          });
        data.focus();  //光标返回焦点
        return false;
    }else{
        //内容不为空滑动收起提示
        $(document).ready(function(){
                          $(".yanzhengtishi").slideUp("slow");
                          });
        //然后执行异步请求
        var xmlhttp;
        if (window.XMLHttpRequest)
        {
            // IE7+, Firefox, Chrome, Opera, Safari建立对象
            xmlhttp=new XMLHttpRequest();
        }
        else
        {
            // 针对 IE6, IE5 建立对象
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                //响应提示
                document.getElementById("AjaxTishi").innerHTML="正在查询...";
                //输出查询结果
                document.getElementById("AjaxTishi").innerHTML=xmlhttp.responseText;
            }
        }
        //向query.php服务端程序发送get请求
        xmlhttp.open("GET","./query.php?t=" + Math.random() + "&q=" + data.value,true);
        xmlhttp.send();
    }
}

