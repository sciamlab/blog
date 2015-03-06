<!-- THE DATA SOURCE OF THE THE TIMELINE IS THE FILE sciamlab_timeline THAT CAN BE FOUND AND EDITED ON GOOGLE DRIVE -->

<!--
Reading data file
-->

<?php
class TLRecord {

public $type; //ol,dl,sm --> openlab,datalab,smartlab
public $date;
public $title;
public $short_desc;
public $link;

};

$spreadsheet_url="http://docs.google.com/spreadsheets/d/1gY_9mM_C9s1cJNDWfZfH9IZwUnwnbmwpa1m4hipNBsw/export?gid=0&format=csv";
$spreadsheet_data=array();


$row=0;
if (($handle = fopen($spreadsheet_url, "r")) !== FALSE) {

while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    if ($row>1){
        $rec = new TLRecord();
        $rec->type = $data[0]!=""?$data[0]:"";
        $rec->date = $data[1]!=""?$data[1]:"";
        $rec->title = $data[2]!=""?$data[2]:"";
        $rec->short_desc = $data[3]!=""?$data[3]:"";
        $rec->link = $data[4]!=""?$data[4]:"";
        array_push($spreadsheet_data, $rec);
    }  
    $row++;
}
fclose($handle);
}
else {
    die("Problem reading csv");
}
?>





<!--
Generating timeline template
-->

<?php
virtual ("/_includes/header.en.shtml");
?>
<script>document.getElementById("menu_timeline").setAttribute("class",document.getElementById("menu_timeline").getAttribute("class")+ " active")</script>

	<section id="cd-timeline" class="cd-container">
<?php
foreach ($spreadsheet_data as $rec) {
 
  $img="";
  $tooltip="";
  if      ($rec->type == "dl") {
    $img="datalab_logo_65x65.svg";
    $tooltip="DataLab";
  }
  else if ($rec->type == "ol") {
    $img="openlab_logo_65x65.svg";
    $tooltip="OpenLab";
  }
  else{                         
    $img="smartlab_logo_65x65.svg";
    $tooltip="SmartLab";
  }

                  echo '<div class="cd-timeline-block">';
                  echo '      <div class="cd-timeline-img" title="',$tooltip,'">';
                  echo '              <img src="img/',$img,'" alt="',$tooltip,'">';
                  echo '      </div> <!-- cd-timeline-img -->';
                  
                  echo '      <div class="cd-timeline-content">';
                  echo '              <h2>',$rec->title,'</h2>';
                  echo '              <p>',$rec->short_desc,'<p>';

if ($rec->link != ""){
                  echo '              <a href="',$rec->link,'" class="cd-read-more">Read more</a>';
};
                  echo '              <span class="cd-date">',$rec->date,'</span>';
                  echo '      </div> <!-- cd-timeline-content -->';
                  echo '</div> <!-- cd-timeline-block -->';

}
?>

		
	</section> <!-- cd-timeline -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->

<?php
virtual ("/_includes/footer.en");
?>

