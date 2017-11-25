<div id ="topMenu" class="menu">
    <ul>
        <?php foreach ($menuItems as $item): ?>
          <li><a id = "<?php echo $item->idMenuItem; ?>" href = "<?php echo base_url () . $item->actionItem; ?>"><?php echo $item->nameMenuItem; ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
