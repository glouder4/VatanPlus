<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        [[Bootstrap4]]
	<title>VatanPlus | [[*longtitle:default=`[[*pagetitle]]`]]</title>        
</head>
<body>
	[[$header]]
<div class="container">
 <div class="row m-0">
  <div class="col-12 col-md-9 order-2 order-md-1">
      <section>
        <h1>[[*longtitle:default=`[[*pagetitle]]`]]</h1>
        [[*content]]
      </section>
  </div>
  <div class="col-12 col-md-3 order-1 order-md-2">
    [[pdoMenu? &parents=`[[*id]]` &level=`1` &firstClass=`0` &lastClass=`0` &tplOuter=`@INLINE <ul class="navbar-nav mr-auto mt-2 mt-lg-0"><span>[[*longtitle:default=`[[*pagetitle]]`]]</span>[[+wrapper]]</ul>` &rowClass=`nav-item` ]]
                        <div id="presentation" class="text-right">
				[[!pdoResources?
		            &parents=`0`
		            &resources=`13`
		            &ajaxMode=`button`
		            &limit=`1`
		            &tpl=`@INLINE <a href="[[+tv.url]]">[[+pagetitle]]</a>`
		            &includeTVs=`url`
		        ]]
			</div>
  </div>
 </div>       
</div>
        [[$footer]]
</body>
</html>
