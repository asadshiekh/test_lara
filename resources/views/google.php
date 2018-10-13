<!DOCTYPE html>
<html>
<head>
	<title>google</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		table{
	border:solid 1px #E4E3E3;
	width: 800px;
	text-align: center;
	border-collapse: collapse;
	margin-left: 250px;
	margin-top:180px; 

}
table tr, table td{
	border-bottom: solid 1px #E4E3E3;


}
table tr{
	 box-shadow:0px #E4E3E3 0px 0px ;
}
table thead tr th,table tbody tr td,table tfoot tr td{
	padding: 10px;
}
table tfoot tr td{
	text-align: right;
	font-style: italic;
	font-size: 12px;
}
table tr:nth-child(even){
	background-color:#F1EFEF;
}
table tr td:first-child{
	text-align: right;
	padding: 5px;
}
table tbody tr td{
	font-family: italic;
}
table tbody tr:last-child{
	background-color:#F1EFEF;
}
table thead th{
	font-style:normal;
	text-align: center;
}
input{
	height: 25px;
	width: 130px;
	border-radius: 5px;
}
button{
	height:25px;
	background-color: #F1EFEF;
	margin-left: 2px;
	border-radius: 5px;
}
a{
	color: grey;
}
	</style>
</head>
<body>
     <table>
		<thead>
			<tr>
				<td colspan="4">
					<input type="text"><button type="submit">Search</button>
				</td>
			</tr>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Action</th>
				
			</tr>
		</thead>
		<tbody>
			<tr>
				 <?php foreach ($data as $value) { ?>
				<td><?php echo $value->id ?></td>
				<td><?php echo $value->name ?></td>
				<td><?php echo $value->email ?></td>
				<td><a class="glyphicon glyphicon-pencil"></a>&nbsp|&nbsp<a class="glyphicon glyphicon-trash"></a></td>
				 <?php } ?>
			</tr>
			
		</tbody>
		<tfoot>
           <tr><td colspan="4">&copy; Syeda Nayab Jaffri</td></tr>
		</tfoot>
	</table>
</body>
</html>