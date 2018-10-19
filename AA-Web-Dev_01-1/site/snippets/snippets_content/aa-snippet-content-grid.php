<!-- Pull images from backend -->
<?php 
$projects = page('aa-projekte')->children()->visible();
$projects_col1 = page('aa-projekte')->children()->visible()->filterBy('column', 'column1');
$projects_col2 = page('aa-projekte')->children()->visible()->filterBy('column', 'column2');
$projects_col3 = page('aa-projekte')->children()->visible()->filterBy('column', 'column3');
?>

<div class="grid" id="contentHome">

  <!-- Column 1 -->
  <div class="grid--column" id="column1">
    <?php foreach($projects_col1 as $project): ?>
      <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image ?>
      <div class="grid--item <?= $project->style() ?> <?= $project->similar() ?>">
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
    <?php endforeach ?>
  </div>
  
  <!-- Column 2 -->
  <div class="grid--column" id="column2">
    <?php foreach($projects_col2 as $project): ?>
      <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image ?>
      <div class="grid--item <?= $project->style() ?> <?= $project->similar() ?>">
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
    <?php endforeach ?>
  </div>

  <!-- Column 3 -->
  <div class="grid--column" id="column3">
    <?php foreach($projects_col3 as $project): ?>
      <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image ?>
      <div class="grid--item <?= $project->style() ?> <?= $project->similar() ?>">
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
    <?php endforeach ?>
  </div>
</div>



