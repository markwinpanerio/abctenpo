<div class="property-listing-figures">
  <table class="property-listing-figures-table">
    <?php $module = 'property-listing'; ?>
    <tbody class="property-listing-figures-tbody">
      <?php foreach ($figures as $figure) : ?>
        <tr class="property-listing-figures-row">
          <?php foreach ($figure['columns'] as $column) : ?>
            <td class="property-listing-figures-column<?php echo ($column['column-modifier'] !='' ? ' '.$module.'-'.$column['column-modifier'] : ''); ?>"><?php echo $column['column']; ?></td>
          <?php endforeach; ?>
        </tr>
     <?php endforeach; ?>
    </tbody>
  </table>
</div>
