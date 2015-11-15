


<!DOCTYPE html>
<html lang="en" class=" is-copy-enabled">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta name="viewport" content="width=1020">
    
    
    <title>ozay-backend/eventsg.php at Rakesh · rakeshramesh04/ozay-backend · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png">
    <meta property="fb:app_id" content="1401488693436528">

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="rakeshramesh04/ozay-backend" name="twitter:title" /><meta content="Contribute to ozay-backend development by creating an account on GitHub." name="twitter:description" /><meta content="https://avatars3.githubusercontent.com/u/14842405?v=3&amp;s=400" name="twitter:image:src" />
      <meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars3.githubusercontent.com/u/14842405?v=3&amp;s=400" property="og:image" /><meta content="rakeshramesh04/ozay-backend" property="og:title" /><meta content="https://github.com/rakeshramesh04/ozay-backend" property="og:url" /><meta content="Contribute to ozay-backend development by creating an account on GitHub." property="og:description" />
      <meta name="browser-stats-url" content="https://api.github.com/_private/browser/stats">
    <meta name="browser-errors-url" content="https://api.github.com/_private/browser/errors">
    <link rel="assets" href="https://assets-cdn.github.com/">
    
    <meta name="pjax-timeout" content="1000">
    

    <meta name="msapplication-TileImage" content="/windows-tile.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="selected-link" value="repo_source" data-pjax-transient>

    <meta name="google-site-verification" content="KT5gs8h0wvaagLKAVWq8bbeNwnZZK1r1XQysX3xurLU">
    <meta name="google-analytics" content="UA-3769691-2">

<meta content="collector.githubapp.com" name="octolytics-host" /><meta content="github" name="octolytics-app-id" /><meta content="CF26F55B:6797:1D373BCE:5648309D" name="octolytics-dimension-request_id" />

<meta content="Rails, view, blob#show" data-pjax-transient="true" name="analytics-event" />


  <meta class="js-ga-set" name="dimension1" content="Logged Out">
    <meta class="js-ga-set" name="dimension4" content="Current repo nav">




    <meta name="is-dotcom" content="true">
        <meta name="hostname" content="github.com">
    <meta name="user-login" content="">

      <link rel="mask-icon" href="https://assets-cdn.github.com/pinned-octocat.svg" color="#4078c0">
      <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico">

    <meta content="2141e4bc6eb5a74d50877078d45c5fc9e3af3e15" name="form-nonce" />

    <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/github-6670887f84dea33391b25bf5af0455816ab82a9bec8f4f5e4d8160d53b08c0f3.css" integrity="sha256-ZnCIf4TeozORslv1rwRVgWq4Kpvsj09eTYFg1TsIwPM=" media="all" rel="stylesheet" />
    <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/github2-53964e9b93636aa437196c028e3b15febd3c6d5a52d4e8368a9c2894932d294e.css" integrity="sha256-U5ZOm5NjaqQ3GWwCjjsV/r08bVpS1Og2ipwolJMtKU4=" media="all" rel="stylesheet" />
    
    
    


    <meta http-equiv="x-pjax-version" content="647af4c4c6c645f2eb83f6f77f97a93f">

      
  <meta name="description" content="Contribute to ozay-backend development by creating an account on GitHub.">
  <meta name="go-import" content="github.com/rakeshramesh04/ozay-backend git https://github.com/rakeshramesh04/ozay-backend.git">

  <meta content="14842405" name="octolytics-dimension-user_id" /><meta content="rakeshramesh04" name="octolytics-dimension-user_login" /><meta content="45051759" name="octolytics-dimension-repository_id" /><meta content="rakeshramesh04/ozay-backend" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="true" name="octolytics-dimension-repository_is_fork" /><meta content="33646428" name="octolytics-dimension-repository_parent_id" /><meta content="OzayOrg/ozay-backend" name="octolytics-dimension-repository_parent_nwo" /><meta content="27971971" name="octolytics-dimension-repository_network_root_id" /><meta content="zohebsait/ozay-backend" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/rakeshramesh04/ozay-backend/commits/Rakesh.atom" rel="alternate" title="Recent Commits to ozay-backend:Rakesh" type="application/atom+xml">

  </head>


  <body class="logged_out   env-production windows vis-public fork page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>

    
    
    



      
      <div class="header header-logged-out" role="banner">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/" data-ga-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions" role="navigation">
        <a class="btn btn-primary" href="/join" data-ga-click="(Logged out) Header, clicked Sign up, text:sign-up">Sign up</a>
      <a class="btn" href="/login?return_to=%2Frakeshramesh04%2Fozay-backend%2Fblob%2FRakesh%2Fsrc%2Fmain%2Fjava%2Fcom%2Fozay%2Fservice%2Futil%2Feventsg.php" data-ga-click="(Logged out) Header, clicked Sign in, text:sign-in">Sign in</a>
    </div>

    <div class="site-search repo-scope js-site-search" role="search">
      <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/rakeshramesh04/ozay-backend/search" class="js-site-search-form" data-global-search-url="/search" data-repo-search-url="/rakeshramesh04/ozay-backend/search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
  <label class="js-chromeless-input-container form-control">
    <div class="scope-badge">This repository</div>
    <input type="text"
      class="js-site-search-focus js-site-search-field is-clearable chromeless-input"
      data-hotkey="s"
      name="q"
      placeholder="Search"
      aria-label="Search this repository"
      data-global-scope-placeholder="Search GitHub"
      data-repo-scope-placeholder="Search"
      tabindex="1"
      autocapitalize="off">
  </label>
</form>
    </div>

      <ul class="header-nav left" role="navigation">
          <li class="header-nav-item">
            <a class="header-nav-link" href="/explore" data-ga-click="(Logged out) Header, go to explore, text:explore">Explore</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="/features" data-ga-click="(Logged out) Header, go to features, text:features">Features</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="https://enterprise.github.com/" data-ga-click="(Logged out) Header, go to enterprise, text:enterprise">Enterprise</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="/pricing" data-ga-click="(Logged out) Header, go to pricing, text:pricing">Pricing</a>
          </li>
      </ul>

  </div>
</div>



    <div id="start-of-content" class="accessibility-aid"></div>

    <div id="js-flash-container">
</div>


    <div role="main" class="main-content">
        <div itemscope itemtype="http://schema.org/WebPage">
    <div class="pagehead repohead instapaper_ignore readability-menu">

      <div class="container">

        <div class="clearfix">
          

<ul class="pagehead-actions">

  <li>
      <a href="/login?return_to=%2Frakeshramesh04%2Fozay-backend"
    class="btn btn-sm btn-with-count tooltipped tooltipped-n"
    aria-label="You must be signed in to watch a repository" rel="nofollow">
    <span class="octicon octicon-eye"></span>
    Watch
  </a>
  <a class="social-count" href="/rakeshramesh04/ozay-backend/watchers">
    1
  </a>

  </li>

  <li>
      <a href="/login?return_to=%2Frakeshramesh04%2Fozay-backend"
    class="btn btn-sm btn-with-count tooltipped tooltipped-n"
    aria-label="You must be signed in to star a repository" rel="nofollow">
    <span class="octicon octicon-star"></span>
    Star
  </a>

    <a class="social-count js-social-count" href="/rakeshramesh04/ozay-backend/stargazers">
      0
    </a>

  </li>

  <li>
      <a href="/login?return_to=%2Frakeshramesh04%2Fozay-backend"
        class="btn btn-sm btn-with-count tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-repo-forked"></span>
        Fork
      </a>

    <a href="/rakeshramesh04/ozay-backend/network" class="social-count">
      7
    </a>
  </li>
</ul>

          <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public ">
  <span class="mega-octicon octicon-repo-forked"></span>
  <span class="author"><a href="/rakeshramesh04" class="url fn" itemprop="url" rel="author"><span itemprop="title">rakeshramesh04</span></a></span><!--
--><span class="path-divider">/</span><!--
--><strong><a href="/rakeshramesh04/ozay-backend" data-pjax="#js-repo-pjax-container">ozay-backend</a></strong>

  <span class="page-context-loader">
    <img alt="" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
  </span>

    <span class="fork-flag">
      <span class="text">forked from <a href="/OzayOrg/ozay-backend">OzayOrg/ozay-backend</a></span>
    </span>
</h1>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline ">
        <div class="repository-sidebar clearfix">
          
<nav class="sunken-menu repo-nav js-repo-nav js-sidenav-container-pjax js-octicon-loaders"
     role="navigation"
     data-pjax="#js-repo-pjax-container"
     data-issue-count-url="/rakeshramesh04/ozay-backend/issues/counts">
  <ul class="sunken-menu-group">
    <li class="tooltipped tooltipped-w" aria-label="Code">
      <a href="/rakeshramesh04/ozay-backend/tree/Rakesh" aria-label="Code" aria-selected="true" class="js-selected-navigation-item selected sunken-menu-item" data-hotkey="g c" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /rakeshramesh04/ozay-backend/tree/Rakesh">
        <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>    </li>


    <li class="tooltipped tooltipped-w" aria-label="Pull requests">
      <a href="/rakeshramesh04/ozay-backend/pulls" aria-label="Pull requests" class="js-selected-navigation-item sunken-menu-item" data-hotkey="g p" data-selected-links="repo_pulls /rakeshramesh04/ozay-backend/pulls">
          <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull requests</span>
          <span class="js-pull-replace-counter"></span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>    </li>

  </ul>
  <div class="sunken-menu-separator"></div>
  <ul class="sunken-menu-group">

    <li class="tooltipped tooltipped-w" aria-label="Pulse">
      <a href="/rakeshramesh04/ozay-backend/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-selected-links="pulse /rakeshramesh04/ozay-backend/pulse">
        <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>    </li>

    <li class="tooltipped tooltipped-w" aria-label="Graphs">
      <a href="/rakeshramesh04/ozay-backend/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-selected-links="repo_graphs repo_contributors /rakeshramesh04/ozay-backend/graphs">
        <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>    </li>
  </ul>


</nav>

            <div class="only-with-full-nav">
                
<div class="js-clone-url clone-url open"
  data-protocol-type="http">
  <h3 class="text-small text-muted"><span class="text-emphasized">HTTPS</span> clone URL</h3>
  <div class="input-group js-zeroclipboard-container">
    <input type="text" class="input-mini text-small text-muted input-monospace js-url-field js-zeroclipboard-target"
           value="https://github.com/rakeshramesh04/ozay-backend.git" readonly="readonly" aria-label="HTTPS clone URL">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  
<div class="js-clone-url clone-url "
  data-protocol-type="subversion">
  <h3 class="text-small text-muted"><span class="text-emphasized">Subversion</span> checkout URL</h3>
  <div class="input-group js-zeroclipboard-container">
    <input type="text" class="input-mini text-small text-muted input-monospace js-url-field js-zeroclipboard-target"
           value="https://github.com/rakeshramesh04/ozay-backend" readonly="readonly" aria-label="Subversion checkout URL">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>



<div class="clone-options text-small text-muted">You can clone with
  <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone" class="inline-form js-clone-selector-form " data-form-nonce="2141e4bc6eb5a74d50877078d45c5fc9e3af3e15" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="NPs/ltSK9JQ+6+pWzNg+edvznrALUgNQuAyhcD9n4pHEmaVVHZCYqzgbvSRcDoAq05Cy8IaeVKGZy6TFkhmPLQ==" /></div><button class="btn-link js-clone-selector" data-protocol="http" type="submit">HTTPS</button></form> or <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone" class="inline-form js-clone-selector-form " data-form-nonce="2141e4bc6eb5a74d50877078d45c5fc9e3af3e15" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="ylScLZHumqi/4+pGvFJ7BDZ+cNKJ0MLiBKHgaLOVXTQkfH8/NBULvT07pE0tjgUvmPooRfKKpIUKnvwxXvdF6A==" /></div><button class="btn-link js-clone-selector" data-protocol="subversion" type="submit">Subversion</button></form>.
  <a href="https://help.github.com/articles/which-remote-url-should-i-use" class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <span class="octicon octicon-question"></span>
  </a>
</div>
  <a href="https://windows.github.com" class="btn btn-sm sidebar-button" title="Save rakeshramesh04/ozay-backend to your computer and use it in GitHub Desktop." aria-label="Save rakeshramesh04/ozay-backend to your computer and use it in GitHub Desktop.">
    <span class="octicon octicon-desktop-download"></span>
    Clone in Desktop
  </a>

              <a href="/rakeshramesh04/ozay-backend/archive/Rakesh.zip"
                 class="btn btn-sm sidebar-button"
                 aria-label="Download the contents of rakeshramesh04/ozay-backend as a zip file"
                 title="Download the contents of rakeshramesh04/ozay-backend as a zip file"
                 rel="nofollow">
                <span class="octicon octicon-cloud-download"></span>
                Download ZIP
              </a>
            </div>
        </div>
        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>

          

<a href="/rakeshramesh04/ozay-backend/blob/ba1ceaeeeaeeea5dd71be251d068a51636b9d9d8/src/main/java/com/ozay/service/util/eventsg.php" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:49a9312d44fc3d8dcb0242690f47957b -->

  <div class="file-navigation js-zeroclipboard-container">
    
<div class="select-menu js-menu-container js-select-menu left">
  <button class="btn btn-sm select-menu-button js-menu-target css-truncate" data-hotkey="w"
    title="Rakesh"
    type="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <i>Branch:</i>
    <span class="js-select-button css-truncate-target">Rakesh</span>
  </button>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="octicon octicon-x js-menu-close" role="button" aria-label="Close"></span>
        <span class="select-menu-title">Switch branches/tags</span>
      </div>

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" data-filter-placeholder="Filter branches/tags" class="js-select-menu-tab" role="tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" data-filter-placeholder="Find a tag…" class="js-select-menu-tab" role="tab">Tags</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches" role="menu">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/rakeshramesh04/ozay-backend/blob/Aditya/src/main/java/com/ozay/service/util/eventsg.php"
               data-name="Aditya"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="Aditya">
                Aditya
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/rakeshramesh04/ozay-backend/blob/August2/src/main/java/com/ozay/service/util/eventsg.php"
               data-name="August2"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="August2">
                August2
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/rakeshramesh04/ozay-backend/blob/Oct13/src/main/java/com/ozay/service/util/eventsg.php"
               data-name="Oct13"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="Oct13">
                Oct13
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open selected"
               href="/rakeshramesh04/ozay-backend/blob/Rakesh/src/main/java/com/ozay/service/util/eventsg.php"
               data-name="Rakesh"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="Rakesh">
                Rakesh
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/rakeshramesh04/ozay-backend/blob/September1/src/main/java/com/ozay/service/util/eventsg.php"
               data-name="September1"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="September1">
                September1
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/rakeshramesh04/ozay-backend/blob/guru/src/main/java/com/ozay/service/util/eventsg.php"
               data-name="guru"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="guru">
                guru
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/rakeshramesh04/ozay-backend/blob/master/src/main/java/com/ozay/service/util/eventsg.php"
               data-name="master"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="master">
                master
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/rakeshramesh04/ozay-backend/blob/sandeep/src/main/java/com/ozay/service/util/eventsg.php"
               data-name="sandeep"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="sandeep">
                sandeep
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/rakeshramesh04/ozay-backend/blob/staging/src/main/java/com/ozay/service/util/eventsg.php"
               data-name="staging"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="staging">
                staging
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/rakeshramesh04/ozay-backend/blob/yosuke/src/main/java/com/ozay/service/util/eventsg.php"
               data-name="yosuke"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="yosuke">
                yosuke
              </span>
            </a>
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div>

    </div>
  </div>
</div>

    <div class="btn-group right">
      <a href="/rakeshramesh04/ozay-backend/find/Rakesh"
            class="js-show-file-finder btn btn-sm empty-icon tooltipped tooltipped-nw"
            data-pjax
            data-hotkey="t"
            aria-label="Quickly jump between files">
        <span class="octicon octicon-list-unordered"></span>
      </a>
      <button aria-label="Copy file path to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </div>

    <div class="breadcrumb js-zeroclipboard-target">
      <span class="repo-root js-repo-root"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/rakeshramesh04/ozay-backend/tree/Rakesh" class="" data-branch="Rakesh" data-pjax="true" itemscope="url"><span itemprop="title">ozay-backend</span></a></span></span><span class="separator">/</span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/rakeshramesh04/ozay-backend/tree/Rakesh/src" class="" data-branch="Rakesh" data-pjax="true" itemscope="url"><span itemprop="title">src</span></a></span><span class="separator">/</span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/rakeshramesh04/ozay-backend/tree/Rakesh/src/main" class="" data-branch="Rakesh" data-pjax="true" itemscope="url"><span itemprop="title">main</span></a></span><span class="separator">/</span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/rakeshramesh04/ozay-backend/tree/Rakesh/src/main/java" class="" data-branch="Rakesh" data-pjax="true" itemscope="url"><span itemprop="title">java</span></a></span><span class="separator">/</span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/rakeshramesh04/ozay-backend/tree/Rakesh/src/main/java/com" class="" data-branch="Rakesh" data-pjax="true" itemscope="url"><span itemprop="title">com</span></a></span><span class="separator">/</span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/rakeshramesh04/ozay-backend/tree/Rakesh/src/main/java/com/ozay" class="" data-branch="Rakesh" data-pjax="true" itemscope="url"><span itemprop="title">ozay</span></a></span><span class="separator">/</span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/rakeshramesh04/ozay-backend/tree/Rakesh/src/main/java/com/ozay/service" class="" data-branch="Rakesh" data-pjax="true" itemscope="url"><span itemprop="title">service</span></a></span><span class="separator">/</span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/rakeshramesh04/ozay-backend/tree/Rakesh/src/main/java/com/ozay/service/util" class="" data-branch="Rakesh" data-pjax="true" itemscope="url"><span itemprop="title">util</span></a></span><span class="separator">/</span><strong class="final-path">eventsg.php</strong>
    </div>
  </div>


  <div class="commit-tease">
      <span class="right">
        <a class="commit-tease-sha" href="/rakeshramesh04/ozay-backend/commit/ba1ceaeeeaeeea5dd71be251d068a51636b9d9d8" data-pjax>
          ba1ceae
        </a>
        <time datetime="2015-11-15T06:48:48Z" is="relative-time">Nov 15, 2015</time>
      </span>
      <div>
        <img alt="@rakeshramesh04" class="avatar" height="20" src="https://avatars2.githubusercontent.com/u/14842405?v=3&amp;s=40" width="20" />
        <a href="/rakeshramesh04" class="user-mention" rel="author">rakeshramesh04</a>
          <a href="/rakeshramesh04/ozay-backend/commit/ba1ceaeeeaeeea5dd71be251d068a51636b9d9d8" class="message" data-pjax="true" title="fetching sendgrid Events">fetching sendgrid Events</a>
      </div>

    <div class="commit-tease-contributors">
      <a class="muted-link contributors-toggle" href="#blob_contributors_box" rel="facebox">
        <strong>1</strong>
         contributor
      </a>
      
    </div>

    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header" data-facebox-id="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list" data-facebox-id="facebox-description">
          <li class="facebox-user-list-item">
            <img alt="@rakeshramesh04" height="24" src="https://avatars0.githubusercontent.com/u/14842405?v=3&amp;s=48" width="24" />
            <a href="/rakeshramesh04">rakeshramesh04</a>
          </li>
      </ul>
    </div>
  </div>

<div class="file">
  <div class="file-header">
  <div class="file-actions">

    <div class="btn-group">
      <a href="/rakeshramesh04/ozay-backend/raw/Rakesh/src/main/java/com/ozay/service/util/eventsg.php" class="btn btn-sm " id="raw-url">Raw</a>
        <a href="/rakeshramesh04/ozay-backend/blame/Rakesh/src/main/java/com/ozay/service/util/eventsg.php" class="btn btn-sm js-update-url-with-hash">Blame</a>
      <a href="/rakeshramesh04/ozay-backend/commits/Rakesh/src/main/java/com/ozay/service/util/eventsg.php" class="btn btn-sm " rel="nofollow">History</a>
    </div>

        <a class="octicon-btn tooltipped tooltipped-nw"
           href="https://windows.github.com"
           aria-label="Open this file in GitHub Desktop"
           data-ga-click="Repository, open with desktop, type:windows">
            <span class="octicon octicon-device-desktop"></span>
        </a>

        <button type="button" class="octicon-btn disabled tooltipped tooltipped-nw"
          aria-label="You must be signed in to make or propose changes">
          <span class="octicon octicon-pencil"></span>
        </button>
        <button type="button" class="octicon-btn octicon-btn-danger disabled tooltipped tooltipped-nw"
          aria-label="You must be signed in to make or propose changes">
          <span class="octicon octicon-trashcan"></span>
        </button>
  </div>

  <div class="file-info">
      12 lines (10 sloc)
      <span class="file-info-divider"></span>
    144 Bytes
  </div>
</div>

  

  <div class="blob-wrapper data type-php">
      <table class="highlight tab-size js-file-line-container" data-tab-size="4">
      <tr>
        <td id="L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="LC1" class="blob-code blob-code-inner js-file-line"><span class="pl-pse">&lt;?php</span><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="LC2" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$fh</span> <span class="pl-k">=</span> <span class="pl-c1">fopen</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>~/dump.log<span class="pl-pds">&#39;</span></span>, <span class="pl-s"><span class="pl-pds">&#39;</span>a+<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="LC3" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> ( <span class="pl-smi">$fh</span> )</span></td>
      </tr>
      <tr>
        <td id="L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="LC4" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">{</span></td>
      </tr>
      <tr>
        <td id="L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="LC5" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">// Dump body</span></span></td>
      </tr>
      <tr>
        <td id="L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="LC6" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c1">fwrite</span>(<span class="pl-smi">$fh</span>, <span class="pl-c1">print_r</span>(<span class="pl-smi">$HTTP_RAW_POST_DATA</span>, <span class="pl-c1">true</span>));</span></td>
      </tr>
      <tr>
        <td id="L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="LC7" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c1">fclose</span>(<span class="pl-smi">$fh</span>);</span></td>
      </tr>
      <tr>
        <td id="L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="LC8" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="LC9" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="LC10" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c1">echo</span> <span class="pl-s"><span class="pl-pds">&quot;</span>ok<span class="pl-pds">&quot;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="LC11" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span><span class="pl-pse"><span class="pl-s1">?</span>&gt;</span></td>
      </tr>
</table>

  </div>

</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="" class="js-jump-to-line-form" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" aria-label="Jump to line" autofocus>
    <button type="submit" class="btn">Go</button>
</form></div>

        </div>
      </div>
      <div class="modal-backdrop"></div>
    </div>
  </div>


    </div>

      <div class="container">
  <div class="site-footer" role="contentinfo">
    <ul class="site-footer-links right">
        <li><a href="https://status.github.com/" data-ga-click="Footer, go to status, text:status">Status</a></li>
      <li><a href="https://developer.github.com" data-ga-click="Footer, go to api, text:api">API</a></li>
      <li><a href="https://training.github.com" data-ga-click="Footer, go to training, text:training">Training</a></li>
      <li><a href="https://shop.github.com" data-ga-click="Footer, go to shop, text:shop">Shop</a></li>
        <li><a href="https://github.com/blog" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
        <li><a href="https://github.com/about" data-ga-click="Footer, go to about, text:about">About</a></li>
        <li><a href="https://github.com/pricing" data-ga-click="Footer, go to pricing, text:pricing">Pricing</a></li>

    </ul>

    <a href="https://github.com" aria-label="Homepage">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
</a>
    <ul class="site-footer-links">
      <li>&copy; 2015 <span title="0.04006s from github-fe145-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="https://github.com/site/terms" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
        <li><a href="https://github.com/site/privacy" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
        <li><a href="https://github.com/security" data-ga-click="Footer, go to security, text:security">Security</a></li>
        <li><a href="https://github.com/contact" data-ga-click="Footer, go to contact, text:contact">Contact</a></li>
        <li><a href="https://help.github.com" data-ga-click="Footer, go to help, text:help">Help</a></li>
    </ul>
  </div>
</div>



    
    
    

    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <button type="button" class="flash-close js-flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
        <span class="octicon octicon-x"></span>
      </button>
      Something went wrong with that request. Please try again.
    </div>


      <script crossorigin="anonymous" integrity="sha256-Ln/D0mSiCOE4PehbgVN5vsz/VsH5d3FFFdTKx4IO7z4=" src="https://assets-cdn.github.com/assets/frameworks-2e7fc3d264a208e1383de85b815379beccff56c1f977714515d4cac7820eef3e.js"></script>
      <script async="async" crossorigin="anonymous" integrity="sha256-rTr6IWawEoCoreiImpp96o7JQo1iyJKyFkVrNelXTcw=" src="https://assets-cdn.github.com/assets/github-ad3afa2166b01280a8ade8889a9a7dea8ec9428d62c892b216456b35e9574dcc.js"></script>
      
      
    <div class="js-stale-session-flash stale-session-flash flash flash-warn flash-banner hidden">
      <span class="octicon octicon-alert"></span>
      <span class="signed-in-tab-flash">You signed in with another tab or window. <a href="">Reload</a> to refresh your session.</span>
      <span class="signed-out-tab-flash">You signed out in another tab or window. <a href="">Reload</a> to refresh your session.</span>
    </div>
  </body>
</html>

