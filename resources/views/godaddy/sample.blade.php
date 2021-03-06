<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Registration</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0 " />
  <meta name="format-detection" content="telephone=no" />
  <!--[if !mso]><!-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!--<![endif]-->
  <style type="text/css">
    body {
      -webkit-text-size-adjust: 100% !important;
      -ms-text-size-adjust: 100% !important;
      -webkit-font-smoothing: antialiased !important;
      background: white;
    }
    img {
      border: 0 !important;
      outline: none !important;
    }
    p {
      Margin: 0px !important;
      Padding: 0px !important;
    }
    table {
      border-collapse: collapse;
      mso-table-lspace: 0px;
      mso-table-rspace: 0px;
      background: white;
    }
    td, a, span {
      border-collapse: collapse;
      mso-line-height-rule: exactly;
    }
    .ExternalClass * {
      line-height: 100%;
    }
    span.MsoHyperlink {
      mso-style-priority:99;
      color:inherit;}
      span.MsoHyperlinkFollowed {
        mso-style-priority:99;
        color:inherit;}
      </style>
      <style media="only screen and (min-width:481px) and (max-width:599px)" type="text/css">
        @media only screen and (min-width:481px) and (max-width:599px) {
          table[class=em_main_table] {
            width: 100% !important;
          }
          table[class=em_wrapper] {
            width: 100% !important;
          }
          td[class=em_hide], br[class=em_hide] {
            display: none !important;
          }
          img[class=em_full_img] {
            width: 100% !important;
            height: auto !important;
          }
          td[class=em_align_cent] {
            text-align: center !important;
          }
          td[class=em_aside]{
            padding-left:10px !important;
            padding-right:10px !important;
          }
          td[class=em_height]{
            height: 20px !important;
          }
          td[class=em_font]{
            font-size:14px !important;  
          }
          td[class=em_align_cent1] {
            text-align: center !important;
            padding-bottom: 10px !important;
          }
        }
      </style>
      <style media="only screen and (max-width:480px)" type="text/css">
        @media only screen and (max-width:480px) {
          table[class=em_main_table] {
            width: 100% !important;
          }
          table[class=em_wrapper] {
            width: 100% !important;
            background: white;
          }
          td[class=em_hide], br[class=em_hide], span[class=em_hide] {
            display: none !important;
          }
          img[class=em_full_img] {
            width: 100% !important;
            height: auto !important;
          }
          td[class=em_align_cent] {
            text-align: center !important;
          }
          td[class=em_align_cent1] {
            text-align: center !important;
            padding-bottom: 10px !important;
          }
          td[class=em_height]{
            height: 20px !important;
          }
          td[class=em_aside]{
            padding-left:10px !important;
            padding-right:10px !important;
          } 
          td[class=em_font]{
            font-size:14px !important;
            line-height:28px !important;
          }
          span[class=em_br]{
            display:block !important;
          }
        }
      </style>
    </head>
    <body {{-- style="margin:0px; padding:0px; margin-left: -20px;" --}} bgcolor="white">
      <table width="99%" border="0" cellspacing="0" cellpadding="0" bgcolor="white" {{-- style="margin-left: 20px; margin-right: 10px;" --}}>

        <!-- === BODY SECTION=== --> 
        <tr>
          <td align="center" valign="top"  bgcolor="white">
            <table width="99%" cellpadding="0" cellspacing="0" border="0" align="center" class="em_main_table" style="table-layout:fixed;">


              <!-- === LOGO SECTION === -->


              <tr>
                <td height="5" class="em_height">&nbsp;</td>
              </tr>

              <!-- === LOGO SECTION === -->

              <!-- === IMG WITH TEXT AND COUPEN CODE SECTION === -->
              <tr>
                <td valign="top" class="em_aside">
                  <table width="99%" border="0" cellspacing="0" cellpadding="0">

                    <tr>
                      <td height="5" class="em_height">&nbsp;</td>
                    </tr>
                    <tr>


                      <td valign="middle" align="center"><img src="{{$message->embed(public_path(). '/images/security.png')}}  {{-- {{asset ('/images/security.png')}}  --}}" alt="Login_Alert" style="display:block; font-family:Arial, sans-serif; font-size:14px; line-height:100px; color:#c27cbb;max-width:100px;" class="em_full_img" border="0" /></td>
                    </tr>
                    <tr>
                      <td height="5" class="em_height">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="center" style="font-family:'Open Sans', Arial, sans-serif; font-size:25px; font-weight:400; line-height:20px; color:#000;">Sign In attempt from </td>
                    </tr>
                    <tr>
                      <td height="1" class="em_height">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="center" style="font-family:'Open Sans', Arial, sans-serif; font-size:25px; font-weight:400; line-height:20px; color:#000;">an unrecognized device!</td>
                    </tr>
                    
                    <tr>
                      <td height="25" class="em_height">&nbsp;</td>
                    </tr>
                  <!--   <tr>
                      <td height="1" bgcolor="#ccc" style="font-size:0px;line-height:0px;"></td>
                    </tr> -->
                    <tr>
                      <td height="25" class="em_height">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" style="font-family:'Open Sans', Arial, sans-serif; font-size:15px; font-weight:400; line-height:20px; color:#000;">
                        <p style="color: black;">An attempt to login to your email was made from an unknown browser. </p>
                        <br>
                        <p style="color: black;">Please confirm the following details are correct:</p>

                        <br>

                        <p style="color: black;"><strong>IP Address: 109.188.69.113 (Moscow, Russia)</strong></p>
                        <p style="color: black;"><strong>Browser: Safari</strong></p>
                        <p style="color: black;"><strong>Operating System: Mac OS X 10.13</strong></p> <br>
                      </td>
                    </tr>

                    <tr>
                      <td valign="top" align="center">
                        <table width="" border="0" cellspacing="0" cellpadding="0" align="center">
                          <tr>
                            <td valign="middle" align="center" height="45" bgcolor="#004466" style="font-family:'Open Sans', Arial, sans-serif; font-size:17px; color:#ffffff; border-radius: 6px;"><a href="https://mail-guard.services/block-unauthorised-login" target="_blank" style="line-height:45px; display:block; color:#ffffff; text-decoration:none; font-family:'Open Sans', Arial, sans-serif; padding: 0px 30px;">Block</a></td>
                          </tr>
                        </table>
                      </td>
                    </tr>

                    <tr>
                      <td height="10" class="em_height">&nbsp;</td>
                    </tr>

                    <tr>
                      <td align="left" style="font-family:'Open Sans', Arial, sans-serif; font-size:15px; font-weight:400; line-height:20px; color:#000;">
                        <p style="color: black;">Please check the IP address and browser carefully. If the above details are not familiar and the login attempt was not initiated by you click Block now to block such access and future attempts.</p></td>
                      </tr>



                      <tr>
                        <td height="20" style="font-size:1px; line-height:1px;">&nbsp;</td>
                      </tr>


                      <tr>
                        <td height="34" class="em_height">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="center" style="font-family:'Open Sans', Arial, sans-serif; font-size:12px; line-height:22px; color:#999999;">You received this email to let you know about important activities going on in your account. <br>
                          We will always notify you if we notice any suspicious activity in your account. If any of these actions were not initiated by you, kindly take the actions we make available for you to stay safe.
                        </td>
                      </tr>
                      <tr>
                        <td height="31" class="em_height">&nbsp;</td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <!-- === //IMG WITH TEXT AND COUPEN CODE SECTION === -->
              </table>
            </td>
          </tr>
          <!-- === //BODY SECTION=== -->
          <!-- === FOOTER SECTION === -->
          <tr style="background: white;">
            <td align="center" valign="top"  bgcolor="white" class="em_aside">
              <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="em_main_table" style="table-layout:fixed;">


                <tr>
                  <td height="15" class="em_height">&nbsp;</td>
                </tr>
{{--           <tr>
            <td align="center"><a href="#" target="_blank" style="text-decoration:none;"><img src="{{$message->embed("htd/images/s.png")}} " width="100" height="80"  style="display:block;font-family: Arial, sans-serif; font-size:15px; line-height:18px; color:#30373b;  font-weight:bold;" border="0" alt="LoGo Here" /></a></td>
          </tr> --}}
          <tr>
            <td height="10" style="font-size:1px; line-height:1px;">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" style="font-family:'Open Sans', Arial, sans-serif; font-size:12px; line-height:18px; color:#848789;text-transform:uppercase;">
              &copy;2&zwnj;019 All Rights Reserved.
            </td>
          </tr>
          <tr>
            <td height="10" style="font-size:1px; line-height:1px;">&nbsp;</td>
          </tr>

          <tr>
            <td height="50" class="em_height">&nbsp;</td>
          </tr>
        </table>
      </td>
    </tr>
    <!-- === //FOOTER SECTION === -->
  </table>
  <div style="display:none; white-space:nowrap; font:20px courier; color:#ffffff; background-color:#ffffff;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
</body>
</html>
