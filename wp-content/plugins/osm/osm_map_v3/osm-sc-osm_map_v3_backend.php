<?php
if ($sc_args->getMap_event() == 'TaggedPostsSC'){
  $output .= 'MetaboxEventhandler.TaggedPostsSC('.$MapName.');';
  $output .= $MapName.'.addControl(osm_controls[7]);' . PHP_EOL;
}
else if ($sc_args->getMap_event() == 'SetGeotag'){
  $output .= 'MetaboxEventhandler.SetGeotag('.$MapName.','.$post->ID.');';
  $output .= $MapName.'.addControl(osm_controls[7]);' . PHP_EOL;
}
else if ($sc_args->getMap_event() == 'AddMarker'){
  $output .= 'MetaboxEventhandler.AddMarker('.$MapName.','.$post->ID.');';
  $output .= $MapName.'.addControl(osm_controls[7]);' . PHP_EOL;
}
else if ($sc_args->getMap_event() == 'FileSC'){
  $output .= $MapName.'.addControl(osm_controls[7]);' . PHP_EOL;
}
?>
