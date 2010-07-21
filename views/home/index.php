<?php if (!defined('APPLICATION')) exit(); ?>
<div class="Splash">
   <div class="SplashMessage">
      <h2>The simple way to grow online communities.</h2>
      <p>
         <i class="Sprite SpriteScreen"></i>
         Vanilla is an open-source, standards-compliant, multi-lingual, theme-able, pluggable community forum.
      </p>
      <p>
         <i class="Sprite SpriteSmile"></i>
         Over <span>350,000</span> sites use Vanilla Forums to manage feedback, spark discussion, and make customers smile.
      </p>
      <?php echo Anchor('<strong>Get Your Vanilla Forum Now</strong> Vanilla 2.0; 1.1mb; Released July 21, 2010', 'download', 'Get'); ?>
   </div>
   <div class="SplashPreview">
      <div class="Window">
         <div class="Reel">
         <?php
            $Images = array('screen-1.png', 'screen-2.png', 'screen-3.png', 'screen-4.png', 'screen-5.png');
            for ($i = 0; $i < count($Images); $i++) {
               echo Img('/applications/vforg/design/images/'.$Images[$i], array('alt' => 'Vanilla Screenshot', 'height' => '361', 'width' => '539'));
            }
         ?>
         </div>
      </div>
      <div class="ScreenNav">
      <?php
         $On = 'On';
         for ($i = 0; $i < count($Images); $i++) {
            echo Anchor('<i class="Sprite Sprite'.($i+1).' SpriteDot SpriteDot'.$On.'"></i>', '#', array('rel' => $i+1));
            $On = 'Off';
         }
      ?>
      </div>
   </div>
</div>