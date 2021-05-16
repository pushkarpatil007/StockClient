<?php
    $label_class = "label-default";
    if($trade_signal=="BUY") $label_class="label-success"; elseif($trade_signal=="SELL") $label_class="label-danger";

    //$target_link = base_url() . "stock-report?symbol=" . $symbol;
    $target_link = base_url() . "members/stock_report/" . $symbol;

    $heartColor = "gray";
?>

<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="text-right">
                    <!--<a href="#"><i class="fa fa-heart" style="color:<?php echo $heartColor ?>"></i></a>-->
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <blockquote>
                        <p style="white-space: nowrap;"><?php echo $symbol ?></p>
                        <h6 style="height:35px;"><?php echo $company_name ?></h6>
                        <p><span class="label <?php echo $label_class ?>"><?php echo $trade_signal ?></span></p>
                        <h6>Since <?php echo $signal_since_date ?><br><?php echo $signal_since_days ?> Days</h6>
                        </blockquote>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <p><i class="fa fa-rupee-sign"></i> <?php echo $close_price ?> <span class="badge">NSE</span></p>
                        <hr>
                        <div class="row" style="margin:5px 0px 5px 0px;">
                            <a href="<?php echo $target_link ?>" class="btn btn-default" aria-label="<?php echo $company_name ?> Returns Report - Daily Price Chart"><i class="fa fa-line-chart fa-fw" style="font-size:20px;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
