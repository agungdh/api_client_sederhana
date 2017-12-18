<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<th>Waktu</th>
				<th>Suhu Lingkungan</th>
				<th>Suhu Tanah</th>
				<th>Kualitas Udara</th>
				<th>Tekanan Udara</th>
				<th>Kelembaban</th>
				<th>Arah Angin</th>
				<th>Kecepatan Angin</th>
				<th>Hembusan Angin</th>
				<th>Curah Hujan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($data as $item) {
			?>
				<tr>
					<td><?php echo $item->CREATED; ?></td>	
					<td><?php echo $item->AMBIENT_TEMPERATURE; ?></td>	
					<td><?php echo $item->GROUND_TEMPERATURE; ?></td>	
					<td><?php echo $item->AIR_QUALITY; ?></td>	
					<td><?php echo $item->AIR_PRESSURE; ?></td>	
					<td><?php echo $item->HUMIDITY; ?></td>	
					<td><?php echo $item->WIND_DIRECTION; ?></td>	
					<td><?php echo $item->WIND_SPEED; ?></td>	
					<td><?php echo $item->WIND_GUST_SPEED; ?></td>	
					<td><?php echo $item->RAINFALL; ?></td>	
				</tr>
			<?php	
			}
			?>
		</tbody>
	</table>
</body>
</html>
