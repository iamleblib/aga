
<style>html,body { padding: 0; margin:0; }</style>
<div style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
        <tbody>
        <tr>
            <td align="center" valign="center" style="text-align:center; padding: 40px">
                <a href="https://keenthemes.com/" rel="noopener" target="_blank">
                    <img alt="Logo" src="{{ asset('backend/assets/media/logos/logo.png') }}" width="40%" class="h-45px" />
                </a>
            </td>
        </tr>
        <tr>
            <td align="left" valign="center">
                <div style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
                    <!--begin:Email content-->
                    <div style="padding-bottom: 30px; font-size: 17px;">
                        <strong>Hello {{ ucfirst(auth()->user()->username) }}!</strong>
                    </div>
                    <div style="padding-bottom: 20px">Your {{ env('APP_NAME') }} password was just changed.</div>
                    <div style="padding-bottom: 40px">If you didn't change your password, please contact our
                        <a href="{{ route('home') }}" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7; font-weight: bold">support team</a>. Your security is very important to us!</div>
                    <!--end:Email content-->
                    <div style="padding-bottom: 10px">Kind regards,
                        <br>{{ env('APP_NAME') }} Team.
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>

</div>
