<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Primeiro</title>
    </head>
    <body>
        <?php
		$clientes = [array('nome' => 'Ana', 'cpf' => '1', 'rua' => 'Rua A', 'cidade' => 'JPA'),
                             array('nome' => 'Bia', 'cpf' => '2', 'rua' => 'Rua B', 'cidade' => 'CG')];
                         
	?>
        
        <table>
            <thead>
            </thead>
                
            <tbody>
                <tr>
                <?php
                        $campos1 = array_keys($clientes[0]);
                        
                        foreach ($campos1 as $value) {
                            echo "<th>$value</th>";
                        }
						
						echo "\n";

						foreach ($clientes[0] as $value) {
							$value;

							echo "$value ";
						};

						echo "\n";

						foreach ($clientes[1] as $value) {
							$value;

							echo "$value ";
						};
                ?>
                </tr>
				
            </tbody>
               
        </table>
        
    </body>
</html>
