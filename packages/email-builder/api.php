<?php

include_once 'includes/db.class.php';

$response=array();
$db = new Db();

if($_GET['action'] === 'get_template_content_html'){
    $html = '';
    $templateId = $_GET['template_id'];
    $result = $db->getTemplatesById($templateId);
    if ($result==-1) {
        $response['code']=-1;
        $response['message']='Database error';
        echo  json_encode($response);
        return;
    }
    $response['code'] = 0;
    $response['message'] = 'success';
    $response['name'] = $result[0]['name'];
    $blocks = $db->get_template_blocksById($templateId) ?? [];
    // $response['blocks'] = $blocks;
    foreach ($blocks as $block){
        $html .= '<div class="sortable-row-content"
                    data-id='.$block['block_id'].'>'.
                        str_replace('contenteditable="true"', '', $block['content'])
                .'</div></div></div>';
    }
    $response['html'] = $html;
}elseif($_GET['action'] === 'get_templates'){
    $response = $db->getTemplates();
}

echo  json_encode($response);
?>
