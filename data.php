<?php 

$prize_arr = array( 
    '0' => array('id'=>1,'min'=>1,'max'=>58,'prize'=>'基因检测','v'=>30), 
    '1' => array('id'=>2,'min'=>62,'max'=>118,'prize'=>'谢谢参与','v'=>0), 
    '2' => array('id'=>3,'min'=>122,'max'=>178,'prize'=>'高博士血压计','v'=>26), 
    '3' => array('id'=>4,'min'=>182,'max'=>238,'prize'=>'蛋壳体温贴','v'=>27), 
    '4' => array('id'=>5,'min'=>242,'max'=>298,'prize'=>'家庭医生体验卡','v'=>0), 
    '5' => array('id'=>6,'min'=>302,'max'=>358,'prize'=>'大白玩偶','v'=>0), 
);

function getRand($proArr) { 
    $result = ''; 
 
    //概率数组的总概率精度 
    $proSum = array_sum($proArr); 
 
    //概率数组循环 
    foreach ($proArr as $key => $proCur) { 
        $randNum = mt_rand(1, $proSum); 
        if ($randNum <= $proCur) { 
            $result = $key; 
            break; 
        } else { 
            $proSum -= $proCur; 
        } 
    } 
    unset ($proArr); 
 
    return $result; 
}
foreach ($prize_arr as $key => $val) { 
    $arr[$val['id']] = $val['v']; 
} 
 
$rid = getRand($arr); //根据概率获取奖项id 
$res = $prize_arr[$rid-1];//中奖项 
$min = $res['min'];
$max = $res['max'];
$result['angle'] = mt_rand($min,$max);//随机生成一个角度 
$result['prize'] = $res['prize'];
echo json_encode($result);
?>