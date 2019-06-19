<?php
	function myError($num, $msg, $file, $line){
		$dt = date("d-m-Y H:i:s");
		$str = "[$dt] - $msg in $file:$line\n";
		switch ($num) {
			case E_USER_ERROR:
			case E_USER_WARNING:
			case E_USER_NOTICE:
				echo $msg;
			}
		error_log($str, 3, "error.log");
	};
	function drawMenu($menu, $vertical = true){
		if(!is_array($menu))
			return false;
		$style = "";
		if(!$vertical)
			$style = "class='menu-inline'";
		echo "<ul $style>";
			foreach($menu as $item){
				echo"<li>";
				//echo"<a href='".$item['href']."'>".$item['link']."</a>";
				echo"<a href='{$item['href']}'>{$item['link']}</a>";
				echo'</li>';
				// echo"<li><a href='{$item['href']}'>{$item['link']}</a></li>"; В одну строку
			};
		echo '</ul>';
		return true;
	};
	function drawTable($cols, $rows, $num, $color){
		static $cnt = 0;
		$cnt++;
			echo "Таблица рисуется $cnt раз";
			echo "<table border =$num>";
			for($tr=1; $tr<= $rows; $tr++) {
					echo"<tr>"; 
					for($td=1; $td<=$cols; $td++){
							if($tr == 1 or $td == 1)
									echo"<th style='background:$color'>".$tr*$td.'</th>';
							else
									echo"<td>". $tr*$td  .'</td>';
					}
					echo"</tr>";
			}
			echo"</table>";
	};

