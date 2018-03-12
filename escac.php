<html>
	<head>
		<style>
			td{
				border: 1px solid black;
				height: 40px;
				width: 40px;
			}
			#blanco{
				background-color: white;
			}
			#negro{
				background-color: gray;
			}
			img{
				height: 40px;
				width: 40px;
			}
			h2{
				text-align: center;
			}
			#general{
				margin: 0 auto;
				height: 50%;
				width: 60%;
				padding: 30px;
			}
			table{
				float:left;
			}	
			#formulario{
				padding: 70px;
			}
				
		</style>
	</head>
	<body>
		<h2>MOU LA PEÇA D'ESCAC</h2>
		<div id="general">
			<table>	
				<?php
					session_start();
					$abc = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
					$fila = 8;
					$colu = 1;
					$alfil = array($fila,$colu);
									
					if(isset($_POST['noufil']) && isset($_POST['noucolu'])){
						$noufil = $_POST['noufil'];
						$noucolu = $_POST['noucolu'];
						
						if($noufil == $fila && $noucolu != $colu){
							$colu = $noucolu;
						}else if($noufil != $fila && $noucolu == $colu){
							$fila = $noufil;
						}
						
						
						$alfil = array();
						$alfil = array($fila,$colu);
						
					}
					echo $fila.$colu;
					print_r($alfil);
					
					$_SESSION["alfil"] = $alfil;
					
					if(isset($_POST['reiniciar'])){
						session_destroy();
					}
					
					
					for($i=0;$i<=8;$i++){
						for($j=0;$j<=8;$j++){
							
							if($i == 0){
								echo "<th>$j</th> \n";
							}
							else if($j == 0){
								echo "<tr></tr> \n";
								echo "<th>". $abc[$i-1]. "</th> \n";
							}
							
							
							else{
								if($j > 8){
									echo "<tr></tr>";
								}else{
									 if(($i % 2 == 0 && $j % 2 == 0)||($i % 2 != 0 && $j % 2 != 0)){
										if($alfil[0] == $i && $alfil[1]== $j){
											echo "<td id='negro' name=$i$j><img src='torre.png'/></td> \n";
										
											}else{
												echo "<td id='negro' name=$i$j></td> \n";
											}
											
									}else{
										if($alfil[0] == $i && $alfil[1]== $j){
											echo "<td id='blanco' name=$i$j><img src='torre.png'/></td> \n";
										}else{
											echo "<td id='blanco' name=$i$j></td> \n";
										}
									}
								}
							}
						}
					}
				?>
			</table>
			<div id="formulario">
				<?php
					echo "<form method='POST' action='escac.php'>
							Mover a fila
							<select name='noufil'>
								<option value='1'>A</option>
								<option value='2'>B</option>
								<option value='3'>C</option>
								<option value='4'>D</option>
								<option value='5'>E</option>
								<option value='6'>F</option>
								<option value='7'>G</option>
								<option value='8'>H</option>
							</select>
							</br>
							Mover a columna
							<select name='noucolu'>
								<option value='1'>1</option>
								<option value='2'>2</option>
								<option value='3'>3</option>
								<option value='4'>4</option>
								<option value='5'>5</option>
								<option value='6'>6</option>
								<option value='7'>7</option>
								<option value='8'>8</option>
							</select>
							</br>
							<input type='submit' value='enviar'>
						  </form>"
				?>
				<?php
					echo "<form method='POST' action='escac.php'>
							<input type='submit' name='reiniciar' value='reiniciar'/>
						  </form>
					";
				?>
			</div>
		</div>
	</body>
</html>
