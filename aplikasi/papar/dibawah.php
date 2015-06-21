<?php 
if ($paras == null):?>
	</div>
	<!-- end rangka bawah -->
</div><!--end container-->
<!-- Footer
================================================== -->
<footer class="footer">
	<div class="container">
		<span class="glyphicon glyphicon-earphone"></span>+062820080
		<span class="label label-info">
		&copy; Hak Cipta Terperihara 2015. Theme <?php 
$pilih = isset($pilih) ? $pilih : null;
$theme = ($pilih==null) ? 'Asal Bootstrap Twitter' : $pilih;
echo $theme = (isset($theme)) ? $theme : null;
?>	
		</span>
	</div>
</footer>
<?php else: endif; echo "\n";
//
?>
<!-- Footer
================================================== -->
<div class="footer">
	<div class="footer-inner">
		<div class="container">
			<div class="row">
    			<div class="span12">
    				&copy; Hak Cipta Terperihara 2015. Theme <a 
					href="http://www.egrappler.com/">Bootstrap Responsive Admin Template</a>.<?php 
if ($paras != null):
	echo "\n\t\t\t\t\t" . '<a href="' . URL . 'ruangtamu/logout">'
		. '<i class="icon-bullseye icon-2x icon-spin"></i>Keluar</a>';
else: endif; echo "\n";
//</div><!--end container-->
?>

    			</div> <!-- /span12 -->
    		</div> <!-- /row -->
		</div> <!-- /container -->
	</div> <!-- /footer-inner -->	
</div> <!-- /footer -->
<?php 
require 'jquery.php'; 
require 'dibawah-notakaki.php'; 
echo "\n";
?>
<script>
	var barChartData = {
		labels: ["Jan", "Feb", "Mac", "Apr", "Mei", "Jun", "Jul"],
		datasets: [
				{
					fillColor: "rgba(220,220,220,0.5)",
					strokeColor: "rgba(220,220,220,1)",
					data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
					fillColor: "rgba(151,187,205,0.5)",
					strokeColor: "rgba(151,187,205,1)",
					data: [28, 48, 40, 19, 96, 27, 100]
				}
			]
	}
	/*var myLine = new Chart(document.getElementById("bar-chart").getContext("2d")).Bar(barChartData);*/
	var myLine = new Chart(document.getElementById("bar-chart1").getContext("2d")).Bar(barChartData);
	var myLine = new Chart(document.getElementById("bar-chart2").getContext("2d")).Bar(barChartData);
	var myLine = new Chart(document.getElementById("bar-chart3").getContext("2d")).Bar(barChartData);

    var pieData = [
		{value: 30, color: "#F38630"},
		{value: 50, color: "#E0E4CC"},
		{value: 100, color: "#69D2E7"}
	];
    var myPie = new Chart(document.getElementById("pie-chart").getContext("2d")).Pie(pieData);
	
</script>

</body>
</html>