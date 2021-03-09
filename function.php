
<?
    class test_sp{
        // ข้อ 1.1
        public function loop_app_1_1(){
            for ($i=1; $i<=5; $i++)  
            {
                for($k=5; $k>=1; $k--)
                {
                    if($k>$i){
                        echo '&nbsp;&nbsp;';
                    }
                    else{
                        echo "o";
                    }
                    if($k==1){
                        echo "<br>\r";
                    }
                }  
            }
        }
        // ข้อ 1.2
        public function loop_app_1_2(){
            $m=1;
            for($i=1; $i<=5; $i++) {
                for($j=$i; $j<=4; $j++) {
                    echo "&nbsp;&nbsp;";
                }
                for($k=1; $k<=$m; $k++)  {
                    echo "o";
                }
                for($c=$m; $c>1; $c--) {
                    echo "o";
                }
                echo "<br>";
                $m++;
            }
        }
        // ข้อ 2.1
        public function cal_salary($salary){
            if($salary<10000){
                $salary = $salary +200;
            }
            elseif($salary<11000){
                $salary +=200;
            }
            elseif($salary<12000){
                $salary +=300;
            }
            echo $salary;
        }
        // ข้อ 2.2.1
        public function shortif(){
            $bath = 100;
            echo ($bath==300?"300":"200");
        }
        // ข้อ 2.2.2
        public function score_age(){
            $score = 9; $age =10;
            echo "You Score is : ".$score >10 
            ?($age>10 ?"Average" : "Exception")
            :($age>10 ?"Horrible" : "Average");
        }
        // ข้อ 3.1
        public function foreachs(){
            
            $data = array(
                10000=>15000,
                15000=>20000,
                "sarary"=>3000
            );
            $app = new test_sp;
            foreach($data as $item){
                $app->cal_salary($item);
                echo "<br>";
            }
        }
        // ข้อ 3.2.1
        public function Multidimensional_array(){
            $marks =array( 
                "mohammad"=>array(
                "physics"=>35, 
                "maths"=>30,
                "chemistry"=>39 
            ),
                "qadir"=>array(
                "physics"=>30, 
                "maths"=>32, 
                "chemistry"=>29
            ), 
                "zara"=>array(
                "physics"=>31, "maths"=>22, "chemistry"=>39
            ) 
        );
        echo($marks['mohammad']['physics']);
        }
        // ข้อ 3.2.2
        public function Multidimensional_array_feth(){
            $marks =array( 
                "mohammad"=>array(
                "physics"=>35, 
                "maths"=>30,
                "chemistry"=>39 
            ),
                "qadir"=>array(
                "physics"=>30, 
                "maths"=>32, 
                "chemistry"=>29
            ), 
                "zara"=>array(
                "physics"=>31, "maths"=>22, "chemistry"=>39
            ) 
        );
        foreach( $marks as $items){
           foreach($items as $item){
                echo($item)."<br>";
            }
           }
        }
        
    }
    echo "1. (ทดสอบ Loop) จงเขียนโปรแกรมให้ แสดงดังภาพต่อไปนี้ (ใชภ้ าษา PHP และวงกลม คือตัวอักษร O )<br>";
    $app = new test_sp;
    echo "ข้อ  1.1<br>";
    $app->loop_app_1_1();
    echo "<br>";
    echo "ข้อ  1.2<br>";
    $app->loop_app_1_2();
    echo "<br>";
    echo "2. (ทดสอบความเข้าใจ if, else)<br>";
    echo "ข้อ  2.1<br>";
    $app->cal_salary(10000);
    echo "<br>";
    echo "ข้อ 2.2.1<br>";
    $app->shortif();
    echo "<br>";
    echo "ข้อ 2.2.2<br>";
    $app->score_age();
    echo "<br>";
    echo "ข้อ 3 (ทดสอบ foreach) <br>";
    echo "ข้อ 3.1<br>";
    $app->foreachs();
    echo "<br>";
    echo "ข้อ 3.2 (ทดสอบ อาร์เรย์หลายมิติ Multidimensional array)<br>";
    echo "ข้อ 3.2.1 <br>";
    $app->Multidimensional_array();
    echo "<br>";
    echo "ข้อ 3.2.2 <br>";
    $app->Multidimensional_array_feth();
    echo "<br>";
?>