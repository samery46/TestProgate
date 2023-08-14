
<?php
function LCSubStr($X, $Y, $m, $n)
{
    $cari = array_fill(
        0,
        $m + 1,
        array_fill(0, $n + 1, NULL)
    );
    $result = 0;
    for ($i = 0; $i <= $m; $i++) {
        for ($j = 0; $j <= $n; $j++) {
            if ($i == 0 || $j == 0)
                $cari[$i][$j] = 0;
            else if ($X[$i - 1] == $Y[$j - 1]) {
                $cari[$i][$j] = $cari[$i - 1][$j - 1] + 1;
                $result = max(
                    $result,
                    $cari[$i][$j]
                );
            } else $cari[$i][$j] = 0;
        }
    }
    return $result;
}
$X = "NinjaProgate";
$Y = "progate.com";
$m = strlen($X);
$n = strlen($Y);
echo "Substring Terpanjang adalah " .
    LCSubStr($X, $Y, $m, $n);
?>
                    
