@extends('guest.elements.master')

@section('title')
	BKTECH - Thế Giới Công Nghệ
@endsection

@section('main')
	<center>
		<br>
	<h1>Thanh Toán Thành Công</h1>
</center>



<center>
<table id="background-image" summary="Meeting Results">
	<thead>
		<tr>
			<th scope="col">Thông Tin</th>
			<th scope="col">Giá Trị</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td align="center" colspan="4"></td>
		</tr>
	</tfoot>
	<tbody>
		
		<tr>
			<td><strong><i>Mã Đặt Hàng</i></strong></td>
			<td>Order01</td>
		</tr>
		<tr>
			<td><strong><i>Tổng Tiền</i></strong></td>
			<td>100VND</td>
		</tr>
		
		<tr>
			<td><strong><i>Trạng Thái Giao Dịch</i></strong></td>
			
			<td>Thành Công</td>
		</tr>
		<tr>
			<td><strong><i>Message</i></strong></td>
			
			<td></td>
		</tr>   
	</tbody>
</table>
</center>
<style type="text/css">
<!--
h1 {
	font-family: Arial, sans-serif;
	font-size: 24pt;
	color: #08185A;
	font-weight: 100
}

h2.co {
	font-family: Arial, sans-serif;
	font-size: 24pt;
	color: #08185A;
	margin-top: 0.1em;
	margin-bottom: 0.1em;
	font-weight: 100
}

h3.co {
	font-family: Arial, sans-serif;
	font-size: 16pt;
	color: #000000;
	margin-top: 0.1em;
	margin-bottom: 0.1em;
	font-weight: 100
}

body {
	font-family: Verdana, Arial, sans-serif;
	font-size: 10pt;
	color: #08185A background-color : #FFFFFF
}

a:link {
	font-family: Verdana, Arial, sans-serif;
	font-size: 8pt;
	color: #08185A
}

a:visited {
	font-family: Verdana, Arial, sans-serif;
	font-size: 8pt;
	color: #08185A
}

a:hover {
	font-family: Verdana, Arial, sans-serif;
	font-size: 8pt;
	color: #FF0000
}

a:active {
	font-family: Verdana, Arial, sans-serif;
	font-size: 8pt;
	color: #FF0000
}


tr.title {
	height: 25px;
	background-color: #0074C4
}

td {
	font-family: Verdana, Arial, sans-serif;
	font-size: 8pt;
	color: #08185A
}

th {
	font-family: Verdana, Arial, sans-serif;
	font-size: 10pt;
	color: #08185A;
	font-weight: bold;
	background-color: #d70018;
	padding-top: 0.5em;
	padding-bottom: 0.5em
}

input {
	font-family: Verdana, Arial, sans-serif;
	font-size: 8pt;
	color: #08185A;
	background-color: #CED7EF;
	font-weight: bold
}



#background-image {
	font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
	font-size: 12px;
	width: 80%;
	text-align: left;
	border-collapse: collapse;
	background: url("...") 330px 59px no-repeat;
	margin: 20px;
}

#background-image th {
	font-weight: normal;
	font-size: 14px;
	color: #fff;
	padding: 12px;
}

#background-image td {
	color: #252122;
	border-top: 1px solid #fff;
	padding: 9px 12px;
}

#background-image tfoot td {
	font-size: 11px;
}

#background-image tbody td {
	background: url("./back.png");
}

* html 
#background-image tbody td {
	filter: progid : DXImageTransform.Microsoft.AlphaImageLoader ( src =
		'table-images/back.png', sizingMethod = 'crop' );
	background: none;
}

#background-image tbody tr:hover td {
	color: #d70018;
	background: none;
}
-->
</style>
@endsection