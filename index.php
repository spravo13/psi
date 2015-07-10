<?php
/**
 * PHP Site Search
 *
 * PHP version 5.5
 *
 * @category File
 * @package  PSS
 * @author   Spencer Bravo <spencer@codeshrub.com>
 * @license  https://www.gnu.org/licenses/gpl.html GNU GENERAL PUBLIC LICENSE
 * @link     https://github.com/spravo13/pss
 */

if ($_POST['submit'] == "Search!") {

}

?>

<!DOCTYPE html>
  <head>
    <title>Search</title>
  </head>
  <body>
    <form action="index.php" method="post">
      <p>
        <label>search</label>
        <input name="query" required="required" placeholder="Monty Python" type="text">
      </p>
      <p>
        <label>url</label>
        <input name="url" required="required" placeholder="www.codeshrub.com" type="text">
      </p>
      <p>
        <label>max results</label>
        <input name="max_results" placeholder="10" type="number">
      </p>
      <p>
        <input value="Search!" type="submit" id="submit">
      </p>
    </form>
  </body>
</html>