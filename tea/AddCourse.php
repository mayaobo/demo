<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
if(! isset($_SESSION["username"])){
	header("Location:..//login.php");
	exit();
	}else if($_SESSION["role"]<>"teacher"){
		header("Location:..//login.php");
		exit();
		}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加课程</title>
</head>

<body>
<center>
 <table align="center">
     <tr>
        <td>
           <a href="showcourse.php">浏览课程</a>
        </td>
         <td>
           <a href="../stu/SearchCourse.php">查询课程</a>
        </td>
         <td>
           <a href="AddCourse.php">添加课程</a>
        </td>
         <td>
           <a href="../logout.php">退出系统</a>
        </td>
     </tr>
</table><br>
请输入课程信息
<form method="post" action="AddCourse1.php" enctype="multipart/fromdata">
<table>
<tr>
<td>编号</td>
<?php
include("../conn/db_conn.php");
include("../conn/db_func.php");
$StuNo=$_SESSION['username'];
$ShowCourse_sql="select * from course order by CouNo desc";
$ShowCourseResult=db_query($ShowCourse_sql);
$row=db_fetch_array($ShowCourseResult);
$CouNo='0'. strval(intval($row['CouNo'])+1);
?>
<td><input name="CouNo" type="text" value="<?php echo $CouNo?>" size="3"></td>
</tr>
<tr>
<td>名称</td>
<td><input type="text" name="CouName" size="30"></td>
</tr>
<tr>
<td>类型</td>
<td>
  <select name="Kind">
     <option value="信息技术">信息技术</option>
     <option value="工程技术">工程技术</option>
     <option value="人文">人文</option>
     <option value="管理">管理</option>
  </select>
</td>
</tr>
<tr>
<td>学分</td>
<td><input type="text" name="Credit" size="2" /></td>
</tr>
<tr>
<td>教师</td>
<td><input type="text" name="Teacher" size="20" /></td>
</tr>
<tr>
<td>上课时间</td>
<td>
  <select name="SchoolTime">
     <option value="周一第一节">周一第一节</option>
     <option value="周一第二节">周一第二节</option>
     <option value="周一第三节">周一第三节</option>
     <option value="周一第四节">周一第四节</option>
     <option value="周一第五节">周一第五节</option>
     <option value="周二第一节">周二第一节</option>
     <option value="周二第二节">周二第二节</option>
     <option value="周二第三节">周二第三节</option>
     <option value="周二第四节">周二第四节</option>
     <option value="周二第五节">周二第五节</option>
     <option value="周三第一节">周三第一节</option>
     <option value="周三第二节">周三第二节</option>
     <option value="周三第三节">周三第三节</option>
     <option value="周三第四节">周三第四节</option>
     <option value="周三第五节">周三第五节</option>
     <option value="周四第一节">周四第一节</option>
     <option value="周四第二节">周四第二节</option>
     <option value="周四第三节">周四第三节</option>
     <option value="周四第四节">周四第四节</option>
     <option value="周四第五节">周四第五节</option>
     <option value="周五第一节">周五第一节</option>
     <option value="周五第二节">周五第二节</option>
     <option value="周五第三节">周五第三节</option>
     <option value="周五第四节">周五第四节</option>
     <option value="周五第五节">周五第五节</option>
     <option value="周末还有课">周末还有课</option>
  </select>
</td>
</tr>
<tr>
<td>限定人数</td>
<td><input type="text" name="LimitNum" size="20" /></td>
</tr>

</table>
<input type="submit" value="确定" name="B1">
<input type="reset" value="重置" name="B2">
</form>
</center>
</body>
</html>