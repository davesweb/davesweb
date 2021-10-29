<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>{{ $subject }}</title>
        <style>
            html, body {
                font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                line-height: 1.5rem;
                background-color: #CBD5E1;
            }
            .inner-body {
                background-color: #fff;
                border: 1px solid #64748B;
                padding: 1em;
                border-radius: 10px;
            }
            @media only screen and (max-width: 600px) {
                .inner-body {
                    width: 100% !important;
                }
            }
        </style>
    </head>
    <body>

        <table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
            <tr>
                <td align="center">
                    <table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                        <tr>
                            <td class="body" width="100%" cellpadding="0" cellspacing="0">
                                <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                                    <tr>
                                        <td class="content-cell">
                                            <p>
                                                Hi Dave,
                                            </p>
                                            <p>
                                                The contact form on the resume page was send, here are the details:
                                            </p>
                                            <p>
                                                <span style="font-size: 0.875rem; color: #334155;">Name: {{ $name }}</span><br />
                                                <span style="font-size: 0.875rem; color: #334155;">Email: {{ $email }}</span><br />
                                                <span style="font-size: 0.875rem; color: #334155;">Phone: {{ $phone }}</span><br />
                                                <span style="font-size: 0.875rem; color: #334155;">Subject: {{ $subject }}</span><br />
                                                <span style="font-size: 0.875rem; color: #334155;">IP address: {{ $ip }}</span><br />
                                                <span style="font-size: 0.875rem; color: #334155;">User agent: {{ $userAgent }}</span><br />
                                                <br />
                                                {!! nl2br($content) !!}
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
