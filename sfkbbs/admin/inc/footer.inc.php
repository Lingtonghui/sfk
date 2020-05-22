





<div id="sidebar">
		<ul>
			<li>
				<div class="small_title">系统</div>
				<ul class="child">
					<li><a class="current" href="#">系统信息</a></li>
					<li><a href="#">管理员</a></li>
					<li><a href="#">添加管理员</a></li>
					<li><a href="#">站点设置</a></li>
				</ul>
			</li>
			<li><!--  class="current" -->
				<div class="small_title">内容管理</div>
				<ul class="child">
					<li><a <?php  if(basename($_SERVER['SCRIPT_NAME'])=="father_module.php"){
						echo 'class="current"';
					} ?> href="father_module.php">父板块列表</a></li>
					<li><a  <?php  if(basename($_SERVER['SCRIPT_NAME'])=="father_module_add.php"){
						echo 'class="current"';
					} ?>   href="father_module_add.php">添加父板块</a></li>
					 <?php  if(basename($_SERVER['SCRIPT_NAME'])=="father_module_update.php"){
						echo '<li><a class="current" href="#">编辑父版块</a></li>';
					} ?> 
					<li><a href="#">子板块列表</a></li>
					
					<li><a  <?php  if(basename($_SERVER['SCRIPT_NAME'])=="son_module_add.php"){
						echo 'class="current"';
					} ?>   href="son_module_add.php">添加子板块</a></li>
					
					<li><a href="#">帖子管理</a></li>
				</ul>
			</li>
			<li>
				<div class="small_title">用户管理</div>
				<ul class="child">
					<li><a href="#">用户列表</a></li>
				</ul>
			</li>
		</ul>
	</div>



</body>
</html>