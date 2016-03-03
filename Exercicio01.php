<?php
print "Qual o sexo do cliente (m/f): ";
$s = trim ( fgets ( STDIN ) ); // s = sexo do cliente
print "Quantas cervejas foram consumidas: ";
$qc = trim ( fgets ( STDIN ) ); // qc = quantidade de cerveja
print "Quantos refrigerantes foram consumidos: ";
$qr = trim ( fgets ( STDIN ) ); // qr = quantidade de refrigerante
print "Quantos espetinhos foram consumidos: ";
$qe = trim ( fgets ( STDIN ) ); // qe = quantidade de espetinho
if ($s = 'm' && $s = 'M') {
	$b = 5;
} elseif ($s = 'f' && $s = 'F') {
	$b = 8;
}
	else {
		print "\nFavor corrigir o sexo!";
	}
$vc = (5 / 2); // valor cerveja
$vr = 2; // valor refrigerante
$ve = 4;
; // valor espetinho
$vcant = 3; // valor cantores
$fcant = 0; // valor cantores

print "\nValor da Conta:";
print "\nR$ " . number_format ( $b, 2, ',', '.' ) . " (valor básico)";

$bc1 = ($qc * $vc); // bc = quantidade de cerveja x valor de cerveja
$bc2 = ($qr * $vr);
$bc3 = ($qe * $ve);
$bc = ($bc1 + $bc2 + $bc3);
print "\nR$ " . number_format ( $bc, 2, ',', '.' ) . " (valor bebida e comida)";

if (($b + $bc) <= 15) {
	$xcant = $vcant;
	print "\nR$ " . number_format ( $xcant, 2, ',', '.' ) . "(valor cantores)";
} else {
	$xcant = $fcant;
	print "\nR$ " . number_format ( $xcant, 2, ',', '.' ) . "(valor cantores)";
}
$subt = ($b + $bc + $xcant);
print "\nR$ " . number_format ( $subt, 2, ',', '.' ) . "(subtotal sem 10%)";

print "\n--------------------------------------------------------------";
$tot = ($subt + ($subt / 10));
print "\nR$ " . number_format ( $tot, 2, ',', '.' ) . "(total)";

?>	