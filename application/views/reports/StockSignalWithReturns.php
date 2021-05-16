<?php
    $label_class = "badge-secondary";
    if($trade_signal=="BUY") $label_class="badge-success"; elseif($trade_signal=="SELL") $label_class="badge-danger";

    //$target_link = base_url() . "stock-report?symbol=" . $symbol;
    $target_link = base_url() . "members/stock-report/" . $symbol;

    //$company_name = "";

    $heartColor = "gray";

    $strReturnsArrow = "fa fa-arrow-right";
    if($return_30d > 0) $strReturnsArrow = "fa fa-arrow-up"; elseif($return_30d < 0) $strReturnsArrow = "fa fa-arrow-down";
    $strReturnSign = "";
    if($return_30d > 0) $strReturnSign="+";
?>

<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="card signal-card">
        <div class="card-body">
            <div class="text-right">
                <!--<a href="#"><i class="fa fa-heart" style="color:<?php echo $heartColor ?>"></i></a>-->
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <blockquote>
                    <p style="white-space: nowrap;"><?php echo $symbol ?></p>
                    <h6 style="height:35px;"><small><?php echo $company_name ?></small></h6>
                    <h5><span class="badge <?php echo $label_class ?>"><?php echo $trade_signal ?></span></h5>
                    <h6><small>Signal Since<br><?php echo $signal_since_date ?> | <?php echo $signal_since_days ?> Days</small></h6>
                    </blockquote>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <p><i class="fa fa-rupee-sign"></i> <?php echo $close_price ?> <span class="badge badge-pill badge-dark">NSE</span></p>
                    <p><span class="badge badge-primary"><i class="fa fa-trophy"></i> <?php echo $strReturnSign ?><?php echo $return_30d ?> % <i class="<?php echo $strReturnsArrow ?>"></i></span></p>
                    <hr>
                    <div class="row" style="margin:5px 0px 5px 0px;">
                        <a href="<?php echo $target_link ?>" class="btn btn-light" aria-label="<?php echo $company_name ?> Returns Report - Daily Price Chart"><i class="fa fa-chart-line" style="font-size:25px;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
