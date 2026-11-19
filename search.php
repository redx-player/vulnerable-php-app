<?php
// Product search. Shows the term the visitor typed back to them.
$q = $_GET['q'] ?? '';
?>
<!doctype html>
<html>
<head><title>Search</title></head>
<body>
  <form method="get">
    <input name="q" value="<?php echo $q; ?>">
    <button>Search</button>
  </form>
  <h2>Results for <?php echo $q; ?></h2>
  <p>No products matched your query.</p>
</body>
</html>
