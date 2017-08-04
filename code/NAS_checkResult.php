<?php
    //header('Content-Type:text/html; charset=utf-8');
    $host="localhost";
    $port="3306";
    $user="root";
    $pass="";
    $dbname="LittlePaper";
    
    //初始化变量并写入数据
    //连接数据库,必须用 mysqli 写
    $link = new mysqli($host,$user,$pass,$dbname,$port);
    
    //设置插入数据库的字符集格式，避免数据库中的数据出现乱码
    mysqli_set_charset($link,"utf8");
    mysqli_query($link,"set names utf-8");
    
    //视图选择，默认为车型
    $view = isset($_POST['view']) ? $_POST['view'] : 'motorcycle_type';
    
    //是否选车型，未选择默认全选
    $motorcycle_type_c = isset($_POST['motorcycle_type_c']) ? $_POST['motorcycle_type_c'] : '';
    
    if (!$motorcycle_type_c){
        $motorcycle_type_c = ['NCS','NF'];
    };
    
    
    //是否选工段，未选择默认全选
    $section_c = isset($_POST['section_c']) ? $_POST['section_c'] : '';
    
    if(!$section_c){
        
        $section_c = ['前部','下部一','下部二','主焊','侧围','门盖','装配'];
    };
  
    //是否选设备，未选择默认全选
    $sort_c = isset($_POST['sort_c']) ? $_POST['sort_c'] : '';
    
    if(!$sort_c){

       $sort_c = ['机器人(含电柜)','机器人外围设备','手动电阻焊','自动电阻焊','电弧焊','手动螺柱焊','自动螺柱焊','手动涂胶机','自动涂胶机','人机界面','生产辅助','输送设备','旋转设备','冲铆','压合','框架'];
    };

    //查询时间
    $downtime_y_c = isset($_POST['downtime_y_c']) ? $_POST['downtime_y_c'] : '';
    $downtime_m_c = isset($_POST['downtime_m_c']) ? $_POST['downtime_m_c'] : '';
    if($downtime_m_c){
        $downtime_m_c = sprintf("%02d",$_POST['downtime_m_c']);//格式化类型,整数1转01
    }
    $downtime_d_c = isset($_POST['downtime_d_c']) ? $_POST['downtime_d_c'] : '';
    if($downtime_d_c){
        $downtime_d_c = sprintf("%02d",$_POST['downtime_d_c']);
    }
    
    //关键字
    $key_word = isset($_POST['key_word']) ? $_POST['key_word'] : '';
    
    //维修人员,trim消除空格
    $person_c = isset($_POST['person_c']) ? trim($_POST['person_c']) : '';
    $person_c_1 = isset($_POST['person_c_1']) ? trim($_POST['person_c_1']) : '';
    $person_c_2 = isset($_POST['person_c_2']) ? trim($_POST['person_c_2']) : '';
    $person_c_3 = isset($_POST['person_c_3']) ? trim($_POST['person_c_3']) : '';
    $person_c_4 = isset($_POST['person_c_4']) ? trim($_POST['person_c_4']) : '';
    $person_c_5 = isset($_POST['person_c_5']) ? trim($_POST['person_c_5']) : '';
    
    //车型显示数据
    if ($view == 'motorcycle_type'){
        @$output_motorcycleType_ncs = "SELECT * FROM `LittlePaper`.`Data` WHERE 
        motorcycle_type LIKE '$motorcycle_type_c[0]'
        AND (section LIKE '$section_c[0]'
             OR section LIKE '$section_c[1]'
             OR section LIKE '$section_c[2]'
             OR section LIKE '$section_c[3]'
             OR section LIKE '$section_c[4]'
             OR section LIKE '$section_c[5]'
             OR section LIKE '$section_c[6]')
        AND (sort LIKE '$sort_c[0]'
             OR sort LIKE '$sort_c[1]'
             OR sort LIKE '$sort_c[2]'
             OR sort LIKE '$sort_c[3]'
             OR sort LIKE '$sort_c[4]'
             OR sort LIKE '$sort_c[5]'
             OR sort LIKE '$sort_c[6]'
             OR sort LIKE '$sort_c[7]'
             OR sort LIKE '$sort_c[8]'
             OR sort LIKE '$sort_c[9]'
             OR sort LIKE '$sort_c[10]'
             OR sort LIKE '$sort_c[11]'
             OR sort LIKE '$sort_c[12]'
             OR sort LIKE '$sort_c[13]'
             OR sort LIKE '$sort_c[14]'
             OR sort LIKE '$sort_c[15]')
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_motorcycleType_ncs = mysqli_query($link,$output_motorcycleType_ncs);
        $rows_motorcycleType_ncs = mysqli_affected_rows($link);
        
        @$output_motorcycleType_nf = "SELECT * FROM `LittlePaper`.`Data` WHERE 
        motorcycle_type LIKE '$motorcycle_type_c[1]'
        AND (section LIKE '$section_c[0]'
             OR section LIKE '$section_c[1]'
             OR section LIKE '$section_c[2]'
             OR section LIKE '$section_c[3]'
             OR section LIKE '$section_c[4]'
             OR section LIKE '$section_c[5]'
             OR section LIKE '$section_c[6]')
        AND (sort LIKE '$sort_c[0]'
             OR sort LIKE '$sort_c[1]'
             OR sort LIKE '$sort_c[2]'
             OR sort LIKE '$sort_c[3]'
             OR sort LIKE '$sort_c[4]'
             OR sort LIKE '$sort_c[5]'
             OR sort LIKE '$sort_c[6]'
             OR sort LIKE '$sort_c[7]'
             OR sort LIKE '$sort_c[8]'
             OR sort LIKE '$sort_c[9]'
             OR sort LIKE '$sort_c[10]'
             OR sort LIKE '$sort_c[11]'
             OR sort LIKE '$sort_c[12]'
             OR sort LIKE '$sort_c[13]'
             OR sort LIKE '$sort_c[14]'
             OR sort LIKE '$sort_c[15]')
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_motorcycleType_nf = mysqli_query($link,$output_motorcycleType_nf);
        $rows_motorcycleType_nf = mysqli_affected_rows($link);
    }

    //工段显示数据
    if ($view == 'section'){
        @$output_section_ub1_1 = "SELECT * FROM `LittlePaper`.`Data` WHERE
        (motorcycle_type LIKE '$motorcycle_type_c[0]'
         OR motorcycle_type LIKE '$motorcycle_type_c[1]')
        AND section LIKE '$section_c[0]'
        AND (sort LIKE '$sort_c[0]'
             OR sort LIKE '$sort_c[1]'
             OR sort LIKE '$sort_c[2]'
             OR sort LIKE '$sort_c[3]'
             OR sort LIKE '$sort_c[4]'
             OR sort LIKE '$sort_c[5]'
             OR sort LIKE '$sort_c[6]'
             OR sort LIKE '$sort_c[7]'
             OR sort LIKE '$sort_c[8]'
             OR sort LIKE '$sort_c[9]'
             OR sort LIKE '$sort_c[10]'
             OR sort LIKE '$sort_c[11]'
             OR sort LIKE '$sort_c[12]'
             OR sort LIKE '$sort_c[13]'
             OR sort LIKE '$sort_c[14]'
             OR sort LIKE '$sort_c[15]')
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_section_ub1_1 = mysqli_query($link,$output_section_ub1_1);
        $rows_section_ub1_1 = mysqli_affected_rows($link);
        
        @$output_section_ub1 = "SELECT * FROM `LittlePaper`.`Data` WHERE
        (motorcycle_type LIKE '$motorcycle_type_c[0]'
         OR motorcycle_type LIKE '$motorcycle_type_c[1]')
        AND section LIKE '$section_c[1]'
        AND (sort LIKE '$sort_c[0]'
             OR sort LIKE '$sort_c[1]'
             OR sort LIKE '$sort_c[2]'
             OR sort LIKE '$sort_c[3]'
             OR sort LIKE '$sort_c[4]'
             OR sort LIKE '$sort_c[5]'
             OR sort LIKE '$sort_c[6]'
             OR sort LIKE '$sort_c[7]'
             OR sort LIKE '$sort_c[8]'
             OR sort LIKE '$sort_c[9]'
             OR sort LIKE '$sort_c[10]'
             OR sort LIKE '$sort_c[11]'
             OR sort LIKE '$sort_c[12]'
             OR sort LIKE '$sort_c[13]'
             OR sort LIKE '$sort_c[14]'
             OR sort LIKE '$sort_c[15]')
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_section_ub1 = mysqli_query($link,$output_section_ub1);
        $rows_section_ub1 = mysqli_affected_rows($link);
        
        @$output_section_ub2 = "SELECT * FROM `LittlePaper`.`Data` WHERE
        (motorcycle_type LIKE '$motorcycle_type_c[0]'
         OR motorcycle_type LIKE '$motorcycle_type_c[1]')
        AND  section LIKE '$section_c[2]'
        AND (sort LIKE '$sort_c[0]'
             OR sort LIKE '$sort_c[1]'
             OR sort LIKE '$sort_c[2]'
             OR sort LIKE '$sort_c[3]'
             OR sort LIKE '$sort_c[4]'
             OR sort LIKE '$sort_c[5]'
             OR sort LIKE '$sort_c[6]'
             OR sort LIKE '$sort_c[7]'
             OR sort LIKE '$sort_c[8]'
             OR sort LIKE '$sort_c[9]'
             OR sort LIKE '$sort_c[10]'
             OR sort LIKE '$sort_c[11]'
             OR sort LIKE '$sort_c[12]'
             OR sort LIKE '$sort_c[13]'
             OR sort LIKE '$sort_c[14]'
             OR sort LIKE '$sort_c[15]')
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_section_ub2 = mysqli_query($link,$output_section_ub2);
        $rows_section_ub2 = mysqli_affected_rows($link);
        
        @$output_section_ab = "SELECT * FROM `LittlePaper`.`Data` WHERE
        (motorcycle_type LIKE '$motorcycle_type_c[0]'
         OR motorcycle_type LIKE '$motorcycle_type_c[1]')
        AND section LIKE '$section_c[3]'
        AND (sort LIKE '$sort_c[0]'
             OR sort LIKE '$sort_c[1]'
             OR sort LIKE '$sort_c[2]'
             OR sort LIKE '$sort_c[3]'
             OR sort LIKE '$sort_c[4]'
             OR sort LIKE '$sort_c[5]'
             OR sort LIKE '$sort_c[6]'
             OR sort LIKE '$sort_c[7]'
             OR sort LIKE '$sort_c[8]'
             OR sort LIKE '$sort_c[9]'
             OR sort LIKE '$sort_c[10]'
             OR sort LIKE '$sort_c[11]'
             OR sort LIKE '$sort_c[12]'
             OR sort LIKE '$sort_c[13]'
             OR sort LIKE '$sort_c[14]'
             OR sort LIKE '$sort_c[15]')
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_section_ab = mysqli_query($link,$output_section_ab);
        $rows_section_ab = mysqli_affected_rows($link);
        
        @$output_section_st = "SELECT * FROM `LittlePaper`.`Data` WHERE
        (motorcycle_type LIKE '$motorcycle_type_c[0]'
         OR motorcycle_type LIKE '$motorcycle_type_c[1]')
        AND section LIKE '$section_c[4]'
        AND (sort LIKE '$sort_c[0]'
             OR sort LIKE '$sort_c[1]'
             OR sort LIKE '$sort_c[2]'
             OR sort LIKE '$sort_c[3]'
             OR sort LIKE '$sort_c[4]'
             OR sort LIKE '$sort_c[5]'
             OR sort LIKE '$sort_c[6]'
             OR sort LIKE '$sort_c[7]'
             OR sort LIKE '$sort_c[8]'
             OR sort LIKE '$sort_c[9]'
             OR sort LIKE '$sort_c[10]'
             OR sort LIKE '$sort_c[11]'
             OR sort LIKE '$sort_c[12]'
             OR sort LIKE '$sort_c[13]'
             OR sort LIKE '$sort_c[14]'
             OR sort LIKE '$sort_c[15]')
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_section_st = mysqli_query($link,$output_section_st);
        $rows_section_st = mysqli_affected_rows($link);
        
        @$output_section_sk = "SELECT * FROM `LittlePaper`.`Data` WHERE
        (motorcycle_type LIKE '$motorcycle_type_c[0]'
         OR motorcycle_type LIKE '$motorcycle_type_c[1]')
        AND section LIKE '$section_c[5]'
        AND (sort LIKE '$sort_c[0]'
             OR sort LIKE '$sort_c[1]'
             OR sort LIKE '$sort_c[2]'
             OR sort LIKE '$sort_c[3]'
             OR sort LIKE '$sort_c[4]'
             OR sort LIKE '$sort_c[5]'
             OR sort LIKE '$sort_c[6]'
             OR sort LIKE '$sort_c[7]'
             OR sort LIKE '$sort_c[8]'
             OR sort LIKE '$sort_c[9]'
             OR sort LIKE '$sort_c[10]'
             OR sort LIKE '$sort_c[11]'
             OR sort LIKE '$sort_c[12]'
             OR sort LIKE '$sort_c[13]'
             OR sort LIKE '$sort_c[14]'
             OR sort LIKE '$sort_c[15]')
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_section_sk = mysqli_query($link,$output_section_sk);
        $rows_section_sk = mysqli_affected_rows($link);
        
        @$output_section_ain = "SELECT * FROM `LittlePaper`.`Data` WHERE
        (motorcycle_type LIKE '$motorcycle_type_c[0]'
         OR motorcycle_type LIKE '$motorcycle_type_c[1]')
        AND section LIKE '$section_c[6]'
        AND (sort LIKE '$sort_c[0]'
             OR sort LIKE '$sort_c[1]'
             OR sort LIKE '$sort_c[2]'
             OR sort LIKE '$sort_c[3]'
             OR sort LIKE '$sort_c[4]'
             OR sort LIKE '$sort_c[5]'
             OR sort LIKE '$sort_c[6]'
             OR sort LIKE '$sort_c[7]'
             OR sort LIKE '$sort_c[8]'
             OR sort LIKE '$sort_c[9]'
             OR sort LIKE '$sort_c[10]'
             OR sort LIKE '$sort_c[11]'
             OR sort LIKE '$sort_c[12]'
             OR sort LIKE '$sort_c[13]'
             OR sort LIKE '$sort_c[14]'
             OR sort LIKE '$sort_c[15]')
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_section_ain = mysqli_query($link,$output_section_ain);
        $rows_section_ain = mysqli_affected_rows($link);
    }
    
    //设备显示数据
    if ($view == 'sort'){
        @$output_sort_0 = "SELECT * FROM `LittlePaper`.`Data` 
        (motorcycle_type LIKE '$motorcycle_type_c[0]'
         OR motorcycle_type LIKE '$motorcycle_type_c[1]')
        AND (section LIKE '$section_c[0]'
             OR section LIKE '$section_c[1]'
             OR section LIKE '$section_c[2]'
             OR section LIKE '$section_c[3]'
             OR section LIKE '$section_c[4]'
             OR section LIKE '$section_c[5]'
             OR section LIKE '$section_c[6]')
        AND sort LIKE '$sort_c[0]'
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_sort_0 = mysqli_query($link,$output_sort_0);
        $rows_sort_0 = mysqli_affected_rows($link);
        
        @$output_sort_1 = "SELECT * FROM `LittlePaper`.`Data` WHERE 
        (motorcycle_type LIKE '$motorcycle_type_c[0]'
         OR motorcycle_type LIKE '$motorcycle_type_c[1]')
        AND (section LIKE '$section_c[0]'
             OR section LIKE '$section_c[1]'
             OR section LIKE '$section_c[2]'
             OR section LIKE '$section_c[3]'
             OR section LIKE '$section_c[4]'
             OR section LIKE '$section_c[5]'
             OR section LIKE '$section_c[6]')
        AND sort LIKE '$sort_c[1]'
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_sort_1 = mysqli_query($link,$output_sort_1);
        $rows_sort_1 = mysqli_affected_rows($link);
        
        @$output_sort_2 = "SELECT * FROM `LittlePaper`.`Data` WHERE 
        (motorcycle_type LIKE '$motorcycle_type_c[0]'
         OR motorcycle_type LIKE '$motorcycle_type_c[1]')
        AND (section LIKE '$section_c[0]'
             OR section LIKE '$section_c[1]'
             OR section LIKE '$section_c[2]'
             OR section LIKE '$section_c[3]'
             OR section LIKE '$section_c[4]'
             OR section LIKE '$section_c[5]'
             OR section LIKE '$section_c[6]')
        AND sort LIKE '$sort_c[2]'
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_sort_2 = mysqli_query($link,$output_sort_2);
        $rows_sort_2 = mysqli_affected_rows($link);
        
        @$output_sort_3 = "SELECT * FROM `LittlePaper`.`Data` WHERE 
        (motorcycle_type LIKE '$motorcycle_type_c[0]'
         OR motorcycle_type LIKE '$motorcycle_type_c[1]')
        AND (section LIKE '$section_c[0]'
             OR section LIKE '$section_c[1]'
             OR section LIKE '$section_c[2]'
             OR section LIKE '$section_c[3]'
             OR section LIKE '$section_c[4]'
             OR section LIKE '$section_c[5]'
             OR section LIKE '$section_c[6]')
        AND sort LIKE '$sort_c[3]'
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_sort_3 = mysqli_query($link,$output_sort_3);
        $rows_sort_3 = mysqli_affected_rows($link);
        
        @$output_sort_4 = "SELECT * FROM `LittlePaper`.`Data` WHERE 
        (motorcycle_type LIKE '$motorcycle_type_c[0]'
         OR motorcycle_type LIKE '$motorcycle_type_c[1]')
        AND (section LIKE '$section_c[0]'
             OR section LIKE '$section_c[1]'
             OR section LIKE '$section_c[2]'
             OR section LIKE '$section_c[3]'
             OR section LIKE '$section_c[4]'
             OR section LIKE '$section_c[5]'
             OR section LIKE '$section_c[6]')
        AND sort LIKE '$sort_c[4]'
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_sort_4 = mysqli_query($link,$output_sort_4);
        $rows_sort_4 = mysqli_affected_rows($link);
        
        @$output_sort_5 = "SELECT * FROM `LittlePaper`.`Data` WHERE 
        (motorcycle_type LIKE '$motorcycle_type_c[0]'
         OR motorcycle_type LIKE '$motorcycle_type_c[1]')
        AND (section LIKE '$section_c[0]'
             OR section LIKE '$section_c[1]'
             OR section LIKE '$section_c[2]'
             OR section LIKE '$section_c[3]'
             OR section LIKE '$section_c[4]'
             OR section LIKE '$section_c[5]'
             OR section LIKE '$section_c[6]')
        AND sort LIKE '$sort_c[5]'
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_sort_5 = mysqli_query($link,$output_sort_5);
        $rows_sort_5 = mysqli_affected_rows($link);
        
        @$output_sort_6 = "SELECT * FROM `LittlePaper`.`Data` WHERE 
        (motorcycle_type LIKE '$motorcycle_type_c[0]'
         OR motorcycle_type LIKE '$motorcycle_type_c[1]')
        AND (section LIKE '$section_c[0]'
             OR section LIKE '$section_c[1]'
             OR section LIKE '$section_c[2]'
             OR section LIKE '$section_c[3]'
             OR section LIKE '$section_c[4]'
             OR section LIKE '$section_c[5]'
             OR section LIKE '$section_c[6]')
        AND sort LIKE '$sort_c[6]'
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_sort_6 = mysqli_query($link,$output_sort_6);
        $rows_sort_6 = mysqli_affected_rows($link);
        
        @$output_sort_7 = "SELECT * FROM `LittlePaper`.`Data` WHERE 
        (motorcycle_type LIKE '$motorcycle_type_c[0]'
         OR motorcycle_type LIKE '$motorcycle_type_c[1]')
        AND (section LIKE '$section_c[0]'
             OR section LIKE '$section_c[1]'
             OR section LIKE '$section_c[2]'
             OR section LIKE '$section_c[3]'
             OR section LIKE '$section_c[4]'
             OR section LIKE '$section_c[5]'
             OR section LIKE '$section_c[6]')
        AND sort LIKE '$sort_c[7]'
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_sort_7 = mysqli_query($link,$output_sort_7);
        $rows_sort_7 = mysqli_affected_rows($link);
        
        @$output_sort_8 = "SELECT * FROM `LittlePaper`.`Data` WHERE 
        (motorcycle_type LIKE '$motorcycle_type_c[0]'
         OR motorcycle_type LIKE '$motorcycle_type_c[1]')
        AND (section LIKE '$section_c[0]'
             OR section LIKE '$section_c[1]'
             OR section LIKE '$section_c[2]'
             OR section LIKE '$section_c[3]'
             OR section LIKE '$section_c[4]'
             OR section LIKE '$section_c[5]'
             OR section LIKE '$section_c[6]')
        AND sort LIKE '$sort_c[8]'
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_sort_8 = mysqli_query($link,$output_sort_8);
        $rows_sort_8 = mysqli_affected_rows($link);
        
        @$output_sort_9 = "SELECT * FROM `LittlePaper`.`Data` WHERE 
        (motorcycle_type LIKE '$motorcycle_type_c[0]'
         OR motorcycle_type LIKE '$motorcycle_type_c[1]')
        AND (section LIKE '$section_c[0]'
             OR section LIKE '$section_c[1]'
             OR section LIKE '$section_c[2]'
             OR section LIKE '$section_c[3]'
             OR section LIKE '$section_c[4]'
             OR section LIKE '$section_c[5]'
             OR section LIKE '$section_c[6]')
        AND sort LIKE '$sort_c[9]'
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_sort_9 = mysqli_query($link,$output_sort_9);
        $rows_sort_9 = mysqli_affected_rows($link);
        
        @$output_sort_10 = "SELECT * FROM `LittlePaper`.`Data` WHERE 
        (motorcycle_type LIKE '$motorcycle_type_c[0]'
        OR motorcycle_type LIKE '$motorcycle_type_c[1]')
        AND (section LIKE '$section_c[0]'
             OR section LIKE '$section_c[1]'
             OR section LIKE '$section_c[2]'
             OR section LIKE '$section_c[3]'
             OR section LIKE '$section_c[4]'
             OR section LIKE '$section_c[5]'
             OR section LIKE '$section_c[6]')
        AND  sort LIKE '$sort_c[10]'
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_sort_10 = mysqli_query($link,$output_sort_10);
        $rows_sort_10 = mysqli_affected_rows($link);
        
        @$output_sort_11 = "SELECT * FROM `LittlePaper`.`Data` WHERE 
        (motorcycle_type LIKE '$motorcycle_type_c[0]'
         OR motorcycle_type LIKE '$motorcycle_type_c[1]')
        AND (section LIKE '$section_c[0]'
             OR section LIKE '$section_c[1]'
             OR section LIKE '$section_c[2]'
             OR section LIKE '$section_c[3]'
             OR section LIKE '$section_c[4]'
             OR section LIKE '$section_c[5]'
             OR section LIKE '$section_c[6]')
        AND sort LIKE '$sort_c[11]'
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_sort_11 = mysqli_query($link,$output_sort_11);
        $rows_sort_11 = mysqli_affected_rows($link);
        
        @$output_sort_12 = "SELECT * FROM `LittlePaper`.`Data` WHERE 
        (motorcycle_type LIKE '$motorcycle_type_c[0]'
         OR motorcycle_type LIKE '$motorcycle_type_c[1]')
        AND (section LIKE '$section_c[0]'
             OR section LIKE '$section_c[1]'
             OR section LIKE '$section_c[2]'
             OR section LIKE '$section_c[3]'
             OR section LIKE '$section_c[4]'
             OR section LIKE '$section_c[5]'
             OR section LIKE '$section_c[6]')
        AND sort LIKE '$sort_c[12]'
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_sort_12 = mysqli_query($link,$output_sort_12);
        $rows_sort_12 = mysqli_affected_rows($link);
        
        @$output_sort_13 = "SELECT * FROM `LittlePaper`.`Data` WHERE 
        (motorcycle_type LIKE '$motorcycle_type_c[0]'
         OR motorcycle_type LIKE '$motorcycle_type_c[1]')
        AND (section LIKE '$section_c[0]'
             OR section LIKE '$section_c[1]'
             OR section LIKE '$section_c[2]'
             OR section LIKE '$section_c[3]'
             OR section LIKE '$section_c[4]'
             OR section LIKE '$section_c[5]'
             OR section LIKE '$section_c[6]')
        AND sort LIKE '$sort_c[13]'
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_sort_13 = mysqli_query($link,$output_sort_13);
        $rows_sort_13 = mysqli_affected_rows($link);
        
        @$output_sort_14 = "SELECT * FROM `LittlePaper`.`Data` WHERE 
        (motorcycle_type LIKE '$motorcycle_type_c[0]'
         OR motorcycle_type LIKE '$motorcycle_type_c[1]')
        AND (section LIKE '$section_c[0]'
             OR section LIKE '$section_c[1]'
             OR section LIKE '$section_c[2]'
             OR section LIKE '$section_c[3]'
             OR section LIKE '$section_c[4]'
             OR section LIKE '$section_c[5]'
             OR section LIKE '$section_c[6]')
        AND sort LIKE '$sort_c[14]'
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_sort_14 = mysqli_query($link,$output_sort_14);
        $rows_sort_14 = mysqli_affected_rows($link);
        
        @$output_sort_15 = "SELECT * FROM `LittlePaper`.`Data` WHERE 
        (motorcycle_type LIKE '$motorcycle_type_c[0]'
         OR motorcycle_type LIKE '$motorcycle_type_c[1]')
        AND (section LIKE '$section_c[0]'
             OR section LIKE '$section_c[1]'
             OR section LIKE '$section_c[2]'
             OR section LIKE '$section_c[3]'
             OR section LIKE '$section_c[4]'
             OR section LIKE '$section_c[5]'
             OR section LIKE '$section_c[6]')
        AND sort LIKE '$sort_c[15]'
        AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
             AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
             AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
        AND (fault_phenomenon LIKE '%$key_word%'
             OR process LIKE '%$key_word%'
             OR cause LIKE '%$key_word%')
        AND (person LIKE '%$person_c%'
             OR person_1 LIKE '%$person_c%'
             OR person_2 LIKE '%$person_c%'
             OR person_3 LIKE '%$person_c%'
             OR person_4 LIKE '%$person_c%'
             OR person_5 LIKE '%$person_c%')";
        $result_sort_15 = mysqli_query($link,$output_sort_15);
        $rows_sort_15 = mysqli_affected_rows($link);
    }
    
    //查询总数，调用了不存在数组的下标，有notice错误，用@屏蔽
    @$output_all = "SELECT
    *
    FROM
    `LittlePaper`.`Data`
    WHERE
    (motorcycle_type LIKE '$motorcycle_type_c[0]'
     OR motorcycle_type LIKE '$motorcycle_type_c[1]')
    AND (section LIKE '$section_c[0]'
         OR section LIKE '$section_c[1]'
         OR section LIKE '$section_c[2]'
         OR section LIKE '$section_c[3]'
         OR section LIKE '$section_c[4]'
         OR section LIKE '$section_c[5]'
         OR section LIKE '$section_c[6]')
    AND (sort LIKE '$sort_c[0]'
         OR sort LIKE '$sort_c[1]'
         OR sort LIKE '$sort_c[2]'
         OR sort LIKE '$sort_c[3]'
         OR sort LIKE '$sort_c[4]'
         OR sort LIKE '$sort_c[5]'
         OR sort LIKE '$sort_c[6]'
         OR sort LIKE '$sort_c[7]'
         OR sort LIKE '$sort_c[8]'
         OR sort LIKE '$sort_c[9]'
         OR sort LIKE '$sort_c[10]'
         OR sort LIKE '$sort_c[11]'
         OR sort LIKE '$sort_c[12]'
         OR sort LIKE '$sort_c[13]'
         OR sort LIKE '$sort_c[14]'
         OR sort LIKE '$sort_c[15]')
    AND (DATE_FORMAT(downtime, '%Y') LIKE '%$downtime_y_c%'
         AND DATE_FORMAT(downtime, '%m') LIKE '%$downtime_m_c%'
         AND DATE_FORMAT(downtime, '%d') LIKE '%$downtime_d_c%')
    AND (fault_phenomenon LIKE '%$key_word%'
         OR process LIKE '%$key_word%'
         OR cause LIKE '%$key_word%')
    AND (person LIKE '%$person_c%'
         OR person_1 LIKE '%$person_c%'
         OR person_2 LIKE '%$person_c%'
         OR person_3 LIKE '%$person_c%'
         OR person_4 LIKE '%$person_c%'
         OR person_5 LIKE '%$person_c%')";
    $result = mysqli_query($link,$output_all);
    $rows_all = mysqli_affected_rows($link);//行
    $colums = mysqli_num_fields($result);//列
?>
