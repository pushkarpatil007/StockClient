<?php
//echo $symbol;
$stock_signal = json_decode(file_get_contents('https://www.stockguru.in/api/v1/research/signals?apikey=asdfghjk&password=1234&action=get-signal&symbol='.$symbol));
//echo $stock_signal;
$stock_info = json_decode(file_get_contents('https://www.stockguru.in/api/v1/research/stocks?apikey=asdfghjk&password=1234&action=get-stock-info&symbol='.$symbol));
//echo $stock_info;

$label_class = "label-default";
if($stock_signal->action=="BUY") $label_class="label-success"; elseif($stock_signal->action=="SELL") $label_class="label-danger";

?>

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="breadcrumb-inner">
                        <h2 class="breadcrumb__title">Stock Analysis.</h2>
                        <ul class="breadcrumb__list">
                            <li class="active__list-item"><a href="<?php echo base_url() ?>members">Members</a></li>
                            <li>Stock Analysis</li>
                        </ul>
                    </div><!-- end breadcrumb-inner -->
                    <div class="text-outline">Analysis</div>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end hero-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->


<section id="about">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12">
            
            <div style="margin-top:50px"></div>

            <div>

                <div class="">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 info-margin">
                            <h3><b>Stock : </b> <span class="label label-default"><?php echo $stock_signal->symbol ?></span> <small><span class="badge badge-pill badge-dark">NSE</span></small></h3>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 info-margin">
                            <h3><b>Signal : </b><span class="label <?php echo $label_class ?>"><?php echo $stock_signal->action ?></span></h3>
                        </div>
                    </div>

                    <div style="margin-top:50px"></div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 info-margin">
                            <h5><b>Company : </b><?php echo $stock_info->company_name ?></h5>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 info-margin text-left">
                            <h5><b>ISIN : </b> <span class="label label-default"><?php echo $stock_info->isin ?></span></h5>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 info-margin text-left">
                            <h5><b>Series : </b><span class="label label-default"><?php echo $stock_info->series ?></span></h5>
                        </div>
                    </div>
                </div>

                <div style="margin-top:50px"></div>

                <div class="">
                <h4><?php echo $stock_signal->symbol ?> Last Trade Day</h4>
                <div class="row">
                    <div class="col-lg-6">
                        
                        <div style="margin-top:50px"></div>
                        <table class="table">
                            <tr><th>Symbol</th><td><?php echo $stock_signal->symbol ?></td></tr>
                            <tr><th>Date</th><td><?php echo $stock_signal->trade_date ?></td></tr>
                            <tr><th>Price</th><td><i class="fa fa-rupee-sign"></i> <?php echo $stock_signal->close_price ?></td></tr>
                            <tr><th>Change</th><td><?php echo $stock_signal->per_change ?> %</td></tr>
                            <tr><th>Traded Quantity</th><td><?php echo $stock_signal->net_traded_qty ?> Units</td></tr>
                            <tr><th>Traded Value</th><td><i class="fa fa-rupee-sign"></i> <?php echo $stock_signal->net_traded_val ?> Lakhs</td></tr>
                            <tr><td colspan="2" class="small">*All Values are of last trading day.</td></tr>
                        </table>
                    </div>
                    <div class="col-lg-6">
                        <div style="margin-top:50px"></div>
                        <div>
                            <img src="https://www.stockguru.in/candlestick-chart?symbol=<?php echo $stock_signal->symbol ?>&range=30" class="rounded" alt="Cinque Terre" width="100%"> 
                        </div>
                    </div>
                </div>
                </div>
                
                <div style="margin-top:50px"></div>

                <div class="">
                    <?php
                        $stock_signal_history_report = json_decode(file_get_contents('https://www.stockguru.in/api/v1/research/signals?apikey=asdfghjk&password=1234&action=get-signal-history&symbol='.$symbol));
                        //echo $stock_info;
                    ?>
                    <h5>Signal History</h5>
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead class="thead-light">
                                <tr align="center">
                                    <th>Date</th><th>Price</th><th>Signal</th><th>Returns</th>
                                </tr>
                            </thead>
                            <?php

                            foreach($stock_signal_history_report as $key => $value) {
                                //$data['stock_signal'] = $value;
                                //$this->load->view('reports/StockSignalWithReturns',$value);
                                $temp_row = $value;
                                ?>

                                <tr align="center">
                                    <td><?php echo $value->trade_date ?></td><td><i class="fa fa-rupee-sign"></i> <?php echo $value->close_price ?></td><td><?php echo $value->action ?></td><td><?php echo $value->pnl ?> %</td>
                                </tr>

                                <?php
                            }

                            ?>
                        </table>
                        <!--
                        <h4>If you traded echo $stock_signal->symbol of <i class="fa fa-rupee"></i> 1,00,000 then your capital would be <i class="fa fa-rupee"></i> <?php echo 100000+(100000*$value->pnl/100) ?>.</h4>
                        <h5>Profit of <i class="fa fa-rupee"></i> echo (100000*$value->pnl/100) in last 30 trading days.</h5>
                        -->
                    </div>
                </div>

                <div style="margin-top:50px"></div>

                <div class="newsleller-area">
                    <div class="container">
                        <div class="subscriber-box">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="sec-heading">
                                        <div class="heading-circle"></div>
                                        <p class="sec__meta">If you traded <b><?php echo $stock_signal->symbol ?></b> of <i class="fa fa-rupee-sign"></i> 1,00,000 then your capital would be <i class="fa fa-rupee-sign"></i> <?php echo 100000+(100000*$value->pnl/100) ?>.</p>
                                        <h2 class="sec__title">Profit of <i class="fa fa-rupee-sign"></i><?php echo (100000*$value->pnl/100) ?> in last 30 Trading Days.</h2>
                                    </div><!-- end sec-heading -->
                                </div><!-- end col-lg-7 -->
                            </div><!-- end row -->
                        </div><!-- end subscriber-box -->
                    </div><!-- end container -->
                </div>



            </div>
        </div>
    </div>
</section>
