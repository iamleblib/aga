<!DOCTYPE html>
<html>
<head>
    <title>{{ env('APP_NAME') }}</title>
</head>
<body>

<style>html,body { padding: 0; margin:0; }</style>
<div style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
        <tbody>
        <tr>
            <td align="center" valign="center" style="text-align:center; padding: 40px">
                <a href="https://keenthemes.com/" rel="noopener" target="_blank">
                    <img alt="Logo" src="{{ asset('backend/assets/media/logos/logo.png') }}" width="50%" class="h-45px" />
                </a>
            </td>
        </tr>
        <tr>
            <td align="left" valign="center">
                <div style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
                    <!--begin:Email content-->
                    <div style="padding-bottom: 30px; font-size: 17px;">
                        <strong>Welcome to {{ env('APP_NAME') }}!</strong>
                    </div>
                    <div style="padding-bottom: 30px">Below is your verification code to access your dashboard.</div>
                    <div style="padding-bottom: 40px; text-align:center;">
                        <button type="button" style="text-decoration:none;display:inline-block;text-align:center;padding:0.75575rem 1.3rem;font-size:0.925rem;line-height:1.5;border-radius:0.35rem;color:#ffffff;background-color:#009EF7;border:0px;margin-right:0.75rem!important;font-weight:600!important;outline:none!important;vertical-align:middle" target="_blank">{{ $details['code'] }}</button>
                    </div>
                    <div style="padding-bottom: 30px">This pin will expire in 10 minutes.</div>
                    <div style="border-bottom: 1px solid #eeeeee; margin: 15px 0"></div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>

</body>
</html>
