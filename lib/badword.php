<?

function is_badword($s, $include_fragments=false)
{
  return Badword::find(array(
      'conditions'=>array("badword like '%!%' or ? like concat('%',badword,'%')", $s, $s)
  ));
}