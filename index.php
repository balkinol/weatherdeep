<?php include './components/header.php'; ?>
<?php include './components/navigation.php'; ?>

        <div class="content">
             <!-- Main Panel -->
        <div class="main-panel">
            <nav class="navbar">
              <ul>
                <li class="nav-item">
                  <a class="nav-link btn-dark" href="#">Severe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-dark" href="#">Storms</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn-dark" href="#">Analytics</a>
                  </li>
              </ul>
              <ul id="d-none-sm">
                <li class="nav-item">
                  <a href="#" class="nav-link white-btn">Forecasts Valid</a>
              </li>
              <li class="nav-item m-right">
              <select class="btn-dark">
                <option>April - June 2020</option>
                <option>June - July 2020</option>
                <option>July - August 2020</option>
                <option>August - August 2020</option>
              </select>
              </li>
              </ul>
            </nav>
        </div>
        <!-- Main Panel End-->

            <div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-md-10 col-lg-5 mx-auto">
                        <div class="text-content">
                          <div class="text-btn">
                              <button class="btn btn-tornado btn-dark">Tornado</button>
                              <button class="btn btn-wind btn-dark">Wind</button>
                              <button class="btn btn-hail btn-dark">Hail</button>
                          </div>
                         <div class="text-p">
                            <div class="p-tornado bg-dark">
                                <p>Forecast @ (Lat, lon)</p>
                                <p>Above average tornado risk</p>
                                <p>4-9 tornadoes expected within 420 miles of the given points</p>
                                <p>Climatelogical average: 10</p>
                            </div>
                              <div class="p-hail bg-dark" style="display: none;">
                                <p>Forecast @ (Lat, lon)</p>
                                <p>Above average Hailrisk</p>
                                <p>4-9 tornadoes expected within 420 miles of the given points</p>
                                <p>Climatelogical average: 10</p>
                              </div>
                              <div class="p-wind bg-dark" style="display: none;">
                                <p>Forecast @ (Lat, lon)</p>
                                <p>Above average Wind risk</p>
                                <p>4-9 tornadoes expected within 420 miles of the given points</p>
                                <p>Climatelogical average: 10</p>
                            </div>
                         </div>
                        </div>
                      </div>
                    <div class="col-sm-10 col-md-10 col-lg-7 mx-auto">
                        <div class="map-option">
                            <div class="map-content">
                                <div class="option-btn">
                                    <button class="btn btn-option-1 btn-dark">Option 1</button>
                                    <button class="btn btn-option-2 btn-dark">Option 2</button>
                                    <button class="btn btn-option-3 btn-dark">Option 3</button>
                                </div>
                               <div class="option-img">
                                    <div class="img-option-1 bg-dark">
                                        <img src="./assets/img/map1.jpg" alt="chart">
                                    </div>
                                    <div class="img-option-2 bg-dark" style="display: none;">
                                        <img src="./assets/img/map2.jpg" alt="chart">
                                    </div>
                                    <div class="img-option-3 bg-dark" style="display: none;">
                                        <img src="./assets/img/map3.jpg" alt="chart">
                                    </div>
                               </div>
                              </div>
                              <div class="legend bg-dark">
                                  <div class="legend-1">
                                      <img src="./assets/img/map1.jpg" alt="map">
                                    <a href="#" type="button">Legend 1</a>
                                  </div>
                                  <div class="legend-2">
                                    <img src="./assets/img/map1.jpg" alt="map">
                                  <a href="#" type="button">Legend 1</a>
                                </div>
                                <div class="legend-3">
                                    <img src="./assets/img/map1.jpg" alt="map">
                                  <a href="#" type="button">Legend 1</a>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-10 col-lg-12 mx-auto">
                        <div class="chart">
                            <img src="./assets/img/chart.png" alt="chart">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include './components/footer.php'; ?>