function hackerDefense(){
// begin hacker defense
foreach ($_POST as $secvalue) {
if ((eregi(“]*script.*\”?[^>]*>”, $secvalue)) ||
(eregi(“]*object.*\”?[^>]*>”, $secvalue)) ||
(eregi(“]*iframe.*\”?[^>]*>”, $secvalue)) ||
(eregi(“]*applet.*\”?[^>]*>”, $secvalue)) ||
(eregi(“]*window.*\”?[^>]*>”, $secvalue)) ||
(eregi(“]*document.*\”?[^>]*>”, $secvalue)) ||
(eregi(“]*cookie.*\”?[^>]*>”, $secvalue)) ||
(eregi(“]*meta.*\”?[^>]*>”, $secvalue)) ||
(eregi(“]*style.*\”?[^>]*>”, $secvalue)) ||
(eregi(“]*alert.*\”?[^>]*>”, $secvalue)) ||
(eregi(“]*form.*\”?[^>]*>”, $secvalue)) ||
(eregi(“]*php.*\”?[^>]*>”, $secvalue)) ||
(eregi(“]*]*>”, $secvalue)) ||
(eregi(“]*img.*\”?[^>]*>”, $secvalue))) {
header(‘location:’.$site.’index.php’);
die ();
}
}

}
