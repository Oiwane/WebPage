<?php

$bachelors = array(
    //ここにメンバーを追加
    '市山 力也'=>array('B4', 'Rikiya ICHIYAMA', ''),
    '平木場 風太'=>array('B4', 'Futa HIRAKOBA', 'https://korosuke613.github.io/')
);

foreach ($bachelors as $key => $member) {
    if($member[2]!=''){
        $homepage = '<a href="'.$member[2].'" target="_blank">Home page</a>';
    }else{
        $homepage = '';
    }
    
echo <<<EOT
<div class="row">
    <div class="container">
        <div class="row">
            <div class="col-xs-1">
                $member[0]
            </div>
            <div class="col-xs-7 col-md-5">
                <div class="col-md-4 col-sm-5 col-xs-12">
                    $key
                </div>
                <div class="col-md-8 col-sm-7 col-xs-12">
                    $member[1]
                </div>
            </div>
            <div class="col-xs-4 col-md-2">
                $homepage
            </div>
        </div>
    </div>
</div> 
EOT;
}

?>
