<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile(Yii::$app->request->baseUrl.'/js/otroscharts.js',
 [  'depends' => [yii\web\JqueryAsset::className()],
  'position' => \yii\web\View::POS_END
  ]);
$this->registerJs("<!-- JQVMap -->
    
      $(document).ready(function(){
        $('#usa_map').vectorMap({
            map: 'usa_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
        });

        $('#world-map-gdp').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
        });
      });
    
    <!-- /JQVMap -->", \yii\web\View::POS_END, 'my-options');
?>
<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Other Charts</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Other Graph types <small> Assorted graph types</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="row">
                      <div class="col-md-6" style="padding: 30px">
                        <p>USA Vector Map</p>
                        <div id="usa_map" style="height:400px !important;"></div>
                      </div>
                      <div class="col-md-6" style="padding: 30px">
                        <p>World Vector Map</p>
                        <div id="world-map-gdp" style="height:400px;"></div>
                      </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="row">
                      <div class="col-md-6">
                        <div class="panel panel-body">
                          <div class="x_title">
                            <h4>Easy Pie Chart</h4>
                          </div>

                          <p>Easy pie chart is a jQuery plugin that uses the canvas element to render highly customizable, very easy to implement, simple pie charts for single values.</p>
                          <div class="row">
                            <div class="col-xs-4">
                              <span class="chart" data-percent="86">
                                              <span class="percent"></span>
                              </span>
                            </div>
                            <div class="col-xs-4">
                              <span class="chart" data-percent="73">
                                              <span class="percent"></span>
                              </span>
                            </div>
                            <div class="col-xs-4">
                              <span class="chart" data-percent="60">
                                              <span class="percent"></span>
                              </span>
                            </div>
                            <div class="clearfix"></div>
                          </div>

                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="panel panel-body">
                          <div class="x_title">
                            <h4>Sparkline Inline Graphs</h4>
                          </div>

                          <p>Yet another great library for inline data visualizations</p>
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th style="width:20%"></th>
                                <th style="width:50%"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th>
                                  <span class="sparkline_line" style="height: 160px;">
                                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                                  </span>
                                </th>
                                <td>Line Graph</td>
                              </tr>
                              <tr>
                                <th>
                                  <span class="sparkline_area" style="height: 160px;">
                                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                                  </span>
                                </th>
                                <td>Line Area Graph</td>
                              </tr>
                              <tr>
                                <th>
                                  <span class="sparkline_bar" style="height: 160px;">
                                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                                  </span>
                                </th>
                                <td>Bar Graph</td>
                              </tr>
                              <tr>
                                <th>
                                  <span class="sparkline_pie" style="height: 160px;">
                                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                                  </span>
                                </th>
                                <td>Pie Chart</td>
                              </tr>
                              <tr>
                                <th>
                                  <span class="sparkline_discreet" style="height: 160px;">
                                                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                                  </span>
                                </th>
                                <td>Discrete chart</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
