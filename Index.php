<!DOCTYPE>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel='stylesheet'  type='text/css' href='estilos.css'>
        <title>Trabalho EAD - PHP </title>
    </head>
        <?php
            function f_Idade($AnoNascimento)
            {
               $DataAt = Date('y-m-d');
               $DataAt = date_create($DataAt);
               $AnoNascimento = date_create($AnoNascimento);
               
               $Idade = date_diff($DataAt, $AnoNascimento);
               return $Idade->format('%y');
            }
            function f_CalcIMC($Altura,$Peso)
            {
                $Altura = pow($Altura,2);
                return $Calc = number_format($Peso/$Altura,2, ",",".");
            }
        ?>
    <body>
        <section>
            <p class="cabecalho">Promove Nutrição</p>
        </section>
        <section>
            <p class="meuspacientes"> Meus Pacientes</p>
        </section>
        <table  border = "4">
            <tr class="titulotabela">
                <th class="titulotabela">
                Nome
                </th>
                <th class="titulotabela">
                Peso(Kg)
                </th>
                <th class="titulotabela">
                Altura(M)
                </th>
                <th class="titulotabela">
                IMC
                </th>
                <th class="titulotabela">
                Data de Nascimento
                </th>
                <th class="titulotabela">
                Idade
                </th>
            </tr>
            <tr>
                <td>
                John Petrucci
                </td>
                <td>
                    100
                </td>
                <td>
                    2.00
                </td>
                <td>
                    <?php
                echo f_CalcIMC("2.00","100");
                ?>
                </td>
                <td>
                    01/01/1980
                </td>
                <td>
                <?php
                echo f_Idade("01-01-1980");
                ?>
                </td>
			</tr>
            <tr>
                <td>
                John Myung
                </td>
                <td>
                    80
                </td>
                <td>
                    1.72
                </td>
                <td>
                    <?php
                echo f_CalcIMC("1.72","80");
                ?>
                </td>
                <td>
                    28/02/1990
                </td>
                <td>
                <?php
                echo f_Idade("28-02-1990");
                ?>
                </td>
			</tr>
				<td>
                James Labrie
                </td>
                <td>
                    54
                </td>
                <td>
                    1.64
                </td>
                <td>
                    <?php
                echo f_CalcIMC("1.64","54");
                ?>
                </td>
                <td>
                    10/09/1985
                </td>
                <td>
                <?php
                echo f_Idade("10-09-1985");
                ?>
                </td>
			</tr>
            <tr>	
				<td>
                Jordan Rudess
                </td>
                <td>
                    85
                </td>
                <td>
                    1.73
                </td>
                <td>
                    <?php
                echo f_CalcIMC("1.73","85");
                ?>
                </td>
                <td>
                    04/09/1989
                </td>
                <td>
                <?php
                echo f_Idade("01-01-1989");
                ?>
                </td>
			</tr>
            <tr>
				<td>
                Mike Mangini
                </td>
                <td>
                    46
                </td>
                <td>
                    1.55
                </td>
                <td>
                    <?php
                echo f_CalcIMC("1.55","100");
                ?>
                </td>
                <td>
                    31/12/1978
                </td>
                <td>
                <?php
                echo f_Idade("01-01-1978");
                ?>
                </td>
			</tr>	
        </table>
        <table>
            <tr>
                <th>
                    <?php
                    echo "Today is " . date("Y/m/d") . "<br>";
                    ?>
                </th>
            </tr>
        </table>
    </body>
</html>