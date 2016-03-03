<?php
print "Total de rendimentos bancarios: ";
$rb = trim ( fgets ( STDIN ) ); // rb = Total de rendimentos bancarios
print "Total de rendimentos de salarios ou servicos: ";
$rss = trim ( fgets ( STDIN ) ); // rss = Total de rendimentos de salarios ou servicos
print "Total de outros rendimentos: ";
$ror = trim ( fgets ( STDIN ) ); // ror = Total de outros rendimentos
print "Servicos medicos pagos: ";
$smp = trim ( fgets ( STDIN ) ); // smp = Servicos medicos pagos
print "Servicos educacionais pagos: ";
$sep = trim ( fgets ( STDIN ) ); // sep = Servicos educacionais pagos

print "\nTotal de Impostos: ";
$irb = ($rb / 5);
print "\nR$ " . number_format ( $irb, 2, ',', '.' ) . "( sobre rendimentos bancários)";
if ($rss <= 8000) {
	print "\nR$ 0,00 ( sobre salários e serviços)";
} elseif ($rss <= 24000) {
	$irss = (($rss / 20) * 3);
	print "\nR$ " . number_format ( $irss, 2, ',', '.' ) . "(sobre salários e serviços)";
} elseif ($rss > 24000) {
	$irss = (($rss / 10) * 2);
	print "\nR$ " . number_format ( $irss, 2, ',', '.' ) . "(sobre salários e serviços)";
}
$iror = ($ror / 10);

print "\nR$ " . number_format ( $iror, 2, ',', '.' ) . "(sobre outros rendimentos)";

$ti = ($irb + $irss + $iror);
print "\nR$ " . number_format ( $ti, 2, ',', '.' ) . "(total)";
print "\n------------------------------------------------------------";
$mabat = (($ti / 10) * 3);
print "\nMaximo a ser abatido: ";
print "\nR$ " . number_format ( $mabat, 2, ',', '.' );
print "\n------------------------------------------------------------";
print "\nTotal de valores possiveis de abater: ";
print "\nR$ " . number_format ( $smp, 2,',', '.' ) . "(servicos medicos)";
print "\nR$ " . number_format ( $sep, 2,',', '.' ) . "(servicos educacionais)";
$iabat = ($smp + $sep);
print "\nR$ " . number_format ( $iabat, 2, ',', '.' ) . "(total)";
print "\n------------------------------------------------------------";
print "\nImposto Total: ";
print "\nR$ " . number_format ( $ti, 2, ',', '.' ) . "(imposto bruto)";

if ( $iabat > $mabat) {
	$labat = $mabat;
	print "\nR$ " . number_format ( $labat, 2, ',', '.' ) . "(abatimentos)";
} else {
	$labat = $iabat;
	print "\nR$ " . number_format ( $labat, 2, ',', '.' ) . "(abatimentos)";
}

$tt = $ti - $labat;
print "\nR$ " . number_format ( $tt, 2, ',', '.' ) . "(total)";

?>