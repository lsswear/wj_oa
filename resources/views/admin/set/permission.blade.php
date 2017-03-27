<style> 
	#data-table-center tr td,#data-table-center tr th{ 
		text-align:center;
	 }
</style>
<div class="ui grid"> 
	<div class="row">
		<div class="column">
			<div class="ui primary button right floated" id="add_right">
				<i class="plus icon"></i>
				添加权限
			</div>
			<h2 class="ui left floated header"> 
				权限管理
			</h2>
			<div class="ui clearing divider"></div>
			<div class="ui form">
				<div class=" inline fields"> 
					<label>权限名称</label>
					<input type="text" placeholder="中文名或方法名" name="right_name">
					<div class="ui primary button icon floated">
						<i class="search icon"></i>
					</div>
				</div>
			</div>
			<div class="ui divider"></div>
			<table class="ui four column very compact structured blue hover table" id="data-table-center">
			  	<thead>
				    <tr>
				      	<th>权限名</th>
				      	<th>路径</th>
				      	<th>状态</th>
				      	<th>操作</th>
				    </tr>
			  	</thead>
			  	<tbody>
				    <tr class="warning">
				      	<td>abc</td>
				      	<td>abc/abc/abc</td>
				      	<td>禁用</td>
				      	<td><a class="view">查看</a> <a class="edit">修改</a></td>
				    </tr>
				    <tr>
				      	<td>123</td>
				      	<td>123/123/123</td>
				      	<td>启用</td>
				      	<td><a class="view">查看</a> <a class="edit">修改</a></td>
				    </tr>
				</tbody>
				<tfoot class="full-width"> 
					<tr> 
						<th colspan="4">
							<div class="ui pagination menu">
						        <a class="icon item">
						          <i class="left chevron icon"></i>
						        </a>
						        <a class="item">1</a>
						        <a class="item">2</a>
						        <a class="item">3</a>
						        <a class="item">4</a>
						        <a class="icon item">
						          <i class="right chevron icon"></i>
						        </a>
						    </div>
						</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
<script> 
$(function(){ 
	$('#add_right').on('click',function(){ 
		$('#content').load('./set/permissionedit.blade.php');
	});
	$('.view').on('click',function(){ 
		$('#content').load('./set/permissionedit.blade.php');
	});
	$('.edit').on('click',function(){ 
		$('#content').load('./set/permissionedit.blade.php');
	});
})
</script>