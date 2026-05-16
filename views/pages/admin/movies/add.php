<?php
/**
 *  @var \App\Kernel\View\View $view
 *  @var \App\Kernel\Session\Session $session
 */
?>


<?php $view->component('start') ?>
  <h1>add movie page</h1>

  <form action="/admin/movies/addw" method="post">
    <p>Name</p>
    <input type="text" name="name">
    <?php if($session->has('name')) ?>
      <ul>
      <?php foreach ($session->getFlash ('name') as $error) { ?>
        <li style='color: red;'><?php echo $error ?></li>
        <?php } ?>
      </ul> 
    <button type="submit">Add</button>
  </form>
<?php $view->component('end') ?>
 