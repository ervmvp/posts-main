<?php
    $x = "kaķēni";
        // 1. variants
        if (isset($x)) {
            $y = $x;
        } else {
            $y = "Ups!";
        }
        // 2. variants
        $y = isset($x) ? $x : "Ups!";
        // 3. variants
        $y = $x ?? "Ups!";
    // Šis jau ārpus paša if, vienkārši parādu, ka izvadu $y
    dd($y);