<?php
use Parsehub\Parsehub;

$api_key = "tQu8WG60NyhGFqGi1xezoBQe";
$project_token = "tunnYbMprK0P6jiU6-3TNvCC ";
$run_token = "tFrTnqVtaYZtXG5NZuWg8EC5";


$parsehub = new Parsehub($api_key);
$projectList = $parsehub->getProjectList();
echo $projectList;



//$parsehub = new Parsehub($api_key);
//$project = $parsehub->getProject($project_token);


$parsehub = new Parsehub($api_key);
$data =  $parsehub->getLastReadyRunData($project_token);
json_encode($data);
?>

<script>
$.ajax({
  type: 'POST',
  url: 'http://localhost/site1/utilities/ajax_component_call_handler',
  data: {
    component_function: component_function,
        param_array: param_array
        },
        dataType: "json",
  success: function(data) {
    // how do i get back the JSON variables?
    var values = eval( data ); //if you 100 % trust to your sources.
}
});
    </script>