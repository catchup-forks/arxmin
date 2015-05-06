@extends('arxmin::layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="pageheader">
        <h1>Chart.js</h1>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li><a href="index.html">Dashboard</a>
                </li>
                <li>Charts</li>
                <li class="active">Chart.js</li>
            </ol>
        </div>
    </div>
    <section id="main-content" class="animated fadeInRight">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default" ng-controller="chartJsDoughnutCtrl">
                    <div class="panel-heading">
                        <h3 class="panel-title">Doughnut</h3>
                        <div class="actions pull-right">
                            <i data-fullscreen-widget class="fa fa-expand"></i>
                            <i data-widget-toggle class="fa fa-chevron-down"></i>
                            <i data-widget-close class="fa fa-times"></i>
                        </div>
                    </div>
                    <div class="panel-body text-center">
                        <div>
                            <canvas tc-chartjs-doughnut chart-options="options" chart-data="data" height="100"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default" ng-controller="chartJsLineCtrl">
                    <div class="panel-heading">
                        <h3 class="panel-title">Line</h3>
                        <div class="actions pull-right">
                            <i data-fullscreen-widget class="fa fa-expand"></i>
                            <i data-widget-toggle class="fa fa-chevron-down"></i>
                            <i data-widget-close class="fa fa-times"></i>
                        </div>
                    </div>
                    <div class="panel-body text-center">
                        <div class="line-chart">
                            <div>
                                <canvas tc-chartjs-line chart-options="options" chart-data="data" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default" ng-controller="chartJsBarCtrl">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bar</h3>
                        <div class="actions pull-right">
                            <i data-fullscreen-widget class="fa fa-expand"></i>
                            <i data-widget-toggle class="fa fa-chevron-down"></i>
                            <i data-widget-close class="fa fa-times"></i>
                        </div>
                    </div>
                    <div class="panel-body text-center">
                        <div class="bar-chart">
                            <canvas tc-chartjs-bar chart-options="options" chart-data="data" height="100"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop

@section('js')
<script data-main="<?php echo $theme_url; ?>/js/components/stats" src="<?php echo $theme_url; ?>/js/vendor/require.js"></script>
@stop