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
      <div class="grid--item <?= $project->style() ?> <?= $project->similar() ?>" id="<?= $project->UID() ?>" data-column="<?= $project->column() ?>">
        <!-- Slide Counter -->
        <div class="grid-item--counter-container">
          <!-- Count images -->
          <?php
          $slideCount = $project->images()->count();
          ?>
          <!-- Place counter if more than cover -->
          <?php if($slideCount > 2) { ?>
            <div class="text--md">
              <span>1/<?php echo $project->images()->count();?>
              </span>
            </div>
          <?php } ?>	
        </div>
        <!-- Item Overlay -->
        <div class="grid-item--overlay">
          <!-- Project Link -->
          <a href="<?= $project->url() ?>">
          </a>
          <!-- Headline/Year/Client Container -->
          <div class="text-wrapper overlay">
            <div class="text-container overlay header">
              <div class="text--lg"><?= str::unhtml( $project->title()->kirbytext() ) ?></div>
              <div class="text--md"><?= $project->year()->kirbytext() ?></div>
            </div>
            <div class="text-container overlay">
              <?php if($project->freeOrClient()->bool()): ?>
                <p class="text--md">Personal Work</p>
                <?php else: ?>
                <p class="text--md"><?= str::unhtml( $project->client()->kirbytext() ) ?></p>
              <?php endif ?>
            </div>
          </div>
          <!-- Description/Button Container -->
          <div class="button-container overlay">
            <!-- Description -->
            <div class="text--md text--paragraph"><?= $project->description()->kirbytext() ?></div>
            <!-- Divider -->
            <div class="text-divider overlay"></div>
            <!-- Button -->
            <?php if($project->similar()->isNotEmpty()): ?>
              <div class="button showSimilar z--high">
                <button data-filter=".<?= $project->similar() ?>">
                  <span>show similar</span>
                </button>
              </div>
            <?php endif ?>
          </div>
        </div>
        <!-- ––––––––––––––––––– -->
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
      <div class="grid--item <?= $project->style() ?> <?= $project->similar() ?>" data-column="<?= $project->column() ?>">
        <!-- Slide Counter -->
        <div class="grid-item--counter-container">
          <!-- Count images -->
          <?php
          $slideCount = $project->images()->count();
          ?>
          <!-- Place counter if more than cover -->
          <?php if($slideCount > 2) { ?>
            <div class="text--md">
              <span>1/<?php echo $project->images()->count();?>
              </span>
            </div>
          <?php } ?>	
        </div>
        <!-- Item Overlay -->
        <div class="grid-item--overlay">
          <!-- Project Link -->
          <a href="<?= $project->url() ?>">
          </a>
          <!-- Headline/Year/Client Container -->
          <div class="text-wrapper overlay">
            <div class="text-container overlay header">
              <div class="text--lg"><?= str::unhtml( $project->title()->kirbytext() ) ?></div>
              <div class="text--md"><?= $project->year()->kirbytext() ?></div>
            </div>
            <div class="text-container overlay">
              <?php if($project->freeOrClient()->bool()): ?>
                <p class="text--md">Personal Work</p>
                <?php else: ?>
                <p class="text--md"><?= str::unhtml( $project->client()->kirbytext() ) ?></p>
              <?php endif ?>
            </div>
          </div>
          <!-- Description/Button Container -->
          <div class="button-container overlay">
            <!-- Description -->
            <div class="text--md text--paragraph"><?= $project->description()->kirbytext() ?></div>
            <!-- Divider -->
            <div class="text-divider overlay"></div>
            <!-- Button -->
            <?php if($project->similar()->isNotEmpty()): ?>
              <div class="button showSimilar z--high">
                <button data-filter=".<?= $project->similar() ?>">
                  <span>show similar</span>
                </button>
              </div>
            <?php endif ?>
          </div>
        </div>
        <!-- ––––––––––––––––––– -->
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
      <div class="grid--item <?= $project->style() ?> <?= $project->similar() ?>" data-column="<?= $project->column() ?>">
        <!-- Slide Counter -->
        <div class="grid-item--counter-container">
          <!-- Count images -->
          <?php
          $slideCount = $project->images()->count();
          ?>
          <!-- Place counter if more than cover -->
          <?php if($slideCount > 2) { ?>
            <div class="text--md">
              <span>1/<?php echo $project->images()->count();?>
              </span>
            </div>
          <?php } ?>	
        </div>
        <!-- Item Overlay -->
        <div class="grid-item--overlay">
          <!-- Project Link -->
          <a href="<?= $project->url() ?>">
          </a>
          <!-- Headline/Year/Client Container -->
          <div class="text-wrapper overlay">
            <div class="text-container overlay header">
              <div class="text--lg"><?= str::unhtml( $project->title()->kirbytext() ) ?></div>
              <div class="text--md"><?= $project->year()->kirbytext() ?></div>
            </div>
            <div class="text-container overlay">
              <?php if($project->freeOrClient()->bool()): ?>
                <p class="text--md">Personal Work</p>
                <?php else: ?>
                <p class="text--md"><?= str::unhtml( $project->client()->kirbytext() ) ?></p>
              <?php endif ?>
            </div>
          </div>
          <!-- Description/Button Container -->
          <div class="button-container overlay">
            <!-- Description -->
            <div class="text--md text--paragraph"><?= $project->description()->kirbytext() ?></div>
            <!-- Divider -->
            <div class="text-divider overlay"></div>
            <!-- Button -->
            <?php if($project->similar()->isNotEmpty()): ?>
              <div class="button showSimilar z--high">
                <button data-filter=".<?= $project->similar() ?>">
                  <span>show similar</span>
                </button>
              </div>
            <?php endif ?>
          </div>
        </div>
        <!-- ––––––––––––––––––– -->
        <!-- Image -->
        <img src="<?= $project->images()->filterBy('filename', '*=', 'cover')->first()->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image" />
      </div>
      <?php endif ?>
    <?php endforeach ?>
  </div>
</div>

<!-- Copies of original grid content -->
<div id="grid-copy" style="display: none;"></div>

<!-- Infinite Scroll Waypoint -->
<div  id="waypoint"
      style="z-index: 99999;
        height: 0px; 
        width: 0px; 
        background-color: red;">
</div>