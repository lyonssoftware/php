<?php 
        $ch = curl_init(); 
        // cURL is a library that lets you make HTTP requests in PHP; create curl resource 
        curl_setopt($ch, CURLOPT_URL, "github.com"); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 

        // method to close curl
        // close curl resource to free up system resources 
        curl_close($ch);      
?>
