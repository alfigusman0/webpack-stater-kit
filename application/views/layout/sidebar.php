<aside class="main-sidebar">
	<section class="sidebar">
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?= base_url('assets/img/avatar.png'); ?>" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>Alfi Gusman</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header text-center">Development</li>
			<li><a href="<?= base_url('Welcome/'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
			<li><a href="<?= base_url('Default/CRUD/'); ?>"><i class="fa fa-files-o"></i> <span>Default</span></a></li>

			<!-- Server Side -->
			<li class="treeview">
				<a href="#"><i class="fa fa-folder-o"></i> <span>Data Tables</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?= base_url('Default/ServerSide/FormFilter'); ?>"><i class="fa fa-circle-o">&nbsp;</i>Form Filter</a></li>
					<li><a href="<?= base_url('Default/ServerSide/FormSearch'); ?>"><i class="fa fa-circle-o">&nbsp;</i>Form Search</a></li>
				</ul>
			</li>

			<li><a href="<?= base_url('Logs/'); ?>"><i class="fa fa-file-text"></i> <span>Logs</span></a></li>
			<li><a href="<?= base_url('#'); ?>"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
		</ul>
	</section>
</aside>