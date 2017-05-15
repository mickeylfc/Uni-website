

<?php
// connect to database
include 'db_handler.php';
// define how many results you want per page
$results_per_page = 10;
// find out the number of results stored in database
$sql='SELECT * FROM login';
$result = mysqli_query($conn, $sql);
$number_of_results = mysqli_num_rows($result);
// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);
// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}
// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;
// retrieve selected results from database and display them on page
$sql='SELECT * FROM login LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
  echo $row['id'] . ' ' . $row['login']. '<br>';
}
// display the links to the pages
for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<a href="index.php?page=' . $page . '">' . $page . '</a> ';
}
?>