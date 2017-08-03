
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
    $pass='Ar1989Ar';
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
        $i=1;
        echo '录入成功！你录入的内容是：','</br>','</br>',
        '车型：'.$motorcycle_type.'</br>',
        '工段：'.$section.'</br>',
        '工位：'.$station.'</br>',
        '设备类别：'.$sort.'</br>',
        '停台日期：'.$_POST['downtime_y'].'年'.$_POST['downtime_m'].'月'.$_POST['downtime_d'].'日</br>',
        '停台时间：'.$_POST['min'].'min'.'</br>',
        '故障现象：'.$_POST['fault_phenomenon'].'</br>',
        '处理过程：'.$_POST['process'].'</br>',
        '问题原因：'.$_POST['cause'].'</br>',
        '维修人员：'.$name.",".$_POST['downtime_m'].'月共计录入'.($rows[0]+$i).'条</br>';
        if($name_1)
            echo '维修人员：'.$name_1.",".$_POST['downtime_m'].'月共计录入'.($rows1[0]+$i).'条</br>';
        if($name_2)
            echo '维修人员：'.$name_2.",".$_POST['downtime_m'].'月共计录入'.($rows2[0]+$i).'条</br>';
        if($name_3)
            echo '维修人员：'.$name_3.",".$_POST['downtime_m'].'月共计录入'.($rows3[0]+$i).'条</br>';
        if($name_4)
            echo '维修人员：'.$name_4.",".$_POST['downtime_m'].'月共计录入'.($rows4[0]+$i).'条</br>';
        if($name_5)
            echo '维修人员：'.$name_5.",".$_POST['downtime_m'].'月共计录入'.($rows5[0]+$i).'条</br>';
        mysqli_free_result($result);
        mysqli_close($link);
            }
    
    //返回按钮
    echo <<<END
    </br><input type="button" style="width:100px;height:30px" value='继续录入' onclick="location.href='./littlepaper-e.html';"/></br>
    <input type="button" style="width:100px;height:30px" value='返回首页' onclick="location.href='../index.html';"/>
END;
?>
