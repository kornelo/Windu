<?php /* Smarty version Smarty-3.1.18, created on 2015-06-01 10:34:36
         compiled from "C:\WebServ\httpd\windu\app\plugins\admin\templates\common\conservation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20842556c191c0a0331-53433194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '931b5e992f740b26078d2cb312fc88c3dc38e3db' => 
    array (
      0 => 'C:\\WebServ\\httpd\\windu\\app\\plugins\\admin\\templates\\common\\conservation.tpl',
      1 => 1399750118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20842556c191c0a0331-53433194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOME' => 0,
    'logDB' => 0,
    'stat' => 0,
    'log' => 0,
    'cname' => 0,
    'SITE_PATH' => 0,
    'systemStatusDB' => 0,
    'backupsSize' => 0,
    'filesSize' => 0,
    'databaseSize' => 0,
    'themesSize' => 0,
    'cacheSize' => 0,
    'otherSize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_556c191c381d90_12935014',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c191c381d90_12935014')) {function content_556c191c381d90_12935014($_smarty_tpl) {?><?php if (!is_callable('smarty_function_L')) include 'C:\\WebServ\\httpd\\windu/data/functions\\function.L.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\WebServ\\httpd\\windu/app/plugins/html/smarty/plugins\\modifier.truncate.php';
?><div class="tab-menu-top">
	<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/system/system/" class="btn btn-small pull-left"><i class="fa fa-home icon-grey icon-nomargin" ></i></a>
	<h3 class="pull-left tab-title"> <?php echo smarty_function_L(array('key'=>"admin.system.tpl.system"),$_smarty_tpl);?>
</h3>	
	<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/system/vacuumSystem/" class="btn btn-warning"><?php echo smarty_function_L(array('key'=>"admin.system.tpl.systemclear"),$_smarty_tpl);?>
</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/system/cleanSystem/" class="btn btn-danger"><?php echo smarty_function_L(array('key'=>"admin.system.tpl.strongsystemclear"),$_smarty_tpl);?>
</a>
</div>	
    <div class="row-fluid">
		<div class="span2 mobileHidden">
		  	<div class="box margin-bottom align-center" style="padding-top:15px;">
	  	<div class="pad">
	  	<?php if (check::update(false,false)) {?>
	  		<i class="fa fa-exclamation-triangle fa-4x icon-yellow"></i>
			<h4><?php echo smarty_function_L(array('key'=>"admin.common.conservation.tpl.warning"),$_smarty_tpl);?>
</h4>
			<?php echo smarty_function_L(array('key'=>"admin.common.conservation.tpl.recommendact"),$_smarty_tpl);?>
<br><br>
	  		<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/update/" class="btn btn-warning btn-large"><?php echo smarty_function_L(array('key'=>"admin.system.tpl.updatesystem"),$_smarty_tpl);?>
</a>
		<?php } else { ?>
			<i class="fa fa-check fa-4x icon-green"></i>
			<h4><?php echo smarty_function_L(array('key'=>"admin.common.conservation.tpl.systemuptodate"),$_smarty_tpl);?>
</h4>
			<?php echo smarty_function_L(array('key'=>"admin.common.conservation.tpl.yoursystemuptodate"),$_smarty_tpl);?>
 <strong><?php echo config::get('revision');?>
</strong><br><br>
		<?php }?>
		</div>
	</div>	
  	<div class="box margin-bottom align-center" style="padding-top:15px;">
	  	<div class="pad">
	  	<?php if (check::widgetUpdate()) {?>
	  		<i class="fa fa-exclamation-triangle fa-4x icon-yellow"></i>
			<h4><?php echo smarty_function_L(array('key'=>"admin.common.conservation.tpl.warning"),$_smarty_tpl);?>
</h4>
			<?php echo smarty_function_L(array('key'=>"admin.common.conservation.tpl.recommendact"),$_smarty_tpl);?>
<br><br>
	  		<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/themes/updateAllWidgets/" class="btn btn-primary btn-large"><?php echo smarty_function_L(array('key'=>"admin.common.conservation.tpl.updateallwidgets"),$_smarty_tpl);?>
</a>
		<?php } else { ?>
			<i class="fa fa-check fa-4x icon-green"></i>
			<h4><?php echo smarty_function_L(array('key'=>"admin.common.conservation.tpl.widgetuptodate"),$_smarty_tpl);?>
</h4>
			<?php echo smarty_function_L(array('key'=>"admin.common.conservation.tpl.yourwidgetuptodate"),$_smarty_tpl);?>
<br><br>
		<?php }?>
		</div>
	</div>	
			
  </div>	
      	
  <div class="span5">
  	<div class="box margin-bottom">
  		<h5><i class="fa fa-exclamation-circle icon-margin icon-grey"></i> <?php echo smarty_function_L(array('key'=>"admin.system.tpl.commonsystemerrors"),$_smarty_tpl);?>
</h5>

  	
	    <script type="text/javascript">
	    
	      google.load("visualization", "1", {packages:["corechart"]});
	      $(document).ready(function() {
		      window.dataConservationLast = google.visualization.arrayToDataTable([
				  
				  ['Date', 'Logi'],
	    	      <?php  $_smarty_tpl->tpl_vars['stat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logDB']->value->fetchCountGroup("strftime('%Y%m%d', createTime)",'bucket = 99','createTime','*',30); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stat']->key => $_smarty_tpl->tpl_vars['stat']->value) {
$_smarty_tpl->tpl_vars['stat']->_loop = true;
?>
	    	      ['<?php echo $_smarty_tpl->tpl_vars['stat']->value->createTime;?>
', <?php echo $_smarty_tpl->tpl_vars['stat']->value->{"COUNT(strftime('%Y%m%d', createTime))"};?>
],
	    	      <?php } ?>
		     	  
		        ]);
		      drawLineChartMedium('chartLineStatLastConservation',window.dataConservationLast);
		  }); 
	    </script>
	 		
	 <div id="chartLineStatLastConservation" style="width: 99.9%; height:200px;"></div>  		  		
		<table class="table table-striped">
		  <tbody>
			<?php if (isset($_smarty_tpl->tpl_vars["cname"])) {$_smarty_tpl->tpl_vars["cname"] = clone $_smarty_tpl->tpl_vars["cname"];
$_smarty_tpl->tpl_vars["cname"]->value = 'COUNT(data)'; $_smarty_tpl->tpl_vars["cname"]->nocache = null; $_smarty_tpl->tpl_vars["cname"]->scope = 0;
} else $_smarty_tpl->tpl_vars["cname"] = new Smarty_variable('COUNT(data)', null, 0);?>
		    <?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logDB']->value->fetchCountGroup('data',"bucket = 99",null,'*',10); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->_loop = true;
?>
			<tr>
				<td><span data-toggle="tooltip" data-placement="left" title="<?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['log']->value->data, ENT_QUOTES, 'UTF-8', true),500);?>
"><i class="color-icons icons-exclamation-red icon-margin">&nbsp;</i><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['log']->value->data,40);?>
</span></td>
				<td class="align-right"><span class="badge badge-important"><?php echo $_smarty_tpl->tpl_vars['log']->value->{$_smarty_tpl->tpl_vars['cname']->value};?>
</span></td>
			</tr>
		  <?php } ?>   
		  </tbody>
		</table>					
	</div>			 			  
	  	<div class="box">
	  		<h5><i class="fa fa-user icon-margin icon-grey"></i> <?php echo smarty_function_L(array('key'=>"admin.system.tpl.lastusers"),$_smarty_tpl);?>
</h5>
			<table class="table table-striped">
			  <tbody>
			  	<?php if (isset($_smarty_tpl->tpl_vars["cname"])) {$_smarty_tpl->tpl_vars["cname"] = clone $_smarty_tpl->tpl_vars["cname"];
$_smarty_tpl->tpl_vars["cname"]->value = 'COUNT(data)'; $_smarty_tpl->tpl_vars["cname"]->nocache = null; $_smarty_tpl->tpl_vars["cname"]->scope = 0;
} else $_smarty_tpl->tpl_vars["cname"] = new Smarty_variable('COUNT(data)', null, 0);?>
			  <?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logDB']->value->fetchCountGroup('data',"bucket = 2 or bucket = 3","createTime DESC",'*',10); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->_loop = true;
?>
			<tr>
				<td><i class="color-icons <?php if ($_smarty_tpl->tpl_vars['log']->value->bucket==2) {?>icons-user-white<?php } else { ?>icons-user-thief<?php }?> icon-margin">&nbsp;</i><?php echo $_smarty_tpl->tpl_vars['log']->value->data;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['log']->value->{$_smarty_tpl->tpl_vars['cname']->value};?>
</td>
				<td><?php echo generate::showDatatime($_smarty_tpl->tpl_vars['log']->value->createTime);?>
</td>
				<td class="smallWidthHidden"><?php echo $_smarty_tpl->tpl_vars['log']->value->createIp;?>
</td>
			</tr>
		  <?php } ?>   
				  </tbody>
				</table>			  		
		</div>
	</div>
  
  <div class="span5">
	<div class="box margin-bottom">
		<?php if (!cache::isCached(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/backups/",'3600')) {?>
			<?php echo cache::write(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value),round(baseFile::getSize(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value))/1048576,2),'disSize');?>

			<?php echo cache::write(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/backups/",round(baseFile::getSize(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/backups/")/1048576,2),'disSize');?>

			<?php echo cache::write(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/files/",round(baseFile::getSize(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/files/")/1048576,2),'disSize');?>

			<?php echo cache::write(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/database/",round(baseFile::getSize(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/database/")/1048576,2),'disSize');?>

			<?php echo cache::write(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/themes/",round(baseFile::getSize(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/themes/")/1048576,2),'disSize');?>

			<?php echo cache::write(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/cache/",round(baseFile::getSize(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/cache/")/1048576,2),'disSize');?>

		<?php }?>			  	
  		<h5>
			<i class="fa fa-upload icon-margin icon-grey"></i> <?php echo smarty_function_L(array('key'=>"admin.system.tpl.memory"),$_smarty_tpl);?>

		  	<div class="buttons">
				<a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
admin/do/system/clearBucketCache/disSize/" class="btn btn-small btn-primary"><?php echo smarty_function_L(array('key'=>"admin.system.tpl.refreshdata"),$_smarty_tpl);?>
</a>					  		
		  	</div>						
		</h5>
		<h2 class="align-center" style="margin-top:40px;"><?php echo cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value));?>
MB</h2>
		
	  	
		    <script type="text/javascript">
		      google.load("visualization", "1", {packages:["corechart"]});
		      $(document).ready(function() {
			      window.dataSize = google.visualization.arrayToDataTable([
					  
					  ['Date', 'Size'],
					  <?php  $_smarty_tpl->tpl_vars['stat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stat']->_loop = false;
 $_from = array_reverse($_smarty_tpl->tpl_vars['systemStatusDB']->value->fetchAll(null,'id DESC','*','30')); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stat']->key => $_smarty_tpl->tpl_vars['stat']->value) {
$_smarty_tpl->tpl_vars['stat']->_loop = true;
?>
					  ['<?php echo $_smarty_tpl->tpl_vars['stat']->value->date;?>
', <?php echo $_smarty_tpl->tpl_vars['stat']->value->size;?>
],
					  <?php } ?>
			     	  
			        ]);
			      drawLineChartSmall('chartLineSize',window.dataSize);
			  }); 
		    </script>
		 		
		 <div id="chartLineSize" style="margin-top:-10px; width: 99.9%; height:89px;"></div> 					

  		
  		<div class="pad">
  			<?php if (isset($_smarty_tpl->tpl_vars['backupsSize'])) {$_smarty_tpl->tpl_vars['backupsSize'] = clone $_smarty_tpl->tpl_vars['backupsSize'];
$_smarty_tpl->tpl_vars['backupsSize']->value = 100*(cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/backups/")/cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value))); $_smarty_tpl->tpl_vars['backupsSize']->nocache = null; $_smarty_tpl->tpl_vars['backupsSize']->scope = 0;
} else $_smarty_tpl->tpl_vars['backupsSize'] = new Smarty_variable(100*(cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/backups/")/cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value))), null, 0);?>
	  		<?php if (isset($_smarty_tpl->tpl_vars['filesSize'])) {$_smarty_tpl->tpl_vars['filesSize'] = clone $_smarty_tpl->tpl_vars['filesSize'];
$_smarty_tpl->tpl_vars['filesSize']->value = 100*(cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/files/")/cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value))); $_smarty_tpl->tpl_vars['filesSize']->nocache = null; $_smarty_tpl->tpl_vars['filesSize']->scope = 0;
} else $_smarty_tpl->tpl_vars['filesSize'] = new Smarty_variable(100*(cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/files/")/cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value))), null, 0);?>
	  		<?php if (isset($_smarty_tpl->tpl_vars['databaseSize'])) {$_smarty_tpl->tpl_vars['databaseSize'] = clone $_smarty_tpl->tpl_vars['databaseSize'];
$_smarty_tpl->tpl_vars['databaseSize']->value = 100*(cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/database/")/cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value))); $_smarty_tpl->tpl_vars['databaseSize']->nocache = null; $_smarty_tpl->tpl_vars['databaseSize']->scope = 0;
} else $_smarty_tpl->tpl_vars['databaseSize'] = new Smarty_variable(100*(cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/database/")/cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value))), null, 0);?>
	  		<?php if (isset($_smarty_tpl->tpl_vars['themesSize'])) {$_smarty_tpl->tpl_vars['themesSize'] = clone $_smarty_tpl->tpl_vars['themesSize'];
$_smarty_tpl->tpl_vars['themesSize']->value = 100*(cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/themes/")/cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value))); $_smarty_tpl->tpl_vars['themesSize']->nocache = null; $_smarty_tpl->tpl_vars['themesSize']->scope = 0;
} else $_smarty_tpl->tpl_vars['themesSize'] = new Smarty_variable(100*(cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/themes/")/cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value))), null, 0);?>
	  		<?php if (isset($_smarty_tpl->tpl_vars['cacheSize'])) {$_smarty_tpl->tpl_vars['cacheSize'] = clone $_smarty_tpl->tpl_vars['cacheSize'];
$_smarty_tpl->tpl_vars['cacheSize']->value = 100*(cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/cache/")/cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value))); $_smarty_tpl->tpl_vars['cacheSize']->nocache = null; $_smarty_tpl->tpl_vars['cacheSize']->scope = 0;
} else $_smarty_tpl->tpl_vars['cacheSize'] = new Smarty_variable(100*(cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/cache/")/cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value))), null, 0);?>
		  	<?php if (isset($_smarty_tpl->tpl_vars['otherSize'])) {$_smarty_tpl->tpl_vars['otherSize'] = clone $_smarty_tpl->tpl_vars['otherSize'];
$_smarty_tpl->tpl_vars['otherSize']->value = 100-($_smarty_tpl->tpl_vars['backupsSize']->value+$_smarty_tpl->tpl_vars['filesSize']->value+$_smarty_tpl->tpl_vars['databaseSize']->value+$_smarty_tpl->tpl_vars['themesSize']->value); $_smarty_tpl->tpl_vars['otherSize']->nocache = null; $_smarty_tpl->tpl_vars['otherSize']->scope = 0;
} else $_smarty_tpl->tpl_vars['otherSize'] = new Smarty_variable(100-($_smarty_tpl->tpl_vars['backupsSize']->value+$_smarty_tpl->tpl_vars['filesSize']->value+$_smarty_tpl->tpl_vars['databaseSize']->value+$_smarty_tpl->tpl_vars['themesSize']->value), null, 0);?>
		  	
			</div>	
			<table class="table table-striped">
			  <tbody>

				<tr>
					<td><i class="color-icons icons-databases icon-margin">&nbsp;</i><?php echo smarty_function_L(array('key'=>"admin.common.conservation.tpl.files"),$_smarty_tpl);?>
</td>
					<td><?php echo cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/files/");?>
MB</td>
					<td class="smallWidthHidden" style="width:55%">
			  			<div class="progress progress-striped">
						  <div class="bar" style="width: <?php echo $_smarty_tpl->tpl_vars['filesSize']->value;?>
%"></div>
						</div>							
					</td>
				</tr>	
				<tr>
					<td><i class="color-icons icons-databases icon-margin">&nbsp;</i><?php echo smarty_function_L(array('key'=>"admin.common.conservation.tpl.themes"),$_smarty_tpl);?>
</td>
					<td><?php echo cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/themes/");?>
MB</td>
					<td class="smallWidthHidden" style="width:55%">
			  			<div class="progress progress-striped">
						  <div class="bar" style="width: <?php echo $_smarty_tpl->tpl_vars['themesSize']->value;?>
%"></div>
						</div>							
					</td>
				</tr>
				<tr>
					<td><i class="color-icons icons-databases icon-margin">&nbsp;</i><?php echo smarty_function_L(array('key'=>"admin.common.conservation.tpl.database"),$_smarty_tpl);?>
</td>
					<td><?php echo cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/database/");?>
MB</td>
					<td class="smallWidthHidden" style="width:55%">
			  			<div class="progress progress-striped">
						  <div class="bar" style="width: <?php echo $_smarty_tpl->tpl_vars['databaseSize']->value;?>
%"></div>
						</div>							
					</td>
				</tr>
				<tr>
					<td><i class="color-icons icons-databases icon-margin">&nbsp;</i><?php echo smarty_function_L(array('key'=>"admin.common.conservation.tpl.backups"),$_smarty_tpl);?>
</td>
					<td><?php echo cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/backups/");?>
MB</td>
					<td class="smallWidthHidden" style="width:55%">
			  			<div class="progress progress-striped">
						  <div class="bar" style="width: <?php echo $_smarty_tpl->tpl_vars['backupsSize']->value;?>
%"></div>
						</div>							
					</td>
				</tr>
				<tr>
					<td><i class="color-icons icons-databases icon-margin">&nbsp;</i><?php echo smarty_function_L(array('key'=>"admin.common.conservation.tpl.cache"),$_smarty_tpl);?>
</td>
					<td><?php echo cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/cache/");?>
MB</td>
					<td class="smallWidthHidden" style="width:55%">
			  			<div class="progress progress-striped">
						  <div class="bar" style="width: <?php echo $_smarty_tpl->tpl_vars['cacheSize']->value;?>
%"></div>
						</div>							
					</td>
				</tr>						
				<tr>
					<td><i class="color-icons icons-databases icon-margin">&nbsp;</i><?php echo smarty_function_L(array('key'=>"admin.common.conservation.tpl.others"),$_smarty_tpl);?>
</td>
					<td><?php echo cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value))-(cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/files/")+cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/themes/")+cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/database/")+cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/data/backups/")+cache::read(((string)$_smarty_tpl->tpl_vars['SITE_PATH']->value)."/cache/"));?>
MB</td>
					<td class="smallWidthHidden" style="width:55%">
			  			<div class="progress progress-striped">
						  <div class="bar" style="width: <?php echo $_smarty_tpl->tpl_vars['otherSize']->value;?>
%"></div>
						</div>							
					</td>
				</tr>																					
			  </tbody>
			</table>			  			
		</div>				  
		<div class="box margin-bottom">
		  	<?php echo $_smarty_tpl->getSubTemplate ('common/notify_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('simple'=>1), 0);?>

		</div>				  
  </div>
</div>	  
<?php }} ?>
