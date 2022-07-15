
<?php
    $csv = array_map('str_getcsv', file("readcsv.csv"));
    array_walk($csv, function(&$a) use ($csv) {
      $a = array_combine($csv[0], $a);
    });
    array_shift($csv); # remove column header


//$data = csv_to_array("readcsv.csv","$");

echo '<pre>';
print_r($csv);

?>