<?php
$A = 123; // variable global
function Test(){
    $A = "Test"; // variable lokal
    echo "Nilai A di dalam fungsi = $A \n";
}
Test();
echo "Nilai A di luar fungsi = $A \n";
?>