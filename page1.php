        <?php
            require_once ('book.php');
            require ('tridy/Db.php');
            require ('tridy/Dodavatel.php');
            $connect = new Db("s7000db0105,14330", "PAPR_user", "Dk5.8rQl43-P", "app_licence_test");
            $connect->conn();
        $suda = 1;

            $data = mssql_query('SELECT id, CAST(nazev AS TEXT) AS nazev, vek FROM T_test');
            while($row = mssql_fetch_assoc($data)) 
            {
                $nazev = prevod($row['nazev']);
                $vek = prevod($row['vek']);

                echo ('<tr class="' . ($suda++ % 2 ? "lichy" : "sudy") . '">');
                echo('<td class="tdo35"><a href="index.php?strana=formdod&dodavatel=1" class="edit">Edit</a></td>');
                echo('<td class="tdo250">' . $nazev . '</td>');
                echo('<td class="tdo129">' . $vek . '</td></tr>');
            }
        ?>
<html>
<head>
</head>
<body>
<h1>Nadpis jedna</h1>
<p>Podle Gitu poznáš programátora.</p>
<p>Je to dobrý jo jo jo</p>
<p>noooteeeebooook</p>
<p>noooteeeebooook</p>
<p>noooteeeebooook</p>
<p>noooteeeebooook</p>
<p>noooteeeebooook</p>
<p>noooteeeebooook</p>
<p>noooteeeebooook</p>
<p>noooteeeebooook</p>
<?php 
if ($jedem)
{
echo("tak to jede");
}
else
{
echo("nejedeme");
}
</body>

</html>