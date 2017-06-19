<?php
/**
 * Created by PhpStorm.
 * User: amine.magdich
 * Date: 19/06/17
 * Time: 15:36
 */

function racine($n) {
  $x = pow( 2, ceil( $n / 2 ) );
  while ( TRUE ) {
    $y = ( ($x + ( $n / $x )) / 2 );
    if ( $y >= $x ) {
      return $x;
    }
    $x = $y;
  }
}/*while($y >= $x)*/

echo racine(16)."\n";
echo "**********************\n";
echo sqrt(16)."\n";