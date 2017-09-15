<div class="col-sm-9 col-md-10 main">
	<h3 class="page-header">
		Dashboard
	</h3><br>

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<div class="row">

		<div class="col-lg-6">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<i class="fa fa-comments fa-5x"></i>
						</div>
						<div class="col-xs-6 text-right">
							<p class="announcement-heading"><?php echo $count_news ?></p>
							<p class="announcement-text"> News</p>
						</div>
					</div>
				</div>
				<a href="<?php echo site_url('gadmin/news') ?>">
					<div class="panel-footer announcement-bottom">
						<div class="row">
							<div class="col-xs-6">
								View list
							</div>
							<div class="col-xs-6 text-right">
								<i class="fa fa-arrow-circle-right"></i>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<i class="fa fa-address-card-o fa-5x"></i>
						</div>
						<div class="col-xs-6 text-right">
							<p class="announcement-heading"><?php echo $count_career ?></p>
							<p class="announcement-text">Career</p>
						</div>
					</div>
				</div>
				<a href="<?php echo site_url('gadmin/career') ?>">
					<div class="panel-footer announcement-bottom">
						<div class="row">
							<div class="col-xs-6">
								View list
							</div>
							<div class="col-xs-6 text-right">
								<i class="fa fa-arrow-circle-right"></i>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-12">
		<p></p>
			<!-- <div id='top'>

				<div class='left'>
					Timezone:
					<select id='timezone-selector'>
						<option value='' selected>none</option>
						<option value='local'>local</option>
						<option value='UTC'>UTC</option>
					</select>
				</div>

				<div class='right'>
					<span id='loading'>loading...</span>
					<span id='script-warning'><code>php/get-events.php</code> must be running.</span>
				</div>

				<div class='clear'></div>

			</div> -->

			<div id='calendar'></div>
		</div>
	</div><!-- /.row -->

</div>




<script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listWeek'
			},
			defaultDate: '2017-09-12',
			navLinks: true, // can click day/week names to navigate views
			editable: true,
			selectable: true,
			eventLimit: true, // allow "more" link when too many events
			events: {
				url: 'php/get-events.php',
				error: function() {
					$('#script-warning').show();
				}
			},
			loading: function(bool) {
				$('#loading').toggle(bool);
			},
			eventRender: function(event, el) {
				// render the timezone offset below the event title
				if (event.start.hasZone()) {
					el.find('.fc-title').after(
						$('<div class="tzo"/>').text(event.start.format('Z'))
						);
				}
			},
			dayClick: function(date) {
				console.log('dayClick', date.format());
			},
			select: function(startDate, endDate) {
				console.log('select', startDate.format(), endDate.format());
			}
		});

		// load the list of available timezones, build the <select> options
		$.getJSON('php/get-timezones.php', function(timezones) {
			$.each(timezones, function(i, timezone) {
				if (timezone != 'UTC') { // UTC is already in the list
					$('#timezone-selector').append(
						$("<option/>").text(timezone).attr('value', timezone)
						);
				}
			});
		});

		// when the timezone selector changes, dynamically change the calendar option
		$('#timezone-selector').on('change', function() {
			$('#calendar').fullCalendar('option', 'timezone', this.value || false);
		});
	});

</script>