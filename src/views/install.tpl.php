@extends('arxmin::html')

@section('body')
<div class="container arx-container" ng-controller="installController">
    <div class="col-sm-2 hidden-print arx-sidebar">
        <div data-spy="affix" data-offset-bottom="50" data-offset-top="50">
            <ul class="nav nav-clean">
                <?php
                echo \Arx\helpers\Bootstrap::nav(__('arxmin::install.menu', $user));
                ?>
            </ul>
        </div>
    </div>
    <!--/ .arx-sidebar -->
    <div class="col-sm-10 arx-content">
        <h2>Welcome in Arx Installation</h2>

        <div id="step1" class="col-12 column">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"><i
                            class="icon-list-alt"></i> <?php echo __('arxmin::install.step.check.title') ?></h3>

                    <div class="btn-group">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1"><i
                                class="icon-caret-down"></i> <i class="icon-caret-up"></i></button>
                    </div>
                </div>
                <div class="panel-body collapse in" id="collapse1">
                    <?php
                    echo \Arx\helpers\Bootstrap::table(array($requirements));
                    ?>
                    <a class="btn btn-success pull-right"
                       href="#"><?php echo Lang::get('arxmin::install.action.refresh') ?></a>
                </div>
            </div>

        </div>
        <!--/ #step1 -->

        <div id="step2" class="col-12 column">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"><i
                            class="icon-list-alt"></i> <?php echo __('arxmin::install.step.db.title') ?></h3>

                    <div class="btn-group">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1"><i
                                class="icon-caret-down"></i> <i class="icon-caret-up"></i></button>
                    </div>
                </div>
                <div class="panel-body collapse in" id="collapse1">

                    <form action="<?php echo url('install') ?>">
                        <div class="form-group" id="database[default]">
                            <label for="database[default]">DB Type : </label>
                            <select name="database[default]" id="database[default]" ng-model="database.default" ng-change="updateDbForm()">
                                <option value="{{ db.driver }}" ng-if="db.driver == database.default" selected="selected" ng-repeat="db in database.connections">{{ database.default }}</option>
                                <option value="{{ db.driver }}" ng-if="db.driver != database.default" ng-repeat="db in database.connections">{{ db.driver }}</option>
                            </select>
                            <fieldset id="databaseField">
                                <div class="form-group" ng-repeat="(key, value) in database.connections[database.default]">
                                    <label for="database[{{ key }}]">{{ key }}</label> <input type="text" name="database[{{ key }}]" value="{{ value }}" />
                                </div>

                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!--/ #step2 -->

        <div id="step3" class="col-12 column">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"><i
                            class="icon-list-alt"></i> <?php echo __('arxmin::install.step.project.title') ?></h3>

                    <div class="btn-group">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1"><i
                                class="icon-caret-down"></i> <i class="icon-caret-up"></i></button>
                    </div>
                </div>
                <div class="panel-body collapse in" id="collapse1">
                    <form action="<?php echo url('install') ?>">
                        <?php echo \Arx\helpers\Bootstrap::form('Arxmin Email :', 'text', 'arxmin[email]', '') ?>
                        <?php echo \Arx\helpers\Bootstrap::form('Arxmin Email :', 'text', 'arxmin[password]', '') ?>
                        <?php echo\Arx\helpers\Bootstrap::form('Arxmin Email :', 'text', 'arxmin[project]', '') ?>
                    </form>
                </div>
            </div>

        </div>
        <!--/ #step2 -->
    </div>
</div>
<!--/ .container -->

@stop

@section('js')
<script type="text/javascript" data-main="{% asset('packages/arx/require/arxmin-form.js') %}"
        src="{% asset('packages/requirejs/require.js') %}"></script>

<script type="text/javascript">

    angular.module('InstallModule', [])
    .controller('installController', function($scope, $http){

        $scope.data = <?php echo json_encode($this->data) ?>;
        $scope.database = <?php echo json_encode(Config::get('database')) ?>;
        $scope.requirements = <?php echo json_encode($this->requirements) ?>;
        $scope.checkConfig = function checkConfig() {
            $scope.config.success = true;
        }

        $scope.updateDbForm = function updateDbform(){
            $aFields = $scope.database.connections[$scope.database.default];
            var html;
            for(obj in $aFields){

            }
        }

    })
</script>
@stop