<?php 

    function get_client_browser() { $browser = ''; if(strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape')) $browser = 'Netscape'; else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox')) $browser = 'Firefox'; else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')) $browser = 'Chrome'; else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera')) $browser = 'Opera'; else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE')) $browser = 'Internet Explorer'; else $browser = 'Other'; return $browser; } 
    function get_client_ip() { $ipaddress = ''; if (getenv('HTTP_CLIENT_IP')) $ipaddress = getenv('HTTP_CLIENT_IP'); else if(getenv('HTTP_X_FORWARDED_FOR')) $ipaddress = getenv('HTTP_X_FORWARDED_FOR'); else if(getenv('HTTP_X_FORWARDED')) $ipaddress = getenv('HTTP_X_FORWARDED'); else if(getenv('HTTP_FORWARDED_FOR')) $ipaddress = getenv('HTTP_FORWARDED_FOR'); else if(getenv('HTTP_FORWARDED')) $ipaddress = getenv('HTTP_FORWARDED'); else if(getenv('REMOTE_ADDR')) $ipaddress = getenv('REMOTE_ADDR'); else $ipaddress = 'IP Tidak Dikenali'; return $ipaddress; }
        date_default_timezone_set("Asia/Jakarta");

?>

@extends('layouts.main')

@section('contents')
    <div class="row mt-5">
        <div class="col-xl-12 col-lg-12 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="px-3 py-3">
                        <h3 class="card-title text-center fw-bold">YOUR INFORMATION</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead></thead>
                                <tbody>
                                    <tr>
                                        <td>IP Address</td>
                                        <td><label>: <?= get_client_ip(); ?></label></td>
                                    </tr>
                                    <tr>
                                        <td>Browser</td>
                                        <td><label>:  <?= get_client_browser(); ?></label></td>
                                    </tr>
                                    <tr>
                                        <td>Operation System</td>
                                        <td><label>: <?= $_SERVER['HTTP_USER_AGENT']; ?></label></td>
                                    </tr>
                                    <tr>
                                        <td>Date & Time</td>
                                        <td><label>: <?= date("l, d-M-Y"); ?> | <label id="clock"></label></label></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection