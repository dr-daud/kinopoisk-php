<?php
/**
 *  @var \App\Kernel\View\ViewInterface $view
 *  @var \App\Kernel\Session\SessionInterface $session
 */
?>


<?php $view->component('start') ?>
  <form action="/login" method="post">

    <?php if($session->has('error')) { ?>
      <p style='color: red;'>
        <?php echo $session->getFlash('error') ?>
      </p>
    <?php } ?> 

    <p>email</p>

    <?php if($session->has('email')) { ?>
      <?php foreach ($session->getFlash ('email') as $error) { ?>
        <li style='color: red;'><?php echo $error ?></li>
      <?php } ?>
    <?php } ?> 

    <p>Login</p>
    <input type="text" name="email">
    <p>password</p>
    <input type="password" name="password">
    <div> 
      <button type="submit">Login</button>
    </div>
  </form>
<?php $view->component('end') ?>
 