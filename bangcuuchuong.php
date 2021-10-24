<html>
	<body>
		<table border="1">
			<thead>
				<tr>
				<?php for ($i=0; $i <= 10 ; $i++) { ?>
						<th style="background-color:#0ff;color: green;"> Bảng <?php echo $i ?></th>
					<?php } ?>
				
				
				 </tr>
			</thead>
			<tbody>
				<?php for ($i=1; $i <= 9 ; $i++) { ?>
					<tr>
						<?php for ($j=0; $j <=10 ; $j++) { ?>
							<td style="background-color: #0f0;"> <?php echo " $i x $j = ".$i*$j ?></td>
						<?php } ?>
						
					</tr>
				<?php  } ?>
			</tbody>
		</table>
		<br>
		<h1>Ta có mảng như sau: [1,4,8,6,3]</h1>
		<?php
			$mang = array("1","4","8","6","3");

			$max = null;
			$min = null;
			$max_position = null;
			$min_position = null;
 
			for ($i = 0; $i < count($mang); $i++)
			{
    			if ($max == null){
        			$max = $mang[$i];
        			$max_position = $i;
    			}
    		else {
        		if ($mang[$i] > $max){
           		 $max = $mang[$i];
           		 $max_position = $i;
        			}
    			}
			}
 			echo "<h3> Giá trị lớn nhất trong mảng là $max, nằm tại vị trí $max_position </h3>";

			 for ($i = 0; $i < count($mang); $i++)
			 {
				 if ($min == null){
					 $min = $mang[$i];
					 $min_position = $i;
				 }
			 	else {
				 	if ($mang[$i] < $min){
					 	$min = $mang[$i];
					 	$min_position = $i;
					 	}
				 	}
			 }
			 echo "<h3> Giá trị nhỏ nhất trong mảng là $min, nằm tại vị trí $min_position </h3>";

			 sort($mang);
			echo "<h2>Sau khi sắp xếp:</h2>";
			foreach($mang as $key=>$value){
				echo "<h2>".$value."</h2>";
			}
		?>
		
	</body>
</html>