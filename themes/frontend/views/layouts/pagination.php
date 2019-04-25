   <div class="phantrang">
   <?php
            $this->widget('CLinkPager', array(

                'pages' => $pages,
            ));

            ?>
    </div>
            <style type="text/css">
            	.phantrang {text-align: right; }
            	.pagination {display: inline-block; padding-left: 0; margin: 20px 0; border-radius: 4px; }
            	.pagination>li {display: inline; }
            	.pagination>li:first-child>a, .pagination>li:first-child>span {margin-left: 0; border-top-left-radius: 4px; border-bottom-left-radius: 4px; }
            	.hidden {display: none!important; visibility: hidden!important; }
            	.pagination>li>a, .pagination>li>span {position: relative; float: left; padding: 6px 12px; margin-left: -1px; line-height: 1.42857143; color: black; text-decoration: none; background-color: #fff; border: 1px solid #ddd; }
            	.pagination>li>a:hover,.pagination>li.selected>a, .pagination>li>span:hover, .pagination>li>a:focus, .pagination>li>span:focus {
    background: black;
    color: white;
    border: 1px solid #c5c5c5;
}
            </style>