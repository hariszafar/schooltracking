<html>
    <head></head>
    <body>
        <div class="journal-content-article"> 
            <div style="font-family:Arial, Helvetica, sans-serif; font-style: normal; font-weight: normal; font-size: 13px; vertical-align: top; text-align: left; background-color:#FFFFFF; width: 700px; "> 
                <table id="tblMain" width="700" style="" border="0" cellspacing="0"> 
                    <tr>
                        <td>
                            Welcome {{ $data['name'] }},<br><br>
                            <p>Your account has been created. Please click the link below to verify your email.</p>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="{{ env('APP_URL') }}verifyemail/{{ $data['token'] }}">Verification Link</a></td>
                    </tr>
                    <tr>
                        <td style="padding: 20px;" width="479" valign="top">
                            <p>Respectfully,</p>
                            <p> </p>
                            <p>E-Academy</p>
                            <p><a href="{{ env('APP_URL') }}">E-Academy</a></p>
                        </td> 
                    </tr>
                </table> 
            </div> 
        </div>
    </body>
</html>