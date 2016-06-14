<? // use data to build 

// crate a new data object to set the date 
$raw = '22. 11. 2016';
$start = DateTime::createFromFormat('d. m. Y', $raw);

echo 'Start date: ' . $start->format('Y-m-d') . "\n";

?> 
