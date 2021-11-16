
<style>html,body { padding: 0; margin:0; }</style>
<div style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
        <tbody>
        <tr>
            <td align="center" valign="center" style="text-align:center; padding: 40px">
                <a href="https://keenthemes.com/" rel="noopener" target="_blank">
                    <img alt="Logo" src="{{ asset('backend/assets/media/logos/logo.png') }}" class="h-45px" />
                </a>
            </td>
        </tr>
        <tr>
            <td align="left" valign="center">
                <div style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
                    <!--begin:Email content-->
                    <div style="padding-bottom: 30px; font-size: 17px;">
                        <strong>Welcome {{ $item['email'] }}!</strong>
                    </div>
                    <div style="padding-bottom: 30px">We are happy you have joined {{ env('APP_NAME') }} Community</div>
                    <div style="padding-bottom: 30px">A quick word about our company .</div>
                    <div style="padding-bottom: 50px">{{ env('APP_NAME') }}  is a crypto currency service that provides two core products -
                    <div style="padding-bottom: 50px">cryptocurrency wallets and card. The company is intended to meet needs of each client to provide cryptocurrency users with financial freedom and to extend cryptocurrency usage all-round the world</div>
                    <div style="padding-bottom: 30px">So far, {{ env('APP_NAME') }} has encouraged several partners and investors. Be part of our idea realization, thus, in one step to financial freedom.</div>
                    <div style="padding-bottom: 50px">Thanks for yor believe in us.</div>

                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>
</div>
