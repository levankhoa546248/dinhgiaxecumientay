<div class="banner">
    <div class="col-sm-12 matter-banner" >
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <?php for($i=1;$i<5;$i++):?>
                        <li>
                            <?php echo '<image class="img-responsive" src="'.PATH_IMG_WEB . $slideshow['img'.$i] . '?time=' . time() . '" alt="'.$slideshow['img'.$i].'"/ >'; ?>
                        </li>
                    <?php endfor;?>
                </ul>
            </div>
        </div>
    </div>
</div>