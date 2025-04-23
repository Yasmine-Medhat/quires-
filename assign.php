<?php
$conn=mysqli_connect("localhost","root","","school");
if(!$conn){
   echo "connect error ".mysqli_connect_error($conn);
}
/* 1:
$sql="INSERT INTO `students`(name,email,password,phone,address,date_of_birth) VALUES
('yasmine','yasmine@gmail.com','123','01221212','cairo_egypt',now()),
('leyan','leyan@kids.com','123123','123234','tokyo',now()),
('lily','lily@kids.com','123123','12121212','alex',now())
";
3
$result=mysqli_query($conn,$sql);

*/

/* 2:
$sql="INSERT INTO `instructor`(name,email,password,major,salary,phone) VALUES
('zeyad','zeyad@gmail.com','123','mentor',1000,'01221212'),
('mustafa','mustafa@gmail.com','123123','cio',2000,'123234'),
('eslam','eslam@gmail.com','123123','instructor',1000,'12121212')
";

$result=mysqli_query($conn,$sql);

*/
/* 3:
$sql="UPDATE `students` SET email='lily@gmail.com' WHERE ID=3";
$result=mysqli_query($conn,$sql);
*/

/* 4:
 $sql="SELECT* FROM `students`";
 $result=mysqli_query($conn,$sql);
 $count=0;
 while($row=mysqli_fetch_assoc($result))
 $count++;
echo "total_number_of_stoudents is $count";
*/
/* 7:
$sql="INSERT INTO `course`(title,course_level,sub_title,description,instructor_id)VALUES
('back_end','advanced','php,java,nodeJS','php,dataBase,oop,laravel',2),
('front_end','bigenner','php2,java2,nodeJS2','php2,dataBase2,oop2,laravel2',2),
('front_end','bigenner','php2,java2,nodeJS2','html,css,js',1),
('cs8','advanced','php2,java2,nodeJS2','php2,dataBase2,oop2,laravel2',3)
";
$result=mysqli_query($conn,$sql);
*/ //  6:
//$sql="INSERT INTO `enrollments` (student_id,course_id)VALUES(1,2),(1,3),(2,4)";
//$result=mysqli_query($conn,$sql);
//--------------------------------------------------------
// 5:
//$sql="DELETE FROM `enrollments` WHERE student_id=1"; 
//$result=mysqli_query($conn,$sql);


//8:
/*$sql="SELECT * FROM `students` JOIN `enrollments` on
students.id=enrollments.student_id";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
   echo "<pre>";
   var_dump($row);
   echo "</pre>";
}
*/
// 9:

/*$sql="SELECT name,title FROM `course` JOIN `instructor` on
instructor.id=course.instructor_id";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res)){
   echo "<pre>";
   var_dump($row);
   echo "</pre>";
}
*/
//10
//$sql="INSERT INTO `enrollments` (student_id,course_id)VALUES(1,2),(1,3)";
//$result=mysqli_query($conn,$sql);
//$sql="INSERT INTO `enrollments` (student_id,course_id)VALUES(1,4)";
//$result=mysqli_query($conn,$sql);

//11
/*$sql="SELECT title FROM `course` JOIN `enrollments` ON
enrollments.course_id = course.id";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res)){
   echo "<pre>";
   var_dump($row);
   echo "</pre>";
}*/

//12
/*$sql="SELECT instructor_id ,name 
FROM `course` JOIN `instructor` ON(instructor.id=course.instructor_id)
GROUP BY instructor_id
HAVING COUNT(course_id) > 1";

$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res)){
   echo "<pre>";
   var_dump($row);
   echo "</pre>";}*/

 //13 
/* $sql="SELECT name FROM `instructor` JOIN `course` 
 on (instructor.id != course.instructor_id)";  
 $res=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($res)){
    echo "<pre>";
    var_dump($row);
  echo "</pre>";}  */
  //14  
  /*$sql="SELECT name,COUNT(course.id) number_of_courses FROM `instructor` JOIN `course`
  ON (instructor.id=course.instructor_id)
  GROUP BY (instructor.id)";
   $res=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_assoc($res)){
      echo "<pre>";
      var_dump($row);
    echo "</pre>";} */
    /* 15
    $sql="SELECT AVG(*) FROM `students`";
    $res=mysqli_query($conn,$sql);
   echo $res;*/
mysqli_close($conn);