				<ul class="nav pull-right">
					<li class="dropdown">						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-cog"></i>
							Akaun
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="javascript:;">Tatacara</a></li>
							<li><a href="javascript:;">Bantuan</a></li>
						</ul>						
					</li>
					<li class="dropdown">						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i> 
							<?php echo $pengguna . ':' . $paras; ?>
							<b class="caret"></b>
						</a>	
						<ul class="dropdown-menu">
							<li><a href="javascript:;">Biodata</a></li>
							<li><a href="<?php echo URL . 'ruangtamu/logout'; ?>">Keluar</a></li>
						</ul>						
					</li>
				</ul>
