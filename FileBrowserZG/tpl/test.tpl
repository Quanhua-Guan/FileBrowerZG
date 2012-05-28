<table align="center" border="1" width="800">
	<caption><h1>SHOPS <{nocache}><{$date}><{/nocache}></h1></caption>
	<tr>
		<th>编号</th>
		<th>名称</th>
		<th>价格</th>
	</tr>
	<{section loop=$data name="ls"}>	
		<tr>
			<td align='center'><{$data[ls].id}></td>
			<td align='center'><{$data[ls].name}></td>
			<td align='center'><{$data[ls].price}></td>
		</tr>
	<{sectionelse}>
		<tr><td colspan="3">没有商品</td></tr>
	<{/section}> 
		<tr>
			<td colspan="3" align="right"><{$fpage}></td>
		</tr>
</table>

