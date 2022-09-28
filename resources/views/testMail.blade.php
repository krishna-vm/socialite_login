<!DOCTYPE html>
<html>
<head>
    <title>welcome to hms</title>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
   /* a:link, a:visited {
  background-color:rgb(100, 243, 255);
  color: white;
  color: black;
  padding: 8px 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 5px;
}
a:hover, a:active {
  background-color:rgb(93, 213, 255);
} */
/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}
a.link{
  font-family: 'Google Sans',Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
    line-height: 16px;
    color: #ffffff;
    font-weight: 400;
    text-decoration: none;
    font-size: 14px;
    display: inline-block;
    padding: 10px 24px;
    background-color: #2877fa;
    border-radius: 5px;
    min-width: 90px;
}
a.link:hover {
  background-color:#69a0fa;
}

</style>
</head>



<body style="background-color:#f0fff0;">
<div style="border-style: solid;
    border-width: thin;
    border-color: #dadce0;
    border-radius: 8px;
    padding: 10px 20px;
    text-align: center;">
    <div style="font-weight: 700;font-size: 1.125rem;text-align:center; margin:1rem 0rem">  !</div>
<div style="background-color:#e0ffff;justify-content: center;text-align: center;margin:1rem 16rem; border-radius: 0.75rem;">

    <div style="background-color: #7dd3fc;height: 4rem ;padding-top:4px;;border-radius: 0.75rem 0.75rem 0rem 0rem;text-align:center;">
   {{-- <img src="{{url('/images/staff.png')}}" alt="wrong" style="width:60px;height:60px"> --}}
    </div>

        <div style="padding:1rem 0rem;">
        <div style="font-weight: 700;font-size: 1.125rem;text-align:center; margin-bottom:1rem "> Welcome to {{$name}}!</div>
           <div style="font-size: 1rem;text-align:center; margin-bottom:1rem"> <p>Hi, Sir/Madam <br>
          you register is conformed for the  </p></div>
        <div style="font-weight: 500;font-size: 1.110rem;text-align:center;">Here's your login information:</div>
                <div style="font-size: 1rem;line-height: 1.25rem; padding:1rem; text-align:center;  ">

                    Your registered User id is :{{$email}} <a style="font-weight: 700;"><br/></a>
                    {{-- Your registered Password is : <span style="font-weight: 700;"></span> --}}

                </div>
                <a  class="link" href='http://127.0.0.1:8000/login' target="_blank" >Log in Now</a>
        </div>
        <div style="font-size: 1rem;text-align:center;padding-bottom:1rem;"> <p>Thanks </p>
       </div>
        </div>
        <div >
            <p><strong>Questions?</strong><br>
         Reply to this email or get in touch with us at </p>
        </div>

</div>
</body>

</html>
