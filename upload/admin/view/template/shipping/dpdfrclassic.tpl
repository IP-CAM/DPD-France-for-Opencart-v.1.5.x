<?php echo $header; ?>
<div id="content">
  <div class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
    <?php } ?>
  </div>
  <?php if ($error_warning) { ?>
  <div class="warning"><?php echo $error_warning; ?></div>
  <?php } ?>
  <div class="box">
    <div class="heading">
      <h1><img src="view/image/shipping.png" alt="" /> <?php echo $heading_title; ?></h1>
      <div class="buttons"><a onclick="$('#form').submit();" class="button"><?php echo $button_save; ?></a><a href="<?php echo $cancel; ?>" class="button"><?php echo $button_cancel; ?></a></div>
    </div>
    <div class="content">
      <div class="vtabs"><a href="#tab-general"><?php echo $tab_general; ?></a>
        <?php foreach ($geo_zones as $geo_zone) { ?>
        <a href="#tab-geo-zone<?php echo $geo_zone['geo_zone_id']; ?>"><?php echo $geo_zone['name']; ?></a>
        <?php } ?>
      </div>
      <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form">
        <div id="tab-general" class="vtabs-content">
          <table class="form">
            <tr>
              <td><?php echo $entry_status; ?></td>
              <td><select name="dpdfrclassic_status">
                  <?php if ($dpdfrclassic_status) { ?>
                  <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                  <option value="0"><?php echo $text_disabled; ?></option>
                  <?php } else { ?>
                  <option value="1"><?php echo $text_enabled; ?></option>
                  <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                  <?php } ?>
                </select> <?php echo $text_activate; ?></td>
            </tr>
			<tr>
              <td><?php echo $entry_agence; ?></td>
              <td><input type="text" name="dpdfrclassic_agence" value="<?php echo $dpdfrclassic_agence; ?>" size="3" /> <?php echo $text_agence; ?></td>
            </tr>
			<tr>
              <td><?php echo $entry_cargo; ?></td>
              <td><input type="text" name="dpdfrclassic_cargo" value="<?php echo $dpdfrclassic_cargo; ?>" size="5" /> <?php echo $text_cargo; ?></td>
            </tr>
            <tr>
              <td><?php echo $entry_advalorem; ?></td>
              <td><select name="dpdfrclassic_advalorem">
                  <?php if ($dpdfrclassic_advalorem) { ?>
                  <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                  <option value="0"><?php echo $text_disabled; ?></option>
                  <?php } else { ?>
                  <option value="1"><?php echo $text_enabled; ?></option>
                  <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                  <?php } ?>
                </select> <?php echo $text_advalorem; ?></td>
            </tr>
			<tr>
              <td><?php echo $entry_suppiles; ?></td>
              <td><input type="text" name="dpdfrclassic_suppiles" value="<?php echo $dpdfrclassic_suppiles; ?>" size="5" /> <?php echo $text_suppiles; ?></td>
            </tr>
			<tr>
              <td><?php echo $entry_suppmontagne; ?></td>
              <td><input type="text" name="dpdfrclassic_suppmontagne" value="<?php echo $dpdfrclassic_suppmontagne; ?>" size="5" /> <?php echo $text_suppmontagne; ?></td>
            </tr>
            <tr>
              <td><?php echo $entry_sort_order; ?></td>
              <td><input type="text" name="dpdfrclassic_sort_order" value="<?php echo $dpdfrclassic_sort_order; ?>" size="1" /> <?php echo $text_sort_order; ?></td>
            </tr>
			<tr>
              <td><?php echo $entry_tax_class; ?></td>
              <td><select name="dpdfrclassic_tax_class_id">
                  <option value="0"><?php echo $text_none; ?></option>
                  <?php foreach ($tax_classes as $tax_class) { ?>
                  <?php if ($tax_class['tax_class_id'] == $dpdfrclassic_tax_class_id) { ?>
                  <option value="<?php echo $tax_class['tax_class_id']; ?>" selected="selected"><?php echo $tax_class['title']; ?></option>
                  <?php } else { ?>
                  <option value="<?php echo $tax_class['tax_class_id']; ?>"><?php echo $tax_class['title']; ?></option>
                  <?php } ?>
                  <?php } ?>
                </select></td>
            </tr>
          </table>
        </div>
        <?php foreach ($geo_zones as $geo_zone) { ?>
        <div id="tab-geo-zone<?php echo $geo_zone['geo_zone_id']; ?>" class="vtabs-content">
          <table class="form">
            <tr>
              <td><?php echo $entry_delivery; ?></td>
              <td><select name="dpdfrclassic_<?php echo $geo_zone['geo_zone_id']; ?>_status">
                  <?php if (${'dpdfrclassic_' . $geo_zone['geo_zone_id'] . '_status'}) { ?>
                  <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                  <option value="0"><?php echo $text_disabled; ?></option>
                  <?php } else { ?>
                  <option value="1"><?php echo $text_enabled; ?></option>
                  <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                  <?php } ?>
                </select><?php echo $text_delivery; ?></td>
			<tr>
              <td><?php echo $entry_rate; ?></td>
              <td><textarea name="dpdfrclassic_<?php echo $geo_zone['geo_zone_id']; ?>_rate" cols="40" rows="5"><?php echo ${'dpdfrclassic_' . $geo_zone['geo_zone_id'] . '_rate'}; ?></textarea></td>
            </tr>
			<tr>
              <td><?php echo $entry_franco; ?></td>
              <td><input type="text" name="dpdfrclassic_<?php echo $geo_zone['geo_zone_id']; ?>_franco" size="5" value="<?php echo ${'dpdfrclassic_' . $geo_zone['geo_zone_id'] . '_franco'}; ?>"</input> € <?php echo $text_franco; ?></td>
            </tr>
            </tr>
          </table>
        </div>
        <?php } ?>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript"><!--
$('.vtabs a').tabs(); 
//--></script> 
<?php echo $footer; ?> 