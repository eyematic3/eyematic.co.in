<!DOCTYPE html>
<html>
<body>
<?php echo phpversion(); 
      echo "Hellow world<br>";
      ECHO "Hellow world<br>";
      Echo "Hellow world<br>";
?>
<?php 
     $color="blue";
     echo "My book cover color is ".$color."<br>";
     echo "My book cover color is ".$Color."<br>";
     echo "My book cover color is ".$COLOR."<br>";
     
     // this is single line comment.
     # this is also single line comment.
     /*
      this is multiline comments.
      */
     $name ="Karishma";
     echo "My name is ".$name."<br>"
?>
<?php 
   $w = 7;
   var_dump($w);
   var_dump($color);
   var_dump(false);
   var_dump("john");
   var_dump(4);
   var_dump([3,4,3,2,4]);
   var_dump(3.14);
   
   $x = "john";
   echo $x;
   $a=$b=$c=4;
   echo $a;
   echo $b; 
   echo $c;
?>
<?php 
  /*$s=7;
  $e=6;
  $y;
  function myTest(){
      
      global $s,$e,$y;
      $y = $s + $e;
  }
      myTest();
      echo  "the value is ".$y."";
  ?>*/
  
      
   /*   $t=4;
      $q=5;
      $y;
      function myTest(){
          $GLOBALS['y']=$GLOBALS['t']+$GLOBALS['q'];
      }
      myTest();
      echo $y;*/
    function myTest(){
               static $x=5;
               echo $x;
               $x++;
           }
            myTest();
            myTest();
            myTest();
            myTest();
            myTest();
            
       $txt = "learn PHP";
       $txt2 = "w3school.com";
       echo '<h1>' .$txt. '</h2>';
       echo '<p> Study PHP at'.$txt2. '</p>';
       print "Hello";
       print("Hellow");
       print "<h2>PHP is Fun!</h2>";
       print "Hellow World";
       print "I'm about to learn PHP!";
       
       $x = 4;
       var_dump($x);
       
       $x = "rohan";
       $y = 'preeta';
       
       var_dump($x);
       echo "<br>";
       var_dump($y);
       $f = 5678;
       var_dump($f);
       $d = 4.45;
       var_dump($d);
       $s = true;
       var_dump($s);
       $cars = array("volvo","BMW","Audi");
       var_dump($cars);
       $x = "HEllo world";
       $x;
       var_dump($x);
       $x = 5;
       var_dump($x);
       $x = "Hellow";
       var_dump($x);
       $x = 5;
       $x = (string) $x;
       var_dump($x);
    ?>
    
<?php 
 $x = "john";
 echo "Hellow $x";
 echo strlen($x);
 echo strlen("karishma");
 echo strlen("wellbeing");
 echo strlen("kuttakamina");
 echo "I am not happy";
 echo 'I am happy';
 $y = "john";
 echo 'hello $y';
 echo "Hello $y";
 echo strlen($y);
 echo strlen("karishma");
 echo str_word_count("hello world");
 echo str_word_count("i am cuttipie");
 echo str_word_count("i am learning Hypertext prepocessor");
 echo str_word_count("I am not learning javascript and sql");
 echo strpos("Hello world!","world");
 echo strpos("how to start finding a job on the basis of front end development", "basis");
 echo strtoupper($x);
 echo strtoupper("hello");
 echo strtoupper("baitad");
 echo strtoupper("murkh");
 $u = "world";
 echo strtoupper($u);
 echo strlen($u);
 echo strpos($u,"world");
 echo str_word_count($u);
 echo strtoupper($u);
 echo strtolower($u);
 echo strtolower("BOOTSTRAP");
 echo strtolower("RAYMOND");
 echo strtolower("TOYOTO");
 echo strtolower("I LOVE MY FAMILY");
 $x = "Hello world";
 echo str_replace("world","dolly",$x);
 echo str_replace("Hello","hii",$x);
 echo str_replace("world","karishma",$x);
 echo str_replace("world","hongkong",$x);
 echo str_replace("world","china",$x);
 echo str_replace("world","siya",$x);
 echo str_replace("php","java","i am learning php");
 $y="i am learning php";
 echo str_replace("php","javascript",$y);
 $w = " i like to go singapore";
 echo str_replace("singapore","switzerland",$w);
 echo str_replace("singapore","london",$w);
 echo strrev($w);
 echo strrev("America");
 echo strrev("i am living in pune");
 echo strrev("i am not that much good in coding");
 echo strrev("i like to go goa");
 echo strrev("we are 3 sisters");
 echo trim(" Hellow world ");
 echo trim(" such a nonsense guy "); 
 echo trim(" tum hai to kya gum hai ");
 $w = " we are fine ";
 echo trim($w);
 echo trim(" i love india ");
 $d = "I am not ugly";
 $y = explode(" ", $d);
 print_r($y);
 $y = explode("not",$d);
 print_r($y);
 $x = "i am";
 $y = "beautiful";
 $z = $x . $y;
 echo ($z);
 echo "city"."vista";
 echo "new"."delhi";
 echo "new"."zealand";
 echo "I am"."happy";
 echo "zero"."balance";
 echo "south"."africa";
 echo "so"."beautiful";
 echo "meri"." "."aai";
 echo "mine"." "."husband";
 echo "$x $y";
 echo "main hoo na";
 $x = "Hellow world";
 echo substr($x , 4 ,3);
 echo substr("india",0);
 echo substr("switzerland",3);
 echo substr($x,4);
 echo substr("ndkjfjkfn",8);
?>
</body>
</html>