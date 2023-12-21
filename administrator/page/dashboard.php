



<div class="row">
	<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Animated Bottom Navigation Bar</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="container stage">

      <div class="container">
        <div class="tabbar tab-style3">
          <ul class="flex-center">
            <li class="home active" data-where="home"><span class="material-icons-outlined">
                home
              </span></li>
            <li class="products" data-where="products"><span class="material-icons-outlined">
                shopping_bag
              </span></li>
            <li class="services" data-where="services"><span class="material-icons-outlined">
                plumbing
              </span></li>
            <li class="about" data-where="about"><span class="material-icons-outlined">
                business
              </span></li>
            <li class="help" data-where="help"><span class="material-icons-outlined">
                help_outline
              </span></li>
            <li class="follow"> </li>
          </ul>
        </div>
      </div>

      <div class="container">
        <div class="tabbar tab-style2">
          <ul class="flex-center">
            <li class="home active" data-where="home"><span class="material-icons-outlined">
                home
              </span></li>
            <li class="products" data-where="products"><span class="material-icons-outlined">
                shopping_bag
              </span></li>
            <li class="services" data-where="services"><span class="material-icons-outlined">
                plumbing
              </span></li>
            <li class="about" data-where="about"><span class="material-icons-outlined">
                business
              </span></li>
            <li class="help" data-where="help"><span class="material-icons-outlined">
                help_outline
              </span></li>
          </ul>
        </div>
      </div>

      <div class="container">
        <div class="tabbar tab-style1">
          <ul class="flex-center">
            <li class="home active" data-where="home"><span class="material-icons-outlined">
                home
              </span></li>
            <li class="products" data-where="products"><span class="material-icons-outlined">
                shopping_bag
              </span></li>
            <li class="services" data-where="services"><span class="material-icons-outlined">
                plumbing
              </span></li>
            <li class="about" data-where="about"><span class="material-icons-outlined">
                business
              </span></li>
            <li class="help" data-where="help"><span class="material-icons-outlined">
                help_outline
              </span></li>
            <li class="follow"> </li>
          </ul>
        </div>
      </div>

      <div class="container">
        <div class="tabbar tab-style4">
          <ul class="flex-center">
            <li class="home active" data-where="home"><span class="material-icons-outlined">
                home
              </span></li>
            <li class="products" data-where="products"><span class="material-icons-outlined">
                shopping_bag
              </span></li>
            <li class="services" data-where="services"><span class="material-icons-outlined">
                plumbing
              </span></li>
            <li class="about" data-where="about"><span class="material-icons-outlined">
                business
              </span></li>
            <li class="help" data-where="help"><span class="material-icons-outlined">
                help_outline
              </span></li>
          </ul>
        </div>
      </div>

      <div class="container">
        <div class="tabbar tab-style5">
          <ul class="flex-center">
            <li class="home active" data-where="home"><span class="material-icons-outlined">
                home
              </span></li>
            <li class="products" data-where="products"><span class="material-icons-outlined">
                shopping_bag
              </span></li>
            <li class="services" data-where="services"><span class="material-icons-outlined">
                plumbing
              </span></li>
            <li class="about" data-where="about"><span class="material-icons-outlined">
                business
              </span></li>
            <li class="help" data-where="help"><span class="material-icons-outlined">
                help_outline
              </span></li>
          </ul>
        </div>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>


<style>
@import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");
@import url("https://fonts.googleapis.com/icon?family=Material+Icons+Outlined");

:root {
  --accent-color: #1fa8f5;
  --accent-color-fg: #fefefe;
  --backdrop-color: #89d4fe;
  --app-content-background-color: #c0d8ec;
  --inset-shadow: rgba(7, 43, 74, 0.3);
  --outset-shadow: rgba(223, 240, 255, 0.25);
  --clay-box-shadow: rgba(7, 43, 74, 0.3);
  --clay-background-color: #c0d8ec;
  --clay-fg-color: #444;
}

body {
  background-color: var(--backdrop-color);
  font-size: 10px;
  font-family: "Roboto", sans-serif;
}

.flex-center {
  display: flex;
  justify-content: space-around;
  align-items: center;
}

.container {
  padding: 1rem 1rem 1.5rem;
}

.stage {
  max-width: 400px;
  width: 400px;
  margin: 0 auto;
}

.home.active {
  color: var(--accent-color);
}
.home-style {
  --app-content-background-color: #c0d8ec;
}

.products.active {
  --outset-shadow: rgba(247, 167, 103, 0.45);
  --inset-shadow: rgba(149, 62, 8, 0.45);
  --clay-box-shadow: rgba(211, 69, 20, 0.4);
  --clay-background-color: #d34514;
  --clay-fg-color: #f1f2f3;
  color: #690c0c;
}
.products-style {
  --app-content-background-color: #d36e5a;
}

.services.active {
  --outset-shadow: rgba(255, 159, 40, 0.45);
  --inset-shadow: rgba(88, 54, 13, 0.45);
  --clay-box-shadow: rgba(88, 54, 13, 0.4);
  --clay-background-color: #ed9426;
  --clay-fg-color: #f1f2f3;
  color: #cf5c0f;
}
.services-style {
  --app-content-background-color: #ed9426;
}

.about.active {
  --outset-shadow: rgba(93, 255, 85, 0.45);
  --inset-shadow: rgba(28, 78, 26, 0.45);
  --clay-box-shadow: rgba(28, 78, 26, 0.4);
  --clay-background-color: #4dd146;
  --clay-fg-color: #f1f2f3;
  color: #4dd146;
}
.about-style {
  --app-content-background-color: #4dd146;
}

.help.active {
  --outset-shadow: rgba(230, 230, 230, 0.45);
  --inset-shadow: rgba(81, 81, 81, 0.45);
  --clay-box-shadow: rgba(81, 81, 81, 0.4);
  --clay-background-color: #a3a3a3;
  --clay-fg-color: #f1f2f3;
  color: #783896;
}
.help-style {
  --app-content-background-color: #a3a3a3;
}

.tabbar {
  background-color: var(--app-content-background-color);
  border-bottom-left-radius: 1rem;
  border-bottom-right-radius: 1rem;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  height: 120px;
  display: flex;
  flex-direction: column;
  box-sizing: content-box;
  position: relative;
  overflow: hidden;
  transition: background-color 0.4s;
}
.tabbar ul,
.tabbar li {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
.tabbar ul {
  position: absolute;
  bottom: 0;
  width: 100%;
  background-color: #f9f8fa;
  align-self: flex-end;
  justify-content: center;
  height: 50px;
}
.tabbar li {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 1rem;
  margin-right: 5px;
  transition: all 0.4s;
  background-color: #f9f8fa;
  width: 60px;
  height: 60px;
  position: relative;
  color: #888;
  cursor: pointer;
}
.tabbar li:last-child {
  margin-right: 0;
}

.tab-style1 ul {
  justify-content: center;
}
.tab-style1 li {
  display: flex;
  justify-content: center;
  align-items: center;
  top: 1px;
  left: 0;
  width: 60px;
  height: 50px;
  transition: top 0.2s ease-out, width 0.4s, border-radius 0.4s, box-shadow 0.4s;
}
.tab-style1 li.follow {
  position: absolute;
  border-radius: 100%;
  content: " ";
  width: 60px;
  height: 60px;
  border: 10px solid var(--app-content-background-color);
  background-color: var(--app-content-background-color);
  top: -3rem;
  transition: left 0.4s ease-in, background-color 0.4s, border-color 0.4s;
}
.tab-style1 li.follow:before, .tab-style1 li.follow:after {
  content: " ";
  position: absolute;
  top: 27px;
  right: -27px;
  border-top: 11px solid var(--app-content-background-color);
  background-color: #f9f8fa;
  width: 20px;
  height: 20px;
  box-sizing: border-box;
  transition: border-color 0.4s;
}
.tab-style1 li.follow::after {
  border-top-left-radius: 100%;
}
.tab-style1 li.follow:before {
  left: -27px;
  right: unset;
  border-top-right-radius: 100%;
}
.tab-style1 li:nth-child(1).active ~ .follow {
  left: 12px;
}
.tab-style1 li:nth-child(2).active ~ .follow {
  left: 75px;
}
.tab-style1 li:nth-child(3).active ~ .follow {
  left: 140px;
}
.tab-style1 li:nth-child(4).active ~ .follow {
  left: 205px;
}
.tab-style1 li:nth-child(5).active ~ .follow {
  left: 270px;
}
.tab-style1 .active {
  z-index: 100;
  width: 60px;
  height: 60px;
  top: -2rem;
  border-radius: 100%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}

.tab-style2 ul {
  justify-content: center;
}
.tab-style2 li {
  border-top-left-radius: 100%;
  border-top-right-radius: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  top: 1px;
  left: 0;
  width: 60px;
  height: 50px;
}
.tab-style2 .active {
  width: 60px;
  height: 60px;
  top: -1rem;
}
.tab-style2 .active span {
  font-size: 2rem;
}
.tab-style2 .active:before, .tab-style2 .active:after {
  position: absolute;
  content: " ";
  width: 13px;
  height: 13px;
  border-bottom: 4px solid #f9f8fa;
  top: 8px;
}
.tab-style2 .active:before {
  border-bottom-right-radius: 100%;
  left: -7px;
}
.tab-style2 .active:after {
  border-bottom-left-radius: 100%;
  right: -7px;
}

.tab-style3 li {
  top: -8px;
  width: 60px;
  height: 35px;
  background-color: transparent;
  padding-top: 3px;
}
.tab-style3 li.follow {
  position: absolute;
  top: 0;
  display: flex;
  border-top: 3px solid #333;
  width: 60px;
  height: 1px;
  transition: all 0.3s ease-out;
}
.tab-style3 li:nth-child(1).active ~ .follow {
  left: 20px;
  z-index: 20;
}
.tab-style3 li:nth-child(2).active ~ .follow {
  left: 88px;
  z-index: 20;
}
.tab-style3 li:nth-child(3).active ~ .follow {
  left: 149px;
  z-index: 20;
}
.tab-style3 li:nth-child(4).active ~ .follow {
  left: 216px;
  z-index: 20;
}
.tab-style3 li:nth-child(5).active ~ .follow {
  left: 283px;
  z-index: 20;
}

.tab-style4 li {
  width: 60px;
  height: 40px;
  flex-direction: column;
  overflow: hidden;
}
.tab-style4 li span {
  position: relative;
  top: 3px;
  transition: top 0.4s ease-out, font-size 0.2s ease-out;
  text-shadow: inset 2px 2px 4px var(--clay-box-shadow);
}
.tab-style4 li:after {
  width: 100%;
  height: 10px;
  text-transform: uppercase;
  text-align: center;
  font-size: 8px;
  font-weight: bold;
  position: relative;
  bottom: -30px;
  opacity: 0;
  transition: bottom 0.2s ease-out, opacity 0.4s ease-out;
}
.tab-style4 li.active:after {
  opacity: 1;
  bottom: 2px;
  text-shadow: inset 2px 2px 8px var(--clay-box-shadow);
}
.tab-style4 li:nth-child(1):after {
  content: "home";
}
.tab-style4 li:nth-child(2):after {
  content: "products";
}
.tab-style4 li:nth-child(3):after {
  content: "services";
}
.tab-style4 li:nth-child(4):after {
  content: "company";
}
.tab-style4 li:nth-child(5):after {
  content: "help";
}
.tab-style4 .active span {
  font-size: 1.1rem;
  top: -4px;
}

.tab-style5 ul {
  justify-content: center;
}
.tab-style5 li {
  display: flex;
  justify-content: center;
  align-items: center;
  top: 1px;
  left: 0;
  width: 60px;
  height: 50px;
  transition: top 0.4s ease-out, border-radius 0.4s ease-out, box-shadow 0.4s ease-out;
}
.tab-style5 .active {
  width: 60px;
  height: 60px;
  border-radius: 100%;
  top: -1rem;
  background-color: var(--clay-background-color);
  box-shadow: 1px 2px 4px 0 var(--clay-box-shadow), 2px 4px 8px 0 var(--clay-box-shadow), inset 2px 2px 8px var(--outset-shadow), inset -2px -2px 8px var(--inset-shadow);
  color: var(--clay-fg-color);
}
.tab-style5 .active span {
  font-size: 2rem;
}
</style>

<script>
const uls = document.querySelectorAll("ul");

uls.forEach((ul) => {
  const resetClass = ul.parentNode.getAttribute("class");
  const lis = ul.querySelectorAll("li");

  lis.forEach((li) => {
    li.addEventListener("click", (e) => {
      e.preventDefault();
      e.stopPropagation();
      const target = e.currentTarget;

      if (
        target.classList.contains("active") ||
        target.classList.contains("follow")
      ) {
        return;
      }

      ul.parentNode.setAttribute(
        "class",
        `${resetClass} ${target.getAttribute("data-where")}-style`
      );

      lis.forEach((item) => clearClass(item, "active"));

      setClass(target, "active");
    });
  });
});

function clearClass(node, className) {
  node.classList.remove(className);
}

function setClass(node, className) {
  node.classList.add(className);
}
</script>
	<div class="col">
		<div class="content">
			<div class="col-md-12 mb-1 animate__animated animate__pulse">
				<h5 class="font-weight-bold">
					Welcome, Andika
				</h5>
				<small><b><?= date('l') ?></b>, <?= date('d F Y') ?></small>
			</div>
			<div style="width: 100%;" class="btn-group btn-sm animate__animated animate__pulse">
				<button type="button" class="btn btn-outline-secondary btn-sm" disabled=""><b style="color:#57B657">IN</b>
					00:00:00
				</button>
				<button type="button" class="btn btn-outline-secondary btn-sm" disabled=""><b style="color:#FF4747">OUT</b>
					00:00:00
				</button>
				<button type="button" class="btn btn-outline-secondary btn-sm" disabled=""><b style="color:#007bff">WT</b>
					00:00:00
				</button>
			</div>

			<!-- BANNER -->
			<div class="row animate__animated animate__pulse">
				<div class="col-md-12 grid-margin stretch-card mb-3">
					<div style="padding-top: 10px;" class="card-people">
						<ve><img src="../assets/images/banner/x.jpg" alt="people">
							<div class="weather-info">
							</div>
						</div>
					</div>
				</div>

				<!-- ANNOUNCEMENT -->
				<div class="row animate__animated animate__pulse">
					<div class="col-md-12 grid-margin stretch-card mb-3">
						<div class="card mcard round">
							<div style="border-radius: 18px 18px 0px 0px;justify-content: space-between;" class="card-header"><b>Info Update</b></div>
							<div class="card-body">
								<ul class="nav nav-pills nav-fill">
									<li class="nav-item">
										<a class="nav-link active" href="#announcement" data-toggle="tab" role="tab" aria-controls="announcement" aria-selected="true" style="border-radius: 18px;border: 1px solid #007bff;"><b>Announcement</b></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#bulletin" data-toggle="tab" role="tab" aria-controls="bulletin" aria-selected="true" style="border-radius: 18px;border: 1px solid #007bff;"><b>HSE Bulletin</b></a>
									</li>
								</ul>
								<div class="tab-content" id="myTabContent" style="border: 0;padding: 1rem 1rem;">
									<div class="tab-pane fade show active" id="announcement" role="tabpanel" aria-labelledby="announcement-tab">
										<small class="font-weight-400" style="overflow:hidden;color:#747473;display:-webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;">
											<h5>Title Announcement</h5>
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
										</small>
										<a style="width: 100%;" type="button" class="btn btn-inverse-info btn-sm mt-3" data-toggle="modal" data-target="#announ">Read More</a>
									</div>
									<div class="tab-pane fade" id="bulletin" role="tabpanel" aria-labelledby="bulletin-tab">
										<small class="font-weight-400" style="overflow:hidden;color:#747473;display:-webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;">
											<h5>Title Announcement</h5>
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
										</small>
										<a style="width: 100%;" type="button" class="btn btn-inverse-info btn-sm mt-3" data-toggle="modal" data-target="#hsebulletin">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- MENU 1 -->
				<div class="row animate__animated animate__pulse">
					<div class="col-md-12 grid-margin stretch-card mb-4">
						<div class="card round">
							<div style="border:1px;border-radius: 18px 18px 0px 0px;justify-content: space-between;" class="card-header"><b>Personal Information</b></div>
							<div class="card-body"><br>
								<div style="display: flex;flex-wrap: nowrap;" class="row justify-content-center">
									<div class="col center">
										<a style="width: 50px;height: 50px" type="button" class="btn btn-inverse-success btn-rounded btn-icon" href="#" data-toggle="modal" data-target="#profile">
											<br><img src="../assets/images/icon/linear/user.svg" class="">
										</a><br>
										<small>Profile</small>
									</div>
									<div class="col center">
										<a style="width: 50px;height: 50px" type="button" class="btn btn-inverse-danger btn-rounded btn-icon" href="#" data-toggle="modal" data-target="#payslip">
											<br><img src="../assets/images/icon/linear/dollar-circle.svg" class="">
										</a><br>
										<small>Payslip</small>
									</div>
									<div class="col center">
										<a style="width: 50px;height: 50px" type="button" class="btn btn-inverse-info btn-rounded btn-icon" href="home.php?v=attendance">
											<br><img src="../assets/images/icon/linear/calendar-2.svg" class="">
										</a><br>
										<small>Attendance</small>
									</div>
									<div class="col center">
										<a style="width: 50px;height: 50px" type="button" class="btn btn-inverse-warning btn-rounded btn-icon" href="home.php?v=leave">
											<br><img src="../assets/images/icon/linear/airplane.svg" class="">
										</a><br>
										<small>Leave</small>
									</div>
								</div><br>
							</div>
						</div>
					</div>
				</div>

				<!-- MENU 2 -->
				<div class="row animate__animated animate__pulse">
					<div class="col-md-12 grid-margin stretch-card mb-3">
						<a style="text-align: left;color: #282f3a;" type="button" class="btn btn-inverse-primary btn-fw btn-rounded form-control" href="home.php?v=timesheet&act=add">
							<img src="../assets/images/icon/linear/document-text.svg" class="">
							Daily Timesheet
						</a>
					</div>
				</div>
				<div class="row animate__animated animate__pulse">
					<div class="col-md-12 grid-margin stretch-card mb-3">
						<a style="text-align: left;color: #282f3a;" type="button" class="btn btn-inverse-primary btn-fw btn-rounded form-control" href="home.php?v=assesment&act=check">
							<img src="../assets/images/icon/linear/document-text.svg" class="">
							Self Assesment Covid
						</a>
					</div>
				</div>
				<div class="row animate__animated animate__pulse">
					<div class="col-md-12 grid-margin stretch-card mb-3">
						<a style="text-align: left;color: #282f3a;" type="button" class="btn btn-inverse-primary btn-fw btn-rounded form-control" href="home.php?v=wfo&act=add">
							<img src="../assets/images/icon/linear/document-text.svg" class="">
							WFO
						</a>
					</div>
				</div>
				<div class="row animate__animated animate__pulse">
					<div class="col-md-12 grid-margin stretch-card mb-3">
						<a style="text-align: left;color: #282f3a;" type="button" class="btn btn-inverse-primary btn-fw btn-rounded form-control" href="home.php?v=docapproval">
							<img src="../assets/images/icon/linear/document-text.svg" class="">
							Document Approval
						</a>
					</div>
				</div>
			</div>
		</div>


		<div class="col animate__animated animate__pulse">
			<!-- WEATHER -->
			<div style="padding: 3.5rem 0rem 0rem 0rem; " class="content-wrapper white">
				<a class="weatherwidget-io round" href="https://forecast7.com/en/n6d26106d81/south-jakarta/" data-label_1="JAKARTA SELATAN" data-label_2="WEATHER" data-theme="original">JAKARTA SELATAN WEATHER</a>
				<script>
					! function(d, s, id) {
						var js, fjs = d.getElementsByTagName(s)[0];
						if (!d.getElementById(id)) {
							js = d.createElement(s);
							js.id = id;
							js.src = 'https://weatherwidget.io/js/widget.min.js';
							fjs.parentNode.insertBefore(js, fjs);
						}
					}(document, 'script', 'weatherwidget-io-js');
				</script>
			</div>

			<!-- IDX -->
			<div style="padding: 0rem 0rem 0rem 0rem; height:300px;" class="content-wrapper white mb-5"><br>
				<div class="tradingview-widget-container__widget"></div>
				<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-overview.js" async>
					{
						"symbols": [
							[
								"IDX:MCOL|1D"
								],
							[
								"IDX:MAHA|1D"
								]
							],
						"chartOnly": false,
						"width": "100%",
						"height": "100%",
						"locale": "id",
						"colorTheme": "light",
						"autosize": true,
						"showVolume": false,
						"showMA": false,
						"hideDateRanges": false,
						"hideMarketStatus": false,
						"hideSymbolLogo": false,
						"scalePosition": "right",
						"scaleMode": "Normal",
						"fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
						"fontSize": "10",
						"noTimeScale": false,
						"valuesTracking": "1",
						"changeMode": "price-and-percent",
						"chartType": "area",
						"maLineColor": "#2962FF",
						"maLineWidth": 1,
						"maLength": 9,
						"lineWidth": 2,
						"lineType": 0,
						"dateRanges": [
							"1d|1",
							"1m|30",
							"3m|60",
							"12m|1D",
							"60m|1W",
							"all|1M"
							],
						"upColor": "#22ab94",
						"downColor": "#f7525f",
						"borderUpColor": "#22ab94",
						"borderDownColor": "#f7525f",
						"wickUpColor": "#22ab94",
						"wickDownColor": "#f7525f"
					}
				</script>
			</div>

			<div style="padding: 0rem;border-radius: 18px; width:100%;" class="content-wrapper table-responsive">
				<table class="table ">
					<thead class="thead-dark ">
						<tr>
							<th scope="row" width="10%">#</th>
							<th scope="row" width="20%">Date</th>
							<th scope="row" width="70%">Event</th>
						</tr>
					</thead>
					<tbody class="round">
						<tr>
							<th scope="row">1</th>
							<td><b>18-11-2023</b></td>
							<td>Cuti Bersama</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td><b>19-11-2023</b></td>
							<td>Cuti Bersama</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td><b>29-12-2023</b></td>
							<td>Employee Gathering 2023</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- MODAL ANNOUNCEMENT -->
	<div class="modal fade" id="announ" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content round">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<b>Title Announcement</b><hr>
					<p style="color: #747473;">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><br><br>
					<button style="width: 100%;" type="button" class="btn btn-inverse-danger btn-sm" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- MODAL ANNOUNCEMENT EDIT -->
	<div class="modal fade" id="edit_announ" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content round">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<b>Edit Announcement</b>
					<hr>
					<form method="post" action="home.php?v=action&action=announcement&act=edit" method="post" enctype="multipart/form-data" id="form_timesheet" class="mb-3">
						<div class="form-group">
							<label for="">Title</label><span style="color:red;">*</span>
							<input name="title" id="title" type="text" class="form-control round" id="act" placeholder="Title" value="Title Announcement">
						</div>
						<div class="form-group">
							<label for="">Description</label><span style="color:red;">*</span>
							<textarea name="desc" id="desc" class="form-control round" id="desc" placeholder="Description" rows="15">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</textarea>
						</div>
						<button name="submit" type="submit" id="submit_announcement" class="btn btn-success mr-2 form-control round">Save</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- MODAL BULLETIN -->
	<div class="modal fade" id="hsebulletin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content round">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<b>Title Bulletin</b><hr>
					<p style="color: #747473;">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><br><br>
					<button style="width: 100%;" type="button" class="btn btn-inverse-danger btn-sm" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- MODAL BULLETIN EDIT -->
	<div class="modal fade" id="edit_bulletin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content round">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<b>Edit Bulletin</b>
					<hr>
					<form method="post" action="home.php?v=action&action=bulletin&act=edit" method="post" enctype="multipart/form-data" id="form_timesheet" class="mb-3">
						<div class="form-group">
							<label for="">Title</label><span style="color:red;">*</span>
							<input name="title" id="title" type="text" class="form-control round" id="act" placeholder="Title" value="Title Bulletin">
						</div>
						<div class="form-group">
							<label for="">Description</label><span style="color:red;">*</span>
							<textarea name="desc" id="desc" class="form-control round" id="desc" placeholder="Description" rows="10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</textarea>
						</div>
						<div class="form-group">
							<label>Attachment</label>
							<input type="file" name="file" id="file" class="file-upload-default round" id="fileupload" onchange="loadFile(event)">
							<div class="input-group col-xs-12">
								<input type="text" class="form-control file-upload-info round" disabled="" placeholder="Attachment">
								<span class="input-group-append">
									<button class="file-upload-browse btn btn-outline-secondary" type="button">Upload</button>
								</span>
							</div>
						</div>
						<button name="submit" type="submit" id="submit_bulletin" class="btn btn-success mr-2 form-control round">Save</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="floating-container" id="hidebar">
		<div class="floating-button">
			<img src="../assets/images/icon/bulk/grid-6.svg">
		</div>
		<div class="element-container">
			<a href="home.php?v=dashboard" style="text-decoration:none;">
				<span class="float-element tooltip-left">
					<i class="material-icons pl-2"><img src="../assets/images/icon/bulk/arrow-right-3.svg" class=""> Sisakty</i>
				</span>
			</a>
			<a href="home.php?v=dashboard" style="text-decoration:none;">
				<span class="float-element tooltip-left">
					<i class="material-icons pl-2"><img src="../assets/images/icon/bulk/arrow-right-3.svg" class=""> Medicoal</i>
				</span>
			</a>
			<a href="home.php?v=dashboard" style="text-decoration:none;">
				<span class="float-element tooltip-left">
					<i class="material-icons pl-2"><img src="../assets/images/icon/bulk/arrow-right-3.svg" class=""> Optimals</i>
				</span>
			</a>
			<a href="home.php?v=dashboard" style="text-decoration:none;">
				<span class="float-element tooltip-left">
					<i class="material-icons pl-2"><img src="../assets/images/icon/bulk/arrow-right-3.svg" class=""> Siaga</i>
				</span>
			</a>
			<a href="home.php?v=dashboard" style="text-decoration:none;">
				<span class="float-element tooltip-left">
					<i class="material-icons pl-2"><img src="../assets/images/icon/bulk/arrow-right-3.svg" class=""> Sipaling Hijau</i>
				</span>
			</a>
		</div>
	</div> 

	<style>
		@import url("https://fonts.googleapis.com/css?family=Roboto");
		@-webkit-keyframes come-in {
			0% {
				-webkit-transform: translatey(100px);
				transform: translatey(100px);
				opacity: 0;
			}
			30% {
				-webkit-transform: translateX(-50px) scale(0.4);
				transform: translateX(-50px) scale(0.4);
			}
			70% {
				-webkit-transform: translateX(0px) scale(1.2);
				transform: translateX(0px) scale(1.2);
			}
			100% {
				-webkit-transform: translatey(0px) scale(1);
				transform: translatey(0px) scale(1);
				opacity: 1;
			}
		}
		@keyframes come-in {
			0% {
				-webkit-transform: translatey(100px);
				transform: translatey(100px);
				opacity: 0;
			}
			30% {
				-webkit-transform: translateX(-50px) scale(0.4);
				transform: translateX(-50px) scale(0.4);
			}
			70% {
				-webkit-transform: translateX(0px) scale(1.2);
				transform: translateX(0px) scale(1.2);
			}
			100% {
				-webkit-transform: translatey(0px) scale(1);
				transform: translatey(0px) scale(1);
				opacity: 1;
			}
		}
		* {
			margin: 0;
			padding: 0;
		}

		.floating-container {
			position: fixed;
			width: 200px;
			height: 100px;
			bottom: 0;
			right: 0;
			margin: 35px 20px;
		}
		.floating-container:hover {
			height: 400px;
		}
		.floating-container:hover .floating-button {
			box-shadow: 0 10px 25px rgba(44, 179, 240, 0.6);
			-webkit-transform: translatey(5px);
			transform: translatey(5px);
			-webkit-transition: all 0.3s;
			transition: all 0.3s;
		}
		.floating-container:hover .element-container .float-element:nth-child(1) {
			-webkit-animation: come-in 0.4s forwards 0.2s;
			animation: come-in 0.4s forwards 0.2s;
		}
		.floating-container:hover .element-container .float-element:nth-child(2) {
			-webkit-animation: come-in 0.4s forwards 0.4s;
			animation: come-in 0.4s forwards 0.4s;
		}
		.floating-container:hover .element-container .float-element:nth-child(3) {
			-webkit-animation: come-in 0.4s forwards 0.6s;
			animation: come-in 0.4s forwards 0.6s;
		}
		.floating-container:hover .element-container .float-element:nth-child(4) {
			-webkit-animation: come-in 0.4s forwards 0.8s;
			animation: come-in 0.4s forwards 0.8s;
		}
		.floating-container:hover .element-container .float-element:nth-child(5) {
			-webkit-animation: come-in 0.4s forwards 1.00s;
			animation: come-in 0.4s forwards 1.00s;
		}
		.floating-container .floating-button {
			position: absolute;
			width: 65px;
			height: 65px;
			background: #2cb3f0;
			bottom: 0;
			border-radius: 50%;
			left: 0;
			right: 0;
			margin: 0px 0px 0px 140px;
			color: white;
			line-height: 65px;
			text-align: center;
			font-size: 23px;
			z-index: 100;
			cursor: pointer;
			-webkit-transition: all 0.3s;
			transition: all 0.3s;
		}
		.floating-container .float-element {
			position: relative;
			display: block;
			border-radius: 15px;
			width: 200px;
			height: 50px;
			margin: 15px auto;
			color: white;
			font-weight: 500;
			text-align: left;
			line-height: 50px;
			z-index: 0;
			opacity: 0;
			-webkit-transform: translateY(100px);
			transform: translateY(100px);
		}
		.floating-container .float-element .material-icons {
			vertical-align: middle;
			font-size: 16px;
		}
		.floating-container .float-element:nth-child(1) {
			background: #2cb3f0c7;
		}
		.floating-container .float-element:nth-child(2) {
			background: #2cb3f0c7;
		}
		.floating-container .float-element:nth-child(3) {
			background: #2cb3f0c7;
		}
		.floating-container .float-element:nth-child(4) {
			background: #2cb3f0c7;
		}
		.floating-container .float-element:nth-child(5) {
			background: #2cb3f0c7;
		}
	</style> 

	<!-- UPDATE VALIDATION -->
	<script type="text/javascript">
		$('#submit_bulletin').click(function() {
			if ($('#title').val() == '') {
				Swal.fire({
					icon: 'error',
					text: 'Title is empty !'
				})
				return false;
			}
			if ($('#desc').val() == '') {
				Swal.fire({
					icon: 'error',
					text: 'Description is empty !'
				})
				return false;
			}
			if ($('#file').val() == '') {
				Swal.fire({
					icon: 'error',
					text: 'Attachment is empty !'
				})
				return false;
			}
		})
	</script>

	<!-- UPDATE VALIDATION -->
	<script type="text/javascript">
		$('#submit_announcement').click(function() {
			if ($('#title').val() == '') {
				Swal.fire({
					icon: 'error',
					text: 'Title is empty !'
				})
				return false;
			}
			if ($('#desc').val() == '') {
				Swal.fire({
					icon: 'error',
					text: 'Description is empty !'
				})
				return false;
			}
		})
	</script>
