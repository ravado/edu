<div id="dvContent">

    <div class="search-logo <?php if(isset($search_query)) {echo 'hide'; } ?> ">
 
    </div>
    <div class="search-way">
        <a class="by-site active">По сайту</a>
        <a class="by-web">В интернете</a>
        <input type="hidden" class="search-query" value="<?php if(isset($search_query)) { echo $search_query; } ?>">
    </div>
    <div class="dv-search-content">
        <div id="dv-site-search" class="active search-block" style="width: 100%;">Loading</div>
        <div id="dv-web-search" class="search-block" style="width: 100%;">Loading</div>
    </div>
</div>