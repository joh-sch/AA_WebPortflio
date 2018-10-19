<?php

// Target Member
$filter = $_POST['filter'];

// Empty data container
$html = '';

// Access CMS
$page = page('aa-projekte');
$projects_all = $page->children();
$projects_vector = $page->children()->visible()->filterBy('style', $filter);

foreach($projects_vector as $project) {
  $html .= snippet('aa-snippet-grid-col1', compact('project'), true);
}
$data['html'] = $html;

// JSON encode the $data array
echo json_encode($data);