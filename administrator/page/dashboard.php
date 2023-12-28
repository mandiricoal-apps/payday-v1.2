<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<div class="row animate__animated animate__pulse">
	<div class="col-lg-4 col-md-4 col-sm-12 mb-3">
		<div class="content">
			<div class="card">
				<div class="card-body">
					<h5><strong>Test Header</strong></h5><hr>
					<div style="width: 100%; margin: auto;">
						<canvas id="chart1"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-4 col-md-4 col-sm-12 mb-3">
		<div class="content">
			<div class="card">
				<div class="card-body">
					<h5><strong>Test Header</strong></h5><hr>
					<div style="width: 100%; margin: auto;">
						<canvas id="chart2"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-4 col-md-4 col-sm-12 mb-3">
		<div class="content">
			<div class="card">
				<div class="card-body">
					<h5><strong>Test Header</strong></h5><hr>
					<div style="width: 50%; margin: auto;">
						<canvas id="chart3"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row animate__animated animate__pulse">
	<div class="col-lg-12 col-md-12 mb-3">
		<div class="content">
			<div class="card">
				<div class="card-body">
					<h5><strong>Test Header</strong></h5><hr>
					<div class="table-responsive p-3 ">
						<div class="row justify-content-between">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="row d-flex">
									<div class="col-auto">
										Filter : 
									</div>
									<div class="col-lg-3 col-sm-12 px-1">
										<button class="form-control btn btn-sm btn-info round mb-3">SEP</button>
									</div>
									<div class="col-lg-3 sm-sm-12 px-1">
										<button class="form-control btn btn-sm btn-info round mb-3">2023</button>
									</div>
								</div>

							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<form method="POST">
									<div class="row">
										<div class="col-lg-4 col-md-12 px-1">
											<input class="form-control form-control-sm mb-2" type="date" placeholder="from" required>
										</div>
										<div class="col-lg-4 col-md-12 px-1">
											<input class="form-control form-control-sm mb-2" type="date" placeholder="to" required>
										</div>
										<div class="col-lg-4 col-md-12">
											<button class="form-control btn-sm btn btn-primary mb-3" type="submit">Search</button>
										</div>
										<hr>
									</div>
								</form>
							</div>
						</div>
						<table id="datatables" class="table table-striped" style="width:100%">
							<thead>
								<tr>
									<th>Name</th>
									<th>Date</th>
									<th>Clock IN</th>
									<th>Clock Out</th>
									<th>Work Time</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>Name</th>
									<th>Date</th>
									<th>Clock IN</th>
									<th>Clock Out</th>
									<th>Work Time</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
	function getRandomInt(min, max) {
		return Math.floor(Math.random() * (max - min + 1)) + min;
	}

	document.addEventListener('DOMContentLoaded', function () {
		var data = {
			labels: ['MIP', 'MKP', 'MPM', 'GMS', 'MHA'],
			datasets: [{
				data: [
					getRandomInt(10, 50),
					getRandomInt(10, 50),
					getRandomInt(10, 50),
					getRandomInt(10, 50),
					getRandomInt(10, 50)
					],
				backgroundColor: [
					'rgba(255, 99, 132, 0.5)',
					'rgba(54, 162, 235, 0.5)',
					'rgba(255, 206, 86, 0.5)',
					'rgba(75, 192, 192, 0.5)',
					'rgba(153, 102, 255, 0.5)'
					],
				borderColor: [
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)'
					],
				borderWidth: 1
			}]
		};

		var options = {
			scale: {
				ticks: {
					beginAtZero: true
				}
			}
		};

		var ctx = document.getElementById('chart1').getContext('2d');
		var myPolarAreaChart = new Chart(ctx, {
			type: 'line',
			data: data,
			options: options
		});
	});
</script>

<script>
	function getRandomInt(min, max) {
		return Math.floor(Math.random() * (max - min + 1)) + min;
	}

	document.addEventListener('DOMContentLoaded', function () {
		var data = {
			labels: ['MIP', 'MKP', 'MPM', 'GMS', 'MHA'],
			datasets: [{
				data: [
					getRandomInt(10, 50),
					getRandomInt(10, 50),
					getRandomInt(10, 50),
					getRandomInt(10, 50),
					getRandomInt(10, 50)
					],
				backgroundColor: [
					'rgba(255, 99, 132, 0.5)',
					'rgba(54, 162, 235, 0.5)',
					'rgba(255, 206, 86, 0.5)',
					'rgba(75, 192, 192, 0.5)',
					'rgba(153, 102, 255, 0.5)'
					],
				borderColor: [
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)'
					],
				borderWidth: 1
			}]
		};

		var options = {
			scale: {
				ticks: {
					beginAtZero: true
				}
			}
		};

		var ctx = document.getElementById('chart2').getContext('2d');
		var myPolarAreaChart = new Chart(ctx, {
			type: 'bar',
			data: data,
			options: options
		});
	});
</script>

<script>
	function getRandomInt(min, max) {
		return Math.floor(Math.random() * (max - min + 1)) + min;
	}

	document.addEventListener('DOMContentLoaded', function () {
		var data = {
			datasets: [{
				data: [
					getRandomInt(10, 50),
					getRandomInt(10, 50),
					getRandomInt(10, 50),
					getRandomInt(10, 50),
					getRandomInt(10, 50)
					],
				backgroundColor: [
					'rgba(255, 99, 132, 0.5)',
					'rgba(54, 162, 235, 0.5)',
					'rgba(255, 206, 86, 0.5)',
					'rgba(75, 192, 192, 0.5)',
					'rgba(153, 102, 255, 0.5)'
					],
				borderColor: [
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)'
					],
				borderWidth: 1
			}]
		};

		var options = {
			scale: {
				ticks: {
					beginAtZero: true
				}
			}
		};

		var ctx = document.getElementById('chart3').getContext('2d');
		var myPolarAreaChart = new Chart(ctx, {
			type: 'doughnut',
			data: data,
			options: options
		});
	});
</script>

<script>
	$(document).ready(function() {
		$('#datatables tfoot tr')
		.clone(true)
		.addClass('filters')
		.appendTo('#datatables tfoot');

		var table = $('#datatables').DataTable({
      ajax: 'dataset/user.json', //get data from json
      orderCellsBottom: true,
      fixedHeader: true,
      order: [
      	[1, 'desc']
      	],
      initComplete: function() {
      	var api = this.api();
      	api
      	.columns()
      	.eq(0)
      	.each(function(colIdx) {
      		var cell = $('.filters th').eq(
      			$(api.column(colIdx).header()).index()
      			);
      		var title = $(cell).text();
      		$(cell).html('<input type="text" placeholder=" search by ' + title + '" />');
      		$(
      			'input',
      			$('.filters th').eq($(api.column(colIdx).header()).index())
      			)
      		.off('keyup change')
      		.on('change', function(e) {
      			$(this).attr('title', $(this).val());
      			var regexr = '({search})';

      			var cursorPosition = this.selectionStart;
      			api
      			.column(colIdx)
      			.search(
      				this.value != '' ?
      				regexr.replace('{search}', '(((' + this.value + ')))') :
      				'',
      				this.value != '',
      				this.value == ''
      				)
      			.draw();
      		})
      		.on('keyup', function(e) {
      			e.stopPropagation();

      			$(this).trigger('change');
      			$(this)
      			.focus()[0]
      			.setSelectionRange(cursorPosition, cursorPosition);
      		});
      	});
      },
  });
	});
</script>