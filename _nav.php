<!-- Page Margins -->
<div id="topborder" class="border"></div>
<div id="leftborder" onselectstart="return false;" ondragstart="return false;"><img src="graphics/leftborder.png"></div>
<div id="bottomborder" class="border"></div>

<!-- Main Menu -->
<ul id="nav">
  <li>
    Collections:
  </li>
  <ul>
    <li>
      <!-- if this is the current page, change this nav item style -->
      <a href="/album/portraits-i/" <?php if($page=="portraits-i") {echo 'class="active"';} ?>>
        <!-- album name -->
        Portraits I
        <!-- arrow to display on hover -->
        <img src="/graphics/arrow-white.png" width="11" height="11" alt="">
      </a>
      <!-- if this is the current page, show it's corresponding prev/next buttons -->
      <?php if($page=="portraits-i"): ?>
        <span id="loader"></span>
        <span id="previous">previous</span> / <span id="next">next</span>
      <?php endif; ?>
    </li>
    <li>
      <a href="/album/portraits-ii/" <?php if($page=="portraits-ii") {echo 'class="active"';} ?>>
        Portraits II
        <img src="/graphics/arrow-white.png" width="11" height="11" alt="">
      </a>
      <?php if($page=="portraits-ii"): ?>
        <span id="loader"></span>
        <span id="previous">previous</span> / <span id="next">next</span>
      <?php endif; ?>
    </li>
    <li>
      <a href="/album/fashion/" <?php if($page=="fashion") {echo 'class="active"';} ?>>
        Fashion
        <img src="/graphics/arrow-white.png" width="11" height="11" alt="">
      </a>
      <?php if($page=="fashion"): ?>
        <span id="loader"></span>
        <span id="previous">previous</span> / <span id="next">next</span>
      <?php endif; ?>
    </li>
    <li>
      <a href="/album/commercial/" <?php if($page=="commercial") {echo 'class="active"';} ?>>
        Commercial
        <img src="/graphics/arrow-white.png" width="11" height="11" alt="">
      </a>
      <?php if($page=="commercial"): ?>
        <span id="loader"></span>
        <span id="previous">previous</span> / <span id="next">next</span>
      <?php endif; ?>
    </li>
    <li>
      <a href="/album/personal/" <?php if($page=="personal") {echo 'class="active"';} ?>>
        Personal
        <img src="/graphics/arrow-white.png" width="11" height="11" alt="">
      </a>
      <?php if($page=="personal"): ?>
        <span id="loader"></span>
        <span id="previous">previous</span> / <span id="next">next</span>
      <?php endif; ?>
    </li>
  </ul>
  <li>
    <a href="/about/" <?php if($page=="about") {echo 'class="active"';} ?>>
      About &amp; Contact
      <img src="/graphics/arrow-black.png" width="11" height="11" alt="">
    </a>
  </li>
</ul>
