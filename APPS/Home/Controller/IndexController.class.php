<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	//获取时间
    	$dateGet = I('get.date',null);
    	if($dateGet == null){
    		$dateGet = date("Y-m-d");
    	}

    	$date = date("Y-m-d",strtotime($dateGet));
    	
    	$year = date("Y",strtotime($date));
    	$month = date("m",strtotime($date));
    	//当月最后一天
    	$lastday = date("t",strtotime($date));
    	//当月第一天
    	$firstday = date("Y-m-01",strtotime($date));
    	//当月第一天星期
    	$week = date("w",strtotime($firstday));
    	//上个月和下个月
    	$premonth = date("Y-m-d",strtotime("-1 month",strtotime($date)));
    	$nextmonth = date("Y-m-d",strtotime("+1 month",strtotime($date)));

    	//循环输入日历数组
    	$total = 1 - $week;
    	for($i=1;$total<=31;$i++){
    		for($j=1;$j<=7;$j++){
    			if($total <= 31){
    				if($total <= 0){
    					$arr[$i][$j]="";
    				}else{
    					$arr[$i][$j]=$total;
    				}
    			}else{
    				$arr[$i][$j]="";
    			}
    			$total++;
    		}
    	}
    	//输出
    	$this -> arr = $arr;
    	$this -> year = $year;
    	$this -> month = $month;
    	$this -> premonth = $premonth;
    	$this -> nextmonth = $nextmonth;

    	$this -> display();
    }

    //文峰视听css
    public function index1(){
        $this -> display();
    }

    //文峰视听bootstrap
    public function index3(){
        $this -> display();
    }
}