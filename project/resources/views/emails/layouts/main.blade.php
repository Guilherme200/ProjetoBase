<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>

<style>
    body {
        background-color: #fafd38;
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }

    .header {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%;
        background-color: #000000;
    }

    .container {
        font-family: sans-serif;
        font-size: 14px;
        vertical-align: top;
        display: block;
        Margin: 0 auto;
        max-width: 580px;
        padding: 10px;
        width: 580px;
    }

    .content {
        box-sizing: border-box;
        display: block;
        Margin: 0 auto;
        max-width: 580px;
        padding: 10px;
    }

    .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0;
    }

    .main {
        margin-top: 5px;
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%;
        background: #ffffff;
        border-radius: 3px;
    }

    .wrapper {
        font-family: sans-serif;
        font-size: 14px;
        vertical-align: top;
        box-sizing: border-box;
        padding: 20px;
    }

    .footer {
        clear: both;
        Margin-top: 10px;
        text-align: center;
        width: 100%;
    }

    .content-block {
        font-family: sans-serif;
        vertical-align: top;
        padding-bottom: 10px;
        padding-top: 10px;
        font-size: 12px;
        color: #999999;
        text-align: center;
    }
</style>

<body>
<table border="0" cellpadding="0" cellspacing="0" class="header">
    <tr>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
        <td class="container">
            <div class="content">
                <!-- START CENTERED WHITE CONTAINER -->
                <span class="preheader">
                    This is preheader text. Some clients will show this text as a preview.
                </span>

                <table class="main">
                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper">
                            <table
                                border="0"
                                cellpadding="0"
                                cellspacing="0"
                                style="border-collapse: separate;
                                mso-table-lspace: 0pt;
                                mso-table-rspace: 0pt; width: 100%;">
                                <tr>
                                    <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">
                                        <p style="
                                            font-family: sans-serif;
                                            font-size: 14px;
                                            font-weight: normal;
                                             margin: 0;
                                             margin-bottom: 15px;
                                           ">
                                            @yield('content')
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- END MAIN CONTENT AREA -->
                </table>

                <!-- START FOOTER -->
                <div class="footer">
                    <table
                        border="0"
                        cellpadding="0"
                        cellspacing="0"
                        style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                        <tr>
                            <td class="content-block">
                                <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">
                                    <img style="width: 25%"
                                         src="file://{{ resource_path('assets/img/logo.png') }}">
                                </span>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->
                <!-- END CENTERED WHITE CONTAINER -->
            </div>
        </td>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
    </tr>
</table>
</body>
</html>
