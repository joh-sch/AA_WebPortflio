
  <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image ?>
  <div class="grid--item <?= $project->style() ?> <?= $project->similar() ?>" id="<?= $project->UID() ?>">
    <!-- Slide Counter -->
    <div class="grid-item--counter-container">
      <!-- Count images -->
      <?php
      $slideCount = $project->images()->count();
      ?>
      <!-- Place counter if more than cover -->
      <?php if($slideCount > 2) { ?>
        <div class="text--headline">
          <span>1/<?php echo $project->images()->count();?>
          </span>
        </div>
      <?php } ?>	
    </div>
    <!-- Item Overlay -->
    <div class="grid-item--overlay">
      <!-- Project Link -->
        <a href="<?= $project->url() ?>"></a>

      <!-- Project Year -->
      <div class="grid-item--overlay--text-container">
        <div class="grid-item--overlay--text text--sm year">
          <?= $project->year()->kirbytext() ?>
        </div>
      </div>

      <!-- – Project Description –– -->
      <div class="grid-item--overlay--text-container">

        <div class="grid-item--overlay--text title">
          <!-- Title -->
          <span class="text--md"><?= str::unhtml( $project->title()->kirbytext() ) ?> </span>
          <!-- Client/Free Work -->
          <?php if($project->freeOrClient()->bool()): ?>
            <p class="text--sm">(Personal Work)</p>
            <?php else: ?>
            <p class="text--sm">(<?= str::unhtml( $project->client()->kirbytext() ) ?>)</p>
          <?php endif ?>
        </div>
        
        <div class="grid-item--overlay--text text--md description">
          <span><?= $project->description()->kirbytext() ?></span>
        </div>
        <!-- »Show similar« Btn -->
        <?php if($project->similar()->isNotEmpty()): ?>
          <div class="grid-item--overlay--btn text--headline z--high filters--tag" onClick="">
            <button data-filter=".<?= $project->similar() ?>">
              <span>show similar</span>
            </button>
          </div>
        <?php endif ?>
        <!-- –––––––––––––––––– -->
      </div>
      <!-- –––––––––––––––––– -->
    </div>
    <!-- Image -->
    <img src="<?= $project->images()->filterBy('filename', '*=', 'cover')->first()->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image" />
  </div>
  <?php endif ?>
