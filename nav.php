<?php ?>
<div class="page-sidebar-wrapper">
  <div class="page-sidebar navbar-collapse collapse">
    <ul class="page-sidebar-menu jsMenu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
      <li class="nav-item start active open">
        <a href="<?php echo SITE_URL; ?>" class="nav-link nav-toggle">
          <i class="fa fa-tachometer"></i>
          <span class="title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="javascript:;">
          <i class="fa fa-cog"></i>
          <span class="title">Club</span>
          <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
          <li>
            <a href="<?php echo SITE_URL . '/club/add-club'; ?>">Add Club</a>
          </li>
          <li>
            <a href="<?php echo SITE_URL . '/club/view-active-clubs'; ?>">Active Clubs</a>
          </li>
          <li>
            <a href="<?php echo SITE_URL . '/club/view-inactive-clubs'; ?>">Inactive Clubs</a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="javascript:;">
          <i class="fa fa-cog"></i>
          <span class="title">Reseller</span>
          <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
          <li>
            <a href="<?php echo SITE_URL . '/resellers/add-reseller'; ?>">Add Resellers</a>
          </li>
          <li>
            <a href="<?php echo SITE_URL . '/resellers/view-active-resellers'; ?>">Active Resellers</a>
          </li>
          <li>
            <a href="<?php echo SITE_URL . '/resellers/view-inactive-resellers'; ?>">Inactive Resellers</a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="javascript:;">
          <i class="fa fa-cog"></i>
          <span class="title">Event</span>
          <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
          <li>
            <a href="<?php echo SITE_URL . '/event/add-club-event'; ?>">Add Club Event</a>
          </li>
          <li>
            <a href="<?php echo SITE_URL . '/event/view-active-club-events'; ?>">Active Events</a>
          </li>
          <li>
            <a href="<?php echo SITE_URL . '/event/view-inactive-club-events'; ?>">Inactive Events</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</div>
