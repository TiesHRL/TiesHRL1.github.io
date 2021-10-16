if ($mysqli->ping()) {
  printf ("Our connection is ok!\n"); 
} else {
  printf ("Error: %s\n", $mysqli->error); 
}