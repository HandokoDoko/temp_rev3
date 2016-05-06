<?php
// coolRowBox_Begin functions
function coolRowBox_Begin($title = '', $bold_title = '', $isAnyTools = false, $isCollapsable = true, $isRefresable = true, $isFullable = true)
{
    $panelTools = '';
    if($bold_title != '')
        $title = '<span class="text-bold">' . $title . '</span> ' . $bold_title;
    else
        $title = ' <span class="text-bold">' . $title . '</span>';

    if ($isAnyTools == true){
        $panelTools = '
            <div class="panel-tools">
                <div class="dropdown">
                    <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                        <i class="fa fa-cog"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                        <li>
                            <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                        </li>
                        <li>
                            <a class="panel-refresh" href="#">
                                <i class="fa fa-refresh"></i> <span>Refresh</span>
                            </a>
                        </li>
                        <li>
                            <a class="panel-expand" href="#">
                                <i class="fa fa-expand"></i> <span>Fullscreen</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>';
    }
    
    return '
            <div class="row">
                <div class="col-md-12">
                    <div class="'. ($isAnyTools?'panel ':'') .'panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">' . $title . '</h4>' . $panelTools . '
                        </div>
                        <div class="panel-body">
';
}


function coolRowBox_End()
{
	return '
                        </div>
                    </div>
                </div>
            </div>

	';
}




?>