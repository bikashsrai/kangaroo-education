<form class="form form-horizontal" action="<?php echo esc_url( home_url('/') ); ?>" method="GET">
   
    <div class="form-group">
        <div class="input-group">

            <input type="text" name="s" class="home_search form-control"
                placeholder="Type Destination {or} Country" aria-label="Search" required>
            <div class="input-group-prepend ">
                <button type="submit"
                    class="input-group-text text-uppercase white common_hover font_22 p_lr60 font_weight600 text-center submit_button rounded-0 h-100">Search</button>
            </div>
        </div>
    </div>
</form>