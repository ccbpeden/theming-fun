<div id="header">
  <?php if ($page['page_top']): ?>
    <?php print render($page['page_top']); ?>
  <?php endif; ?>
</div>

<div id="wrapper">
  <?php if ($page['help']): ?>
  <?php print render($page['help']); ?>
<?php endif; ?>
  <div id="content">
    <?php if ($page['deals']): ?>
    <?php print render($page['deals']); ?>
    <?php endif; ?>
  </div>

  <div id="sidebar">
    <?php if ($page['content']): ?>
    <?php print render($page['content']); ?>
    <?php endif; ?>
  </div>

</div>
<div id="footer">
  <?php if ($page['page_bottom']): ?>
    <?php print render($page['page_bottom']); ?>
  <?php endif; ?>
</div>
