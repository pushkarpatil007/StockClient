<?php
$report = json_decode(file_get_contents('https://www.stockguru.in/api/v1/research/reports?apikey=asdfghjk&password=1234&action=get-report&report-name=penny-stocks'));
//echo $report;
$result_signal_date = json_decode(file_get_contents('https://www.stockguru.in/api/v1/research/signals?apikey=asdfghjk&password=1234&action=get-signal-date'));

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
                        <h2 class="breadcrumb__title">Multibagger Penny Stocks.</h2>
                        <ul class="breadcrumb__list">
                            <li class="active__list-item"><a href="<?php echo base_url() ?>members">Members</a></li>
                            <li>Multibagger Penny Stocks</li>
                        </ul>
                    </div><!-- end breadcrumb-inner -->
                    <div class="text-outline">Penny Stocks</div>
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
            
            <h3>Multibagger Penny Stocks</h3>
            <p>Trade Signals For : <b><?php echo $result_signal_date->signal_date ?></b></p>
            <div class="row">
                <?php
                foreach($report as $key => $value) {
                    //$data['stock_signal'] = $value;
                    $this->load->view('reports/StockSignalWithReturns', $value);
                }
                ?>
            </div>
        </div>
    </div>
</section>