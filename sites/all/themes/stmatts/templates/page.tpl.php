<?php
?>
<div id="page-wrapper">
  <div id="page">


    <div id="main-layout" class="layout-container">

      <div class="slide-show-wrapper">
        <div class="stickey-header-wrapper">
          <div class="logo-wrap p-3 mb-2">
            <?php if ($logo): ?>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
              </a>
            <?php endif; ?>
          </div>
          <div class="container-fluid stickey-nav-wrap">
            <div id="main-nav-bar" class="nav-bar-wrap p-3 d-lg-flex">
              <div class="navbar-brand col-lg-2 me-0"></div>
              <div class="navbar-nav col-lg-8 justify-content-lg-center2">
                <?php if ($page['mainmenu']): ?>
                  <div class="menu-block">
                    <?php print render($page['mainmenu']); ?>
                  </div>
                <?php endif; ?>
              </div>
              <div class="d-lg-flex2 col-lg-2 justify-content-lg-end">
                <?php if ($page['site_search']): ?>
                  <div class="search-block">
                    <?php print render($page['site_search']); ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <?php if ($page['main_slider']): ?>
          <div class="main-slider">
            <?php print render($page['main_slider']); ?>
          </div>
        <?php endif; ?>
      </div>

      <?php if ($page['main_services_focus']): ?>
        <div class="services-widget-wrap animate__animated animate__flipInX">
          <div class="services-widget-inner-wrap">
            <div class="container-fluid">
              <?php print render($page['main_services_focus']); ?>
            </div>
          </div>
        </div>
      <?php endif; ?>


      <?php if ($page['welcome']): ?>
        <section class="outter-padding2 welcome-section">
          <div class="container">
            <div class="container-md">
              <?php print render($page['welcome']); ?>
            </div>
          </div>
        </section>
      <?php endif; ?>

      <div class="main-title-wrap">
              <div class="container text-center">
                <?php if ($title): ?>
                  <h1 class="title animate__animated animate__flipInY" id="page-title">
                    <?php print $title; ?>
                  </h1>
                <?php endif; ?>
              </div>
            </div>


      <div class="container">
        <div id="main-wrapper" class="clearfix layout-content main-page-content">

          <?php if ($messages): ?>
            <div id="messages">
              <div class="section clearfix">
                <?php print $messages; ?>
              </div>
            </div>
          <?php endif; ?>

          <div id="main" class="clearfix">

            <?php if ($breadcrumb): ?>
              <div id="breadcrumb"><?php print $breadcrumb; ?></div>
            <?php endif; ?>

            <div id="content" class="column layout-content main-page-content">
              <div class="section">
                <a id="main-content"></a>
                <?php print render($title_prefix); ?>
                <?php print render($title_suffix); ?>
                <?php if ($tabs): ?>
                  <div class="tabs">
                    <?php print render($tabs); ?>
                  </div>
                <?php endif; ?>
                <?php print render($page['help']); ?>
                <?php if ($action_links): ?>
                  <ul class="action-links">
                    <?php print render($action_links); ?>
                  </ul>
                <?php endif; ?>
                <?php print render($page['content']); ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php if ($page['related_articles']): ?>
        <div class="related-articles-wrap">
          <div class="container p-5">
            <div class="row">
              <?php print render($page['related_articles']); ?>
            </div>
          </div>
        </div>
      <?php endif; ?>


      <?php if ($page['upcoming_events'] || $page['news_letters']) { ?>
        <section class="events-section">
          <div class="container p-5">
            <div class="row">
              <?php if ($page['upcoming_events']): ?>
                <div class="col-lg-6">
                  <?php print render($page['upcoming_events']); ?>
                </div>
              <?php endif; ?>

              <?php if ($page['news_letters']): ?>
                <div class="col-lg-6">
                  <?php print render($page['news_letters']); ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </section>
      <?php } ?>


      <?php if ($page['timetable']): ?>
        <section class="timetable-section">
          <div class="container p-5">
            <div class="row">
              <?php print render($page['timetable']); ?>
            </div>
          </div>
        </section>
      <?php endif; ?>



      <?php if ($page['livestreaming_block']): ?>
        <section class="livestreaming-section">
          <div class="container p-5">
            <div class="livestreaming-section-wrap">
              <?php print render($page['livestreaming_block']); ?>
            </div>
          </div>
        </section>
      <?php endif; ?>



      <?php if ($page['latest_blog_articles']): ?>
        <section class="blog-articles-section">
          <div class="container p-5">
            <div class="row">
              <?php print render($page['latest_blog_articles']); ?>
            </div>
          </div>
        </section>
      <?php endif; ?>



      <?php if ($page['offerings_section']): ?>
        <section class="offering-section">
          <div class="container p-5">
            <div class="row">
              <?php print render($page['offerings_section']); ?>
            </div>
          </div>
        </section>
      <?php endif; ?>


      <?php if ($page['subscribe_section']): ?>
        <section class="subscribe-section">
          <div class="container p-5">
            <div class="row">
              <?php print render($page['subscribe_section']); ?>
            </div>
          </div>
        </section>
      <?php endif; ?>


      <?php if ($page['find_us_section']): ?>
        <section class="findus-section">
          <div class="container p-5">
            <div class="row">
              <?php print render($page['find_us_section']); ?>
            </div>
          </div>
        </section>
      <?php endif; ?>

      <footer class="contentinfo p-5">
        <div class="container">
          <div class="row justify-content-center align-items-end footer-quick-links">
            <?php if ($page['white_logo']): ?>
              <div class="col-md-3 text-center my-4">
                <div class="logoarea-white">
                  <?php print render($page['white_logo']); ?>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <hr>
        </hr>
        <div class="container">
          <div class="row align-items-end justify-content-center ">
            <div class="col-md-6 col-lg-6 col-12 copyright-content text-center">
              <?php print t('Copyright'); ?> &copy;
              <?php echo date("Y"); ?> St. Matthews Anglican Church Holland Park. All rights reserved.
            </div>
          </div>
        </div>
      </footer>


    </div>

  </div>
</div>