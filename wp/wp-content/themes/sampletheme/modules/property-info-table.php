<table class="property-info-table">
  <tbody class="property-info-table-body">

    <?php foreach ($propertyInfoDatas as $data): ?>
      <?php
        $column1Title                 = $data['column1Title'][0];
        $column1TitleOption           = $data['column1Title'][1]['option'];
        $column1TitleSpClass          = $data['column1Title'][1]['spClass'];
        $column2Title                 = $data['column2Title'][0];
        $column2TitleOption           = $data['column2Title'][1]['option'];
        $column2TitleSpClass          = $data['column2Title'][1]['spClass'];
        $column1Description           = $data['column1Description'][0];
        $column1DescriptionOption     = $data['column1Description'][1]['option'];
        $column1DescriptionSpClass    = $data['column1Description'][1]['spClass'];
        $column2Description           = $data['column2Description'][0];
        $column2DescriptionOption     = $data['column2Description'][1]['option'];
        $column2DescriptionSpClass    = $data['column2Description'][1]['spClass'];
      ?>
      <tr class="property-info-table-row">

        <?php if($column1Title):?>
          <td class="property-info-table-column property-info-table-column-title <?php echo $column1TitleSpClass;?>" <?php echo $column1TitleOption;?>>
            <?php echo $column1Title;?>
          </td>
        <?php endif;?>

        <?php if($column1Description):?>
          <td class="property-info-table-column property-info-table-column-content <?php echo $column1DescriptionSpClass;?>" <?php echo $column1DescriptionOption;?>>
            <?php echo $column1Description;?>
          </td>
        <?php endif;?>

        <?php if($column2Title):?>
          <td class="property-info-table-column property-info-table-column-title <?php echo $column2TitleSpClass;?>" <?php echo $column2TitleOption;?>>
            <?php echo $column2Title;?>
          </td>
        <?php endif; ?>

        <?php if($column2Description):?>
          <td class="property-info-table-column property-info-table-column-content <?php echo $column2DescriptionSpClass;?>" <?php echo $column2DescriptionOption;?>>
            <?php echo $column2Description;?>
          </td>
        <?php endif;?>

      </tr>
    <?php endforeach; ?>

  </tbody>
</table>
