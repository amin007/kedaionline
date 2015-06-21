<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="<?php echo $url ?>">
			E-SME Food: A web based application for SME food for online shopping
			</a>	
			<div class="nav-collapse">
				<form class="navbar-search pull-right">
					<input type="text" class="search-query" placeholder="Search">
				</form>
			</div><!--/.nav-collapse -->	
		</div> <!-- /container -->
	</div> <!-- /navbar-inner -->
</div> <!-- /navbar -->
<div class="subnavbar">
	<div class="subnavbar-inner">
		<div class="container">
			<ul class="mainnav">
				<li class="active">
					<a href="<?php echo URL ?>ruangtamu">
						<i class="icon-dashboard"></i>
						<span>Menu Utama</span>
					</a>	    				
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-cloud-upload"></i>
						<span>Tentang Produk</span>
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
                    	<li><a href="<?php echo URL ?>barang">Senarai</a></li>
                    	<li><a href="<?php echo URL ?>barang/gambar">Muat Naik</a></li>
						<li><a href="<?php echo URL ?>barang/ubah">Ubah Produk</a></li>
                    </ul>  					
				</li>
				<li>
					<a href="<?php echo URL ?>barang/laporan">
						<i class="icon-list-alt"></i>
						<span>Laporan</span>
					</a>    				
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-cog icon-2x icon-spin"></i>
						<span><?php echo 'Akaun ' . $paras; ?></span>
						<b class="caret"></b>
					</a>	
					<ul class="dropdown-menu">
                    	<li><a href="<?php echo URL ?>pengguna/tatacara">Tatacara</a></li>
						<li><a href="<?php echo URL ?>pengguna/bantuan">Bantuan</a></li>
                    </ul>    				
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-user"></i> 
						<span><?php echo $pengguna?></span>
						<b class="caret"></b>
					</a>	
					<ul class="dropdown-menu">
                    	<li><a href="<?php echo URL ?>pengguna/biodata">Biodata</a></li>
						<li><a href="<?php echo URL . 'ruangtamu/logout'; ?>">Keluar</a></li>
                    </ul>    				
				</li>

<?php
/*				
                <li>					
					<a href="charts.html">
						<i class="icon-bar-chart"></i>
						<span>Charts</span>
					</a>  									
				</li>
                <li>					
					<a href="shortcodes.html">
						<i class="icon-code"></i>
						<span>Shortcodes</span>
					</a>  									
				</li>
				<li class="dropdown">			
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-long-arrow-down"></i>
						<span>Drops</span>
						<b class="caret"></b>
					</a>	
					<ul class="dropdown-menu">
                    	<li><a href="icons.html">Icons</a></li>
						<li><a href="faq.html">FAQ</a></li>
                        <li><a href="pricing.html">Pricing Plans</a></li>
                        <li><a href="login.html">Login</a></li>
						<li><a href="signup.html">Signup</a></li>
						<li><a href="error.html">404</a></li>
                    </ul>    				
				</li>
*/?>
			</ul>
		</div> <!-- /container -->
	</div> <!-- /subnavbar-inner -->
</div> <!-- /subnavbar -->
