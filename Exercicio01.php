<?php
print "Qual o sexo do cliente: ";
$s = trim ( fgets ( STDIN ) ); // s = sexo do cliente
print "Quantas cervejas foram consumidas: ";
$qc = trim ( fgets ( STDIN ) ); // qc = quantidade de cerveja
print "Quantos refrigerantes foram consumidos: ";
$qr = trim ( fgets ( STDIN ) ); // qr = quantidade de refrigerante
print "Quantos espetinhos foram consumidos: ";
$qe = trim ( fgets ( STDIN ) ); // qe = quantidade de espetinho
if ($s = 'h') {
	$b = 5;
} elseif ($s = 'f') {
	$b = 8;
}
$vc = (5 / 2); // valor cerveja
$vr = 2; // valor refrigerante
$ve = 4;
; // valor espetinho
$vcant = 3; // valor cantores
$fcant = 0; // valor cantores

print "\nValor da Conta:";
print "\nR$ " . number_format ( $b, 2, ',', '.' ) . " (valor básico)";

$bc1 = ($qc * $vc);
$bc2 = ($qr * $vr);
$bc3 = ($qe * $ve);
$bc = ($bc1 + $bc2 + $bc3);
print "\nR$ " . number_format ( $bc, 2, ',', '.' ) . " (valor bebida e comida)";

if (($b + $bc) <= 15) {
	print "\nR$ " . number_format ( $vcant, 2, ',', '.' ) . "(valor cantores)";
	$vcant = 3;
} else {
	print "\nR$ " . number_format ( $vcant, 2, ',', '.' ) . "(valor cantores)";
	$vcant = 0;
}

print "\n--------------------------------------------------------------";
print "\nR$ " . number_format ( $tot, 2, ',', '.' ) . "(total)";
$tot = ($subt + ($subt / 10));

?>	