<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Foundation | Welcome</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet" type="text/css">

</head>
<body>
<style>
$sticky-shrinknav-menu-height: rem-calc(60);
$sticky-shrinknav-hero-height: 300px;


body {
  padding-top: $sticky-shrinknav-hero-height + 30px;
}

.sticky-shrinknav-menu {
  @include horizontal-center;
  bottom: 0;
  height: $sticky-shrinknav-menu-height;
  line-height: $sticky-shrinknav-menu-height;
  width: 100%;
  background-color: rgba($primary-color, 0.1);
  transition: all 0.5s ease;

  li {
    border-radius: 2px;
    transition: all 0.3s ease;

    &:hover {
      box-shadow: 0 0 0 1px $white;
    }
  }

  a {
    color: $white;
  }
}

.sticky-shrinknav-header-title {
  transition: all 0.3s ease;
  position: relative;
  transform: translateY(-$sticky-shrinknav-menu-height/2);
  margin-bottom: 0;
  color: $white;
}

.sticky-shrinknav-header {
  width: 100%;
  height: $sticky-shrinknav-hero-height;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: lighten($primary-color, 10%);
  text-align: center;
  position: fixed;
  top: 0;
  left: 0;
  overflow: hidden;
  transition: all 0.5s ease;
}

body.sticky-shrinknav-wrapper {
  padding-top: 130px;

  .sticky-shrinknav-header{
    height: $sticky-shrinknav-menu-height;
    background-color: rgba($primary-color, 0.9);

    .sticky-shrinknav-header-title{
      transform: scale(0);
      transition: all 0.3s ease;
    }
  }
}


</style>
<script>
$(function() {
  $(window).scroll(function() {
    var winTop = $(window).scrollTop();
    if (winTop >= 30) {
      $("body").addClass("sticky-shrinknav-wrapper");
    } else{
      $("body").removeClass("sticky-shrinknav-wrapper");
    }
  });
});


</script>
<header class="sticky-shrinknav-header">
  <h1 class="sticky-shrinknav-header-title">sticky-shrinknav</h1>
  <ul class="menu align-center sticky-shrinknav-menu">
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Gallery</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</header>



<!--
<ul class="dropdown menu" data-dropdown-menu>
<li class="menu-text">Yeti Store</li>
<li class="has-submenu">
<a href="#">One</a>
<ul class="submenu menu vertical" data-submenu>
<li><a href="#">One</a></li>
<li><a href="#">Two</a></li>
<li><a href="#">Three</a></li>
</ul>
</li>
<li><a href="#">Two</a></li>
<li><a href="#">Three</a></li>
</ul>
-->
<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah<br />fhskfhslfhshkshksah




<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>

</body>
</html>
