<section>
    <div class='title'>
        <a title='<?php echo $data->category->name ?>'
           Alt='<?php echo $data->category->name ?>'
           href='<?php echo $data->category->link ?>'><?php echo $data->category->name ?>
        </a>
    </div>
    <div class='boxct'>
        <a data-fancybox href='<?php echo $data->hinhanh->link ?>' >
            <img src='<?php echo $data->hinhanh->url_image ?>'>
        </a>
    </div>
</section>