<?php

    $data = <<<'EOD'
    X, -9\\\10\100\-5\\\0\\\\, A
    Y, \\13\\1\, B
    Z, \\\5\\\-3\\2\\\800, C
    EOD;
    
    $rows       = explode("\n", $data);
    $results    = array();

    foreach($rows as $row){
        $col    = array_map('trim', explode(",", $row));

        $colxyz = $col[0];
        $colnum = preg_replace('/\\\\/', ',', $col[1]);
        $colabc = $col[2];

        $valColnum = explode(",", $colnum);
        sort($valColnum, 1);

        $no     = 1;
        foreach ($valColnum as $values) {
        if(is_numeric($values)){
        	$results[] = $colxyz . ', ' . $values . ', ' . $colabc . ',' . $no . '<br>';
        	$no++;
        }
        }
    }

    sort($results);

    foreach ($results as $result) {
        echo $result;
    }  

?>