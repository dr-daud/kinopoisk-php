<?php
/**
 *  @var \App\Kernel\View\View $view
 */
?>


<?php $view->component('start') ?>
  <h1>add movie page</h1>

  <form action="/admin/movies/add" method="post">
    <p>Name</p>
    <input type="text" name="name">
    <button type="submit">Add</button>
  </form>
<?php $view->component('end') ?>
 