<!-- navigation -->
    <nav class="navbar navbar-expand-lg pt-3 bg-white pb-3 shadow fixed-top" style="border-top: 20px solid #f57421">
      <div class="container">
        <a class="navbar-brand fw-bolder" href="<?php echo $site->url(); ?>"><img src="<?php echo $site->logo(); ?>" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
          </svg>
        </button>
        <div class="collapse navbar-collapse flex justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-md-none">
            <?php foreach ($categories->db as $key => $fields):
              if ($fields['list']): ?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="<?php echo DOMAIN_CATEGORIES . $key; ?>"><?php echo $fields['name']; ?></a>
            </li>
            <?php endif; endforeach; ?>
          </ul>
          <?php if (pluginActivated('pluginSearch')): ?>
          <div class="d-flex">
            <input id="search-input" style="border:1px" class="form-control me-2 rounded-pill border-0" type="search" placeholder="Search" aria-label="Search">
            <button onClick="searchNow()" class="btn btn-warning rounded-pill" type="submit">Go</button>
            <script>
              function searchNow() {
                var searchURL = "<?php echo Theme::siteUrl(); ?>search/";
                window.open(searchURL + document.getElementById("search-input").value, "_self");
              }
              var elem = document.getElementById('search-input');
              elem.addEventListener('keypress', function(e){
                if (e.keyCode == 13) {
                  searchNow();
                }
              });
            </script>
          </div>
          <?php endif ?>
        </div>
      </div>
    </nav>
<!--/ navigation -->