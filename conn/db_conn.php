<?php
	$DB_HOST	= "localhost";	  //���ݿ�����λ��
	$DB_LOGIN	= "root";	  //���ݿ��ʹ���˺�
	$DB_PASSWORD	= "xinguan1503";	  //���ݿ��ʹ������
	$DB_NAME	= "xk1";           //���ݿ�����

	$conn = mysql_connect($DB_HOST, $DB_LOGIN, $DB_PASSWORD);
	mysql_select_db($DB_NAME);
        mysql_query("SET NAMES UTF8");	
?>