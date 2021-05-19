﻿<!doctype HTML>
<html lang="en">
	<head>
		<?php include('header.php'); ?>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<title>Mental Math</title>
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
		<link rel="stylesheet" type="text/css" href="css/mathtrainer.css" />
		<title>Mental maths quiz</title>
	</head>
    <header>
        <a id="leaderboard" href="leaderboard.html">Leaderboard</a>
    </header>

	<body>
		<div class="container">
			<h1>Mental Math</h1>
			<h2>How fast are you?</h2>
			
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1 class="i18n" data-i18n="Mental Maths quiz"></h1>
							<em><span class="i18n" data-i18n="labels.appQuote"></span></em>
						</div>
						<div class="panel-body">

							<div class="row">
								<div class="col-xs-12">
									<div class="alert alert-success" id="score" style="display: none;">
										<strong>
											<div class="i18n" data-i18n="labels.timeOver"></div>
										</strong>
										<span id="finalScore"></span>
										<p>Enter name</p>
										<input type="text" id="name">
										<input type="submit" value="Submit">
										<?php
											$name = mysql_real_escape_string()
											
										
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<form class="form-horizontal" id="options">
										<div class="form-group">
											<div class="col-xs-12">
												<div class="alert alert-danger" id="optionserrors" style="display: none;">
													<span id="options_error"></span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-xs-12">
												<p><span class="i18n" data-i18n="labels.createProblemsInRange"></span></p>
											</div>
											<div hidden class="col-xs-12 col-sm-6">
												<div class="input-group">
													<span class="input-group-addon i18n" data-i18n="labels.rangeMin"></span>
													<input type="number" class="form-control" id="rangemin" value="1" step="1" min="-9999999" max="9999999" />
												</div>
											</div>
											<div hidden class="col-xs-12 col-sm-6">
												<div class="input-group">
													<span class="input-group-addon i18n" data-i18n="labels.rangeMax"></span>
													<input type="number" class="form-control" id="rangemax" value="12" step="1" min="-9999999" max="9999999" />
												</div>
											</div>
										</div>
										<div hidden class="form-group" id="operators">
											<div class="col-xs-6">
												<div class="checkbox">
													<label>
														<input type="checkbox" id="opadd" checked="checked" />
														<span class="i18n"data-i18n="labels.opAdd"></span>
													 </label>
												</div>
											</div>
											<div class="col-xs-6">
												<div class="checkbox">
													<label>
														<input type="checkbox" id="opsub" checked="checked" />
														<span class="i18n"data-i18n="labels.opSub"></span>
													 </label>
												</div>
											</div>
											<div class="col-xs-6">
												<div class="checkbox">
													<label>
														<input type="checkbox" id="opmul" checked="checked" />
														<span class="i18n"data-i18n="labels.opMul"></span>
													 </label>
												</div>
											</div>
											<div class="col-xs-6">
												<div class="checkbox">
													<label>
														<input type="checkbox" id="opdiv" checked="checked" />
														<span class="i18n" data-i18n="labels.opDiv"></span>
													 </label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-xs-12">
												<button type="submit" class="btn btn-primary col-xs-12" id="start" style="display: none;">
													<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
													<span class="i18n" data-i18n="labels.start"></span>
													Start
												</button>
											</div>
										</div>
									</form>
								</div>
							</div>

							<div id="questions" style="display: none;">
								<div class="row">
									<div class="col-xs-2 text-left">
										<h3><div id="timer"></div></h3>
									</div>
									<div hidden class="col-xs-10 text-right">
										<h4><div id="progress"></div></h4>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 text-center">
										<h1 id="currentquestion"></h1>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 text-center">
										<div id="useranswer">
											<input type="number" class="form-control" id="answer" />
											<p><small><span class="i18n" data-i18n="labels.escToClearSpaceToSkip"></span></small></p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 text-center">
										<button type="button" class="btn btn-info col-xs-12" id="clearquestion">
											<span class="glyphicon glyphicon-erase" aria-hidden="true"></span>
											<span class="i18n" data-i18n="labels.clear"></span>
										</button>
									</div>
									<div class="col-xs-6 text-center">
										<button type="button" class="btn btn-warning col-xs-12" id="skipquestion">
											<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
											<span class="i18n" data-i18n="labels.skip"></span>
										</button>
									</div>
								</div>
								<div class="row top-margin">
									<div class="col-xs-12 text-center">
									 	<button type="button" class="btn btn-danger col-xs-12" id="quittooptions">
											<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
											<span class="i18n" data-i18n="labels.quitToOptions"></span>
										</button>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/i18next.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.countdown.min.js"></script>
		<script type="text/javascript" src="js/mathtrainer.js"></script>
	</body>
	<footer>
		Created by Miles Wootton for use of Ucademy job interview
	</footer>
</html>